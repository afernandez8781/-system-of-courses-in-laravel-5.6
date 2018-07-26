<div class="col-2">
    @auth
        @can('opt_for_course', $course)
                @can('subscribe', \App\Course::class)
                        se puede suscribir
                @else
                        no se puede suscribir
                @endcan
        @else
            no puede
        @endcan

    @else
        no identificado
    @endauth
</div>