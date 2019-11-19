<?php	
    function pagination ($DataArray, $kol){
	//$kol - количество записей дл€ вывода

	// “екуща€ страница
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else $page = 1;
	  
	$total =$_GET['total']; // всего записей
	$begin = ($page * $kol) - $kol;// с какой записи выводить
	
	// до какой
	if(($total-($begin+1))>=$kol )$end =$page * $kol;
	else $end = $total;
	
	echo '<div class="album py-5 bg-primary">
    <div class="container">
      <div class="row">';
	
	$st=iconv("CP1251", "UTF-8","«аказать");
    for ($i = $begin; $i < $end; $i++){
  
		echo '<div class="col-md-4">
          <div class="card mb-4 shadow-sm border-primary">
            <img src="'.$DataArray['addressImg'][''.$i.''].'" class="card-img-top" alt="" width="100%" height="225"> 
			<div class="card-body">
              <p class="card-text">  '.$DataArray['name'][''.$i.''].' </p>
               <div class="d-flex justify-content-between align-items-center">
               <div>
				  <h3>'.$DataArray['price'][''.$i.''].'</h3>
              </div>
              <div class=" text-right">
				  <button type="button" class="btn btn-primary btn-lg" >'.$st.'</button>
              </div>
              </div>
            </div>
          </div>
        </div>
		';
    }
	echo '</div>  
	</div>
 </div> 
 <br>
<div class="col-md-12 text-center">';
	
	$str_pag = ceil($total/ $kol); //  оличество страниц дл€ пагинации
	for ($i = 1; $i <= $str_pag; $i++){
		if ($i==$page) {echo '<a class="btn btn-outline-primary active" href=torty.php?page='.$i.'> '.$i.' </a>';}
		else {echo '<a class="btn btn-outline-primary" href=torty.php?page='.$i.'> '.$i.' </a>';}
	}
	echo '</div>  ';
	
	}
?>