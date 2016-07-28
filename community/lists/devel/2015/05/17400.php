<?
$subject_val = "Re: [OMPI devel] Warnings about malloc(0) in debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 16:39:11 2015" -->
<!-- isoreceived="20150512203911" -->
<!-- sent="Tue, 12 May 2015 13:39:07 -0700" -->
<!-- isosent="20150512203907" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings about malloc(0) in debug build" -->
<!-- id="9EF82225-75D5-49AF-8DBA-52387B4C1D0E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEcYPwB2uk4LEzXh2qgm1gPCeDaba+ihqvK5Ep3KBZchzcXWmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings about malloc(0) in debug build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 16:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17401.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17399.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>In reply to:</strong> <a href="17388.php">Lisandro Dalcin: "[OMPI devel] Warnings about malloc(0) in debug build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I silenced these (Nathan reviewed) - will be in nightly 1.8 tarball tomorrow. It will return an error when we get a zero size as that shouldn&#226;&#128;&#153;t be happening, so it might expose some other error(s)
<br>
<p><p><span class="quotelev1">&gt; On May 7, 2015, at 1:47 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks, I've just built 1.8.5 to test with mpi4py. My configure line was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/devel/mpi/openmpi/1.8.5 --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While running the tests, my terminal was flooded with malloc(0)
</span><br>
<span class="quotelev1">&gt; warnings, below a list of unique lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (nbc_internal.h, 505)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_rdma_active_target.c, 74)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (osc_rdma_active_target.c, 76)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17388.php">http://www.open-mpi.org/community/lists/devel/2015/05/17388.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17401.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17399.php">Nathan Hjelm: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>In reply to:</strong> <a href="17388.php">Lisandro Dalcin: "[OMPI devel] Warnings about malloc(0) in debug build"</a>
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
