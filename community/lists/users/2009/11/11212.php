<?
$subject_val = "[OMPI users] mpirun not working on more than one node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 03:59:15 2009" -->
<!-- isoreceived="20091117085915" -->
<!-- sent="Tue, 17 Nov 2009 09:59:04 +0100" -->
<!-- isosent="20091117085904" -->
<!-- name="Laurin M&#195;&#188;ller" -->
<!-- email="laurin.mueller_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun not working on more than one node" -->
<!-- id="4B0273E8020000E80000839A_at_gwia.t-c-c.at" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] mpirun not working on more than one node<br>
<strong>From:</strong> Laurin M&#195;&#188;ller (<em>laurin.mueller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 03:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11213.php">Michael Sternberg: "[OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Reply:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Maybe reply:</strong> <a href="11219.php">Laurin Müller: "Re: [OMPI users] mpirun not working on more than one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
i want to build a cluster with openmpi.
<br>
&nbsp;
<br>
2 nodes:
<br>
node 1: 4 x Amd Quad Core, ubuntu 9.04, openmpi 1.3.2
<br>
node 2: Sony PS3, ubuntu 9.04, openmpi 1.3
<br>
&nbsp;
<br>
both can connect with ssh to each other and to itself without passwd.
<br>
&nbsp;
<br>
I can run the sample proramm pi.c on both nodes seperatly (see below). But if i try to start it on node1 with --hostfile option to use node 2 &quot;remote&quot; i got this error:
<br>
&nbsp;
<br>
cluster_at_bioclust:~$ mpirun --hostfile /etc/openmpi/openmpi-default-hostfile -np 17 /mnt/projects/PS3Cluster/Benchmark/pi
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
my hostfile:
<br>
cluster_at_bioclust:~$ cat /etc/openmpi/openmpi-default-hostfile
<br>
10.4.23.107 slots=16
<br>
10.4.1.23 slots=2
<br>
i can see with top that the processors of node2 begin to work shortly, then it apports on node1.
<br>
&nbsp;
<br>
I use this sample/test program:
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    i, n;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double h, pi, x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int    me, nprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double piece;
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf (&quot;%d&quot;, &amp;n);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast (&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h     = 1. / (double) n;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;piece = 0.;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=me+1; i &lt;= n; i+=nprocs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x     = (i-1)*h;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;piece = piece + ( 4/(1+(x)*(x)) + 4/(1+(x+h)*(x+h))) / 2 * h;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, 0, MPI_COMM_WORLD);
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;pi = %25.15f\n&quot;, pi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
/* --------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
it works on each node.
<br>
node1:
<br>
cluster_at_bioclust:~$ mpirun -np 4 /mnt/projects/PS3Cluster/Benchmark/piInput number of intervals:
<br>
20
<br>
0: pi =         0.822248040052981
<br>
2: pi =         0.773339953424083
<br>
3: pi =         0.747089984650041
<br>
1: pi =         0.798498008827023
<br>
pi =         3.141175986954128
<br>
&nbsp;
<br>
node2:
<br>
cluster_at_kasimir:~$ mpirun -np 2 /mnt/projects/PS3Cluster/Benchmark/pi
<br>
Input number of intervals:
<br>
5
<br>
1: pi =         1.267463056905495
<br>
0: pi =         1.867463056905495
<br>
pi =         3.134926113810990
<br>
cluster_at_kasimir:~$ 
<br>
&nbsp;
<br>
Thx in advance,
<br>
Laurin
<br>
<p>&nbsp;
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11212/attachment">HTML</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11213.php">Michael Sternberg: "[OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Reply:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Maybe reply:</strong> <a href="11219.php">Laurin Müller: "Re: [OMPI users] mpirun not working on more than one node"</a>
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
