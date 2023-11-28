<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * 
 */
class HomeController extends Controller
{
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
        try {
            return view('welcome');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * GET: View about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        try {
            return view('about');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * GET: View ministries page
     *
     * @return \Illuminate\View\View
     */
    public function ministries()
    {
        try {
            return view('ministry');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * GET: View event details page
     *
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function ministryDatas($id)
    {
        try {
            return view('ministry');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * GET: View discography page
     *
     * @return \Illuminate\View\View
     */
    public function discography()
    {
        try {
            return view('discography');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * GET: View specific album page
     *
     * @param  $entity
     * @return \Illuminate\View\View
     */
    public function discographyEntity($entity)
    {
        try {
            return view('discography');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * GET: View specific song page
     *
     * @param  $entity
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function discographyEntityDatas($entity, $id)
    {
        try {
            return view('discography');

        } catch (\Throwable $th) {
            abort(404);
        }
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
        try {
            return view('donate');

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    // ==================================== HTTP POST METHODS ====================================
}
