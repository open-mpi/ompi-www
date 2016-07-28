<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 07:39:44 2007" -->
<!-- isoreceived="20071206123944" -->
<!-- sent="Thu, 06 Dec 2007 14:39:36 +0200" -->
<!-- isosent="20071206123936" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call" -->
<!-- id="4757ED88.7060104_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="78C34EBC-4EF4-4B69-814A-3B75A5D78D04_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: remove	excess	ompi_btl_openib_connect_base_open call<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 07:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>In reply to:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
:-)
<br>
&nbsp;Nice catch. Please commit the fix.
<br>
<p>Pasha.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hah!  Sweet; good catch -- feel free to delete that extra call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2007, at 6:42 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; There is a double call to ompi_btl_openib_connect_base_open in
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_mca_setup_qps().  It looks like someone just forgot to
</span><br>
<span class="quotelev2">&gt;&gt; clean-up the previous call when they added the check for the return
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran a quick IMB test over IB to verify everything is still working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/openib/btl_openib_mca.c	(revision 16855)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/openib/btl_openib_mca.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -672,10 +672,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_openib_component.credits_qp = smallest_pp_qp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* Register any MCA params for the connect pseudo-components */
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    ompi_btl_openib_connect_base_open();
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if ( OMPI_SUCCESS != ompi_btl_openib_connect_base_open())
</span><br>
<span class="quotelev2">&gt;&gt; +    if (OMPI_SUCCESS != ompi_btl_openib_connect_base_open())
</span><br>
<span class="quotelev2">&gt;&gt;         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2742.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2740.php">Jeff Squyres: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>In reply to:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
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
