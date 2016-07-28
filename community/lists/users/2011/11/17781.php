<?
$subject_val = "[OMPI users] Memory corruption due to MPI_Status_c2f";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 08:12:15 2011" -->
<!-- isoreceived="20111118131215" -->
<!-- sent="Fri, 18 Nov 2011 15:12:07 +0100" -->
<!-- isosent="20111118141207" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="[OMPI users] Memory corruption due to MPI_Status_c2f" -->
<!-- id="201111181512.07491.francois.trahay_at_it-sudparis.eu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Memory corruption due to MPI_Status_c2f<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 09:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17782.php">François Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<li><strong>Previous message:</strong> <a href="17780.php">Jeff Squyres: "[OMPI users] Open MPI SC'11 BOF slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17782.php">François Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<li><strong>Reply:</strong> <a href="17782.php">François Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a C+Fortran program that seems to crash due to OpenMPI implementation 
<br>
of MPI_Status_c2f. When my program calls this function, a memory corruption 
<br>
happens.
<br>
Here's a test program that reproduce the bug. It allocates and fills a buffer, 
<br>
call MPI_Status_c2f (using a valid status) and print the buffer.
<br>
Before calling MPI_Status_c2f, the buffer contains (0,1,2,...31). After the 
<br>
function call, it contains(x, x, ...20, 21, 22, ...31)
<br>
<p>From this example, it seems that the first 80 bytes (20 integers) of this buffer 
<br>
get corrupted.
<br>
<p>I tried this program with open mpi 1.4.3, 1.4.4 and the latest nightly 
<br>
snapshot (openmpi-1.7a1r25487) and they all have the same bug. 
<br>
<p>Any idea to solve this problem ?
<br>
<p>Francois Trahay
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17781/status_c2f.c">status_c2f.c</a>
</ul>
<!-- attachment="status_c2f.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17782.php">François Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<li><strong>Previous message:</strong> <a href="17780.php">Jeff Squyres: "[OMPI users] Open MPI SC'11 BOF slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17782.php">François Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<li><strong>Reply:</strong> <a href="17782.php">François Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
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
