// window.addEventListener('load', function() {
//     var anchors = document.getElementById('menu').getElementsByTagName('a');
//     for (var i = 0; i < anchors.length; i++) {
//         anchors[i].addEventListener('click', function(e) {
//             e.preventDefault(); // prevent the default action
//             var current = document.getElementsByClassName('active');
//             // Check if there's an active item
//             if (current.length > 0) { 
//                 current[0].className = current[0].className.replace('active', '').trim();
//             }
//             this.className += ' active';

//             // Load the content with AJAX
//             $('#content').load(this.href);
//         });
//     }
// });

// $(document).ready(function() {
//     $('#menu a').on('click', function(e) {
//         e.preventDefault();
//         var page = $(this).attr('href');
//         $('#content').load(page);
//     });
// });