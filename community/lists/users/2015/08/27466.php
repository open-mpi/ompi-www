<?
$subject_val = "[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 03:52:38 2015" -->
<!-- isoreceived="20150814075238" -->
<!-- sent="Fri, 14 Aug 2015 07:52:35 +0000" -->
<!-- isosent="20150814075235" -->
<!-- name="Schlottke-Lakemper, Michael" -->
<!-- email="m.schlottke-lakemper_at_[hidden]" -->
<!-- subject="[OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7" -->
<!-- id="AE4F0C58-37C1-412F-9F09-9870AB3C9F6C_at_aia.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7<br>
<strong>From:</strong> Schlottke-Lakemper, Michael (<em>m.schlottke-lakemper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 03:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27465.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>

<br>
It seems like oversubscription is disabled by default in OpenMPI 1.8.7, at least when running on a PBS/torque-managed node. When I run a program in parallel on a node with 8 cores, I am not able to use more than 8 ranks:
<br>

<br>
<span class="quotelev1">&gt; mic_at_aia272:~&gt; mpirun --display-allocation -n 9 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 	aia272: slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 9 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>

<br>

<br>
However, if I specifically enable oversubscription through the rmaps_base_oversubscribe setting, it works again:
<br>

<br>
<span class="quotelev1">&gt; mic_at_aia272:~&gt; mpirun --display-allocation --mca rmaps_base_oversubscribe 1 -n 9 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 	aia272: slots=8 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>
<span class="quotelev1">&gt; aia272
</span><br>

<br>
Now I am wondering, is this a bug or a feature? We recently upgraded from 1.6.x to 1.8.7, and as far as I remember, in 1.6.x oversubscription was enabled by default.
<br>

<br>
Regards,
<br>

<br>
Michael
<br>

<br>
P.S.: In ompi_info, both rmaps_base_no_oversubscribe and rmaps_base_oversubscribe are reported as &#226;&#128;&#156;false&#226;&#128;&#157;. Our prefix/etc/openmpi-mca-params.conf file is empty.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27465.php">Gilles Gouaillardet: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27467.php">Ralph Castain: "Re: [OMPI users] Oversubscription disabled by default in OpenMPI 1.8.7"</a>
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
