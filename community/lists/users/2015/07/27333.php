<?
$subject_val = "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 05:46:23 2015" -->
<!-- isoreceived="20150727094623" -->
<!-- sent="Mon, 27 Jul 2015 10:45:51 +0100" -->
<!-- isosent="20150727094551" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI" -->
<!-- id="CAPqNE2VNqs7B3yN9JuRmXokdxM7U2gnrx17jvYrRfRykyK=4Jg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DDAE6CF3-606E-48D8-B641-FA923609C0E5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 05:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an aside, with Slurm you can use:
<br>
<p>sbatch  --ntasks-per-socket=&lt;N&gt;
<br>
<p>I would hazard a guess that this uses the OpenMPI syntax as above to
<br>
perform the binding to core!
<br>
<p>On 27 July 2015 at 09:47, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As you say, it all depends on your kernel  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the numactl libraries are available, we will explicitly set the memory
</span><br>
<span class="quotelev1">&gt; policy to follow the bindings we apply. So doing as I suggested will cause
</span><br>
<span class="quotelev1">&gt; the first process to have its memory &#226;&#128;&#156;bound&#226;&#128;&#157; to the first socket, even
</span><br>
<span class="quotelev1">&gt; thought the process will also be using a core from the other region. If
</span><br>
<span class="quotelev1">&gt; your process spawns a few threads to ensure that core exercises the memory,
</span><br>
<span class="quotelev1">&gt; you&#226;&#128;&#153;ll get plenty of cross-NUMA behavior to test against.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is why we recommend that users &#226;&#128;&#156;don&#226;&#128;&#153;t do that&#226;&#128;&#157; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 27, 2015, at 1:25 AM, Davide Cesari &lt;dcesari_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Bill and Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;       well the Linux kernel does all its best to allocate memory on the
</span><br>
<span class="quotelev1">&gt; local NUMA node if it's available, so it is difficult to convince it to do
</span><br>
<span class="quotelev1">&gt; something harmful in this sense. I think that a way to test such a
</span><br>
<span class="quotelev1">&gt; situation would be to start mpi processes on a node in an usual way
</span><br>
<span class="quotelev1">&gt; -reasonably the processes will be bound to a socket or a core-, wait for
</span><br>
<span class="quotelev1">&gt; the processes to allocate their working memory, then either migrate the
</span><br>
<span class="quotelev1">&gt; processes on the other NUMA node (usually ==socket) or migrate its memory
</span><br>
<span class="quotelev1">&gt; pages, the command-line tools distributed with the numactl package (numactl
</span><br>
<span class="quotelev1">&gt; or migratepages) can probably allow to perform such a vandalism; this would
</span><br>
<span class="quotelev1">&gt; put your system into a worst-case scenario from the NUMA point of view.
</span><br>
<span class="quotelev2">&gt; &gt;       In our system, I noticed in the past some strong slowdowns related
</span><br>
<span class="quotelev1">&gt; to NUMA in parallel processes when a single MPI process doing much more I/O
</span><br>
<span class="quotelev1">&gt; than the others tended to occupy all the local memory as disk cache, then
</span><br>
<span class="quotelev1">&gt; the processes on that NUMA node were forced to allocate memory on the other
</span><br>
<span class="quotelev1">&gt; NUMA node rather than reclaiming cache memory on the local node. I solved
</span><br>
<span class="quotelev1">&gt; this in a brutal way by cleaning the disk cache regularly on the computing
</span><br>
<span class="quotelev1">&gt; nodes. In my view this is the only case where (recent) Linux kernel does
</span><br>
<span class="quotelev1">&gt; not have a NUMA-aware behavior, I wonder whether there are HPC-optimized
</span><br>
<span class="quotelev1">&gt; patches or something has changed in this direction in recent kernel
</span><br>
<span class="quotelev1">&gt; development.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Best regards, Davide
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Fri, 24 Jul 2015 13:36:55 -0700
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] NUMA: Non-local memory access and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      performance     effects on OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Bill
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You actually can get OMPI to split a process across sockets. Let?s say
</span><br>
<span class="quotelev1">&gt; there are 4 cores/socket and 2 sockets/node. You could run two procs on the
</span><br>
<span class="quotelev1">&gt; same node, one split across sockets, by:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -n 1 ?map-by core:pe=5 ./app : -n 1 ?map-by core:pe=3 ./app
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The first proc will run on all cores of the 1st socket plus the 1st
</span><br>
<span class="quotelev1">&gt; core of the 2nd socket. The second proc will run on the remaining 3 cores
</span><br>
<span class="quotelev1">&gt; of the 2nd socket.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jul 24, 2015, at 12:48 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm just curious, if we run an OpenMPI job and it makes use of
</span><br>
<span class="quotelev1">&gt; non-local memory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (i.e. memory tied to another socket) what kind of effects are seen on
</span><br>
<span class="quotelev1">&gt; performance?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; How would you go about testing the above? I can't think of any command
</span><br>
<span class="quotelev1">&gt; line parameter that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would allow one to split an OpenMPI process across sockets.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'd imagine it would be pretty bad since you can't cache non-local
</span><br>
<span class="quotelev1">&gt; memory locally,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the fact both the request and data have to flow through an IOH, the
</span><br>
<span class="quotelev1">&gt; local CPU would
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; have to compete w/the non-local CPU for access to its own memory and
</span><br>
<span class="quotelev1">&gt; that doing this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would have to implemented w/some sort of software semaphore locks
</span><br>
<span class="quotelev1">&gt; (which would add
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; even more overhead).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Bill L.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev1">&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a> &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27322.php">http://www.open-mpi.org/community/lists/users/2015/07/27322.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ============================= Davide Cesari ============================
</span><br>
<span class="quotelev2">&gt; &gt; Dott**(0.5) Davide Cesari
</span><br>
<span class="quotelev2">&gt; &gt; ARPA-Emilia Romagna, Servizio IdroMeteoClima
</span><br>
<span class="quotelev2">&gt; &gt; NWP modelling - Modellistica numerica previsionale
</span><br>
<span class="quotelev2">&gt; &gt; Tel. +39 051525926
</span><br>
<span class="quotelev2">&gt; &gt; ========================================================================
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27331.php">http://www.open-mpi.org/community/lists/users/2015/07/27331.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27332.php">http://www.open-mpi.org/community/lists/users/2015/07/27332.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27332.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
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
