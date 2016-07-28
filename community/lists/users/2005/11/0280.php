<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  4 11:42:07 2005" -->
<!-- isoreceived="20051104164207" -->
<!-- sent="Fri, 4 Nov 2005 11:41:58 -0500" -->
<!-- isosent="20051104164158" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="[O-MPI users] Questions about pmpi_wtick and pmpi_wtime" -->
<!-- id="0CDC7384-C0FC-4447-B834-CF757F632439_at_rpi.edu" -->
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
<strong>From:</strong> Charles Williams (<em>willic3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-04 11:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0281.php">Troy Telford: "[O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<li><strong>Previous message:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Reply:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Maybe reply:</strong> <a href="0290.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Maybe reply:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been using Open MPI in conjunction with PETSc on OSX 10.4, and  
<br>
had been having trouble with undefined symbols when trying tests with  
<br>
PETSc:
<br>
<p>/usr/bin/ld: Undefined symbols:
<br>
_pmpi_wtick__
<br>
_pmpi_wtime__
<br>
<p>After playing around with things for a while, I realized that these  
<br>
undefined symbols only appeared in libmpi_f90.a, and were somehow  
<br>
being pulled into the PETSc libraries when they were built.  The  
<br>
problem occurred when trying to build an executable that included  
<br>
libraries with these undefined symbols.  The simplest solution I  
<br>
could think of was to edit include/mpif.h.in.  In the last two lines  
<br>
of this file I simply changed:
<br>
<p><span class="quotelev1"> &gt;       double precision MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev1"> &gt;       external MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<p>to:
<br>
<p>&lt;       double precision MPI_WTIME, MPI_WTICK
<br>
&lt;       external MPI_WTIME, MPI_WTICK
<br>
<p>This fixed the problem for me, and I am wondering whether this is a  
<br>
reasonable fix.  My understanding is that the functions are not  
<br>
actually part of open-mpi.  Would this approach break anything else?   
<br>
If not, it would be nice to include it, since the only other option I  
<br>
can think of for fixing things on OSX 10.4 with the current build  
<br>
procedures is to strip libraries of undefined symbols before they are  
<br>
used.
<br>
<p>Thanks,
<br>
Charles
<br>
<p><p>Charles A. Williams
<br>
Dept. of Earth &amp; Environmental Sciences
<br>
Science Center, 2C01B
<br>
Rensselaer Polytechnic Institute
<br>
Troy, NY  12180
<br>
Phone:    (518) 276-3369
<br>
FAX:        (518) 276-2012
<br>
e-mail:    willic3_at_[hidden]
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0281.php">Troy Telford: "[O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<li><strong>Previous message:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Reply:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Maybe reply:</strong> <a href="0290.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Maybe reply:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
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
