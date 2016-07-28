<?
$subject_val = "[OMPI devel] openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 09:57:40 2014" -->
<!-- isoreceived="20140710135740" -->
<!-- sent="Thu, 10 Jul 2014 16:57:38 +0300" -->
<!-- isosent="20140710135738" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi.spec" -->
<!-- id="CAAO1KyYHeckYnVRQiaS54YRh24tfKc=j_63T5icMFd_JuPOYmg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi.spec<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 09:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime"</a>
<li><strong>Previous message:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The following commit <a href="https://svn.open-mpi.org/trac/ompi/changeset/32147">https://svn.open-mpi.org/trac/ompi/changeset/32147</a>
<br>
does some harm:
<br>
<p>the line 202 in the change causes openmpi.src.rpm to contain arch in the
<br>
rpm name, i.e. openmpi-1.8.2a1-1.el6.src.rpm
<br>
<p>The src.rpm should be arch agnostic.
<br>
<p>what do you think?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime"</a>
<li><strong>Previous message:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
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
