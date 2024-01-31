<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quiz".
 *
 * @property int $id
 * @property string|null $vraag
 * @property string|null $antwoord1
 * @property string|null $antwoord2
 * @property string|null $antwoord3
 * @property string|null $antwoord4
 * @property int|null $juiste_antwoord
 */
class Quiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quiz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['juiste_antwoord'], 'integer'],
            [['vraag', 'antwoord1', 'antwoord2', 'antwoord3', 'antwoord4'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vraag' => 'Vraag',
            'antwoord1' => 'Antwoord1',
            'antwoord2' => 'Antwoord2',
            'antwoord3' => 'Antwoord3',
            'antwoord4' => 'Antwoord4',
            'juiste_antwoord' => 'Juiste Antwoord',
        ];
    }
}
