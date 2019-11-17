---
title: Blog
layout: default
permalink: /blog/
---

<header class="article-head mb-5" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(22, 22, 22, 0.75)), color-stop(75%, rgba(22, 22, 22, 0.3)), to(#161616)), url(/img/bg-masthead.jpg); background: linear-gradient(to bottom, rgba(22, 22, 22, 0.75) 0%, rgba(22, 22, 22, 0.3) 75%, #161616 100%) url(/img/bg-masthead.jpg); background-position: center; background-repeat: no-repeat; background-attachment: scroll; background-size: cover;">
<div class="container d-flex align-items-center">
  <div class="mx-auto text-center pb-3">
    <h1 class="text-white mx-auto pb-3 text-uppercase head-title">Blog et meetups</h1>
  </div>
</div>
</header>

<!-- Article list -->
<section id="blog" class="article-list">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="card-deck text-white">
          {% for post in site.posts %}
          <div class="card border-0" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(22, 22, 22, 0.9)), color-stop(95%, rgba(22, 22, 22, 0.4)), to(#161616)), url({{ post.background-image }}); background: linear-gradient(to bottom, rgba(22, 22, 22, 0.9) 0%, rgba(22, 22, 22, 0.4) 95%, #161616 100%) url({{ post.background-image }}); background-position: center; background-repeat: no-repeat; background-attachment: scroll; background-size: cover;">
            <div class="card-body">
              <h4 class="card-title">{{ post.title }}</h4> 
              <h5>
                {% for tags in post.tags %}
                <span class="badge badge-dark mx-1">{{ tags }}</span>
                {% endfor %}
              </h5>
            </div>
            <a class="card-footer btn btn-primary" href="{{ post.permalink }}">Lire</a>
          </div>
          {% endfor %}
          <div class="card border-0" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(22, 22, 22, 0.9)), color-stop(95%, rgba(22, 22, 22, 0.4)), to(#161616)), url(/img/service-infra.jpg); background: linear-gradient(to bottom, rgba(22, 22, 22, 0.9) 0%, rgba(22, 22, 22, 0.4) 95%, #161616 100%) url(/img/moving-motivators.png); background-position: center; background-repeat: no-repeat; background-attachment: scroll; background-size: cover;">
            <div class="card-body">
              <h4 class="card-title">Un sujet DevOps ou Management 3.0 vous intéresse ?</h4> 
            </div>
            <a class="card-footer btn btn-secondary" href="/contact">Contactez-nous</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
<br /><br />
</div>