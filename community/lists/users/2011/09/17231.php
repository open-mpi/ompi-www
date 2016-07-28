<?
$subject_val = "Re: [OMPI users] qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 13:10:34 2011" -->
<!-- isoreceived="20110912171034" -->
<!-- sent="Mon, 12 Sep 2011 13:10:29 -0400" -->
<!-- isosent="20110912171029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qp memory allocation problem" -->
<!-- id="B5EAD93A-E69C-4579-B006-186D1877A4DD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9991F13C-7E6C-4CE0-8F33-9C0F88ABB222_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] qp memory allocation problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 13:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17232.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17226.php">Shamis, Pavel: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 12, 2011, at 12:39 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; OMPI Developers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe we should consider disabling the use of per-peer queue pairs by default.  Do they buy us anything?  For what it is worth, we have stopped using them on all of our large systems here at LANL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is cons-and-pros of using per-peer queues. It really depends on application behavior.
</span><br>
<span class="quotelev1">&gt; I would suggest some dynamic-adjustment solution. If NP &gt; some_threshould -&gt; switch to SRQ or XRC.
</span><br>
<p>Definitely worth thinking about.  IB vendors?
<br>
<p><span class="quotelev1">&gt; Also I would recommend to print our some informative error message for &quot;qp errno says Cannot allocate memory&quot; error.
</span><br>
<p>+1.  That's a terrible error message.
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
<li><strong>Next message:</strong> <a href="17232.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<li><strong>Previous message:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17226.php">Shamis, Pavel: "Re: [OMPI users] qp memory allocation problem"</a>
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
