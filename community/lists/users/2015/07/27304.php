<?
$subject_val = "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 04:06:42 2015" -->
<!-- isoreceived="20150723080642" -->
<!-- sent="Thu, 23 Jul 2015 08:06:39 +0000" -->
<!-- isosent="20150723080639" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="34596E20-0463-4F8A-ACA7-4C18537A0422_at_aia.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)<br>
<strong>From:</strong> Schlottke-Lakemper, Michael (<em>m.schlottke-lakemper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 04:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27303.php">Schlottke-Lakemper, Michael: "[OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27307.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>

<br>
We are currently encountering a weird file coherence issue when running parallel jobs with OpenMPI (1.8.7) and writing files in parallel to an NFS-mounted file system using Parallel netCDF 1.6.1 (which internally uses MPI-I/O). Sometimes (~30-40% of our samples) we get a file whose contents are not consistent across different hosts.
<br>

<br>
Specifically, one of the hosts where the file was created will (persistently) show a different file than any other host (confirmed using md5sum/sha256sum and manually). From our observations it seems like the bad host keeps an older state of the file, i.e. one where not all write processes had finished. The error seems to occur only if the ranks are distributed to at least two nodes, and it only occurs if there are multiple programs running within the same pbs/torque job at the same time (MPMD; each mpirun gets a different subset of the job nodes using the -machinefile flag).
<br>

<br>
Has anyone encountered something similar or do you have an idea what I could do to track down the problem?
<br>

<br>
Regards,
<br>

<br>
Michael
<br>

<br>

<br>
--
<br>
Michael Schlottke-Lakemper
<br>

<br>
SimLab Highly Scalable Fluids &amp; Solids Engineering
<br>
J&#195;&#188;lich Aachen Research Alliance (JARA-HPC)
<br>
RWTH Aachen University
<br>
W&#195;&#188;llnerstra&#195;&#159;e 5a
<br>
52062 Aachen
<br>
Germany
<br>

<br>
Phone: +49 (241) 80 95188
<br>
Fax: +49 (241) 80 92257
<br>
Mail: m.schlottke-lakemper_at_[hidden]&lt;mailto:m.schlottke-lakemper_at_[hidden]&gt;
<br>
Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27303.php">Schlottke-Lakemper, Michael: "[OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27305.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27307.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
