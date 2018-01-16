<?php

namespace App\Controller;

use App\Entity\ArticleEntity;
use Faulancer\Controller\AbstractController;
use Faulancer\Exception\DbException;
use Faulancer\Exception\ServiceNotFoundException;
use Faulancer\Http\Response;

/**
 * Class WebsiteController
 *
 * @package App\Controller
 * @author  Your Name <your.name@example.com>
 */
class WebsiteController extends AbstractController
{

    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('/pages/index.phtml');
    }

    /**
     * Full working example for fetching an article by it's id
     *
     * @param int $articleId
     *
     * @return Response
     *
     * @throws DbException
     * @throws ServiceNotFoundException
     */
    public function articleAction(int $articleId)
    {
        // This is a shorthand if you have the primary key
        $article = $this->getDb()->fetch(ArticleEntity::class, $articleId);

        // You could write it this way too (for where clauses by value)
        // $this->getDb()->fetch(ArticleEntity::class)->where('id', '=', $articleTitle);

        return $this->render('/pages/article.phtml', [
            'article' => $article
        ]);
    }

    /**
     * Add default assets which gets included in every action
     */
    protected function addAssets()
    {
        $this->getView()->addStylesheet('/css/main.css');
    }

}