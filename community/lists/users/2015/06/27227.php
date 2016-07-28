<?
$subject_val = "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 05:14:21 2015" -->
<!-- isoreceived="20150630091421" -->
<!-- sent="Tue, 30 Jun 2015 11:14:16 +0200" -->
<!-- isosent="20150630091416" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband" -->
<!-- id="55925DE8.8000006_at_dkrz.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150629152554.GD1384_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 05:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27228.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27228.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27228.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/29/15 17:25, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; This is not a configuration issue. On 1.8.x and master we use two-sided
</span><br>
<span class="quotelev1">&gt; communication to emulation one-sided. Since we do not currently have
</span><br>
<span class="quotelev1">&gt; async progress this requires the target to call into MPI to progress RMA
</span><br>
<span class="quotelev1">&gt; communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will change in 2.x. I will be adding a new component that does
</span><br>
<span class="quotelev1">&gt; real RMA on supported networks (ib, gemini, aries). At some point we
</span><br>
<span class="quotelev1">&gt; will also have support for async progress which will enable
</span><br>
<span class="quotelev1">&gt; passive-target on other networks.
</span><br>
<p>But isn't aynch progress required for MPI 2.x conformance? The Open MPI 1.6.5 
<br>
headers I have #define MPI_VERSION to 2. The 1.8.4 headers I have even define it 
<br>
to 3. Why isn't a background thread used on platforms that don't have supported 
<br>
networks?
<br>
<p>Thomas
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27227/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27228.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27228.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27228.php">Marc-Andre Hermanns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
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
