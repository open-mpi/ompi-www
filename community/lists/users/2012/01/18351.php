<?
$subject_val = "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:35:20 2012" -->
<!-- isoreceived="20120131203520" -->
<!-- sent="Tue, 31 Jan 2012 15:35:16 -0500" -->
<!-- isosent="20120131203516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)" -->
<!-- id="A2F4A364-199A-4D9D-8534-CC23E0E122C4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F284D0A.1070300_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18352.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18349.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 3:20 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; In 1.5.x, cache info doesn't matter as far as I know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In trunk, the affinity code has been reworked. I think you can bind
</span><br>
<span class="quotelev1">&gt; process to caches there. Binding to L2 wouldn't work as expected (would
</span><br>
<span class="quotelev1">&gt; bind to one core instead of 2). hwloc doesn't have instruction cache
</span><br>
<span class="quotelev1">&gt; support so far, so wrong L1i info doesn't matter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if anybody in trunk uses shared cache size yet (for BTL SM
</span><br>
<span class="quotelev1">&gt; tuning for instance).
</span><br>
<p>That information is all correct.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18352.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18349.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
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
