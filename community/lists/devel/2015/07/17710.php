<?
$subject_val = "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 11:22:17 2015" -->
<!-- isoreceived="20150725152217" -->
<!-- sent="Sat, 25 Jul 2015 08:22:12 -0700" -->
<!-- isosent="20150725152212" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo" -->
<!-- id="32D5FA1A-0FF3-4DBD-9C7A-BA2A235F972D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0642AEA9-2BD5-4A23-AB84-83DC2E597359_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-25 11:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="17709.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well shazbot - you were correct. I posted the wrong tarball. While tracking this down, we also learned that some other changes didn&#226;&#128;&#153;t get into the 1.8 series that should have, so it looks like a 1.8.8 is necessary regardless.
<br>
<p>Thanks for detecting this mistake
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jul 24, 2015, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...the most likely cause is that I generated the tag late - not immediately upon release. I tried to get the sha correct, but probably missed it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It&#226;&#128;&#153;s possible that other changes came in afterwards, but I can take a look and see. The oob connection patch sounds strange, and I thought we had all the rdma things...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2015, at 10:12 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why the contents of the 1.8.7 release tarball versus the v1.8.7 tag in
</span><br>
<span class="quotelev2">&gt;&gt; ompi-release repo differ? Any chance this was a mistake and the
</span><br>
<span class="quotelev2">&gt;&gt; release tarball was generated with the wrong tree?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course I do not care about VERSION, but there are two files related
</span><br>
<span class="quotelev2">&gt;&gt; to RMA that are different. The release tarball files have a
</span><br>
<span class="quotelev2">&gt;&gt; use-after-free bug that make my tests segfault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ diff -r --brief ompi-release openmpi-1.8.7 | grep -v Only
</span><br>
<span class="quotelev2">&gt;&gt; Files ompi-release/ompi/mca/osc/rdma/osc_rdma_active_target.c and
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.8.7/ompi/mca/osc/rdma/osc_rdma_active_target.c differ
</span><br>
<span class="quotelev2">&gt;&gt; Files ompi-release/orte/mca/oob/tcp/oob_tcp_connection.c and
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.8.7/orte/mca/oob/tcp/oob_tcp_connection.c differ
</span><br>
<span class="quotelev2">&gt;&gt; Files ompi-release/VERSION and openmpi-1.8.7/VERSION differ
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt;&gt; ============
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist
</span><br>
<span class="quotelev2">&gt;&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev2">&gt;&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev2">&gt;&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev2">&gt;&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev2">&gt;&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17699.php">http://www.open-mpi.org/community/lists/devel/2015/07/17699.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17711.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warning with 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="17709.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17700.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
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
