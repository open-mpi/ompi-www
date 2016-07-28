<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 07:17:34 2007" -->
<!-- isoreceived="20070711111734" -->
<!-- sent="Wed, 11 Jul 2007 13:17:02 +0200" -->
<!-- isosent="20070711111702" -->
<!-- name="Christoph Niethammer" -->
<!-- email="christoph.niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] patch for btl_sm.c fixing segmentation fault" -->
<!-- id="200707111317.33871.christoph.niethammer_at_web.de" -->
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
<strong>From:</strong> Christoph Niethammer (<em>christoph.niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 07:17:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1843.php">Jeff Squyres: "[OMPI devel] Off topic: ptpd for time synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>Reply:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>Since some time I'm testing Open MPI at the HRLS. My main topic there is the 
<br>
thread support of Open MPI.
<br>
<p>Some time ago I found a segmentation fault when running the svn-trunk Version. 
<br>
Thanks to the help of Sven I could locate it now to be in the shared memory 
<br>
btl. (ompi/mca/btl/sm/btl_sm.c)
<br>
There the addresses of the fifos were modified because of the different memory 
<br>
mapping for the threads. Unfortunately this modification was not applied for 
<br>
the head_locks. 
<br>
<p>The attached patch should fix this problem.
<br>
Maybe someone could have a look on it?
<br>
<p>Regards 
<br>
<p>Christoph
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1844/btl_sm.c.diff">btl_sm.c.diff</a>
</ul>
<!-- attachment="btl_sm.c.diff" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1844/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1843.php">Jeff Squyres: "[OMPI devel] Off topic: ptpd for time synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>Reply:</strong> <a href="1848.php">Gleb Natapov: "Re: [OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
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
