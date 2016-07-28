<?
$subject_val = "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 06:35:12 2012" -->
<!-- isoreceived="20121101103512" -->
<!-- sent="Thu, 01 Nov 2012 06:35:37 -0400" -->
<!-- isosent="20121101103537" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication" -->
<!-- id="50925079.3080503_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 06:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11730.php">Kenneth A. Lloyd: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11715.php">Paul Kapinos: "[OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, the first 16 or so messages over the openib btl uses the send/recv 
<br>
API as opposed to rdma which is significantly faster.  I am not sure as 
<br>
to how 1.5.3 and multi-rail affects this but the preconnected I believe 
<br>
short circuits when one cuts over to use rdma for eager messages.
<br>
<p>--td
<br>
<p>On 10/31/2012 3:36 PM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hello all,
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
<span class="quotelev1">&gt; We have kinda special nodes: up to 16 sockets, 128 cores, 4 boards, 4 
</span><br>
<span class="quotelev1">&gt; IB cards. Multirail works!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The crucial thing is, that starting with v1.6.1 the latency of the 
</span><br>
<span class="quotelev1">&gt; very first PingPong sample between two nodes take really a lot of time 
</span><br>
<span class="quotelev1">&gt; - some 100x - 200x of usual latency. You cannot see this using usual 
</span><br>
<span class="quotelev1">&gt; latency benchmark(*) because they tend to omit the first samples as 
</span><br>
<span class="quotelev1">&gt; &quot;warmup phase&quot;, but we use a kinda self-written parallel test which 
</span><br>
<span class="quotelev1">&gt; clearly show this (and let me to muse some days).
</span><br>
<span class="quotelev1">&gt; If Miltirail is forbidden (-mca btl_openib_max_btls 1), or if v.1.5.3 
</span><br>
<span class="quotelev1">&gt; used, or if the MPI processes are preconnected 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/faq/?category=running#mpi-preconnect">http://www.open-mpi.org/faq/?category=running#mpi-preconnect</a>) there 
</span><br>
<span class="quotelev1">&gt; is no such huge latency outliers for the first sample.
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
<span class="quotelev1">&gt; (*) E.g. HPCC explicitely say in 
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/hpcc/faq/index.html#132">http://icl.cs.utk.edu/hpcc/faq/index.html#132</a>
</span><br>
<span class="quotelev2">&gt; &gt; Additional startup latencies are masked out by starting the 
</span><br>
<span class="quotelev1">&gt; measurement after
</span><br>
<span class="quotelev2">&gt; &gt; one non-measured ping-pong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Sorry for cross-posting to both Users and Developers, but my last 
</span><br>
<span class="quotelev1">&gt; questions to Users have no reply until yet, so trying to broadcast...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11730.php">Kenneth A. Lloyd: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11715.php">Paul Kapinos: "[OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
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
