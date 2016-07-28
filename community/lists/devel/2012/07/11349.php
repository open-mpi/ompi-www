<?
$subject_val = "[OMPI devel] ud oob is borked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 17:00:44 2012" -->
<!-- isoreceived="20120731210044" -->
<!-- sent="Tue, 31 Jul 2012 17:00:37 -0400" -->
<!-- isosent="20120731210037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ud oob is borked" -->
<!-- id="EFF6CD8E-C019-414E-8CAC-9010730435EC_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ud oob is borked<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 17:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's a compile error in the ud oob right now.  I tried a few different ways to fix it, but I'm still consistently getting segv's.  
<br>
<p>-----
<br>
[svbu-mpi046:02934] wc status = 2
<br>
[svbu-mpi046:02934] *** Process received signal ***
<br>
[svbu-mpi046:02934] Signal: Segmentation fault (11)
<br>
[svbu-mpi046:02934] Signal code: Address not mapped (1)
<br>
[svbu-mpi046:02934] Failing at address: 0x128
<br>
[svbu-mpi046:02934] [ 0] /lib64/libpthread.so.0() [0x3d5940f4a0]
<br>
[svbu-mpi046:02934] [ 1] /home/jsquyres/bogus/lib/libopen-rte.so.0(mca_oob_ud_msg_post_send+0x1ce) [0x7ffff7c686d7]
<br>
[svbu-mpi046:02934] [ 2] /home/jsquyres/bogus/lib/libopen-rte.so.0(mca_oob_ud_send_nb+0x5d1) [0x7ffff7c6a851]
<br>
[svbu-mpi046:02934] [ 3] /home/jsquyres/bogus/lib/libopen-rte.so.0(orte_rml_oob_send_buffer_nb+0x5bd) [0x7ffff7cb70f3]
<br>
[svbu-mpi046:02934] [ 4] /home/jsquyres/bogus/lib/libopen-rte.so.0(orte_daemon+0x17de) [0x7ffff7c1c701]
<br>
[svbu-mpi046:02934] [ 5] /home/jsquyres/bogus/bin/orted() [0x40082a]
<br>
[svbu-mpi046:02934] [ 6] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d5901ecdd]
<br>
[svbu-mpi046:02934] [ 7] /home/jsquyres/bogus/bin/orted() [0x4006e9]
<br>
[svbu-mpi046:02934] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
-----
<br>
<p>So that we don't get another night of 161K MTT failures at Cisco (before I killed it), I'm going to .ompi_ignore the ud oob on the trunk.
<br>
<p>Nathan: feel free to un-ompi-ignore it when you have it fixed.  Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11350.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
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
