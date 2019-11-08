---
title: Contact
layout: default
---

<section id="contact" class="contact-section bg-black">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mt-4 text-white">
        <h2><i class="far fa-paper-plane text-white"></i>  Contact</h2>
        <div class="text-white-50"><h5>Discutons de vos projets ou obtenez un devis</h5></div>
        <h5 class="mt-4">Skalab</h5>
        06 66 96 32 46<br />
      </div>
      <div class="col-md-8 mt-4 mx-auto">
        <form class="" id="contactForm">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class="text-white" for="inputName">Votre nom</label>
                <input type="nom" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputName" placeholder="Nom" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label class="text-white" for="inputFirstName">Votre prénom</label>
                <input type="prenom" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputFirstName" placeholder="Prénom" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                  <label class="text-white" for="inputMail">Votre adresse mail</label>
                  <input type="mail" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputMail" placeholder="Mail" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label class="text-white" for="inputPhone">Votre numéro de téléphone</label>
                <input type="phone" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputPhone" placeholder="Téléphone">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="text-white" for="inputMessage">Votre petit message</label>
            <textarea class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputMessage" rows="4" placeholder="Votre petit message"></textarea>
          </div>
          <div class="form-group text-white-50">
          <p>Skalab s'engage à protéger et à respecter votre vie privée. En validant, vous autorisez Skalab à stocker et traiter les données personnelles soumises afin qu’elle vous fournisse le contenu demandé.</p>
          <button type="submit" class="btn btn-primary mx-auto">Envoyer</button>
          </div>
        </form>
        <div id="msgSubmitSuccess" class="text-white h3 hidden">Message envoyé 😉</div>
        <div id="msgSubmitError" class="text-white h4 mt-2 hidden">❌<br />Erreur lors de l'envoi du message 😥<br />Essayez par téléphone ?</div>
      </div>
    </div>
  </div>
</section>