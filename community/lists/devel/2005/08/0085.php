<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 08:29:46 2005" -->
<!-- isoreceived="20050808132946" -->
<!-- sent="Mon, 8 Aug 2005 16:29:06 +0300" -->
<!-- isosent="20050808132906" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="compile error" -->
<!-- id="20050808132906.GF16361_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 08:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Gleb Natapov: "[PATCH] for ompi_free_list.c"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've got this compile error with the latest svn code.
<br>
<p>mca/ns/base/.libs/libmca_ns_base.a(ns_base_local_fns.o)(.text+0xfa7): In
<br>
function `orte_ns_base_get_peers':
<br>
/home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_local_fns.c:609:
<br>
multiple definition of `orte_ns_base_get_peers'
<br>
mca/ns/base/.libs/libmca_ns_base.a(ns_base_nds.o)(.text+0x116):/home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_nds.c:31:
<br>
first defined here
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [liborte.la] Error 1
<br>
make[2]: Leaving directory `/export/home/glebn/OpenMPI_latest/ompi/orte'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export/home/glebn/OpenMPI_latest/ompi/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0086.php">Gleb Natapov: "[PATCH] for ompi_free_list.c"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
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
