<?
$subject_val = "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 08:49:23 2012" -->
<!-- isoreceived="20120131134923" -->
<!-- sent="Tue, 31 Jan 2012 14:49:18 +0100" -->
<!-- isosent="20120131134918" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)" -->
<!-- id="4F27F15E.1040502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="417889D1-244E-4F8F-A25F-DBC30DF565CC_at_cisco.com" -->
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
<strong>Date:</strong> 2012-01-31 08:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18334.php">Song Guo via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>In reply to:</strong> <a href="18333.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/01/2012 14:24, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 6:18 AM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Core binding is broken on Interlagos with open-mpi 1.5.4.  I guess it
</span><br>
<span class="quotelev2">&gt;&gt; also bites on Magny-Cours, but all our systems are currently busy and I
</span><br>
<span class="quotelev2">&gt;&gt; can't check.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It does work, at least basically, in 1.5.5rc1, but the release notes for
</span><br>
<span class="quotelev2">&gt;&gt; that don't give any indication.  Perhaps someone could mention
</span><br>
<span class="quotelev2">&gt;&gt; Interlagos in the notes, and any other hardware that might be affected
</span><br>
<span class="quotelev2">&gt;&gt; (presumably Magny-Cours and some Power if it's confusion introduced by
</span><br>
<span class="quotelev2">&gt;&gt; the extra NUMA level).
</span><br>
<span class="quotelev1">&gt; I think there was some weirdness in how AMD chips were represented to the Linux kernel (they present differently than Intel chips).  I believe the issues have been worked out by hwloc.
</span><br>
<p>Right, AMD &quot;dual-core modules&quot; are reported almost exactly as &quot;a single
<br>
hyperthreaded core&quot; by the kernel. We had to tweak hwloc to detect two
<br>
different cores. So you get 32 cores and 32 PUs (hwloc &gt;= 1.2.1) instead
<br>
of 16 cores and 32 PUs (hwloc &lt;1.2.1).
<br>
<p>If you don't have this hwloc change, I guess binding to core breaks
<br>
because you have 16 cores for 32 processes. I don't know if there's an
<br>
easy way to tell OMPI 1.5.4 to bind to PUs instead of Cores. This should
<br>
work as expected.
<br>
<p>Unless I am mistaken, OMPI 1.5.4 has hwloc 1.2 while 1.5.5 will have
<br>
1.2.2 or even 1.3.1. So don't use core binding on interlagos with
<br>
OMPI&lt;=1.5.4.
<br>
<p>Note that magny-Cours processors are OK, cores are &quot;normal&quot; there.
<br>
<p>FWIW, the Linux kernel (at least up to 3.2) still reports wrong L2 and
<br>
L1i cache information on AMD Bulldozer. Kernel bug reported at
<br>
<a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18334.php">Song Guo via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>In reply to:</strong> <a href="18333.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18336.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Reply:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
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
