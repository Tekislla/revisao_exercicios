<?php

	function soma(int $param1, int $param2) {
	    $result = $param1 + $param2;
        return $result;

    }

	function seculoDoAno(int $ano) {
        $seculo = $ano / 100;
        return ceil($seculo);
    	
	}

	function palindroma($palavra){
	    if (strlen($palavra) >= 1) {
	        $inversa = strrev($palavra);
        }

	    if ($inversa == $palavra) {
	        return true;
        } else {
	        return false;
        }

	}

	function maiorProdutoEntreVizinhos($array){
	    for ($i = 0;$i < count($array); $i++) {
	        for ($j = 0; $j < count($array); $j++) {
	            $conta1 = $array[$i] * $array[$j];
	            $conta2 = $array[$i + 1] * $array[$j + 1];
                if ($conta1 > $conta2) {
                    return $conta1;
                }

            }

        }

	}



	//Nao altere nada desta linha em diante
	$acertos        = 0;
	$erros          = 0;

	function testeFuncoes($esperado, $obtido){
		global $erros, $acertos;

		if (($esperado == $obtido) && !empty($obtido)) {
			$acertos++;
		}else{
			$erros++;
		}
	}

	//Testes
	//soma
	testeFuncoes(soma(0,1), 1);
	testeFuncoes(soma(2,2), 4);
	testeFuncoes(soma(-2,1), -1);

	//ano
	testeFuncoes(seculoDoAno(1905), 20);
	testeFuncoes(seculoDoAno(1700), 17);
	testeFuncoes(seculoDoAno(1988), 20);

	//palindroma
	testeFuncoes(palindroma("aabaa"), true);
	testeFuncoes(palindroma("abac"), false);
	testeFuncoes(palindroma("a"), true);

	//produto
	testeFuncoes(maiorProdutoEntreVizinhos([3, 6, -2, -5, 7, 3]), 21);
	testeFuncoes(maiorProdutoEntreVizinhos([-1, -2]), 2);
	testeFuncoes(maiorProdutoEntreVizinhos([5, 1, 2, 3, 1, 4]), 6);

	//Resultado
	echo "acertos: $acertos\n";
	echo "erros: $erros\n";