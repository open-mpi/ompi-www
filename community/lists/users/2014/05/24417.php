<?
$subject_val = "Re: [OMPI users] bug in MPI_File_set_view?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 09:52:18 2014" -->
<!-- isoreceived="20140516135218" -->
<!-- sent="Thu, 15 May 2014 14:55:44 +0000" -->
<!-- isosent="20140515145544" -->
<!-- name="CANELA-XANDRI Oriol" -->
<!-- email="Oriol.CAnela-Xandri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_set_view?" -->
<!-- id="19acebbd2bd34a248302677ea2550155_at_AMSPR05MB264.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> CANELA-XANDRI Oriol (<em>Oriol.CAnela-Xandri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 10:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24418.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This option seems that fix the problem!
<br>
<p>Oriol
<br>
<p><p><pre>
-- 
The University of Edinburgh is a charitable body, registered in
Scotland, with registration number SC005336.
-----Original Message-----
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Edgar Gabriel
Sent: 15 May 2014 14:33
To: Open MPI Users
Subject: Re: [OMPI users] bug in MPI_File_set_view?
could you try just for curiosity to force to use OMPIO? e.g.
mpirun --mca io ompio ....
Thanks
Edgar
On 5/15/2014 3:56 AM, CANELA-XANDRI Oriol wrote:
&gt; Hi, I installed and tried with version 1.8.1 but it also fails. I see the error when there are some processes without any matrix block. It's not a common situation, but this makes me feel unsure about I am not doing something wrong.  The error I get is:
&gt; 
&gt; *** Error in `./binary': free(): invalid size: 0x0000000000a34c00 *** 
&gt; [oriol-VirtualBox:13975] *** Process received signal *** 
&gt; [oriol-VirtualBox:13975] Signal: Aborted (6) [oriol-VirtualBox:13975] 
&gt; Signal code:  (-6) [oriol-VirtualBox:13969] *** Process received 
&gt; signal *** [oriol-VirtualBox:13969] Signal: Aborted (6) 
&gt; [oriol-VirtualBox:13969] Signal code:  (-6) ======= Backtrace: 
&gt; ========= /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
&gt; [oriol-VirtualBox:13969] [ 0] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f06a50a7ff0]
&gt; [oriol-VirtualBox:13969] [ 1] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f06a50a7f77]
&gt; [oriol-VirtualBox:13969] [ 2] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f06a50ab5e8]
&gt; [oriol-VirtualBox:13969] [ 3] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f06a50e54fb]
&gt; [oriol-VirtualBox:13969] [ 4] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f06a50f1996]
&gt; [oriol-VirtualBox:13969] [ 5] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x
&gt; 7f0691e12c02] [oriol-VirtualBox:13969] [ 6] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f0691df718
&gt; 9] [oriol-VirtualBox:13969] [ 7] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_clos
&gt; e+0xe8)[0x7f0691de9dd8] [oriol-VirtualBox:13969] [ 8] 
&gt; /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f06a5ea02c6]
&gt; [oriol-VirtualBox:13969] [ 9] 
&gt; /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f06a5ea0811]
&gt; [oriol-VirtualBox:13969] [10] 
&gt; /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f06a5edc118]
&gt; [oriol-VirtualBox:13969] [11] ./binary[0x42099e] 
&gt; [oriol-VirtualBox:13969] [12] ./binary[0x48ed86] 
&gt; [oriol-VirtualBox:13969] [13] ./binary[0x40e49f] 
&gt; [oriol-VirtualBox:13969] [14] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f06a5092de5
&gt; ] [oriol-VirtualBox:13969] [15] ./binary[0x40d679] 
&gt; [oriol-VirtualBox:13969] *** End of error message *** 
&gt; [oriol-VirtualBox:13975] [ 0] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f1857201ff0]
&gt; [oriol-VirtualBox:13975] [ 1] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f1857201f77]
&gt; [oriol-VirtualBox:13975] [ 2] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f18572055e8]
&gt; [oriol-VirtualBox:13975] [ 3] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f185723f4fb]
&gt; [oriol-VirtualBox:13975] [ 4] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f185724b996]
&gt; [oriol-VirtualBox:13975] [ 5] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x
&gt; 7f18459d2c02] [oriol-VirtualBox:13975] [ 6] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f18459b718
&gt; 9] [oriol-VirtualBox:13975] [ 7] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_clos
&gt; e+0xe8)[0x7f18459a9dd8] [oriol-VirtualBox:13975] [ 8] 
&gt; /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f1857ffa2c6]
&gt; [oriol-VirtualBox:13975] [ 9] 
&gt; /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f1857ffa811]
&gt; [oriol-VirtualBox:13975] [10] 
&gt; /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f1858036118]
&gt; [oriol-VirtualBox:13975] [11] ./binary[0x42099e] 
&gt; [oriol-VirtualBox:13975] [12] ./binary[0x48ed86] 
&gt; [oriol-VirtualBox:13975] [13] ./binary[0x40e49f] 
&gt; [oriol-VirtualBox:13975] [14] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f18571ecde5
&gt; ] [oriol-VirtualBox:13975] [15] ./binary[0x40d679] 
&gt; [oriol-VirtualBox:13975] *** End of error message *** 
&gt; [oriol-VirtualBox:13972] *** Process received signal *** 
&gt; [oriol-VirtualBox:13972] Signal: Aborted (6) [oriol-VirtualBox:13972] 
&gt; Signal code:  (-6) [oriol-VirtualBox:13972] [ 0] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x36ff0)[0x7f5844a43ff0]
&gt; [oriol-VirtualBox:13972] [ 1] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(gsignal+0x37)[0x7f5844a43f77]
&gt; [oriol-VirtualBox:13972] [ 2] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(abort+0x148)[0x7f5844a475e8]
&gt; [oriol-VirtualBox:13972] [ 3] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x744fb)[0x7f5844a814fb]
&gt; [oriol-VirtualBox:13972] [ 4] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x80996)[0x7f5844a8d996]
&gt; [oriol-VirtualBox:13972] [ 5] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIOI_Delete_flattened+0x62)[0x
&gt; 7f58315f2c02] [oriol-VirtualBox:13972] [ 6] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(ADIO_Close+0x1f9)[0x7f58315d718
&gt; 9] [oriol-VirtualBox:13972] [ 7] 
&gt; /usr/local/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_clos
&gt; e+0xe8)[0x7f58315c9dd8] [oriol-VirtualBox:13972] [ 8] 
&gt; /usr/local/lib/libmpi.so.1(+0x3a2c6)[0x7f584583c2c6]
&gt; [oriol-VirtualBox:13972] [ 9] 
&gt; /usr/local/lib/libmpi.so.1(ompi_file_close+0x41)[0x7f584583c811]
&gt; [oriol-VirtualBox:13972] [10] 
&gt; /usr/local/lib/libmpi.so.1(PMPI_File_close+0x78)[0x7f5845878118]
&gt; [oriol-VirtualBox:13972] [11] ./binary[0x42099e] 
&gt; [oriol-VirtualBox:13972] [12] ./binary[0x48ed86] 
&gt; [oriol-VirtualBox:13972] [13] ./binary[0x40e49f] 
&gt; [oriol-VirtualBox:13972] [14] 
&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f5844a2ede5
&gt; ] [oriol-VirtualBox:13972] [15] ./binary[0x40d679] 
&gt; [oriol-VirtualBox:13972] *** End of error message ***
&gt; ----------------------------------------------------------------------
&gt; ---- mpirun noticed that process rank 2 with PID 13969 on node 
&gt; oriol-VirtualBox exited on signal 6 (Aborted).
&gt; ----------------------------------------------------------------------
&gt; ----
&gt; 
&gt; 
--
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24418.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24381.php">Edgar Gabriel: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
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
