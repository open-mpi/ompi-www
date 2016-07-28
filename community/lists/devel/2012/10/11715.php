<?
$subject_val = "[OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 15:37:03 2012" -->
<!-- isoreceived="20121031193703" -->
<!-- sent="Wed, 31 Oct 2012 20:36:59 +0100" -->
<!-- isosent="20121031193659" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication" -->
<!-- id="50917DDB.7010602_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 15:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11716.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11714.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>Open MPI is clever and use by default multiple IB adapters, if available.
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup</a>
<br>
<p>Open MPI is lazy and establish connections only iff needed.
<br>
<p>Both is good.
<br>
<p>We have kinda special nodes: up to 16 sockets, 128 cores, 4 boards, 4 IB cards. 
<br>
Multirail works!
<br>
<p>The crucial thing is, that starting with v1.6.1 the latency of the very first 
<br>
PingPong sample between two nodes take really a lot of time - some 100x - 200x 
<br>
of usual latency. You cannot see this using usual latency benchmark(*) because 
<br>
they tend to omit the first samples as &quot;warmup phase&quot;, but we use a kinda 
<br>
self-written parallel test which clearly show this (and let me to muse some days).
<br>
If Miltirail is forbidden (-mca btl_openib_max_btls 1), or if v.1.5.3 used, or 
<br>
if the MPI processes are preconnected 
<br>
(<a href="http://www.open-mpi.org/faq/?category=running#mpi-preconnect">http://www.open-mpi.org/faq/?category=running#mpi-preconnect</a>) there is no such 
<br>
huge latency outliers for the first sample.
<br>
<p>Well, we know about the warm-up and lazy connections.
<br>
<p>But 200x ?!
<br>
<p>Any comments about that is OK so?
<br>
<p>Best,
<br>
<p>Paul Kapinos
<br>
<p>(*) E.g. HPCC explicitely say in <a href="http://icl.cs.utk.edu/hpcc/faq/index.html#132">http://icl.cs.utk.edu/hpcc/faq/index.html#132</a>
<br>
<span class="quotelev1"> &gt; Additional startup latencies are masked out by starting the measurement after
</span><br>
<span class="quotelev1"> &gt; one non-measured ping-pong.
</span><br>
<p>P.S. Sorry for cross-posting to both Users and Developers, but my last questions 
<br>
to Users have no reply until yet, so trying to broadcast...
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11715/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11716.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11714.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
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
