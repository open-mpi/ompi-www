<?
$subject_val = "Re: [OMPI users] OpenMPI on a LAN";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 10:29:22 2008" -->
<!-- isoreceived="20081201152922" -->
<!-- sent="Mon, 1 Dec 2008 12:29:17 -0300" -->
<!-- isosent="20081201152917" -->
<!-- name="Heitor Florido" -->
<!-- email="heitorflorido_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on a LAN" -->
<!-- id="27329b10812010729w1ec2d8cag4227bbcdac031dfe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27329b10811271836x44a63d2ale8e2e5b230ee23e5_at_mail.gmail.com" -->
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
<strong>From:</strong> Heitor Florido (<em>heitorflorido_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-01 10:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7377.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7375.php">Ralph Castain: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>In reply to:</strong> <a href="../../2008/11/7370.php">Heitor Florido: "[OMPI users] OpenMPI on a LAN"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Raymond,
<br>
<p>Raymond wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Heitor,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heitor Florido wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have installed OpenMPI on both computers and my application works on on
</span><br>
<span class="quotelev2">&gt; &gt; both of them, but when I try to communicate between them, the method
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Lookup_name can't resolve the name published by the other machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've tried to run the example from mpi-forum that uses MPI_Open_port too,
</span><br>
<span class="quotelev2">&gt; &gt; but it didn't work either.
</span><br>
<span class="quotelev2">&gt; &gt; After reading about it on some FAQs e some other threads from the forum,
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt; &gt; believe that I need to config my ssh options.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Honestly, when I installed Open MPI, I didn't perform any configuration
</span><br>
<span class="quotelev1">&gt; of the ssh options, as far as I can remember.  I'm not sure if someone
</span><br>
<span class="quotelev1">&gt; else can help you.  I can imagine networks being set up incorrectly, but
</span><br>
<span class="quotelev1">&gt; I can't imagine what incorrect ssh option there would be to prevent one
</span><br>
<span class="quotelev1">&gt; computer from finding another.  In addition to some FAQs, Gus suggested
</span><br>
<span class="quotelev1">&gt; running a simple example called hello_c.c.  Have you tried that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I've tried to execute hello_c.c and it worked fine.
<br>
Here's the outcome :
<br>
<p>heitor_at_heitor-desktop:~/Desktop/untitled folder$ mpiexec -n 3 hello
<br>
Hello, world, I am 1 of 3
<br>
Hello, world, I am 0 of 3
<br>
Hello, world, I am 2 of 3
<br>
<p>It might help if you ran some existing code
<br>
<span class="quotelev1">&gt; (such as <a href="http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html">http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html</a>), too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I've executed the code example from
<br>
<a href="http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html">http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html</a>
<br>
and it didn't wrote anything on the terminal. Reading the code I've realized
<br>
that it shouldn't be any printf.
<br>
I believe that's OK.
<br>
&lt;<a href="http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html">http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html</a>&gt;
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; It is hard to give any suggestions unless you give more information such
</span><br>
<span class="quotelev1">&gt; as a shortened version of your source code and what is the command line
</span><br>
<span class="quotelev1">&gt; that you ran mpirun with.
</span><br>
<p><p>Here's some pieces of my code:
<br>
<p>Server:
<br>
void Servidor::iniciaServidor(){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;bool sair = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int valorRecebido, valorEnviado;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char porta[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char nomeServico[25];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;strcpy (nomeServico,&quot;GEAR-TRAINING_CENTER&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, porta);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Publish_name(nomeServico, MPI_INFO_NULL, porta);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%s\n&quot;, porta);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while (true){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept(porta, MPI_INFO_NULL, 0, MPI_COMM_WORLD,
<br>
&amp;comunicadorInterface);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Conexao aceitada!\n&quot;);
<br>
<p>...
<br>
<p>}
<br>
<p>Client:
<br>
void InterfaceUsuario::conectaServidor (){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char porta[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char nomeServico[25];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;strcpy (nomeServico, &quot;GEAR-TRAINING_CENTER&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Lookup_name(nomeServico, MPI_INFO_NULL, porta);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_connect( porta, MPI_INFO_NULL, 0, MPI_COMM_WORLD,
<br>
&amp;this-&gt;comunicadorServidor );
<br>
<p>}
<br>
<p>If you need the rest of the code, just tell me and I will post it. :D
<br>
<p>[]s
<br>
<p>Heitor
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-7376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7377.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7375.php">Ralph Castain: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>In reply to:</strong> <a href="../../2008/11/7370.php">Heitor Florido: "[OMPI users] OpenMPI on a LAN"</a>
<!-- nextthread="start" -->
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
