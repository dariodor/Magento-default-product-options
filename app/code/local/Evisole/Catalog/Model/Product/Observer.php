<?php
 
class Evisole_Catalog_Model_Product_Observer
{
    public function catalog_product_new_action($observer) {
 
        $product = $observer->getEvent()->getProduct();
        $product->setWeight(1.0000);
        $product->setStatus(1);
        $product->setTaxClassId(2);
 
        $stockItem = Mage::getModel('cataloginventory/stock_item');
        $stockItem->assignProduct($product);
        $stockItem->setData('is_in_stock', 1);
        $stockItem->setData('qty', 1);
 
        $product->setStockItem($stockItem);
    }
}