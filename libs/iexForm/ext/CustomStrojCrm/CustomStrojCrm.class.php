<?

/**
 * Class CustomStrojCrm
 *
 * Данные формы будут отправлены в систему аналитики СтройМонтажа
 */
class CustomStrojCrm extends ExtensionBase {

    public $version = '1.0';

    public $priority = 900;

    /**
     * Ключ авторизациии
     * @var string $key обязательный
     */
    protected $key;

    /**
     * Урл CRM
     * @var string $crm_url необязательный
     */
    protected $crm_url = 'http://tmp.gefest-remont.ru/tools/php/addrecord.php';

    /**
     * Ответ сервера
     * @var string $result
     */
    private $result;

    private function getUtms() {
        $utms = [];
        $utm_ext = $this->getOtherExtensionInstance('Utm');

        if ($utm_ext === false) {
            return $utms;
        }

        /**
         * @var Utm $utm_ext
         */

        if (!count($utm_ext->getGetParamsFiltered())) {
            return $utms;
        }

        foreach ($utm_ext->getGetParamsFiltered() as $param => $value) {
            $title = $utm_ext->getGetParamsTitles($param);
            $utms[$param] = ['name'=>$param, 'title'=>$title, 'value'=>$value];
        }

        return $utms;
    }

    public function onSuccess() {
        parent::onSuccess();

        $field_data = [];
        foreach ($this->getFields() as $field) {
            $name = str_replace('additionalfields_', '', $field->name);
            $field_data[$name] = $field->value;
        }
        foreach ($this->getUtms() as $field) {
            $name = $field['name'];
            $field_data[$name] = $field['value'];
        }

        $data = http_build_query($field_data);
        $field_data['crypto'] = sha1($data.$this->key);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_HEADER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => array('Accept: application/json'),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->crm_url,
            CURLOPT_POSTFIELDS => http_build_query($field_data)
        ));
        $this->result = curl_exec($curl);
        curl_close($curl);
    }
}