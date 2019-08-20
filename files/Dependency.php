<!-- Code below -->

<?php
define('BR', '<br>');

class MessageInjection
{
    public $message;

    public function Message($message)
    {
        $this->message = $message;
        echo 'Message : '.$this->message.BR;
    }
}

class Dependency
{
    public function __construct(MessageInjection $message)
    {
        $this->message = $message;
    }

    public function create()
    {
        $this->message->Message('User created successfully');
    }

    public function update()
    {
        $this->message->Message('User updated successfully');
    }
    public function delete()
    {
        $this->message->Message('User deleted successfully');
    }
}

$injection = new MessageInjection();
$DependencyInjection = new Dependency($injection);
$DependencyInjection->create();
$DependencyInjection->update();
$DependencyInjection->delete();
