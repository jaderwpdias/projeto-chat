<?php

namespace Chatbot\Mensagem;

use PHPUnit\Framework\TestCase;

class textoTest extends TestCase {

	public function testRetornaArray(){
		$actual = (new texto(1))->mensagem('oi');
		$expected = [
			'recepient' => [
				'id' => 1
			],
			'message' => [
				'text' => 'oi',
				'metadata' => 'DEVELOPER_DEFINED_METADATA'
			]
		];
		$this->assertEquals($actual, $expected);
	}
}