<?
$subject_val = "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 09:05:00 2012" -->
<!-- isoreceived="20120131140500" -->
<!-- sent="Tue, 31 Jan 2012 09:04:55 -0500" -->
<!-- isosent="20120131140455" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)" -->
<!-- id="E40F87CD-6BDB-4129-9265-2F647CA98C7A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F27F15E.1040502_at_inria.fr" -->
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
<strong>Date:</strong> 2012-01-31 09:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 8:49 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Unless I am mistaken, OMPI 1.5.4 has hwloc 1.2
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; while 1.5.5 will have
</span><br>
<span class="quotelev1">&gt; 1.2.2 or even 1.3.1. So don't use core binding on interlagos with
</span><br>
<span class="quotelev1">&gt; OMPI&lt;=1.5.4.
</span><br>
<p>OMPI 1.5.5rc1 has hwloc 1.3.1 + a few SVN commits past it.
<br>
<p>Per some off-list discussions, we'll probably do an hwloc 1.3.2 release Real Soon Now to clean up/release all post-1.3.1 fixes, and then sync that to Open MPI 1.5.5.
<br>
<p><span class="quotelev1">&gt; Note that magny-Cours processors are OK, cores are &quot;normal&quot; there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, the Linux kernel (at least up to 3.2) still reports wrong L2 and
</span><br>
<span class="quotelev1">&gt; L1i cache information on AMD Bulldozer. Kernel bug reported at
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
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
