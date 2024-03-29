<?php include 'header.php'; ?>
<?php include 'templates/card.php'; ?>

<div class="container">
    <h3 class="page-header">PICKUP - REMOTE - IN-HOME SERVICE AVAILABLE</h3>
    <p class="para">
        Veteran Computer Solutions offers a comprehensive range 
        of computer repair services to help you get your home 
        technology back up and running. From Virus Removal and 
        Data Recovery to Hardware and Software Installation and Upgrade. 
        Our computer repair service provides fast, reliable assistance
        with a variety of hardware and software issues. We have the tools 
        and know-how to diagnose any problem and provide the best solutions
        reliably and quickly. No matter the size of the job, we’re here to
        make sure your home technology is working for you.
    </p>

    <div class="row">
        <?php 
            echo card(
                'assets/image/it_assessments.webp', 
                'Repairs and Upgrades', 
                'Laptop and Computer repairs only based on what is most cost effective based on your needs.'
            );

            echo card(
                'assets/image/cyber_security.webp', 
                'Virus - Malware - Security', 
                'Viruses, Malware and Security should be your top priority to protecting your technology and personal data.'
            );

            echo card(
                'assets/image/backup_solutions.webp', 
                'Data Backup & Recovery', 
                'Protect your important files and precious memories with constant backups safely and securely.'
            );

            echo card(
                'assets/image/networking.webp', 
                'Home Networking', 
                'Connect your personal technology while preventing others from accessing your devices.'
            );

            echo card(
                'assets/image/preventative_maintenance.webp', 
                'Preventative Maintenance', 
                'Your tech needs preventative maintenance just like your vehicle which extends the life of your technology and helps prevent loss of information.'
            );

            echo card(
                'assets/image/training.webp', 
                'Training', 
                'Technology is meant to enhance your life and training allows you to use technology to its fullest extent.'
            );
        ?>
    </div>
    <div class="separator2"></div>
</div>

<?php include 'footer.php'; ?>
