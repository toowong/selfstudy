<?php

App::uses('AppHelper', 'View/Helper');
/** Tcpdf ���g�p���� */
App::import('Vendor', 'tcpdf/tcpdf');

/**
 * Tcpdf Helper
 *
 * @package       app.View.Helper
 */
class TcpdfHelper extends AppHelper {
	public $helpers = array();
	public $pdf;
	
/**
 * constructor method
 *
 * @param array $options
 * @return void
 */
	function __construct($view, $options = null) {
		/** �f�t�H���g�̐ݒ� */
		$defaults = array(
			'orientation'   => 'L',
			'unit'          => 'mm',
			'format'        => 'A4',
			'unicode'       => true,
			'encoding'      => 'UTF-8'
		);

		/** �I�v�V�������ݒ肳��Ă����ꍇ�A�I�v�V�������g�p���� */
		$options =  (is_array($options)) ? am($defaults, $options) : $defaults;
		extract(am($defaults, $options));

		/** Tcpdf�̃R���X�g���N�^���N�� */
		$this->pdf = new TCPDF($orientation, $unit, $format, $unicode, $encoding); 
    }
}
?>
