<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator { 
        private $x; 
        private $y;

        public function __construct($bil1, $bil2) {
            // code..
            $this-> x= $bil1;
            $this-> y= $bil2;

        }
        public function tambah () {
            $hasil = $this-> x + $this->y;
            return $hasil;
        }
        public function kurang () {
            $hasil = $this-> x - $this->y;
            return $hasil;
        }
        public function bagi () {
            $hasil = $this-> x / $this->y;
            return $hasil;
        }
        public function kali () {
            $hasil = $this-> x * $this->y;
            return $hasil;
        }

        
    }
    echo "<form action= '' method='post' >
        Bilangan 1 : <input type= 'text' name='bil1' />
                     <select name ='operator'>
                     <option value='tambah'> + </option>
                     <option value='kurang'> - </option>
                     <option value='bagi'> / </option>
                     <option value='kali'> * </option>
                     </select>
        Bilangan 2 : <input type= 'text' name='bil2' />
        <input type='submit' name='hitung' value='Hitung' />
        </form>";
        
        
        if (isset($_POST['hitung'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $operator = $_POST['operator'];
            $calculator = new Calculator ($bil1, $bil2);
            switch ($operator) {
                case 'tambah':
                    echo "Hasil dari" . $bil1 . " + " . $bil2 . " = " . $calculator->tambah();
                    break;
                case 'kurang':
                    echo "Hasil dari" . $bil1 . " - " . $bil2 . " = " . $calculator->kurang();
                    break;
                case 'bagi':
                    echo "Hasil dari" . $bil1 . " / " . $bil2 . " = " . $calculator->bagi();
                    break;
                case 'kali':
                    echo "Hasil dari" . $bil1 . " * " . $bil2 . " = " . $calculator->kali();
                    break;
            }
        }              



    
   
?>