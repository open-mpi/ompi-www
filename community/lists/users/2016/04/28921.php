<?
$subject_val = "Re: [OMPI users] libfabric verb provider for iWARP RNIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 17:10:23 2016" -->
<!-- isoreceived="20160411211023" -->
<!-- sent="Mon, 11 Apr 2016 21:10:20 +0000" -->
<!-- isosent="20160411211020" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric verb provider for iWARP RNIC" -->
<!-- id="6BC46862-7B6B-4914-9368-5F4D2869BDA8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDj+oX_Ro7R+MaVmFjTD60KnsHZVU7EeKBBqxNmHBmg2Fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libfabric verb provider for iWARP RNIC<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 17:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28922.php">Stefan Friedel: "[OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>In reply to:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 11, 2016, at 2:38 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the vendor of a new type of fabric wants to include support for OpenMPI, then, as long as they can implement a libfabric provider, they can use the OFI MTL without adding any code to the OpenMPI source tree itself.
</span><br>
<p>If you implement the tag matching interface in libfabric, that is likely a true statement.
<br>
<p><span class="quotelev1">&gt; Is the above statement correct? Note that I am trying to contrast against the other possibility, implementing a BTL, that does not add anything to the libfabrics source tree but adds to OpenMPI source tree instead.
</span><br>
<p>That's another way to go.  E.g., that's what we did with the Cisco usNIC devices (because our devices do not yet support the libfabric tag matching interface).
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
<li><strong>Next message:</strong> <a href="28922.php">Stefan Friedel: "[OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>In reply to:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
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
