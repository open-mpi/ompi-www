<?
$subject_val = "[OMPI users] Array Declaration different approaches";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 14 09:59:44 2009" -->
<!-- isoreceived="20091114145944" -->
<!-- sent="Sat, 14 Nov 2009 09:59:40 -0500" -->
<!-- isosent="20091114145940" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] Array Declaration different approaches" -->
<!-- id="428810f20911140659n3864658kfacd90cd9d306b9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Array Declaration different approaches<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-14 09:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11194.php">Kritiraj Sajadah: "[OMPI users] get the process Id of mpirun"</a>
<li><strong>Previous message:</strong> <a href="11192.php">Ricardo Reis: "[OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<li><strong>Reply:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All.
<br>
<p>I have parallel PDE/CFD code in fortran.
<br>
Let we consider it consisting of two parts:
<br>
<p>1) Startup part; that  includes input reads, splits, distributions, forming
<br>
neighborhood information arrays, grid arrays, and all related. It includes
<br>
most of the necessary array declarations.
<br>
<p>2) Iterative part; we proceed the solution in time.
<br>
<p><p>Approach One:
<br>
============
<br>
What I do is that during the Startup phase, I declare the most array
<br>
allocatable and then allocate them sizes depending upon the input reads and
<br>
domain partitioning. And then In the iterative phase I utilize those arrays.
<br>
But I &quot;do not&quot; allocate/deallocate new arrays in the iterative part.
<br>
<p><p>Approach Two:
<br>
============
<br>
I think that,  what if I first use to run only the start -up phase of my
<br>
parallel code having allocatable like things and get the sizes-values
<br>
required for array allocations for a specific problem size and partitioning.
<br>
Then I use these values as constant in another version of my code in which I
<br>
will declare array with the constant values obtained.
<br>
<p>So my question is that will there be any significant performance/efficiency
<br>
difference in the &quot;ITERATIVE part&quot; if the approach two is used (having
<br>
arrays declared fixed sizes/values)?
<br>
<p><p>--------------------
<br>
<p>ANOTHER QUESTION ABOUT CALLING SUBROUTINES:
<br>
Assume two ways:
<br>
1) One way is that we declare arrays in some global module and &quot;USE&quot;
<br>
arrays in subroutines which ever is needed there.
<br>
<p>2) We pass a large number of arrays (10, 20 or 30 may be) in the header
<br>
while making call to a  subroutine.
<br>
<p>Which way is quite fast and efficient over the other?
<br>
<p><p><p><p>Thank You for your kind attention.
<br>
<p>with best regards,
<br>
Amjad Ali.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11194.php">Kritiraj Sajadah: "[OMPI users] get the process Id of mpirun"</a>
<li><strong>Previous message:</strong> <a href="11192.php">Ricardo Reis: "[OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
<li><strong>Reply:</strong> <a href="11211.php">Eugene Loh: "Re: [OMPI users] Array Declaration different approaches"</a>
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
