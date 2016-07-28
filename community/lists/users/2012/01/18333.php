<?
$subject_val = "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 08:24:31 2012" -->
<!-- isoreceived="20120131132431" -->
<!-- sent="Tue, 31 Jan 2012 08:24:25 -0500" -->
<!-- isosent="20120131132425" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)" -->
<!-- id="417889D1-244E-4F8F-A25F-DBC30DF565CC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87wr88unm0.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Date:</strong> 2012-01-31 08:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18334.php">Song Guo via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18331.php">Dave Love: "[OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 6:18 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Core binding is broken on Interlagos with open-mpi 1.5.4.  I guess it
</span><br>
<span class="quotelev1">&gt; also bites on Magny-Cours, but all our systems are currently busy and I
</span><br>
<span class="quotelev1">&gt; can't check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does work, at least basically, in 1.5.5rc1, but the release notes for
</span><br>
<span class="quotelev1">&gt; that don't give any indication.  Perhaps someone could mention
</span><br>
<span class="quotelev1">&gt; Interlagos in the notes, and any other hardware that might be affected
</span><br>
<span class="quotelev1">&gt; (presumably Magny-Cours and some Power if it's confusion introduced by
</span><br>
<span class="quotelev1">&gt; the extra NUMA level).
</span><br>
<p>I think there was some weirdness in how AMD chips were represented to the Linux kernel (they present differently than Intel chips).  I believe the issues have been worked out by hwloc.  OMPI 1.5.4 uses an older version of hwloc (v1.2); 1.5.5rc1 was synced to a newer version of hwloc.
<br>
<p>Note: a) there's one more hwloc sync that's going to happen before 1.5.5 is released, and b) per <a href="https://svn.open-mpi.org/trac/ompi/ticket/2990">https://svn.open-mpi.org/trac/ompi/ticket/2990</a>, perhaps there's still some weirdness going on in OMPI 1.5.x's affinity code.
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
<li><strong>Next message:</strong> <a href="18334.php">Song Guo via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18331.php">Dave Love: "[OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18335.php">Brice Goglin: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
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
