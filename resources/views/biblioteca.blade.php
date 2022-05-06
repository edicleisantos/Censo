50|15059 <br>
@foreach ($bibliotecas as $biblioteca)
    {{
        "51|".$biblioteca->sigla."|".$biblioteca->nome."|".$biblioteca->tipo."|".$biblioteca->numero_assentos."|".$biblioteca->emprestimos_domiciliares."|".
        $biblioteca->emprestimos_bibliotecas."|".$biblioteca->comutacoes_bibliograficas."|".$biblioteca->usuarios_treinados."|".$biblioteca->rede_semfio."|".
        $biblioteca->periodicos_impressos."|".$biblioteca->livros_impressos."|".$biblioteca->outros_materiais."|".$biblioteca->acessibilidade
     
    }}</br>
    {{"52|".$biblioteca->local_oferta}}</br>
        
@endforeach