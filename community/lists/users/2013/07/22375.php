<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 16:29:41 2013" -->
<!-- isoreceived="20130723202941" -->
<!-- sent="Tue, 23 Jul 2013 16:29:34 -0400" -->
<!-- isosent="20130723202934" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51EEE7AE.9030500_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0E2A3C02-2064-4256-9921-2B1F30C0D35A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 16:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22376.php">David Stuebe: "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder"</a>
<li><strong>Previous message:</strong> <a href="22374.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22399.php">Dave Love: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/23/2013 02:22 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yeah, it's failing when trying to unpack the topology obtained from
</span><br>
<span class="quotelev1">&gt; hwloc. My guess is that one of the following calls changed in
</span><br>
<span class="quotelev1">&gt; hwloc-1.4.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It appears to be this one.
<br>
<p>hwloc_topology_set_xmlbuffer
<br>
<p>I'll return what I've gathered so far to the Fedora bug, and maybe look
<br>
at what goes on in hwloc.
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22375/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22376.php">David Stuebe: "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder"</a>
<li><strong>Previous message:</strong> <a href="22374.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22399.php">Dave Love: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
