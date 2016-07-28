<?
$subject_val = "[OMPI users] MPI_Bcast hangs on with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 14:04:50 2010" -->
<!-- isoreceived="20100129190450" -->
<!-- sent="Fri, 29 Jan 2010 14:04:42 -0500" -->
<!-- isosent="20100129190442" -->
<!-- name="Paul Wolfgang" -->
<!-- email="wolfgang_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bcast hangs on with multiple nodes" -->
<!-- id="4B63314A.2080103_at_temple.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bcast hangs on with multiple nodes<br>
<strong>From:</strong> Paul Wolfgang (<em>wolfgang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 14:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11945.php">Ashley Pittman: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Previous message:</strong> <a href="11943.php">Jed Brown: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just created a small cluster consisting of three nodes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bellhuey   AMD 64 with 4 cores
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wolf1   AMD 64 with 2 cores
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wolf2   AMD 64 with 2 cores
<br>
<p>The host file is:
<br>
<p>bellhuey slots=4
<br>
wolf1 slots=2
<br>
wolf2 slots=2
<br>
<p>bellhuey is the master and wolf1 and wolf2 share the /usr and /home file 
<br>
systems via NFS
<br>
I am running mpi 1.4.1.
<br>
I have the following simple program:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
int main (int argc, char* argv[]) {
<br>
&nbsp;&nbsp;int myid, numprocs;
<br>
&nbsp;&nbsp;char me[255];
<br>
&nbsp;&nbsp;int n;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
&nbsp;&nbsp;gethostname(me, 254);
<br>
&nbsp;&nbsp;printf(&quot;Hello from %s I am process %d of %d\n&quot;, me, myid, numprocs);
<br>
&nbsp;&nbsp;if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n = 12345;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;Call to MPI_Bcast n==%d on %s myid=%d\n&quot;, n, me, myid);
<br>
&nbsp;&nbsp;MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;printf(&quot;Return from MPI_Bcast n==%d on %s myid=%d\n&quot;, n, me, myid);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>If I run this with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 hello
<br>
it works fine, but all processes run on bellhuey
<br>
<p>If I run this with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 --hostfile host hello
<br>
I get the following:
<br>
<p>Hello from bellhuey I am process 0 of 8
<br>
Call to MPI_Bcast n==12345 on bellhuey myid=0
<br>
Hello from bellhuey I am process 1 of 8
<br>
Call to MPI_Bcast n==32767 on bellhuey myid=1
<br>
Hello from bellhuey I am process 2 of 8
<br>
Call to MPI_Bcast n==32767 on bellhuey myid=2
<br>
Hello from wolf1 I am process 5 of 8
<br>
Call to MPI_Bcast n==32767 on wolf1 myid=5
<br>
Hello from bellhuey I am process 3 of 8
<br>
Call to MPI_Bcast n==32767 on bellhuey myid=3
<br>
Hello from wolf2 I am process 7 of 8
<br>
Call to MPI_Bcast n==32767 on wolf2 myid=7
<br>
Hello from wolf2 I am process 6 of 8
<br>
Call to MPI_Bcast n==32767 on wolf2 myid=6
<br>
Hello from wolf1 I am process 4 of 8
<br>
Call to MPI_Bcast n==32767 on wolf1 myid=4
<br>
<p>As expected 4 processes are started on bellhuey and two processes each 
<br>
on wolf1 and wolf2.
<br>
However, none of the calls to MPI_Bcast return!
<br>
<p>Any help would be appreciated.
<br>
<p>Paul Wolfgang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11945.php">Ashley Pittman: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Previous message:</strong> <a href="11943.php">Jed Brown: "Re: [OMPI users] speed up this problem by MPI"</a>
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
