<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authenticity extends CI_Controller
{
	/*
	function _remap($param)
	{
		$this->index($param);
	}
	*/
	public function index()
	{
		if ($this->input->post()) {
			/*
			$response['post'] = $this->input->post();
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
			*/

			if (strpos(base_url(), ".local") > 0) {
				$this->url = 'https://merimies.local/authenticity/artunit';
			} else {
				$this->url = 'https://merimies.local/authenticity/artunit';
			}

			$this->AppKey = md5(time());
			$this->AppKey = '44489094a658360abec4da29e84566a3';
	
			$data = $this->input->post();
			$username = 'demo';
			$password = password_hash("1234", PASSWORD_DEFAULT);
			$password = "$2y$10$5INgiVWIEtiyO0lu630F.e/vStkQlbv7z644xxSgc3AVNP3x.LYMO";
			try {
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $this->url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Header-AppName: merimies_agent',
					'Header-AppKey: ' . $this->AppKey
				));
				curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
				$curl_response = curl_exec($ch);
				curl_close($ch);
				$curl_response = json_decode($curl_response, TRUE);
				//print_r("<pre>");
				//return ($curl_response);
				echo $curl_response;
	
			} catch (Exception $ex) {
				echo $ex . "";
			}
		} else {
			/*
			$data['auth_code'] = $auth_code;
			if ($auth_code == "index") {
				$data['auth_code'] = "";
			}
			*/
			$data['auth_code'] = "";
			$this->load->view('Authenticity', $data);
			//$this->load->view('coming_soon', $data);
		}
	}

	public function test(){

		if (strpos(base_url(), ".local") > 0 || strpos(base_url(), "local") > 0) {
			$this->url = 'https://merimies.local/authenticity?mode=product_register_from_artunit';
		} else {
			$this->url = 'https://merimies.com/authenticity/?mode=product_register_from_artunit';
		}

		//echo md5(time());
		$this->AppKey = 'd5f03f1ae6e7ac574c44f8053075eb04';

		$_POST['auth_code'] = "123-456-789";		
		$data = $this->input->post();
		$username = 'demo';
		$password = password_hash("1234", PASSWORD_DEFAULT);
		//$password = "1234";
		try {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->url);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Header-AppName: product_register',
				'Header-AppKey: ' . $this->AppKey
			));
			curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
			$curl_response = curl_exec($ch);
			curl_close($ch);
			$curl_response = json_decode($curl_response, TRUE);
			print_r("<pre>");
			print_r($curl_response);
			//return ($curl_response);
		} catch (Exception $ex) {
			print_r($ex);
		}

	}
}
