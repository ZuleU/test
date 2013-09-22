<?php
/**
* @category    Company
* @package     Company_CheckoutComment
* @copyright   Copyright (c) 2013 Zuhra Ujkanovic
* @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/
class Company_CheckoutComment_Model_Observer
{
	/**
	 * Save comment to order when submit place to order
	 * @param $observer
	 */
	public function saveCommentOrder($observer)
	{
		$checkoutComment = Mage::app()->getRequest()->getPost('checkoutcomment');
		
		if (is_array($checkoutComment) && isset($checkoutComment['comment'])) {
			$comment = trim($checkoutComment['comment']);
			$comment = nl2br(Mage::helper('checkoutcomment')->stripTags($comment));

			if (!empty($comment)) {
				$order = $observer->getEvent()->getOrder();
				if($order->getState() == Mage_Sales_Model_Order::STATE_NEW){
					$order->setComment($comment);
				}
			}
		}
	}
	

}