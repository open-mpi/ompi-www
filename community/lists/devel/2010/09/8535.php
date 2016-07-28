<?
$subject_val = "Re: [OMPI devel] RFC: make hwloc first-class data";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 12:25:30 2010" -->
<!-- isoreceived="20100923162530" -->
<!-- sent="Thu, 23 Sep 2010 10:25:14 -0600" -->
<!-- isosent="20100923162514" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make hwloc first-class data" -->
<!-- id="4F5909BD-7276-479D-8225-F0AF3A6A6811_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75ECA605-D9FB-4549-8A91-A7E9F388A9EF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make hwloc first-class data<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 12:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Previous message:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8532.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc first-class data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8537.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Reply:</strong> <a href="8537.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I unfortunately don't have many cycles to think about this before Oct 1, but I'm still a little concerned about the portability aspects of having hwloc be a first class citizen of OMPI - if we support a platform hwloc doesn't, that seems like it will still cause problems...
<br>
<p>Brian
<br>
<p>On Sep 22, 2010, at 7:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Make hwloc a 1st class item in OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: At least 2 pieces of new functionality want/need to use the hwloc data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Put it in ompi/hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Some time in the 1.5 series
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tues teleconf, Oct 5 (about 2 weeks from now)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A long time ago, I floated the proposal of putting hwloc at the top level in opal so that parts of OPAL/ORTE/OMPI could use the data directly.  I didn't have any concrete suggestions at the time about what exactly would use the hwloc data -- just a feeling that &quot;someone&quot; would want to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are now two solid examples of functionality that want to use hwloc data directly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Sandia + ORNL are working on a proposal for MPI_COMM_SOCKET, MPI_COMM_NUMA_NODE, MPI_COMM_CORE, ...etc. (those names may not be the right ones, but you get the idea).  That is, pre-defined communicators that contain all the MPI procs on the same socket as you, the same NUMA node as you, the same core as you, ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. INRIA presented a paper at Euro MPI last week that takes process distance to NICs into account when coming up with the long-message splitting ratio for the PML.  E.g., if we have 2 openib NICs with the same bandwidth, don't just assume that we'll split long messages 50-50 across both of them.  Instead, use NUMA distances to influence calculating the ratio.  See the paper here: <a href="http://hal.archives-ouvertes.fr/inria-00486178/en/">http://hal.archives-ouvertes.fr/inria-00486178/en/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A previous objection was that we are increasing our dependencies by making hwloc be a 1st-class entity in OPAL -- we're hosed if hwloc ever goes out of business.  Fair enough.  But that being said, hwloc is getting a bit of a community growing around it: vendors are submitting patches for their hardware, distros are picking it up, etc.  I certainly can't predict the future, but hwloc looks in good shape for now.  There is a little risk in depending on hwloc, but I think it's small enough to be ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cisco does need to be able to compile OPAL/ORTE without hwloc, however (for embedded environments where hwloc simply takes up space and adds no value).  I previously proposed wrapping a subset of the hwloc API with opal_*() functions.  After thinking about that a bit, that seems like a lot of work for little benefit -- how does one decide *which* subset of hwloc should be wrapped?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead, it might be worthwhile to simply put hwloc up in ompi/hwloc (instead of opal/hwloc).  Indeed, the 2 places that want to use hwloc are up in the MPI layer -- I'm guessing that most functionality that wants hwloc will be up in MPI.  And if we do the build system right, we can have paffinity/hwloc and libmpi's hwloc all link against the same libhwloc_embedded so that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) there's no duplication in the process, and 
</span><br>
<span class="quotelev1">&gt; b) paffinity/hwloc can still be compiled out with the usual mechanisms to avoid having hwloc in OPAL/ORTE for embedded environments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (there's a little hand-waving there, but I think we can figure out the details)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We *may* want to refactor paffinity and maffinity someday, but that's not necessarily what I'm proposing here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Previous message:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8532.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc first-class data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8537.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Reply:</strong> <a href="8537.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
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
