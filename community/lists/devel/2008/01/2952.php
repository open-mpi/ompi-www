<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 09:49:03 2008" -->
<!-- isoreceived="20080110144903" -->
<!-- sent="Thu, 10 Jan 2008 09:48:29 -0500" -->
<!-- isosent="20080110144829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement" -->
<!-- id="6B44F7A6-A513-49C5-BBA4-C92438D7B523_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4785E2BC.3080104_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 09:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2008, at 4:17 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This patch also contains XRC compile time disablement (per Jeff's
</span><br>
<span class="quotelev2">&gt;&gt; patch).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Need make sure that CM stuff will be disabled during compile tine if  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; is not installed on machine.
</span><br>
<p>The RDMA CM and IBCM stuff has not yet been implemented (was waiting  
<br>
for this functionality first).  But configure-time checks for those  
<br>
functions will, of course, be included.  The CPC's for RDMA CM and  
<br>
IBCM will not be compiled if the support libraries are not available,  
<br>
and therefore they won't be available for selection at run-time.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
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
