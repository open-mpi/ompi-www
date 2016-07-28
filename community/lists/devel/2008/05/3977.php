<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 17:03:01 2008" -->
<!-- isoreceived="20080521210301" -->
<!-- sent="Wed, 21 May 2008 17:02:53 -0400 (EDT)" -->
<!-- isosent="20080521210253" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805211658430.15227_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E62D2963-240D-4111-8356-FB47B0C43965_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 17:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3978.php">Jennis Pruett: "[OMPI devel] Does Open MPI class exist?"</a>
<li><strong>Previous message:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm only concerned about the case where there's an IB card, the user
</span><br>
<span class="quotelev2">&gt;&gt; expects the IB card to be used, and the IB card isn't used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you put in a site wide
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl = ^tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to avoid the problem?  If the IB card fails, then you'll get
</span><br>
<span class="quotelev1">&gt; unreachable MPI errors.
</span><br>
<p>And how many users are going to figure that one out before complaining 
<br>
loudly?  That's what LANL did (probably still does) and it worked great 
<br>
there, but that doesn't mean that others will figure that out (after all, 
<br>
not everyone has an OMPI developer on staff...).
<br>
<p><span class="quotelev2">&gt;&gt; If the
</span><br>
<span class="quotelev2">&gt;&gt; changes don't silence a warning in that situation, I'm fine with
</span><br>
<span class="quotelev2">&gt;&gt; whatever
</span><br>
<span class="quotelev2">&gt;&gt; you do.  But does ibv_get_device_list return an HCA when the port is
</span><br>
<span class="quotelev2">&gt;&gt; down
</span><br>
<span class="quotelev2">&gt;&gt; (because the SM failed and the machine rebooted since that time)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<p>If this is true (for some reason I thought it wasn't), then I think we'd 
<br>
actually be ok with your proposal, but you're right, you'd need something 
<br>
new in the IB btl.  I'm not concerned about the dual rail issue -- if 
<br>
you're smart enough to configure dual rail IB, you're smart enough to 
<br>
figure out OMPI mca params.  I'm not sure the same is true for a simple 
<br>
delivered from the white box vendor IB setup that barely works on a good 
<br>
day (and unfortunately, there seems to be evidence that these exist).
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3978.php">Jennis Pruett: "[OMPI devel] Does Open MPI class exist?"</a>
<li><strong>Previous message:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
