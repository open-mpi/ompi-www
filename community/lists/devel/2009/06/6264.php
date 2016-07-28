<?
$subject_val = "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 16:40:13 2009" -->
<!-- isoreceived="20090617204013" -->
<!-- sent="Wed, 17 Jun 2009 13:39:59 -0700" -->
<!-- isosent="20090617203959" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem" -->
<!-- id="4A39549F.1070600_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE091642-4B80-47AF-A5D0-AF5944E3582C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-17 16:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>In reply to:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6268.php">David Robertson: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Reply:</strong> <a href="6268.php">David Robertson: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; Erm -- that's weird.  So when you extract the tarballs, 
</span><br>
<span class="quotelev1">&gt; atomic-amd64-linux.s is non-empty (as it should be), but after a 
</span><br>
<span class="quotelev1">&gt; failed build, it's file length 0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that during the build process, we sym link atomic-amd64-linux.s 
</span><br>
<span class="quotelev1">&gt; to atomic-asm.S (I see that happening in your build output as well).  
</span><br>
<span class="quotelev1">&gt; So if the compiler is barfing when compiling atomic-asm.S, perhaps 
</span><br>
<span class="quotelev1">&gt; it's also wiping out the file...?  That would be darn weird, though...
</span><br>
[snip]
<br>
<p>Hmm.  Not a solution to the original problem, but might I suggest that 
<br>
any case where the build might over-write a source file is a serious 
<br>
problem.  Two possible ways come to mind to address that:
<br>
1) Either the configure or make process might write-protect the source 
<br>
file at some time prior to making the symlink.
<br>
2) The make process could copy, rather than symlink, the file (w/ a 
<br>
dependency that would trigger a re-copy if the source file is updated).
<br>
<p>The write-protect approach has the advantage that it would let us see a 
<br>
make failure at the point that something is trying (erroneously) to 
<br>
write/truncate the file.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>In reply to:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6268.php">David Robertson: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Reply:</strong> <a href="6268.php">David Robertson: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
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
