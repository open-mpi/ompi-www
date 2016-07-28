<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 09:04:27 2008" -->
<!-- isoreceived="20080717130427" -->
<!-- sent="Thu, 17 Jul 2008 16:04:21 +0300" -->
<!-- isosent="20080717130421" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487F4355.3010409_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="810783A8-A957-4E7D-A772-597B33A678F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-17 09:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 16, 2008, at 11:07 AM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha added configure switches for this about a week ago:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --en|disable-openib-ibcm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --en|disable-openib-rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; I like these flags but I thought there was going to be a run time 
</span><br>
<span class="quotelev2">&gt;&gt; check for cases where Open MPI is built on a system that has ibcm 
</span><br>
<span class="quotelev2">&gt;&gt; support but is later run on a system without ibcm support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, there are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - if the /dev/infiniband/ucm* files aren't there, we silently return 
</span><br>
<span class="quotelev1">&gt; &quot;not supported&quot; and skip ibcm
</span><br>
<span class="quotelev1">&gt; - if ib_cm_open_device() (the first function call) fails, we assume 
</span><br>
<span class="quotelev1">&gt; that IBCM simply isn't supported on this platform and silently return 
</span><br>
<span class="quotelev1">&gt; &quot;not supported&quot; and skip ibcm
</span><br>
<span class="quotelev1">&gt;
</span><br>
Right not we are skipping the IBCM all time. Only if user specify IBCM 
<br>
explicitly via include/exclude interface the IBCM will be used.
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4375.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4373.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
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
