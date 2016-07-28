<?
$subject_val = "Re: [OMPI users] Problems with MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 15:22:15 2011" -->
<!-- isoreceived="20110802192215" -->
<!-- sent="Tue, 2 Aug 2011 16:15:05 -0300" -->
<!-- isosent="20110802191505" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with MPI_Iprobe" -->
<!-- id="CAEyYoRph0CRYxD7vrjojEmY24LvvURdjQ7KfMKrDiHvGPTLHpA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qr8TKVYgnsZ+gOdkfUMxqUFmy2CCi4__2TOW09UjW+HqA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with MPI_Iprobe<br>
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 15:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17012.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16978.php">Rodrigo Oliveira: "[OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17017.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having this problem too. If someone could help, I will appreciate!
<br>
<p>On Fri, Jul 22, 2011 at 5:29 PM, Rodrigo Oliveira &lt;rsilva.oliveira_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an application in which I need to terminate a process anytime due an
</span><br>
<span class="quotelev1">&gt; external command. In order to maintain the consistence of the processes, I
</span><br>
<span class="quotelev1">&gt; need to receive the messages that were already sent to the terminating
</span><br>
<span class="quotelev1">&gt; process. I used the MPI_Iprobe to check whether there is messages to be
</span><br>
<span class="quotelev1">&gt; received, but I noticed that I have to call this function twice. Otherwise
</span><br>
<span class="quotelev1">&gt; it does not work properly. The code bellow exemplifies what happens. Can
</span><br>
<span class="quotelev1">&gt; anyone help me? Is there another way to do what I need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; int rank, size, i;
</span><br>
<span class="quotelev1">&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  if (size &lt; 2) {
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Please run with two processes.\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;  for (i=0; i&lt;10; i++) {
</span><br>
<span class="quotelev1">&gt; MPI_Send(&amp;i, 1, MPI_INT, 1, 123, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; if (rank == 1) {
</span><br>
<span class="quotelev1">&gt;  int value, has_message;
</span><br>
<span class="quotelev1">&gt; MPI_Status status;
</span><br>
<span class="quotelev1">&gt; sleep (2);
</span><br>
<span class="quotelev1">&gt;  *// Code bellow does not work properly*
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt;  while (has_message) {
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;value, 1, MPI_INT, 0, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Process %d received message %d.\n&quot;, rank, value);
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *// Calling MPI_Iprobe twice for each incoming message makes the code
</span><br>
<span class="quotelev1">&gt; work.*
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt;  while (has_message) {
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;value, 1, MPI_INT, 0, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Process %d received message %d.\n&quot;, rank, value);
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt;  MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;  fflush(stdout);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17014.php">BasitAli  Khan: "[OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17012.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16978.php">Rodrigo Oliveira: "[OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17017.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
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
