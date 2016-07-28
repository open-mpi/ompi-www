<?
$subject_val = "[OMPI users] Strange IO issues in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  6 10:28:28 2013" -->
<!-- isoreceived="20130306152828" -->
<!-- sent="Wed, 6 Mar 2013 10:28:02 -0500" -->
<!-- isosent="20130306152802" -->
<!-- name="Smith, Brian E." -->
<!-- email="smithbe_at_[hidden]" -->
<!-- subject="[OMPI users] Strange IO issues in MPI_Finalize" -->
<!-- id="C56124A4-4403-405C-A360-DAE9D37D6840_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Strange IO issues in MPI_Finalize<br>
<strong>From:</strong> Smith, Brian E. (<em>smithbe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-06 10:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21507.php">Limin Gu: "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21505.php">Bokassa: "Re: [OMPI users] High cpu usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI all,
<br>
<p>I have some code that uses parallel netCDF. I've run successfully on Titan (using the Cray MPICH derivative) and on my laptop (also running MPICH). However, when I run on one of our clusters running OMPI, the code barfs in MPI_Finalize() and doesn't write the complete/expected output files:
<br>
<p>[:17472] *** An error occurred in MPI_File_set_errhandler
<br>
[:17472] *** on a NULL communicator
<br>
[:17472] *** Unknown error
<br>
[:17472] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     After MPI_FINALIZE was invoked
<br>
&nbsp;&nbsp;Local host:
<br>
&nbsp;&nbsp;PID:        17472
<br>
--------------------------------------------------------------------------
<br>
<p>The stacks are:
<br>
PMPI_Finalize (pfinalize.c:46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_finalize (ompi_mpi_finalize.c:272)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_file_finalize (file.c:196)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_obj_run_destructors (opal_object.h:448)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file_destructor (file.c:273)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_to_romio_file_close (io_romio_file_open.c:59)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMPI_File_set_errhandler (pfile_set_errhandler.c:47)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:52)
<br>
<p>This is with OMPI 1.6.2 It is pnetCDF 1.3.1 on all 3 platforms.
<br>
<p>The code appears to have the right participants opening/closing the right files on the right communicators (a mixture of rank 0s on subcomms opening across their subcomms and some nodes opening on MPI_COMM_SELF). It looks to me like some IO is getting delayed until MPI_Finalize() suggesting perhaps I missed a wait() or close() pnetCDF call. 
<br>
<p>I don't necessarily think this is a bug in OMPI, I just don't know where to start looking in my code, since it is working fine on the two different versions of MPICH.
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21507.php">Limin Gu: "[OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21505.php">Bokassa: "Re: [OMPI users] High cpu usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
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
