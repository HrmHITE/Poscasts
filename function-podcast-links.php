<?php

//
function share_link_podcast(){

    $podTitle = "TJ Murphy - Adventurous Entrepreneurs";
    $appleLink = "https://podcasts.apple.com/us/podcast/podcastlink";
    $spotLink = "https://open.spotify.com/show/podcastlink";
    $youtubechannel = "https://www.youtube.com/channel/podcastlink";
    $googleLink = "https://podcasts.google.com/feed/podcastlink";
    $iconGooglpod = "https://mydomain.com/carpetwebsite/wp-content/uploads/2022/10/google-podcast.png";

    
        $podcastshare = '<ul class="scicons-pod" style="padding-left: 0px; padding-bottom: 10px">
                <li><a href="'.esc_url($appleLink).'" title="'.esc_attr($podTitle).'" target="_blank" class="iconlink" rel="noopener"><i class="fa fa-apple iconslect" aria-hidden="true"></i></a></li>
                <li><a href="'.esc_url($spotLink).'" title="'.esc_attr($podTitle).'" target="_blank" class="iconlink" rel="noopener"><i class="fa fa-spotify iconslect" aria-hidden="true"></i></a></li>
                <li><a href="'.esc_url($youtubechannel).'" title="'.esc_attr($podTitle).'" target="_blank" class="iconlink" rel="noopener"><i class="fa fa-youtube-play iconslect" aria-hidden="true"></i></a></li>
                <li><a href="'.esc_url($googleLink).'" title="'.esc_attr($podTitle).'" target="_blank" class="iconlink" rel="noopener"><i class="iconslect"><img src="'.esc_url($iconGooglpod).'" class="g-pod"></i></a></li>
            </ul>';

    return $podcastshare;
}
add_shortcode('podcast_links','share_link_podcast');

//End function podcast
