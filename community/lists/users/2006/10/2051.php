<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 14:57:15 2006" -->
<!-- isoreceived="20061025185715" -->
<!-- sent="Wed, 25 Oct 2006 14:57:06 -0400" -->
<!-- isosent="20061025185706" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users]  MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces" -->
<!-- id="84B160D3-6286-43F0-AD99-296B54B750AC_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 14:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2052.php">shane kennedy: "[OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2050.php">Katherine Holcomb: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yet another forgotten issue regarding the f90 large interfaces  
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/39">https://svn.open-mpi.org/trac/ompi/ticket/39</a>&gt;
<br>
(note that MPI_IN_PLACE is currently an integer, for a time it was a  
<br>
double complex but that has been fixed).
<br>
<p>Problem I have now is that my patches which worked with 1.2 don't  
<br>
work with 1.3.  I've tried various fixes for my patches and I don't  
<br>
have a solution like I have for MPI_Gather.
<br>
<p>Michael
<br>
<p><p>Consider
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE 
<br>
(MPI_IN_PLACE,sumpfi,sumpfmi,MPI_INTEGER,MPI_SUM, 0,allmpi,ier)
<br>
<p>Error: Generic subroutine 'mpi_reduce' at (1) is not consistent with  
<br>
a specific subroutine interface
<br>
<p>sumpfi is an integer array, sumpfmi is an integer.
<br>
<p>The problem is that MPI_IN_PLACE is an integer, so you can only
<br>
compile with the large interface file when the second argument of
<br>
MPI_REDUCE is an integer, not an integer array, or a character, or a
<br>
logical, ...
<br>
<p>So this doubles the number of f90 interfaces needed for MPI_REDUCE
<br>
(and anything else that uses MPI_IN_PLACE).
<br>
---------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2052.php">shane kennedy: "[OMPI users] how do i link to .la library files?"</a>
<li><strong>Previous message:</strong> <a href="2050.php">Katherine Holcomb: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
<li><strong>Reply:</strong> <a href="2089.php">Michael Kluskens: "[OMPI users]   tickets 39 &amp; 55"</a>
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
