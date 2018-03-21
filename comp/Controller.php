<?php

/*
  The Controller class is responsible for the business logic.
  It takes care of building the necessary options that need to passed along to the API.
  we can add more methods to this class based on our business requirements and demand data from the model.
 */

include 'Model.php';

Class Controller {

    // since we want to show only the latest 9 results.
    const PAGE_OPTIONS = '?page_size=9&page=1';

    // public method to fetch search and top 9 posts.
    public function getListOfPosts($feedID = "", $searchTerms = "") {
        $options = self::PAGE_OPTIONS;

        // Breaking and remaking the string to avoid any whitespace issues.
        $array = array_filter(explode(' ', $searchTerms));
        $trimmedArray = array_map("trim", $array);

        // If search terms are provided and are not equal to empty string append them tp the options string.
        if (isset($searchTerms) && !trim($searchTerms) == '') {
            $options = $options . "&search_terms=" . implode('&nbsp', $trimmedArray);
        }

        // Pass the informatino along to the model and ask for data.
        $newModel = new Model($feedID, $options);
        return $newModel->getFeedData();
    }

    // public method to fetch asset specific data.
    public function getAssetDetails($feedId = "", $assetId = "") {
        $options = "/" . $assetId;
        $newModel = new Model($feedId, $options);
        return $newModel->getFeedData();
    }

}
