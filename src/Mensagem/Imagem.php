<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Chatbot\Mensagem;

/**
 * Description of Imagem
 *
 * @author jaderwillianpereiradias
 */
class Imagem {
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
                    'type' => 'image',
                    'pauload' => [
                        'url' => $mensagemTexto
                    ]
                ]
            ]
        ];
    }
}
