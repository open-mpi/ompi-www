<?
$subject_val = "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 15:17:43 2011" -->
<!-- isoreceived="20110802191743" -->
<!-- sent="Tue, 2 Aug 2011 15:17:38 -0400" -->
<!-- isosent="20110802191738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly" -->
<!-- id="1877A59A-8957-4EAA-8199-62B5FEEAB41E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E382B27.3020502_at_arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 15:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9588.php">Jeff Squyres: "[OMPI devel] MXM question"</a>
<li><strong>Previous message:</strong> <a href="9586.php">Leif Lindholm: "[OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>In reply to:</strong> <a href="9586.php">Leif Lindholm: "[OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I'm concerned, the ARM ASM is your stuff, so I have no issue with just committing this directly for you.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/24979">https://svn.open-mpi.org/trac/ompi/changeset/24979</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2843">https://svn.open-mpi.org/trac/ompi/ticket/2843</a>
<br>
<p><p>On Aug 2, 2011, at 12:51 PM, Leif Lindholm wrote:
<br>
<p><span class="quotelev1">&gt; In the Linaro 11.05 Linux metadistribution, and hence most likely in Ubuntu 11.04, the GNU assembler no longer defaults to -mimplicit-it=thumb, causing the build to fail when compiling on this platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached trivial patch adds explicit IT instructions where required, permitting a successful build. Patch created against r24936, but validated also against subsequent ones up to and including r24961.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; 	Leif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.s.
</span><br>
<span class="quotelev1">&gt; In case someone is curious about what I'm talking about above, there is a pretty decent description of the IT instruction here:
</span><br>
<span class="quotelev1">&gt; <a href="http://infocenter.arm.com/help/topic/com.arm.doc.dui0489d/Cjabicci.html<iteq.diff">http://infocenter.arm.com/help/topic/com.arm.doc.dui0489d/Cjabicci.html<iteq.diff</a>&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9588.php">Jeff Squyres: "[OMPI devel] MXM question"</a>
<li><strong>Previous message:</strong> <a href="9586.php">Leif Lindholm: "[OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>In reply to:</strong> <a href="9586.php">Leif Lindholm: "[OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
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
