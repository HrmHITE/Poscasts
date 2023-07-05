<?php 

//Podcast function v3
function share_link_podcast(){

    $podTitle = "Logan Hughes - THE GET A JOB PODCAST";
    $links = array(
        "https://podcasts.apple.com/us/podcast/podcastlink",
        "https://open.spotify.com/show/podcastlink",
        "https://www.amazon.com",
        "https://podcasts.google.com/feed/podcastlink"
    );
    $icons = array(
        "fa fa-apple",
        "fa fa-spotify",
        "fa fa-amazon",
        ""
    );
    $imgSrc = "https://boostleadsonline.com/adwpodcst/wp-content/uploads/google-podcast.png";
  
    $podcastshare = '<ul class="scicons-pod" style="padding-left: 0px; padding-bottom: 10px">';
    for ($i=0; $i<count($links); $i++) {
        $iconHtml = ($i == 3) ? '<img src="'.esc_url($imgSrc).'" class="g-pod">' : '<i class="'.esc_attr($icons[$i]).' iconslect" aria-hidden="true"></i>';
        $podcastshare .= '<li><a href="'.esc_url($links[$i]).'" title="'.esc_attr($podTitle).'" target="_blank" class="iconlink" rel="noopener">'.$iconHtml.'</a></li>';
    }
    $podcastshare .= '</ul>';
  
    return $podcastshare;
  }
  add_shortcode('podcast_links','share_link_podcast');
  
  // End Podcast Function v3

?>