<?php

namespace App\Http\Controllers;
use App\Models\GlobalSetting;
use App\Models\NavigationItems;
use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Job;


class HomeController extends Controller
{
    public function index(){
        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Service')->where('page_type','!=','News & Events')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus;
        //return $menus->first()->submenus;

        //start Home
        //our service
        //  if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%service%")->where('page_type','Group')->latest()->first()!=null){
        //     $service_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%service%")->where('page_type','Group')->latest()->first()->id;
        //     $services = Navigation::query()->where('parent_page_id',$service_id)->latest()->get();
        // }
        // else{
        //     $services = null;
        // }
        //latest news
        //  if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%news%")->where('page_type','Group')->latest()->first()!=null){
        //     $news_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%news%")->where('page_type','Group')->latest()->first()->id;
        //     $news = Navigation::query()->where('parent_page_id',$news_id)->latest()->get();
        // }
        // else{
        //     $news = null;
        // }
        //our specilist
        // if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%specilist%")->where('page_type','Group')->latest()->first()!=null){
        //     $specilist_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%specilist%")->where('page_type','Group')->latest()->first()->id;
        //     $specilists = Navigation::query()->where('parent_page_id',$specilist_id)->latest()->get();

        // }
        // else{
        //     $specilists = null;
        // }
        //our statistics
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%statistic%")->where('page_type','Group')->latest()->first()!=null){
            $statistic_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%statistic%")->where('page_type','Group')->latest()->first()->id;
            $statistics = Navigation::query()->where('parent_page_id',$statistic_id)->latest()->get();
        }
        else{
            $statistics = null;
        } 
            //our Testimonials
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%testimonial%")->where('page_type','Group')->latest()->first()!=null){
            $testimonial_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%testimonial%")->where('page_type','Group')->latest()->first()->id;
            $testimonial = Navigation::query()->where('parent_page_id',$testimonial_id)->latest()->get();
        }
        else{
            $testimonial = null;
        }
        //End home
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }  
        //return $news;
        if(Navigation::all()->where('page_type','Doctor')->count()>0){
            $doctors_id = Navigation::all()->where('nav_name','doctor')->where('page_type','Group')->first()->id;
            $doctors = Navigation::query()->where('page_type','Doctor')->where('parent_page_id',$doctors_id)->where('page_status','1')->latest()->paginate(8);
        }
        else{
            $doctors = [];
        }
        if(Navigation::query()->where('nav_category','Main')->where('nav_name', 'LIKE', "%services%")->where('page_type','Group')->latest()->first()!=null){
            $service_id = Navigation::query()->where('nav_category','Main')->where('nav_name', 'LIKE', "%services%")->where('page_type','Group')->latest()->first()->id;
            $services = Navigation::query()->where('parent_page_id',$service_id)->where('page_type','Service')->latest()->paginate(8);
        }
        else{
            $services = [];
        } 
        $news = Navigation::query()->where('page_type','News & Events')->where('page_status','1')->latest()->paginate(8);
        $global_setting = GlobalSetting::all()->first(); 
        return view("website.index")->with(['testimonial'=>$testimonial,'statistics'=>$statistics,'services'=>$services,'doctors'=>$doctors,'news'=>$news,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'message'=>$message]);
    }
    public function category($menu){
        //return $menu." this is category";
        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Service')->where('page_type','!=','News & Events')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$menu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$menu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
        $slug_detail = Navigation::all()->where('nav_name',$menu);
        if($slug_detail->count()>0){
            $childs = $slug_detail->first()->childs;
        }
        else{
            $childs = [];
        }
        //
        if(Navigation::all()->where('nav_name',$menu)->count()>0){
                    //$normal_notice_page = Navigation::all()->where('nav_name',$slug)->first();
            $category_id = Navigation::all()->where('nav_name',$menu)->first()->id;
            if(Navigation::all()->where('nav_name',$menu)->first()->page_type=="Photo Gallery"){//single gallery
                $photos = Navigationitems::query()->where('navigation_id',$category_id)->latest()->get();
                return view("website.page_type.gallery")->with(['slug1'=>$menu,'photos'=>$photos,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting]);
            }
            if(Navigation::all()->where('nav_name',$menu)->first()->page_type=="Normal"){
                $category_type = "Normal";
            }
            elseif(Navigation::all()->where('parent_page_id',$category_id)->count()>0){//group
                $category_type = Navigation::all()->where('parent_page_id',$category_id)->first()->page_type;
            }
           else{
                $category_type = Navigation::all()->where('nav_name',$menu)->first()->page_type;
                return "please contact with Admin"; 
            }
         }
        else{
            $category_type = null;
        }
        if($category_type == "Photo Gallery"){//albums
            //return "return to page gallary";
            $slug1 = Navigation::where('nav_name',$menu)->first();
            $albumbs = Navigation::query()->where('parent_page_id',$category_id)->where('page_status','1')->where('page_type','Photo Gallery')->latest()->get();
            return view("website.page_type.album")->with(['slug1'=>$slug1,'albumbs'=>$albumbs,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting]);
        }
        if($category_type == "News & Events"){
            //return "return to page gallary";
            $slug1 = Navigation::where('nav_name',$menu)->first();
            $newsevents = Navigation::query()->where('parent_page_id',$category_id)->where('page_status','1')->latest()->get();
            return view("website.page_type.news-event")->with(['slug1'=>$slug1,'newsevents'=>$newsevents,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting]);
        }
        if($category_type == "Doctor"){
            $slug1 = Navigation::where('nav_name',$menu)->first();
            //return "return to page gallary";
            //$doctors = Navigation::query()->where('parent_page_id',$category_id)->where('page_status','1')->latest()->get();            
            $doctors = Navigation::query()->where('page_type','Doctor')->where('page_status','1')->latest()->get();
            return view("website.page_type.doctor")->with(['slug1'=>$slug1,'doctors'=>$doctors,'menus'=>$menus]);
        }
        elseif($category_type == "Service"){
            $slug1 = Navigation::where('nav_name',$menu)->first();
            // return "return to view Notice";
            $services = Navigation::query()->where('parent_page_id',$category_id)->latest()->get();
            return view("website.page_type.service")->with(['slug1'=>$slug1,'services'=>$services,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting]);
        }
        elseif($category_type == "Normal"){
            //return $category_id;
            $slug1 = Navigation::where('nav_name',$menu)->first();
            $normal = Navigation::find($category_id);
            return view("website.page_type.normal")->with(['childs'=>$childs,'slug1'=>$slug1,'normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting]);
        }
        else{
            if($jobs!=null){        
                 return "contact with admin";    
                 return view("website.job-list")->with(['childs'=>$childs,'slug1'=>$menu,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting]);
            }
            else{
                return redirect('/');
            }
        }

    }

  public function subcategory($slug1,$submenu){
       $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Service')->where('page_type','!=','News & Events')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$submenu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
        $slug_detail = Navigation::all()->where('nav_name',$submenu)->first();
        if(Navigation::all()->where('nav_name',$slug1)->count()>0){
            $child = Navigation::all()->where('nav_name',$slug1)->first();
            $childs = $child->childs;
        }
        else {
            $childs = [];
        }
        
        //
       
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            
            $subcategory_id = Navigation::all()->where('nav_name',$slug1)->first()->id;
            $sub_sub_id = Navigation::all()->where('nav_name',$submenu)->first()->id;//group/group/page_type(doctor)
           if(Navigation::all()->where('nav_name',$submenu)->first()->page_type=="Photo Gallery"){//single gallary
               $photos = Navigationitems::query()->where('navigation_id',$subcategory_id)->latest()->get();
              return view("website.page_type.gallery")->with(['slug1'=>$slug1,'photos'=>$photos,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
           }
           elseif(Navigation::all()->where('nav_name',$submenu)->first()->page_type=="Service"){//sub single service
               $normal = Navigation::where('nav_name',$submenu)->first();
               $slug1 = Navigation::where('nav_name',$slug1)->first();
               return view("website.page_type.normal")->with(['childs'=>$childs,'slug1'=>$slug1,'normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
           }
           elseif(Navigation::all()->where('nav_name',$submenu)->first()->page_type=="News & Events"){//sub single service
               $normal = Navigation::where('nav_name',$submenu)->first();
               $slug1 = Navigation::where('nav_name',$slug1)->first();
               return view("website.page_type.normal")->with(['childs'=>$childs,'slug1'=>$slug1,'normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
           }
          
           
            elseif( Navigation::all()->where('parent_page_id',$sub_sub_id)->count()>0){//sub single service
                if(Navigation::all()->where('parent_page_id',$sub_sub_id)->first()->page_type=="Doctor"){
                     $subcategory_type = "Doctor";
                }
           }
            elseif(Navigation::all()->where('nav_name',$submenu)->first()->page_type=="Normal"){//sub single service
               
                $normal = Navigation::where('nav_name',$submenu)->first();
               $slug1 = Navigation::where('nav_name',$slug1)->first();
               return view("website.page_type.normal")->with(['childs'=>$childs,'slug1'=>$slug1,'normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
           }
           elseif(Navigation::all()->where('parent_page_id',$subcategory_id)->count()>0){
                $subcategory_type = Navigation::all()->where('parent_page_id',$subcategory_id)->first()->page_type;//slug/slug2(GROUP)
            }
            else{
                //return Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->first()->page_type;
                if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Service')->count()>0){
                    return "please contact with admin";
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->first()->page_type;//slug/slug2(group)
                }
                else{
                    return redirect('/');//submenu is page_type=Group and its internal items are empty
                }
            }
           
         }
        else{
             $subcategory_type = null;
         }
         #return $subcategory_type;
        if($subcategory_type == "Photo Gallery"){//Albumb 
            $slug1 = Navigation::where('nav_name',$slug1)->first();
            $albumbs = Navigation::query()->where('parent_page_id',$subcategory_id)->latest()->get();
            return view("website.page_type.album")->with(['slug1'=>$slug1,'albumbs'=>$albumbs,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        if($subcategory_type == "Video Gallery"){//Albumb 
            $slug1 = Navigation::where('nav_name',$slug1)->first();
            $albumbs = Navigation::query()->where('parent_page_id',$subcategory_id)->latest()->get();
            return view("website.page_type.album")->with(['slug1'=>$slug1,'albumbs'=>$albumbs,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "Service"){
            $slug1 = Navigation::where('nav_name',$slug1)->first();
            $services = Navigation::query()->where('parent_page_id',$subcategory_id)->first();
            return view("website.page_type.service")->with(['slug1'=>$slug1,'services'=>$services,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "Normal"){
            $normal = Navigation::find($subcategory_id);
            $slug1 = Navigation::where('nav_name',$slug1)->first();
            return view("website.page_type.normal")->with(['slug1'=>$slug1,'normal'=>$normal,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "News & Events"){
            $slug1 = Navigation::where('nav_name',$slug1)->first();
            $newsevents = Navigation::query()->where('parent_page_id',$subcategory_id)->latest()->get();
            return view("website.page_type.news-event")->with(['slug1'=>$slug1,'newsevents'=>$newsevents,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        if($subcategory_type == "Doctor"){
            $slug1 = Navigation::where('nav_name',$slug1)->first();
            $doctors = Navigation::query()->where('page_type','Doctor')->where('page_status','1')->where('parent_page_id',$sub_sub_id)->orderBy('position','ASC')->get();
            return view("website.page_type.doctor")->with(['slug1'=>$slug1,'doctors'=>$doctors,'menus'=>$menus,'slug_detail'=>$slug_detail]);
        }
        else{
            return redirect("/");
        }
    }
    public function singlePage($slug){
        $job =Navigation::all()->where('nav_name',$slug)->first();        
        $global_setting = GlobalSetting::all()->first(); 
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        return view("website.job_detail_single_page")->with(['job'=>$job,'menus'=>$menus,'global_setting'=>$global_setting]);
    }
    public function ReadMore($slug){
        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Service')->where('page_type','!=','News & Events')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        $normal = Navigation::where('nav_name',$slug)->first();
        $global_setting = GlobalSetting::all()->first(); 
        return view("website.page_type.normal")->with(['normal'=>$normal,'menus'=>$menus,'global_setting'=>$global_setting,'slug1'=>$slug]);
    }
    public function viewAll(){
         $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus;
         $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        $global_setting = GlobalSetting::all()->first();
        return view("website.all_category")->with(['job_categories'=>$job_categories,'global_setting'=>$global_setting,'menus'=>$menus]);
    }
  
}