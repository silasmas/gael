<?php

namespace App\Http\Controllers\Web;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

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
        $json_url = asset('/js/team.json');
        $client = new Client();

        try {
            $response = $client->request('GET', $json_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'verify'  => false
            ]);
            $json_result = json_decode($response->getBody(), false);

            if (Session::has('locale')) {
                $sessionLocale = Session::get('locale');

                if ($sessionLocale === 'en') {
                    return view('welcome', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('welcome', [
                        'json_result' => $json_result->fr
                    ]);
                }

            } else {
                $appLocale = app()->getLocale();
    
                if ($appLocale === 'en') {
                    return view('welcome', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('welcome', [
                        'json_result' => $json_result->fr
                    ]);
                }
            }

        } catch (ClientException $ex) {
            return response()->json($ex, 404);
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
     * GET: View team page
     *
     * @return \Illuminate\View\View
     */
    public function team()
    {
        $json_url = asset('/js/team.json');
        $client = new Client();

        try {
            $response = $client->request('GET', $json_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'verify'  => false
            ]);
            $json_result = json_decode($response->getBody(), false);

            if (Session::has('locale')) {
                $sessionLocale = Session::get('locale');

                if ($sessionLocale === 'en') {
                    return view('team', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('team', [
                        'json_result' => $json_result->fr
                    ]);
                }

            } else {
                $appLocale = app()->getLocale();
    
                if ($appLocale === 'en') {
                    return view('team', [
                        'json_result' => $json_result->en
                    ]);

                } else {
                    return view('team', [
                        'json_result' => $json_result->fr
                    ]);
                }
            }

        } catch (ClientException $ex) {
            return response()->json($ex, 404);
        }
    }

    /**
     * GET: View team member page
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function teamDatas($id)
    {
        $json_url = asset('/js/team.json');
        $client = new Client();

        try {
            $response = $client->request('GET', $json_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'verify'  => false
            ]);
            $json_result1 = json_decode($response->getBody(), false);
            $json_result2 = json_decode($response->getBody(), false);

            if (Session::has('locale')) {
                $sessionLocale = Session::get('locale');

                if ($sessionLocale === 'en') {
                    foreach ($json_result1->en as $team):
                        if ($team->id === (int) $id) {
                            return view('team', [
                                'member' => $team,
                                'team' => $json_result2->en
                            ]);
                        }
                    endforeach;

                } else {
                    foreach ($json_result1->fr as $team):
                        if ($team->id === (int) $id) {
                            return view('team', [
                                'member' => $team,
                                'team' => $json_result2->fr
                            ]);
                        }
                    endforeach;
                }

            } else {
                $appLocale = app()->getLocale();

                if ($appLocale === 'en') {
                    foreach ($json_result1->en as $team):
                        if ($team->id === (int) $id) {
                            return view('team', [
                                'member' => $team,
                                'team' => $json_result2->en
                            ]);
                        }
                    endforeach;

                } else {
                    foreach ($json_result1->fr as $team):
                        // dd($team);
                        if ($team->id === (int) $id) {
                            return view('team', [
                                'member' => $team,
                                'team' => $json_result2->fr
                            ]);
                        }
                    endforeach;
                }
            }

        } catch (ClientException $ex) {
            return response()->json($ex, 404);
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
