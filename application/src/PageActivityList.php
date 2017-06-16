<?php
namespace Application\Src;

use Concrete\Core\Page\PageList;

class PageActivityList extends PageList
{

    public function sortByDateModifiedAscending()
    {
        $this->query->orderBy('cDateModified', 'asc');
    }
    public function sortByDateModifiedDescending()
    {
        $this->query->orderBy('cDateModified', 'desc');
    }

    public function sortByDateAddedAscending()
    {
        $this->query->orderBy('cDateAdded', 'asc');
    }
    public function sortByDateAddedDescending()
    {
        $this->query->orderBy('cDateAdded', 'desc');
    }

    public function sortByAuthorModifiedAscending()
    {
        $this->query->orderBy('cvAuthorUID', 'asc');
    }
    public function sortByAuthorModifiedDescending()
    {
        $this->query->orderBy('cvAuthorUID', 'desc');
    }

    public function sortByAuthorIDAscending()
    {
        $this->query->orderBy('uID', 'asc');
    }
    public function sortByAuthorIDDescending()
    {
        $this->query->orderBy('uID', 'desc');
    }

}
