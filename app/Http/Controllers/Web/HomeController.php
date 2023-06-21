<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['changeLanguage', 'index', 'about', 'events', 'eventDatas', 'resources', 'resourceEntity', 'resourceEntityDatas', 'donate']);
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Change language
     *
     * @param  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }

    /**
     * GET: View home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * GET: View about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * GET: View events page
     *
     * @return \Illuminate\View\View
     */
    public function events()
    {
        return view('event');
    }

    /**
     * GET: View event details page
     *
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function eventDatas($id)
    {
        return view('event');
    }

    /**
     * GET: View resources page
     *
     * @return \Illuminate\View\View
     */
    public function resources()
    {
        return view('resource');
    }

    /**
     * GET: View specific resource page
     *
     * @param  $entity
     * @return \Illuminate\View\View
     */
    public function resourceEntity($entity)
    {
        return view('resource');
    }

    /**
     * GET: View specific resource page
     *
     * @param  $entity
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function resourceEntityDatas($entity, $id)
    {
        return view('resource');
    }

    /**
     * GET: View donation page
     *
     * @param  $entity
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function donate()
    {
        return view('donate');
    }

    // ==================================== HTTP POST METHODS ====================================
}
