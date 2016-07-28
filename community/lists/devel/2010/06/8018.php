<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 05:03:33 2010" -->
<!-- isoreceived="20100602090333" -->
<!-- sent="Wed, 2 Jun 2010 11:08:16 +0200 (CEST)" -->
<!-- isosent="20100602090816" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1006021105560.3819_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2AC3211D-042C-4908-A693-7FF5008F461C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 05:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8017.php">Number Cruncher: "[OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>In reply to:</strong> <a href="8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 1 Jun 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 31, 2010, at 5:10 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my case, the error happens in :
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_openib_add_procs()
</span><br>
<span class="quotelev2">&gt;&gt;      mca_btl_openib_size_queues()
</span><br>
<span class="quotelev2">&gt;&gt;        adjust_cq()
</span><br>
<span class="quotelev2">&gt;&gt;          ibv_create_cq_compat()
</span><br>
<span class="quotelev2">&gt;&gt;            ibv_create_cq()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you nail this down any further?  If I modify adjust_cq() to always 
</span><br>
<span class="quotelev1">&gt; return OMPI_ERROR, I see the openib BTL fail over properly to the TCP 
</span><br>
<span class="quotelev1">&gt; BTL.
</span><br>
It must be because create_cq actually creates cqs. Try to apply this 
<br>
patch which makes create_cq_compat() *not* creates the cqs and return an 
<br>
error instead :
<br>
========================================================================
<br>
diff -r 13df81d1d862 ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c  Fri May 28 14:50:25 2010 +0200
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c  Wed Jun 02 10:56:57 2010 +0200
<br>
@@ -146,6 +146,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int cqe, void *cq_context, struct ibv_comp_channel *channel,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int comp_vector)
<br>
&nbsp;&nbsp;{
<br>
+    return OMPI_ERROR;
<br>
&nbsp;&nbsp;#if OMPI_IBV_CREATE_CQ_ARGS == 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ibv_create_cq(context, cqe, channel);
<br>
&nbsp;&nbsp;#else
<br>
========================================================================
<br>
<p>You should see MPI_Init complete nicely and your application segfault on 
<br>
the next MPI operation.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8017.php">Number Cruncher: "[OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>In reply to:</strong> <a href="8013.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8019.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
