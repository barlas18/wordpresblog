<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'ramazan' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'ramazan' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'q1w2e3r4' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Hu7(!Ec`>?g.N_%b<`3snf@YpDQ.mpTL9UCz8SG{i@#d*aGEy)`*zA).Z/|!QS4h' );
define( 'SECURE_AUTH_KEY',  'vBgm4P;BOXBrLG%_@V^<Edr0wX?=]j>}g7]s$BM:ysO{B-pitHapv#:)+IvyDX=:' );
define( 'LOGGED_IN_KEY',    's[)!LZUpb>c,;]%Q+t.PGV)K%Yj /LVDk}N~Bx^qp1%vJ;z k@%Ea]D(9I|R`i5>' );
define( 'NONCE_KEY',        'IW*+9PH)w-Y`fRBnwD!.#)/Ivp,R?j,#QgkHYpXy~A0Z)4^ Z:N*{ CPw +_)6;~' );
define( 'AUTH_SALT',        'L(T.fguwWg3aiqcC$dqa@P3#{Ast*X*sxzc=LxPafUc}UI!S*`n(&u:n/}9<!ovG' );
define( 'SECURE_AUTH_SALT', '6_2exCi!Cq5}L*_wWu#pZ:=OB7%%|Z7&+eQ)GNEQC{:=$Gy2,s;+VJ@W^2hllo8f' );
define( 'LOGGED_IN_SALT',   'i!!BM6EK T{K6kb-iR5zj?MFm4uy|eG.hW0>t@$o%$-hvv!m+DFpWBE*Do!pWw2{' );
define( 'NONCE_SALT',       'laM^L}S9}E#ha;4*B._5U6S=}eCnyb2$ {6`Nk:yM]gF-/mV wX6v^!kM;PxowvU' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
