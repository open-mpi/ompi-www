<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 07:28:11 2013" -->
<!-- isoreceived="20130125122811" -->
<!-- sent="Fri, 25 Jan 2013 12:28:01 +0000" -->
<!-- isosent="20130125122801" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="51027A51.4000609_at_arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42C9E0EB_at_xmb-aln-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-01-25 07:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11987.php">Steve Wise: "[OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="11985.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>In reply to:</strong> <a href="11984.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24/01/13 22:12, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Jan 24, 2013, at 8:18 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tested this patch in v1.6 and v1.7 on my Pi, and it seems to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just fine.  &quot;make check&quot; passes all the ASM tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be perfectly clear: it wouldn't on ARMv5 though, and the ARMv6
</span><br>
<span class="quotelev2">&gt;&gt; ASM test executed with NOPs for barriers, although it would correctly
</span><br>
<span class="quotelev2">&gt;&gt; pass all other tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm.  Ok.  So is this a correct list of what is supported right now (i.e., in v1.6 with your patch)
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1">&gt; ARM4: no
</span><br>
<span class="quotelev1">&gt; ARM5: no
</span><br>
<span class="quotelev1">&gt; ARM6: sorta (not multi-core, or anywhere we would need barriers)
</span><br>
<span class="quotelev1">&gt; ARM7: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<p>Correct, that is what is supported with out-of-line assembler functions
<br>
- i.e. when explicitly building with -DOMPI_DISABLE_INLINE_ASM.
<br>
They are all supported (and correctly using barriers) otherwise.
<br>
<p><span class="quotelev1">&gt; How would George's patch have changed that list?
</span><br>
<p>ARM4: no
<br>
ARM5: maybe, unvalidated
<br>
ARM6: yes
<br>
ARM7: yes
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11987.php">Steve Wise: "[OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="11985.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>In reply to:</strong> <a href="11984.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11997.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
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
