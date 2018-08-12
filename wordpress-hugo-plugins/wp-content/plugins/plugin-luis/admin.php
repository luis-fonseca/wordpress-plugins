<?php 

add_action('admin_menu', 'pone_register_menu');

function pone_register_menu() {
    // argumentos da instrução:
    // $page_title, $menu_title, $capability, $menu_slug, $function
    // $page_title: o texto a ser exibido nas tags de título da página quando o menu é selecionado
    // $menu_title: o texto a ser usado pelo menu
    // $capability: a capacidade requirida para o menu ser mostrado ao usuário, por exemplo, ser admin
    // $menu_slug: o nome do slug para se referir a esse menu (deve ser único)
    // $function: a função a ser chamada para exibir a saída para essa página
    add_options_page('Plugin do Luís', 'Plugin do Luís', 'manage_options', 'pone_hello_page', 'pone_render_page');

}


function pone_render_page() { ?>
    <div class="wrap">
        <h2>Boas vindas!</h2>
        <p class="description">Esta é a primeira página criada com o plugin.</p>
        <?php echo plugins_url('images', __FILE__); ?>
    </div>
<?php } ?>