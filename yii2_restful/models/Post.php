<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $post_meta_id
 * @property string $user_id
 * @property string $title
 * @property string $author
 * @property string $excerpt
 * @property string $image
 * @property string $content
 * @property string $tags
 * @property string $view_count
 * @property string $comment_count
 * @property string $favorite_count
 * @property string $like_count
 * @property string $thanks_count
 * @property string $hate_count
 * @property integer $status
 * @property string $order
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_meta_id', 'user_id', 'view_count', 'comment_count', 'favorite_count', 'like_count', 'thanks_count', 'hate_count', 'status', 'order', 'created_at', 'updated_at'], 'integer'],
            [['title', 'content', 'tags'], 'required'],
            [['content'], 'string'],
            [['title', 'excerpt', 'image', 'tags'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_meta_id' => '版块ID',
            'user_id' => '作者ID',
            'title' => '标题',
            'author' => '作者',
            'excerpt' => '摘要',
            'image' => '封面图片',
            'content' => '内容',
            'tags' => '标签 用英文逗号隔开',
            'view_count' => '查看数',
            'comment_count' => '评论数',
            'favorite_count' => '收藏数',
            'like_count' => '喜欢数',
            'thanks_count' => '感谢数',
            'hate_count' => '讨厌数',
            'status' => '状态 1:发布 0：草稿',
            'order' => '排序 0最大',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
        ];
    }
}
