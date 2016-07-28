<?
$subject_val = "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:20:31 2012" -->
<!-- isoreceived="20120131202031" -->
<!-- sent="Tue, 31 Jan 2012 21:20:26 +0100" -->
<!-- isosent="20120131202026" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)" -->
<!-- id="4F284D0A.1070300_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87y5snu4vl.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/01/2012 19:02, Dave Love a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; FWIW, the Linux kernel (at least up to 3.2) still reports wrong L2 and
</span><br>
<span class="quotelev2">&gt;&gt; L1i cache information on AMD Bulldozer. Kernel bug reported at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev1">&gt; I assume that isn't relevant for open-mpi, just other things.  Is that
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>In 1.5.x, cache info doesn't matter as far as I know.
<br>
<p>In trunk, the affinity code has been reworked. I think you can bind
<br>
process to caches there. Binding to L2 wouldn't work as expected (would
<br>
bind to one core instead of 2). hwloc doesn't have instruction cache
<br>
support so far, so wrong L1i info doesn't matter.
<br>
<p>I don't know if anybody in trunk uses shared cache size yet (for BTL SM
<br>
tuning for instance).
<br>
<p><p><span class="quotelev1">&gt; We'll try to get some action out of AMD in the face of a procurement, if
</span><br>
<span class="quotelev1">&gt; nothing else.
</span><br>
<p>I just sent a link to the kernel bugreport to my hwloc contact at AMD.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18348.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
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
