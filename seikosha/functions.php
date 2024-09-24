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


function my_theme_enqueue_block_editor_assets() {
    wp_enqueue_style(
        'my-theme-editor-styles',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
	
}
add_action('enqueue_block_editor_assets', 'my_theme_enqueue_block_editor_assets');

function my_theme_add_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style( get_template_directory_uri() . '/assets/css/basic.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/product/observ.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/product/starvac.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/product/plinic.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/product/famubo.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/product/rafos.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/border.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/style.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/footer.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/editor/style.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/font-awesome/css/all.css');
	$folder_path =  get_template_directory() . '/assets/css/custom/';
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..'));

	foreach ($files as $file) {
		add_editor_style( get_template_directory_uri() . '/assets/css/custom/' . $file);
	}
}
add_action('after_setup_theme', 'my_theme_add_editor_styles');

function base_theme_1_styles() {

	wp_enqueue_style(
		'base-theme-1-front-page',
		get_template_directory_uri() . '/assets/css/style-page.css'
	);

	wp_enqueue_style(
		'base-theme-1-basic',
		get_template_directory_uri() . '/assets/css/basic.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product-famubo',
		get_template_directory_uri() . '/assets/css/product/famubo.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product-observ',
		get_template_directory_uri() . '/assets/css/product/observ.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product-starvac',
		get_template_directory_uri() . '/assets/css/product/starvac.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product-plinic',
		get_template_directory_uri() . '/assets/css/product/plinic.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product-rafos',
		get_template_directory_uri() . '/assets/css/product/rafos.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product',
		get_template_directory_uri() . '/assets/css/product.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-accordion',
		get_template_directory_uri() . '/assets/css/accordion.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-border',
		get_template_directory_uri() . '/assets/css/border.css',
		[],
		wp_get_theme()->get( 'Version' )
	);


	wp_enqueue_style(
		'base-theme-1-footer',
		get_template_directory_uri() . '/assets/css/footer.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-swiper',
		get_template_directory_uri() . '/assets/css/swiper.min.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-swiper-bunder',
		get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-font-notosanjp',
		get_template_directory_uri() . '/assets/css/font/notosanjp.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-font-fontawesome',
		get_template_directory_uri() . '/assets/css/font/fontawesome-all.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

    $folder_path =  get_template_directory() . '/assets/css/custom/';
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..'));

	foreach ($files as $key => $file) {
		wp_enqueue_style(
			'base-theme-1-font-custom-' . $key,
			get_template_directory_uri() . '/assets/css/custom/' . $file,
			[],
			wp_get_theme()->get( 'Version' )
		);
	}
}

function theme_slug_enqueue_scripts() {
	wp_enqueue_script( 
		'theme-slug-jquery',
		get_parent_theme_file_uri( 'assets/js/jquery.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-navi',
		get_parent_theme_file_uri( 'assets/js/navi.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-script',
		get_parent_theme_file_uri( 'assets/js/custom.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);


	wp_enqueue_script( 
		'theme-slug-script',
		get_parent_theme_file_uri( 'assets/js/script.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-swiper',
		get_parent_theme_file_uri( 'assets/js/swiper.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-swiper-bundle',
		get_parent_theme_file_uri( 'assets/js/swiper-bundle.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

    $folder_path =  get_template_directory() . '/assets/js/custom/';
	$files = scandir($folder_path);
	$files = array_diff($files, array('.', '..'));

	foreach ($files as $key => $file) {
		wp_enqueue_style(
			'base-js-custom-' . $key,
			get_template_directory_uri() . '/assets/js/custom/' . $file,
			[],
			wp_get_theme()->get( 'Version' )
		);
	}
}

function my_theme_register_pattern_category() {
    if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
            'home-page',
            array( 'label' => __( 'Home Page', 'seikosha-theme' ) )
        );
        register_block_pattern_category(
            'category-page',
            array( 'label' => __( 'Category Page', 'seikosha-theme' ) )
        );
		register_block_pattern_category(
            'product-page',
            array( 'label' => __( 'Product Page', 'seikosha-theme' ) )
        );
		register_block_pattern_category(
            'test-page',
            array( 'label' => __( 'Test Page', 'seikosha-theme' ) )
        );
    }
}

add_action('init', 'my_theme_register_pattern_category');

add_action( 'wp_enqueue_scripts', 'base_theme_1_styles' );

add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_scripts' );

function unregister_all_patterns() {
    remove_theme_support('core-block-patterns');
}

add_action('after_setup_theme', 'unregister_all_patterns');
function enqueue_font_awesome_editor() {
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

function custom_css_file_manager_menu() {
    add_menu_page(
        'Quản lý File CSS',        // Tiêu đề trang
        'Quản lý File CSS',        // Tên trong menu
        'manage_options',      // Quyền truy cập
        'css-code-editor', // Slug của trang
        'custom_css_file_manager_page', // Hàm hiển thị nội dung
        'dashicons-media-document', // Icon của menu
        position: 110                     // Vị trí của menu
    );
}
add_action('admin_menu', 'custom_css_file_manager_menu');

function custom_css_file_manager_page() {
    $folder_path =  get_template_directory() . '/assets/css/custom/'; // Đường dẫn đến thư mục cần quản lý

    // Kiểm tra nếu thư mục không tồn tại thì tạo mới
    if (!is_dir($folder_path)) {
        mkdir($folder_path, 0755, true);
    }
	if ($_POST) {
		if (isset($_POST['add_css'])) {
			if (isset($_FILES['new_file']) && !empty($_FILES['new_file']['name'])) {
				$allowed_file_types = array('css'); // Các loại file được cho phép
				$file_type = pathinfo($_FILES['new_file']['name'], PATHINFO_EXTENSION);
			
				if (in_array(strtolower($file_type), $allowed_file_types)) {
					$uploaded = wp_handle_upload($_FILES['new_file'], array('test_form' => false));
			
					if (isset($uploaded['file'])) {
						$file_name = basename($uploaded['file']);
						rename($uploaded['file'], $folder_path . '/' . $file_name);
						echo '<div class="updated"><p>Tải file thành công!</p></div>';
					} else {
						echo '<div class="error"><p>Có lỗi khi tải file lên.</p></div>';
					}
				} else {
					echo '<div class="error"><p>Loại file không được phép.</p></div>';
				}
			}
		}
	}
    // Lấy danh sách file từ thư mục
    $files = scandir($folder_path);
    $files = array_diff($files, array('.', '..')); // Loại bỏ '.' và '..'
	$css_content = "";
	$css_file = "";


	if (!empty($files)) {
		$css_file =$files[array_key_first($files)];

		if ($_POST) {
			if (isset($_POST['save_css'])) {
				file_put_contents($folder_path . '/' . ($_POST['file_name'] ?? $css_file), stripslashes($_POST['css_content']));
				echo '<div class="updated"><p>CSS file đã được lưu.</p></div>';
			}
		} else {
			
		}
		if (isset($_GET['file'])) {
			$css_file = $_GET['file'];
		}
		$css_content = file_get_contents( $folder_path . '/' . $css_file);
	}


    ?>
    <div class="wrap">
        <h1>Quản lý File CSS trong thư mục</h1>
     	<!-- Form tải file lên -->
        <h2>Tải file mới lên</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="new_file">
            <input type="submit" name="add_css" value="Add CSS" class="button-primary" value="Tải lên">
        </form>
		<br>

        <?php if (empty($files)) : ?>
            <p>Thư mục trống.</p>
        <?php else : ?>
			<h2>Chỉnh sửa File <?php echo esc_html($css_file); ?></h2>
			<div style="display: flex; justify-content: space-between;">
				<div style="width: 70%;">
					<form method="post">
						<textarea name="css_content" rows="15" style="width:100%;"><?php echo esc_textarea($css_content); ?></textarea>
						<br>
						<input type="hidden" name="file_name" value="<?php echo esc_html($css_file); ?>" class="button button-primary">
						<input type="submit" name="save_css" value="Update CSS" class="button button-primary">
					</form>
				</div>
				<table class="widefat" style="width: 28%; height:fit-content;">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($files as $file) : 
							$file_path = $folder_path . '/' . $file;
							?>
							<tr>
								<td><a href="admin.php?page=css-code-editor&file=<?php echo esc_html($file); ?>"><?php echo esc_html($file); ?></a></td>
								<td>
									<a href="<?php echo esc_url(admin_url('admin.php?page=css-code-editor&delete_file=' . urlencode($file))); ?>" onclick="return confirm('Bạn có chắc muốn xóa file này?');">Xóa</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

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
function custom_file_manager_delete_file() {
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

function custom_js_file_manager_menu() {
    add_menu_page(
        'Quản lý File JS',        // Tiêu đề trang
        'Quản lý File JS',        // Tên trong menu
        'manage_options',      // Quyền truy cập
        'js-code-editor', // Slug của trang
        'custom_js_file_manager_page', // Hàm hiển thị nội dung
        'dashicons-media-document', // Icon của menu
        position: 111                     // Vị trí của menu
    );
}
add_action('admin_menu', 'custom_js_file_manager_menu');

function custom_js_file_manager_page() {
    $folder_path =  get_template_directory() . '/assets/js/custom/'; // Đường dẫn đến thư mục cần quản lý

    // Kiểm tra nếu thư mục không tồn tại thì tạo mới
    if (!is_dir($folder_path)) {
        mkdir($folder_path, 0755, true);
    }
	if ($_POST) {
		if (isset($_POST['add_js'])) {
			if (isset($_FILES['new_file']) && !empty($_FILES['new_file']['name'])) {
				$allowed_file_types = array('js'); // Các loại file được cho phép
				$file_type = pathinfo($_FILES['new_file']['name'], PATHINFO_EXTENSION);
			
				if (in_array(strtolower($file_type), $allowed_file_types)) {
					$uploaded = wp_handle_upload($_FILES['new_file'], array('test_form' => false));
			
					if (isset($uploaded['file'])) {
						$file_name = basename($uploaded['file']);
						rename($uploaded['file'], $folder_path . '/' . $file_name);
						echo '<div class="updated"><p>Tải file thành công!</p></div>';
					} else {
						echo '<div class="error"><p>Có lỗi khi tải file lên.</p></div>';
					}
				} else {
					echo '<div class="error"><p>Loại file không được phép.</p></div>';
				}
			}
		}
	}
    // Lấy danh sách file từ thư mục
    $files = scandir($folder_path);
    $files = array_diff($files, array('.', '..')); // Loại bỏ '.' và '..'
	$js_content = "";
	$js_file = "";


	if (!empty($files)) {
		$js_file =$files[array_key_first($files)];

		if ($_POST) {
			if (isset($_POST['save_js'])) {
				file_put_contents($folder_path . '/' . ($_POST['file_name'] ?? $js_file), stripslashes($_POST['js_content']));
				echo '<div class="updated"><p>JS file đã được lưu.</p></div>';
			}
		} else {
			
		}
		if (isset($_GET['file'])) {
			$js_file = $_GET['file'];
		}
		$js_content = file_get_contents( $folder_path . '/' . $js_file);
	}


    ?>
    <div class="wrap">
        <h1>Quản lý File JS trong thư mục</h1>
     	<!-- Form tải file lên -->
        <h2>Tải file mới lên</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="new_file">
            <input type="submit" name="add_js" value="Add JS" class="button-primary" value="Tải lên">
        </form>
		<br>

        <?php if (empty($files)) : ?>
            <p>Thư mục trống.</p>
        <?php else : ?>
			<h2>Chỉnh sửa File <?php echo esc_html($js_file); ?></h2>
			<div style="display: flex; justify-content: space-between;">
				<div style="width: 70%;">
					<form method="post">
						<textarea name="js_content" rows="15" style="width:100%;"><?php echo esc_textarea($js_content); ?></textarea>
						<br>
						<input type="hidden" name="file_name" value="<?php echo esc_html($js_file); ?>" class="button button-primary">
						<input type="submit" name="save_js" value="Update JS" class="button button-primary">
					</form>
				</div>
				<table class="widefat" style="width: 28%; height:fit-content;">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($files as $file) : 
							$file_path = $folder_path . '/' . $file;
							?>
							<tr>
								<td><a href="admin.php?page=js-code-editor&file=<?php echo esc_html($file); ?>"><?php echo esc_html($file); ?></a></td>
								<td>
									<a href="<?php echo esc_url(admin_url('admin.php?page=js-code-editor&delete_file=' . urlencode($file))); ?>" onclick="return confirm('Bạn có chắc muốn xóa file này?');">Xóa</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

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
function custom_file_manager_js_delete_file() {
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


function my_custom_code_editor_scripts($hook) {
    if (($hook != 'toplevel_page_css-code-editor') && ($hook != 'toplevel_page_js-code-editor')) {
        return;
    }
    wp_enqueue_style('codemirror-css', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css');
    wp_enqueue_script('codemirror-js', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js', array(), null, true);
    wp_enqueue_script('codemirror-mode-css', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/css/css.min.js', array('codemirror-js'), null, true);
    wp_enqueue_script('codemirror-mode-js', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js', array('codemirror-js'), null, true);
}

add_action('admin_enqueue_scripts', callback: 'my_custom_code_editor_scripts');


