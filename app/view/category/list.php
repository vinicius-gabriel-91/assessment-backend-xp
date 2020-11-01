<!doctype html>
<html ⚡>
<head>
    <title>Webjump | Backend Test | Categories</title>
    <meta charset="utf-8">

    <link  rel="stylesheet" type="text/css"  media="all" href="/assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script></head>
<!-- Header -->
<amp-sidebar id="sidebar" class="sample-sidebar" layout="nodisplay" side="left">
    <div class="close-menu">
        <a on="tap:sidebar.toggle">
            <img src="/assets/images/bt-close.png" alt="Close Menu" width="24" height="24" />
        </a>
    </div>
    <a href="/"><img src="/assets/images/menu-go-jumpers.png" alt="Welcome" width="200" height="43" /></a>
    <div>
        <ul>
            <li><a href="/categoria" class="link-menu">Categorias</a></li>
            <li><a href="/produto" class="link-menu">Produtos</a></li>
        </ul>
    </div>
</amp-sidebar>
<header>
    <div class="go-menu">
        <a on="tap:sidebar.toggle">☰</a>
        <a href="/" class="link-logo"><img src="/assets/images/go-logo.png" alt="Welcome" width="69" height="430" /></a>
    </div>
    <div class="right-box">
        <span class="go-title">Administration Panel</span>
    </div>
</header>
<!-- Header --><body>
<!-- Main Content -->
<main class="content">
    <div class="header-list-page">
      <form method="post" action="/categoria/index.php">
          <input type="submit" name="action" id="submit-action-new" class="btn-action" value="Novo" />
      </form>
    </div>
    <table class="data-grid">
        <tr class="data-row">
            <th class="data-grid-th">
                <span class="data-grid-cell-content">Name</span>
            </th>
            <th class="data-grid-th">
                <span class="data-grid-cell-content">Code</span>
            </th>
            <th class="data-grid-th">
                <span class="data-grid-cell-content">Actions</span>
            </th>
        </tr>
        <?php foreach ($listaCategoria as $linha):?>
        <tr class="data-row">
            <td class="data-grid-td">
                <span class="data-grid-cell-content"><?php echo $linha["nome"]; ?></span>
            </td>

            <td class="data-grid-td">
                <span class="data-grid-cell-content"><?php echo $linha["codigo"]; ?></span>
            </td>

            <td class="data-grid-td">
                <form class="actions" method="post" action="/categoria/index.php">
                    <input type="hidden" name="id" value="<?php echo $linha["id"]; ?>" />
                    <input type="submit" name="action" id="submit-action-edit" class="action edit" value="Editar" />
                    <input type="submit" name="action" id="submit-action-delete" class="action delete" value="Apagar" />
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
<!-- Main Content -->

<!-- Footer -->
<footer>
    <div class="footer-image">
        <img src="/assets/images/go-jumpers.png" width="119" height="26" alt="Go Jumpers" />
    </div>
    <div class="email-content">
        <span>go@jumpers.com.br</span>
    </div>
</footer>
<!-- Footer --></body>
</html>