<?php

register_taxonomy( $taxonomy, $object_type, $args );


// Регистрация таксономии:
add_action( 'init', 'create_taxonomy_Quality_Control_categories', 0 );
function create_taxonomy_Quality_Control_categories() {
  $args = array(
      'label' => _x( 'Категории контроля качества', 'taxonomy general name' ), // Название таксономии во множественном числе для перевода. По умолчанию: значение аргумента 'name' массива 'labels'.
    // Массив значений таксономии для управления в админ-панели:
      'labels' => array(
          'name' => _x( 'Категории контроля качества', 'taxonomy general name' ), // Общее название таксономии, используется во множественном числе. Соответствует значению label. По умолчанию: _x( 'Метки', 'taxonomy general name' ) или _x( 'Рубрики', 'taxonomy general name' ).
          'singular_name' => _x( 'Категория контроля качества', 'taxonomy singular name' ), // Название таксономии в единственном числе. По умолчанию: _x( 'Метка', 'taxonomy singular name' ) или _x( 'Рубрика', 'taxonomy singular name' ).
          'menu_name' => __( 'Категории контроля качества' ), // Название таксономии в пункте меню. Если не задается, то используется значение label. По умолчанию: 'Метки' или 'Рубрики'.
          'all_items' => __( 'Все категории контроля качества' ), // Текст всех таксономий. По умолчанию: __( 'Все метки' ) или __( 'Все рубрики' ).
          'edit_item' => __( 'Изменить категорию контроля качества' ), // Текст изменения таксономии на странице ее редактирования. По умолчанию: __( 'Изменить метку' ) или __( 'Изменить рубрику' ).
          'view_item' => __( 'Просмотреть категорию контроля качества' ), // Текст просмотра таксономии, который появляется в навигационном баре админ-панели на странице редактирования данной таксономии. По умолчанию: __( 'Просмотреть метку' ) или __( 'Просмотреть рубрику' ).
          'update_item' => __( 'Обновить категорию контроля качества' ), // Текст обновления таксономии во вкладке свойства. По умолчанию: __( 'Обновить метку' ) или __( 'Обновить рубрику' ).
          'add_new_item' => __( 'Добавить новую категорию контроля качества' ), // Текст добавления новой таксономии при ее создании. По умолчанию: __( 'Добавить новую метку' ) или __( 'Добавить новую рубрику' ).
          'new_item_name' => __( 'Название' ), // Название таксономии при ее создании и редактировании. По умолчанию: __( 'Название' ).
          'parent_item' => __( 'Родительская' ), // Текст родительской таксономии при создании и редактировании. Для древовидных таксономий. По умолчанию: __( 'Родительская' ).
          'parent_item_colon' => __( 'Родительская:' ), // То же, что и parent_item, но с добавлением двоеточия. По умолчанию: __( 'Родительская:' )
          'search_items' => __( 'Поиск категорий контроля качества' ), // Текст в кнопке поиска на странице всех таксономий. По умолчанию: __( 'Поиск меток' ) или __( 'Поиск рубрик' ).
          'popular_items' => null, // Надпись популярных таксономий (на странице всех таксономий). Этот параметр не используется для древовидных таксономий. По умолчанию: __( 'Популярные метки' ) или null.
          'separate_items_with_commas' => null, // Надпись разделения таксономий запятыми в метабоксе. Этот параметр не используется для древовидных таксономий. По умолчанию: __( 'Метки разделяются запятыми' ) или null.
          'add_or_remove_items' => null, // Надпись добавления или удаления таксономий в метабоксе когда JavaScript отключен. Этот параметр не используется для древовидных таксономий. По умолчанию: __( 'Добавить' ) или null.
          'choose_from_most_used' => null, // Текст выбора из часто используемых таксономий в метабоксе. Этот параметр не используется для древовидных таксономий. По умолчанию: __( 'Выбрать из часто используемых' ) или null.
          'not_found' => __( 'Категорий контроля качества не найдено.' ), // Текст в случае, если запрашиваемая таксономия не найдена. По умолчанию: __( 'Меток не найдено.' ) или __( 'Рубрик не найдено.' ).
      ),
      'public' => true, // Если true, то таксономия становится доступной для использования.
      'show_ui' => true, // Доступность таксономии для управления в админ-панели. По умолчанию: если не задано, то значение аргумента 'public'.
      'show_in_menu' => true, // Показывать таксономию в админ-меню. От параметра 'show_ui' отличается тем, что 'show_ui' делает доступным управление таксономией в админ-панели, но не показывает ее в меню. Значение аргумента 'show_ui' должно быть true. По умолчанию: значение аргумента 'show_ui'.
      'show_in_nav_menus' => true, // True делает возможным добавление или исключение таксономии в навигационном меню сайта во вкладке Внешний вид -> Меню. По умолчанию: если не задано, то значение аргумента 'public'.
      'show_tagcloud' => true, // Позволяет виджет 'Облако меток' использовать в таксономии. Виджет 'Облако меток; показывает список меток на странице записи (поста). Чем чаще используется метка, тем крупнее будет ее написание. По умолчанию: если не задано, то значение аргумента 'show_ui'.
      'show_in_quick_edit' => true, // Показ таксономии в меню быстрого доступа. По умолчанию: если не задано, то значение аргумента 'show_ui'.
      'meta_box_cb' => null, // Обеспечивает показ метабокса с таксономией в записи. По умолчанию: null.
      'show_admin_column' => false, // Позволяет автоматическое создание столбцов таксономии в таблице ассоциативных типов постов. По умолчанию: false.
      'description' => '', // Подключает описание таксономии в таблице со всеми таксономиями. По умолчанию: ''
      'hierarchical' => true, // Делает таксономию древовидной как рубрики или недревовидной как метки. По умолчанию: false.
      'update_count_callback' => '', // Название функции, которую вызовут, когда количество ассоциативных типов объектов, таких как запись (пост), будет обновлено. Действует во многом как хук. По умолчанию: ''.
      'query_var' => true, // Значение запроса. False, чтобы отключить. Можно задать свое значение. По умолчанию: true.
    // Перезапись URL. По умолчанию: true.
      'rewrite' => array(
          'slug' => 'tax-quality-control-categories', // Текст в ЧПУ. По умолчанию: название таксономии.
          'with_front' => false, // Позволяет ссылку добавить к базовому URL.
          'hierarchical' => true, // Использовать (true) или не использовать (false) древовидную структуру ссылок. По умолчанию: false.
          'ep_mask' => EP_NONE, // Перезаписывает конечное значение таксономии. По умолчанию: EP_NONE.
      ),
    /*
    Массив полномочий зарегестрированных пользователей:
    'capabilities' => array(
        'manage_terms' => 'manage_resource',
        'edit_terms'   => 'manage_categories',
        'delete_terms' => 'manage_categories',
        'assign_terms' => 'edit_posts',
    ),
    */
      'sort' => null, // Должна ли таксономия запоминать порядок, в котором посты были созданы. По умолчанию: null.
      '_builtin' => false, // Является ли таксономия собственной или встроенной. Рекомендация: не использовать этот аргумент при регистрации собственной таксономии. По умолчанию: false.
  );

                                                    //названия типов записей к которым будет привязана таксономия
  register_taxonomy( 'tax-quality-control-categories', array( 'quality-control' ), $args );
                      //Название таксономии
}

?>