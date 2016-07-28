<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 08:28:29 2008" -->
<!-- isoreceived="20080714122829" -->
<!-- sent="Mon, 14 Jul 2008 08:28:23 -0400" -->
<!-- isosent="20080714122823" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="3E701F6F-9A1D-4D3B-88BC-251F37818E0C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487B3E9E.8080907_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 08:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4340.php">Terry Dontje: "Re: [OMPI devel] SM latency regression"</a>
<li><strong>Previous message:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 7:55 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; I can add in head of  query function something like :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (!mca_btl_openib_component.cpc_explicitly_defined)
</span><br>
<span class="quotelev1">&gt;   return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<p>That sounds reasonable until the ibcm userspace library issues can be  
<br>
sorted out.  Then perhaps this check can be removed.
<br>
<p>Should we not even build support for it?
<br>
<p>PRO: don't even allow the possibility of running with it, because we  
<br>
know that there are issues with the ibcm userspace library (i.e.,  
<br>
reduce problem reports from users)
<br>
<p>PRO: users don't have to have libibcm installed on compute nodes  
<br>
(we've actually gotten some complaints about this)
<br>
<p>CON: OMPI is not release-synchronized with OFED; OFED could be  
<br>
released with a fixed ibcm userspace library, but it still wouldn't be  
<br>
built by default in OMPI
<br>
<p>CON: users already have to have librdmacm installed on the compute  
<br>
notes for the RDMA CM (e.g., probably mainly for iWARP support);  
<br>
adding ibcm and rdmacm user libs at the same time might actually be  
<br>
better (rather than rdmacm in v1.3 and ibcm in a future version)
<br>
<p>Thoughts?
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
<li><strong>Next message:</strong> <a href="4340.php">Terry Dontje: "Re: [OMPI devel] SM latency regression"</a>
<li><strong>Previous message:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4338.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
