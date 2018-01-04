<?php

namespace App\Controller;

use App\Entity\ArticleEntity;
use Faulancer\Controller\AbstractController;
use Faulancer\Http\Response;
use ORM\Exception\IncompletePrimaryKey;
use ORM\Exception\NoEntity;

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
     * @throws IncompletePrimaryKey
     * @throws NoEntity
     */
    public function articleAction(int $articleId)
    {
        // This is a shorthand if you have the primary key by the tflor/orm package
        $article = $this->getDb()->fetch(ArticleEntity::class, $articleId);

        // You could write it this way too (for where clauses by string)
        // $this->getDb()->fetch(ArticleEntity::class)->where('id', '=', $articleTitle);

        return $this->render('/pages/article.phtml', [
            'article' => $article
        ]);
    }

    protected function addDefaultAssets()
    {
        $this->getView()->addStylesheet('/css/main.css');
    }

}