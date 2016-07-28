<?
$subject_val = "[OMPI users] MPI_Send and MPI_Recv not working";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 10 04:39:29 2009" -->
<!-- isoreceived="20091010083929" -->
<!-- sent="Sat, 10 Oct 2009 14:09:05 +0530" -->
<!-- isosent="20091010083905" -->
<!-- name="ankur pachauri" -->
<!-- email="ankurpachauri_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Send and MPI_Recv not working" -->
<!-- id="bccd656d0910100139y634d8c2se409a180e4c040a5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Send and MPI_Recv not working<br>
<strong>From:</strong> ankur pachauri (<em>ankurpachauri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-10 04:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10903.php">John R. Cary: "[OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>Previous message:</strong> <a href="10901.php">Greg Fischer: "[OMPI users] strange performance fluctuations and problems with mpif90-vt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i have openmpi 1.3.3 installed on my linux fedora 10 system, i have a
<br>
cluster of two nodes node0(ip 10.1.7.125) and node1(ip 10.1.7.138) among
<br>
them passwordless ssh is set and a directory is nfs mounted
<br>
<p>when i run a simple test code without and MPI_Send or MPI_Recv it works for
<br>
any number of process with the command
<br>
mpirun -np 2 --hostfile host a.out
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;#include &quot;mpi.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;int main(argc,argv)
<br>
&nbsp;&nbsp;&nbsp;int argc;
<br>
&nbsp;&nbsp;&nbsp;char *argv[]; {
<br>
&nbsp;&nbsp;&nbsp;int  numtasks, rank, rc;
<br>
&nbsp;&nbsp;&nbsp;int x;
<br>
&nbsp;&nbsp;&nbsp;rc = MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;if (rc != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Error starting MPI program. Terminating.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numtasks);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;printf (&quot;\nNumber of tasks= %d \t  My rank= %d&quot;, numtasks,rank);
<br>
<p>&nbsp;&nbsp;&nbsp;/*******  do some work *******/
<br>
<p>&nbsp;&nbsp;&nbsp;if(rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\t This is primary&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = 9;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = 1;
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;\t%d\n&quot;,x);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
--------------------------------------------------------------------------
<br>
but when i run another code with MPI_Send or MPI_Recv
<br>
it give the follwing error
<br>
<p>[node0][[17948,1],0][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 10.1.7.138 failed: No route to host (113)
<br>
^Cmpirun: killing job...
<br>
<p><p>mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;node1
<br>
--------------------------------------------------------------------------
<br>
#include &quot;mpi.h&quot;
<br>
#include &quot;string.h&quot;
<br>
#include &quot;stdio.h&quot;
<br>
main( argc, argv )
<br>
int argc;
<br>
char **argv;
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char message[20];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myrank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0)    /* code for process zero */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(message,&quot;Hello, there&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(message, strlen(message)+1, MPI_CHAR, 1, 99,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else if (myrank == 1) /* code for process one */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(message, 20, MPI_CHAR, 0, 99, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;received :%s:\n&quot;, message);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
--------------------------------------------------------------------------
<br>
<p>please help
<br>
<p>regards
<br>
<p><pre>
-- 
Ankur Pachauri.
Research Scholar,
software engineering.
Department of Mathematics
Dayalbagh Educational Institute
Dayalbagh,
AGRA
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10903.php">John R. Cary: "[OMPI users] Openmpi failure on dual quad linux"</a>
<li><strong>Previous message:</strong> <a href="10901.php">Greg Fischer: "[OMPI users] strange performance fluctuations and problems with mpif90-vt"</a>
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
