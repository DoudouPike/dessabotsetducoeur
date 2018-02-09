function activeNavTabs(){

    $('a[href="#prensentation"]').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('a[href="#story"]').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('a[href="#animalRight"]').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

}