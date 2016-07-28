<?
$subject_val = "[OMPI users] Problem with multi-dimensional index arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 15:00:17 2015" -->
<!-- isoreceived="20151007190017" -->
<!-- sent="Wed, 7 Oct 2015 11:59:21 -0700" -->
<!-- isosent="20151007185921" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with multi-dimensional index arrays" -->
<!-- id="56156B89.4030506_at_reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with multi-dimensional index arrays<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 14:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<li><strong>Previous message:</strong> <a href="27836.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The benefits of 'using' the MPI module over 'including' MPIF.H are clear 
<br>
because of the sanity checks it performs, and I recently did some 
<br>
testing with the module that seems to uncover a possible bug or design 
<br>
flaw in OpenMPI's handling of arrays in user-defined data types.  
<br>
Attached are two example program that build a MPI_TYPE_CREATE_HINDEXED 
<br>
data type.  In each the 'array_of_blocklengths' and 
<br>
'array_of_displacements' are based on a 3-dimensional Cartesian mapping 
<br>
of processor space.  In program 'threedarrays.f90' the arrays are 
<br>
specified and constructed as 3-dimensional.  In program 'onedarrays.f90' 
<br>
the arrays are 1-dimensional and constructed using explicit calculation 
<br>
of a single index equivalent to 3 indices.  Otherwise the programs are 
<br>
identical.
<br>
<p>Compiling 'threedarrays.f90' yields the familiar error message:
<br>
<p>threedarrays.f90(61): error #6285: There is no matching specific 
<br>
subroutine for this generic subroutine call. [MPI_TYPE_CREATE_HINDEXED]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call 
<br>
mpi_type_create_hindexed(lenidx,array_of_blocklengths,array_of_displacements, 
<br>
&amp;
<br>
-----------^
<br>
compilation aborted for threedarrays.f90 (code 1)
<br>
<p><p>While compiling 'onedarrays.f90' is successful.
<br>
<p>I don't see anywhere in the MPI documentation that these arrays need to 
<br>
be one-dimensional, but apparently the parameter checking done by the 
<br>
Openmpi MPI module expects this.  Is this by design, or an oversight?  
<br>
BTW, the Intel MPI module does not flag this situation, so apparently it 
<br>
accepts multiple dimensional arrays.
<br>
<p>T. Rosmond
<br>
<p><p><p>

<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27837/threedarrays.f90.bz2">threedarrays.f90.bz2</a>
</ul>
<!-- attachment="threedarrays.f90.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27837/onedarrays.f90.bz2">onedarrays.f90.bz2</a>
</ul>
<!-- attachment="onedarrays.f90.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<li><strong>Previous message:</strong> <a href="27836.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
