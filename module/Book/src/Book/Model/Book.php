<?php
namespace Book\Model;

class Book
{
    public $id;
    public $title;
    public $isbn;
    public $abstract;

    public function exchangeArray($data)
    {
        $this->id = (!empty($data['book_id']) ? $data['book_id'] : null);
        $this->title = (!empty($data['book_title']) ? $data['book_title'] : null);
        $this->isbn = (!empty($data['book_isbn']) ? $data['book_isbn'] : null);
        $this->abstract = (!empty($data['book_abstract']) ? $data['book_abstract'] : null);
    }
}