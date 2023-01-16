<?php 
function share_link_podcast(){

    $podTitle = "TJ Murphy - Adventurous Entrepreneurs";
    $links = array(
        'apple' => 'https://podcasts.apple.com/us/podcast/adventurous-entrepreneurs/id1657250189?uo=4',
        'spotify' => 'https://open.spotify.com/show/1tT6FeISK0cc4VaXw9vQmS',
        'youtube' => 'https://www.youtube.com/channel/UCjfVxrB3f2jcRprJfMDxtug',
        'google' => 'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy50cmFuc2lzdG9yLmZtL2FkdmVudHVyb3VzLWVudHJlcHJlbmV1cnM=',
        'google_icon' => 'https://boostleadsonline.com/tjpodcast/wp-content/uploads/2022/10/google-podcast.png',
    );
    $podcastshare = '<ul class="scicons-pod" style="padding-left: 0px; padding-bottom: 10px">';
    foreach($links as $name => $link){
        if (filter_var($link, FILTER_VALIDATE_URL) === false) {
            continue;
        }
        $icon = '';
        switch($name){
            case 'apple':
                $icon = 'fa fa-apple';
                break;
            case 'spotify':
                $icon = 'fa fa-spotify';
                break;
            case 'youtube':
                $icon = 'fa fa-youtube-play';
                break;
            case 'google':
                $icon = '<img src="'.esc_url($links['google_icon']).'" class="g-pod">';
                break;
        }
        $podcastshare .= '<li><a href="'.esc_url($link).'" title="'.esc_attr($podTitle).'" target="_blank" class="iconlink" rel="noopener"><i class="'.$icon.' iconslect" aria-hidden="true"></i></a></li>';
    }
    $podcastshare .= '</ul>';

    return $podcastshare;
}
add_shortcode('podcast_links','share_link_podcast');
?>