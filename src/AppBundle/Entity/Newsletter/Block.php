<?php
/**
 * Created by PhpStorm.
 * User: theXuser
 * Date: 3/1/2017
 * Time: 7:30 PM
 */

namespace AppBundle\Entity\Newsletter;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blocks")
 */
class Block
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

}