<?
$subject_val = "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 10:28:26 2010" -->
<!-- isoreceived="20101201152826" -->
<!-- sent="Wed, 1 Dec 2010 09:28:20 -0600" -->
<!-- isosent="20101201152820" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?" -->
<!-- id="20101201152820.GB4508_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinHq-K2S-ixGqrod+SKHDrc=vnzTgSMu+=B5-nQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 10:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14964.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Previous message:</strong> <a href="14962.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14871.php">James Overfelt: "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14965.php">James Overfelt: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Reply:</strong> <a href="14965.php">James Overfelt: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Reply:</strong> <a href="14970.php">Jeff Squyres: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 22, 2010 at 04:40:14PM -0700, James Overfelt wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I have a small test case where a file created with MPI_File_open
</span><br>
<span class="quotelev1">&gt; is still open at the time MPI_Finalize is called.  In the actual
</span><br>
<span class="quotelev1">&gt; program there are lots of open files and it would be nice to avoid the
</span><br>
<span class="quotelev1">&gt; resulting &quot;Your MPI job will now abort.&quot; by either having MPI_Finalize
</span><br>
<span class="quotelev1">&gt; close the files or honor the error handler and return an error code
</span><br>
<span class="quotelev1">&gt; without an abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I've tried with with OpenMPI 1.4.3 and 1.5 with the same results.
</span><br>
<span class="quotelev1">&gt; Attached are the configure, compile and source files and the whole
</span><br>
<span class="quotelev1">&gt; program follows.
</span><br>
<p>under MPICH2, this simple test program does not abort.  You leak a lot
<br>
of resources (e.g. info structure allocated is not freed) but it
<br>
sounds like you are well aware of that. 
<br>
<p>under openmpi, this test program fails because openmpi is trying to
<br>
help you out.  I'm going to need some help from the openmpi folks
<br>
here, but the backtrace makes it look like MPI_Finalize is setting the
<br>
&quot;no more mpi calls allowed&quot; flag, and then goes and calls some mpi
<br>
routines to clean up the opened files:
<br>
<p>Breakpoint 1, 0xb7f7c346 in PMPI_Barrier () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
<br>
(gdb) where
<br>
#0  0xb7f7c346 in PMPI_Barrier () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
<br>
#1  0xb78a4c25 in mca_io_romio_dist_MPI_File_close () from /home/robl/work/soft/openmpi-1.4/lib/openmpi/mca_io_romio.so
<br>
#2  0xb787e8b3 in mca_io_romio_file_close () from /home/robl/work/soft/openmpi-1.4/lib/openmpi/mca_io_romio.so
<br>
#3  0xb7f591b1 in file_destructor () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
<br>
#4  0xb7f58f28 in ompi_file_finalize () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
<br>
#5  0xb7f67eb3 in ompi_mpi_finalize () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
<br>
#6  0xb7f82828 in PMPI_Finalize () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
<br>
#7  0x0804f9c2 in main (argc=1, argv=0xbfffed94) at file_error.cc:17
<br>
<p>Why is there an MPI_Barrier in the close path?  It has to do with our
<br>
implementation of shared file pointers.  If you run this test on a file system
<br>
that does not support shared file pointers ( PVFS, for example), you might get
<br>
a little further.
<br>
<p>So, I think the ball is back in the OpenMPI court: they have to
<br>
re-jigger the order of the destructors so that closing files comes a
<br>
little earlier in the shutdown process.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14964.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Previous message:</strong> <a href="14962.php">Shiqing Fan: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14871.php">James Overfelt: "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14965.php">James Overfelt: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Reply:</strong> <a href="14965.php">James Overfelt: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Reply:</strong> <a href="14970.php">Jeff Squyres: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
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
