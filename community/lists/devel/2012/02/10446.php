<?
$subject_val = "Re: [OMPI devel] VT build failure with Clang++";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 03:15:10 2012" -->
<!-- isoreceived="20120216081510" -->
<!-- sent="Thu, 16 Feb 2012 09:15:04 +0100" -->
<!-- isosent="20120216081504" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT build failure with Clang++" -->
<!-- id="201202160915.05586.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3C7679.5010501_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT build failure with Clang++<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 03:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10447.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10445.php">Paul H. Hargrove: "[OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could reproduce the build error with Clang 2.9. Adding the operator&lt; to 
<br>
DefRec_BaseS fixes the problem, although this operator is not used.
<br>
<p>Thanks for the hints!
<br>
<p>I'll commit this fix and create a CMR to v1.5 soon.
<br>
<p>Matthias
<br>
<p>On Thursday 16 February 2012 04:22:33 Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Dmitri,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I have not seen any error like this from gcc, pgi, pathcc, xlc,
</span><br>
<span class="quotelev1">&gt; icc, open64 or suncc, I am pretty sure the problem is Clang-specific
</span><br>
<span class="quotelev1">&gt; even if not a true &quot;bug&quot; in Clang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just test everything I can get my hands on and report what I find.
</span><br>
<span class="quotelev1">&gt; If there is not a simple fix for this then it is not a big deal YET.
</span><br>
<span class="quotelev1">&gt; However, it is widely expected that Apple will move to a Clang-only (no
</span><br>
<span class="quotelev1">&gt; gcc/g++) release of Xcode as soon as they are able.
</span><br>
<span class="quotelev1">&gt; So, it *might* become a concern in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, how should we proceed on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/15/2012 8:38 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I don't know if it is a Clang bug, but here's my understanding of the
</span><br>
<span class="quotelev2">&gt; &gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...excellent description removed...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this is a bug in Clang because I don't know if Clang
</span><br>
<span class="quotelev2">&gt; &gt; should have tried to instantiate create().
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dmitri
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10447.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10445.php">Paul H. Hargrove: "[OMPI devel] More on OMPI on MacOS 10.4/ppc [WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
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
