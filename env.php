<?php
  $variables = [
      'ALIAS_MULTIPLES_3' => 'BHUT',
      'ALIAS_MULTIPLES_5' => 'IT',
      'ALIAS_MULTIPLES_15' => 'BHUT IT',
      'MDC_1' => 3,
      'MDC_3' => 5,
      'MDC_3' => 15,
      'LENGTH' => 100,
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>
