<?php

namespace App\Http\Controllers;

use App\http\Models\News;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //Вывод всех новостей
    public function index()
    {
        $news = News::paginate(7);
        return view('news.news', [
            'article' => $news
        ]);
    }

    //Создание новостей с валидацией данных
    public function create(StoreBlogPost $request)
    {
        News::create([
            'title' => $request->input('title'),
            'img' => $request->input('img'),
            'news' => $request->input('news')
        ]);
        return redirect()->back();
    }

    //Показ данных
    public function show(News $news)
    {
        $news::where('id', $news)->first();
        return view('news.show', [
            'news' => $news
        ]);
    }

    //Обновление данных
    public function update(News $news, StoreBlogPost $request)
    {
        $news->update([
            'title' => $request->title,
            'img' => $request->img,
            'news' => $request->news
        ]);
        return redirect()->route('news.index');
    }

    //Удаление данных
    public function delete(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }

    //Вывод новости подробнее
    public function more(News $news)
    {
        $comments = $news->comments()->get();
        return view('news.more', [
            'news' => $news,
            'comments' => $comments
        ]);
    }
}
