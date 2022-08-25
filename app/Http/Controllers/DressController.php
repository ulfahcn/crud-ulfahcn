<?php

namespace App\Http\Controllers;
use App\Models\Dress;
use Illuminate\Http\Request;


class DressController extends Controller
{
    /**
     * @author Ulfah Choirun Nissa
     * @index fungsi untuk menampilkan seluruh data pada halaman
     * @create fugsi create mengarahkan ke form penginputan data
     * @store fugsi menyimpan data dari form inputan
     * @edit fugsi  mengarahkan ke form edit data
     * @update fugsi mengupdate data dari form edit
     * @destroy fugsi menghapus data dari yang dipilih berdasarkan id
     * @return void
     */
    public function index()
    {
        $blogs = Dress::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'merk'     => 'required',
            'color'   => 'required',
            'size'   => 'required',
        ]);

        $blog = Dress::create([
            'merk'            => $request->merk,
            'description'     => $request->description,
            'color'           => $request->color,
            'size'            => $request->size,
        ]);

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'merk'     => 'required',
            'size'   => 'required'
        ]);

        //gst data Blog by ID
        $blog = Dress::findOrFail($blog->id);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $blog->update([
                'merk'            => $request->merk,
                'description'     => $request->description,
                'color'           => $request->color,
                'size'            => $request->size,
            ]);


        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $blog = Dress::findOrFail($id);
        $blog->delete();

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
