<?
$subject_val = "Re: [OMPI users] mpirun not working on more than one node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 10:45:40 2009" -->
<!-- isoreceived="20091117154540" -->
<!-- sent="Tue, 17 Nov 2009 16:45:32 +0100" -->
<!-- isosent="20091117154532" -->
<!-- name="Laurin M&#252;ller" -->
<!-- email="laurin.mueller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun not working on more than one node" -->
<!-- id="4B02D32C020000E8000083B2_at_gwia.t-c-c.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] mpirun not working on more than one node" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun not working on more than one node<br>
<strong>From:</strong> Laurin M&#252;ller (<em>laurin.mueller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 10:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11220.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11212.php">Laurin M&#195;&#188;ller: "[OMPI users] mpirun not working on more than one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11220.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Reply:</strong> <a href="11220.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun not working on more than one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain  11/17/09 4:04 PM &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Your cmd line is telling OMPI to run 17 processes. Since your hostfile
</span><br>
indicates that only 16 of them are to &gt;run on 10.4.23.107 (which I
<br>
assume is your PS3 node?), 1 process is going to be run on 10.4.1.23 (I
<br>
assume &gt;this is node1?).
<br>
node1 has 16 Cores (4 x AMD Quad Core Processors)
<br>
<p>node2 is the ps3 with two processors (slots)
<br>
<p><p><span class="quotelev1">&gt;I would guess that the executable is compiled to run on the PS3 given
</span><br>
your specified path, so I would &gt;expect it to bomb on node1 - which is
<br>
exactly what appears to be happening.
<br>
the executable is compiled on each node separately and lies at each node
<br>
in the same directory
<br>
&nbsp;/mnt/projects/PS3Cluster/Benchmark/pi
<br>
on each node different directories are mounted. so there exists a
<br>
separate executable file compiled at each node.
<br>
<p>in the end i want to ran R on this cluster with Rmpi - as i get a
<br>
similar problem there i rist wanted to try with an c programm.
<br>
<p>with r happens the same thing it works when i start it on each node but
<br>
if i want to start more than 16 processes on node one in exits.
<br>
<p><p><p>On Nov 17, 2009, at 1:59 AM, Laurin M&#252;ller wrote:
<br>
<p>Hi,
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
I can run the sample proramm pi.c on both nodes seperatly (see below).
<br>
But if i try to start it on node1 with --hostfile option to use node 2
<br>
&quot;remote&quot; i got this error:
<br>
&nbsp;
<br>
cluster_at_bioclust:~$ mpirun --hostfile
<br>
/etc/openmpi/openmpi-default-hostfile -np 17
<br>
/mnt/projects/PS3Cluster/Benchmark/pi
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>my hostfile:
<br>
cluster_at_bioclust:~$ cat /etc/openmpi/openmpi-default-hostfile
<br>
10.4.23.107 slots=16
<br>
10.4.1.23 slots=2
<br>
<p>i can see with top that the processors of node2 begin to work shortly,
<br>
then it apports on node1.
<br>
&nbsp;
<br>
I use this sample/test program:
<br>
#include 
<br>
#include 
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce (&amp;piece, *, 1, MPI_DOUBLE,
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
<p>it works on each node.
<br>
node1:
<br>
cluster_at_bioclust:~$ mpirun -np 4
<br>
/mnt/projects/PS3Cluster/Benchmark/piInput number of intervals:
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
pi =         3.13
<br>
4926113810990
<br>
cluster_at_kasimir:~$ 
<br>
&nbsp;
<br>
Thx in advance,
<br>
Laurin
<br>
<p><p>&nbsp;
<br>
&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11219/attachment">HTML</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11220.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11212.php">Laurin M&#195;&#188;ller: "[OMPI users] mpirun not working on more than one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11220.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Reply:</strong> <a href="11220.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun not working on more than one node"</a>
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
