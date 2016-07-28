<?
$subject_val = "[OMPI devel] RFC: opal_cache_line_size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 13:09:45 2012" -->
<!-- isoreceived="20120330170945" -->
<!-- sent="Fri, 30 Mar 2012 13:09:40 -0400" -->
<!-- isosent="20120330170940" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="JSQUYRES_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: opal_cache_line_size" -->
<!-- id="2D25F9FE-28FA-4284-BEA9-A5AB5E234181_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: opal_cache_line_size<br>
<strong>From:</strong> Jeffrey Squyres (<em>JSQUYRES_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 13:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10790.php">seshendra seshu: "[OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster"</a>
<li><strong>Previous message:</strong> <a href="10788.php">Jeffrey Squyres: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was just recently reminded of a comment that is near the top of opal_init_util():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* JMS See note in runtime/opal.h -- this is temporary; to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;replaced with real hwloc information soon (in trunk/v1.5 and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;beyond, only).  This *used* to be a #define, so it's important
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to define it very early.  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_cache_line_size = 128;
<br>
<p>A few points:
<br>
<p>1. On my platforms, hwloc tells me that my cache line size is 64, not 128.  Probably not a tragedy, but...
<br>
<p>2. I see opal_cache_line_size being used in a lot of BTL and PML initialization locations.  I see it being used in opal/class/free_list.*, too.
<br>
<p>3. I poked around with this yesterday to see if we could have hwloc initialize the opal_cache_line_size value.  Points to remember:
<br>
<p>- we initialize the opal hwloc framework in opal_init(), but we do not load the local machine's architecture then (because it can be expensive, particularly if lots of MPI processes are all doing it simultaneously)
<br>
- instead, the local machine topology is discovered once by each orted (using hwloc) and then RML sent to each local MPI process, where it is locally loaded into each MPI proc's hwloc tree
<br>
- this happens during the orte_init() in ompi_mpi_init()
<br>
<p>Meaning: we can initialize the opal_cache_line_size in MPI processes during orte_init().
<br>
<p>Is this acceptable to everyone?  
<br>
<p>If so, I can go ahead and code this up.  I would probably leave the initial value hard-coded to 128 (just in case something uses it before orte_init()), and then later during orte_init(), reset it to the smallest L1 cache size that hwloc finds on the machine.
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
<li><strong>Next message:</strong> <a href="10790.php">seshendra seshu: "[OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster"</a>
<li><strong>Previous message:</strong> <a href="10788.php">Jeffrey Squyres: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
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
