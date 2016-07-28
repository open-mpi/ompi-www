<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 08:46:14 2013" -->
<!-- isoreceived="20130128134614" -->
<!-- sent="Mon, 28 Jan 2013 13:46:08 +0000" -->
<!-- isosent="20130128134608" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="51068120.3000601_at_arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CB6D69_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 08:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12016.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12014.php">Jan Engelhardt: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<li><strong>In reply to:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12061.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="12061.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26/01/13 00:05, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Here's what I have done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Committed your patch to v1.6.  George's patch was not committed to
</span><br>
<span class="quotelev1">&gt; v1.6.
</span><br>
<p>Many thanks.
<br>
<p><span class="quotelev1">&gt; 2. I opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/3481">https://svn.open-mpi.org/trac/ompi/ticket/3481</a> to track
</span><br>
<span class="quotelev1">&gt; your proposal of re-implementing/revamping the ARM ASM code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a timeline for when that can be done?
</span><br>
<p>As I have mentioned to you off list, I have (very) recently been 
<br>
seconded into the Linaro Enterprise Group, focusing on improving the
<br>
ARM server software ecosystem.
<br>
As such, I am potentially in a bit of legal limbo, until Linaro signs
<br>
a contribution agreement. This is however in the works.
<br>
But giving some flexibility for roadblocks, can we say &quot;this quarter&quot;?
<br>
<p><span class="quotelev1">&gt; 3. Since no one is currently MTT testing Open MPI on ARM, I added the
</span><br>
<span class="quotelev1">&gt; following statement in the v1.6 README file under &quot;Other systems have
</span><br>
<span class="quotelev1">&gt; been lightly (but not fully tested):&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ARM4, ARM5, ARM6, ARM7 (when using non-inline assembly; only ARM7
</span><br>
<span class="quotelev1">&gt; is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; Is this correct?
</span><br>
<p>Apart from our *cough* convoluted architecture vs. processor naming 
<br>
scheme... It should be ARMv4, ARMv5, ARMv6 and ARMv7.
<br>
(since ARM4 and ARM5 were skipped and ARM6 and ARM7 were processors 
<br>
implementing the ARMv3 and ARMv4 architectures :)
<br>
<p><span class="quotelev1">&gt; --&gt; Do you think you'll be able to setup some MTT on ARM platforms?
</span><br>
<p>I hope so.
<br>
<p><span class="quotelev1">&gt; 4. I also added the following to v1.6 NEWS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Automatically provide compiler flags that compile properly on some
</span><br>
<span class="quotelev1">&gt; types of ARM systems.
</span><br>
<p>Sounds good.
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12016.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12014.php">Jan Engelhardt: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<li><strong>In reply to:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12061.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="12061.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
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
