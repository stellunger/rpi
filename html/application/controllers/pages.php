<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('header-main');
		$this->load->view('main-page');
		$this->load->view('footer');
	}

	public function show_contacts()
	{

		$data['title'] = 'Контакты | РосПромИнжиниринг';

		$this->load->view('header1', $data);
		$this->load->view('contact-page');
		$this->load->view('footer');

	}

	public function show_page($main_id, $category_id, $page_id)
	{
		
		switch ($category_id)
		{
			
			case 'montage':
				$data['title'] = 'Монтаж';
				break;

			case 'service':
				$data['title'] = 'Сервис';
				break;

		}

		$data['title'] .= ' | РосПромИнжиниринг';

		$this->load->view('header1', $data);

		$data['left_menu'] = $this->load->view($main_id . '/' . $category_id . '/menu', '', true);
		$data['main_content'] = $this->load->view($main_id . '/' . $category_id . '/' . $page_id, '', true);

		$this->load->view('render', $data);

		$this->load->view('footer');

	}

	public function show_tab($main_id, $category_id, $page_id, $tab_id)
	{
		$data['c_id'] = $category_id;

		switch ($page_id)
		{
			
			// колодцы

			case 'rpi-ks':
				$data['title'] = 'Колодцы смотровые РПИ-КС';
				break;

			case 'rpi-ka':
				$data['title'] = 'Колодцы регулировки запорной арматуры РПИ-КА';
				break;

			case 'rpi-kp':
				$data['title'] = 'Колодцы отбора проб РПИ-КП';
				break;

			case 'rpi-ku':
				$data['title'] = 'Колодцы ультрафиолетового обеззараживания РПИ-КУ';
				break;

			case 'rpi-kr':
				$data['title'] = 'Колодцы и камеры разделения потока РПИ-КР';
				break;

			// емкостное

			case 'rpi-ar':
				$data['title'] = 'Резервуары';
				break;	

			// жсб

			case 'rpi-gu':
				$data['title'] = 'Жироуловители РПИ-ЖУ';
				break;

			case 'rpi-sp':
				$data['title'] = 'Септики РПИ-СП';
				break;

			case 'rpi-br':
				$data['title'] = 'Биореакторы РПИ-БР';
				break;

			// кнс

			case 'rpi-kns':
				$data['title'] = 'Канализационные насосные станции РПИ-КНС';
				break;

			case 'rpi-pns':
				$data['title'] = 'Повысительные насосные станции РПИ-ПНС';
				break;

			// водоподготовка

			case 'base': //общая тема
				$data['title'] = 'Общая информация';
				break;

			case 'equip': 
				$data['title'] = 'Оборудование';
				break;

			case 'tehnologicheskie-shemy': 
				$data['title'] = 'Технологические схемы';
				break;

			// оспс

			case 'ospi': 
				$data['title'] = 'Очистные сооружения подземного исполнения';
				break;

			case 'rpi-pu': 
				$data['title'] = 'Пескоуловители РПИ-ПУ';
				break;

			case 'rpi-nu': 
				$data['title'] = 'Нефтеуловители РПИ-НУ';
				break;

			case 'rpi-sf': 
				$data['title'] = 'Сорбционный фильтр РПИ-СФ';
				break;

			case 'osni': 
				$data['title'] = 'Очистные сооружения наземного исполнения';
				break;

			// рпи-кос

			case 'zaglublennoe': 
				$data['title'] = 'Заглубленное исполнение';
				break;

			case 'nazemnoe': 
				$data['title'] = 'Наземное блочно-модульное исполнение';
				break;

			case 'tehnologicheskie-stupeni': 
				$data['title'] = 'Технологические ступени очистных сооружений РПИ-КОС';
				break;

			// рпи-пос

			case 'tehnologicheskaya-shema': 
				$data['title'] = 'Технологическая схема';
				break;

			// киберинси			

			case 'benefits': 
				$data['title'] = 'Главные преимущества';
				break;

			// трубы газоходы

			case 'rpi': 
				$data['title'] = 'Трубы и газоходы РПИ';
				break;		

			// автоматика	

			case 'shkafy': 
				$data['title'] = 'Шкафы управления и автоматизации';
				break;		

		}

		switch ($category_id)
		{
			case 'kolodci':
				$data['title'] .= ' | Комплектные колодцы';
				break;

			case 'emkostnoe':
				$data['title'] .= ' | Емкостное оборудование';
				break;

			case 'gsb':
				$data['title'] .= ' | Жироуловители, септики, биореакторы';
				break;

			case 'kns':
				$data['title'] .= ' | Комплектные насосные станции';
				break;

			case 'rpi-aqua':
				$data['title'] .= ' | Комплектные станции водоподготовки РПИ-АКВА';
				break;

			case 'osps':
				$data['title'] .= ' | Очистные сооружения поверхностного стока';
				break;

			case 'rpi-kos':
				$data['title'] .= ' | Очистные сооружения хозяйственно-бытового стока РПИ-КОС';
				break;

			case 'rpi-pos':
				$data['title'] .= ' | Очистные сооружения производственного стока РПИ-ПОС';
				break;

			case 'cyberynsi':
				$data['title'] .= ' | Комплексы уничтожения отходов КИБЕРИНСИ';
				break;

			case 'truby-gazohody':
				$data['title'] .= ' | Промышленные трубы и газоходы';
				break;

			case 'avtomatika':
				$data['title'] .= ' | Автоматика';
				break;

		}

		$data['title'] .= ' | РосПромИнжиниринг';

		$this->load->view('header1', $data);

		$data['left_menu'] = $this->load->view('equipment/menu', $data, true);
		$data['main_content'] = $this->load->view($main_id . '/' . $category_id . '/' . $page_id . '/' . $tab_id, '', true);

		$this->load->view('render', $data);

		$this->load->view('footer');

	}

	public function show_main($main_id)
	{
		
		switch ($main_id)
		{
			case 'projects':
				$data['title'] = 'Проектирование';
				break;

			case 'equipment':
				$data['title'] = 'Оборудование';
				break;

			case 'production':
				$data['title'] = 'Производство';
				break;
		}

		$data['title'] .= ' | РосПромИнжиниринг';


		$this->load->view('header', $data);

		$this->load->view($main_id . '/' . 'main-page');

		$this->load->view('footer');
	}

}
