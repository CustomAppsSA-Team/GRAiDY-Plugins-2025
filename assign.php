<?php
/**
 * Displays Graidy portal in an iframe, tied to a specific course ID.
 *
 * URL format: /local/graidy/course.php?id=COURSEID
 *
 * @package    local_graidy
 */

require_once(__DIR__ . '/../../config.php');

// Get the course ID from the URL.
$courseid = required_param('courseid', PARAM_INT); // Required course ID.
$sectionid = required_param('sectionid', PARAM_INT);
$moduleid = required_param('moduleid', PARAM_INT); // Required module ID.
$contentid = required_param('contentid', PARAM_INT);
$type = required_param('type', PARAM_TEXT);

// Load the course object.
$course = get_course($courseid);
require_login($course);

// Setup the context for this course.
$context = context_course::instance($courseid);
$PAGE->set_context($context);

// Setup the page URL, title, and heading.
$PAGE->set_url('/local/graidy/course.php', ['id' => $courseid]);
// Example: You could use $course->fullname as the page heading/title.
$PAGE->set_title(get_string('pluginname', 'local_graidy'));
$PAGE->set_heading($course->fullname);

// Get base portal URL from plugin settings, or fallback.
$baseurl = get_config('local_graidy', 'baseurl');
if (empty($baseurl)) {
    // Fallback or handle error.
    $baseurl = 'https:/portal.graidy.tech';
}

// Determine which path to load in the iframe (dashboard, etc.).
$path = optional_param('path', 'dashboard', PARAM_ALPHANUMEXT);

// Construct the full iframe URL.
$iframeurl = rtrim($baseurl, '/') . '/' . $path;

// Output the page header.
echo $OUTPUT->header();

// A small navigation menu of buttons for switching the 'path'.
?>

<div style="margin-bottom: 1em;">
    <form action="<?php echo new moodle_url('/local/graidy/course.php'); ?>" method="get" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $courseid; ?>">
        <input type="hidden" name="path" value="dashboard">
        <button type="submit" class="btn btn-secondary">
            <?php echo get_string('dashboard', 'local_graidy'); ?>
        </button>
    </form>

    <form action="<?php echo new moodle_url('/local/graidy/course.php'); ?>" method="get" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $courseid; ?>">
        <input type="hidden" name="path" value="reports">
        <button type="submit" class="btn btn-secondary">
            <?php echo get_string('reports', 'local_graidy'); ?>
        </button>
    </form>

    <form action="<?php echo new moodle_url('/local/graidy/course.php'); ?>" method="get" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $courseid; ?>">
        <input type="hidden" name="path" value="settings">
        <button type="submit" class="btn btn-secondary">
            <?php echo get_string('settings', 'local_graidy'); ?>
        </button>
    </form>
</div>



<?php
// Embed your iframe or content here.
// 1. Get the GRAiDY base URL from plugin settings.
$graidybaseurl = get_config('local_graidy', 'baseurl');
$organizationtoken = get_config('local_graidy', 'organizationtoken');
$token = local_graidy_get_or_create_token($USER->id);
$iframeurl = $graidybaseurl . '/moodle/plugin/assign/' . $courseid . '/' . $contentid . '/' .  $moduleid . '/' . $sectionid . '/' . $USER->id . '/' . $token . '/' . $organizationtoken;
$output = $PAGE->get_renderer('local_graidy');
echo $output->render_iframe($iframeurl);

// Finish the page.
echo $OUTPUT->footer();
