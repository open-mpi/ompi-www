<?
$subject_val = "[OMPI users] One-sided datatype errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 18:44:06 2010" -->
<!-- isoreceived="20101213234406" -->
<!-- sent="Mon, 13 Dec 2010 17:44:00 -0600" -->
<!-- isosent="20101213234400" -->
<!-- name="James Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="[OMPI users] One-sided datatype errors" -->
<!-- id="4D06AFC0.2060504_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [OMPI users] One-sided datatype errors<br>
<strong>From:</strong> James Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 18:44:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Reply:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm getting strange behavior using datatypes in a one-sided 
<br>
MPI_Accumulate operation.
<br>
<p>The attached example performs an accumulate into a patch of a shared 2d 
<br>
matrix.  It uses indexed datatypes and can be built with displacement or 
<br>
absolute indices (hindexed) - both cases fail.  I'm seeing data 
<br>
validation errors, hanging, or other erroneous behavior under OpenMPI 
<br>
1.5 on Infiniband.  The example works correctly under the current 
<br>
release of MVAPICH on IB and under MPICH on shared memory.
<br>
<p>Any help would be greatly appreciated.
<br>
<p>Best,
<br>
&nbsp;&nbsp;~Jim.
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15116/test_mpi_indexed_accs.c">test_mpi_indexed_accs.c</a>
</ul>
<!-- attachment="test_mpi_indexed_accs.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15117.php">David Mathog: "[OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>Previous message:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Reply:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
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
