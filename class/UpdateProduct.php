<?php 
class UpdateProduct
{
    public function __construct($dbh)
    {
      $this->dbh=$dbh; 
    }    
    
    public function update(Item $item, int $product_id)
    {
        $sql = 'UPDATE `'. DB_PREFIX.'_product` SET  `quantity`='.$item->quantity.', `stock_status_id`='.$item->stock_status_id.', `price`='.$item->price.', `date_modified`=NOW() WHERE `product_id`='.$product_id;

        $sth = $this->dbh->prepare($sql);
        $sth->execute();
		if($sth->errorInfo()[2]){return false;} else {return true;}     
    }   
}