<?
$subject_val = "Re: [OMPI users] Backward Compatibility of MPI Java Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 12:05:42 2013" -->
<!-- isoreceived="20130107170542" -->
<!-- sent="Mon, 7 Jan 2013 17:05:37 +0000" -->
<!-- isosent="20130107170537" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Backward Compatibility of MPI Java Binding" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3808A912_at_xmb-aln-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ACE4DB21-82C5-43B9-BBB4-AE427C324066_at_ci.i.u-tokyo.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Backward Compatibility of MPI Java Binding<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 12:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="21082.php">Yoshiki SATO: "[OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Reply:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2013, at 4:28 AM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The MPI Java binding being developed on the 1.7 pre-release.  Is it possible to merge it with 1.5 or 1.6 releases?
</span><br>
<p>Unfortunately, no.  1.6 is a &quot;stable&quot; series, meaning that no new features are added.
<br>
<p>Someone could do the work manually, but also know that we have updated the build system between Open MPI 1.6 and 1.7 such that you'd probably need to integrate it differently in 1.6 than it is in 1.7.
<br>
<p>Also, be aware that we're considering wholly revamping those Java bindings.  
<br>
<p>I'm just returning to work today from the winter vacation, so there's probably some mails about this I haven't seen yet, but there are some wonky bugs that have been found with respect to these Java bindings.  My $0.02 is that these current bindings are actually trying to be more of a class library than more-or-less 1:1 bindings to the official MPI C bindings.  One option that has been lightly discussed is revamping these Java APIs to be much closer in spirit to the MPI C bindings.  So we'll see where this goes.
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
<li><strong>Next message:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="21082.php">Yoshiki SATO: "[OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Reply:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
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
