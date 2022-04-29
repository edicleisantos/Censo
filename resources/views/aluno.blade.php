40|15059 <br>
@foreach ($alunos as $aluno)
    {{
        "41||".$aluno->aluno."|".$aluno->cpf."||".$aluno->nascimento."|".$aluno->cor."|"
        .$aluno->nacionalidade."|".$aluno->uf."|".$aluno->naturalidade."|".$aluno->pais_origem."|".$aluno->pcd."|".$aluno->escola

    }}<br>
        @foreach ($aluno->vinculo_inicial as $primeiro)
            {{
                "42|".$primeiro->matricula."|1|".$primeiro->curso."||".$primeiro->turno."|".$primeiro->situacao."|||"
                .$primeiro->parfor."|".$primeiro->segunda_licenciatura."|".$primeiro->ingresso."|"
                .$primeiro->forma_ingresso."|".$primeiro->mobilidade."|".$primeiro->reserva_vaga."|"
                .$primeiro->apoio_social."|".$primeiro->atividade_extra."|".$primeiro->ch_curso."|"
                .$primeiro->integralizacao."|".$primeiro->justificativa
            }}<br> 
        @endforeach
        @foreach ($aluno->vinculo_final as $segundo)
             {{
                "42|".$segundo->matricula."|2|".$segundo->curso."||".$segundo->turno."|".$segundo->situacao."|||"
                .$segundo->parfor."|".$segundo->segunda_licenciatura."|".$segundo->ingresso."|"
                .$segundo->forma_ingresso."|".$segundo->mobilidade."|".$segundo->reserva_vaga."|"
                .$segundo->apoio_social."|".$segundo->atividade_extra."|".$segundo->ch_curso."|"
                .$segundo->integralizacao."|".$segundo->justificativa
        }}<br>        
        @endforeach 
        
@endforeach

