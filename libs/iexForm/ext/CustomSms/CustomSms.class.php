<?

/**
 * Class CustomSms
 *
 * Будет отправлена смс сервисом смс.ру
 */
class CustomSms extends ExtensionBase {

    public $version = '1.0';

    public $priority = 1500;

    /**
     * Sms сообщение
     * @var string $message_template обязательный
     */
    protected $message_template;

    /**
     * АПИ-Ключ авторизациии
     * @var string $key обязательный
     */
    protected $key;

    /**
     * Ответ сервера
     * @var string $result
     */
    private $result;

    private function getClearPhone($phone): string {
        $phone = explode(';', $phone);
        $phone = $phone[0];
        preg_match_all('!\d+!', $phone, $matches);
        $phone = implode('', $matches[0]);
        if (!is_numeric($phone) || strlen($phone) < 6) {
            return '';
        }

        if ($phone[0] . $phone[1] === '88') {
            $phone = substr($phone, 1);
        } elseif ($phone[0] . $phone[1] === '89') {
            $phone = substr($phone, 1);
        } elseif ($phone[0] . $phone[1] === '84') {
            $phone = substr($phone, 1);
        } elseif (strpos($phone, '7') === 0) {
            $phone = substr($phone, 1);
        }

        return $phone;
    }

    private function sendSms(string $phone, string $message) {
        $phone = $this->getClearPhone($phone);
        $message = urlencode($message);

        $ch = curl_init();

        /** @noinspection CurlSslServerSpoofingInspection */
        $curlopts = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => 'iexCRM-API-client/1.0',
            CURLOPT_URL => 'https://sms.ru/sms/send?api_id='.$this->key.'&to='.$phone.'&msg='.$message.'&json=1',
            CURLOPT_HTTPHEADER => array('Content-type: application/x-www-form-urlencoded; charset=UTF-8'),
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        );

        curl_setopt_array($ch, $curlopts);

        $this->result = curl_exec($ch);
    }

    public function onSuccess() {
        parent::onSuccess();
        $fields = $this->getFields();
        foreach ($fields as $field) {
            if($field->name === 'phone' && !empty($field->value)) {
                $this->sendSms($field->value, $this->message_template);
                break;
            }
        }
    }
}