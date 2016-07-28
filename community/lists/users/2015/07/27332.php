<?
$subject_val = "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 04:47:06 2015" -->
<!-- isoreceived="20150727084706" -->
<!-- sent="Mon, 27 Jul 2015 01:47:01 -0700" -->
<!-- isosent="20150727084701" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI" -->
<!-- id="DDAE6CF3-606E-48D8-B641-FA923609C0E5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55B5EB17.6090104_at_arpa.emr.it" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 04:47:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27331.php">Davide Cesari: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27331.php">Davide Cesari: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As you say, it all depends on your kernel  :-)
<br>
<p>If the numactl libraries are available, we will explicitly set the memory policy to follow the bindings we apply. So doing as I suggested will cause the first process to have its memory &#226;&#128;&#156;bound&#226;&#128;&#157; to the first socket, even thought the process will also be using a core from the other region. If your process spawns a few threads to ensure that core exercises the memory, you&#226;&#128;&#153;ll get plenty of cross-NUMA behavior to test against.
<br>
<p>Which is why we recommend that users &#226;&#128;&#156;don&#226;&#128;&#153;t do that&#226;&#128;&#157; :-)
<br>
<p><p><span class="quotelev1">&gt; On Jul 27, 2015, at 1:25 AM, Davide Cesari &lt;dcesari_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Bill and Ralph,
</span><br>
<span class="quotelev1">&gt; 	well the Linux kernel does all its best to allocate memory on the local NUMA node if it's available, so it is difficult to convince it to do something harmful in this sense. I think that a way to test such a situation would be to start mpi processes on a node in an usual way -reasonably the processes will be bound to a socket or a core-, wait for the processes to allocate their working memory, then either migrate the processes on the other NUMA node (usually ==socket) or migrate its memory pages, the command-line tools distributed with the numactl package (numactl or migratepages) can probably allow to perform such a vandalism; this would put your system into a worst-case scenario from the NUMA point of view.
</span><br>
<span class="quotelev1">&gt; 	In our system, I noticed in the past some strong slowdowns related to NUMA in parallel processes when a single MPI process doing much more I/O than the others tended to occupy all the local memory as disk cache, then the processes on that NUMA node were forced to allocate memory on the other NUMA node rather than reclaiming cache memory on the local node. I solved this in a brutal way by cleaning the disk cache regularly on the computing nodes. In my view this is the only case where (recent) Linux kernel does not have a NUMA-aware behavior, I wonder whether there are HPC-optimized patches or something has changed in this direction in recent kernel development.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Best regards, Davide
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 24 Jul 2015 13:36:55 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] NUMA: Non-local memory access and
</span><br>
<span class="quotelev2">&gt;&gt; 	performance	effects on OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; Hi Bill
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You actually can get OMPI to split a process across sockets. Let?s say there are 4 cores/socket and 2 sockets/node. You could run two procs on the same node, one split across sockets, by:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 1 ?map-by core:pe=5 ./app : -n 1 ?map-by core:pe=3 ./app
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first proc will run on all cores of the 1st socket plus the 1st core of the 2nd socket. The second proc will run on the remaining 3 cores of the 2nd socket.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 24, 2015, at 12:48 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm just curious, if we run an OpenMPI job and it makes use of non-local memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e. memory tied to another socket) what kind of effects are seen on performance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How would you go about testing the above? I can't think of any command line parameter that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would allow one to split an OpenMPI process across sockets.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd imagine it would be pretty bad since you can't cache non-local memory locally,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fact both the request and data have to flow through an IOH, the local CPU would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to compete w/the non-local CPU for access to its own memory and that doing this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would have to implemented w/some sort of software semaphore locks (which would add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even more overhead).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bill L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================= Davide Cesari ============================
</span><br>
<span class="quotelev1">&gt; Dott**(0.5) Davide Cesari
</span><br>
<span class="quotelev1">&gt; ARPA-Emilia Romagna, Servizio IdroMeteoClima
</span><br>
<span class="quotelev1">&gt; NWP modelling - Modellistica numerica previsionale
</span><br>
<span class="quotelev1">&gt; Tel. +39 051525926
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27331.php">http://www.open-mpi.org/community/lists/users/2015/07/27331.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27331.php">Davide Cesari: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27331.php">Davide Cesari: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
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
