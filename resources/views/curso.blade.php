20|15059 <br>
@foreach ($cursos as $curso)
    
        @if($curso->situacao ==1) 
          {{"21|".$curso->codigo."|".$curso->situacao."|||0|".$curso->turno_manha."|".$curso->turno_tarde."|".$curso->turno_noite."|".
          $curso->turno_integral."|".$curso->turno_ead."|".$curso->acessibilidade."|".$curso->disciplina_ead."|".$curso->porc_disc_ead}}
        @else 
          {{"21|".$curso->codigo."|0|1||||||||||||||||||||||||||||||||||||||||||||||||||||||||"}}
        @endif

    <br>
@endforeach