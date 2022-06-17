 <script src="libs/jquery/jquery.js"></script>
     <script>
        $( document ).ready(function() {
            $("#profile-btn").on('click', () => {
                $("#profile-section").toggleClass("hidden");
            });

            $("#u-points-btn").on('click', () => {
                $("#gift-card-section").toggleClass("hidden");
                
            });

            $("#donation-btn").on('click', () => {
                $("#donation-field").toggleClass("hidden");
            });

            $("#history-btn").on('click', () => {
                 $("#table-of-history").toggleClass("hidden");
             });
    });

    </script>
