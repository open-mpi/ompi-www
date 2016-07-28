<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:30:07 2008" -->
<!-- isoreceived="20080521203007" -->
<!-- sent="Wed, 21 May 2008 16:29:59 -0400 (EDT)" -->
<!-- isosent="20080521202959" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805211626000.15227_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A23A6E7D-A970-4A1C-BBFE-400CAF78FCC4_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-21 16:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3971.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 21, 2008, at 3:38 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be great if libibverbs could return two different error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - one for &quot;there's no IB card in this machine&quot; and one for &quot;there's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; card here, but we can't initialize it&quot;.  I think that would make this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument go away.  Open MPI could probably mimic that behavior by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parsing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PCI tables, but that sounds ... painful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thinking about this a bit more -- I think it depends on what kind of
</span><br>
<span class="quotelev1">&gt; errors you are worried about seeing.  IBV does separate the discovery
</span><br>
<span class="quotelev1">&gt; of devices (ibv_get_device_list) from trying to open a device
</span><br>
<span class="quotelev1">&gt; (ibv_open_device).  So hypothetically, we *can* distinguish between
</span><br>
<span class="quotelev1">&gt; these kinds of errors already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you see devices that are so broken that they don't show up in the
</span><br>
<span class="quotelev1">&gt; list returned from ibv_get_device_list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: the *only* case I'm talking about changing the default for is
</span><br>
<span class="quotelev1">&gt; when ibv_get_device_list returns an empty list (meaning that according
</span><br>
<span class="quotelev1">&gt; to the verbs stack, there are no devices in the host).  I think that
</span><br>
<span class="quotelev1">&gt; we should *always* warn for any kinds of errors that occur after that
</span><br>
<span class="quotelev1">&gt; (e.g., we find a device but can't open it, we find one or more devices
</span><br>
<span class="quotelev1">&gt; but no active ports, etc.).
</span><br>
<p>Previously, there has not been such a distinction, so I really have no 
<br>
idea which caused the openib BTL throw its error (and never really cared, 
<br>
as it was always somebody else's problem at that point).
<br>
<p>I'm only concerned about the case where there's an IB card, the user 
<br>
expects the IB card to be used, and the IB card isn't used.  If the 
<br>
changes don't silence a warning in that situation, I'm fine with whatever 
<br>
you do.  But does ibv_get_device_list return an HCA when the port is down 
<br>
(because the SM failed and the machine rebooted since that time)?  If not, 
<br>
we still ahve a (fairly common, unfortunately) error case that we need to 
<br>
report (in my opinion).
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3971.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
