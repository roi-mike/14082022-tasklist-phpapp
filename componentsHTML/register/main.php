<main>
<div class="row" style="margin-top:50px">
  <div class="col m6">
  <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
  </div>
  <div class="col m6">
  <form class="col s12 m12">
    <div class="input-field col s12 m12">
      <input id="email" type="text" class="validate">
      <label for="email">Email</label>
    </div>
    <div class="input-field col s12 m12">
      <input id="f_name" type="text" class="validate">
      <label for="f_name">Nom</label>
    </div>
    <div class="input-field col s12 m12">
      <input id="l_name" type="text" class="validate">
      <label for="l_name">Prénom</label>
    </div>

    <div class="input-field col s12 m12">
      <input id="datepicker" placeholder="Date d'Anniversaire" type="text" class="datepicker"><!---Date Picker--->
      <label for="datepicker">Anniversaire</label>
    </div>

    <div class="input-field col s12 m12">
      <input id="password" type="password" class="validate">
      <label for="password">Password</label>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Connexion
    </button>
  </form>
  </div>
</div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelector('.datepicker');
    var instances = M.Datepicker.init(elems, {});
  });
</script>

