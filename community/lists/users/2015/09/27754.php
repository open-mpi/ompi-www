<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 17:00:29 2015" -->
<!-- isoreceived="20150930210029" -->
<!-- sent="Wed, 30 Sep 2015 21:00:12 +0000" -->
<!-- isosent="20150930210012" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="B102743A-C6F6-4176-9E85-8E6441C5493E_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="560BFD8E.5090508_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libfabric/usnic does not compile in 2.x<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 17:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2015, at 11:19 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, and Jeff, for clarification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before I bother you all more without the need, I should probably say I was hoping to use libfabric/OpenMPI on an InfiniBand cluster. Somehow now I feel I have confused this altogether, so maybe I should go one step back:
</span><br>
<p>No worries; happy to answer questions like this.  libfabric is still fairly new, so there's not a lot of colloquial knowledge out there about it.
<br>
<p><span class="quotelev1">&gt;  1. libfabric is hardware independent, and does support Infiniband, right?
</span><br>
<p>In addition to everything Howard said:
<br>
<p>1. One clarification: the Cisco usNIC support does not use InfiniBand (our product is based on Ethernet).
<br>
2. The IB support for libfabric, by definition, adds a little overhead compared to what you can get out of the raw Verbs API (because, at least as of today, libfabric is implemented on top of libibverbs).
<br>
<p><span class="quotelev1">&gt;  2. I read that OpenMPI provides interface to libfabric through btl/usnic and mtl/ofi.  can any of those use libfabric on Infiniband networks?
</span><br>
<p>The usnic BTL transport is specific to the Cisco usNIC solution.  The OFI MTL can be used with any libfabric network that supports the libfabric tag matching interface.  Today, that's the PSM and PSM2 libfabric providers.  I think the MXM libfabric provider is still under development, but I think it's a goal for that provider to also support the libfabric tag matching interface.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
