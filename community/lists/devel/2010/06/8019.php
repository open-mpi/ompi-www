<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 05:17:48 2010" -->
<!-- isoreceived="20100602091748" -->
<!-- sent="Wed, 2 Jun 2010 05:17:40 -0400" -->
<!-- isosent="20100602091740" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="23C0349F-63D5-4CB5-BB3B-D4D2595ACDCB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1006021105560.3819_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 05:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8020.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have any IB nodes, but I'm interested to see how this happens. What I would like to understand here is  how do we get back in the OpenIB code if the add_procs failed for the BTL ...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 2, 2010, at 05:08 , Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 1 Jun 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 31, 2010, at 5:10 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my case, the error happens in :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mca_btl_openib_add_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mca_btl_openib_size_queues()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       adjust_cq()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ibv_create_cq_compat()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ibv_create_cq()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you nail this down any further?  If I modify adjust_cq() to always return OMPI_ERROR, I see the openib BTL fail over properly to the TCP BTL.
</span><br>
<span class="quotelev1">&gt; It must be because create_cq actually creates cqs. Try to apply this patch which makes create_cq_compat() *not* creates the cqs and return an error instead :
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; diff -r 13df81d1d862 ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib.c  Fri May 28 14:50:25 2010 +0200
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib.c  Wed Jun 02 10:56:57 2010 +0200
</span><br>
<span class="quotelev1">&gt; @@ -146,6 +146,7 @@
</span><br>
<span class="quotelev1">&gt;         int cqe, void *cq_context, struct ibv_comp_channel *channel,
</span><br>
<span class="quotelev1">&gt;         int comp_vector)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; +    return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; #if OMPI_IBV_CREATE_CQ_ARGS == 3
</span><br>
<span class="quotelev1">&gt;     return ibv_create_cq(context, cqe, channel);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should see MPI_Init complete nicely and your application segfault on the next MPI operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
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
<li><strong>Next message:</strong> <a href="8020.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
