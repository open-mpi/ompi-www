<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  7 10:16:36 2013" -->
<!-- isoreceived="20130907141636" -->
<!-- sent="Sat, 07 Sep 2013 10:16:35 -0400" -->
<!-- isosent="20130907141635" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378563395.2085.19076249.6B88877A_at_webmail.messagingengine.com" -->
<!-- inreplyto="1378528785.3458.35.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-07 10:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22617.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22617.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, no luck.  My environment is:
<br>
<p>OpenMPI 1.6.5
<br>
gcc 4.8.1
<br>
Mac OS 10.8
<br>
<p>I found a ticket reporting a similar problem on OS X:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1982">https://svn.open-mpi.org/trac/ompi/ticket/1982</a>
<br>
<p>It said to make sure $prefix/share/ompi/mpif90-wrapper-data.txt had the
<br>
following line:
<br>
<p>compiler_flags=-Wl,-commons,use_dylibs
<br>
<p>I checked mine and it does (I even tried to include it explicitly on the
<br>
command line but without success), what should I do next?
<br>
<p><pre>
-- 
  Hugo Gagnon
On Sat, Sep 7, 2013, at 0:39, Tom Rosmond wrote:
&gt; Just as an experiment, try replacing
&gt; 
&gt; use mpi
&gt; 
&gt;   with
&gt; 
&gt; include 'mpif.h'
&gt; 
&gt; If that fixes the problem, you can confront the  OpenMPI experts
&gt; 
&gt; T. Rosmond
&gt; 
&gt; 
&gt; 
&gt; On Fri, 2013-09-06 at 23:14 -0400, Hugo Gagnon wrote:
&gt; &gt; Thanks for the input but it still doesn't work for me...  Here's the
&gt; &gt; version without MPI_IN_PLACE that does work:
&gt; &gt; 
&gt; &gt; program test
&gt; &gt; use mpi
&gt; &gt; integer :: ierr, myrank, a(2), a_loc(2) = 0
&gt; &gt; call MPI_Init(ierr)
&gt; &gt; call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
&gt; &gt; if (myrank == 0) then
&gt; &gt;   a_loc(1) = 1
&gt; &gt;   a_loc(2) = 2
&gt; &gt; else
&gt; &gt;   a_loc(1) = 3
&gt; &gt;   a_loc(2) = 4
&gt; &gt; endif
&gt; &gt; call MPI_Allreduce(a_loc,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
&gt; &gt; write(*,*) myrank, a(:)
&gt; &gt; call MPI_Finalize(ierr)
&gt; &gt; end program test
&gt; &gt; 
&gt; &gt; $ openmpif90 test.f90
&gt; &gt; $ openmpirun -np 2 a.out
&gt; &gt;            0           4           6
&gt; &gt;            1           4           6
&gt; &gt; 
&gt; &gt; Now I'd be curious to know why your OpenMPI implementation handles
&gt; &gt; MPI_IN_PLACE correctly and not mine!
&gt; &gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22617.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22617.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22619.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
