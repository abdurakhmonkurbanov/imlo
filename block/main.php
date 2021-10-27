<main>
    <div class="container">
      <!--Grid row-->
      <div class="row py-2">
        <!--Grid column-->
        <div class="col-md-6 text-justify">	
			<h4>Lotincha shakli</h4>
        <?php
		
			$txt = $_POST['txt'];
			$txt = trim($txt);
			$txt = explode(" ",$txt);
			$i = 0;

			foreach($txt as $word){
				
				$word = repp($word);
				//echo query($word);
				//echo "---------------<br>";
				$wdb = mysql_query("select * from `words` where `word` like '$word'"); // Aniq mos kelganlar
				$mwdb = mysql_fetch_array($wdb);
				if ($mwdb['word'] != ''){
					$jword[$i][0] = $word;
					$jword[$i][1] = $mwdb['word'];
					
				}
				else{
					$w2db = mysql_query(query($word));
					$num = mysql_num_rows($w2db);
					if ($num == 1) {    ///  Natija faqat bitta chiqsa
						$mw2db = mysql_fetch_array($w2db);
						$jword[$i][0] = $word;
						$jword[$i][1] = $mw2db['word'];
					}
					if ($num == 0){    ///  Natija chiqmasa
						$jword[$i][0] = $word;
					}
					if ($num > 1) {    ///  Natija ko'p bo'lsa
						$j = 1;
							while($mw2db = mysql_fetch_array($w2db)){
								$jword[$i][0] = $word;
								$jword[$i][$j] = $mw2db['word'];
								if($j == 10){
									break;
								}
								$j++;
								
							}
						}
					
				}
				$i++;
			}
		
			?>
		
			
         <br>
			<?php

			$ln = count($jword);
			for($i = 0; $i <= $ln;$i++){
				//print_r($jword[$i]);
				if ($jword[$i][1] == ''){
					
					echo (" <span class='tugri'>".$jword[$i][0]."</span> ");
					
					/*$yword = $jword[$i][0];
					echo (" <span class='yuk'>".$yword."</span> ");
					$j = 0;
					while($j < $lns) {
						$qsh =  $sword[$j];
						
					if (endsWith($yword,$qsh)){
						echo 'xa ';
						echo $qsh.' ';
						break;
						/////////
					}
						$j++;
											
					}*/

				}
				
				if ((count($jword[$i])==2) and (strtolower($jword[$i][0]) == $jword[$i][0] )){
					echo (" <span class='tugri'>".$jword[$i][1]." </span> ");
				}
				
				if ((count($jword[$i])==2) and (strtolower($jword[$i][0]) != $jword[$i][0] )){
					echo (" <span class='bitta'>".$jword[$i][0]." </span> ");
				}
				
				if (count($jword[$i])>2){
					?>
					  <div class="btn-group">
					<span class="kup  dropdown-toggle" id="kup<?php echo($i);?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo($jword[$i][0]) ;?> 
					</span>
  						<div class="dropdown-menu" aria-labelledby="kup<?php echo($i) ;?>">
			<?php
					foreach ($jword[$i] as $val){
						?>
							<a class="dropdown-item" onClick='javascript:kup(<?php echo($i) ;?>,"<?php echo(appostr($val)) ;?>");'><?php echo($val) ;?></a>
							<?php 
					}
					?>
						</div>
					</div>
			<?php
 
				}
			}
			// echo "<pre>	";	  
			// print_r($jword);
			//   echo "</pre>";
			
			?>
         
						   
        </div>
		  <div class="col-6">
		  <h4>Kirilcha shakli</h4>
		  	 <?php
			   
			  $ln = count($jword);
			  for($i = 0; $i <= $ln;$i++){
				 $lln = count($jword[$i]);
			     for($j = 0; $j < $lln; $j++ ){
				     $kword[$i][$j] = kiril($jword[$i][$j]);
			   		}

			  
			 	}
				 /////////////////////////////////////////////echo 

				 for($i = 0; $i <= $ln;$i++){


				 if ($kword[$i][1] == ''){
					
					echo (" <span class='tugri'>".$kword[$i][0]."</span> ");
				 }

					if ((count($kword[$i])==2) and (strtolower($kword[$i][0]) == $kword[$i][0] )){
						echo (" <span class='tugri'>".$kword[$i][1]." </span> ");
					}
					
					if ((count($kword[$i])==2) and (strtolower($kword[$i][0]) != $kword[$i][0] )){
						echo (" <span class='bitta'>".$kword[$i][0]." </span> ");
					}
					
					if (count($kword[$i])>2){
						?>
						  <div class="btn-group">
						<span class="kup  dropdown-toggle" id="kupk<?php echo($i);?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo($kword[$i][0]) ;?> 
						</span>
							  <div class="dropdown-menu" aria-labelledby="kupk<?php echo($i) ;?>">
				<?php
						foreach ($kword[$i] as $val){
							?>
								<a class="dropdown-item" onClick='javascript:kupk(<?php echo($i) ;?>,"<?php echo(appostr($val)) ;?>");'><?php echo($val) ;?></a>
								<?php 
						}
						?>
							</div>
						</div>
				<?php
	 
					}

				}	
			// 	echo "<pre>	";	  
			//   print_r($kword);
			// 	echo "</pre>";
			  ?>
         
		  </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  <script>
			function kup(id,word){
				kid = 'kup'+id;
				document.getElementById(kid).innerHTML = word;
				
			}	

			function kupk(id,word){
				kid = 'kupk'+id;
				document.getElementById(kid).innerHTML = word;
				
			}					
		
							
		</script>
	</main>