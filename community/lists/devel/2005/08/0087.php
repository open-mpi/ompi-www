<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 08:44:54 2005" -->
<!-- isoreceived="20050808134454" -->
<!-- sent="Mon, 08 Aug 2005 07:44:48 -0600" -->
<!-- isosent="20050808134448" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  compile error" -->
<!-- id="6.2.3.4.2.20050808074208.01d2b330_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050808132906.GF16361_at_minantech.com" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 08:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Gleb Natapov: "[PATCH] for ompi_free_list.c"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Gleb Natapov: "compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very interesting - it built fine for me (building static). However, 
<br>
the ns_base_nds.c file is &quot;stale&quot;, so I just committed a &quot;delete&quot; of 
<br>
that file. It shouldn't have been building anyway as it isn't in the 
<br>
Makefile. My guess, therefore, is that you are building dynamically 
<br>
and are encountering the old &quot;stale library&quot; problem.
<br>
<p>My commit won't fix that situation, unfortunately. If you are 
<br>
building dynamically, you need to remove your libraries (do an rm -rf 
<br>
of the directory root your provided as --prefix) to fix the problem.
<br>
<p>Ralph
<br>
<p>At 07:29 AM 8/8/2005, you wrote:
<br>
<span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've got this compile error with the latest svn code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mca/ns/base/.libs/libmca_ns_base.a(ns_base_local_fns.o)(.text+0xfa7): In
</span><br>
<span class="quotelev1">&gt;function `orte_ns_base_get_peers':
</span><br>
<span class="quotelev1">&gt;/home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_local_fns.c:609:
</span><br>
<span class="quotelev1">&gt;multiple definition of `orte_ns_base_get_peers'
</span><br>
<span class="quotelev1">&gt;mca/ns/base/.libs/libmca_ns_base.a(ns_base_nds.o)(.text+0x116):/home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_nds.c:31:
</span><br>
<span class="quotelev1">&gt;first defined here
</span><br>
<span class="quotelev1">&gt;collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;make[2]: *** [liborte.la] Error 1
</span><br>
<span class="quotelev1">&gt;make[2]: Leaving directory `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev1">&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;make[1]: Leaving directory `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev1">&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;                         Gleb.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Gleb Natapov: "[PATCH] for ompi_free_list.c"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Gleb Natapov: "compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
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
