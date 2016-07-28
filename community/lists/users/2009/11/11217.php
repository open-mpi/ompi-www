<?
$subject_val = "Re: [OMPI users] mpirun not working on more than one node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 10:01:25 2009" -->
<!-- isoreceived="20091117150125" -->
<!-- sent="Tue, 17 Nov 2009 08:01:14 -0700" -->
<!-- isosent="20091117150114" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun not working on more than one node" -->
<!-- id="BDF2C7AA-F95C-493A-99BD-BB0BCA098C2B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B0273E8020000E80000839A_at_gwia.t-c-c.at" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 10:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11212.php">Laurin M&#195;&#188;ller: "[OMPI users] mpirun not working on more than one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11219.php">Laurin Müller: "Re: [OMPI users] mpirun not working on more than one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your cmd line is telling OMPI to run 17 processes. Since your hostfile indicates that only 16 of them are to run on 10.4.23.107 (which I assume is your PS3 node?), 1 process is going to be run on 10.4.1.23 (I assume this is node1?).
<br>
<p>I would guess that the executable is compiled to run on the PS3 given your specified path, so I would expect it to bomb on node1 - which is exactly what appears to be happening.
<br>
<p><p>On Nov 17, 2009, at 1:59 AM, Laurin M&#252;ller wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; i want to build a cluster with openmpi.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2 nodes:
</span><br>
<span class="quotelev1">&gt; node 1: 4 x Amd Quad Core, ubuntu 9.04, openmpi 1.3.2
</span><br>
<span class="quotelev1">&gt; node 2: Sony PS3, ubuntu 9.04, openmpi 1.3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; both can connect with ssh to each other and to itself without passwd.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I can run the sample proramm pi.c on both nodes seperatly (see below). But if i try to start it on node1 with --hostfile option to use node 2 &quot;remote&quot; i got this error:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; cluster_at_bioclust:~$ mpirun --hostfile /etc/openmpi/openmpi-default-hostfile -np 17 /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; my hostfile:
</span><br>
<span class="quotelev1">&gt; cluster_at_bioclust:~$ cat /etc/openmpi/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; 10.4.23.107 slots=16
</span><br>
<span class="quotelev1">&gt; 10.4.1.23 slots=2
</span><br>
<span class="quotelev1">&gt; i can see with top that the processors of node2 begin to work shortly, then it apports on node1.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I use this sample/test program:
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;       int    i, n;
</span><br>
<span class="quotelev1">&gt;       double h, pi, x;
</span><br>
<span class="quotelev1">&gt;       int    me, nprocs;
</span><br>
<span class="quotelev1">&gt;       double piece;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;       MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;       if (me == 0)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
</span><br>
<span class="quotelev1">&gt;          scanf (&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;       MPI_Bcast (&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;       h     = 1. / (double) n;
</span><br>
<span class="quotelev1">&gt;       piece = 0.;
</span><br>
<span class="quotelev1">&gt;       for (i=me+1; i &lt;= n; i+=nprocs)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;            x     = (i-1)*h;
</span><br>
<span class="quotelev1">&gt;            piece = piece + ( 4/(1+(x)*(x)) + 4/(1+(x+h)*(x+h))) / 2 * h;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;       MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt;                   MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;       if (me == 0)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;pi = %25.15f\n&quot;, pi);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;       return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; it works on each node.
</span><br>
<span class="quotelev1">&gt; node1:
</span><br>
<span class="quotelev1">&gt; cluster_at_bioclust:~$ mpirun -np 4 /mnt/projects/PS3Cluster/Benchmark/piInput number of intervals:
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev1">&gt; 0: pi =         0.822248040052981
</span><br>
<span class="quotelev1">&gt; 2: pi =         0.773339953424083
</span><br>
<span class="quotelev1">&gt; 3: pi =         0.747089984650041
</span><br>
<span class="quotelev1">&gt; 1: pi =         0.798498008827023
</span><br>
<span class="quotelev1">&gt; pi =         3.141175986954128
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; node2:
</span><br>
<span class="quotelev1">&gt; cluster_at_kasimir:~$ mpirun -np 2 /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev1">&gt; Input number of intervals:
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; 1: pi =         1.267463056905495
</span><br>
<span class="quotelev1">&gt; 0: pi =         1.867463056905495
</span><br>
<span class="quotelev1">&gt; pi =         3.134926113810990
</span><br>
<span class="quotelev1">&gt; cluster_at_kasimir:~$
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thx in advance,
</span><br>
<span class="quotelev1">&gt; Laurin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11212.php">Laurin M&#195;&#188;ller: "[OMPI users] mpirun not working on more than one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11219.php">Laurin Müller: "Re: [OMPI users] mpirun not working on more than one node"</a>
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
