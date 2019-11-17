---
title: Article
layout: default
---

<header class="article-head" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(22, 22, 22, 0.75)), color-stop(75%, rgba(22, 22, 22, 0.3)), to(#161616)), url({{ page.background-image }}); background: linear-gradient(to bottom, rgba(22, 22, 22, 0.75) 0%, rgba(22, 22, 22, 0.3) 75%, #161616 100%) url({{ page.background-image }}); background-position: center; background-repeat: no-repeat; background-attachment: scroll; background-size: cover;">
<div class="container d-flex align-items-center">
  <div class="mx-auto text-center pb-3">
    <h1 class="text-white mx-auto pb-3 text-uppercase head-title">{{ page.title }}</h1>
    <h2 class="text-white-50 mx-auto mt-5 mb-5">{{ page.subtitle }} - {{ page.reading-time }} minutes</h2>
    <div class="row">
      <div class="col-lg-4 mx-auto text-left text-white">
        {{ page.author }}
      </div>
      <div class="col-lg-4 mx-auto">
        <h4>
          {% for tags in page.tags %}
          <span class="badge badge-secondary">{{ tags }}</span>
          {% endfor %}
        </h4>
      </div>
      <div class="col-lg-4 mx-auto text-right text-white">
        Mise à jour le {{ page.date | date: "%d/%m/%Y"}}
      </div>
    </div>
  </div>
</div>
</header>

<div class="container article">
   <nav class="mt-4" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Skalab</a></li>
      <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ page.title }}</li>
    </ol>
  </nav>
  <div class="row mb-4">
    <div class="col-lg-3 mx-auto m-4">
      <a href="/index.html" class="btn btn-secondary btn-fix"><i class="fas fa-arrow-left fa-lg"></i> Retourner sur Skalab.fr</a>
    </div>
    <div class="col-lg-9 mx-auto m-3">
      <h4>{{ page.summary }}</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1 ">
      <div class="social d-flex justify-content-center mb-3">
        <a href="https://www.linkedin.com/in/gael-barbier/" target="_blank" class="mx-2">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <div class="social d-flex justify-content-center mb-3">
        <a href="https://github.com/gaeldb" target="_blank" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-11">
      {{ content }}
    </div>
  </div>
</div>