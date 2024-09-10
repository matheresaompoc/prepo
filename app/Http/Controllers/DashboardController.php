namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function intro()
    {
        return view('intro');
    }

    public function skill()
    {
        return view('skill');
    }

    public function work()
    {
        return view('work');
    }

    public function contact()
    {
        return view('contact');
    }
}