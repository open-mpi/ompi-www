<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 10:59:08 2006" -->
<!-- isoreceived="20060330155908" -->
<!-- sent="Thu, 30 Mar 2006 08:59:04 -0700" -->
<!-- isosent="20060330155904" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474" -->
<!-- id="442C0048.1080109_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200603301255.k2UCttoO016430_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 10:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Brian Barrett: "[OMPI devel] svn web outage tomorrow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<li><strong>Reply:</strong> <a href="0778.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb - we seem to be missing btl_mvapi_eager_rdma.h
<br>
<p><p><p>gleb_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2006-03-30 07:55:31 EST (Thu, 30 Mar 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 9474
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/Makefile.am
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_component.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_frag.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_frag.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Porting of short message RDMA from openib BTL. Endpoint registers circular buffer and sends its address and rkey to the peer. Peer uses this buffer to eagerly RDMA small message into it. Endpoint polls the buffer for message arrival before checking HP/LP QPs. Set btl_mvapi_use_eager_rdma to 1 to enable it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (35012 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 9473:9474 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Brian Barrett: "[OMPI devel] svn web outage tomorrow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
<li><strong>Reply:</strong> <a href="0778.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9474"</a>
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
