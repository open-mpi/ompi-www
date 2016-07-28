<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 12:47:19 2014" -->
<!-- isoreceived="20140519164719" -->
<!-- sent="Mon, 19 May 2014 11:47:29 -0500" -->
<!-- isosent="20140519164729" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="537A35A1.40501_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="537A3004.7030904_at_mcs.anl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 12:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24442.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
not sure what you mean. The bug reports were not correlated, and the
<br>
previous one was on the 1.6 series which I understand had a fairly
<br>
outdated version of ROMIO.
<br>
<p>We had last year a bug report from a user with a problem with 0 byte
<br>
file view, and added special code for handling that in OMPIO. I would
<br>
have to dig up the details, but if I remember correctly OMPIO doesn't
<br>
even go into the derived datatype code if the size of the fileview is
<br>
zero, and I would suspect that's why we  pass the test. I was curious
<br>
whether that fix would work for this scenario as well.
<br>
<p>Edgar
<br>
<p>On 5/19/2014 11:23 AM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/15/2014 08:32 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; could you try just for curiosity to force to use OMPIO? e.g.
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca io ompio ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar, what is in the air that there are now three bug reports against
</span><br>
<span class="quotelev1">&gt; ROMIO's flattening code in the last month?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've fixed this upstream in ROMIO by ignoring zero-length blocks, but
</span><br>
<span class="quotelev1">&gt; George Bosilca suggested Open-MPI's fix for that might have been too
</span><br>
<span class="quotelev1">&gt; aggressive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For those of you not on the mpich-discuss list, we've determined that
</span><br>
<span class="quotelev1">&gt; whatever problem MPICH had with Oriol Canela-Xandri's test case has been
</span><br>
<span class="quotelev1">&gt; fixed in the latest from-git versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPIO uses OpenMPI's datatype processing, so if they both handle
</span><br>
<span class="quotelev1">&gt; zero-length blocks the same way, everything's fine.  ROMIO processes
</span><br>
<span class="quotelev1">&gt; datatypes internally (providing a third implementation of MPI datatype
</span><br>
<span class="quotelev1">&gt; processing.  sigh.).  If there's a disagreement about how to handle
</span><br>
<span class="quotelev1">&gt; these special cases, memory errors such as you report can happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/15/2014 3:56 AM, CANELA-XANDRI Oriol wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, I installed and tried with version 1.8.1 but it also fails. I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the error when there are some processes without any matrix block.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's not a common situation, but this makes me feel unsure about I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not doing something wrong.  The error I get is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error in `./binary': free(): invalid size: 0x0000000000a34c00 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f06a50a7ff0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f06a50a7f77]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f06a50ab5e8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f06a50e54fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f06a50f1996]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f0691e12c02]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f0691df7189]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f0691de9dd8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f06a5ea02c6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f06a5ea0811]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f06a5edc118]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f06a5092de5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13969] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f1857201ff0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f1857201f77]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f18572055e8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f185723f4fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f185724b996]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f18459d2c02]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f18459b7189]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f18459a9dd8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f1857ffa2c6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f1857ffa811]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f1858036118]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f18571ecde5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13975] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f5844a43ff0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f5844a43f77]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f5844a475e8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f5844a814fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f58315f2c02]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f58315d7189]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f58315c9dd8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f584583c2c6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f584583c811]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f5845878118]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f5844a2ede5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [oriol-VirtualBox:13972] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 2 with PID 13969 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oriol-VirtualBox exited on signal 6 (Aborted).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24441/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24442.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>In reply to:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
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
