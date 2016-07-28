<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:24:56 2008" -->
<!-- isoreceived="20080521202456" -->
<!-- sent="Wed, 21 May 2008 16:24:01 -0400" -->
<!-- isosent="20080521202401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="A23A6E7D-A970-4A1C-BBFE-400CAF78FCC4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAA68214-4F16-4501-AD0E-C5DBF00F9F7F_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 16:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3971.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3969.php">Don Kerr: "[OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2008, at 3:38 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; It would be great if libibverbs could return two different error
</span><br>
<span class="quotelev2">&gt;&gt; messages
</span><br>
<span class="quotelev2">&gt;&gt; - one for &quot;there's no IB card in this machine&quot; and one for &quot;there's
</span><br>
<span class="quotelev2">&gt;&gt; an IB
</span><br>
<span class="quotelev2">&gt;&gt; card here, but we can't initialize it&quot;.  I think that would make this
</span><br>
<span class="quotelev2">&gt;&gt; argument go away.  Open MPI could probably mimic that behavior by
</span><br>
<span class="quotelev2">&gt;&gt; parsing
</span><br>
<span class="quotelev2">&gt;&gt; the PCI tables, but that sounds ... painful.
</span><br>
<p><p>Thinking about this a bit more -- I think it depends on what kind of  
<br>
errors you are worried about seeing.  IBV does separate the discovery  
<br>
of devices (ibv_get_device_list) from trying to open a device  
<br>
(ibv_open_device).  So hypothetically, we *can* distinguish between  
<br>
these kinds of errors already.
<br>
<p>Do you see devices that are so broken that they don't show up in the  
<br>
list returned from ibv_get_device_list?
<br>
<p>FWIW: the *only* case I'm talking about changing the default for is  
<br>
when ibv_get_device_list returns an empty list (meaning that according  
<br>
to the verbs stack, there are no devices in the host).  I think that  
<br>
we should *always* warn for any kinds of errors that occur after that  
<br>
(e.g., we find a device but can't open it, we find one or more devices  
<br>
but no active ports, etc.).
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
<li><strong>Next message:</strong> <a href="3971.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3969.php">Don Kerr: "[OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
