<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:00:33 2015" -->
<!-- isoreceived="20150723120033" -->
<!-- sent="Thu, 23 Jul 2015 12:00:30 +0000" -->
<!-- isosent="20150723120030" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="9426C51C-850E-4D86-9461-A4AF9041CAD7_at_aia.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87mvynmacn.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Date:</strong> 2015-07-23 08:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27310.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27308.php">Dave Love: "[OMPI users] DMTCP checkpointing with openib"</a>
<li><strong>In reply to:</strong> <a href="27307.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>

<br>
<span class="quotelev1">&gt; That's probably not a good idea.  Have you read about NFS in the romio
</span><br>
<span class="quotelev1">&gt; README?  It's old, but as far as I know, it's still relevant for NFS3.
</span><br>
<span class="quotelev1">&gt; Maybe Rob Latham will see this and be able to comment on NFS4.
</span><br>
No, are you referring to the file openmpi-1.8.7/ompi/mca/io/romio/romio/README? The only hint they give is that they suggest to use the &#226;&#128;&#156;noac&#226;&#128;&#157; option, which according to the manpages should not affect file contents but rather file attributes only (if I understand it correctly). Or do you think it would still be worth trying? By the way, we are using NFSv3.
<br>

<br>
<span class="quotelev1">&gt; It seems to me that building for NFS by default is a mistake.
</span><br>
Can you tell me the correct flags I need to provide at configure-time? Or where I can find more information about that (there does not seem to be anything about configure flags in the above-mentioned README). Also, as Gilles (see other mail in thread) suggested, I am not sure whether we use romio or ompio, but I do not know how to find out.
<br>

<br>
Michael<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27310.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27308.php">Dave Love: "[OMPI users] DMTCP checkpointing with openib"</a>
<li><strong>In reply to:</strong> <a href="27307.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
