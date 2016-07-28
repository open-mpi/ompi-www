<?
$subject_val = "Re: [OMPI devel] RFC: new btl descriptor flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 18:23:11 2011" -->
<!-- isoreceived="20111129232311" -->
<!-- sent="Tue, 29 Nov 2011 15:23:04 -0800" -->
<!-- isosent="20111129232304" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new btl descriptor flags" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C058480EC_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1111291032520.54924_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: new btl descriptor flags<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 18:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10047.php">Nathan Hjelm: "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>Previous message:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10042.php">Nathan Hjelm: "[OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may seem trivial, but should we name them:
<br>
<p>#define MCA_BTL_DES_FLAGS_PUT 0x0010
<br>
#define MCA_BTL_DES_FLAGS_GET 0x0020
<br>
<p>Although I see there is some inconsistency in how these flags are named, two of the three original ones have &quot;BTL_DES_FLAGS&quot; in them.
<br>
<p>Rolf 
<br>
<p>rvandevaart_at_[hidden]
<br>
781-275-5358
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, November 29, 2011 12:43 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] RFC: new btl descriptor flags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We need an accurate way to detect if prepare_src/prepare_dst are being
</span><br>
<span class="quotelev1">&gt;called for a get or a put operation. I propose adding two new flags to the btl
</span><br>
<span class="quotelev1">&gt;descriptor (and passing them from ob1/csum/etc):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#define MCA_BTL_DES_PUT 0x0010
</span><br>
<span class="quotelev1">&gt;#define MCA_BTL_DES_GET 0x0020
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Comments? Suggestions? Objections?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10047.php">Nathan Hjelm: "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>Previous message:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10042.php">Nathan Hjelm: "[OMPI devel] RFC: new btl descriptor flags"</a>
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
