<?
$subject_val = "Re: [OMPI users] mpif90 error with different openmpi editions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 09:44:28 2013" -->
<!-- isoreceived="20130618134428" -->
<!-- sent="Tue, 18 Jun 2013 09:44:19 -0400" -->
<!-- isosent="20130618134419" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 error with different openmpi editions" -->
<!-- id="51C06433.7040801_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1371529691.34824.YahooMailNeo_at_web163801.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif90 error with different openmpi editions<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 09:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22123.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22121.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>In reply to:</strong> <a href="22118.php">xu: "[OMPI users] mpif90 error with different openmpi editions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Reply:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/18/2013 12:28 AM, xu wrote:
<br>
<span class="quotelev1">&gt; my code get this error under openmpi 1.6.4
</span><br>
<span class="quotelev1">&gt; mpif90 -O2 -m64 -fbounds-check -ffree-line-length-0 -c -o 2dem_mpi.o
</span><br>
<span class="quotelev1">&gt; 2dem_mpi.f90 Fatal Error: Reading module mpi at line 110 column 30:
</span><br>
<span class="quotelev1">&gt; Expected string
</span><br>
<span class="quotelev1">&gt; If I use mpif90: Open MPI 1.3.3
</span><br>
<span class="quotelev1">&gt; It compiles ok. What the problem for this?
</span><br>
<p>Make sure you are not mixing environment variables (PATH and 
<br>
LD_LIBRARY_PATH) of the two OMPI versions you installed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22123.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22121.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>In reply to:</strong> <a href="22118.php">xu: "[OMPI users] mpif90 error with different openmpi editions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Reply:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
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
