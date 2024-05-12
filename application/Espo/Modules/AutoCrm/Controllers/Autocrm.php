<?php

namespace Espo\Modules\AutoCrm\Controllers;

use Espo\Core\Exceptions\NotFound;

class Autocrm extends \Espo\Core\Controllers\Base
{
    public function actionFindContactsByEmail($params, $data, $request)
    {
        $email = $request->getQueryParam('email');

        if (empty($email)) {
            throw new NotFound("Email parameter is missing.");
        }

        // $customContactService = $this->getContainer()->get('customContactService');


        // $contacts = $customContactService->findContactsByEmail($email);

        // var_dump($contacts);

        // foreach ($contacts as $contact) {
        //     echo 'Contact Name: ' . $contact->get('name') . '<br>';
        //     echo 'Contact Email: ' . $contact->get('emailAddress') . '<br>';
        //     
        // }

        return  $email;
    }
}