<?php
get_header();
?>

<?php
get_template_part('tpl','slider');
?>
<div class="master-container">
    <div class="post-7 page type-page status-publish hentry container" role="main">
        <div id="pl-7">
            <div class="panel panel-grid-cell widget_text panel-first-child" id="panel-7-3-0-0">
                <div class="textwidget"></div>
            </div>
            <div class="panel-grid">
                <div class="panel-grid-cell" id="pgc-7-3-0">
                    <h3 class="widget-title">Selecteer hier uw doelgroep</h3>
                </div>
            </div>
            <?php get_template_part('tpl','news');?>
            <?php get_template_part('tpl','intro-home')?>
            <?php get_template_part('tpl','clients');?>
        </div>
    </div>

</div>

<?php
get_footer();
?>

