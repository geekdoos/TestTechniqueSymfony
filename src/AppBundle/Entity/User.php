<?php
/**
 * Created by PhpStorm.
 * User: theXuser
 * Date: 3/1/2017
 * Time: 7:17 PM
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Ibrows\Bundle\NewsletterBundle\Model\User\MandantUserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser implements MandantUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function getMandant()
    {
        // TODO: Implement getMandant() method.
    }
}