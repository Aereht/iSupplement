<?php

namespace App;

use App\Categorie;
use App\Product;
use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Image;
use Session;

class Product extends Model
{
    public static function getProducts($curl, &$data)
    {
        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.ctitle', 'c.curl', 'p.*')
            ->where('c.curl', '=', $curl)
            ->paginate(3);

        if (!$products->count()) {
            abort(404);
        } else {
            $data['pageTitle'] .= $products[0]->ctitle . ' products';
            $data['products'] = $products;
        }
    }

    public static function getProductsSortBy($curl, $sortBy, $by, &$data)
    {
        $cat = Categorie::where('curl', $curl)->first();

        if ($cat) {
            $cat = $cat->toArray();
            $products = Product::where('categorie_id', $cat['id']);
            $products = $products->orderBy($sortBy, $by)->paginate(3);
            $data['products'] = $products;
            $data['pageTitle'] .= $cat['ctitle'];
            $data['ctitle'] = $cat['ctitle'];
            $data['curl'] = $cat['curl'];

        } else {
            abort(404);
        }
    }

    public static function getItem($purl, &$data)
    {
        if ($item = Product::where('purl', '=', $purl)->first()) {
            $item = $item->toArray();
            $data['pageTitle'] .= $item['ptitle'];
            $data['product'] = $item;

        } else {
            abort(404);
        }
    }
    public static function addToCart($pid)
    {
        if ($product = self::find($pid)) {

            $product = $product->toArray();

            if (!Cart::get($pid)) {
                Cart::add($pid, $product['ptitle'], $product['price'], 1, []);
                Session::flash('sm', $product['ptitle'] . ' Added To Cart');
            }

        }
    }
    public static function updateCart($request)
    {
        if (!empty($request['pid']) && !empty($request['op'])) {
            if (is_numeric($request['pid'])) {
                if (Cart::get($request['pid'])) {
                    if ($request['op'] == 'plus') {
                        Cart::update($request['pid'], ['quantity' => 1]);
                    } else if ($request['op'] == 'minus') {
                        Cart::update($request['pid'], ['quantity' => -1]);
                    }
                } else {
                    abort(404);
                }

            }

        }
    }
    public static function save_new($request)
    {
        $product_name = 'default.png';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->reesize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }
        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->pimage = $product_name;
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();

        Session::flash('sm', 'The Product saved successfully!');
    }
    public static function update_item($request, $id)
    {
        $product_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->reesize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }
        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];

        if ($product_name) {
            $product->pimage = $product_name;
        }

        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();
        Session::flash('sm', 'Product updated successfully!');

    }

}