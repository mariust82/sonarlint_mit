<?php
require_once 'application/controllers/AbstractLoggedInController.php';
require_once 'application/models/dao/AcademyCategories.php';

class CategoriesController extends AbstractLoggedInController {

    protected function service() {
        $categories = new AcademyCategories();
        $this->response->attributes("categories", $categories->getAll());
        $this->response->attributes("totalGuides", $categories->getCategoryTotalGuides());
    }
