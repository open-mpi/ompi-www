<?
$subject_val = "[OMPI devel] Availability of hwloc topology info";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 10:59:58 2011" -->
<!-- isoreceived="20110913145958" -->
<!-- sent="Tue, 13 Sep 2011 10:59:50 -0400" -->
<!-- isosent="20110913145950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Availability of hwloc topology info" -->
<!-- id="A47CDF0E-7EF5-49A3-9303-93C4ABEAD596_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Availability of hwloc topology info<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 10:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9760.php">Rolf vandeVaart: "[OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node"</a>
<li><strong>Previous message:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should clarify something: While opal_hwloc_base_open() is invoked during opal_init(), the global variable opal_hwloc_topology is not filled with topology information during opal_init() due to the overhead of invoking hwloc_topology_load() in many processes simultaneously.
<br>
<p>Specifically: the process of loading the topology can be expensive, particularly on large-core-count machines (e.g., SGI machines).  Consider 64 (or 128 or 256 or ...) MPI processes all hammering on /proc and/or /sys at the same time.  We've had reports on the hwloc users list that this is not a good idea; it *really* slows down the startup process.
<br>
<p>Additionally, since opal is, by definition, a single process abstraction, it made sense to push the decision of whether/how to load the topology information to a higher layer.  On the OMPI trunk, the orted loads the topology information and disseminates it to its local processes during the ESS handshake.
<br>
<p>To be specific:
<br>
<p>- the orted and HNP will have non-NULL values in opal_hwloc_topology after the ESS startup
<br>
<p>- MPI processes will have non-NULL values of opal_hwloc_topology after orte_init()
<br>
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
<li><strong>Next message:</strong> <a href="9760.php">Rolf vandeVaart: "[OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node"</a>
<li><strong>Previous message:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
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
