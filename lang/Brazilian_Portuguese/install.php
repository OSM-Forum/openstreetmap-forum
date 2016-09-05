<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Choose install language'		=>	'Escolha o idioma do script de instalação',
'Choose install language info'	=>	'O idioma usado para este script de instalação. O idioma padrão usado no site pode ser definido abaixo.',
'Install language'				=>	'Idioma de instalação',
'Change language'				=>	'Alterar idioma',
'Next'							=>	'Próximo',
'Already installed'				=>	'Parece que o FluxBB já está instalado. Você deve seguir para <a href="index.php">here</a> ao invés disso.',
'You are running error'			=>	'Você está rodando %1$s versão %2$s. FluxBB %3$s exige ao menos %1$s %4$s para funcionar corretamente. Você deve atualizar sua instalação %1$s antes de poder continuar.',
'My FluxBB Forum'				=>	'Meu Fórum FluxBB',
'Description'					=>	'Infelizmente não é possível definir o que é o FluxBB - você tem que ver por si mesmo.',
'Username 1'					=>	'Nomes de usuários devem ter ao menos 2 caracteres.',
'Username 2'					=>	'Nomes de usuários não podem ter mais que 25 caracteres.',
'Username 3'					=>	'O nome de usuário visitante é reservado.',
'Username 4'					=>	'Nomes de usuários não podem ter o formato de endereços IP.',
'Username 5'					=>	'Nomes de usuários não podem usar todos os caracteres \', " e [ ou ] de uma vez.',
'Username 6'					=>	'Nomes de usuários não podem conter nenhuma das tags de formatação de texto (BBCode) que o fórum use.',
'Short password'				=>	'Senhas devem ter ao menos 4 caracteres.',
'Passwords not match'			=>	'As senhas não combinam.',
'Wrong email'					=>	'O endereço de email de administrador que você digitou é inválido.',
'No board title'				=>	'Você deve definir um título para o site.',
'Error default language'		=>	'O idioma padrão escolhido parece não existir.',
'Error default style'			=>	'O estilo padrão escolhido parece não existir.',
'No DB extensions'				=>	'Este ambiente PHP não tem suporte para nenhum dos bancos de dados usados pelo FluxBB. O PHP precisa ter suporte para MySQL, PostgreSQL ou SQLite para que o FluxBB seja instalado.',
'Administrator username'		=>	'Nome de usuário do administrador',
'Administrator password 1'		=>	'Senha 1 do administrador',
'Administrator password 2'		=>	'Senha 2 do administrador',
'Administrator email'			=>	'Email do administrador',
'Board title'					=>	'Título do site',
'Base URL'						=>	'A URL (sem a barra no final) do seu fórum FluxBB. Isto deve estar correto.',
'Required field'				=>	'é um campo obrigatório neste formulário.',
'FluxBB Installation'			=>	'Instalação do FluxBB',
'Welcome'						=>	'Você está prestes a instalar o FluxBB. Para instalar o FluxBB, você deve completar o formulário abaixo. Se encontrar qualquer dificuldade durante a instalação, por favor, use a documentação.',
'Install'						=>	'Instalar o FluxBB %s',
'Errors'						=>	'Os seguintes erros precisam ser corrigidos:',
'Database setup'				=>	'Configuração do banco de dados',
'Info 1'						=>	'Todas as informações necessárias para criar a conexão com o seu banco de dados.',
'Select database'				=>	'Selecione o tipo do seu banco de dados',
'Info 2'						=>	'Selecione um banco de dados. Nós suportamos SQLite, MySQL e PostgreSQL.',
'Database type'					=>	'Tipo de banco de dados',
'Required'						=>	'(Obrigatório)',
'Database hostname'				=>	'Digite o hostname do servidor do seu banco de dados',
'Info 3'						=>	'Você deve conseguir obter esta informação com seu provedor de hospedagem, caso <code>localhost</code> não funcione.',
'Database server hostname'		=>	'Hostname do servidor do banco de dados',
'Database enter name'			=>	'Digite o nome do seu banco de dados',
'Info 4'						=>	'O nome do banco de dados no qual o FluxBB será instalado.',
'Database name'					=>	'Nome do banco de dados',
'Database enter informations'	=>	'Digite o nome de usuário e senha do seu banco de dados',
'Database username'				=>	'Nome de usuário do banco de dados',
'Info 5'						=>	'Nome de usuário e senha do MySQL (Ignore caso use SQLite).',
'Database password'				=>	'Senha do banco de dados',
'Database enter prefix'			=>	'Digite o prefixo de tabelas do banco de dados',
'Info 6'						=>	'Caso você deseje rodar múltiplas instalações do FluxBB em um único banco de dados, mude isto.',
'Table prefix'					=>	'Prefixo de tabelas',
'Administration setup'			=>	'Configuração de administração',
'Info 7'						=>	'Crie a primeira conta do seu fórum.',
'Info 8'						=>	'Seu nome de usuário deve ter entre 2 e 25 caracteres de comprimento. Sua senha deve conter no mínimo 4 caracteres. Lembre-se que as senhas diferenciam maiúsculas de minúsculas.',
'Password'						=>	'Senha',
'Confirm password'				=>	'Confirmar senha',
'Board setup'					=>	'Configuração do site',
'Info 11'						=>	'Configurações do seu site, você pode alterá-las mais tarde.',
'General information'			=>	'Digite o título e descrição do seu site.',
'Board description'				=>	'Descrição do site (suporta HTML)',
'Appearance'					=>	'Aparência',
'Info 15'						=>	'Personalize seu fórum. Escolha um idioma e estilo para seu site.',
'Default language'				=>	'Idioma padrão',
'Default style'					=>	'Estilo padrão',
'Start install'					=>	'Iniciar instalação',
'DB type not valid'				=>	'\'%s\' não é um tipo válido de banco de dados',
'Table prefix error'			=>	'O prefixo de tabelas \'%s\' contém caracteres ilegais ou é muito longo. O prefixo pode conter as letras de a a z, quaisquer números e o caracteres grifo. Porém ele não pode começar com um número. O comprimento máximo é de 40 caracteres. Por favor, escolha um prefixo diferente',
'Prefix reserved'				=>	'O prefixo de tabelas \'sqlite_\' é reservado para uso pelo motor SQLite. Por favor, escolha um prefixo diferente',
'Existing table error'			=>	'Uma tabela chamada \'%susers\' já está presente no banco de dados \'%s\'. Isto pode significar que o FluxBB já esteja instalado ou que outro programa está instalado e ocupando um ou mais dos nomes de tabelas que o FluxBB precisa. Se você deseja instalar múltiplas cópias do FluxBB no mesmo banco de dados, você precisa escolher um prefixo diferente',
'InnoDB off'					=>	'InnoDB não parece estar habilitado. Por favor, escolha uma camada de banco de dados que não possua suporte a InnoDB, ou ative o InnoDB no seu servidor MySQL',
'Administrators'				=>	'Administradores',
'Administrator'					=>	'Administrador',
'Moderators'					=>	'Moderadores',
'Moderator'						=>	'Moderador',
'Guests'						=>	'Visitantes',
'Guest'							=>	'Visitante',
'Members'						=>	'Membros',
'Announcement'					=>	'Digite o seu anúncio aqui.',
'Rules'							=>	'Digite suas regras aqui',
'Maintenance message'			=>	'O fórum está temporariamente fora do ar para manutenção. Por favor, tente novamente daqui alguns minutos.',
'Test post'						=>	'Tópico de teste',
'Message'						=>	'Se você está olhando para isto (e eu acredito que esteja), a instalação do FluxBB parece ter dado certo! Agora você pode se autenticar e seguir para o painel de controle administrativo para configurar seu fórum.',
'Test category'					=>	'Categoria de teste',
'Test forum'					=>	'Fórum de teste',
'This is just a test forum'		=>	'Este é apenas um fórum de teste',
'Alert cache'					=>	'<strong>O diretório de cache não tem permissão de escrita!</strong> Para que o FluxBB funcione corretamente o diretório <em>%s</em> deve ter permissões de escrita pelo PHP. Use chmod para definir as permissões de diretório apropriadas. Se estiver em dúvida, faça chmod para 0777.',
'Alert avatar'					=>	'<strong>O diretório de avatares não tem permissão de escrita!</strong> Se você deseja que os usuários possam enviar seus próprios avatares, você deve garantir que o diretório <em>%s</em> tenha permissões de escrita pelo PHP. Você poderá posteriormente escolher salvar avatares em um diretório diferente (veja em Administrações/Opções). Use chmod para definir as permissões de diretório adequadas. Se estiver em dúvida, faça chmod para 0777.',
'Alert upload'					=>	'<strong>Parece que o envio de arquivos foi desativado neste servidor!</strong> Se você deseja que os usuários possam enviar seus próprios avatares você deve ativar a configuração file_uploads no PHP. Assim que o envio de arquivos for ativado, o envio de avatares poderá ser ativado em Administração/Opções/Funções.',
'FluxBB has been installed'		=>	'O FluxBB foi instalado. Para finalizar a instalação, por favor, siga as instruções abaixo.',
'Final instructions'			=>	'Instruções finais',
'Info 17'						=>	'Para finalizar a instalação, você precisa clicar no botão abaixo para baixar um arquivo chamado config.php. Você então deverá enviar este arquivo para o diretório base da sua instalação do FluxBB.',
'Info 18'						=>	'Uma vez que tiver enviado o arquivo config.php, o FluxBB estará completamente instalado! Neste ponto, você pode <a href="index.php">ir ao índice do fórum</a>.',
'Download config.php file'		=>	'Baixar o arquivo config.php',
'FluxBB fully installed'		=>	'O FluxBB foi completamente instalado! Você pode agora <a href="index.php">ir ao índice do fórum</a>.',

);