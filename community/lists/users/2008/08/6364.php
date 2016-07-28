<?
$subject_val = "Re: [OMPI users] problem with alltoall with ppn=8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 10:00:45 2008" -->
<!-- isoreceived="20080816140045" -->
<!-- sent="Sat, 16 Aug 2008 15:00:39 +0100" -->
<!-- isosent="20080816140039" -->
<!-- name="Kozin, I \(Igor\)" -->
<!-- email="i.kozin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with alltoall with ppn=8" -->
<!-- id="CC86E164E4091C4D88A62DADB4AC647904CEBD37_at_exchange06.fed.cclrc.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="604D05AF-1D51-49DC-AF5E-53DE86CBB9F9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with alltoall with ppn=8<br>
<strong>From:</strong> Kozin, I \(Igor\) (<em>i.kozin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 10:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6363.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; - per the &quot;sm&quot; thread, you might want to try with just IB (and not
</span><br>
<span class="quotelev1">&gt; shared memory), just to see if that helps (I don't expect that it
</span><br>
<span class="quotelev1">&gt; will, but every situation is different).  Try running &quot;mpirun --mca
</span><br>
<span class="quotelev1">&gt; btl openib ...&quot; (vs. &quot;--mca btl ^tcp&quot;).
</span><br>
<p>Unfortunately you were right- it did not help. Small message sizes were
<br>
slightly worse though. Thanks anyway.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6363.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
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
