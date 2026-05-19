<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정
define( 'SQLITE_DB_DIR',  __DIR__ . '/_db/' );
define( 'SQLITE_DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'eajtdjr209clrbvwo49yelxt68w58arv4gbe53fwd01vnx37m7ru1svpiyh2r1z3' );
define( 'SECURE_AUTH_KEY',  '2otuw5apwd30xoa01grmya36kivn9n59d871kjrnq0ygfczb8ujjizy0mrb1negf' );
define( 'LOGGED_IN_KEY',    'abk9max2nmoafelmya338xw3rfb9bjkewt5ddthwrsj8vf8t3vdl4q4nmpljbfq3' );
define( 'NONCE_KEY',        '5j1cq2gocrvngtiab0tj9uj4zcic3p7ldesf89o3r2f888bzvn0u85z17axc06xk' );
define( 'AUTH_SALT',        'dj45t4v1v1ro47dbtfxu6vnt3md4ees9imqi4pjpaipfy5bnb8q6t3q6pjblomuy' );
define( 'SECURE_AUTH_SALT', 'gcg3dg3b2xv3p3cgzzaslaodbgdbre2qga9znywexbs1lu94hoqefjax0lc3xe52' );
define( 'LOGGED_IN_SALT',   '2ysgpcmhgu2wo1bprhc0u57iyc4m7wwktm2mc1i1kouodpcfp7xqcpaffi2i1s7f' );
define( 'NONCE_SALT',       'to6gxsskb2ug520rk2eqyo67ptyarvysd6nolgb9zdmlpnd6ifxfzqty4ysi8czj' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-843d83dc-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-843d83dc-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
