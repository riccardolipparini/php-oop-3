<!-- /
     
          Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo
     */ -->
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pcs</title>
</head>
<body>
    <?php

    class Pc{
        private $uniqueCode;
        private $model;
        private $price;
        private $brand;

        //construct
        public function __construct($uniqueCode, $price){
            $this -> setUniqueCode($uniqueCode);
            $this -> setPrice($price);
        }

        //get,set
        public function setUniqueCode($uniqueCode){
            
             if(strlen($uniqueCode) < 6 || strlen($uniqueCode) >= 7 )
             throw new Exception("Scrivi un uniqueCode corretto");

            $this -> uniqueCode = $uniqueCode;
        }
        public function getUniqueCode(){
            return $this -> $uniqueCode;
        }

        public function setModel($model){
             if(strlen($model) < 3 || strlen($model) > 20 )
             throw new Exception("Modello sbagliato");
            $this -> model = $model;
        }
        public function getModel(){
            return $this -> model;
        }

        public function setPrice($price){
             if($price > 2000)
             throw new Exception("prezzo errato");
            $this -> price = $price;
        }
        public function getPrice(){
            return $this -> price;
        }

        public function setBrand($brand){
            if(strlen($brand) < 3 || strlen($brand) > 20 )
            throw new Exception("Modello/Brand sbagliato");
            $this -> brand = $brand;
        }
        public function getBrand(){
            return $this -> brand;
        }

        //printfunction
        public function printMe(){
            echo $this;
        }
        //toString
        public function __toString(){
            return $this -> brand . ", " . $this -> model . " = " . $this -> price . " [ " . $this -> uniqueCode . " ]";
        } 
    }

    try{
    $pc = new Pc("123456", "2000");
    $pc -> setModel("156xsuperiormega");
    $pc -> setBrand("Asus");
    echo $pc;
    }catch (Exception $e){
        echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
    }
    
    
    ?>
    
</body>
</html>