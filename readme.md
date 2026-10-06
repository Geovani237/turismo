# 🗺️ Portal de Turismo de Americana-SP

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Google Maps](https://img.shields.io/badge/Google%20Maps%20API-4285F4?style=for-the-badge&logo=google-maps&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

Site institucional de turismo da cidade de Americana (SP) com um mapa interativo dos pontos turísticos, alimentado por um painel administrativo próprio integrado ao WordPress.

📅 **Projeto desenvolvido durante o curso técnico, entre fevereiro e junho de 2023.**

---

## ✨ Funcionalidades

### 👤 Para o visitante
- **Páginas do site:** Atrativos turísticos, eventos, hotéis, "quem somos" e formulário de contato.
- **Mapa interativo:** Marcadores dinâmicos dos pontos turísticos (Jardim Botânico, Parque Ecológico e outros).
- **InfoWindow do local:** Ao clicar em um marcador, abre uma janela com foto, endereço, telefone e link de apoio.

### 🛠️ Para o administrador
- **CRUD completo:** Cadastro, listagem, edição e exclusão de locais.
- **Dados geográficos:** Nome, telefone, endereço, link, latitude e longitude.
- **Upload de imagens:** Upload da foto do local, com renomeação automática do arquivo por *timestamp*.
- **Painel integrado:** Telas de gestão acessíveis diretamente pelo menu do painel do WordPress.

> ⚡ **Diferencial:** Os pontos do mapa não ficam fixos no código. Tudo o que o administrador cadastra aparece automaticamente no mapa.

---

## 🛠️ Tecnologias

| Camada | Tecnologias |
| :--- | :--- |
| **Site e páginas** | WordPress, Elementor, tema Hello Elementor |
| **Mapa** | Google Maps JavaScript API (Markers e InfoWindow) |
| **Back-end do painel** | PHP (`mysqli`) |
| **Banco de dados** | MySQL |
| **Interface do painel** | HTML, CSS, Bootstrap 5, Bootstrap Icons |
| **Ambiente** | XAMPP (Apache + MySQL), All-in-One WP Migration |

---

## ⚙️ Como funciona

```mermaid
flowchart LR
    A[Administrador] -->|cadastra local + foto| B[Painel no WP Admin<br/>PHP]
    B -->|INSERT / UPDATE / DELETE| C[(MySQL<br/>t_cadastro)]
    C -->|SELECT| D[index.php do mapa]
    D -->|json_encode| E[JavaScript<br/>Google Maps API]
    E -->|marcadores + janelas| F[Visitante]
```

1. O administrador cadastra um local pelo painel, informando os dados e as coordenadas.
2. O PHP grava as informações no MySQL e salva a foto no servidor.
3. Na página do mapa, o PHP lê todos os locais e os envia ao JavaScript em formato JSON.
4. O JavaScript cria um marcador para cada local, com sua janela de informações.

---

## 📁 Onde está o código próprio

A maior parte do repositório é o núcleo padrão do WordPress. O código desenvolvido por mim está nestes locais:

| Caminho | O que faz |
| :--- | :--- |
| `teste-maps/index.php` | Página do mapa: busca os locais no banco e gera os marcadores |
| `teste-maps/maps.js` | Configuração do mapa (centro em Americana, zoom e marcadores) |
| `wp-admin/mapas/local-novo.php` | Formulário de cadastro de local |
| `wp-admin/mapas/inserir-local.php` | Grava o novo local e faz o upload da foto |
| `wp-admin/mapas/exibir-locais.php` | Lista os locais cadastrados |
| `wp-admin/mapas/alterar-local.php` | Formulário de edição |
| `wp-admin/mapas/confirmar-alteracao.php` | Salva a edição (com troca opcional de foto) |
| `wp-admin/mapas/excluir-local.php` | Remove um local |
| `wp-content/themes/hello-elementor/functions.php` | Função com o hook `admin_menu` e `add_menu_page` que adiciona as telas ao painel do WordPress |

---

## 🚀 Como executar localmente

### 📋 Pré-requisitos
- XAMPP (Apache + MySQL + PHP)
- Uma chave da Google Maps JavaScript API com faturamento ativo no Google Cloud

### 🔧 Passo a passo

1. **Clone o repositório dentro da pasta `htdocs` do XAMPP:**
   ```bash
   git clone [https://github.com/Geovani237/turismo.git](https://github.com/Geovani237/turismo.git)
   ```

2. **Inicie os serviços:**
   Inicie o Apache e o MySQL pelo painel do XAMPP.

3. **No phpMyAdmin, crie o banco do mapa e a tabela de locais:**
   ```sql
   CREATE DATABASE db_maps;
   USE db_maps;

   CREATE TABLE t_cadastro (
       id        INT AUTO_INCREMENT PRIMARY KEY,
       nome      VARCHAR(150) NOT NULL,
       telefone  VARCHAR(20),
       endereco  VARCHAR(255),
       foto      VARCHAR(255),
       link      VARCHAR(255),
       latitude  DECIMAL(10, 7) NOT NULL,
       longitude DECIMAL(10, 7) NOT NULL
   );
   ```

4. **Configuração do Banco:**
   Configure a conexão com o banco em `teste-maps/conexao.php` e `wp-admin/mapas/conexao.php`.

5. **Configuração da API:**
   Em `teste-maps/index.php`, substitua `SUA_CHAVE_AQUI` pela sua chave da Google Maps API.

6. **Acesse as URLs:**
   Configure o WordPress pelo `wp-config.php` (a partir do `wp-config-sample.php`) e acesse:
   - **Site:** `http://localhost/turismo`
   - **Mapa:** `http://localhost/turismo/teste-maps`
   - **Painel:** `http://localhost/turismo/wp-admin` → menus *"local novo"* e *"exibir locais"*

---

## 📚 Aprendizados e melhorias futuras

Este foi um dos meus primeiros projetos. Hoje eu faria algumas coisas de forma diferente:

- **Segurança no banco:** usar *prepared statements* (`mysqli_prepare`) em vez de montar o SQL com os dados do formulário, evitando SQL Injection.
- **Validação do upload:** aceitar apenas arquivos de imagem e limitar o tamanho.
- **Configuração:** ler as credenciais do banco e a chave da API de variáveis de ambiente, sem deixá-las no código.
- **Organização:** transformar o painel em um plugin do WordPress, em vez de colocar arquivos dentro de `wp-admin`, e usar a classe `$wpdb` do próprio WordPress.
- **Usuário do banco:** usar um usuário com permissões restritas, em vez do `root`.

---

## 👤 Autor

**Geovani Carlos de Souza**

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/geovanicarlosdesouza)
