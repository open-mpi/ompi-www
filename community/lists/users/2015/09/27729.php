<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 07:57:06 2015" -->
<!-- isoreceived="20150930115706" -->
<!-- sent="Wed, 30 Sep 2015 13:57:03 +0200" -->
<!-- isosent="20150930115703" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="560BCE0F.7090603_at_dkrz.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D22ECC1D.7D420%Grigory.Shamov_at_ad.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 07:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27730.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27728.php">Marcin Krotkiewski: "[OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27697.php">Grigory Shamov: "[OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27744.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27744.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 09/28/15 18:36, Grigory Shamov wrote:
<br>
<span class="quotelev1">&gt; The question is if we should do as MXM wants, or ignore it? Has anyone an
</span><br>
<span class="quotelev1">&gt; experience running recent OpenMPI with MXM enabled, and what kind of
</span><br>
<span class="quotelev1">&gt; ulimits do you have? Any suggestions/comments appreciated, thanks!
</span><br>
<p>It should be sufficient to set the limits to the amount of real memory your 
<br>
cluster nodes have (i.e. if you have 64GiB), just limit both heap and stack to 
<br>
64GiB.
<br>
<p>This way you don't run out of address space for mappings.
<br>
<p>Regards, Thomas
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27729/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27730.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27728.php">Marcin Krotkiewski: "[OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27697.php">Grigory Shamov: "[OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27744.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27744.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
