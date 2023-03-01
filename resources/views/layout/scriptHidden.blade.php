<script>
    $(document).ready(function() {
        var wordLimit = 50; // Set the word limit
        $(".post-excerpt").each(function() {
            var text = $(this).text();
            var words = text.split(" ");
            if (words.length > wordLimit) {
                var excerpt = words.slice(0, wordLimit).join(" ");
                $(this).text(excerpt + " ...");
            }
        });
    });
</script>
