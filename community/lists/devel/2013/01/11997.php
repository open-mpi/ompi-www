<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 19:05:11 2013" -->
<!-- isoreceived="20130126000511" -->
<!-- sent="Sat, 26 Jan 2013 00:05:06 +0000" -->
<!-- isosent="20130126000506" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CB6D69_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51027A51.4000609_at_arm.com" -->
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
<strong>Date:</strong> 2013-01-25 19:05:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11998.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11996.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11999.php">Paul Hargrove: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11999.php">Paul Hargrove: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="12015.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2013, at 7:28 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Mmm.  Ok.  So is this a correct list of what is supported right now (i.e., in v1.6 with your patch)
</span><br>
<span class="quotelev2">&gt;&gt; ARM4: no
</span><br>
<span class="quotelev2">&gt;&gt; ARM5: no
</span><br>
<span class="quotelev2">&gt;&gt; ARM6: sorta (not multi-core, or anywhere we would need barriers)
</span><br>
<span class="quotelev2">&gt;&gt; ARM7: yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct, that is what is supported with out-of-line assembler functions
</span><br>
<span class="quotelev1">&gt; - i.e. when explicitly building with -DOMPI_DISABLE_INLINE_ASM.
</span><br>
<span class="quotelev1">&gt; They are all supported (and correctly using barriers) otherwise.
</span><br>
<p>Here's what I have done:
<br>
<p>1. Committed your patch to v1.6.  George's patch was not committed to v1.6.
<br>
<p>2. I opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/3481">https://svn.open-mpi.org/trac/ompi/ticket/3481</a> to track your proposal of re-implementing/revamping the ARM ASM code.  
<br>
<p>Do you have a timeline for when that can be done?
<br>
<p>3. Since no one is currently MTT testing Open MPI on ARM, I added the following statement in the v1.6 README file under &quot;Other systems have been lightly (but not fully tested):&quot;
<br>
<p>&nbsp;&nbsp;- ARM4, ARM5, ARM6, ARM7 (when using non-inline assembly; only ARM7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
<br>
<p>--&gt; Is this correct?
<br>
<p>--&gt; Do you think you'll be able to setup some MTT on ARM platforms?
<br>
<p>4. I also added the following to v1.6 NEWS:
<br>
<p>- Automatically provide compiler flags that compile properly on some
<br>
&nbsp;&nbsp;types of ARM systems.
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
<li><strong>Next message:</strong> <a href="11998.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11996.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11999.php">Paul Hargrove: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11999.php">Paul Hargrove: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="12015.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
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
