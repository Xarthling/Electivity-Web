    $(document).ready(function() {
        var defaultBoardId = {!! $rooms[0]['boardid'] ?? 'null' !!};

        if (defaultBoardId !== null) {
            $('.add-branch-btn[data-boardid="' + defaultBoardId + '"]').addClass('active');

            $('#switches-container-' + defaultBoardId).show();

            // Populate details for the default room
            populateRoomDetails(defaultBoardId);
        }

        $('.add-branch-btn').click(function() {
            $('.add-branch-btn').removeClass('active');
            $(this).addClass('active');

            var boardId = $(this).data('boardid');
            $('.switches-container').hide();
            $('#switches-container-' + boardId).show();

            // Populate details for the clicked room
            populateRoomDetails(boardId);
        });

        function populateRoomDetails(boardId) {
            var temp = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('temp');
            var moisture = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('moisture');
            var lumn = $('.add-branch-btn[data-boardid="' + boardId + '"]').data('lumn');

            $('#temperature').text(temp);
            $('#moisture').text(moisture + '%');
            $('#luminosity').text(lumn + ' lux');
        }
    });
