<?php

namespace Chatbot\Mensagem;

class Audio implements Mensagem {

    private $id;

    public function __construct(string $id): void {
        $this->id = $id;
    }

    public function mensagem(string $mensagemTexto): array {
        return [
            'recipient' => [
                'id' => $this->id
            ],
            'message' => [
                'attachment' => [
                    'type' => 'audio',
                    'pauload' => [
                        'url' => $mensagemTexto
                    ]
                ]
            ]
        ];
    }

}
