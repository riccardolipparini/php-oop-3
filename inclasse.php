<!-- /
     
          Definire classe User:
         ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
     */ -->
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPassw</title>
</head>
<body>
    <?php

    class User{
        private $user;
        private $password;
        private $age;

        //construct
        public function __construct($user, $password){
            $this -> setUser($user);
            $this -> setPassword($password);
        }

        //get,set
        public function setUser($user){
            if(strlen($user) < 3 || strlen($user) > 16)
            throw new Exception("Scrivi un user compreso tra i 3 e i 16 caratteri");

            $this -> user = $user;
        }
        public function getUser(){
            return $this -> user;
        }

        public function setPassword($password){
            // if ()
            // throw new Exception("La password deve contenere almeno un carattere speciale");
            $this -> password = $password;
        }
        public function getPassword(){
            return $this -> password;
        }

        public function setAge($age){
            if(!is_numeric($age))
            throw new Exception("Inserisci nuovamente età");
            $this -> age = $age;
        }
        public function getAge(){
            return $this -> age;
        }

        //printfunction
        public function printMe(){
            echo $this;
        }
        //toString
        public function __toString(){
            return $this -> user . ": " . $this -> age . " [ " . $this -> password . " ]";
        } 
    }

    try{
    $usr = new User("Riccardo", "sassaspp");
    $usr -> setAge("25");
    echo $usr;
    }catch (Exception $e){
        echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";
    }
    
    
    ?>
    
</body>
</html>