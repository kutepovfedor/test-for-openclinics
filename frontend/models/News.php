<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int $statis Активность
 * @property string $name Название
 * @property string $alias ЧПУ (Alias)
 * @property string $description Описание
 * @property string $content Контент
 * @property string $create_at Дата
 * @property string $Столбец 8 Обновлено
 */
class News extends \yii\db\ActiveRecord
{
    const
        ST_WAIT     = 0,
        ST_ACTIVE   = 1,
        ST_BLOCK    = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statis'], 'integer'],
            [['name', 'alias', 'description', 'content'], 'required'],
            [['content'], 'string'],
            [['create_at', 'Столбец 8'], 'safe'],
            [['name', 'alias', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'statis' => 'Активность',
            'name' => 'Название',
            'alias' => 'ЧПУ (Alias)',
            'description' => 'Описание',
            'content' => 'Контент',
            'create_at' => 'Дата',
            'Столбец 8' => 'Обновлено',
        ];
    }

    public static function statusList()
    {
        return [
            self::ST_WAIT     => 'Модерация',
            self::ST_ACTIVE   => 'Активно',
            self::ST_BLOCK    => 'Заблокировано',
        ];
    }
}
