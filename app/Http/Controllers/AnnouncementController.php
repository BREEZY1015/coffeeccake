<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use Illuminate\Http\Response;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('announcement.announcement', [
            'header'    => 'Users Management',
            'announcement'     => Announcement::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement.form', [
            'header'    => 'Add Announcement',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnouncementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'header' => ['required', 'string', 'max:255'],
            'sub_header' => ['required', 'string',  'max:255'],
            'image' => ['required'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'),$imageName);

        Announcement::create([
            'header'  =>  $request->header,
            'sub_header'  =>  $request->sub_header,
            'image'  => $imageName,
            'description'  =>  $request->description,
            'user_id' => $request->user_id

        ]);
        session()->flash('status', 'Added Announcement Successfully!');

        // Redirect to the List of Users
        return redirect('/announcement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::find($id);
        return view('announcement.form', [
            'header'    => 'Update Announcement',
            'announcement' => $announcement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnouncementRequest  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnouncementRequest $request, $id)
    {
        $announcement = Announcement::find($id);

        $imageName = $announcement->image;
        if($request->image) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/images'),$imageName);

        }
        
        $announcement->update(
            [
                'header'  =>  $request->header,
                'sub_header'  =>  $request->sub_header,
                'image'  => $imageName,
                'description'  =>  $request->description,
                'user_id' => $request->user_id
            ]
        );

        session()->flash('status', 'Announcement Updated Successfully!');
        return redirect('/announcement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */

        public function destroy(Request $request, $id)
        {
            $announcement = Announcement::findOrFail($id);
    
            $announcement->delete();
            return redirect('/announcement');
        }
    
}
