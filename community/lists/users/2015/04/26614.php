<?
$subject_val = "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 05:45:40 2015" -->
<!-- isoreceived="20150406094540" -->
<!-- sent="Mon, 6 Apr 2015 10:45:36 +0100" -->
<!-- isosent="20150406094536" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)" -->
<!-- id="9D3DDC7B-1261-4F6F-99C0-A621C5D2C18C_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 05:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26615.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26613.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26639.php">Abdul Rahman Riza: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>I wonder if there is a way to address this particular scenario using MPI_T or other strategies in Open MPI. I saw a similar discussion few days ago, I assume the same challenges are applied in this case but I just want to check. Here is the scenario:
<br>
<p>We have a system composed by dual rail Mellanox IB, two distinct Connect-IB cards per node each one sitting on a different PCI-E lane out of two distinct sockets. We are seeking a way to control MPI traffic thought each one of them directly into the application. In specific we have a single MPI rank per node that goes multi-threading using OpenMP. MPI_THREAD_MULTIPLE is used, each OpenMP thread may initiate MPI communication. We would like to assign IB-0 to thread 0 and IB-1 to thread 1.
<br>
<p>Via mpirun or env variables we can control which IB interface to use by binding it to a specific MPI rank (or by apply a policy that relate IB to MPi ranks). But if there is only one MPI rank active, how we can differentiate the traffic across multiple IB cards?
<br>
<p>Thanks in advance for any suggestion about this matter.
<br>
<p>Regards,
<br>
Filippo
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26615.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26613.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26639.php">Abdul Rahman Riza: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
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
