@extends('template')
@section('title', 'Vista Principal')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card m-3 p-4 col-9">
        <article class="blog-post">
            <b class="display-5 link-body-emphasis mb-3">Grupo Xcaret dedica calaverita literaria a Zacatecas</b>
            <p class="blog-post-meta mt-2 mb-0">31 de octubre de 2024</p>
            <b class="blog-post-meta mb-5">Por: Alejandra Flores</b>
    
            <div class="d-flex">
                <img src="{{url('/img/noticia.jfif')}}" class="img-fluid mx-auto rounded-4" alt="..." style="height: 60%; width:60%">
            </div>
            <p class="mt-2 fs-5">
                <br>
                En el marco de la conmemoración del Día de Muertos, declarado Patrimonio Cultural Inmaterial de la Humanidad por la UNESCO, Grupo Xcaret lanza una serie de calaveritas literarias creadas en colaboración con la escritora Alejandra Flores, una de ellas ha sido dedicada al estado de Zacatecas.
                <br>
                <br>
                Estas calaveritas, inspiradas en la literatura popular mexicana, están dedicadas a los estados que han participado en el Festival de Tradiciones de Vida y Muerte, evento que, por 17 años, se ha consolidado como una celebración emblemática de la riqueza cultural de México.
                <br>
                <br>
                El Festival de Tradiciones de Vida y Muerte en Xcaret es un espacio de intercambio cultural en el que cada año participan distintos estados de la República Mexicana, presentando sus tradiciones, música, danza y gastronomía. En este contexto, Zacatecas tuvo un papel especial como invitado en 2018, participando con actividades tradicionales como la "Callejoneada Zacatecana", que reflejan el legado histórico y cultural del estado.
                <br>
                <br>
            </p>
                <div class="d-flex">
                    <img src="{{url('/img/calaverita.jfif')}}" class="img-fluid mx-auto rounded-4" alt="..." style="height: 50%; width:50%">
                </div>
            <p class="fs-5">
                <br>
                <br>
                La creación de estas calaveritas literarias no solo celebra la relación entre Xcaret y los estados participantes, sino que también es un homenaje a las aportaciones culturales de cada región al festival. Leticia Aguerrebere, directora Corporativa de Arte y Cultura de Grupo Xcaret, expresó que “estas calaveritas literarias representan nuestro agradecimiento y respeto hacia aquellos que, a lo largo de los años, han compartido con nosotros un pedacito de sus tradiciones y saberes."
                <br>
                <br>
                La colaboración con Alejandra Flores, escritora dedicada a exaltar las raíces mexicanas, refuerza la misión de Grupo Xcaret de difundir y preservar el Patrimonio Cultural del país. Las calaveritas literarias buscan honrar a los estados que han sido parte de esta celebración, manteniendo viva la esencia del Día de Muertos y promoviendo un puente cultural entre generaciones y comunidades.
                <br>
                <br>
                Desde sus inicios, el Festival de Tradiciones de Vida y Muerte ha servido como un escaparate para preservar y difundir las costumbres de esta festividad mexicana, y con esta nueva iniciativa, Grupo Xcaret reafirma su compromiso como promotor de las tradiciones que definen la identidad cultural de México.
            </p>
        </article>
    </div>
</div>
@endsection