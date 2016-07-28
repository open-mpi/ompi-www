<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 06:49:51 2007" -->
<!-- isoreceived="20071206114951" -->
<!-- sent="Thu, 6 Dec 2007 06:49:46 -0500" -->
<!-- isosent="20071206114946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call" -->
<!-- id="78C34EBC-4EF4-4B69-814A-3B75A5D78D04_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071205234202.GA26444_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 06:49:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Previous message:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>In reply to:</strong> <a href="2736.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2741.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Reply:</strong> <a href="2741.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah!  Sweet; good catch -- feel free to delete that extra call.
<br>
<p><p>On Dec 5, 2007, at 6:42 PM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; There is a double call to ompi_btl_openib_connect_base_open in
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_mca_setup_qps().  It looks like someone just forgot to
</span><br>
<span class="quotelev1">&gt; clean-up the previous call when they added the check for the return
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran a quick IMB test over IB to verify everything is still working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_mca.c	(revision 16855)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_mca.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -672,10 +672,7 @@
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_component.credits_qp = smallest_pp_qp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Register any MCA params for the connect pseudo-components */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    ompi_btl_openib_connect_base_open();
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if ( OMPI_SUCCESS != ompi_btl_openib_connect_base_open())
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_SUCCESS != ompi_btl_openib_connect_base_open())
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>Previous message:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>In reply to:</strong> <a href="2736.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2741.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Reply:</strong> <a href="2741.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call"</a>
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
