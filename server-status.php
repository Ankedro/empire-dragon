				<div class="right-box">
					<h2>Status</h2>
					<p>
					
					Server name: <?php echo $SERVER_Name; ?><br>
					Status: <?php if(empty($ping['error'])) { echo "<i></i> Server is online"; } else { echo "<i></i> Server is offline";}?><br>
					IP: <?php echo $SERVER_IP; ?><br>
					Type: <?php echo $SERVER_Type; ?><br>
					Version: <?php echo $version; ?><br>
					Online: <?php echo "".$online." / ".$max."";?><br>
				<?php
					if($HEADS == "3D") {
						$url = "https://cravatar.eu/helmhead/";
					} 	else {
							$url = "https://cravatar.eu/helmavatar/";
						}
						if(empty($query['error'])) {
							if($playerlist != "null") { //is at least one player online? Then display it!
								$shown = "0";
								foreach ($playerlist as $player) {
								$shown++;
									if($shown < $show_max + 1 || $show_max == "unlimited") {
				?>
				<a data-placement="top" rel="tooltip" style="display: inline-block;" title="<?php echo $player;?>">
					<img src="<?php echo $url.$player;?>/50" size="30" width="30" height="30" style="margin-top: 5px; margin-bottom: 5px; margin-right: 5px; border-radius: 3px; "/>
				</a>
			<?php 
			}
			}
				if($shown > $show_max && $show_max != "unlimited") {
					echo "and " . (count($playerlist) - $show_max) . " more ...";
				}
			} 	else {
					echo "There are no players online at the moment! <i></i>";
				}
			} 	else {
					echo "Query must be enabled in your server.properties file! <i></i>";
				} 
			?>
				</p>
				</div>
				<!-- Server status by https://github.com/FunnyItsElmo/PHP-Minecraft-Server-Status-Query/ -->