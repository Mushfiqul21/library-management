<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index(){
        $data['books'] = Book::all();
        return response()->json(['status'=>true, 'message' => 'Book List', 'data' => $data], 200);
    }

    public function store(Request $request){
        try{
            $validateBook = Validator::make($request->all(),[
                'title' => 'required',
                'author' => 'required',
                'price' => 'required',
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if($validateBook->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed',
                    'errors' => $validateBook->errors()], 400);
            }

            $book = new Book();
            $book->title = $request->title;
            $book->author = $request->author;
            $book->price = $request->price;
            if ($request->hasFile('thumbnail')) {
                $book->thumbnail = uploadImage($request->file('thumbnail'), 'images',$book->thumbnail);
            }
            $book->save();
            return response()->json([
                'status' => true,
                'message' => 'Successfully Data Stored',
                'data' => $book
            ], 200);

        }
        catch(\Exception $e){
            return response()->json(['status'=>'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function edit($id){
        $data['book'] = Book::find($id);
        if(!$data['book']){
            return response()->json([
                'status' => false,
                'message' => 'Book not found'
            ],404);
        }
        return response()->json(['status'=>true, 'message' => 'Book Founded', 'data' => $data], 200);
    }

    public function update(Request $request, $id){
        try{
            $book = Book::find($id);
            if(!$book){
                return response()->json([
                    'status' => false,
                    'message' => 'Book not found'
                ],404);
            }
            $validateBook = Validator::make($request->all(),[
                'title' => 'required',
            ]);
            if($validateBook->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed',
                    'errors' => $validateBook->errors()], 400);
            }
            $book->title = $request->title;
            $book->author = $request->author;
            $book->price = $request->price;
            if ($request->hasFile('thumbnail')) {
                $book->thumbnail = uploadImage($request->file('thumbnail'), 'images', $book->thumbnail);
            }
            $book->save();
            return response()->json([
                'status' => true,
                'message' => 'Successfully Data Updated',
                'data' => $book
            ], 200);

        }
        catch(\Exception $e){
            return response()->json(['status'=>'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id){
        try{
            $book = Book::find($id);
            if(!$book){
                return response()->json([
                    'status' => false,
                    'message' => 'Book not found'
                ]);
            }
            $publicPath = public_path('images/').$book->thumbnail;
            if(File::exists($publicPath)) {
                unlink($publicPath);
            }
            $book->delete();
            return response()->json([
                'status' => true,
                'message' => 'Successfully Data Deleted',
            ],200);
        }
        catch(\Exception $e){
            return response()->json(['status'=>'error', 'message' => $e->getMessage()], 500);
        }
    }


}
