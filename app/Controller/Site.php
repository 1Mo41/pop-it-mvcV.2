<?php

namespace Controller;
use Model\Compound;
use Model\Subdivision;
use Model\Position;
use Model\TypeS;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Model\Employees;
use Src\Auth\Auth;
class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/add_personal');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    public function add_personal(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'POST' && Employees::create($request->all()) && Compound::create($request->all()) && TypeS::create($request->all())
            && Position::create($request->all()) && Subdivision::create($request->all())) {
        app()->route->redirect('/add_personal');
    }{
            return new View('site.add_personal');
        }

    }
}