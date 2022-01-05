<div class="row">
    <h1 class="font-header">Loot</h1>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="psavage-tab" data-bs-toggle="tab" data-bs-target="#psavage" type="button" role="tab" aria-controls="psavage" aria-selected="true">
        Pand&aelig;monium (Savage)
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pnormal-tab" data-bs-toggle="tab" data-bs-target="#pnormal" type="button" role="tab" aria-controls="pnormal" aria-selected="false">
        Pand&aelig;monium (Normal)
    </button>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="psavage" role="tabpanel" aria-labelledby="psavage-tab">
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/content/loottables/PS.php'); ?>
  </div>
  <div class="tab-pane" id="pnormal" role="tabpanel" aria-labelledby="pnormal-tab">
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/content/loottables/PN.php'); ?>
  </div>
</div>