<?
$subject_val = "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 10:56:51 2011" -->
<!-- isoreceived="20111216155651" -->
<!-- sent="Fri, 16 Dec 2011 08:56:47 -0700 (MST)" -->
<!-- isosent="20111216155647" -->
<!-- name="Nathan T. Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)" -->
<!-- id="39229.128.165.0.81.1324051007.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5B49ADC4-07DD-4D5B-B699-8BCF71DE61CC_at_cisco.com" -->
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
<strong>From:</strong> Nathan T. Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 10:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10160.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10160.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Why do the symbols need to be weak?  Remember that not all platforms
</span><br>
<span class="quotelev1">&gt; support weak symbols.
</span><br>
<p>I don't know. The way we currently pull MPIR symbols into orterun breaks
<br>
with some configuration. If we don't pull the symbols in then launchmon
<br>
can't attach to orterun. Moving the symbols to weak fixes the problem
<br>
Ashley is seeing without breaking launchmon.
<br>
<p>What platforms configurations do not support weak?
<br>
<p><span class="quotelev1">&gt; The symbols don't need to be in the executable itself, right?  It should
</span><br>
<span class="quotelev1">&gt; be fine for them to be a library (e.g., libopen-rte.so/a).
</span><br>
<p>In theory, yes, but in practice, no. To support launchmon orterun needs to
<br>
&quot;define&quot; MPIR symbols. At the moment they are in the wrong section (B) and
<br>
moving them to section V (when it is supported) should be better.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Previous message:</strong> <a href="10160.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>In reply to:</strong> <a href="10160.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<li><strong>Reply:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
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
