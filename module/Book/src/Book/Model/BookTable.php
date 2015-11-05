<?php
namespace Book\Model;

use Zend\Db\TableGateway\TableGateway;

class BookTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function find($id)
    {
        $id = (int) $id;
        $rowSet = $this->tableGateway->select(array ('book_id' => $id));
        $row = $rowSet->current();
        if (!$row) {
            throw new \Exception('Could not find entity ' . $id);
        }
        return $row;
    }

    public function save(Book $book)
    {
        $data = array (
            'book_title' => $book->title,
            'book_isbn' => $book->isbn,
            'book_abstract' => $book->abstract,
        );
        $id = (int) $book->id;
        if (0 === $id) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->find($id)) {
                $this->tableGateway->update($data, array ('book_id' => $id));
            } else {
                throw new \Exception('Book with id ' . $id . ' does not exist');
            }
        }
    }
}