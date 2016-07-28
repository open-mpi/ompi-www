<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 14:04:12 2007" -->
<!-- isoreceived="20070117190412" -->
<!-- sent="Wed, 17 Jan 2007 13:04:43 -0600" -->
<!-- isosent="20070117190443" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_initialized interface" -->
<!-- id="628C36CE-8A63-4010-880A-18B12B865F2E_at_nrlssc.navy.mil" -->
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
<strong>From:</strong> Tim Campbell (<em>tim.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 14:04:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2486.php">Jeff Squyres: "Re: [OMPI users] mpi_initialized interface"</a>
<li><strong>Previous message:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2486.php">Jeff Squyres: "Re: [OMPI users] mpi_initialized interface"</a>
<li><strong>Reply:</strong> <a href="2486.php">Jeff Squyres: "Re: [OMPI users] mpi_initialized interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The interface definition for MPI_Initialized in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
<br>
<p>is incorrect.  The script is generating the interface as
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine MPI_Initialized(flag, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: flag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end subroutine MPI_Initialized
<br>
<p>However, according to the MPI standard it should be
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine MPI_Initialized(flag, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical, intent(out) :: flag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end subroutine MPI_Initialized
<br>
<p>I find this error in both 1.1.2 and the 1.2x series.
<br>
<p><pre>
--
Tim Campbell
Naval Research Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2486.php">Jeff Squyres: "Re: [OMPI users] mpi_initialized interface"</a>
<li><strong>Previous message:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2486.php">Jeff Squyres: "Re: [OMPI users] mpi_initialized interface"</a>
<li><strong>Reply:</strong> <a href="2486.php">Jeff Squyres: "Re: [OMPI users] mpi_initialized interface"</a>
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
