<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:07:36 2015" -->
<!-- isoreceived="20150723120736" -->
<!-- sent="Thu, 23 Jul 2015 21:07:36 +0900" -->
<!-- isosent="20150723120736" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="CAAkFZ5topYBtDm_3PORRGAfO6CbVJ3MNg1EbM_3VDSerCNakFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7949E349-CD09-453B-A0C3-496D0FBF4633_at_aia.rwth-aachen.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 08:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27311.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27311.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27311.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>ROMIO is the default in the 1.8 series
<br>
you can run
<br>
ompi_info --all | grep io | grep priority
<br>
ROMIO priority should be 20 and ompio priority should be 10.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, July 23, 2015, Schlottke-Lakemper, Michael &lt;
<br>
m.schlottke-lakemper_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; are you running 1.8.7 or master ?
</span><br>
<span class="quotelev1">&gt; 1.8.7. We recently upgraded our cluster installation from OpenSUSE
</span><br>
<span class="quotelev1">&gt; 11.3/OpenMPI 1.6.5 to OpenSUSE 12.3/OpenMPI 1.8.7. Before the upgrade, we
</span><br>
<span class="quotelev1">&gt; did not encounter this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; if not default, which io module are you running ?
</span><br>
<span class="quotelev2">&gt; &gt; (default is ROMIO with 1.8 but ompio with master)
</span><br>
<span class="quotelev1">&gt; We did not specify anything at configure time, so I guess we are using the
</span><br>
<span class="quotelev1">&gt; default. But if you tell me how, I can check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; by any chance, could you post a simple program that evidences this issue
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; As of this time, unfortunately no. We only experience this issue
</span><br>
<span class="quotelev1">&gt; intermittently, and only when running our suite of regression tests. It
</span><br>
<span class="quotelev1">&gt; *seems* to occur only with a handful of the ~40 tests, but if we run only a
</span><br>
<span class="quotelev1">&gt; subset of the tests (instead of all of them), it may not occur at all,
</span><br>
<span class="quotelev1">&gt; depending on the subset. I tried using a MWE program but could not
</span><br>
<span class="quotelev1">&gt; reproduce the issue with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for not being more helpful, but we are also scratching our heads
</span><br>
<span class="quotelev1">&gt; trying to understand what is going on and I just thought that maybe someone
</span><br>
<span class="quotelev1">&gt; here has had a similar experience in the past (or might give us some
</span><br>
<span class="quotelev1">&gt; pointers at what to look at).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27311.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27311.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27311.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
