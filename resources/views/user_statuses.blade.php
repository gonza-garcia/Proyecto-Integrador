@extends("recursos/template_main")


@section("titulo")
    Dèco Enfant - Estados de usuario
@endsection


@section("principal")

  <section class="container">
      <div class="row px-2">

        <!--- Generar Roles ------------->
        <ul>

          @forelse ($user_statuses as $user_status)
            <a href="/userStatus/{{$user_status->id}}">
              <li>{{$user_status->name}}</li>
            </a>
          @empty
            No hay estaods de usuarios
          @endforelse

          </ul>
      </div>

  </section>
@endsection
