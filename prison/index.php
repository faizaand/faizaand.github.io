<?php

  $_GET['title'] = "Prison | ";
  include('templates/nav.php')

?>

  <link rel="stylesheet" href="/css/project.css" />

  <div id="masthead" class="jumbotron">
    <div class="container">
      <br />
      <img src="img/prison-banner.png" class="img-responsive" />
      <br />
      <a class="btn btn-primary" href="https://github.com/MC-Prison/Prison" target="blank" role="button">Source Code</a>
      <a class="btn btn-warning" href="https://faizaand.me/prison/files/prison-rc2.zip" target="blank" role="button"><i class="fa fa-download" aria-hidden="true"></i> Download Release Candidate 2</a>
      <a class="btn btn-default" href="http://dev.bukkit.org/bukkit-plugins/mcprison/" target="blank" role="button"><i class="fa fa-download" aria-hidden="true"></i> Bukkit</a>
      <a class="btn btn-default" href="https://www.spigotmc.org/resources/prison.1223/" target="blank" role="button"><i class="fa fa-download" aria-hidden="true"></i> Spigot</a>
    </div>
  </div>

  <br />

  <!-- Content area -->
  <div class="container-fluid">
    <div class="grid">
      <div class="col-md-3">
        <ul id="sticker" class="list-group">
          <li class="list-group-item"><a href="#intro">Introduction</a></li>
          <li class="list-group-item"><a href="#install">Installation</a></li>
          <li class="list-group-item"><a href="https://github.com/MC-Prison/Prison/wiki">Developer API</a></li>
          <li class="list-group-item"><a href="https://github.com/MC-Prison/Prison/issues">Issue Reporting</a></li>
        </ul>
      </div>
      <div class="content col-md-9">
        <section id="intro">
          <div class="alert alert-warning" role="alert">
            <strong>Pardon the dust!</strong> We're still working on this page. Check back later!
          </div>
          <h2>Introduction</h2>
          <h3>What is Prison?</h3>
          <p>Prison is a Minecraft plugin that adds all the features necessary for <a href="http://kotaku.com/inside-the-grim-world-of-minecrafts-prison-servers-1782517890">prison servers</a>. It runs on multiple platforms, including the popular <a href="http://spigotmc.org">Spigot</a>            and the rapidly growing <a href="http://spongepowered.org">Sponge</a>. Plugins for prison servers exist already, but many of them are poorly maintained, and the solid ones are paid resources. Prison eliminates the paywall and the updating
            hassle, and puts a one-stop solution in their place.</p>
          <h4>History of Prison</h4>
          <p>Prison began as a plugin with the goal of combining two main prison server features: resetting mines and purchasable ranks. In June 2014, Prison v2.0 was released with the goal of providing a single solution for prison servers. Prison v2.0 has
            had numerous problems and is not the solution that we had envisioned for an all-in-one package to be. The solution is the current version - Prison v3.0.</p>
          <h3>Why should I use Prison?</h3>
          <p>If hassle-free updates and zero payments is not enough for you to consider switching to Prison, it doesn’t stop there.</p>
          <ul>
            <li><strong>Prison is modular.</strong> If you don’t want to use a certain feature on your server, you can disable it in just a few keystrokes.</li>
            <li><strong>Prison is completely, 100% open source.</strong> This means that your developers can make changes to the plugin to customize your server’s experience, if you so desire.</li>
            <li><strong>Prison is and always will be free.</strong> While we do ask for donations, all of our code, resources, and binaries are provided free of charge to the Minecraft community.</li>
            <li><strong>New releases are heavily bug-tested.</strong> We test every single aspect of every new release of Prison before releasing it to the community. If a release doesn’t pass our rigorous update checklist, it is iterated upon until it does.
              What does this mean for you? Solid updates with minimal bugs for your server.</li>
            <li><strong>Prison is always expanding.</strong> We are always looking for ways to expand Prison with features that make your server run more smoothly. Additionally, we are always looking for contributions from the community, be it code contributions,
              feature requests, bug reports, translations, or documentation.</li>
          </ul>
        </section>
        <hr />
        <section id="install">
          <h2>Installation</h2>
          <p>
            To download Prison 3, download the latest version by clicking on the buttons in the header above.
          </p>
          <p>
            <ol>
              <li>
                <strong>Stop</strong> your server.
              </li>
              <li>
                <strong>Unzip</strong> the downloaded file.
              </li>
              <li>
                <strong>Drag</strong> the JAR files for Prison and the modules you want into your plugins directory.
              </li>
              <li>
                <strong>Start</strong> your server. Prison 3 will load.
              </li>
            </ol>
          </p>
          <p>
            Easy, huh? If you already had Prison 2 installed, your files can be converted by typing <code>/prison convert</code>. You should also
            install an economy plugin (such as EssentialsX) or a permissions plugin (LuckPerms). Prison 3 supports Essentials and LuckPerms out of the box,
            but if you wish to use an alternative plugin, you must install Vault.
          </p>
        </section>
      </div>
    </div>
  </div>

  <?php include('templates/footer.php'); ?>
