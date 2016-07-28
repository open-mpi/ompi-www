<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 12:40:05 2006" -->
<!-- isoreceived="20060330174005" -->
<!-- sent="Thu, 30 Mar 2006 19:38:43 +0200" -->
<!-- isosent="20060330173843" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474" -->
<!-- id="20060330173843.GA14265_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="442C0048.1080109_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 12:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0779.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Tim S. Woodall: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<li><strong>In reply to:</strong> <a href="0777.php">Tim S. Woodall: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 30, 2006 at 08:59:04AM -0700, Tim S. Woodall wrote:
<br>
<span class="quotelev1">&gt; Gleb - we seem to be missing btl_mvapi_eager_rdma.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Sory, should be OK now.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gleb_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Author: gleb
</span><br>
<span class="quotelev2">&gt; &gt;Date: 2006-03-30 07:55:31 EST (Thu, 30 Mar 2006)
</span><br>
<span class="quotelev2">&gt; &gt;New Revision: 9474
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/btl_mvapi.h
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/btl_mvapi_component.c
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/btl_mvapi_frag.c
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/btl/mvapi/btl_mvapi_frag.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Log:
</span><br>
<span class="quotelev2">&gt; &gt;Porting of short message RDMA from openib BTL. Endpoint registers circular 
</span><br>
<span class="quotelev2">&gt; &gt;buffer and sends its address and rkey to the peer. Peer uses this buffer 
</span><br>
<span class="quotelev2">&gt; &gt;to eagerly RDMA small message into it. Endpoint polls the buffer for 
</span><br>
<span class="quotelev2">&gt; &gt;message arrival before checking HP/LP QPs. Set btl_mvapi_use_eager_rdma to 
</span><br>
<span class="quotelev2">&gt; &gt;1 to enable it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Diff not shown due to size (35012 bytes).
</span><br>
<span class="quotelev2">&gt; &gt;To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;	svn diff -r 9473:9474 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt;svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0779.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Tim S. Woodall: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<li><strong>In reply to:</strong> <a href="0777.php">Tim S. Woodall: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
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
