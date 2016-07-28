<?
$subject_val = "[OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 13 20:20:50 2010" -->
<!-- isoreceived="20100514002050" -->
<!-- sent="Thu, 13 May 2010 20:20:46 -0400" -->
<!-- isosent="20100514002046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="B7BA2F7E-62DD-4D14-B245-AD4BFB9B3A4A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove all other paffinity components<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-13 20:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7925.php">Jeff Squyres: "[OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>Previous message:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove all non-hwloc paffinity components.
<br>
<p>WHY: The hwloc component supports all those systems.
<br>
<p>WHERE: opal/mca/paffinity/[^hwloc|base] directories
<br>
<p>WHEN: for 1.5.1
<br>
<p>TIMEOUT: Tuesday call, May 25 (yes, about 2 weeks from now -- let hwloc soak for a while...)
<br>
<p>-----------------------------------------------------------------------------
<br>
<p>MORE DETAILS:
<br>
<p>As you probably noticed, I have (finally) committed the &quot;hwloc&quot; paffinity component to the trunk and removed the &quot;linux&quot; (i.e., PLPA) paffinity component:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23125">https://svn.open-mpi.org/trac/ompi/changeset/23125</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23126">https://svn.open-mpi.org/trac/ompi/changeset/23126</a>
<br>
<p>hwloc supports all systems that OMPI supports (and several that OMPI doesn't!) -- more specifically, it supports all the other systems that we have paffinity components for (darwin, linux, posix, solaris, windows).  It can therefore fully replace all the other paffinity components.
<br>
<p>Indeed, the new hwloc's default priority is higher than all of the other current paffinity components, so over the next week or two, it'll be a good soak test to see if it is working properly.  Once we get any kinks worked out, I propose removing all the other paffinity components and leaving only hwloc.
<br>
<p>That being said, we might as well leave the paffinity framework around, even if it only has one component left, simply on the argument that someday Open MPI may support a platform that hwloc does not.
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
<li><strong>Next message:</strong> <a href="7925.php">Jeff Squyres: "[OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>Previous message:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
