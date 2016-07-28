<?
$subject_val = "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 11:28:07 2009" -->
<!-- isoreceived="20091118162807" -->
<!-- sent="Wed, 18 Nov 2009 17:27:58 +0100" -->
<!-- isosent="20091118162758" -->
<!-- name="Laurin M&#195;&#188;ller" -->
<!-- email="laurin.mueller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node" -->
<!-- id="4B042E9E020000E8000083E3_at_gwia.t-c-c.at" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="06EDD588-8E7E-4BB7-9FAD-3883F3064E5F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node<br>
<strong>From:</strong> Laurin M&#195;&#188;ller (<em>laurin.mueller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 11:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11235.php">Alexander Gordeyev: "[OMPI users] Building Name Service for Intercommunication"</a>
<li><strong>Previous message:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="11232.php">Ralph Castain: "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks thats it!
<br>
&nbsp;
<br>
Would have been straigth forward, but there is a lot of things to
<br>
consider by setting up a cluster the first time - a lot to oversee.
<br>
&nbsp;
<br>
Anyway thanks for your help.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; 18.11.2009 15:57 &gt;&gt;&gt;
</span><br>
Bingo! This is why we ask for info on how you configure OMPI :-)
<br>
<p>You need to rebuild OMPI with --enable-heterogeneous. Because there is
<br>
additional overhead associated with running hetero configurations, and
<br>
so few people do so, it is disabled by default.
<br>
<p><p>On Nov 18, 2009, at 2:55 AM, Laurin M&#195;&#188;ller wrote:
<br>
<p><p><p>Now i have the same openmpi versions. 1.3.2
<br>
&nbsp;
<br>
recalulated on both nodes and it works again on each node seperatly:
<br>
&nbsp;
<br>
node1:
<br>
cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ mpirun --version
<br>
mpirun (Open MPI) 1.3.2
<br>
cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ (
<br>
mailto:1.3.2cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ )
<br>
mpirun --hostfile /etc/openmpi/openmpi-default-hostfile -np 4
<br>
/mnt/projects/PS3Cluster/Benchmark/pi
<br>
Input number of intervals:
<br>
20
<br>
1: pi =         0.798498008827023
<br>
2: pi =         0.773339953424083
<br>
3: pi =         0.747089984650041
<br>
0: pi =         0.822248040052981
<br>
pi =         3.141175986954128
<br>
node2 (PS3):
<br>
root_at_kasimir:/mnt/projects/PS3Cluster/Benchmark# mpirun --version
<br>
mpirun (Open MPI) 1.3.2
<br>
[...]
<br>
root_at_kasimir:/mnt/projects/PS3Cluster/Benchmark# mpirun -np 2 pi
<br>
Input number of intervals:
<br>
20
<br>
0: pi =         1.595587993477064
<br>
1: pi =         1.545587993477064
<br>
pi =         3.141175986954128
<br>
BUT when i start it on node1 with more than 16 processes and hostfile.
<br>
i get this errors:
<br>
cluster_at_bioclust:/mnt/projects/PS3Cluster/Benchmark$ mpirun --hostfile
<br>
/etc/openmpi/openmpi-default-hostfile -np 17
<br>
/mnt/projects/PS3Cluster/Benchmark/pi
<br>
--------------------------------------------------------------------------
<br>
This installation of Open MPI was configured without support for
<br>
heterogeneous architectures, but at least one node in the allocation
<br>
was detected to have a different architecture. The detected node was:
<br>
&nbsp;
<br>
Node: bioclust
<br>
&nbsp;
<br>
In order to operate in a heterogeneous environment, please reconfigure
<br>
Open MPI with --enable-heterogeneous.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process
<br>
is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
&nbsp;
<br>
&nbsp;&nbsp;ompi_proc_set_arch failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not supported&quot; (-8) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1239] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1240] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1241] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1242] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1244] Abort before MPI_INIT completed
<br>
&nbsp;successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1245] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1246] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1247] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1248] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1250] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1251] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1238] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[kasimir:12678] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1243] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1249] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1252] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[bioclust:1253] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 16 with PID 12678 on
<br>
node 10.4.1.23 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[bioclust:01236] 16 more processes have sent help message
<br>
help-mpi-runtime / heterogeneous-support-unavailable
<br>
[bioclust:01236] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
<br>
see all help / error messages
<br>
[bioclust:01236] 16 more processes have sent help message
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; 17.11.2009 16:52 &gt;&gt;&gt;
</span><br>
I noticed that you also have different versions of OMPI. You have 1.3.2
<br>
on node1 and 1.3 on node2.
<br>
can you try to put same versions of OMPI on both nodes.
<br>
can you also try running np 16 on node1 when you try running
<br>
separately.
<br>
Lenny.
<br>
<p>On Tue, Nov 17
<br>
, 2009 at 5:45 PM, Laurin M&#195;&#188;ller &lt;laurin.mueller_at_[hidden]&gt;
<br>
wrote:
<br>
<p><p><p><p><span class="quotelev3">&gt;&gt;&gt; Ralph Castain 11/17/09 4:04 PM &gt;&gt;&gt; 
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
<p><span class="quotelev1">&gt;I would guess that the executable is compiled to run on the PS3 given
</span><br>
your specified path, so I would &gt;expect it to bomb on node1 - which is
<br>
exactly what appears to be happening.
<br>
the executable is compiled on each node separately and lies at each
<br>
node in the same directory 
<br>
/mnt/projects/PS3Cluster/Benchmark/pi
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
<p><p>On Nov 17, 2009, at 1:59 AM, Laurin M&#195;&#188;ller wrote:
<br>
<p><p><p>Hi,
<br>
i want to build a cluster with openmpi.
<br>
2 nodes:
<br>
node 1: 4 x Amd Quad Core, ubuntu 9.04, openmpi 1.3.2
<br>
node 2: Sony PS3, ubuntu 9.04, openmpi 1.3
<br>
both can connect with ssh to each other and to itself without passwd.
<br>
I can run the sample proramm pi.c on both nodes seperatly (see below).
<br>
But if i try to start it on node1 with --hostfile option to use node 2
<br>
&quot;remote&quot; i got this error:
<br>
cluster_at_bioclust:~$ ( mailto:cluster_at_bioclust:%7E$ ) mpirun --hostfile
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
my hostfile:
<br>
cluster_at_bioclust:~$ ( mailto:cluster_at_bioclust:%7E$ ) cat
<br>
/etc/openmpi/openmpi-default-hostfile
<br>
10.4.23.107 slots=16
<br>
10.4.1.23 slots=2
<br>
i can see with top that the processors of node2 begin to work shortly,
<br>
then it apports on node1.
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
int i, n;
<br>
double h, pi, x;
<br>
int me, nprocs;
<br>
double piece;
<br>
/* --------------------------------------------------- */
<br>
MPI_Init (&amp;argc, &amp;argv);
<br>
MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
<br>
MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
<br>
/* --------------------------------------------------- */
<br>
if (me == 0)
<br>
{
<br>
printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
<br>
scanf (&quot;%d&quot;, &amp;n);
<br>
}
<br>
/* --------------------------------------------------- */
<br>
MPI_Bcast (&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
/* --------------------------------------------------- */
<br>
h = 1. / (double) n;
<br>
piece = 0.;
<br>
for (i=me+1; i &lt;= n; i+=nprocs)
<br>
{
<br>
x = (i-1)*h;
<br>
piece = piece + ( 4/(1+(x)*(x)) + 4/(1+(x+h)*(x+h))) / 2 * h;
<br>
}
<br>
printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
<br>
/* --------------------------------------------------- */
<br>
MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
<br>
MPI_SUM, 0, MPI_COMM_WORLD);
<br>
/* --------------------------------------------------- */
<br>
if (me == 0)
<br>
{
<br>
printf(&quot;pi = %25.15f\n&quot;, pi);
<br>
}
<br>
/* --------------------------------------------------- */
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
it works on each node.
<br>
node1:
<br>
cluster_at_bioclust:~$ ( mailto:cluster_at_bioclust:%7E$ ) mpirun -np 4
<br>
/mnt/projects/PS3Cluster/Benchmark/piInput number of intervals:
<br>
20
<br>
0: pi = 0.822248040052981
<br>
2: pi = 0.773339953424083
<br>
3: pi = 0.747089984650041
<br>
1: pi = 0.798498008827023
<br>
pi = 3.141175986954128
<br>
node2:
<br>
cluster_at_kasimir:~$ ( mailto:cluster_at_kasimir:%7E$ ) mpirun -np 2
<br>
/mnt/projects/PS3Cluster/Benchmark/pi
<br>
Input number of intervals:
<br>
5
<br>
1: pi = 1.267463056905495
<br>
0: pi = 1.867463056905495
<br>
pi = 3.134926113810990
<br>
cluster_at_kasimir:~$ ( mailto:cluster_at_kasimir:%7E$ ) 
<br>
Thx in advance,
<br>
Laurin
<br>
<p>_________________
<br>
______________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11234/attachment">HTML</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11235.php">Alexander Gordeyev: "[OMPI users] Building Name Service for Intercommunication"</a>
<li><strong>Previous message:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>In reply to:</strong> <a href="11232.php">Ralph Castain: "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node"</a>
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
