<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 17:13:09 2014" -->
<!-- isoreceived="20141201221309" -->
<!-- sent="Mon, 1 Dec 2014 22:13:08 +0000" -->
<!-- isosent="20141201221308" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="3E1DBED2-0536-476D-9EFE-1DB269B6D8C9_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="2D7CDCD3-D0B4-4582-BCB4-CFDC9427603F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 17:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2014, at 5:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: It&#146;s Slurm&#146;s pmi-1 library that isn&#146;t linked correctly against its dependencies (the pmi-2 one is correct).  Moe is aware of the problem and fixing it on their side. This won&#146;t help existing installations until they upgrade, but I tend to agree with Jeff about not fixing other people&#146;s problems.
</span><br>
<p>Can you explain what is happening?
<br>
<p>I ask because I'm not sure I understand the problem such that using RTLD_GLOBAL would fix it.  I.e., even if libpmi1.so isn't linked against its dependencies properly, that shouldn't cause a problem if OMPI components A and B are both linked against libpmi1.so, and then A is loaded, and then B is loaded.
<br>
<p>...or perhaps we can just discuss this on the call tomorrow?
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
<li><strong>Next message:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
