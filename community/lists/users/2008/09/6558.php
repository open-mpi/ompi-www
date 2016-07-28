<?
$subject_val = "Re: [OMPI users] Newbie doubt.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 02:58:21 2008" -->
<!-- isoreceived="20080917065821" -->
<!-- sent="Wed, 17 Sep 2008 08:58:17 +0200" -->
<!-- isosent="20080917065817" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie doubt." -->
<!-- id="9b0da5ce0809162358k7066149dmf269112c1d47aa41_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dd4eed670809162013h235f62dn847e7ca4e549f865_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie doubt.<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 02:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6559.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6557.php">Matthias Hovestadt: "[OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>In reply to:</strong> <a href="6556.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Newbie doubt."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6592.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Newbie doubt."</a>
<li><strong>Reply:</strong> <a href="6592.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Newbie doubt."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Yuo must close the File using
<br>
MPI_File_close(MPI_File *fh)
<br>
before calling MPI_Finalize.
<br>
<p>By the way i think you shouldn't do
<br>
&nbsp;&nbsp;strcat(argv[1], &quot;.bz2&quot;);
<br>
This would overwrite any following arguments.
<br>
<p>Jody
<br>
<p><p>On Wed, Sep 17, 2008 at 5:13 AM, Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;)
<br>
&lt;davivercillo_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm starting to use OpenMPI and I'm having some troubles. I wrote a
</span><br>
<span class="quotelev1">&gt; simple program that tries to open files using the function
</span><br>
<span class="quotelev1">&gt; MPI_File_open(). Like below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int processoPrincipal(void);
</span><br>
<span class="quotelev1">&gt; int processosEscravos(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;        int meuRank, numeroProcessos;
</span><br>
<span class="quotelev1">&gt;        MPI_File arquivoEntrada, arquivoSaida;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;meuRank);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_size(MPI_COMM_WORLD,&amp;numeroProcessos);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_File_open(MPI_COMM_WORLD, argv[1], MPI_MODE_RDONLY,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, &amp;arquivoEntrada);
</span><br>
<span class="quotelev1">&gt;        strcat(argv[1], &quot;.bz2&quot;);
</span><br>
<span class="quotelev1">&gt;        MPI_File_open(MPI_COMM_WORLD, argv[1], MPI_MODE_RDWR |
</span><br>
<span class="quotelev1">&gt; MPI_MODE_CREATE, MPI_INFO_NULL, &amp;arquivoSaida);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if (meuRank != 0) {
</span><br>
<span class="quotelev1">&gt;                processoPrincipal();
</span><br>
<span class="quotelev1">&gt;        } else {
</span><br>
<span class="quotelev1">&gt;                processosEscravos();
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;        return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'm getting a error message like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; *** after MPI was finalized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; *** after MPI was finalized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev1">&gt; <a href="http://davivercillo.blogspot.com/">http://davivercillo.blogspot.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev1">&gt; Departamento de Ci&#195;&#170;ncia da Computa&#195;&#167;&#195;&#163;o
</span><br>
<span class="quotelev1">&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Grupo de Usu&#195;&#161;rios GNU/Linux da UFRJ (GUL-UFRJ)
</span><br>
<span class="quotelev1">&gt; <a href="http://www.dcc.ufrj.br/~gul">http://www.dcc.ufrj.br/~gul</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux User: #388711
</span><br>
<span class="quotelev1">&gt; <a href="http://counter.li.org/">http://counter.li.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Good things come to those who... wait.&quot; - Debian Project
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;A computer is like air conditioning: it becomes useless when you open
</span><br>
<span class="quotelev1">&gt; windows.&quot; - Linus Torvalds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6559.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6557.php">Matthias Hovestadt: "[OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>In reply to:</strong> <a href="6556.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Newbie doubt."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6592.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Newbie doubt."</a>
<li><strong>Reply:</strong> <a href="6592.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Newbie doubt."</a>
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
