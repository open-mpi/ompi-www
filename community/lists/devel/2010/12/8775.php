<?
$subject_val = "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 18:08:38 2010" -->
<!-- isoreceived="20101213230838" -->
<!-- sent="Mon, 13 Dec 2010 18:08:34 -0500" -->
<!-- isosent="20101213230834" -->
<!-- name="David Fiala" -->
<!-- email="davidfiala_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)" -->
<!-- id="AANLkTikPX3behAy-AGA5yV34b3k3KAgCbidEdoMRrocJ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)<br>
<strong>From:</strong> David Fiala (<em>davidfiala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 18:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I noticed that I can get the openib transport to work successfully
<br>
under version 1.4.3 when configured with: --with-openib
<br>
--enable-openib-ibcm
<br>
<p>When I configure 1.5 or 1.5.1 I used: --with-openib (noting the
<br>
absence of the ibmc flag)
<br>
However, when I actually try to use openib on a basic MPI program I
<br>
get a segfault such as the one copied below.
<br>
<p>Our IB hardware is:
<br>
InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s
<br>
- IB QDR / 10GigE] (rev b0)
<br>
<p>dfiala_at_compute-0-2 ~]$ mpirun -mca btl openib,self  ./mpitest/mpitest
<br>
[compute-0-2:07582] *** Process received signal ***
<br>
[compute-0-2:07582] Signal: Segmentation fault (11)
<br>
[compute-0-2:07582] Signal code: Address not mapped (1)
<br>
[compute-0-2:07582] Failing at address: 0x2
<br>
[compute-0-2:07582] [ 0] /lib64/libpthread.so.0 [0x3ed2e0eb10]
<br>
[compute-0-2:07582] [ 1] /usr/lib64/libmlx4-rdmav2.so [0x2aaaab0de5d1]
<br>
[compute-0-2:07582] [ 2]
<br>
/home/dfiala/openmpi/install-1.5.1/lib/openmpi/mca_btl_openib.so
<br>
[0x2b1637155f15]
<br>
[compute-0-2:07582] [ 3]
<br>
/home/dfiala/openmpi/install-1.5.1/lib/openmpi/mca_bml_r2.so
<br>
[0x2b163691b4b2]
<br>
[compute-0-2:07582] [ 4]
<br>
/home/dfiala/openmpi/install-1.5.1/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b1636d3844f]
<br>
[compute-0-2:07582] [ 5] /home/dfiala/openmpi/install/lib/libmpi.so.1
<br>
[0x2b16347afe37]
<br>
[compute-0-2:07582] [ 6]
<br>
/home/dfiala/openmpi/install/lib/libmpi.so.1(MPI_Init+0xf0)
<br>
[0x2b16347c46d0]
<br>
[compute-0-2:07582] [ 7] ./mpitest/mpitest(main+0x2b) [0x4008d3]
<br>
[compute-0-2:07582] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3ed261d994]
<br>
[compute-0-2:07582] [ 9] ./mpitest/mpitest [0x4007f9]
<br>
[compute-0-2:07582] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 7582 on node
<br>
compute-0-2.local exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Any ideas?
<br>
<p>Thanks for your help,
<br>
David Fiala
<br>
<p>North Carolina State University
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
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
