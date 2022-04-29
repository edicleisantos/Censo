30|15059 <br>
@foreach ($docentes as $docente)
    {{
        "31||".$docente->nome."|".$docente->cpf."||".$docente->dt_nascimento."|".$docente->cor."|".$docente->nacionalidade.
        "|".$docente->pais_origem."|".$docente->uf_nascimento."|".$docente->cidade_nascimento."|".$docente->pcd."|".
        $docente->escolaridade."|".$docente->situacao_docente."|".$docente->situacao_dezembro."|".$docente->regime_trabalho."|".
        $docente->substituto."|".$docente->visitante."||".$docente->atuacao
    }}</br>
    @foreach ($docente->vinculo as $vinculo)
        {{
           "32|".$vinculo->codigo_curso
        }}</br>        
    @endforeach 
@endforeach