<?
$subject_val = "Re: [OMPI users] [mpich-discuss] cleaning up old ROMIO (MPI-IO) drivers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 13:47:36 2016" -->
<!-- isoreceived="20160105184736" -->
<!-- sent="Tue, 5 Jan 2016 12:47:11 -0600" -->
<!-- isosent="20160105184711" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [mpich-discuss] cleaning up old ROMIO (MPI-IO) drivers" -->
<!-- id="568C0FAF.3070708_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="568C00BA.1060406_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [mpich-discuss] cleaning up old ROMIO (MPI-IO) drivers<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-05 13:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28215.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Previous message:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/05/2016 11:43 AM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your email says you'll keep PVFS2.
</span><br>
<span class="quotelev1">&gt; However, on your blog PVFS2 is not mentioned (on the &quot;Keep&quot; list).
</span><br>
<span class="quotelev1">&gt; I suppose it will be kept, right?
</span><br>
<p>Right. An oversight on my part.  PVFS2 will stay.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/05/2016 12:31 PM, Rob Latham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm itching to discard some of the little-used file system drivers in
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO, an MPI-IO implementation used by, well, everyone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've got more details in this ROMIO blog post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://press3.mcs.anl.gov/romio/2016/01/05/cleaning-out-old-romio-file-system-drivers/">http://press3.mcs.anl.gov/romio/2016/01/05/cleaning-out-old-romio-file-system-drivers/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now the plan is to keep these drivers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Lustre
</span><br>
<span class="quotelev2">&gt;&gt; - GPFS
</span><br>
<span class="quotelev2">&gt;&gt; - UFS
</span><br>
<span class="quotelev2">&gt;&gt; - PVFS2
</span><br>
<span class="quotelev2">&gt;&gt; - PANFS
</span><br>
<span class="quotelev2">&gt;&gt; - NFS
</span><br>
<span class="quotelev2">&gt;&gt; - TESTFS
</span><br>
<span class="quotelev2">&gt;&gt; - XFS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you use any of the other ROMIO file system drivers?  If you don't
</span><br>
<span class="quotelev2">&gt;&gt; know if you do, or don't know what a ROMIO file system driver is, then
</span><br>
<span class="quotelev2">&gt;&gt; it's unlikely you are using one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if you use a driver and it's not on the list?  First off, let me
</span><br>
<span class="quotelev2">&gt;&gt; know and I will probably want to visit your site and take a picture of
</span><br>
<span class="quotelev2">&gt;&gt; your system.  Then, let me know how much longer you foresee using the
</span><br>
<span class="quotelev2">&gt;&gt; driver and we'll create a &quot;deprecated&quot; list for N more years.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev1">&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28215.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-v2.x-dev-950-g995993b"</a>
<li><strong>Previous message:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28213.php">Gus Correa: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
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
