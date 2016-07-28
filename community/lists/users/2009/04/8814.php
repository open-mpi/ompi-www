<?
$subject_val = "Re: [OMPI users] MPI can not open file?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 11:31:21 2009" -->
<!-- isoreceived="20090407153121" -->
<!-- sent="Tue, 7 Apr 2009 17:31:10 +0200" -->
<!-- isosent="20090407153110" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI can not open file?" -->
<!-- id="200904071731.13744.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49DB3360.8070107_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI can not open file?<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 11:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 07 April 2009, Bernhard Knapp wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to get a parallel job of the gromacs software started. MPI
</span><br>
<span class="quotelev1">&gt; seems to boot fine but unfortunately it seems not to be able to open a
</span><br>
<span class="quotelev1">&gt; specified file although it is definitly in the directory where the job
</span><br>
<span class="quotelev1">&gt; is started.
</span><br>
<p>Do all the nodes (in your machinefile) see the same filesystem(s)?
<br>
<p>Have you tried a trivial mpi-program (like MPI_init, open(&quot;...), MPI_fin..)?
<br>
<p>I have compiled and executed gromacs (4.0.2) sucessfully with several OpenMPI 
<br>
versions.
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; I also changed the file permissions to 777 but it does not 
</span><br>
<span class="quotelev1">&gt; affect the result. Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; Bernhard
</span><br>
...
<br>
<span class="quotelev1">&gt; Program mdrun, VERSION 4.0.3
</span><br>
<span class="quotelev1">&gt; Source code file: gmxfio.c, line: 736
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can not open file:
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8814/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
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
