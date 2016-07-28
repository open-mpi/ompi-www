<?
$subject_val = "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:02:51 2016" -->
<!-- isoreceived="20160125200251" -->
<!-- sent="Mon, 25 Jan 2016 14:02:26 -0600" -->
<!-- isosent="20160125200226" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers" -->
<!-- id="56A67F52.7090102_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8737tri1nr.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 15:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Reply:</strong> <a href="28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/21/2016 05:59 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; [Catching up...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob Latham &lt;robl_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-), but what about plfs, which seems a notable omission?  The patches
</span><br>
<span class="quotelev1">&gt; in the plfs distribution don't apply to recent adio, at least the
</span><br>
<span class="quotelev1">&gt; version in ompi 1.8 as far as I remember.  I wonder if there's any
</span><br>
<span class="quotelev1">&gt; chance of fixing that and including it, assuming it's still worthwhile
</span><br>
<span class="quotelev1">&gt; with Lustre in particular.
</span><br>
<p>We didn't need to deploy PLFS at Argonne: GPFS handled writing N-to-1 
<br>
files just fine (once you line up the block sizes), so I'm beholden to 
<br>
PLFS communities for ROMIO support.
<br>
<p>It wouldn't hurt for me to bug them once again about getting that into 
<br>
mainline ROMIO.  Perhaps we both think the ball is in the other's court.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28323.php">http://www.open-mpi.org/community/lists/users/2016/01/28323.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28372.php">Jed Brown: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Reply:</strong> <a href="28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
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
