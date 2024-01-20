<?php
function card($imageSrc, $title, $text){
    echo '<div class="info-card col-lg-4 col-md-6 col-sm-12 card">';
    echo '    <div class="card-media">';
    echo '        <img src="' . htmlspecialchars($imageSrc) . '" alt="' . htmlspecialchars($title) . '">';
    echo '    </div>';
    echo '    <div class="card-body">';
    echo '        <h5 class="card-title">' . htmlspecialchars($title) . '</h5>';
    echo '        <p class="card-text">' . htmlspecialchars($text) . '</p>';
    echo '    </div>';        
    echo '</div>';
}
?>