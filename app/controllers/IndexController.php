<?php

class indexController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Index');
        parent::initialize();
    }

    public function indexAction()
    {
	echo "Working";

 $robot       = new zwhois();
$robot->name = "Chirag";
$robot->type = "Chinmay";
if ($robot->save() == false) {
    echo "Umh, We can't store robots right now: \n";
    foreach ($robot->getMessages() as $message) {
        echo $message, "\n";
    }
} else {
    echo "Great, a new robot was saved successfully!";
}

//$robot = zwhois::findFirst();
//echo "The robot name is ", $robot->name, "\n";

    }
}

