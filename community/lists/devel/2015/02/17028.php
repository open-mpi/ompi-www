<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 16:51:46 2015" -->
<!-- isoreceived="20150224215146" -->
<!-- sent="Tue, 24 Feb 2015 21:51:45 +0000" -->
<!-- isosent="20150224215145" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="726061AF-80BE-47A5-8790-455CC04E903E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17WJTsLYLf8fwrntsA64cGhRpJx4iBrrmkBYGRTH5iLiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: DL / DSO functionality<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 16:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17027.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17027.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2015, at 4:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check for dlfcn.h and the dlopen symbol in -ldl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then the paranoid part of me wants to note that since you don't try using dlopen() in the configure tests you risk encountering platforms with non-functional/non-conforming implementations.  For instance stubs that return w/ errno=ENOSYS or which don't support some flags you want/need to pass.  I suppose one can safely ignore that possibility unless/until one encounters such a beast.
</span><br>
<p>I thought about this: but do such systems really exist any more?
<br>
<p><span class="quotelev1">&gt; On a related note: if dlopen() does fail at runtime, will things just &quot;magically&quot; fallback to libltdl (assuming both were found at configure time).
</span><br>
<p>No; I currently have it only build one of the two components.  I'd have to think about it a bit, but it might be possible to build both, and if one fails to perform an action (e.g., open a file), try the other.  Hmm....
<br>
<p><span class="quotelev1">&gt; The Solaris-10/SPARC builds will take a couple hours, but I should have results well before I quit for the day.  So, you should certainly have email about any &quot;kinks&quot; I find before you start any merge on Wed.
</span><br>
<p>Great.  I love getting Hargroved.
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
<li><strong>Next message:</strong> <a href="17029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17027.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17027.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
