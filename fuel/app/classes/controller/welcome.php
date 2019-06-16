<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
private $_pager;
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{

		// Config::load('pagination');
		$config = array(
			'pagination_url' => 'http://localhost/fuel/welcome/index/3',
			'current_page' => 4,
			'uri_segment' => '3',
			'num_links' => 5, //表示するリンクの総数。
			'per_page' => 2,
			'total_items' => 8,
			// 'name' => 'pagination.php',
			'show_first' => true,
			'show_last' => true,
		);

	//forge
	$this->_pager = Pagination::forge('mypagination', $config);

$this->_pager->__set('wrapper', "<ul class=\"pagination\">\n\t{pagination}\n\t</ul>\n");

$this->_pager->__set('first', "<li>{link}</li>");
$this->_pager->__set('first-marker', "««");
$this->_pager->__set('first-link', "<a href=\"{uri}\">{page}</a>");

$this->_pager->__set('first-inactive', "");
$this->_pager->__set('first-inactive-link', "");

$this->_pager->__set('previous', "<li>{link}</li>");
$this->_pager->__set('previous-marker', "«");
$this->_pager->__set('previous-link', "<a href=\"{uri}\" rel=\"prev\">{page}</a>");

$this->_pager->__set('previous-inactive', "<li class=\"disabled\">{link}</li>");
$this->_pager->__set('previous-inactive-link', "<a href=\"#\" rel=\"prev\">{page}</a>");

$this->_pager->__set('regular', "<li>{link}</li>");
$this->_pager->__set('regular-link', "<a href=\"{uri}\">{page}</a>");

$this->_pager->__set('active', "<li class=\"active\">{link}</li>");
$this->_pager->__set('active-link', "<a href=\"#\">{page} <span class=\"sr-only\"></span></a>");

$this->_pager->__set('next', "<li>{link}</li>");
$this->_pager->__set('next-marker', "»");
$this->_pager->__set('next-link', "<a href=\"{uri}\" rel=\"next\">{page}</a>");

$this->_pager->__set('next-inactive', "<li class=\"disabled\">{link}</li>");
$this->_pager->__set('next-inactive-link', "<a href=\"#\" rel=\"next\">{page}</a>");

$this->_pager->__set('last', "<li>{link}</li>");
$this->_pager->__set('last-marker', "»»");
$this->_pager->__set('last-link', "<a href=\"{uri}\">{page}</a>");

$this->_pager->__set('last-inactive', "");
$this->_pager->__set('last-inactive-link', "");















/*
 *        // 前へaタグ非アクティブカスタマイズ
 *        $this->_pager->__set('previous-inactive-link', "\t\t{page}\n");
 *        // 後へaタグ非アクティブカスタマイズ
 *        $this->_pager->__set('next-inactive-link', "\t\t{page}\n");
 * 
 * 
 *     // 前へaタグカスタマイズ
 *     $this->_pager->__set('previous-link', "\t\t<a href='{uri}' class='data-role-button'>{page}</a>\n");
 *     // 後へaタグカスタマイズ
 *     // $this->_pager->__set('next-link', "\t\t<a href='{uri}' class='data-role-button'>{page}</a>\n");
 * 
 * 
 *     $this->_pager->__set('regular', "<li>\n\t{link}\n</li>\n");
 *     $this->_pager->__set('active', "<li class='active'>\n\t{link}\n</li>\n");
 *     $this->_pager->__set('previous', "<li class='previous'>\n\t{link}\n</li>\n");
 *     $this->_pager->__set('previous-marker', "<li class='previous'><a href='#'>前へ</a></li>\n");
 *     $this->_pager->__set('previous-inactive', "\n\t{link}\n\n");
 * 
 *     // $this->_pager->__set('next', "<li class='next'>\n\t{link}\n</li>\n");
 *     // ↓余分な隙間
 *     // $this->_pager->__set('next-marker', "<li class='next'><a href='#'>次へ</a></li>\n");
 *     // $this->_pager->__set('next-inactive', "\n\t{link}\n\n");
 * 
 * 
 *     // $this->_pager->__set('previous', "<li>{link}</li>");
 *     // $this->_pager->__set('previous-marker', "«");
 *     // $this->_pager->__set('previous-link', "<a href=\"{uri}\" rel=\"prev\">{page}</a>");
 *  
 *     $this->_pager->__set('first', "<li>{link}</li>");
 *     $this->_pager->__set('first-marker', "««");
 *     $this->_pager->__set('first-link', "<a href=\"{uri}\">{page}</a>");
 *  
 * 
 *     $this->_pager->__set('next', "<li>{link}</li>");
 *     $this->_pager->__set('next-marker', "次へ");
 *     $this->_pager->__set('next-link', "<a href=\"{uri}\" rel=\"next\">{page}</a>");
 * 
 *     $this->_pager->__set('last', "<li>{link}</li>");
 *     $this->_pager->__set('last-marker', "»»");
 *     $this->_pager->__set('last-link', "<a href=\"{uri}\">{page}</a>");
 *  
 */




	// echo Pagination::instance('mypagination')->render();

	$view = View::forge('welcome/index');
	// $view->set('pagination', $pagination);    //pagination設定
	$view->set('pagination', $this->_pager);    //pagination設定

	return $view;
		// return Response::forge();
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
