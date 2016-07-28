<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 09:41:46 2006" -->
<!-- isoreceived="20060913134146" -->
<!-- sent="Wed, 13 Sep 2006 15:41:42 +0200" -->
<!-- isosent="20060913134142" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="[OMPI devel] communication bug in collective module query/init" -->
<!-- id="20060913154142.n5h9t443xck4koo4_at_mail.tu-chemnitz.de" -->
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
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 09:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Sunil Patil: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Previous message:</strong> <a href="1066.php">Aleph One: "[OMPI devel] Profiling open mpi code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>recently I've discovered a strange bug, which occurs when you try to 
<br>
communicate within mca_coll_*_comm_query() or mca_coll_*_module_init(). 
<br>
The interesting thing is that it only fails for larger communicators. 
<br>
Until now, I wasn't sure if this is a problem of my own collective 
<br>
component, or a bug in OpenMPI. Since I've found a case where it fails 
<br>
even without my component, I'm convinced that I shouldn't hunt it 
<br>
alone. ;-)
<br>
<p>$ mpiexec -np 8 ... --mca coll_hierarch_priority 50 any_app
<br>
# runs ok
<br>
$ mpiexec -np 50 ... --mca coll_hierarch_priority 50 any_app
<br>
[0,1,0][../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:622:mca_btl_tcp_component_recv_handler] 
<br>
errno=11
<br>
mpiexec: killing job...
<br>
<p>Kind regards,
<br>
&nbsp;&nbsp;&nbsp;Christian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Sunil Patil: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Previous message:</strong> <a href="1066.php">Aleph One: "[OMPI devel] Profiling open mpi code"</a>
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
