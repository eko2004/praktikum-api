<?php
public function search(Request $request)
{
    $query = Book::query();

    if ($request->has('category')) {
        $query->where('category', $request->category);
    }

    if ($request->has('title')) {
        $query->where('title', 'like', '%' . $request->title . '%');
    }

    return $query->paginate(10);
}
