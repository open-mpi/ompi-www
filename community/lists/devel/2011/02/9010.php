<?
$subject_val = "[OMPI devel] Open MPI HG mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 10:02:38 2011" -->
<!-- isoreceived="20110223150238" -->
<!-- sent="Wed, 23 Feb 2011 10:02:33 -0500" -->
<!-- isosent="20110223150233" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI HG mirror" -->
<!-- id="6A95E6AF-B7E4-4C31-83DF-427A7B3CA229_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI HG mirror<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 10:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9011.php">Jay Fenlason: "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9009.php">Jeff Squyres: "[OMPI devel] libnuma Libnuma LIBNUMA!!!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the original OMPI HG mirror got corrupted.  We upgraded the version of mercurial that is used to maintain this mirror (i.e., inject new SVN commits into the HG mirror) and re-created the mirror.
<br>
<p>All appears to be working now:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/">http://www.open-mpi.org/hg/</a>
<br>
<p>The new, correct mirror is using the same old name: &quot;ompi-svn-mirror&quot;.  The old HG mirror is &quot;ompi-svn-mirror-old&quot;; it will be kept around for a little while in case people need time to transition to the new mirror.  The old mirror will be deleted in 2 weeks (March 9th); please let us know if you need more time to transition.
<br>
<p>If anyone had a clone that was based on the old mirror, you *might* be able to pull your work from the old one to a clone based on the new mirror.
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
<li><strong>Next message:</strong> <a href="9011.php">Jay Fenlason: "[OMPI devel] Bug in openmpi-1.5/opal/config/opal_config_asm.m4"</a>
<li><strong>Previous message:</strong> <a href="9009.php">Jeff Squyres: "[OMPI devel] libnuma Libnuma LIBNUMA!!!"</a>
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
