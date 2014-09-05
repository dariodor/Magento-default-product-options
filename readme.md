# Setting Default Product Values in Magento #

With this script Magento automatically assign default values to these fields:

- Weight
- Status
- TaxClassId
- is_in_stock
- qty

For more information on this topic check out the [Magento wiki article](http://www.magentocommerce.com/wiki/5_-_modules_and_development/0_-_module_development_in_magento/customizing_magento_using_event-observer_method)

# Other values #

$product->setStoreId(1); //you can set data in store scope
$product->setWebsiteIds(array(1)); //website ID the product is assigned to, as an array
$product->setAttributeSetId(9); //ID of a attribute set named 'default'
$product->setTypeId('simple'); //product type
$product->setCreatedAt(strtotime('now')); //product creation time
$product->setUpdatedAt(strtotime('now')); //product update time
 
$product->setSku('testsku61'); //SKU
$product->setName('test product21'); //product name
$product->setWeight(4.0000);
$product->setStatus(1); //product status (1 - enabled, 2 - disabled)
$product->setTaxClassId(4); //tax class (0 - none, 1 - default, 2 - taxable, 4 - shipping)
$product->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH); //catalog and search visibility
$product->setManufacturer(28); //manufacturer id
$product->setColor(24);
$product->setNewsFromDate('06/26/2014'); //product set as new from
$product->setNewsToDate('06/30/2014'); //product set as new to
$product->setCountryOfManufacture('AF'); //country of manufacture (2-letter country code)
 
$product->setPrice(11.22); //price in form 11.22
$product->setCost(22.33); //price in form 11.22
$product->setSpecialPrice(00.44); //special price in form 11.22
$product->setSpecialFromDate('06/1/2014'); //special price from (MM-DD-YYYY)
$product->setSpecialToDate('06/30/2014'); //special price to (MM-DD-YYYY)
$product->setMsrpEnabled(1); //enable MAP
$product->setMsrpDisplayActualPriceType(1); //display actual price (1 - on gesture, 2 - in cart, 3 - before order confirmation, 4 - use config)
$product->setMsrp(99.99); //Manufacturer's Suggested Retail Price
 
$product->setMetaTitle('test meta title 2');
$product->setMetaKeyword('test meta keyword 2');
$product->setMetaDescription('test meta description 2');
 
$product->setDescription('This is a long description');
$product->setShortDescription('This is a short description');
 
$product->setMediaGallery (array('images'=>array (), 'values'=>array ())); //media gallery initialization
$product->addImageToMediaGallery('media/catalog/product/1/0/10243-1.png', array('image','thumbnail','small_image'), false, false); //assigning image, thumb and small image to media gallery
 
$product->setStockData(array(
                       'use_config_manage_stock' => 0, //'Use config settings' checkbox
                       'manage_stock'=>1, //manage stock
                       'min_sale_qty'=>1, //Minimum Qty Allowed in Shopping Cart
                       'max_sale_qty'=>2, //Maximum Qty Allowed in Shopping Cart
                       'is_in_stock' => 1, //Stock Availability
                       'qty' => 999 //qty
                   )
    );
 
$product->setCategoryIds(array(3, 10)); //assign product to categories