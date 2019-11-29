<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kuote Entity
 *
 * @property int $id
 * @property string $kuote
 * @property string $author_id
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property bool|null $by_admin
 * @property string|null $photo
 *
 * @property \App\Model\Entity\Author $author
 */
class Kuote extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'kuote' => true,
        'author_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'deleted_at' => true,
        'by_admin' => true,
        'photo' => true,
        'author' => true,
    ];
}
