<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 09:32:43 2014" -->
<!-- isoreceived="20140515133243" -->
<!-- sent="Thu, 15 May 2014 08:32:58 -0500" -->
<!-- isosent="20140515133258" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="5374C20A.7010906_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="eb450c1f3fd14df1971585e8a6c81f24_at_AMSPR05MB264.eurprd05.prod.outlook.com" -->
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
<strong>Date:</strong> 2014-05-15 09:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24382.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24417.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24417.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
could you try just for curiosity to force to use OMPIO? e.g.
<br>
mpirun --mca io ompio ....
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 5/15/2014 3:56 AM, CANELA-XANDRI Oriol wrote:
<br>
<span class="quotelev1">&gt; Hi, I installed and tried with version 1.8.1 but it also fails. I see the error when there are some processes without any matrix block. It's not a common situation, but this makes me feel unsure about I am not doing something wrong.  The error I get is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Error in `./binary': free(): invalid size: 0x0000000000a34c00 ***
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f06a50a7ff0]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f06a50a7f77]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f06a50ab5e8]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f06a50e54fb]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f06a50f1996]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f0691e12c02]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f0691df7189]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f0691de9dd8]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f06a5ea02c6]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f06a5ea0811]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f06a5edc118]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f06a5092de5]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13969] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f1857201ff0]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f1857201f77]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f18572055e8]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f185723f4fb]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f185724b996]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f18459d2c02]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f18459b7189]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f18459a9dd8]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f1857ffa2c6]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f1857ffa811]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f1858036118]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f18571ecde5]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13975] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f5844a43ff0]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 1] /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f5844a43f77]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 2] /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f5844a475e8]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 3] /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f5844a814fb]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 4] /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 5] /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x7f58315f2c02]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 6] /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f58315d7189]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 7] /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xe8)[0x7f58315c9dd8]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 8] /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f584583c2c6]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [ 9] /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f584583c811]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [10] /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f5845878118]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [11] ./binary[0x42099e]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [12] ./binary[0x48ed86]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [13] ./binary[0x40e49f]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [14] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f5844a2ede5]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] [15] ./binary[0x40d679]
</span><br>
<span class="quotelev1">&gt; [oriol-VirtualBox:13972] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 2 with PID 13969 on node oriol-VirtualBox exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24381/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24382.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24380.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24417.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24417.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Reply:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
