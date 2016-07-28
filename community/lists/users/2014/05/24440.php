<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 12:23:42 2014" -->
<!-- isoreceived="20140519162342" -->
<!-- sent="Mon, 19 May 2014 11:23:32 -0500" -->
<!-- isosent="20140519162332" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="537A3004.7030904_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5374C20A.7010906_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_File_set_view?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 12:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24441.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24441.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24441.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/15/2014 08:32 AM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; could you try just for curiosity to force to use OMPIO? e.g.
</span><br>
<span class="quotelev1">&gt; mpirun --mca io ompio ....
</span><br>
<p>Edgar, what is in the air that there are now three bug reports against 
<br>
ROMIO's flattening code in the last month?
<br>
<p>We've fixed this upstream in ROMIO by ignoring zero-length blocks, but 
<br>
George Bosilca suggested Open-MPI's fix for that might have been too 
<br>
aggressive.
<br>
<p>For those of you not on the mpich-discuss list, we've determined that 
<br>
whatever problem MPICH had with Oriol Canela-Xandri's test case has been 
<br>
fixed in the latest from-git versions.
<br>
<p>OMPIO uses OpenMPI's datatype processing, so if they both handle 
<br>
zero-length blocks the same way, everything's fine.  ROMIO processes 
<br>
datatypes internally (providing a third implementation of MPI datatype 
<br>
processing.  sigh.).  If there's a disagreement about how to handle 
<br>
these special cases, memory errors such as you report can happen.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/15/2014 3:56 AM, CANELA-XANDRI Oriol wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I installed and tried with version 1.8.1 but it also fails. I see the error when there are some processes without any matrix block. It's not a common situation, but this makes me feel unsure about I am not doing something wrong.  The error I get is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Error in `./binary': free(): invalid size: 0x0000000000a34c00 ***
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f06a50a7ff0]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f06a50a7f77]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f06a50ab5e8]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f06a50e54fb]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f06a50f1996]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f0691e12c02]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f0691df7189]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f0691de9dd8]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f06a5ea02c6]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f06a5ea0811]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f06a5edc118]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f06a5092de5]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13969] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f1857201ff0]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f1857201f77]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f18572055e8]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f185723f4fb]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f185724b996]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f18459d2c02]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f18459b7189]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f18459a9dd8]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f1857ffa2c6]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f1857ffa811]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f1858036118]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f18571ecde5]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13975] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f5844a43ff0]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f5844a43f77]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f5844a475e8]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f5844a814fb]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f58315f2c02]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f58315d7189]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f58315c9dd8]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f584583c2c6]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f584583c811]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f5845878118]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f5844a2ede5]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev2">&gt;&gt; [oriol-VirtualBox:13972] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 2 with PID 13969 on node oriol-VirtualBox exited on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="24441.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24441.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24441.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
