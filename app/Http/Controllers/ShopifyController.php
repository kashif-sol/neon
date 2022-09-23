<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Shopify\Rest\Admin2021_10\DraftOrder;
class ShopifyController extends Controller
{
    public function create(Request $request)
    {
        $shop = User::first();
        $line_items = array(
            // "variant_id" => 42011142095020, //41533218980033,
            // "quantity" => 1
            "title"=>$request->title,
            "price"=>$request->price,
            "quantity"=>1
        );

        $note_attributes = [];
        if(isset($request->name))
        {
            $note_attributes[] = array(
                "name" => "name",
                "value" => $request->name
            );
        }
        if(isset($request->color))
        {
            $note_attributes[] = array(
                "name" => "color",
                "value" => $request->color
            );
        }
        if(isset($request->description))
        {
            $note_attributes[] = array(
                "name" => "description",
                "value" => $request->description
            );
        }
        if(isset($request->is_checked))
        {
            $note_attributes[] = array(
                "name" => "is_checked",
                "value" => 'yes'
            );
        }
       
        $customer = array(
            "id" => 6230616441004 //5995505549505
        );
        $order_data =  array(
            "draft_order" => array(
                "line_items" => array($line_items),
                "customer" => $customer,
                "note_attributes" =>  $note_attributes,
            )
        );
        $response = $shop->api()->rest('POST', '/admin/api/2021-10/draft_orders.json',$order_data);
        

        if($response['status'] == 201 || $response['status'] == 200)
        {
           $invoice=$response['body']->container['draft_order']['invoice_url'];
         
           return response()->json(['status' => "success" , "url" => $invoice]);
        }
            
        else{
            return array("status" => "error" , "msg" => "There is issue in creating your order. Please try again!");
        }
    }}
