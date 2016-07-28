<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 06:11:15 2015" -->
<!-- isoreceived="20150723101115" -->
<!-- sent="Thu, 23 Jul 2015 10:11:12 +0000" -->
<!-- isosent="20150723101112" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="7949E349-CD09-453B-A0C3-496D0FBF4633_at_aia.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5v3Dz737OSXKBVU-3iqS2BqiuMj7HcG1-Wvu6aADfs2cQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)<br>
<strong>From:</strong> Schlottke-Lakemper, Michael (<em>m.schlottke-lakemper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 06:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27307.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27310.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27310.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><span class="quotelev1">&gt; are you running 1.8.7 or master ?
</span><br>
1.8.7. We recently upgraded our cluster installation from OpenSUSE 11.3/OpenMPI 1.6.5 to OpenSUSE 12.3/OpenMPI 1.8.7. Before the upgrade, we did not encounter this problem.
<br>
<p><span class="quotelev1">&gt; if not default, which io module are you running ?
</span><br>
<span class="quotelev1">&gt; (default is ROMIO with 1.8 but ompio with master)
</span><br>
We did not specify anything at configure time, so I guess we are using the default. But if you tell me how, I can check.
<br>
<p><span class="quotelev1">&gt; by any chance, could you post a simple program that evidences this issue ?
</span><br>
As of this time, unfortunately no. We only experience this issue intermittently, and only when running our suite of regression tests. It *seems* to occur only with a handful of the ~40 tests, but if we run only a subset of the tests (instead of all of them), it may not occur at all, depending on the subset. I tried using a MWE program but could not reproduce the issue with it.
<br>
<p>Sorry for not being more helpful, but we are also scratching our heads trying to understand what is going on and I just thought that maybe someone here has had a similar experience in the past (or might give us some pointers at what to look at).
<br>
<p>Regards,
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27307.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27310.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27310.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
