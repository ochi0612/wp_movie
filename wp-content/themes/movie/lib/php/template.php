<?php

function create_thumbnail($post_id) {
    $host = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"].'/';
    $thumbnail_url = preg_replace('/http.*?\/\/.*?\//', $host, get_the_post_thumbnail_url( $post_id, 'thumbnail' ));

    return $thumbnail_url;
}

function new_arrival_list() {
    global $wpdb;
    $content = '';
    $content_title = '<h2>新着一覧</h2>';
    $transition_btn = '<a href="#" class="more-btn">もっと見る</a>';
    $sql = 'SELECT * FROM '.$wpdb->posts.' WHERE `post_status`="publish" AND `post_type`="post" ORDER BY `post_date` DESC LIMIT 5 ';

    $data = get_db_content($sql);
    foreach ($data as $value) {
        $thumbnail_url = create_thumbnail($value->ID);
        $date = preg_replace('/\s(\d{2}\:?)+/','',$value->post_date);

        $content_list .= '
            <li>
                <a href="'.site_url( '/' ).'?p='.$value->ID.'" class="clearfix">
                    <img src="'.$thumbnail_url.'" alt="'.$value->post_title.'">
                    <div class="about">
                        <p class="title">'.$value->post_title.'</p>
                        <p><span class="star">★★★★★</span></p>
                        <p class="timestamp">'.$date.'</p>
                    </div>
                </a>
            </li>
        ';
    }

    $content .= '
        <section>
            <div class="new-arrival-list content-block">
                '.$content_title.'
                <ul>
                    '.$content_list.'
                </ul>
                '.$transition_btn.'
            </div>
        </section>
    ';
    return $content;

}