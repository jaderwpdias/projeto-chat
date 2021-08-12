<?php 
namespace Chatbot\Mensagem;

interface Mensagem {

	public function __construct(string $id) :void;
    public function mensagem(string $mensagemTexto) :array;

}