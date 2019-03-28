namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
    public function index()
    {
        $users = User::all();
        
        return view('home', compact('users'));
    }
}
