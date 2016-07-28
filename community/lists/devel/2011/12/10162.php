<?
$subject_val = "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 11:24:25 2011" -->
<!-- isoreceived="20111216162425" -->
<!-- sent="Fri, 16 Dec 2011 11:24:15 -0500" -->
<!-- isosent="20111216162415" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="8DF41CAC-36EB-425C-98D9-6880A9F17F57_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39229.128.165.0.81.1324051007.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 11:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10163.php">Paul H. Hargrove: "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Previous message:</strong> <a href="10161.php">Nathan T. Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10161.php">Nathan T. Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10147.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2011, at 10:56 AM, Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Why do the symbols need to be weak?  Remember that not all platforms
</span><br>
<span class="quotelev2">&gt;&gt; support weak symbols.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know. The way we currently pull MPIR symbols into orterun breaks
</span><br>
<span class="quotelev1">&gt; with some configuration. If we don't pull the symbols in then launchmon
</span><br>
<span class="quotelev1">&gt; can't attach to orterun. Moving the symbols to weak fixes the problem
</span><br>
<span class="quotelev1">&gt; Ashley is seeing without breaking launchmon.
</span><br>
<p>We could pull them in the same way MPIR_Breakpoint is pulled in (i.e., via function call, not a symbol dereference -- which is not always enough for some linkers).
<br>
<p><span class="quotelev1">&gt; What platforms configurations do not support weak?
</span><br>
<p>OS X.
<br>
<p><span class="quotelev2">&gt;&gt; The symbols don't need to be in the executable itself, right?  It should
</span><br>
<span class="quotelev2">&gt;&gt; be fine for them to be a library (e.g., libopen-rte.so/a).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In theory, yes, but in practice, no. To support launchmon orterun needs to
</span><br>
<span class="quotelev1">&gt; &quot;define&quot; MPIR symbols. At the moment they are in the wrong section (B) and
</span><br>
<span class="quotelev1">&gt; moving them to section V (when it is supported) should be better.
</span><br>
<p>What is launchmon doing to find the symbols?  I.e., why can't it find them in the BSS?  If gdb and others can find them there, why can't launchmon?  Does a dlsym not find these symbols?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="10163.php">Paul H. Hargrove: "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Previous message:</strong> <a href="10161.php">Nathan T. Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10161.php">Nathan T. Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10147.php">Nathan Hjelm: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
