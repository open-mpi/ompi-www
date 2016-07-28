<?
$subject_val = "[OMPI devel] inquiring about data structure in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 21:16:36 2010" -->
<!-- isoreceived="20100408011636" -->
<!-- sent="Thu, 8 Apr 2010 09:16:28 +0800 (CST)" -->
<!-- isosent="20100408011628" -->
<!-- name="luyang dong" -->
<!-- email="dongluyang2006_at_[hidden]" -->
<!-- subject="[OMPI devel] inquiring about data structure in openmpi" -->
<!-- id="852125.18304.qm_at_web15302.mail.cnb.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] inquiring about data structure in openmpi<br>
<strong>From:</strong> luyang dong (<em>dongluyang2006_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 21:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Previous message:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Reply:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear teachers:
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; In orte_globals.h, there is a data structure.
<br>
typedef struct {
<br>
&#160;&#160;&#160; /* index to node */
<br>
&#160;&#160;&#160; int32_t node;
<br>
&#160;&#160;&#160; /* local rank */
<br>
&#160;&#160;&#160; orte_local_rank_t local_rank;
<br>
&#160;&#160;&#160; /* node rank */
<br>
&#160;&#160;&#160; orte_node_rank_t node_rank;
<br>
} orte_pmap_t;
<br>
And I do not understand what both&#160;local_rank and node_rank&#160;exactly mean.&#160;Is local_rank similar to the rank of MPI Specification.&#160;Can you help me? My motivation is to achieve process migration in openmpi, I urgently want to the procedure of launching process.


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7712/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Previous message:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Reply:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
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
