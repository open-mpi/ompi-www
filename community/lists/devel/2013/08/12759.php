<?
$subject_val = "[OMPI devel] MPIT solution still wrong";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 21:03:53 2013" -->
<!-- isoreceived="20130820010353" -->
<!-- sent="Tue, 20 Aug 2013 01:03:51 +0000" -->
<!-- isosent="20130820010351" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPIT solution still wrong" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F80B439_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPIT solution still wrong<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 21:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Previous message:</strong> <a href="12758.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12764.php">Ralph Castain: "Re: [OMPI devel] MPIT solution still wrong"</a>
<li><strong>Reply:</strong> <a href="12764.php">Ralph Castain: "Re: [OMPI devel] MPIT solution still wrong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like <a href="https://svn.open-mpi.org/trac/ompi/changeset/29043">https://svn.open-mpi.org/trac/ompi/changeset/29043</a> is a stopgap, but it is still definitely wrong.
<br>
<p>The MPIT stuff does *not* compile the same way the C bindings compile.  Here's how the C bindings compile:
<br>
<p>a) in ompi/mpi/c/profile: always compile libmpi_c_pmpi.la
<br>
b) in ompi/mpi/c: 
<br>
&nbsp;&nbsp;1. always compile libmpi_c.la (a small number of stub functions and global variables)
<br>
&nbsp;&nbsp;2. only compile libmpi_c_mpi.la if weak symbols are not supported (e.g., OSX)
<br>
<p>Then libmpi.la always contains a) and b1).  If b2) exists, it is also slurped into libmpi.la.
<br>
<p>MPIT is currently compiled as:
<br>
<p>a) in ompi/mpi/tool/profile: always compile libmpi_pmpit.la
<br>
b) in ompi/mpi/tool: always compile libmpi_mpit.la
<br>
<p>It really needs to be done the same way the C bindings are done -- split b) into the global constants that you always need and always compile that, and then optionally compile the rest if weak symbols are not supported.
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
<li><strong>Next message:</strong> <a href="12760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Previous message:</strong> <a href="12758.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12764.php">Ralph Castain: "Re: [OMPI devel] MPIT solution still wrong"</a>
<li><strong>Reply:</strong> <a href="12764.php">Ralph Castain: "Re: [OMPI devel] MPIT solution still wrong"</a>
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
