<?
$subject_val = "[OMPI users] Problems with MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 16:29:54 2011" -->
<!-- isoreceived="20110722202954" -->
<!-- sent="Fri, 22 Jul 2011 17:29:50 -0300" -->
<!-- isosent="20110722202950" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with MPI_Iprobe" -->
<!-- id="CABm3_qr8TKVYgnsZ+gOdkfUMxqUFmy2CCi4__2TOW09UjW+HqA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems with MPI_Iprobe<br>
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 16:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16979.php">Lane, William: "[OMPI users] Can run OpenMPI testcode on 86 or fewer slots in cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16977.php">Jeff Squyres: "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17017.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there.
<br>
<p>I have an application in which I need to terminate a process anytime due an
<br>
external command. In order to maintain the consistence of the processes, I
<br>
need to receive the messages that were already sent to the terminating
<br>
process. I used the MPI_Iprobe to check whether there is messages to be
<br>
received, but I noticed that I have to call this function twice. Otherwise
<br>
it does not work properly. The code bellow exemplifies what happens. Can
<br>
anyone help me? Is there another way to do what I need?
<br>
<p>Thanks in advance.
<br>
<p><p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
int rank, size, i;
<br>
MPI_Status status;
<br>
<p>MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;if (size &lt; 2) {
<br>
printf(&quot;Please run with two processes.\n&quot;); fflush(stdout);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
if (rank == 0) {
<br>
for (i=0; i&lt;10; i++) {
<br>
MPI_Send(&amp;i, 1, MPI_INT, 1, 123, MPI_COMM_WORLD);
<br>
}
<br>
}
<br>
if (rank == 1) {
<br>
int value, has_message;
<br>
MPI_Status status;
<br>
sleep (2);
<br>
&nbsp;*// Code bellow does not work properly*
<br>
MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
<br>
while (has_message) {
<br>
MPI_Recv(&amp;value, 1, MPI_INT, 0, 123, MPI_COMM_WORLD, &amp;status);
<br>
printf(&quot;Process %d received message %d.\n&quot;, rank, value);
<br>
MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
<br>
}
<br>
<p>*// Calling MPI_Iprobe twice for each incoming message makes the code work.*
<br>
/*
<br>
MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
<br>
MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
<br>
while (has_message) {
<br>
MPI_Recv(&amp;value, 1, MPI_INT, 0, 123, MPI_COMM_WORLD, &amp;status);
<br>
printf(&quot;Process %d received message %d.\n&quot;, rank, value);
<br>
MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
<br>
MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
<br>
}
<br>
*/
<br>
&nbsp;fflush(stdout);
<br>
}
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16979.php">Lane, William: "[OMPI users] Can run OpenMPI testcode on 86 or fewer slots in cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16977.php">Jeff Squyres: "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17017.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
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
