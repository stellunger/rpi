		<!-- content activate
			============================================= -->
			
		<div id="content-wrapper">
			<div id="content-box">

				<div id="content-left-bar">
					<div id="clb1" class="<?php echo ''.($c_id == 'kolodci' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Комплектные колодцы</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/kolodci/rpi-ks/main">Колодцы смотровые</a></li>							
							<li><a href="<?php echo base_url(); ?>equipment/kolodci/rpi-ka/main">Регулировки запорной арматуры</a></li>					
							<li><a href="<?php echo base_url(); ?>equipment/kolodci/rpi-kp/main">Колодцы отбора проб</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/kolodci/rpi-ku/main">Колодцы УФ-обеззараживания</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/kolodci/rpi-kr/main">Колодцы разделители потока</a></li>
						</ul>
					</div>

					<div id="clb2" class="<?php echo ''.($c_id == 'emkostnoe' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Емкостное оборудование</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/emkostnoe/rpi-ar/main">Резервуары</a></li>
						</ul>
					</div>

					<div id="clb3" class="<?php echo ''.($c_id == 'gsb' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Жироуловители, септики, биореакторы</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/gsb/rpi-gu/main">Жироуловители</a></li>							
							<li><a href="<?php echo base_url(); ?>equipment/gsb/rpi-sp/main">Септики</a></li>										
							<li><a href="<?php echo base_url(); ?>equipment/gsb/rpi-br/main">Биореакторы</a></li>
						</ul>
					</div>

					<div id="clb4" class="<?php echo ''.($c_id == 'kns' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Комплектные насосные станции</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/kns/rpi-kns/main">Канализационные станции</a></li>	
							<li><a href="<?php echo base_url(); ?>equipment/kns/rpi-pns/main">Повысительные станции</a></li>
						</ul>
					</div>

					<div id="clb5" class="<?php echo ''.($c_id == 'rpi-aqua' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Комплектные станции водоподготовки</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-aqua/base/main">Общая информация</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-aqua/equip/main">Водоочистное оборудование</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-aqua/tehnologicheskie-shemy/main">Технологические схемы</a></li>
						</ul>
					</div>

					<div id="clb6" class="<?php echo ''.($c_id == 'osps' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Очистные сооружения поверхностного стока</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/osps/base/main">Общая информация</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/osps/ospi/main">Подземное исполнение</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/osps/rpi-pu/main">Пескоуловитель</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/osps/rpi-nu/main">Нефтеуловитель</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/osps/rpi-sf/main">Сорбционный фильтр</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/osps/osni/main">Наземное исполнение</a></li>
						</ul>
					</div>

					<div id="clb7" class="<?php echo ''.($c_id == 'rpi-kos' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Очистные сооружения хозяйственно-бытового стока</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-kos/base/main">Общая информация</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-kos/zaglublennoe/main">Заглубленное исполнение</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-kos/nazemnoe/main">Наземное исполнение</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-kos/tehnologicheskie-stupeni/main">Технологические ступени</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-kos/tehnologicheskie-shemy/main">Технологические схемы</a></li>	
						</ul>
					</div>

					<div id="clb8" class="<?php echo ''.($c_id == 'rpi-pos' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Очистные сооружения производственного стока</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-pos/base/main">Общая информация</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/rpi-pos/tehnologicheskaya-shema/main">Технологическая схема</a></li>		
						</ul>
					</div>

					<div id="clb9" class="<?php echo ''.($c_id == 'cyberynsi' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Комплексы уничтожения отходов "Киберинси"</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/cyberynsi/base/main">Общая информация</a></li>
							<li><a href="<?php echo base_url(); ?>equipment/cyberynsi/benefits/main">Главные преимущества</a></li>
						</ul>
					</div>

					<div id="clb10" class="<?php echo ''.($c_id == 'truby-gazohody' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Промышленные трубы и газоходы</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/truby-gazohody/rpi/main">Трубы и газоходы РПИ</a></li>							
						</ul>
					</div>

					<div id="clb11" class="<?php echo ''.($c_id == 'avtomatika' ? 'activate' : 'content-left-bar'); ?>">
						<h1>Автоматика</h1>
						<ul>
							<li><a href="<?php echo base_url(); ?>equipment/avtomatika/shkafy/main">Шкафы управления<br>и автоматизации</a></li>							
						</ul>
					</div>

				</div>