<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 11:30:02 2005" -->
<!-- isoreceived="20051108163002" -->
<!-- sent="Tue, 8 Nov 2005 08:29:40 -0800" -->
<!-- isosent="20051108162940" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] help with openmpi rc5r8005" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142CA39_at_XCH-SW-1V1.sw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 11:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0287.php">Jeff Squyres: "Re: [O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>Previous message:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0287.php">Jeff Squyres: "Re: [O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>Reply:</strong> <a href="0287.php">Jeff Squyres: "Re: [O-MPI users] help with openmpi rc5r8005"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am again trying to build and run the Nasa Overflow 1.8ab version using
<br>
Open MPI and have run into this error message :
<br>
<p>[hsd653:05053] *** An error occurred in MPI_Allreduce: the reduction
<br>
operation M
<br>
PI_OP_MIN is not defined on the MPI_DBLPREC datatype
<br>
[hsd653:05053] *** on communicator MPI_COMM_WORLD
<br>
[hsd653:05053] *** MPI_ERR_OP: invalid reduce operation
<br>
[hsd653:05053] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[hsd652:04317] *** An error occurred in MPI_Allreduce: the reduction
<br>
operation M
<br>
PI_OP_MIN is not defined on the MPI_DBLPREC datatype
<br>
[hsd652:04317] *** on communicator MPI_COMM_WORLD
<br>
[hsd652:04317] *** MPI_ERR_OP: invalid reduce operation
<br>
[hsd652:04317] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun: killing job...
<br>
------------------------------------------------------------------------
<br>
<pre>
--
WARNING: mpirun encountered an abnormal exit.
This means that mpirun exited before it received notification that all
started processes had terminated.  You should double check and ensure
that there are no runaway processes still executing.
Any ideas why this is happening??
Bernie Borenstein
The Boeing Company
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0287.php">Jeff Squyres: "Re: [O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>Previous message:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0287.php">Jeff Squyres: "Re: [O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>Reply:</strong> <a href="0287.php">Jeff Squyres: "Re: [O-MPI users] help with openmpi rc5r8005"</a>
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
