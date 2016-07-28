<?
$subject_val = "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 04:26:03 2015" -->
<!-- isoreceived="20150727082603" -->
<!-- sent="Mon, 27 Jul 2015 10:25:59 +0200" -->
<!-- isosent="20150727082559" -->
<!-- name="Davide Cesari" -->
<!-- email="dcesari_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI" -->
<!-- id="55B5EB17.6090104_at_arpa.emr.it" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="mailman.6.1437784777.30383.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI<br>
<strong>From:</strong> Davide Cesari (<em>dcesari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 04:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill and Ralph,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;well the Linux kernel does all its best to allocate memory on the local 
<br>
NUMA node if it's available, so it is difficult to convince it to do 
<br>
something harmful in this sense. I think that a way to test such a 
<br>
situation would be to start mpi processes on a node in an usual way 
<br>
-reasonably the processes will be bound to a socket or a core-, wait for 
<br>
the processes to allocate their working memory, then either migrate the 
<br>
processes on the other NUMA node (usually ==socket) or migrate its 
<br>
memory pages, the command-line tools distributed with the numactl 
<br>
package (numactl or migratepages) can probably allow to perform such a 
<br>
vandalism; this would put your system into a worst-case scenario from 
<br>
the NUMA point of view.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In our system, I noticed in the past some strong slowdowns related to 
<br>
NUMA in parallel processes when a single MPI process doing much more I/O 
<br>
than the others tended to occupy all the local memory as disk cache, 
<br>
then the processes on that NUMA node were forced to allocate memory on 
<br>
the other NUMA node rather than reclaiming cache memory on the local 
<br>
node. I solved this in a brutal way by cleaning the disk cache regularly 
<br>
on the computing nodes. In my view this is the only case where (recent) 
<br>
Linux kernel does not have a NUMA-aware behavior, I wonder whether there 
<br>
are HPC-optimized patches or something has changed in this direction in 
<br>
recent kernel development.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Best regards, Davide
<br>
<p><span class="quotelev1">&gt; Date: Fri, 24 Jul 2015 13:36:55 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] NUMA: Non-local memory access and
</span><br>
<span class="quotelev1">&gt; 	performance	effects on OpenMPI
</span><br>
<span class="quotelev1">&gt; Hi Bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You actually can get OMPI to split a process across sockets. Let?s say there are 4 cores/socket and 2 sockets/node. You could run two procs on the same node, one split across sockets, by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ?map-by core:pe=5 ./app : -n 1 ?map-by core:pe=3 ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first proc will run on all cores of the 1st socket plus the 1st core of the 2nd socket. The second proc will run on the remaining 3 cores of the 2nd socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2015, at 12:48 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm just curious, if we run an OpenMPI job and it makes use of non-local memory
</span><br>
<span class="quotelev2">&gt;&gt; (i.e. memory tied to another socket) what kind of effects are seen on performance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How would you go about testing the above? I can't think of any command line parameter that
</span><br>
<span class="quotelev2">&gt;&gt; would allow one to split an OpenMPI process across sockets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd imagine it would be pretty bad since you can't cache non-local memory locally,
</span><br>
<span class="quotelev2">&gt;&gt; the fact both the request and data have to flow through an IOH, the local CPU would
</span><br>
<span class="quotelev2">&gt;&gt; have to compete w/the non-local CPU for access to its own memory and that doing this
</span><br>
<span class="quotelev2">&gt;&gt; would have to implemented w/some sort of software semaphore locks (which would add
</span><br>
<span class="quotelev2">&gt;&gt; even more overhead).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bill L.
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a>&gt;
</span><br>
<p><p><pre>
-- 
============================= Davide Cesari ============================
Dott**(0.5) Davide Cesari
ARPA-Emilia Romagna, Servizio IdroMeteoClima
NWP modelling - Modellistica numerica previsionale
Tel. +39 051525926
========================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
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
