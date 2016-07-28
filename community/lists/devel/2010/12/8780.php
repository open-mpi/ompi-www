<?
$subject_val = "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 21:10:55 2010" -->
<!-- isoreceived="20101216021055" -->
<!-- sent="Wed, 15 Dec 2010 21:10:50 -0500" -->
<!-- isosent="20101216021050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)" -->
<!-- id="A6743033-CFB3-4BA6-B2CD-8D73450DC1F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikPX3behAy-AGA5yV34b3k3KAgCbidEdoMRrocJ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 21:10:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8781.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>In reply to:</strong> <a href="8775.php">David Fiala: "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2010, at 6:08 PM, David Fiala wrote:
<br>
<p><span class="quotelev1">&gt; I noticed that I can get the openib transport to work successfully
</span><br>
<span class="quotelev1">&gt; under version 1.4.3 when configured with: --with-openib
</span><br>
<span class="quotelev1">&gt; --enable-openib-ibcm
</span><br>
<p>I'm surprised; the IBCM connection manager support in OMPI is not complete.  You probably shouldn't be using it.
<br>
<p><span class="quotelev1">&gt; When I configure 1.5 or 1.5.1 I used: --with-openib (noting the
</span><br>
<span class="quotelev1">&gt; absence of the ibmc flag)
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; However, when I actually try to use openib on a basic MPI program I
</span><br>
<span class="quotelev1">&gt; get a segfault such as the one copied below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our IB hardware is:
</span><br>
<span class="quotelev1">&gt; InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s
</span><br>
<span class="quotelev1">&gt; - IB QDR / 10GigE] (rev b0)
</span><br>
<p>Ick.  Mellanox, can you reply?
<br>
<p><span class="quotelev1">&gt; dfiala_at_compute-0-2 ~]$ mpirun -mca btl openib,self  ./mpitest/mpitest
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] Failing at address: 0x2
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 0] /lib64/libpthread.so.0 [0x3ed2e0eb10]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 1] /usr/lib64/libmlx4-rdmav2.so [0x2aaaab0de5d1]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/dfiala/openmpi/install-1.5.1/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2b1637155f15]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/dfiala/openmpi/install-1.5.1/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; [0x2b163691b4b2]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/dfiala/openmpi/install-1.5.1/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b1636d3844f]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 5] /home/dfiala/openmpi/install/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; [0x2b16347afe37]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/dfiala/openmpi/install/lib/libmpi.so.1(MPI_Init+0xf0)
</span><br>
<span class="quotelev1">&gt; [0x2b16347c46d0]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 7] ./mpitest/mpitest(main+0x2b) [0x4008d3]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3ed261d994]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] [ 9] ./mpitest/mpitest [0x4007f9]
</span><br>
<span class="quotelev1">&gt; [compute-0-2:07582] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 7582 on node
</span><br>
<span class="quotelev1">&gt; compute-0-2.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; David Fiala
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; North Carolina State University
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8781.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>In reply to:</strong> <a href="8775.php">David Fiala: "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
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
