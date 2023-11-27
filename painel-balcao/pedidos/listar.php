<?php 

require_once("../../conexao.php");
$pagina = 'pedidos';
$txtbuscar = @$_POST['txtbuscar'];

echo '
<div class="table-responsive">
<table class="table table-sm mt-3">
	<thead class="thead-light">
		<tr>
			<th scope="col">Hora</th>
			<th scope="col">Tipo PGTO</th>
			<th scope="col">Status</th>
			<th scope="col">Troco</th>
			<th scope="col">Pago</th>
			<th scope="col">Ações</th>
						
		</tr>
	</thead>
	<tbody>';

	

	if($txtbuscar == ''){
		// $res = $pdo->query("SELECT * from vendas where data = curDate() and pago != 'Sim' order by id desc LIMIT $limite, $itens_por_pagina");
		$res = $pdo->query("SELECT * from vendas where data = curDate() and pago != 'Sim' order by id desc ");
	}else{
		$res = $pdo->query("SELECT * from vendas where data = '$txtbuscar' and pago != 'Sim' order by id desc ");
	}
	
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);


		//TOTALIZAR OS REGISTROS PARA PAGINAÇÃO
		$res_todos = $pdo->query("SELECT * from vendas");
		$dados_total = $res_todos->fetchAll(PDO::FETCH_ASSOC);
		$num_total = count($dados_total);


	for ($i=0; $i < count($dados); $i++) { 
			foreach ($dados[$i] as $key => $value) {
			}

			$id = $dados[$i]['id'];	
			$hora = $dados[$i]['hora'];
			$total = $dados[$i]['total'];
			$tipo_pgto = $dados[$i]['tipo_pgto'];
			$status = $dados[$i]['status'];
			$pago = $dados[$i]['pago'];
			$troco = $dados[$i]['troco'];
			$cliente = $dados[$i]['cliente'];
			$obs = $dados[$i]['obs'];
		

			if($status == 'Iniciado'){
				$classe = 'bg-info';
			}else if($status == 'Preparando'){
				$classe = 'bg-danger';
			}else if($status == 'Despachado'){
				$classe = 'bg-warning';
			}else if($status == 'Concluído'){
				$classe = 'bg-success';
			}else{
				$classe = '';
			}

			



			

echo '
		<tr class="'.$classe.'">

			
			<td>'.$hora.'</td>
			
			<td>R$ '.$tipo_pgto.'</td>

			<td>';

			echo $status;
			
			if($status == 'Iniciado'){
				$stat = 'Preparando';
				echo '
				<a href="" title="Status para Preparando" onclick="mudarStatus('.$id.',\''.$stat.'\')" id="btn-carrinho">
				<i class="fas fa-square ml-1 '.$classe.'"></i>
				</a>
				';
			}else if($status == 'Preparando'){
				$stat = 'Despachado';
				echo '
				<a href="" title="Status para Despachado" onclick="mudarStatus('.$id.',\''.$stat.'\')" id="btn-carrinho">
				<i class="fas fa-square ml-1 '.$classe.'"></i>
				</a>
				';
			}else if($status == 'Despachado'){
				$stat = 'Concluído';
				echo '
				<a href="" title="Status para Concluído" onclick="mudarStatus('.$id.',\''.$stat.'\')" id="btn-carrinho">
				<i class="fas fa-square ml-1 '.$classe.'"></i>
				</a>
				';
			}else if($status == 'Concluído'){
				$stat = 'Pago';
				echo '
				<a href="" title="Finalizar Pagamento" onclick="mudarStatus('.$id.',\''.$stat.'\')" id="btn-carrinho">
				<i class="fas fa-square ml-1 '.$classe.'"></i>
				</a>
				';
			}else{
				$classe = '';
			}

			echo '</td>

			<td>'.$troco.'</td>
			<td>'.$pago.'</td>
			<td>
				<a title="Ver Produtos" href="" onclick="produtosModal('.$id.')" data-toggle="modal" data-target="#modal-produtos"><i class="fab fa-product-hunt '.$classe.'"></i></a>

				<a title="Dados Cliente" href="" onclick="clienteModal('.$id.')" data-toggle="modal" data-target="#modal-cliente"><i class="fas fa-user '.$classe.' ml-1"></i></a> 


				<a title="Gerar Comprovante" href="rel/comprovante_class.php?id='.$id.'" target="_blank"><i class="fas fa-clipboard-list '.$classe.' ml-1"></i></a>


				';




				if($obs != ''){



				echo '<a title="Observações do Pedido" href="" onclick="obsModal(\''.$obs.'\')" data-toggle="modal" data-target="#modal-obs"><i class="fas fa-sticky-note '.$classe.' ml-1"></i></a> ';

					}

			echo '	
			</td>
			
			
			
		</tr>';

	}

echo  '
	</tbody>
</table>
</div> ';




?>