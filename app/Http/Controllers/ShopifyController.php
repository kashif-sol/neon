<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Shopify\Rest\Admin2021_10\DraftOrder;
class ShopifyController extends Controller
{
    public function create(Request $request,$order_data)
    {
        $shop = User::first();
        $line_items = array(
            // "variant_id" => 42011142095020, //41533218980033,
            // "quantity" => 1
            "title"=>"Adidas Shoes",
            "price"=>"350 usd",
            "quantity"=>1
        );
        $customer = array(
            "id" => 6230616441004 //5995505549505
        );
        $order_data =  array(
            "draft_order" => array(
                "line_items" => array($line_items),
                "customer" => $customer,
            )
        );
        $response = $shop->api()->rest('POST', '/admin/api/2021-10/draft_orders.json',$order_data);
    
        if($response['status'] == 201 || $response['status'] == 200)
        {
            return array("status" => "success" , "msg" => "order created successfully.");
        }else{
            return array("status" => "error" , "msg" => "There is issue in creating your order. Please try again!");
        }
    }}
