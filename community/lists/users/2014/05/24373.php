<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 04:56:28 2014" -->
<!-- isoreceived="20140515085628" -->
<!-- sent="Thu, 15 May 2014 08:56:10 +0000" -->
<!-- isosent="20140515085610" -->
<!-- name="CANELA-XANDRI Oriol" -->
<!-- email="Oriol.CAnela-Xandri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="eb450c1f3fd14df1971585e8a6c81f24_at_AMSPR05MB264.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="687CC7F3-66EA-410E-BC06-DB4F7EFF6F0A_at_open-mpi.org" -->
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
<strong>From:</strong> CANELA-XANDRI Oriol (<em>Oriol.CAnela-Xandri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 04:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24372.php">Bennet Fauber: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24354.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I installed and tried with version 1.8.1 but it also fails. I see the error when there are some processes without any matrix block. It's not a common situation, but this makes me feel unsure about I am not doing something wrong.  The error I get is:
<br>
<p>*** Error in `./binary': free(): invalid size: 0x0000000000a34c00 ***
<br>
[oriol-VirtualBox:13975] *** Process received signal ***
<br>
[oriol-VirtualBox:13975] Signal: Aborted (6)
<br>
[oriol-VirtualBox:13975] Signal code:  (-6)
<br>
[oriol-VirtualBox:13969] *** Process received signal ***
<br>
[oriol-VirtualBox:13969] Signal: Aborted (6)
<br>
[oriol-VirtualBox:13969] Signal code:  (-6)
<br>
======= Backtrace: =========
<br>
/lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
<br>
[oriol-VirtualBox:13969] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f06a50a7ff0]
<br>
[oriol-VirtualBox:13969] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f06a50a7f77]
<br>
[oriol-VirtualBox:13969] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f06a50ab5e8]
<br>
[oriol-VirtualBox:13969] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f06a50e54fb]
<br>
[oriol-VirtualBox:13969] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f06a50f1996]
<br>
[oriol-VirtualBox:13969] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f0691e12c02]
<br>
[oriol-VirtualBox:13969] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f0691df7189]
<br>
[oriol-VirtualBox:13969] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f0691de9dd8]
<br>
[oriol-VirtualBox:13969] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f06a5ea02c6]
<br>
[oriol-VirtualBox:13969] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f06a5ea0811]
<br>
[oriol-VirtualBox:13969] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f06a5edc118]
<br>
[oriol-VirtualBox:13969] [11] ./binary[0x42099e]
<br>
[oriol-VirtualBox:13969] [12] ./binary[0x48ed86]
<br>
[oriol-VirtualBox:13969] [13] ./binary[0x40e49f]
<br>
[oriol-VirtualBox:13969] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f06a5092de5]
<br>
[oriol-VirtualBox:13969] [15] ./binary[0x40d679]
<br>
[oriol-VirtualBox:13969] *** End of error message ***
<br>
[oriol-VirtualBox:13975] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f1857201ff0]
<br>
[oriol-VirtualBox:13975] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f1857201f77]
<br>
[oriol-VirtualBox:13975] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f18572055e8]
<br>
[oriol-VirtualBox:13975] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f185723f4fb]
<br>
[oriol-VirtualBox:13975] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f185724b996]
<br>
[oriol-VirtualBox:13975] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f18459d2c02]
<br>
[oriol-VirtualBox:13975] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f18459b7189]
<br>
[oriol-VirtualBox:13975] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f18459a9dd8]
<br>
[oriol-VirtualBox:13975] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f1857ffa2c6]
<br>
[oriol-VirtualBox:13975] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f1857ffa811]
<br>
[oriol-VirtualBox:13975] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f1858036118]
<br>
[oriol-VirtualBox:13975] [11] ./binary[0x42099e]
<br>
[oriol-VirtualBox:13975] [12] ./binary[0x48ed86]
<br>
[oriol-VirtualBox:13975] [13] ./binary[0x40e49f]
<br>
[oriol-VirtualBox:13975] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f18571ecde5]
<br>
[oriol-VirtualBox:13975] [15] ./binary[0x40d679]
<br>
[oriol-VirtualBox:13975] *** End of error message ***
<br>
[oriol-VirtualBox:13972] *** Process received signal ***
<br>
[oriol-VirtualBox:13972] Signal: Aborted (6)
<br>
[oriol-VirtualBox:13972] Signal code:  (-6)
<br>
[oriol-VirtualBox:13972] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f5844a43ff0]
<br>
[oriol-VirtualBox:13972] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f5844a43f77]
<br>
[oriol-VirtualBox:13972] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f5844a475e8]
<br>
[oriol-VirtualBox:13972] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f5844a814fb]
<br>
[oriol-VirtualBox:13972] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
<br>
[oriol-VirtualBox:13972] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f58315f2c02]
<br>
[oriol-VirtualBox:13972] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f58315d7189]
<br>
[oriol-VirtualBox:13972] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f58315c9dd8]
<br>
[oriol-VirtualBox:13972] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f584583c2c6]
<br>
[oriol-VirtualBox:13972] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f584583c811]
<br>
[oriol-VirtualBox:13972] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f5845878118]
<br>
[oriol-VirtualBox:13972] [11] ./binary[0x42099e]
<br>
[oriol-VirtualBox:13972] [12] ./binary[0x48ed86]
<br>
[oriol-VirtualBox:13972] [13] ./binary[0x40e49f]
<br>
[oriol-VirtualBox:13972] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f5844a2ede5]
<br>
[oriol-VirtualBox:13972] [15] ./binary[0x40d679]
<br>
[oriol-VirtualBox:13972] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 2 with PID 13969 on node oriol-VirtualBox exited on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
The University of Edinburgh is a charitable body, registered in
Scotland, with registration number SC005336.
-----Original Message-----
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
Sent: 14 May 2014 16:24
To: Open MPI Users
Subject: Re: [OMPI users] bug in MPI_File_set_view?
Our initial thinking was first half of June, but that is subject to change depending on severity of reported errors. FWIW: I don't believe we made any romio changes between 1.8.1 and the current 1.8.2 state, so using 1.8.1 should be a valid test.
On May 14, 2014, at 8:16 AM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
&gt; Is there an ETA for 1.8.2 general release instead of snapshot?
&gt; 
&gt; Thanks,  -- bennet
&gt; 
&gt; On Wed, May 14, 2014 at 10:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt; You might give it a try with 1.8.1 or the nightly snapshot from 1.8.2 
&gt;&gt; - we updated ROMIO since the 1.6 series, and whatever fix is required 
&gt;&gt; may be in the newer version
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On May 14, 2014, at 6:52 AM, CANELA-XANDRI Oriol &lt;Oriol.CAnela-Xandri_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; Hello,
&gt;&gt;&gt; 
&gt;&gt;&gt; I am using MPI IO for writing/reading  a block cyclic distribution matrix into a file.
&gt;&gt;&gt; 
&gt;&gt;&gt; It works fine except when there is some MPI threads with no data (i.e. when the matrix is small enough, or the block size is big enough that some processes in the grid do not have any matrix block). In this case, I receive an error when calling MPI_File_set_view saying that the data cannot be freed. I tried with 1.3 and 1.6 versions. When I try with MPICH it works without errors. Could this be a bug?
&gt;&gt;&gt; 
&gt;&gt;&gt; My function is (where nBlockRows/nBlockCols define the size of the blocks, nGlobRows/nGlobCols define the global size of the matrix, nProcRows/nProcCols define the dimensions of the process grid, and fname is the name of the file.):
&gt;&gt;&gt; 
&gt;&gt;&gt; void Matrix::writeMatrixMPI(std::string fname) { int dims[] = 
&gt;&gt;&gt; {this-&gt;nGlobRows, this-&gt;nGlobCols}; int dargs[] = {this-&gt;nBlockRows, 
&gt;&gt;&gt; this-&gt;nBlockCols}; int distribs[] = {MPI_DISTRIBUTE_CYCLIC, 
&gt;&gt;&gt; MPI_DISTRIBUTE_CYCLIC}; int dim[] = {communicator-&gt;nProcRows, 
&gt;&gt;&gt; communicator-&gt;nProcCols}; char nat[] = &quot;native&quot;; int rc; 
&gt;&gt;&gt; MPI_Datatype dcarray; MPI_File cFile; MPI_Status status;
&gt;&gt;&gt; 
&gt;&gt;&gt; MPI_Type_create_darray(communicator-&gt;mpiNumTasks, 
&gt;&gt;&gt; communicator-&gt;mpiRank, 2, dims, distribs, dargs, dim, 
&gt;&gt;&gt; MPI_ORDER_FORTRAN, MPI_DOUBLE, &amp;dcarray); MPI_Type_commit(&amp;dcarray);
&gt;&gt;&gt; 
&gt;&gt;&gt; std::vector&lt;char&gt; fn(fname.begin(), fname.end()); 
&gt;&gt;&gt; fn.push_back('\0'); rc = MPI_File_open(MPI_COMM_WORLD, &amp;fn[0], 
&gt;&gt;&gt; MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;cFile); if(rc){
&gt;&gt;&gt;   std::stringstream ss;
&gt;&gt;&gt;   ss &lt;&lt; &quot;Error: Failed to open file: &quot; &lt;&lt; rc;
&gt;&gt;&gt;   misc.error(ss.str(), 0);
&gt;&gt;&gt; }
&gt;&gt;&gt; else
&gt;&gt;&gt; {
&gt;&gt;&gt;   MPI_File_set_view(cFile, 0, MPI_DOUBLE, dcarray, nat, MPI_INFO_NULL);
&gt;&gt;&gt;   MPI_File_write_all(cFile, this-&gt;m, this-&gt;nRows*this-&gt;nCols, 
&gt;&gt;&gt; MPI_DOUBLE, &amp;status); } MPI_File_close(&amp;cFile); 
&gt;&gt;&gt; MPI_Type_free(&amp;dcarray); }
&gt;&gt;&gt; 
&gt;&gt;&gt; Best regards,
&gt;&gt;&gt; 
&gt;&gt;&gt; Oriol
&gt;&gt;&gt; 
&gt;&gt;&gt; --
&gt;&gt;&gt; The University of Edinburgh is a charitable body, registered in 
&gt;&gt;&gt; Scotland, with registration number SC005336.
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24372.php">Bennet Fauber: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24354.php">Ralph Castain: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
