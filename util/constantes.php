<?php

namespace util;

abstract class constantes{
   PUBLIC const HOSTNAME = "localhost";
   PUBLIC const USERNAME = "root";
   PUBLIC const PASSWORD = "";
   PUBLIC const DATABASE = "agendamentos_db";

   
   public const ERRO_PARAMETROS = "PARAMETROS INVÁLIDOS";
   public const MSG_ERRO_SEM_RETORNO = "SEM RETORNO";
   
   PUBLIC const COLUNA_CPF = "clientes.cpf_cnpj"; 
   PUBLIC const COLUNA_ID_OS = "id_os"; 
   
   
   public const SUCESSO_MSG = "SUCESSO";
   public const ERRO_MSG = "ERRO";

    public const SUCESSO_STA = "1";
    public const ERRO_STA = "2";
   
   
   public const STATUS_AG_ORCAMENTO = "AGUARDADNO ORÇAMENTO";
   public const STATUS_AG_REPARO = "AGUARDANDO REPARO";
   public const STATUS_REPARADA = "REPARADA";
   public const STATUS_N_REPARADA = "NÃO REPARADA";
   public const STATUS_AG_PAGAMENTO = "AGUARDANDO PAGAMENTO";
   public const STATUS_AG_PAGAMENTO_ENVIO = "AGUARDANDO ENVIO";
   public const STATUS_GENERICO = "AGUARDE";
   public const STATUS_RECEBIDO = "RECEBIDO";
   public const STATUS_EM_PEPARO = "EM REPARO";
   public const STATUS_FINALIZADA = "FINALIZADA";
   
   
   
}
