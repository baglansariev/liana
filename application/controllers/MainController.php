<?php
	namespace controllers;

	use core\engine\Controller;

	class MainController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Я, Лиана Потомственная гадалка и ясновидящая, экстрасенс работаю в городах Алматы, Астана и Шымкент, всегда приду на помощь, если в вашей жизни наступила полоса неудач и неприятностей. Дар ясновидения передается в нашей семье из поколения в поколение по женской линии. Большое влияние на развитие моих способностей предвидеть будущее оказали мама и бабушка. Осознание того, что мой дар может помочь людям в опасных ситуациях, наладить отношения с близкими, стать счастливее и удачливее, определило мое предназначение.');
	    	$this->view->asset->setMetaKeys('Гадалка Лиана в Шымкенте, Гадалка Лиана в Алматы, Гадалка Лиана в Астане, Магические услуги в Казахстане');
	    	$this->view->asset->setTitle('Гадалка Лиана в Шымкенте, Алматы и Астане. Магические услуги в Казахстане');

	    	$data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');
	    	$this->view->response('Main/index', $data);
	    }

//	    public function mailAction()
//        {
//            $json = array();
//
//            // Modal form send
//            if($this->request->has('modal-name') && $this->request->has('modal-phone') && $this->request->has('modal-message')){
//                $name = $this->request->post['modal-name'];
//                $phone = $this->request->post['modal-phone'];
//                $message = $this->request->post['modal-message'];
//                $course = 'нет';
//
//                if($this->request->has('modal-course')){
//                    $course = $this->request->post['modal-course'];
//                }
//                if(!$this->mail->formSend($name, $phone, $message, $course)){
//                    $json['error'] = $this->mail->error_msg;
//                }
//                else{
//                    $json['success'] = $this->mail->success_msg;
//                }
//                $this->response->outputJSON($json);
//            }
//            // Main form send
//            else if($this->request->has('main-name') && $this->request->has('main-phone') && $this->request->has('main-message')){
//                $json['success'] = 'YES';
//                $name = $this->request->post['main-name'];
//                $phone = $this->request->post['main-phone'];
//                $message = $this->request->post['main-message'];
//                $subject = '';
//
//                if($this->request->has('main-subject')){
//                    $subject = $this->request->post['main-subject'];
//                }
//                if(!$this->mail->formSend($name, $phone, $message, $subject)){
//                    $json['error'] = $this->mail->error_msg;
//                }
//                else{
//                    $json['success'] = $this->mail->success_msg;
//                }
//                $this->response->outputJSON($json);
//            }
//            else{
//                $this->view->errorResponse('errors/404', 404);
//            }
//        }
	}
