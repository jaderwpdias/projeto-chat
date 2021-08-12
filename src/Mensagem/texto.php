<?php

namespace Chatbot\Mensagem;

/**
 * Description of texto
 *
 * @author jaderwillianpereiradias <jader.dias@live.com>
 */
class texto implements mensagem {
    private $id;

    public function __construct(string $id){
        $this->id = $id;
    }

    public function mensagem(string $mensagemTexto) :array{
        return [
            'recepient' => [
                'id' => $this->id
            ],
            'message' => [
                'text' => $mensagemTexto,
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}
