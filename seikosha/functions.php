<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package base-theme-1
 * @since 1.0.5
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.3
 *
 * @return void
 */


function my_theme_enqueue_block_editor_assets()
{
	wp_enqueue_style(
		'my-theme-editor-styles',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		filemtime(get_template_directory() . '/assets/css/style.css')
	);
}
add_action('enqueue_block_editor_assets', 'my_theme_enqueue_block_editor_assets');

function my_theme_add_editor_styles()
{
	add_theme_support('editor-styles');
	add_editor_style(get_template_directory_uri() . '/assets/css/basic.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/observ.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/starvac.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/plinic.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/famubo.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/rafos.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/plasma.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/sonocare.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/product/ems.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/border.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/style.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/footer.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/editor/style.css');
	add_editor_style(get_template_directory_uri() . '/assets/css/font-awesome/css/all.css');
	$folder_path =  get_template_directory() . '/assets/css/custom/';
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..'));

	foreach ($files as $file) {
		add_editor_style(get_template_directory_uri() . '/assets/css/custom/' . $file);
	}
}
add_action('after_setup_theme', 'my_theme_add_editor_styles');

function base_theme_1_styles()
{

	wp_enqueue_style(
		'base-theme-1-front-page',
		get_template_directory_uri() . '/assets/css/style-page.css'
	);

	wp_enqueue_style(
		'base-theme-1-basic',
		get_template_directory_uri() . '/assets/css/basic.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-famubo',
		get_template_directory_uri() . '/assets/css/product/famubo.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-observ',
		get_template_directory_uri() . '/assets/css/product/observ.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-starvac',
		get_template_directory_uri() . '/assets/css/product/starvac.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-plinic',
		get_template_directory_uri() . '/assets/css/product/plinic.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-rafos',
		get_template_directory_uri() . '/assets/css/product/rafos.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-plasma',
		get_template_directory_uri() . '/assets/css/product/plasma.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-sonocare',
		get_template_directory_uri() . '/assets/css/product/sonocare.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product-ems',
		get_template_directory_uri() . '/assets/css/product/ems.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-product',
		get_template_directory_uri() . '/assets/css/product.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-accordion',
		get_template_directory_uri() . '/assets/css/accordion.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-border',
		get_template_directory_uri() . '/assets/css/border.css',
		[],
		wp_get_theme()->get('Version')
	);


	wp_enqueue_style(
		'base-theme-1-footer',
		get_template_directory_uri() . '/assets/css/footer.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-swiper',
		get_template_directory_uri() . '/assets/css/swiper.min.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-swiper-bunder',
		get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-font-notosanjp',
		get_template_directory_uri() . '/assets/css/font/notosanjp.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'base-theme-1-font-fontawesome',
		get_template_directory_uri() . '/assets/css/font/fontawesome-all.css',
		[],
		wp_get_theme()->get('Version')
	);

	$folder_path =  get_template_directory() . '/assets/css/custom/';
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..'));

	foreach ($files as $key => $file) {
		wp_enqueue_style(
			'base-theme-1-font-custom-' . $key,
			get_template_directory_uri() . '/assets/css/custom/' . $file,
			[],
			wp_get_theme()->get('Version')
		);
	}
}

function theme_slug_enqueue_scripts()
{
	wp_enqueue_script(
		'theme-slug-jquery',
		get_parent_theme_file_uri('assets/js/jquery.min.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'theme-slug-navi',
		get_parent_theme_file_uri('assets/js/navi.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'theme-slug-script',
		get_parent_theme_file_uri('assets/js/script.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'theme-slug-swiper',
		get_parent_theme_file_uri('assets/js/swiper.min.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'theme-slug-swiper-bundle',
		get_parent_theme_file_uri('assets/js/swiper-bundle.min.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	$folder_path =  get_template_directory() . '/assets/js/custom/';
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..'));

	foreach ($files as $key => $file) {
		wp_enqueue_script(
			'base-js-custom-' . $key,
			get_template_directory_uri() . '/assets/js/custom/' . $file,
			[],
			wp_get_theme()->get('Version')
		);
	}
}

function my_theme_register_pattern_category()
{
	if (function_exists('register_block_pattern_category')) {
		register_block_pattern_category(
			'home-page',
			array('label' => __('Home Page', 'seikosha-theme'))
		);
		register_block_pattern_category(
			'category-page',
			array('label' => __('Category Page', 'seikosha-theme'))
		);
		register_block_pattern_category(
			'product-page',
			array('label' => __('Product Page', 'seikosha-theme'))
		);
		register_block_pattern_category(
			'test-page',
			array('label' => __('Test Page', 'seikosha-theme'))
		);
	}
}

add_action('init', 'my_theme_register_pattern_category');

add_action('wp_enqueue_scripts', 'base_theme_1_styles');

add_action('wp_enqueue_scripts', 'theme_slug_enqueue_scripts');

function unregister_all_patterns()
{
	remove_theme_support('core-block-patterns');
}

add_action('after_setup_theme', 'unregister_all_patterns');
function enqueue_font_awesome_editor()
{
	// Enqueue Font Awesome for Gutenberg editor
	add_theme_support('editor-styles');
	add_editor_style(get_template_directory_uri() . '/assets/css/font-awesome-editor.css');
}

add_action('after_setup_theme', 'enqueue_font_awesome_editor');

if (!defined('DISALLOW_FILE_EDIT')) {
	define('DISALLOW_FILE_EDIT', false);
}
if (!defined('ALLOW_UNFILTERED_UPLOADS')) {
	define('ALLOW_UNFILTERED_UPLOADS', true);
}

function theme_custom_menu()
{
	// Tạo menu chính
	add_menu_page(
		'テーマの編集', // Tiêu đề hiển thị trên menu
		'テーマの編集', // Tiêu đề hiển thị trên menu (có thể khác với tiêu đề trên)
		'manage_options', // Cấp quyền truy cập (thay đổi tùy theo nhu cầu)
		'css-code-editor', // Slug của menu (sử dụng để tạo link)
		'custom_css_file_manager_page', // Hàm callback để hiển thị nội dung trang
		'dashicons-media-document', // Icon (tùy chọn)
		110 // Vị trí của menu
	);

	// Tạo submenu
	add_submenu_page(
		'css-code-editor', // Slug của menu cha
		'テーマのCSS編集', // Tiêu đề hiển thị trên menu
		'テーマのCSS編集', // Tiêu đề hiển thị trên menu (có thể khác với tiêu đề trên)
		'manage_options', // Cấp quyền truy cập
		'css-code-editor', // Slug của submenu
		'custom_css_file_manager_page' // Hàm callback để hiển thị nội dung trang
	);

	// Tạo submenu
	add_submenu_page(
		'css-code-editor', // Slug của menu cha
		'テーマのJS編集', // Tiêu đề hiển thị trên menu
		'テーマのJS編集', // Tiêu đề hiển thị trên menu (có thể khác với tiêu đề trên)
		'manage_options', // Cấp quyền truy cập
		'js-code-editor', // Slug của submenu
		'custom_js_file_manager_page' // Hàm callback để hiển thị nội dung trang
	);
}
add_action('admin_menu', 'theme_custom_menu');

function custom_css_file_manager_page()
{
	$folder_path =  get_template_directory() . '/assets/css/custom/'; // Đường dẫn đến thư mục cần quản lý

	// Kiểm tra nếu thư mục không tồn tại thì tạo mới
	if (!is_dir($folder_path)) {
		mkdir($folder_path, 0755, true);
	}
	$file_name_edit = isset($_GET['file']) ? $_GET['file'] : '';
	// Lấy danh sách file từ thư mục
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..')); // Loại bỏ '.' và '..'
	$files = array_values($files); // Loại bỏ '.' và '..'
	if ($_POST) {
		if (isset($_POST['add_css'])) {
			if (in_array($_POST['new_file'] . ".css", $files)) {
				echo '<div class="error"><p>ファイル名が重複しています。</p></div>';
			} else {
				$uploaded = touch($folder_path . $_POST['new_file'] . ".css");;
				if ($uploaded) {
					echo '<div class="updated"><p>ファイルが追加されました。</p></div>';
					$file_name_edit = $_POST['new_file'] . ".css";
					$files[] = $file_name_edit;
				} else {
					echo '<div class="error"><p>Có lỗi khi tải file lên.</p></div>';
				}
			}
		}
	}
	// Lấy danh sách file từ thư mục
	$css_content = "";
	$css_file = "";

	if (!empty($files)) {
		$css_file = $files[array_key_first($files)];

		if ($_POST) {
			if (isset($_POST['save_css'])) {
				file_put_contents($folder_path . '/' . ($_POST['file_name'] ?? $css_file), stripslashes($_POST['css_content']));
				echo '<div class="updated"><p>ファイルが更新されました。</p></div>';
				$file_name_edit = $_POST['file_name'];
			}
		}
		if ($file_name_edit) {
			$css_file = $file_name_edit;
		}
		$css_content = file_get_contents($folder_path . '/' . $css_file);
	}


?>
	<style>
		::placeholder {
			opacity: 0.5;
			/* Firefox */
		}

		::-ms-input-placeholder {
			/* Edge 12-18 */
			opacity: 0.5;
		}
	</style>
	<div class="wrap">
		<h1>テーマのCSSを編集</h1>
		<!-- Form tải file lên -->
		<?php if ($file_name_edit) { ?>
			<a href="admin.php?page=css-code-editor" style="    background: #2271b1;
    border-color: #2271b1;
    color: #fff;
    padding: 7px 10px;
    border-radius: 5px;
    margin: 10px 0;
    display: inline-block;
    text-decoration: none;">新規CSSファイルを追加</a>
		<?php } else { ?>
			<h2>新規ファイルを追加</h2>
			<form method="post" enctype="multipart/form-data">
				<input type="text" name="new_file" placeholder="ファイル名">
				<input type="submit" name="add_css" value="追加	" class="button-primary" value="Tải lên">
			</form>
			<br>
		<?php } ?>

		<?php if (empty($files)) : ?>
			<p>Thư mục trống.</p>
		<?php else : ?>
			<?php if ($file_name_edit) { ?>
				<h2><?php echo esc_html($css_file); ?>ファイルを編集</h2>
				<div style="display: flex; justify-content: space-between;">
					<div style="width: 70%;">
						<form method="post">
							<textarea name="css_content" rows="15" style="width:100%;"><?php echo esc_textarea($css_content); ?></textarea>
							<br>
							<input type="hidden" name="file_name" value="<?php echo esc_html($css_file); ?>" class="button button-primary">
							<input type="submit" name="save_css" value="更新" class="button button-primary">
						</form>
					</div>

					<table class="widefat" style="width: 28%; height:fit-content;">
						<thead>
							<tr>
								<th>CSSファイル名</th>
								<th>アクション</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($files as $file) :
								$file_path = $folder_path . '/' . $file;
							?>
								<tr style="background: <?php echo (($file_name_edit == $file) ? "#ffffff" : "#f0f0f1") ?>;">
									<td <?php if ($file_name_edit == $file) { ?> style="border-left: 5px solid #2271b1;" <?php } ?>><a href="admin.php?page=css-code-editor&file=<?php echo esc_html($file); ?>"><?php echo esc_html($file); ?></a></td>
									<td>
										<a href="<?php echo esc_url(admin_url('admin.php?page=css-code-editor&delete_file=' . urlencode($file))); ?>" onclick="return confirm('本当にこのファイルを削除しますか？');">削除</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			<?php } else { ?>
				<h2>CSSリスト</h2>
				<table class="widefat" style="width: 100; height:fit-content;">
					<thead>
						<tr>
							<th>CSSファイル名</th>
							<th>アクション</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($files as $file) :
							$file_path = $folder_path . '/' . $file;
						?>
							<tr style="background: #f0f0f1;">
								<td><a href="admin.php?page=css-code-editor&file=<?php echo esc_html($file); ?>"><?php echo esc_html($file); ?></a></td>
								<td>
									<a href="<?php echo esc_url(admin_url('admin.php?page=css-code-editor&delete_file=' . urlencode($file))); ?>" onclick="return confirm('本当にこのファイルを削除しますか？');">削除</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php } ?>


		<?php endif; ?>
	</div>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var cssEditor = CodeMirror.fromTextArea(document.querySelector('textarea[name="css_content"]'), {
				lineNumbers: true,
				mode: 'css'
			});
		});
	</script>
<?php
}
function custom_file_manager_delete_file()
{
	if (isset($_GET['delete_file']) && current_user_can('manage_options')) {
		$folder_path = $folder_path =  get_template_directory() . '/assets/css/custom/'; // Đường dẫn đến thư mục
		$file = urldecode($_GET['delete_file']);
		$file_path = $folder_path . '/' . $file;

		if (file_exists($file_path)) {
			unlink($file_path);
			wp_redirect(admin_url('admin.php?page=css-code-editor&file_deleted=true'));
			exit;
		}
	}
}
add_action('admin_init', 'custom_file_manager_delete_file');

function custom_js_file_manager_page()
{
	$folder_path =  get_template_directory() . '/assets/js/custom/'; // Đường dẫn đến thư mục cần quản lý

	// Kiểm tra nếu thư mục không tồn tại thì tạo mới
	if (!is_dir($folder_path)) {
		mkdir($folder_path, 0755, true);
	}
	$file_name_edit = isset($_GET['file']) ? $_GET['file'] : '';
	// Lấy danh sách file từ thư mục
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..')); // Loại bỏ '.' và '..'
	$files = array_values($files); // Loại bỏ '.' và '..'
	if ($_POST) {
		if (isset($_POST['add_js'])) {
			if (in_array($_POST['new_file'] . ".js", $files)) {
				echo '<div class="error"><p>ファイル名が重複しています。</p></div>';
			} else {
				$uploaded = touch($folder_path . $_POST['new_file'] . ".js");;
				if ($uploaded) {
					echo '<div class="updated"><p>ファイルが追加されました。</p></div>';
					$file_name_edit = $_POST['new_file'] . ".js";
					$files[] = $file_name_edit;
				} else {
					echo '<div class="error"><p>Có lỗi khi tải file lên.</p></div>';
				}
			}
		}
	}
	// Lấy danh sách file từ thư mục
	$js_content = "";
	$js_file = "";

	if (!empty($files)) {
		$js_file = $files[array_key_first($files)];

		if ($_POST) {
			if (isset($_POST['save_js'])) {
				file_put_contents($folder_path . '/' . ($_POST['file_name'] ?? $js_file), stripslashes($_POST['js_content']));
				echo '<div class="updated"><p>ファイルが更新されました。</p></div>';
				$file_name_edit = $_POST['file_name'];
			}
		}
		if ($file_name_edit) {
			$js_file = $file_name_edit;
		}
		$js_content = file_get_contents($folder_path . '/' . $js_file);
	}


?>
	<style>
		::placeholder {
			opacity: 0.5;
			/* Firefox */
		}

		::-ms-input-placeholder {
			/* Edge 12-18 */
			opacity: 0.5;
		}
	</style>
	<div class="wrap">
		<h1>テーマのJSを編集</h1>
		<!-- Form tải file lên -->
		<?php if ($file_name_edit) { ?>
			<a href="admin.php?page=js-code-editor" style="    background: #2271b1;
    border-color: #2271b1;
    color: #fff;
    padding: 7px 10px;
    border-radius: 5px;
    margin: 10px 0;
    display: inline-block;
    text-decoration: none;">新規JSファイルを追加</a>
		<?php } else { ?>
			<h2>新規ファイルを追加</h2>
			<form method="post" enctype="multipart/form-data">
				<input type="text" name="new_file" placeholder="ファイル名">
				<input type="submit" name="add_js" value="追加" class="button-primary" value="Tải lên">
			</form>
			<br>
		<?php } ?>

		<?php if (empty($files)) : ?>
			<p>Thư mục trống.</p>
		<?php else : ?>
			<?php if ($file_name_edit) { ?>
				<h2><?php echo esc_html($js_file); ?>ファイルを編集</h2>
				<div style="display: flex; justify-content: space-between;">
					<div style="width: 70%;">
						<form method="post">
							<textarea name="js_content" rows="15" style="width:100%;"><?php echo esc_textarea($js_content); ?></textarea>
							<br>
							<input type="hidden" name="file_name" value="<?php echo esc_html($js_file); ?>" class="button button-primary">
							<input type="submit" name="save_js" value="更新" class="button button-primary">
						</form>
					</div>

					<table class="widefat" style="width: 28%; height:fit-content;">
						<thead>
							<tr>
								<th>JSファイル名</th>
								<th>アクション</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($files as $file) :
								$file_path = $folder_path . '/' . $file;
							?>
								<tr style="background: <?php echo (($file_name_edit == $file) ? "#ffffff" : "#f0f0f1") ?>;">
									<td <?php if ($file_name_edit == $file) { ?> style="border-left: 5px solid #2271b1;" <?php } ?>><a href="admin.php?page=js-code-editor&file=<?php echo esc_html($file); ?>"><?php echo esc_html($file); ?></a></td>
									<td>
										<a href="<?php echo esc_url(admin_url('admin.php?page=js-code-editor&delete_file=' . urlencode($file))); ?>" onclick="return confirm('本当にこのファイルを削除しますか？');">削除</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			<?php } else { ?>
				<h2>JSリスト</h2>
				<table class="widefat" style="width: 100; height:fit-content;">
					<thead>
						<tr>
							<th>JSファイル名</th>
							<th>アクション</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($files as $file) :
							$file_path = $folder_path . '/' . $file;
						?>
							<tr style="background: #f0f0f1;">
								<td><a href="admin.php?page=js-code-editor&file=<?php echo esc_html($file); ?>"><?php echo esc_html($file); ?></a></td>
								<td>
									<a href="<?php echo esc_url(admin_url('admin.php?page=js-code-editor&delete_file=' . urlencode($file))); ?>" onclick="return confirm('本当にこのファイルを削除しますか？');">削除</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php } ?>


		<?php endif; ?>
	</div>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var jsEditor = CodeMirror.fromTextArea(document.querySelector('textarea[name="js_content"]'), {
				lineNumbers: true,
				mode: 'js'
			});
		});
	</script>
<?php
}

function custom_file_manager_js_delete_file()
{
	if (isset($_GET['delete_file']) && current_user_can('manage_options')) {
		$folder_path = $folder_path =  get_template_directory() . '/assets/js/custom/'; // Đường dẫn đến thư mục
		$file = urldecode($_GET['delete_file']);
		$file_path = $folder_path . '/' . $file;

		if (file_exists($file_path)) {
			unlink($file_path);
			wp_redirect(admin_url('admin.php?page=js-code-editor&file_deleted=true'));
			exit;
		}
	}
}
add_action('admin_init', 'custom_file_manager_js_delete_file');


function my_custom_code_editor_scripts($hook)
{
	if (($hook != 'toplevel_page_css-code-editor') && ($hook != 'toplevel_page_js-code-editor')) {
		return;
	}
	wp_enqueue_style('codemirror-css', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css');
	wp_enqueue_script('codemirror-js', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js', array(), null, true);
	wp_enqueue_script('codemirror-mode-css', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/css/css.min.js', array('codemirror-js'), null, true);
	wp_enqueue_script('codemirror-mode-js', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js', array('codemirror-js'), null, true);
}

add_action('admin_enqueue_scripts', callback: 'my_custom_code_editor_scripts');
