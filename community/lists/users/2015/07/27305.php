<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 05:08:00 2015" -->
<!-- isoreceived="20150723090800" -->
<!-- sent="Thu, 23 Jul 2015 18:07:57 +0900" -->
<!-- isosent="20150723090757" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="CAAkFZ5v3Dz737OSXKBVU-3iqS2BqiuMj7HcG1-Wvu6aADfs2cQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="34596E20-0463-4F8A-ACA7-4C18537A0422_at_aia.rwth-aachen.de" -->
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
<strong>Date:</strong> 2015-07-23 05:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>are you running 1.8.7 or master ?
<br>
if not default, which io module are you running ?
<br>
(default is ROMIO with 1.8 but ompio with master)
<br>
<p>by any chance, could you post a simple program that evidences this issue ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, July 23, 2015, Schlottke-Lakemper, Michael &lt;
<br>
m.schlottke-lakemper_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  We are currently encountering a weird file coherence issue when running
</span><br>
<span class="quotelev1">&gt; parallel jobs with OpenMPI (1.8.7) and writing files in parallel to an
</span><br>
<span class="quotelev1">&gt; NFS-mounted file system using Parallel netCDF 1.6.1 (which internally uses
</span><br>
<span class="quotelev1">&gt; MPI-I/O). Sometimes (~30-40% of our samples) we get a file whose contents
</span><br>
<span class="quotelev1">&gt; are not consistent across different hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Specifically, one of the hosts where the file was created will
</span><br>
<span class="quotelev1">&gt; (persistently) show a different file than any other host (confirmed using
</span><br>
<span class="quotelev1">&gt; md5sum/sha256sum and manually). From our observations it seems like the bad
</span><br>
<span class="quotelev1">&gt; host keeps an older state of the file, i.e. one where not all write
</span><br>
<span class="quotelev1">&gt; processes had finished. The error seems to occur only if the ranks are
</span><br>
<span class="quotelev1">&gt; distributed to at least two nodes, and it only occurs if there are multiple
</span><br>
<span class="quotelev1">&gt; programs running within the same pbs/torque job at the same time (MPMD;
</span><br>
<span class="quotelev1">&gt; each mpirun gets a different subset of the job nodes using the -machinefile
</span><br>
<span class="quotelev1">&gt; flag).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Has anyone encountered something similar or do you have an idea what I
</span><br>
<span class="quotelev1">&gt; could do to track down the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt; Michael Schlottke-Lakemper
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  SimLab Highly Scalable Fluids &amp; Solids Engineering
</span><br>
<span class="quotelev1">&gt; J&#195;&#188;lich Aachen Research Alliance (JARA-HPC)
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University
</span><br>
<span class="quotelev1">&gt; W&#195;&#188;llnerstra&#195;&#159;e 5a
</span><br>
<span class="quotelev1">&gt; 52062 Aachen
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Phone: +49 (241) 80 95188
</span><br>
<span class="quotelev1">&gt; Fax: +49 (241) 80 92257
</span><br>
<span class="quotelev1">&gt; Mail: m.schlottke-lakemper_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','m.schlottke-lakemper_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
