Magemaven OrderComment
======================

Simple extension that adds new field to order review checkout section, where customers can leave comments to their orders.

It doesn't require heavy manual template edits and uses Magento core order comments functionality. The main goal during development was to make lightweight and simple extension, that needs minimum admin interaction while install.

* Download from Magento Connect: [http://www.magentocommerce.com/magento-connect/catalog/product/view/id/10860/](http://www.magentocommerce.com/magento-connect/catalog/product/view/id/10860/)
* Support Forum: [http://magemaven.com/forum/#/categories/magemaven-ordercomment](http://magemaven.com/forum/#/categories/magemaven-ordercomment)
* Bugtracker: [http://github.com/r8/magento-order-comment/issues](http://github.com/r8/magento-order-comment/issues)

Installation
------------

In most cases this extension will work out of the box. But if you have installed custom theme, that doesn't support all Magento features, you may need to make some changes in your layout files.

Basically, you need to locate checkout.xml file in your theme, find block with type 'checkout/onepage_review_info' and make sure, that it contains following code near its end:

    <block type="checkout/agreements" name="checkout.onepage.agreements" as="agreements" template="checkout/onepage/agreements.phtml"/>

In case you don't see it, please add this code just before the block with the name 'checkout.onepage.review.button'
