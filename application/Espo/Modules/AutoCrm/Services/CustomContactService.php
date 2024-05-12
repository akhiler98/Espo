<?php

namespace Espo\AutoCrm\Services;

use Espo\Core\Utils\Services\Base;

class CustomContactService extends Base
{
    public function findContactsByEmail($email)
    {
        
        $entityManager = $this->getContainer()->get('entityManager');
        $contactRepository = $entityManager->getRepository('Contact');

        
        $contacts = $contactRepository->findBy(['emailAddress' => $email]);

        return $contacts;
    }
}