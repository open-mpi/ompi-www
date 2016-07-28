<?
$subject_val = "Re: [OMPI users] Memory corruption due to MPI_Status_c2f";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 10:38:12 2011" -->
<!-- isoreceived="20111118153812" -->
<!-- sent="Fri, 18 Nov 2011 17:38:06 +0100" -->
<!-- isosent="20111118163806" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory corruption due to MPI_Status_c2f" -->
<!-- id="201111181738.06900.francois.trahay_at_it-sudparis.eu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201111181512.07491.francois.trahay_at_it-sudparis.eu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory corruption due to MPI_Status_c2f<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 11:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17783.php">MM: "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>Previous message:</strong> <a href="17781.php">Fran&#231;ois Trahay: "[OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<li><strong>In reply to:</strong> <a href="17781.php">Fran&#231;ois Trahay: "[OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops... I misread the documentation. It is stated that for fortran, &quot;The 
<br>
status argument must be declared as an array of size MPI_STATUS_SIZE, as in 
<br>
integer status(MPI_STATUS_SIZE)&quot;
<br>
<p>Since I declared the fortran status with &quot;MPI_Fint f_status;&quot;, their isn't 
<br>
enough room for storing the status.
<br>
<p>Francois Trahay
<br>
<p><p>On Friday 18 November 2011 15:12:07 Fran&#231;ois Trahay wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a C+Fortran program that seems to crash due to OpenMPI
</span><br>
<span class="quotelev1">&gt; implementation of MPI_Status_c2f. When my program calls this function, a
</span><br>
<span class="quotelev1">&gt; memory corruption happens.
</span><br>
<span class="quotelev1">&gt; Here's a test program that reproduce the bug. It allocates and fills a
</span><br>
<span class="quotelev1">&gt; buffer, call MPI_Status_c2f (using a valid status) and print the buffer.
</span><br>
<span class="quotelev1">&gt; Before calling MPI_Status_c2f, the buffer contains (0,1,2,...31). After the
</span><br>
<span class="quotelev1">&gt; function call, it contains(x, x, ...20, 21, 22, ...31)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From this example, it seems that the first 80 bytes (20 integers) of this
</span><br>
<span class="quotelev1">&gt; buffer get corrupted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried this program with open mpi 1.4.3, 1.4.4 and the latest nightly
</span><br>
<span class="quotelev1">&gt; snapshot (openmpi-1.7a1r25487) and they all have the same bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea to solve this problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Francois Trahay
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17783.php">MM: "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>Previous message:</strong> <a href="17781.php">Fran&#231;ois Trahay: "[OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<li><strong>In reply to:</strong> <a href="17781.php">Fran&#231;ois Trahay: "[OMPI users] Memory corruption due to MPI_Status_c2f"</a>
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
