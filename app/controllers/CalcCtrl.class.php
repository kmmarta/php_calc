<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->a = getFromRequest('a');
		$this->form->b = getFromRequest('b');
		$this->form->c = getFromRequest('c');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->a ) && isset ( $this->form->b ) && isset ( $this->form->c ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->a == "") {
			getMessages()->addError('Nie podano  kwoty');
		}
		if ($this->form->b == "") {
			getMessages()->addError('Nie podano liczby lat');
		}
		if ($this->form->c == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			
		
		return ! getMessages()->isError();
	}
        if (! is_numeric ( $this->form->a )) {
				getMessages()->addError('wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->b )) {
				getMessages()->addError('wartość nie jest liczbą całkowitą');
			}
                        if (! is_numeric ( $this->form->c )) {
				getMessages()->addError('wartość nie jest liczbą całkowitą');
			}
		}
		
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->a = intval($this->form->a);
			$this->form->b = intval($this->form->b);
                        	$this->form->c = intval($this->form->c);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
            $a = $this->form->a;
            $b = $this->form->b * 12;
            $c = $this->form->c/ 100;

            $result = ($a * $c) / (12 * (1 - ((12 / (12 + $c)) ** $b))); //wzor
            $this->result->result = number_format($result, 1, ',', ' '); 
            	getMessages()->addInfo('Wykonano obliczenia.');
        }
		$this->generateView();
	
        }
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $user;

		getSmarty()->assign('user',$user);
				
		getSmarty()->assign('page_title','Kalkulator kredytowy');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
