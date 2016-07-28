<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 07:55:16 2008" -->
<!-- isoreceived="20080714115516" -->
<!-- sent="Mon, 14 Jul 2008 14:55:10 +0300" -->
<!-- isosent="20080714115510" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487B3E9E.8080907_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="70ABBCB0-D542-41FE-9A92-797F5FAED5AF_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-14 07:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can add in head of  query function something like :
<br>
<p>if (!mca_btl_openib_component.cpc_explicitly_defined)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_NOT_SUPPORTED;
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 14, 2008, at 3:59 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems to be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, it's &quot;fixed&quot; in that Pasha turned off the error message.  But 
</span><br>
<span class="quotelev1">&gt; the same issue is undoubtedly happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was asking for something a little stronger: perhaps we should 
</span><br>
<span class="quotelev1">&gt; actually have IBCM not try to be used unless it's specifically asked 
</span><br>
<span class="quotelev1">&gt; for.  Or maybe it shouldn't even build itself unless specifically 
</span><br>
<span class="quotelev1">&gt; asked for (which would obviously take care of the run-time issues as 
</span><br>
<span class="quotelev1">&gt; well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The whole point of doing IBCM was to have a simple and fast mechanism 
</span><br>
<span class="quotelev1">&gt; for IB wireup.  But with these two problems (IBCM not properly 
</span><br>
<span class="quotelev1">&gt; installed on all systems, and ib_cm_listen() fails periodically), it 
</span><br>
<span class="quotelev1">&gt; more or less makes it unusable.  Therefore we shouldn't recommend it 
</span><br>
<span class="quotelev1">&gt; to production customers, and per precedent elsewhere in the code base, 
</span><br>
<span class="quotelev1">&gt; we should either not build it by default and/or not use it unless 
</span><br>
<span class="quotelev1">&gt; specifically asked for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
