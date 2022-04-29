20|15059 <br>
@foreach ($cursos as $curso)
    
        @if($curso->situacao == 1) 
          {{"21|".$curso->codigo."|".$curso->situacao."|||0|"}}
          @foreach ($curso->oferta as $turno)
             {{$turno->turno_manha."|".$turno->turno_tarde."|".$turno->turno_noite."|".$turno->turno_integral."||".$turno->turno_ead}}
          @endforeach
          {{$curso->acessibilidade."|".$curso->disciplina_ead."|".$curso->porc_disc_ead}}
        @else 
    {{     "21|".$curso->codigo."|0|1||||||||||||||||||||||||||||||||||||||||||||||||||||||||"   }}
        @endif

    <br>
@endforeach