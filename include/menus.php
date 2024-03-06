<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'introduce',
    'name' => '회사소개',
    'link' => '/sub/test',
    'sb_2menus' => [
      [
        'id' => 'aboutus',
        'name' => '회사소개',
        'link' => '/sub/test',
        'sb_3menus' => [
          [
            'id' => 'vision',
            'name' => '비전',
            'link' => '/sub/test'
          ],
          [
            'id' => 'organization',
            'name' => '조직도',
            'link' => '/sub/test'
          ]
        ]
      ],
      [
        'id' => 'greeting',
        'name' => 'CEO인사말',
        'link' => '/sub/test'
      ],
      [
        'id' => 'location',
        'name' => '오시는 길',
        'link' => '/sub/test'
      ]
    ]
  ],
  [
    'id' => 'cs',
    'name' => '고객지원',
    'link' => '/qa',
    'sb_2menus' => [
      [
        'id' => 'qa',
        'name' => '문의하기',
        'link' => '/qa/write'
      ],
      [
        'id' => 'gallery',
        'name' => '갤러리',
        'link' => '/gallery'
      ],
      [
        'id' => 'notice',
        'name' => '공지사항',
        'link' => '/notice'
      ],
      [
        'id' => 'faq',
        'name' => '자주묻는질문',
        'link' => '/faq'
      ]
    ]
  ]
];

//제품 카테고리 DB 데이터 가져오기 + 메뉴 배열에 할당
/* 필요시 주석 해제
$cate_table = G5_TABLE_PREFIX.'shop_category';
$prd_table = G5_TABLE_PREFIX.'shop_item';
$prd_cate_sql = " select ca_id, ca_1_subj from {$cate_table} ";
$prd_cate_result = sql_query($prd_cate_sql);
$prd_cate = array();
for($i=0; $prd_cate_row=sql_fetch_array($prd_cate_result); $i++){
  $sb_menus[1]['sb_2menus'][] = [
    'id' => $prd_cate_row['ca_id'],
    'name' => $prd_cate_row['ca_1_subj'],
    'link' => '/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>