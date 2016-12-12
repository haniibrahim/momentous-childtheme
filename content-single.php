
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php momentous_display_thumbnail_single(); ?>
		
		<?php the_title( '<h1 class="entry-title post-title">', '</h1>' ); ?>
		
		<div class="entry-meta postmeta"><?php momentous_display_postmeta(); ?></div>

		<div class="entry clearfix">
			<?php the_content(); ?>
			
			<?php
			// ------------------- BILDNACHWEIS PAGES START ----------------------------
            $bildnachweis = get_post_meta($post->ID, 'bildnachweis', true); //Bildnachweistext auf benutzerdefiniertem Feld "bildnachweis" holen
            if (!$bildnachweis == "") { //Bildnachweis-Ausgabe nur wenn vorhanden
                echo "<div class='bildnachweis'>";
                echo "<p class=\"bildnachweis-titel\"> <a name=\"bildnachweis\"></a>";
                _e("[:de]Bildnachweis[:en]Picture Credits"); //Überschrift m. qTranslate Language tags
                echo "</p>";
                echo "<p class=\"bildnachweis-text\">";
                echo $bildnachweis;
                echo "</p>";
                echo "</div>";
                echo "<br />"; // Abstand zum folgenden Element
            }
            // ------------------- BILDNACHWEIS PAGES ENDE ----------------------------
			?>
			
			<!-- <?php trackback_rdf(); ?> -->
			<div class="page-links"><?php wp_link_pages(); ?></div>			
		</div>
			
		<div class="postinfo clearfix"><?php momentous_display_postinfo_single(); ?></div>

	</article>
