<?php
namespace MailPoetVendor\Doctrine\DBAL\Logging;
if (!defined('ABSPATH')) exit;
use function microtime;
class DebugStack implements SQLLogger
{
 public $queries = [];
 public $enabled = \true;
 public $start = null;
 public $currentQuery = 0;
 public function startQuery($sql, ?array $params = null, ?array $types = null)
 {
 if (!$this->enabled) {
 return;
 }
 $this->start = microtime(\true);
 $this->queries[++$this->currentQuery] = ['sql' => $sql, 'params' => $params, 'types' => $types, 'executionMS' => 0];
 }
 public function stopQuery()
 {
 if (!$this->enabled) {
 return;
 }
 $this->queries[$this->currentQuery]['executionMS'] = microtime(\true) - $this->start;
 }
}
