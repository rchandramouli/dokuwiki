<?php
/**
 * Chinese Traditional language file
 *
 * @author Li-Jiun Huang <ljhuang.tw@gmail.com>
 * @author http://www.chinese-tools.com/tools/converter-simptrad.html
 */
$lang['menu']                  = '系統配置設定';
$lang['error']                 = '設定因為不合法的值而失敗，請檢查您的改變並重新送出。
<br />不正確的值會被紅色方框圍住。';
$lang['updated']               = '成功地更新設定。';
$lang['nochoice']              = '(無其他選項可選)';
$lang['locked']                = '設定檔無法被更新, 如果這不是故意的, <br />
請確定設定檔名以及權限是正確的.';
$lang['_configuration_manager'] = '設定管理';
$lang['_header_dokuwiki']      = 'DokuWiki 設定';
$lang['_header_plugin']        = '外掛設定';
$lang['_header_template']      = '樣板設定';
$lang['_header_undefined']     = '不明確的設定';
$lang['_basic']                = '基本設定';
$lang['_display']              = '顯示設定';
$lang['_authentication']       = '認證設定';
$lang['_anti_spam']            = 'Anti-Spam 設定';
$lang['_editing']              = '編輯設定';
$lang['_links']                = '連結設定';
$lang['_media']                = '媒體設定';
$lang['_advanced']             = '進階設定';
$lang['_network']              = '網路設定';
$lang['_plugin_sufix']         = '外掛設定';
$lang['_template_sufix']       = '樣板設定';
$lang['_msg_setting_undefined'] = '设置的元数据不存在。';
$lang['_msg_setting_no_class'] = '設置的分類不存在。';
$lang['_msg_setting_no_default'] = '無預設值';
$lang['fmode']                 = '檔案建立模式';
$lang['dmode']                 = '目錄建立模式';
$lang['lang']                  = '語系';
$lang['basedir']               = '根目錄';
$lang['baseurl']               = '根路徑（URL）';
$lang['savedir']               = '儲存資料的目錄';
$lang['start']                 = '開始頁面的名稱';
$lang['title']                 = 'Wiki 標題';
$lang['template']              = '樣板';
$lang['fullpath']              = '顯示完整的路徑於頁面底部';
$lang['recent']                = '最近更新';
$lang['breadcrumbs']           = '显示“足迹”的数量';
$lang['youarehere']            = '顯示“您在這裡”';
$lang['typography']            = '進行字符替換';
$lang['htmlok']                = '允許嵌入式HTML';
$lang['phpok']                 = '允許嵌入式PHP';
$lang['dformat']               = '日期格式(請見 PHP\'s <a href="http://www.php.net/strftime">strftime</a> function)';
$lang['signature']             = '簽名';
$lang['toptoclevel']           = '本頁目錄的最高層級';
$lang['maxtoclevel']           = '本頁目錄顯示的最大層級';
$lang['maxseclevel']           = '可編輯段落的最大層級';
$lang['camelcase']             = '對鏈接使用 CamelCase';
$lang['deaccent']              = '清理页面名称';
$lang['useheading']            = '使用第一個標題作為頁面名稱';
$lang['refcheck']              = '媒體連結檢查';
$lang['refshow']               = '媒體連結的顯示數量';
$lang['allowdebug']            = '允許 debug <b> 如果不需要則停用! </b>';
$lang['usewordblock']          = '基於 wordlist 來限制 spam';
$lang['indexdelay']            = '建立索引前的延遲時間(秒)';
$lang['relnofollow']           = '使用 rel="nofollow" 於外部連結';
$lang['mailguard']             = '暗化E-mail位址';
$lang['iexssprotect']          = '檢查上傳的檔案中是否隱含惡意的 JavaScript 或 HTML 碼';
$lang['useacl']                = '使用存取控制名單';
$lang['autopasswd']            = '自動產生密碼';
$lang['authtype']              = '认证后台管理方式';
$lang['passcrypt']             = '密碼加密方式';
$lang['defaultgroup']          = '預設群組';
$lang['superuser']             = '超級用戶 - 不論 ACL 如何設置，都能訪問所有頁面與功能的用戶組/用戶';
$lang['manager']               = '管理员 - 能访问相应管理功能的用户组/用户';
$lang['profileconfirm']        = '修改個人資料時需要確認密碼';
$lang['disableactions']        = '停用DokuWiki功能';
$lang['disableactions_check']  = '檢查';
$lang['disableactions_subscription'] = '訂閱/取消訂閱';
$lang['disableactions_nssubscription'] = '命名空間訂閱/退訂';
$lang['disableactions_wikicode'] = '查看源文件/導出源文件';
$lang['disableactions_other']  = '其他功能(以逗號分隔)';
$lang['sneaky_index']          = '默認情況下，DokuWiki 在索引頁會顯示所有 namespace。啟用該選項能隱藏那些用戶沒有權限閱讀的頁面。但也可能將用戶能夠閱讀的子頁面一並隱藏。這有可能導致在特定 ACL 設置下，索引功能不可用。';
$lang['auth_security_timeout'] = '認證確定的 Timeout (秒)';
$lang['updatecheck']           = '檢查更新與安全性警告? 使用此功能, DokuWiki 需要聯繫 splitbrain.org.';
$lang['userewrite']            = '使用更整潔的 URL';
$lang['useslash']              = '在 URL 中使用斜杠作为命名空间的分隔符';
$lang['usedraft']              = '編輯時自動儲存草稿';
$lang['sepchar']               = '頁面名稱中單字的分隔字元';
$lang['canonical']             = '使用完全標准的 URL';
$lang['autoplural']            = '在鏈接中檢查多種格式';
$lang['compression']           = 'attic 文件的壓縮方式';
$lang['cachetime']             = 'cache的最大時間(秒)';
$lang['locktime']              = '鎖定檔案的最大時間(秒)';
$lang['fetchsize']             = 'fetch.php可以從外部下載的最大檔案尺寸(bytes)';
$lang['notify']                = '寄送變更通知信到這個E-mail位址';
$lang['registernotify']        = '寄送新使用者註冊資訊到這個E-mail位址';
$lang['mailfrom']              = '自動發送郵件時使用的郵件地址';
$lang['gzip_output']           = '對 xhtml 使用 gzip 內容編碼';
$lang['gdlib']                 = 'GD Lib 版本';
$lang['im_convert']            = 'ImageMagick的轉換工具路徑';
$lang['jpg_quality']           = 'JPG 壓縮品質(0-100)';
$lang['subscribers']           = '啟用頁面訂閱';
$lang['compress']              = '緊密CSS與JavaScript的輸出';
$lang['hidepages']             = '隱藏匹配的界面（正則表達式）';
$lang['send404']               = '存取不存在的頁面時送出"HTTP 404/Page Not Found"';
$lang['sitemap']               = '產生 Google sitemap (天)';
$lang['broken_iua']            = 'ignore_user_abort 功能失效了？這有可能導致搜索索引不可用。IIS+PHP/CGI 已損壞。請參閱 <a href=\"http://bugs.splitbrain.org/?do=details&task_id=852\">Bug 852</a> 獲取更多信息。';
$lang['xsendfile']             = '使用 X-Sendfile 頭讓服務器發送狀態文件？您的服務器需要支持該功能。';
$lang['xmlrpc']                = '啟用/停用 XML-RPC 介面';
$lang['renderer_xhtml']        = '主维基页面 (xhtml) 输出使用的渲染';
$lang['renderer__core']        = '%s (dokuwiki 核心)';
$lang['renderer__plugin']      = '%s (外掛)';
$lang['rss_type']              = 'XML feed 類型';
$lang['rss_linkto']            = 'XML feed 連結到';
$lang['rss_content']           = 'XML feed 項目中顯示什麼呢？';
$lang['rss_update']            = 'XML feed 更新間隔時間(秒)';
$lang['recent_days']           = '保存多少天內的變更';
$lang['rss_show_summary']      = '於標題中顯示簡要的XML feed';
$lang['target____wiki']        = '內部連結的目標視窗';
$lang['target____interwiki']   = 'wiki內部連結的目標視窗';
$lang['target____extern']      = '外部連結的目標視窗';
$lang['target____media']       = '媒體連結的目標視窗';
$lang['target____windows']     = '視窗連結的目標視窗';
$lang['proxy____host']         = 'Proxy 伺服器名稱';
$lang['proxy____port']         = 'Proxy 連接埠';
$lang['proxy____user']         = 'Proxy 使用者名稱';
$lang['proxy____pass']         = 'Proxy 密碼';
$lang['proxy____ssl']          = '使用 SSL 連接到 Proxy';
$lang['safemodehack']          = '啟用 Safemode Hack';
$lang['ftp____host']           = 'Safemode Hack 的 FTP 服務器';
$lang['ftp____port']           = 'Safemode Hack 的 FTP 端口';
$lang['ftp____user']           = 'Safemode Hack 的 FTP 用戶名';
$lang['ftp____pass']           = 'Safemode Hack 的 FTP 密碼';
$lang['ftp____root']           = 'Safemode Hack 的 FTP 根路徑';
$lang['typography_o_0']        = '無';
$lang['typography_o_1']        = '仅限双引号';
$lang['typography_o_2']        = '所有引號（不一定能正常運行）';
$lang['userewrite_o_0']        = '無';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki 內部控制';
$lang['deaccent_o_0']          = '關閉';
$lang['deaccent_o_1']          = '移除重音符號';
$lang['deaccent_o_2']          = '用羅馬字拼寫';
$lang['gdlib_o_0']             = 'GD Lib 無法使用';
$lang['gdlib_o_1']             = '版本 1.x';
$lang['gdlib_o_2']             = '自動偵測';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = '概要';
$lang['rss_content_o_diff']    = '統一差異';
$lang['rss_content_o_htmldiff'] = 'HTML格式的差異對照表';
$lang['rss_content_o_html']    = '完整的 HTML 頁面內容';
$lang['rss_linkto_o_diff']     = '差別查看';
$lang['rss_linkto_o_page']     = '已修訂的頁面';
$lang['rss_linkto_o_rev']      = '版本清單';
$lang['rss_linkto_o_current']  = '目前頁面';
$lang['compression_o_0']       = '無';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = '不使用';
$lang['xsendfile_o_1']         = '專有 lighttpd 頭（1.5 發布前）';
$lang['xsendfile_o_2']         = '標准 X-Sendfile 頭';
$lang['xsendfile_o_3']         = '專有 Nginx X-Accel-Redirect 頭';