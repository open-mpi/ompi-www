<?
$subject_val = "[OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 14:05:09 2013" -->
<!-- isoreceived="20130810180509" -->
<!-- sent="Sat, 10 Aug 2013 15:07:33 -0300" -->
<!-- isosent="20130810180733" -->
<!-- name="Edson Tavares de Camargo" -->
<!-- email="etcamargo_at_[hidden]" -->
<!-- subject="[OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="9c13abf5b779ce3a193142274ecbccbc.squirrel_at_webmail.inf.ufpr.br" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fault Tolerant Features in OpenMPI<br>
<strong>From:</strong> Edson Tavares de Camargo (<em>etcamargo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 14:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22460.php">Lee-Ping Wang: "[OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I was looking for posts about fault tolerant in MPI and I found the post
<br>
below:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2012/06/19658.php">http://www.open-mpi.org/community/lists/users/2012/06/19658.php</a>
<br>
<p>I am trying to understand  all work about failures detection present in
<br>
open-mpi. So, I began with a simple application, a ring application
<br>
(ring.c) , to understand errors handlers. But, it seems me that didn't
<br>
work, why not? (the code is below)
<br>
<p>The application (the process) was running in the same machine with the
<br>
following code line:
<br>
<p>$ mpiexec -n 4 ring
<br>
<p>While the  ring application was running, one of the process was killed.
<br>
So, the entire application stopped (ok until here), but didn't show me the
<br>
error message. The line if(error != MPI_SUCCESS) should not worked?
<br>
<p>I am using the mpiexec (OpenRTE) 1.6.5.
<br>
<p>Thanks in advance,
<br>
<p>Edson
<br>
<p>-----------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;time.h&gt;
<br>
<p>int main( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int n = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int tag = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int root = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int next, previous;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double start = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double finish = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// error handler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;next = (rank + 1) % (size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n++;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rank != 0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;previous = (rank - 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;previous = size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == root) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = MPI_Send( &amp;n, 1, MPI_INT, next, tag, MPI_COMM_WORLD );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//if a error happens print the message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(error != MPI_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;error&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = MPI_Recv( &amp;n, 1, MPI_INT, previous, tag,
<br>
MPI_COMM_WORLD, &amp;status );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//if a error happens print the message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(error != MPI_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;error&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = MPI_Recv( &amp;n, 1, MPI_INT, previous, tag,
<br>
MPI_COMM_WORLD, &amp;status );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//if a error happens print the message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(error != MPI_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;error&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = MPI_Send( &amp;n, 1, MPI_INT, next, tag, MPI_COMM_WORLD );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//if a error happens print the message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(error != MPI_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;error&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;Process %d got %d\n&quot;, rank, n );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// wait a bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finish = start;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ( (finish - start) &lt; 1 ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finish =  MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;} while (n &lt; 100);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
----------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Previous message:</strong> <a href="22460.php">Lee-Ping Wang: "[OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
