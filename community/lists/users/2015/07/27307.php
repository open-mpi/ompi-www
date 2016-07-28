<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 06:34:02 2015" -->
<!-- isoreceived="20150723103402" -->
<!-- sent="Thu, 23 Jul 2015 11:34:00 +0100" -->
<!-- isosent="20150723103400" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="87mvynmacn.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 06:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27308.php">Dave Love: "[OMPI users] DMTCP checkpointing with openib"</a>
<li><strong>Previous message:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Schlottke-Lakemper, Michael&quot; &lt;m.schlottke-lakemper_at_[hidden]&gt;
<br>
writes:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently encountering a weird file coherence issue when
</span><br>
<span class="quotelev1">&gt; running parallel jobs with OpenMPI (1.8.7) and writing files in
</span><br>
<span class="quotelev1">&gt; parallel to an NFS-mounted file system using Parallel netCDF 1.6.1
</span><br>
<span class="quotelev1">&gt; (which internally uses MPI-I/O). Sometimes (~30-40% of our samples) we
</span><br>
<span class="quotelev1">&gt; get a file whose contents are not consistent across different hosts.
</span><br>
<p>That's probably not a good idea.  Have you read about NFS in the romio
<br>
README?  It's old, but as far as I know, it's still relevant for NFS3.
<br>
Maybe Rob Latham will see this and be able to comment on NFS4.
<br>
<p>It seems to me that building for NFS by default is a mistake.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27308.php">Dave Love: "[OMPI users] DMTCP checkpointing with openib"</a>
<li><strong>Previous message:</strong> <a href="27306.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27304.php">Schlottke-Lakemper, Michael: "[OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
