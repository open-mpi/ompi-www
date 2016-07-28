<?
$subject_val = "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 13:00:24 2010" -->
<!-- isoreceived="20101201180024" -->
<!-- sent="Wed, 1 Dec 2010 11:00:19 -0700" -->
<!-- isosent="20101201180019" -->
<!-- name="James Overfelt" -->
<!-- email="overfelt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?" -->
<!-- id="AANLkTimrKrRL8a4hkAS4c8HYRZdxNxN-jBM5RvyFz4Xg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101201152820.GB4508_at_mcs.anl.gov" -->
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
<strong>From:</strong> James Overfelt (<em>overfelt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 13:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14958.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14956.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="14955.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14962.php">Jeff Squyres: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 1, 2010 at 8:28 AM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mon, Nov 22, 2010 at 04:40:14PM -0700, James Overfelt wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; I have a small test case where a file created with MPI_File_open
</span><br>
<span class="quotelev2">&gt;&gt; is still open at the time MPI_Finalize is called. &#160;In the actual
</span><br>
<span class="quotelev2">&gt;&gt; program there are lots of open files and it would be nice to avoid the
</span><br>
<span class="quotelev2">&gt;&gt; resulting &quot;Your MPI job will now abort.&quot; by either having MPI_Finalize
</span><br>
<span class="quotelev2">&gt;&gt; close the files or honor the error handler and return an error code
</span><br>
<span class="quotelev2">&gt;&gt; without an abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; I've tried with with OpenMPI 1.4.3 and 1.5 with the same results.
</span><br>
<span class="quotelev2">&gt;&gt; Attached are the configure, compile and source files and the whole
</span><br>
<span class="quotelev2">&gt;&gt; program follows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; under MPICH2, this simple test program does not abort. &#160;You leak a lot
</span><br>
<span class="quotelev1">&gt; of resources (e.g. info structure allocated is not freed) but it
</span><br>
<span class="quotelev1">&gt; sounds like you are well aware of that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; under openmpi, this test program fails because openmpi is trying to
</span><br>
<span class="quotelev1">&gt; help you out. &#160;I'm going to need some help from the openmpi folks
</span><br>
<span class="quotelev1">&gt; here, but the backtrace makes it look like MPI_Finalize is setting the
</span><br>
<span class="quotelev1">&gt; &quot;no more mpi calls allowed&quot; flag, and then goes and calls some mpi
</span><br>
<span class="quotelev1">&gt; routines to clean up the opened files:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, 0xb7f7c346 in PMPI_Barrier () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0 &#160;0xb7f7c346 in PMPI_Barrier () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #1 &#160;0xb78a4c25 in mca_io_romio_dist_MPI_File_close () from /home/robl/work/soft/openmpi-1.4/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #2 &#160;0xb787e8b3 in mca_io_romio_file_close () from /home/robl/work/soft/openmpi-1.4/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #3 &#160;0xb7f591b1 in file_destructor () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4 &#160;0xb7f58f28 in ompi_file_finalize () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5 &#160;0xb7f67eb3 in ompi_mpi_finalize () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6 &#160;0xb7f82828 in PMPI_Finalize () from /home/robl/work/soft/openmpi-1.4/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #7 &#160;0x0804f9c2 in main (argc=1, argv=0xbfffed94) at file_error.cc:17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is there an MPI_Barrier in the close path? &#160;It has to do with our
</span><br>
<span class="quotelev1">&gt; implementation of shared file pointers. &#160;If you run this test on a file system
</span><br>
<span class="quotelev1">&gt; that does not support shared file pointers ( PVFS, for example), you might get
</span><br>
<span class="quotelev1">&gt; a little further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I think the ball is back in the OpenMPI court: they have to
</span><br>
<span class="quotelev1">&gt; re-jigger the order of the destructors so that closing files comes a
</span><br>
<span class="quotelev1">&gt; little earlier in the shutdown process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Rob,
<br>
<p>&nbsp;&nbsp;Thank you, that is the answer I was hoping for:  I'm not crazy and
<br>
it should be an easy fix.  I'll look through the OpenMPI source code
<br>
and maybe suggest a fix.
<br>
<p>jro
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14958.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14956.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>In reply to:</strong> <a href="14955.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14962.php">Jeff Squyres: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
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
