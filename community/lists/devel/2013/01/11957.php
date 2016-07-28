<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 11:40:37 2013" -->
<!-- isoreceived="20130122164037" -->
<!-- sent="Tue, 22 Jan 2013 16:40:32 +0000" -->
<!-- isosent="20130122164032" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E08BD9F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF1A049ABC19F94A9FC22A9D3BCDE8F97879303FB2_at_GEORGE.Emea.Arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New ARM patch<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 11:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11958.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11956.php">Barrett, Brian W: "[OMPI devel] RFC: RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11955.php">Leif Lindholm: "[OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11967.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11967.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Leif --
<br>
<p>We talked about this a bit on our weekly call today. 
<br>
<p>Just to be sure: are you saying that George's patches are *functionally correct* for ARM5/6/7 (and broken for ARM 4), but it would be better to organize the code a bit better?
<br>
<p>If that is correct, was ARM4 working before?
<br>
<p>If ARM4 was working before, how important is it?  I.e., would it be ok to accept George's stuff for 1.7.0, and then accept any improvements/reshuffle/etc. from you for 1.7.1?
<br>
<p><p><p>On Jan 21, 2013, at 12:15 PM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any chance of r27882 being reverted?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I told the Fedora guys when that patch originally surfaced[1],
</span><br>
<span class="quotelev1">&gt; I'm not overly fond of
</span><br>
<span class="quotelev1">&gt; - copying source files around as part of the configure step
</span><br>
<span class="quotelev1">&gt; - having separate source files for ARMv6 and ARMv7, when those differences
</span><br>
<span class="quotelev1">&gt;  should be easily separated through macros (and would be reusable for 32-bit
</span><br>
<span class="quotelev1">&gt;  ARMv8).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I might have mentioned that bit only on a separate thread on the Fedora list, but the ARMv4 support isn't actually correct (the ASM uses ARMv5-only operations).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My alternate solution, the basic idea of which I posted over there [2] was to separate ARMv5 and earlier from ARM. Effectively separating the atomics implementation at the boundary where The ARM architecture got load-linked/store-conditional, rather than having a separate source file for every architecture version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://lists.fedoraproject.org/pipermail/arm/2012-November/004434.html">https://lists.fedoraproject.org/pipermail/arm/2012-November/004434.html</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="https://lists.fedoraproject.org/pipermail/arm/2012-November/004460.html">https://lists.fedoraproject.org/pipermail/arm/2012-November/004460.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11958.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11956.php">Barrett, Brian W: "[OMPI devel] RFC: RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11955.php">Leif Lindholm: "[OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11967.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11967.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
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
