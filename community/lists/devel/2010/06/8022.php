<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 08:49:43 2010" -->
<!-- isoreceived="20100602124943" -->
<!-- sent="Wed, 2 Jun 2010 08:49:38 -0400" -->
<!-- isosent="20100602124938" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="32FB9480-9458-4B59-B898-7C10A2E3792B_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 08:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>In reply to:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8029.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8029.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 5:08 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; It must be because create_cq actually creates cqs. Try to apply this
</span><br>
<span class="quotelev1">&gt; patch which makes create_cq_compat() *not* creates the cqs and return an
</span><br>
<span class="quotelev1">&gt; error instead :
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
<span class="quotelev1">&gt;           int cqe, void *cq_context, struct ibv_comp_channel *channel,
</span><br>
<span class="quotelev1">&gt;           int comp_vector)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt; +    return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;   #if OMPI_IBV_CREATE_CQ_ARGS == 3
</span><br>
<span class="quotelev1">&gt;       return ibv_create_cq(context, cqe, channel);
</span><br>
<span class="quotelev1">&gt;   #else
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<p>Don't you mean return NULL?  This function is supposed to return a (struct ibv_cq *).
<br>
<p><span class="quotelev1">&gt; You should see MPI_Init complete nicely and your application segfault on
</span><br>
<span class="quotelev1">&gt; the next MPI operation.
</span><br>
<p>That wouldn't surprise me if you return OMPI_ERROR here, since it's expecting a pointer return value (OMPI_ERROR != NULL, so the error check from ibv_create_cq_compat() won't detect the problem properly).  
<br>
<p>Sidenote: why did we call it ibv_create_cq_compat()?  That seems like a namespace violation, and is quite confusing.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8021.php">Jeff Squyres: "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<li><strong>In reply to:</strong> <a href="8018.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8029.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8029.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
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
