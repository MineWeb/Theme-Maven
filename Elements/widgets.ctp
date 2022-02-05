<section class="widgets col-md-4">
    <?php // Compteur de joueurs ?>
    <?php if(!isset($theme_config['theme-counter']) || $theme_config['theme-counter'] == "true") { ?>
    <div class="player-counter">
        <?php if(!isset($theme_config['theme-counter-launcher']) || $theme_config['theme-counter-launcher'] == "true") { ?>
        <h3><?= ($banner_server) ? $banner_server : $Lang->get('SERVER__STATUS_OFF') ?></h3>
        <a href="<?= $theme_config['theme-counter-launcher-url']; ?>" class="btn-theme">Rejoignez-nous</a>
        <?php } else { ?>
        <h3><?= ($banner_server) ? $banner_server : $Lang->get('SERVER__STATUS_OFF') ?></h3>
        <a class="btn-theme copy" data-toggle="tooltip" data-placement="bottom" title="IP Copiée !" data-trigger="click focus" data-clipboard-text="<?= $theme_config['theme-counter-ip']; ?>">Rejoignez-nous</a>
        <?php } ?>
    </div>
    <?php } ?>
    <?php // Panneau vote ?>
    <?php if($EyPlugin->isInstalled('eywek.vote')){ ?>
    <?php if(!isset($theme_config['theme-vote']) || $theme_config['theme-vote'] == "true") { ?>
    <div class="vote container-theme">
        <div class="img-container">
            <?php if(isset($theme_config['theme-vote-img']) && $theme_config['theme-vote-img']) { ?>
                <img src="<?= $theme_config['theme-vote-img']; ?>" alt="vote-img">
            <?php } else { ?>
                <img src="theme/<?= $this->theme; ?>/img/coffre.png" alt="coffre" class="coffre">
                <img src="theme/<?= $this->theme; ?>/img/diamant.png" alt="diamant" class="diamant">
            <?php } ?>
        </div>
        <?php if(isset($theme_config['theme-vote-text']) && $theme_config['theme-vote-text']) { ?>
            <h3><?= $theme_config['theme-vote-text']; ?></h3>
        <?php } else { ?>
            <h3>Votez pour <span class="blue"><?= $website_name ?></span> et gagnez des <span class="blue">récompenses.</span></h3>
        <?php } ?>
        <a href="<?= $this->Html->url('/') ?>vote" class="btn-theme">Voter</a>
    </div>
    <?php } ?>
    <?php } ?>
    <?php // Réseaux sociaux ?>
    <?php if(!isset($theme_config['theme-social']) || $theme_config['theme-social'] == "true") { ?>
    <div class="socials container-theme">
        <h3>Nos réseaux sociaux</h3>
        <ul>            
            <?php
                foreach ($findSocialButtons as $key => $value) {
                    echo '<a target="_blank" href="' . $value['SocialButton']['url'] . '"><li style="background-color:' . $value['SocialButton']['color'] . '";>';
                    
                    if(!empty($value['SocialButton']['extra'])) {
                        if (strpos($value['SocialButton']['extra'], 'fa-')) {
                            echo '<i class="' . $value['SocialButton']['extra'] . '"></i>';
                        } else {
                            echo '<img src="' . $value['SocialButton']['extra'] . '" alt="' . $Lang->get("SOCIAL__BUTTON_IMG_ALT") . $value['SocialButton']['title'] . '">';
                        }
                    }
                    // Pour garder le style du thème on enlève
                    // if (!empty($value['SocialButton']['title'])) {
                    //     echo ' ' . $value['SocialButton']['title'];
                    // }
                    echo '</li></a>';
                }
            ?>    
        </ul>
    </div>
    <?php } ?>
    <?php // Discord ?>
    <?php if(!isset($theme_config['theme-discord']) || $theme_config['theme-discord'] == "true") { ?>
    <div class="discord container-theme">
        <h3>Rejoignez-nous sur Discord</h3>
        <?php if(isset($theme_config['theme-discord-id']) && $theme_config['theme-discord-id']) { ?>
            <iframe src="https://discordapp.com/widget?id=<?= $theme_config['theme-discord-id']; ?>&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
        <?php } else { ?>
            <iframe src="https://discordapp.com/widget?id=316532971903385601&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
        <?php } ?>
    </div>
    <?php } ?>
</section>
