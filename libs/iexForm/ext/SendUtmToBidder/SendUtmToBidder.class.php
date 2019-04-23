<?

/**
 * Class SendUtmToUrl
 *
 * Отправить данные utm меток на произвольный url
 *
 */
class SendUtmToBidder extends ExtensionBase {
    public $version = '1.0';
    public $priority = 210;

    public function __construct(IexForm $core, array $params = array()) {
        parent::__construct($core, $params);
    }

    public function onSuccess() {
        parent::onSuccess();

        $Utm = $this->ext('Utm');
        if ($Utm) {
            $params = $Utm->getGetParamsFiltered();

            $params['domain'] = $_SERVER['SERVER_NAME'];
            $params['source_type'] = 'form';
            $params['timestamp'] = time();
            $params['sign'] = md5($params['domain'].'TW2psdsg_Sjt2ldk'.$params['timestamp']);

            if (!empty($params)) {
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL=>'http://bid.gefest-remont.ru/api/save_utm.php',
                    CURLOPT_POST=>true,
                    CURLOPT_POSTFIELDS=>http_build_query($params)
                ));
                curl_exec($ch);
            }
        }
    }
}