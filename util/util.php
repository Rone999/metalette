
<?php
//namespace util;


class util {

    static function converteStatusPlaca($status) {
        switch ($status) {
            case 1:
                return \util\constantes::STATUS_AG_ORCAMENTO;
            case 2:
                return \util\constantes::STATUS_AG_REPARO;
            case 3:
                return \util\constantes::STATUS_REPARADA;
            case 4:
                return \util\constantes::STATUS_N_REPARADA;
            case 5:
                return \util\constantes::STATUS_AG_PAGAMENTO;
            case 6:
                return \util\constantes::STATUS_AG_PAGAMENTO_ENVIO;
            default:
                return \util\constantes::STATUS_GENERICO;
        }
    }

    static function converteStatusOs($status) {
        switch ($status) {
            case 1:
                return \util\constantes::STATUS_RECEBIDO;
            case 2:
                return \util\constantes::STATUS_AG_ORCAMENTO;
            case 3:
                return \util\constantes::STATUS_EM_PEPARO;
            case 4:
                return \util\constantes::STATUS_FINALIZADA;
            case 5:
                return \util\constantes::STATUS_AG_PAGAMENTO;
            case 6:
                return \util\constantes::STATUS_AG_ORCAMENTO;
            case 7:
                return \util\constantes::STATUS_AG_PAGAMENTO_ENVIO;
            default:
                return \util\constantes::STATUS_GENERICO;
        }
    }
}
