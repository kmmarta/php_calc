<?php
// W skrypcie definicji kontrolera nie trzeba dołączać żadnego skryptu inicjalizacji.
// Konfiguracja, Messages i Smarty są dostępne za pomocą odpowiednich funkcji.
// Kontroler ładuje tylko to z czego sam korzysta.

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';


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
		
		return ! getMessages()->isError();
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
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		//getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','Oblicz rate');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
