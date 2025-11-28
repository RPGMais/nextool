<?php

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

class PluginNextoolModuleCatalog {

   private const MODULES = [
      'aiassist' => [
         'name'        => 'AI Assist',
         'description' => 'Utiliza IA para analisar o sentimento do solicitante, sugerir automaticamente a urgência mais adequada e gerar resumos claros dos chamados, agilizando a triagem e priorização de cada atendimento pela equipe de suporte.',
         'version'     => '1.3.6-beta',
         'icon'        => 'ti ti-robot',
         'billing_tier'=> 'FREE',
         'has_config'  => true,
         'downloadable'=> true,
         'author'      => [
            'name' => 'Richard Loureiro',
            'url'  => 'https://linkedin.com/in/richard-ti/',
         ],
      ],
      'autentique' => [
         'name'        => 'Autentique',
         'description' => 'Integra assinatura digital aos chamados, permitindo enviar documentos diretamente pelo sistema, controlar quem deve assinar e acompanhar em tempo real o status de cada assinatura até a conclusão do processo.',
         'version'     => '1.9.0',
         'icon'        => 'ti ti-signature',
         'billing_tier'=> 'PAID',
         'has_config'  => true,
         'downloadable'=> true,
         'author'      => [
            'name' => 'Richard Loureiro',
            'url'  => 'https://linkedin.com/in/richard-ti/',
         ],
      ],
      'mailinteractions' => [
         'name'        => 'Mail Interactions',
         'description' => 'Permite interações completas por e-mail, possibilitando que usuários aprovem solicitações, validem entregas e respondam pesquisas de satisfação diretamente da caixa de entrada, sem necessidade de acessar o sistema.',
         'version'     => '2.0.1',
         'icon'        => 'ti ti-mail',
         'billing_tier'=> 'PAID',
         'has_config'  => true,
         'downloadable'=> true,
         'author'      => [
            'name' => 'Richard Loureiro',
            'url'  => 'https://linkedin.com/in/richard-ti/',
         ],
      ],
      'pendingsurvey' => [
         'name'        => 'Pending Survey',
         'description' => 'Exibe pop-ups alertando o usuário sobre pesquisas de satisfação pendentes e, opcionalmente, bloqueia a abertura de novos chamados quando a quantidade de pesquisas não respondidas ultrapassar o limite configurado (X).',
         'version'     => '1.0.0',
         'icon'        => 'ti ti-message-question',
         'billing_tier'=> 'PAID',
         'has_config'  => true,
         'downloadable'=> true,
         'author'      => [
            'name' => 'Richard Loureiro',
            'url'  => 'https://linkedin.com/in/richard-ti/',
         ],
      ],
      'smartassign' => [
         'name'        => 'Smart Assign',
         'description' => 'Distribui novos chamados automaticamente entre os técnicos, aplicando regras de balanceamento de carga ou rodízio configurável, para evitar sobrecarga em alguns atendentes e garantir um fluxo de trabalho mais equilibrado.',
         'version'     => '1.2.0',
         'icon'        => 'ti ti-user-check',
         'billing_tier'=> 'PAID',
         'has_config'  => true,
         'downloadable'=> true,
         'author'      => [
            'name' => 'Richard Loureiro',
            'url'  => 'https://linkedin.com/in/richard-ti/',
         ],
      ],
      'helloworld' => [
         'name'        => 'Hello World (PoC)',
         'description' => 'Demonstração da distribuição remota de módulos via ContainerAPI.',
         'version'     => '1.0.0',
         'icon'        => 'ti ti-code',
         'billing_tier'=> 'FREE',
         'has_config'  => true,
         'downloadable'=> true,
         'author'      => [
            'name' => 'Richard Loureiro',
            'url'  => 'https://linkedin.com/in/richard-ti/',
         ],
      ],
   ];

   public static function all(): array {
      return self::MODULES;
   }

   public static function find(string $moduleKey): ?array {
      return self::MODULES[$moduleKey] ?? null;
   }
}


