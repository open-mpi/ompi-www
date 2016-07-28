<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 16:33:12 2006" -->
<!-- isoreceived="20060629203312" -->
<!-- sent="Thu, 29 Jun 2006 14:33:01 -0600" -->
<!-- isosent="20060629203301" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]" -->
<!-- id="99B3A320-67B3-4D69-8A0D-5FA1F505B049_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1151604918.24396.6.camel_at_beast.terraplex.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 16:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0953.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Previous message:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0953.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Reply:</strong> <a href="0953.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Owen,
<br>
<p>Taking this on list..
<br>
<p>If I run on n249 orte just hangs waiting for completion of the send.
<br>
<p>If I run on n248 I get:
<br>
<p>[ompi_at_node-192-168-111-248 ~]$ mpirun  -np 1 -mca btl self,openib ./ring
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x10
<br>
[0] func:/home/ompi/local/lib/libopal.so.0 [0x4000012d6c0]
<br>
[1] func:/lib64/libpthread.so.0 [0x40000257270]
<br>
[2] func:[0x100428]
<br>
[3] func:/home/ompi/local/lib/libopal.so.0 [0x40000158310]
<br>
[4] func:/lib64/libpthread.so.0 [0x40000251b10]
<br>
[5] func:/home/ompi/local/lib/libopal.so.0 [0x400001108e0]
<br>
[6] func:/home/ompi/local/lib/libopal.so.0 [0x4000010ea48]
<br>
[7] func:/home/ompi/local/lib/libopal.so.0 [0x40000104078]
<br>
[8] func:mpirun [0x10003a08]
<br>
[9] func:mpirun [0x10003474]
<br>
[10] func:mpirun [0x10002c50]
<br>
[11] func:/lib64/libc.so.6 [0x40000336dc8]
<br>
*** End of error message ***
<br>
Segmentation fault
<br>
<p><p><p>In order to debug can I get an xterm with proper x forwarding on this  
<br>
machine?
<br>
<p>- Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0953.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Previous message:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0953.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Reply:</strong> <a href="0953.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
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
