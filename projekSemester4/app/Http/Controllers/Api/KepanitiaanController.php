<?php
namespace App\Http\Controllers\Api;

//import Model "Post"
use App\Models\Kepanitiaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//import Resource "KepanitiaanResource"
use App\Http\Resources\KepanitiaanResource;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

//import Facade "Validator"
use Illuminate\Support\Facades\Validator;

class KepanitiaanController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $kepanitiaan = Kepanitiaan::latest()->paginate(5);

        //return collection of posts as a resource
        return new KepanitiaanResource(true, 'List Data Kepanitiaan', $kepanitiaan);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'divisi' => 'required',
            'syarat' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $kepanitiaan = Kepanitiaan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'divisi' => $request->divisi,
            'syarat' => $request->syarat,
        ]);

        //return response
        return new KepanitiaanResource(true, 'Data Kepanitiaan Berhasil Ditambahkan!', $kepanitiaan);
    }

    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $kepanitiaan = Kepanitiaan::find($id);

        //return single post as a resource
        return new KepanitiaanResource(true, 'Detail Data Kepanitiaan!', $kepanitiaan);
    }

    public function update(Request $request, $id)
    {

        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'divisi' => 'required',
            'syarat' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $kepanitiaan = Kepanitiaan::find($id);

        // if ($request->hasFile('image')) {

        //     //upload image
        //     $image = $request->file('image');
        //     $image->storeAs('public/posts', $image->hashName());

        //     //delete old image
        //     Storage::delete('public/posts/' . basename($post->image));

        //     //update post with new image
        //     $post->update([
        //         'image' => $image->hashName(),
        //         'title' => $request->title,
        //         'content' => $request->content,
        //     ]);
        // } else {
            //update post without image
            $kepanitiaan->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'divisi' => $request->divisi,
                'syarat' => $request->syarat,
            ]);
        // }

        //return responese
        return new KepanitiaanResource(true, 'Data Kepanitiaan Berhasil Diedit', $kepanitiaan);
    }


    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id)
    {

        //find post by ID
        $kepanitiaan = Kepanitiaan::find($id);

        // //delete image
        // Storage::delete('public/posts/' . basename($kepanitiaan->image));

        //delete post
        $kepanitiaan->delete();

        //return response
        return new KepanitiaanResource(true, 'Data Kepanitiaan Berhasil Dihapus!', null);
    }
}