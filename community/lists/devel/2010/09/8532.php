<?
$subject_val = "[OMPI devel] RFC: make hwloc first-class data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 21:08:43 2010" -->
<!-- isoreceived="20100923010843" -->
<!-- sent="Wed, 22 Sep 2010 21:08:36 -0400" -->
<!-- isosent="20100923010836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: make hwloc first-class data" -->
<!-- id="75ECA605-D9FB-4549-8A91-A7E9F388A9EF_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: make hwloc first-class data<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 21:08:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8533.php">Ralf Wildenhues: "[OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Reply:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Reply:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Make hwloc a 1st class item in OMPI
<br>
<p>WHY: At least 2 pieces of new functionality want/need to use the hwloc data
<br>
<p>WHERE: Put it in ompi/hwloc
<br>
<p>WHEN: Some time in the 1.5 series
<br>
<p>TIMEOUT: Tues teleconf, Oct 5 (about 2 weeks from now)
<br>
<p>--------------------------------------------------------------------------------
<br>
<p>A long time ago, I floated the proposal of putting hwloc at the top level in opal so that parts of OPAL/ORTE/OMPI could use the data directly.  I didn't have any concrete suggestions at the time about what exactly would use the hwloc data -- just a feeling that &quot;someone&quot; would want to.
<br>
<p>There are now two solid examples of functionality that want to use hwloc data directly:
<br>
<p>1. Sandia + ORNL are working on a proposal for MPI_COMM_SOCKET, MPI_COMM_NUMA_NODE, MPI_COMM_CORE, ...etc. (those names may not be the right ones, but you get the idea).  That is, pre-defined communicators that contain all the MPI procs on the same socket as you, the same NUMA node as you, the same core as you, ...etc.
<br>
<p>2. INRIA presented a paper at Euro MPI last week that takes process distance to NICs into account when coming up with the long-message splitting ratio for the PML.  E.g., if we have 2 openib NICs with the same bandwidth, don't just assume that we'll split long messages 50-50 across both of them.  Instead, use NUMA distances to influence calculating the ratio.  See the paper here: <a href="http://hal.archives-ouvertes.fr/inria-00486178/en/">http://hal.archives-ouvertes.fr/inria-00486178/en/</a>
<br>
<p>A previous objection was that we are increasing our dependencies by making hwloc be a 1st-class entity in OPAL -- we're hosed if hwloc ever goes out of business.  Fair enough.  But that being said, hwloc is getting a bit of a community growing around it: vendors are submitting patches for their hardware, distros are picking it up, etc.  I certainly can't predict the future, but hwloc looks in good shape for now.  There is a little risk in depending on hwloc, but I think it's small enough to be ok.
<br>
<p>Cisco does need to be able to compile OPAL/ORTE without hwloc, however (for embedded environments where hwloc simply takes up space and adds no value).  I previously proposed wrapping a subset of the hwloc API with opal_*() functions.  After thinking about that a bit, that seems like a lot of work for little benefit -- how does one decide *which* subset of hwloc should be wrapped?
<br>
<p>Instead, it might be worthwhile to simply put hwloc up in ompi/hwloc (instead of opal/hwloc).  Indeed, the 2 places that want to use hwloc are up in the MPI layer -- I'm guessing that most functionality that wants hwloc will be up in MPI.  And if we do the build system right, we can have paffinity/hwloc and libmpi's hwloc all link against the same libhwloc_embedded so that:
<br>
<p>a) there's no duplication in the process, and 
<br>
b) paffinity/hwloc can still be compiled out with the usual mechanisms to avoid having hwloc in OPAL/ORTE for embedded environments
<br>
<p>(there's a little hand-waving there, but I think we can figure out the details)
<br>
<p>We *may* want to refactor paffinity and maffinity someday, but that's not necessarily what I'm proposing here.
<br>
<p>Comments?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8533.php">Ralf Wildenhues: "[OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8531.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Reply:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Reply:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
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
