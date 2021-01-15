<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['pocet_navstev'=>$this->pocitadlo2()]);
    }

    public function pocitadlo() {

        $servername = "localhost";
        $username = "root";
        $password = "dtb456";
        $dbname = "blog";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE pocitadlo SET visits = visits+1 WHERE id = 1";
        $conn->query($sql);

        $sql = "SELECT visits FROM pocitadlo WHERE id = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $visits = $row["visits"];
            }
        } else {
            echo "no results";
        }

        $conn->close();
        return $visits;
    }

    public function pocitadlo2()
    {
        DB::update('update pocitadlo set visits=visits+1 where id = 1');
        DB::select('select visits from pocitadlo where id=1');
        DB::commit();
    }
}
