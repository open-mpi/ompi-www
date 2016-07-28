<?
$subject_val = "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 09:57:52 2009" -->
<!-- isoreceived="20091118145752" -->
<!-- sent="Wed, 18 Nov 2009 07:57:37 -0700" -->
<!-- isosent="20091118145737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node" -->
<!-- id="06EDD588-8E7E-4BB7-9FAD-3883F3064E5F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B03D2B1020000E8000083CD_at_gwia.t-c-c.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 09:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="11229.php">Laurin M&#195;&#188;ller: "[OMPI users] Antw: Re:  mpirun not working on more than one	 node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11234.php">Laurin Müller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<li><strong>Reply:</strong> <a href="11234.php">Laurin Müller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bingo! This is why we ask for info on how you configure OMPI :-)
<br>
<p>You need to rebuild OMPI with --enable-heterogeneous. Because there is additional overhead associated with running hetero configurations, and so few people do so, it is disabled by default.
<br>
<p><p>On Nov 18, 2009, at 2:55 AM, Laurin M&#252;ller wrote:
<br>
<p><span class="quotelev1">&gt; Now i have the same openmpi versions. 1.3.2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; recalulated on both nodes and it works again on each node seperatly:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; node1:
</span><br>
<span class="quotelev1">&gt; cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.3.2
</span><br>
<span class="quotelev1">&gt; cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ mpirun --hostfile /etc/openmpi/openmpi-default-hostfile -np 4 /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev1">&gt; Input number of intervals:
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev1">&gt; 1: pi =         0.798498008827023
</span><br>
<span class="quotelev1">&gt; 2: pi =         0.773339953424083
</span><br>
<span class="quotelev1">&gt; 3: pi =         0.747089984650041
</span><br>
<span class="quotelev1">&gt; 0: pi =         0.822248040052981
</span><br>
<span class="quotelev1">&gt; pi =         3.141175986954128
</span><br>
<span class="quotelev1">&gt; node2 (PS3):
</span><br>
<span class="quotelev1">&gt; root_at_kasimir:/mnt/projects/PS3Cluster/Benchmark# mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.3.2
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; root_at_kasimir:/mnt/projects/PS3Cluster/Benchmark# mpirun -np 2 pi
</span><br>
<span class="quotelev1">&gt; Input number of intervals:
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev1">&gt; 0: pi =         1.595587993477064
</span><br>
<span class="quotelev1">&gt; 1: pi =         1.545587993477064
</span><br>
<span class="quotelev1">&gt; pi =         3.141175986954128
</span><br>
<span class="quotelev1">&gt; BUT when i start it on node1 with more than 16 processes and hostfile. i get this errors:
</span><br>
<span class="quotelev1">&gt; cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ mpirun --hostfile /etc/openmpi/openmpi-default-hostfile -np 17 /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This installation of Open MPI was configured without support for
</span><br>
<span class="quotelev1">&gt; heterogeneous architectures, but at least one node in the allocation
</span><br>
<span class="quotelev1">&gt; was detected to have a different architecture. The detected node was:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Node: bioclust
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In order to operate in a heterogeneous environment, please reconfigure
</span><br>
<span class="quotelev1">&gt; Open MPI with --enable-heterogeneous.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   ompi_proc_set_arch failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not supported&quot; (-8) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1239] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1240] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1241] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1242] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1244] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1245] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1246] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1247] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1248] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1250] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1251] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1238] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [kasimir:12678] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1243] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1249] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1252] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [bioclust:1253] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 16 with PID 12678 on
</span><br>
<span class="quotelev1">&gt; node 10.4.1.23 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [bioclust:01236] 16 more processes have sent help message help-mpi-runtime / heterogeneous-support-unavailable
</span><br>
<span class="quotelev1">&gt; [bioclust:01236] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [bioclust:01236] 16 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; 17.11.2009 16:52 &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that you also have different versions of OMPI. You have 1.3.2 on node1 and 1.3 on node2.
</span><br>
<span class="quotelev1">&gt; can you try to put same versions of OMPI on both nodes.
</span><br>
<span class="quotelev1">&gt; can you also try running np 16 on node1 when you try running separately.
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 17, 2009 at 5:45 PM, Laurin M&#252;ller &lt;laurin.mueller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph Castain 11/17/09 4:04 PM &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Your cmd line is telling OMPI to run 17 processes. Since your hostfile indicates that only 16 of them are to &gt;run on 10.4.23.107 (which I assume is your PS3 node?), 1 process is going to be run on 10.4.1.23 (I assume &gt;this is node1?).
</span><br>
<span class="quotelev1">&gt; node1 has 16 Cores (4 x AMD Quad Core Processors)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node2 is the ps3 with two processors (slots)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I would guess that the executable is compiled to run on the PS3 given your specified path, so I would &gt;expect it to bomb on node1 - which is exactly what appears to be happening.
</span><br>
<span class="quotelev1">&gt; the executable is compiled on each node separately and lies at each node in the same directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev1">&gt; on each node different directories are mounted. so there exists a separate executable file compiled at each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the end i want to ran R on this cluster with Rmpi - as i get a similar problem there i rist wanted to try with an c programm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with r happens the same thing it works when i start it on each node but if i want to start more than 16 processes on node one in exits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 17, 2009, at 1:59 AM, Laurin M&#252;ller wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; i want to build a cluster with openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; 2 nodes:
</span><br>
<span class="quotelev2">&gt;&gt; node 1: 4 x Amd Quad Core, ubuntu 9.04, openmpi 1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; node 2: Sony PS3, ubuntu 9.04, openmpi 1.3
</span><br>
<span class="quotelev2">&gt;&gt; both can connect with ssh to each other and to itself without passwd.
</span><br>
<span class="quotelev2">&gt;&gt; I can run the sample proramm pi.c on both nodes seperatly (see below). But if i try to start it on node1 with --hostfile option to use node 2 &quot;remote&quot; i got this error:
</span><br>
<span class="quotelev2">&gt;&gt; cluster_at_bioclust:~$ mpirun --hostfile /etc/openmpi/openmpi-default-hostfile -np 17 /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; my hostfile:
</span><br>
<span class="quotelev2">&gt;&gt; cluster_at_bioclust:~$ cat /etc/openmpi/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; 10.4.23.107 slots=16
</span><br>
<span class="quotelev2">&gt;&gt; 10.4.1.23 slots=2
</span><br>
<span class="quotelev2">&gt;&gt; i can see with top that the processors of node2 begin to work shortly, then it apports on node1.
</span><br>
<span class="quotelev2">&gt;&gt; I use this sample/test program:
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; int i, n;
</span><br>
<span class="quotelev2">&gt;&gt; double h, pi, x;
</span><br>
<span class="quotelev2">&gt;&gt; int me, nprocs;
</span><br>
<span class="quotelev2">&gt;&gt; double piece;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; if (me == 0)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; scanf (&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bcast (&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; h = 1. / (double) n;
</span><br>
<span class="quotelev2">&gt;&gt; piece = 0.;
</span><br>
<span class="quotelev2">&gt;&gt; for (i=me+1; i &lt;= n; i+=nprocs)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; x = (i-1)*h;
</span><br>
<span class="quotelev2">&gt;&gt; piece = piece + ( 4/(1+(x)*(x)) + 4/(1+(x+h)*(x+h))) / 2 * h;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; if (me == 0)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;pi = %25.15f\n&quot;, pi);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; it works on each node.
</span><br>
<span class="quotelev2">&gt;&gt; node1:
</span><br>
<span class="quotelev2">&gt;&gt; cluster_at_bioclust:~$ mpirun -np 4 /mnt/projects/PS3Cluster/Benchmark/piInput number of intervals:
</span><br>
<span class="quotelev2">&gt;&gt; 20
</span><br>
<span class="quotelev2">&gt;&gt; 0: pi = 0.822248040052981
</span><br>
<span class="quotelev2">&gt;&gt; 2: pi = 0.773339953424083
</span><br>
<span class="quotelev2">&gt;&gt; 3: pi = 0.747089984650041
</span><br>
<span class="quotelev2">&gt;&gt; 1: pi = 0.798498008827023
</span><br>
<span class="quotelev2">&gt;&gt; pi = 3.141175986954128
</span><br>
<span class="quotelev2">&gt;&gt; node2:
</span><br>
<span class="quotelev2">&gt;&gt; cluster_at_kasimir:~$ mpirun -np 2 /mnt/projects/PS3Cluster/Benchmark/pi
</span><br>
<span class="quotelev2">&gt;&gt; Input number of intervals:
</span><br>
<span class="quotelev2">&gt;&gt; 5
</span><br>
<span class="quotelev2">&gt;&gt; 1: pi = 1.267463056905495
</span><br>
<span class="quotelev2">&gt;&gt; 0: pi = 1.867463056905495
</span><br>
<span class="quotelev2">&gt;&gt; pi = 3.134926113810990
</span><br>
<span class="quotelev2">&gt;&gt; cluster_at_kasimir:~$
</span><br>
<span class="quotelev2">&gt;&gt; Thx in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Laurin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="11229.php">Laurin M&#195;&#188;ller: "[OMPI users] Antw: Re:  mpirun not working on more than one	 node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11234.php">Laurin Müller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<li><strong>Reply:</strong> <a href="11234.php">Laurin Müller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
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
