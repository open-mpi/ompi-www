<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 07:05:11 2007" -->
<!-- isoreceived="20070823110511" -->
<!-- sent="Thu, 23 Aug 2007 12:33:23 +0200" -->
<!-- isosent="20070823103323" -->
<!-- name="Bernd Schubert" -->
<!-- email="bs_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_FILE_NULL" -->
<!-- id="fajnpj$lbj$1_at_sea.gmane.org" -->
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
<strong>From:</strong> Bernd Schubert (<em>bs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 06:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Previous message:</strong> <a href="3910.php">Brian Barrett: "Re: [OMPI users] Error: error in configure (maybe libtool)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Reply:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I need to compile a benchmarking program and absolutely so far do not have
<br>
any experience with any MPI.
<br>
However, this looks like a general open-mpi problem, doesn't it?
<br>
<p>bschubert_at_lanczos MPI_IO&gt; make
<br>
cp ../globals.f90 ./; mpif90 -O2 -c ../globals.f90
<br>
mpif90 -O2 -c main.f90
<br>
mpif90 -O2 -c reader.f90
<br>
fortcom: Error: reader.f90, line 24: This name does not have a type, and
<br>
must have an explicit type.   [MPI_FILE_NULL]
<br>
call MPI_File_set_errhandler (MPI_FILE_NULL, MPI_ERRORS_ARE_FATAL, ierror)
<br>
------------------------------^
<br>
<p><p>When I define
<br>
<p>integer                            ::MPI_FILE_NULL=0
<br>
<p>compiling works fine.
<br>
<p><p>Thanks for any help,
<br>
Bernd
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Previous message:</strong> <a href="3910.php">Brian Barrett: "Re: [OMPI users] Error: error in configure (maybe libtool)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Reply:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
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
