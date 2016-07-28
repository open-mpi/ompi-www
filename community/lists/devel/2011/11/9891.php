<?
$subject_val = "[OMPI devel] New affinity changes: coming (extremely) soon";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 05:57:17 2011" -->
<!-- isoreceived="20111103095717" -->
<!-- sent="Thu, 3 Nov 2011 05:57:10 -0400" -->
<!-- isosent="20111103095710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] New affinity changes: coming (extremely) soon" -->
<!-- id="B1A3C989-5B5C-449E-AD96-25E95A8FB9B4_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] New affinity changes: coming (extremely) soon<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 05:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9892.php">Tim Mattox: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="9890.php">Barrett, Brian W: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As was mentioned in prior emails to the devel list and discussed during our developer telecons on several occasions, several of us have been working for some time to revise the mapping/binding procedure to take advantage of topology information.  We were particularly interested in giving users the option of mapping to specific resource types (e.g., &quot;map 2 procs on every NUMA node&quot;), and binding to various resource levels independent of how the job was mapped.
<br>
<p>Small parts of our work has already been committed (e.g., the trunk today will return discovered topology info from compute nodes).  We are in final prep to bring over the rest of our Mercurial branch (<a href="https://bitbucket.org/rhc/ompi-hwloc">https://bitbucket.org/rhc/ompi-hwloc</a>).  We expect to make that commit by the end of this week -- this email serves as a &quot;heads up&quot; for the impending change.
<br>
<p>Despite best efforts, there will undoubtedly be a settling period for a change of this magnitude while we shake out the inevitable bugs as we encounter new environments and use-cases.  
<br>
<p>We appreciate your patience in advance.
<br>
<p>Ralph, Jeff, Josh, and Terry
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
<li><strong>Next message:</strong> <a href="9892.php">Tim Mattox: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="9890.php">Barrett, Brian W: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
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
