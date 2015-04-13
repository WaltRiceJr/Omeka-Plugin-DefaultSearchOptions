<?php
/**
 * Default Search Options Plugin
 *
 * @copyright   R&R Computer Solutions
 * @author      WaltRiceJr
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 or any later version
 * @package     DefaultSearchOptions Plugin
 */
?>
<?php $view = get_view(); ?>
<h2><?php echo __('Set Default Search Options'); ?></h2>

<div class="field">
    <div class="three columns alpha">
        <label><?php echo __('Default Search Type');?></label>
    </div>
    <div class="inputs four columns omega">
        <div class="input-block">
            <select name="defaultsearchoptions_type">
                <option value=""><?php echo __('Please select'); ?></option>
                <?php $currentType =  get_option('defaultsearchoptions_type'); ?>
                <?php $types = get_search_query_types() ?>

                <?php 
                foreach ($types as $typeId => $typeName) :
                    $checked = ($typeId == $currentType ? 'selected' : '');
                    ?>
                    <option value="<?php echo $typeId;?>" <?php echo $checked; ?>><?php echo $typeName;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <p class="explanation">
            <?php echo __('Set the default search type. Keyword search is problematic because it excludes words that occur in more than 50% of the records. Boolean search is less natural, but it doesn\'t have the stopword problem.'); ?>
        </p>
    </div>
</div>

<div class="field">
    <div class="three columns alpha">
        <label><?php echo __('Default Search Query Text');?></label>
    </div>
    <div class="inputs four columns omega">
        <div class="input-block">
            <input type="text" name="defaultsearchoptions_query" value="<?php echo get_option('defaultsearchoptions_query')?>" />
        </div>
        <p class="explanation">
            <?php echo __('Set the default query text to appear in the search box.'); ?>
        </p>
    </div>
</div>

<div class="field">
    <div class="three columns alpha">
        <label><?php echo __('Default Search Action');?></label>
    </div>
    <div class="inputs four columns omega">
        <div class="input-block">
            <input type="text" name="defaultsearchoptions_action" value="<?php echo get_option('defaultsearchoptions_action')?>" />
        </div>
        <p class="explanation">
            <?php echo __('Set the default action URL for the search box. Search requests will be made to this URL.'); ?>
        </p>
    </div>
</div>
