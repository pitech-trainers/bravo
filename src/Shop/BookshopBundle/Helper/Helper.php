<?php

namespace Shop\BookshopBundle\Helper;

class Helper
{
    public function getCategoryForProducts($products)
    {
        if ($products != null) {
            $i = 0;
            foreach ($products as $product) {
                $cat[$i++] = $product->getCategory()->getLabel();
            }
            $cat = array_unique($cat);
            sort($cat, SORT_STRING);

            return $cat;
        }
        return null;
    }

}
