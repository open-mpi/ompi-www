<?
$subject_val = "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 03:36:10 2013" -->
<!-- isoreceived="20130121083610" -->
<!-- sent="Mon, 21 Jan 2013 09:29:08 +0100 (CET)" -->
<!-- isosent="20130121082908" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2" -->
<!-- id="201301210829.r0L8T8Bv027055_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 03:29:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21171.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21169.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Maybe in reply to:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev2">&gt; &gt; I used your test code to confirm it also fails on our trunk -
</span><br>
<span class="quotelev2">&gt; &gt; it looks like someone got the reference count wrong when
</span><br>
<span class="quotelev2">&gt; &gt; creating/destructing groups.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, the code is not MPI compliant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The culprit is line 254 in the test code where Siegmar manually
</span><br>
<span class="quotelev1">&gt; copied the group_comm_world into group_worker. This is correct
</span><br>
<span class="quotelev1">&gt; as long as you remember that group_worker is not directly an
</span><br>
<span class="quotelev1">&gt; MPI generated group, and as a result you are not allowed to free it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now if you replace the:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; group_worker = group_comm_world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; by an MPI operation that create a copy of the original group such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_group (MPI_COMM_WORLD, &amp;group_worker);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; your code become MPI valid, and works without any issue in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<p>Thank you very much for your solution. Now my Java program in openmpi-1.9
<br>
works as well, if I replace this line. 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21171.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21169.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Maybe in reply to:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
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
