<?php

namespace App\Http\Controllers;
use App\Models\Advertisement;
use App\Helpers\Helper;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;
use Throwable;

class AdvertisementController extends Controller
{
    // this trait to use uploadImage function
    use Helper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $advertisements= Advertisement::all();
            if(empty($advertisements))
            {
                return redirect()->route('adv.add');
            }else{
                return view('adv.ads')->with('advertisements',$advertisements);
            }


        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adv.addAds');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AdvertisementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
        try {



            // start transaction
            $fileName = "";
            if ($request->has('image')) {
                if($fileName != null){
                    $fileName=public_path('assets/images/advs/'.$fileName);
                    link(realpath($fileName));
                }

                // save img in public/adv/images
                $fileName = $this->uploadImage('advs',$request->image);
            }

            // create advertisement
        $advertisements = Advertisement::create([
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'image' => $fileName,
            'link' => $request['link'],
        ]);
            $advertisements->save();
            return redirect()->route('show.adv')->with(['success' => 'تم الاضافه  بنجاح']);

        } catch (Throwable $ex) {
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $advertisements =Advertisement::find($id);
            return view('adv.editAds', compact('advertisements'));

        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdvertisementRequest  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $advertisements= Advertisement::findOrFail($id);

            $fileName = $advertisements->image;


            if ($request->has('image')) {
                if($fileName != null){
                    $fileName=public_path('assets/images/advs/'.$fileName);
                    unlink(realpath($fileName));
                }

                // save img in public/adv/images
                $fileName = $this->uploadImage('advs', $request->image);
            }

            // $input = $request->all();
            // $advertisement->fill($input)->save();

            $advertisements->update([
                'start_date' => $request['start_date'],
                'end_date' => $request['end_date'],
                'image' => $fileName,
                'link' => $request['link'],
            ]);

            return redirect()->route('show.adv');
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $advertisement = Advertisement::findOrFail($id);

            if ($advertisement->image !== '') { // check if advertisement has image
                // remove image
                $fileName = public_path('assets/images/advs/' . $advertisement->image);
                unlink(realpath($fileName));
            }

            $advertisement->delete();

            return redirect()->route('show.adv')->with(['success' => 'تم  الحذف بنجاح']);
        } catch (Throwable $e) {

            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);
        }
    }

    // active advertisement
    public function active($id )
     {

        try {

            $advertisements= Advertisement::findOrFail($id);

         
            $advertisements->is_active? 0 : 1 ;
   
             $advertisements->save();
          
            return redirect()->back()->with(['success' => 'تمت العمليه  بنجاح']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
     }
}
