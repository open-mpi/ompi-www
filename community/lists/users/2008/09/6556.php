<?
$subject_val = "[OMPI users] Newbie doubt.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 23:13:30 2008" -->
<!-- isoreceived="20080917031330" -->
<!-- sent="Wed, 17 Sep 2008 00:13:25 -0300" -->
<!-- isosent="20080917031325" -->
<!-- name="Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;)" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie doubt." -->
<!-- id="dd4eed670809162013h235f62dn847e7ca4e549f865_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Newbie doubt.<br>
<strong>From:</strong> Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;) (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 23:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6557.php">Matthias Hovestadt: "[OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>Reply:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm starting to use OpenMPI and I'm having some troubles. I wrote a
<br>
simple program that tries to open files using the function
<br>
MPI_File_open(). Like below:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int processoPrincipal(void);
<br>
int processosEscravos(void);
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int meuRank, numeroProcessos;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File arquivoEntrada, arquivoSaida;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;meuRank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numeroProcessos);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_WORLD, argv[1], MPI_MODE_RDONLY,
<br>
MPI_INFO_NULL, &amp;arquivoEntrada);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcat(argv[1], &quot;.bz2&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_open(MPI_COMM_WORLD, argv[1], MPI_MODE_RDWR |
<br>
MPI_MODE_CREATE, MPI_INFO_NULL, &amp;arquivoSaida);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (meuRank != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processoPrincipal();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processosEscravos();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>But I'm getting a error message like:
<br>
<p>*** An error occurred in MPI_Barrier
<br>
*** An error occurred in MPI_Barrier
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>What is this ?
<br>
<p><pre>
-- 
Davi Vercillo Carneiro Garcia
<a href="http://davivercillo.blogspot.com/">http://davivercillo.blogspot.com/</a>
Universidade Federal do Rio de Janeiro
Departamento de Ci&#195;&#170;ncia da Computa&#195;&#167;&#195;&#163;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
Grupo de Usu&#195;&#161;rios GNU/Linux da UFRJ (GUL-UFRJ)
<a href="http://www.dcc.ufrj.br/~gul">http://www.dcc.ufrj.br/~gul</a>
Linux User: #388711
<a href="http://counter.li.org/">http://counter.li.org/</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6557.php">Matthias Hovestadt: "[OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>Reply:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
