<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function product(){
        return view('product', ['product' => 'Product
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/category/marbel-edu-games"> Edu Games</a>
            </li>
            <li>
            <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games"> Kids Games</a>
            </li>
            <li>
            <a href="https://www.educastudio.com/category/riri-story-books"> Story Books</a>
            </li>
            <li>
            <a href="https://www.educastudio.com/category/kolak-kids-songs"> Kids Song</a>
            </li>
        </ul>']);
    }

    public function news(){
        return view('news', ['news' => 'News
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/news">News 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">News 2</a>
            </li>
        </ul>']);
    }

    public function program(){
        return view('program', ['program' => 'Program
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/program/karir">Program Karir</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/karir">Program Magang</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a>
            </li>
        </ul>']);
    }

    public function aboutus(){
        return view('about-us', ['aboutus' => 'This Is Our Company Profile']);
    }

    public function contactus(){
        return view('contact-us', ['contactus' => '
        CONTACT US <br>
        <ul>
            <li> Phone : 123xxxxx </li>
            <li> Mail : winterkim@gmail.com </li>
        </ul>
        <label>Contact</label> <br>
            <input placeholder="Contact">
            <button>Enter</button>
        ']);
    }


}
