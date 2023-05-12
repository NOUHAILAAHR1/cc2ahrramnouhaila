<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{   use WithFileUploads;
    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $status;
    public $link;
    public $image;

    public function addSlide(){
        $this->validate([
             'top_title'=>'required',
             'title'=>'required',
             'sub_title'=>'required',
             'offer'=>'required',
            'status'=>'required',
             'link'=>'required',
             'image'=>'required',


        ]);
        $slide =new HomeSlider();
        $slide ->top_title =$this->top_title;
        $slide ->title =$this->title;
        $slide ->sub_title =$this->sub_title;
        $slide ->offer =$this->offer;
        $slide ->status =$this->status;
        $slide ->link =$this->link;
        $imageNmae = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider',$imageNmae);
        $slide ->image=  $imageNmae;
        $slide->save();
        session()->flash('message','slade has been add successfuly! ');

    }
    public function render()

    {
        return view('livewire.admin.admin-add-home-slider-component');
    }
}
