<?
$subject_val = "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 00:35:36 2012" -->
<!-- isoreceived="20121101043536" -->
<!-- sent="Thu, 1 Nov 2012 00:35:29 -0400" -->
<!-- isosent="20121101043529" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication" -->
<!-- id="E69B11A2-2AC8-4CC3-8F91-A92436D44148_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50917DDB.7010602_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 00:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Previous message:</strong> <a href="11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11715.php">Paul Kapinos: "[OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It will depend on the protocol used by the OpenIB BTL to wire up the peers (OOB, UDCM, RDMACM). In the worst case (OOB), the connection process will be done using TCP. We are looking at a handshake (over TCP 40 ms latency for a one-way message is standard, the handshake will take at least 80ms). Moreover, we only check the status of the sockets once in a while (to avoid impacting the performance), so this should be added to the handshake as well. Plus the time to setup the local queues (which should be significantly smaller than all the others). The connection time is going up pretty quickly !
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 31, 2012, at 15:36 , Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI is clever and use by default multiple IB adapters, if available.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI is lazy and establish connections only iff needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both is good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have kinda special nodes: up to 16 sockets, 128 cores, 4 boards, 4 IB cards. Multirail works!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The crucial thing is, that starting with v1.6.1 the latency of the very first PingPong sample between two nodes take really a lot of time - some 100x - 200x of usual latency. You cannot see this using usual latency benchmark(*) because they tend to omit the first samples as &quot;warmup phase&quot;, but we use a kinda self-written parallel test which clearly show this (and let me to muse some days).
</span><br>
<span class="quotelev1">&gt; If Miltirail is forbidden (-mca btl_openib_max_btls 1), or if v.1.5.3 used, or if the MPI processes are preconnected (<a href="http://www.open-mpi.org/faq/?category=running#mpi-preconnect">http://www.open-mpi.org/faq/?category=running#mpi-preconnect</a>) there is no such huge latency outliers for the first sample.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, we know about the warm-up and lazy connections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But 200x ?!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments about that is OK so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (*) E.g. HPCC explicitely say in <a href="http://icl.cs.utk.edu/hpcc/faq/index.html#132">http://icl.cs.utk.edu/hpcc/faq/index.html#132</a>
</span><br>
<span class="quotelev2">&gt; &gt; Additional startup latencies are masked out by starting the measurement after
</span><br>
<span class="quotelev2">&gt; &gt; one non-measured ping-pong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. Sorry for cross-posting to both Users and Developers, but my last questions to Users have no reply until yet, so trying to broadcast...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Previous message:</strong> <a href="11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11715.php">Paul Kapinos: "[OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
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
