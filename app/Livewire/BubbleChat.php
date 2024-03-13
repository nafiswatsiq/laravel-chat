<?php

namespace App\Livewire;

use Livewire\Component;

class BubbleChat extends Component
{
    public $openChat = false;

    public function openChats()
    {
        $this->openChat = !$this->openChat;
    }

    public function render()
    {
        $unreadMessages = auth()->user()->unreadMessages->count();
        if ($unreadMessages > 100) {
            $unreadMessages = '99+';
        }
        
        return view('livewire.bubble-chat', [
            'unreadMessages' => $unreadMessages,
        ]);
    }
}
