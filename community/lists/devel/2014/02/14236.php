<?
$subject_val = "[OMPI devel] OMPI_RML_TAG_SHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 17:58:13 2014" -->
<!-- isoreceived="20140226225813" -->
<!-- sent="Wed, 26 Feb 2014 22:58:12 +0000" -->
<!-- isosent="20140226225812" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI_RML_TAG_SHMEM" -->
<!-- id="54B8B38A-8BE3-4687-900A-15A79D59BAE4_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI_RML_TAG_SHMEM<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 17:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14237.php">Ralph Castain: "Re: [OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<li><strong>Previous message:</strong> <a href="14235.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in	MPI_Waitany and	MPI_Testany"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14237.php">Ralph Castain: "Re: [OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<li><strong>Reply:</strong> <a href="14237.php">Ralph Castain: "Re: [OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is an OMPI_RML_TAG_SHMEM in ompi/mca/rte/rte.h on the v1.7 branch that does not exist in the trunk.  I cannot find it used anywhere in the v1.7 branch (or the trunk, obviously).
<br>
<p>I'm taking it out as part of a merge conflict on the v1.7 branch, but it worries me a bit that it is there: it was obviously removed from the trunk but that change was not brought over to v1.7... (i.e., was there any other oshmem stuff that was done on the trunk and not brought to v1.7?)
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
<li><strong>Next message:</strong> <a href="14237.php">Ralph Castain: "Re: [OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<li><strong>Previous message:</strong> <a href="14235.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Java: MPI_STATUS_IGNORE provokes SIGSEGV in	MPI_Waitany and	MPI_Testany"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14237.php">Ralph Castain: "Re: [OMPI devel] OMPI_RML_TAG_SHMEM"</a>
<li><strong>Reply:</strong> <a href="14237.php">Ralph Castain: "Re: [OMPI devel] OMPI_RML_TAG_SHMEM"</a>
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
