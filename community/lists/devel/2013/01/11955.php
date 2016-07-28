<?
$subject_val = "[OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 12:15:43 2013" -->
<!-- isoreceived="20130121171543" -->
<!-- sent="Mon, 21 Jan 2013 17:15:35 +0000" -->
<!-- isosent="20130121171535" -->
<!-- name="Leif Lindholm" -->
<!-- email="Leif.Lindholm_at_[hidden]" -->
<!-- subject="[OMPI devel] New ARM patch" -->
<!-- id="EF1A049ABC19F94A9FC22A9D3BCDE8F97879303FB2_at_GEORGE.Emea.Arm.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] New ARM patch<br>
<strong>From:</strong> Leif Lindholm (<em>Leif.Lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 12:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11956.php">Barrett, Brian W: "[OMPI devel] RFC: RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11954.php">Kawashima, Takahiro: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Any chance of r27882 being reverted?
<br>
<p>As I told the Fedora guys when that patch originally surfaced[1],
<br>
I'm not overly fond of
<br>
- copying source files around as part of the configure step
<br>
- having separate source files for ARMv6 and ARMv7, when those differences
<br>
&nbsp;&nbsp;should be easily separated through macros (and would be reusable for 32-bit
<br>
&nbsp;&nbsp;ARMv8).
<br>
<p>Also, I might have mentioned that bit only on a separate thread on the Fedora list, but the ARMv4 support isn't actually correct (the ASM uses ARMv5-only operations).
<br>
<p>My alternate solution, the basic idea of which I posted over there [2] was to separate ARMv5 and earlier from ARM. Effectively separating the atomics implementation at the boundary where The ARM architecture got load-linked/store-conditional, rather than having a separate source file for every architecture version.
<br>
<p>[1] <a href="https://lists.fedoraproject.org/pipermail/arm/2012-November/004434.html">https://lists.fedoraproject.org/pipermail/arm/2012-November/004434.html</a>
<br>
[2] <a href="https://lists.fedoraproject.org/pipermail/arm/2012-November/004460.html">https://lists.fedoraproject.org/pipermail/arm/2012-November/004460.html</a>
<br>
<p>Best Regards,
<br>
<p>Leif
<br>
<p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11956.php">Barrett, Brian W: "[OMPI devel] RFC: RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11954.php">Kawashima, Takahiro: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
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
