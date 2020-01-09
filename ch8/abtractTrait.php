<?phptrait Message {
    private $message;

    function alert() {
        $this->defin();
        echo $this->message;
    }
    abstract function define();
 }
 
 class Messenger {
     use Message;
     function define() {
         $this->message = "Custom Message";
     }
 }

 $messenger = new Messenger;
 $messenger->alert();
 ?>
 