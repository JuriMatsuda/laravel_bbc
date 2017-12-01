<?php
class Post extends Eloquent {
    public function Comments() {
        return $this -> hasMany('Comment', 'post_id');
    }

    public function Cotegory() {
        return $this -> belongsTo('Categoey', 'cat_id');
    }
}