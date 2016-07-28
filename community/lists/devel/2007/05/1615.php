<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 31 19:25:09 2007" -->
<!-- isoreceived="20070531232509" -->
<!-- sent="Thu, 31 May 2007 16:25:04 -0700" -->
<!-- isosent="20070531232504" -->
<!-- name="Ralph Campbell" -->
<!-- email="ralph.campbell_at_[hidden]" -->
<!-- subject="[OMPI devel] request help debugging openmpi on openib/ipath" -->
<!-- id="1180653904.3407.447.camel_at_brick.pathscale.com" -->
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
<strong>From:</strong> Ralph Campbell (<em>ralph.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-31 19:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1616.php">George Bosilca: "[OMPI devel] Multi-NIC support"</a>
<li><strong>Previous message:</strong> <a href="1614.php">Ralph H Castain: "[OMPI devel] Why the HNP gets so big..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I successfully compiled and installed openmpi 1.2.2 SVN r14613
<br>
on a SLES 10 2.6.16 Linux kernel with gcc 4.1.0 (x86_64).
<br>
<p>I can run the Intel MPI benchmarks OK at np=2 but at np=4,
<br>
it hangs.
<br>
<p>If I change /usr/share/openmpi/mca-btl-openib-hca-params.ini
<br>
[QLogic InfiniPath]
<br>
use_eager_rdma = 0
<br>
Then, it gets much farther before hanging on 2MB+ messages.
<br>
If I create .openmpi/mca-params.conf with
<br>
min_rdma_size = 2147483648
<br>
The benchmark completes reliably.
<br>
<p>When the hang happens, the ipath driver thinks all the posted
<br>
work requests and completion entries have been generated
<br>
and openmpi seems to think they haven't all completed.
<br>
<p>Can someone point me to the code where RDMA write is polled
<br>
on the destination node?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1616.php">George Bosilca: "[OMPI devel] Multi-NIC support"</a>
<li><strong>Previous message:</strong> <a href="1614.php">Ralph H Castain: "[OMPI devel] Why the HNP gets so big..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1634.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openmpi on openib/ipath"</a>
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
