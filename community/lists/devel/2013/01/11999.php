<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 19:21:45 2013" -->
<!-- isoreceived="20130126002145" -->
<!-- sent="Fri, 25 Jan 2013 16:21:36 -0800" -->
<!-- isosent="20130126002136" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="CAAvDA16R9J7f+NQ_43kPaJLOz25xgNA0tCd7c1HRuESKp6L+cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 19:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12000.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11998.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12015.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI:
<br>
<p>I currently have QEMU-based ARM platform I use for testing other s/w:
<br>
&nbsp;&nbsp;&nbsp;+ a single-cpu ARMv5 system running Debian Squeeze
<br>
&nbsp;&nbsp;&nbsp;+ a dual-core ARMv7 system running Ubuntu Precise
<br>
<p>Since these are EMULATED platforms, they are a bit on the slow side, making
<br>
periodic MTT runs untenable.
<br>
However, I am willing/able to run on-demand tests of release candidates if
<br>
Leif is not already performing such testing.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 25, 2013 at 4:05 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jan 25, 2013, at 7:28 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mmm.  Ok.  So is this a correct list of what is supported right now
</span><br>
<span class="quotelev1">&gt; (i.e., in v1.6 with your patch)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ARM4: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ARM5: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ARM6: sorta (not multi-core, or anywhere we would need barriers)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ARM7: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Correct, that is what is supported with out-of-line assembler functions
</span><br>
<span class="quotelev2">&gt; &gt; - i.e. when explicitly building with -DOMPI_DISABLE_INLINE_ASM.
</span><br>
<span class="quotelev2">&gt; &gt; They are all supported (and correctly using barriers) otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what I have done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Committed your patch to v1.6.  George's patch was not committed to v1.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/3481">https://svn.open-mpi.org/trac/ompi/ticket/3481</a> to track your
</span><br>
<span class="quotelev1">&gt; proposal of re-implementing/revamping the ARM ASM code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a timeline for when that can be done?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Since no one is currently MTT testing Open MPI on ARM, I added the
</span><br>
<span class="quotelev1">&gt; following statement in the v1.6 README file under &quot;Other systems have been
</span><br>
<span class="quotelev1">&gt; lightly (but not fully tested):&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - ARM4, ARM5, ARM6, ARM7 (when using non-inline assembly; only ARM7
</span><br>
<span class="quotelev1">&gt;     is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; Is this correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; Do you think you'll be able to setup some MTT on ARM platforms?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. I also added the following to v1.6 NEWS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Automatically provide compiler flags that compile properly on some
</span><br>
<span class="quotelev1">&gt;   types of ARM systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12000.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11998.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12015.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
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
