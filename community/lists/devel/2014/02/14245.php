<?
$subject_val = "[OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 10:10:11 2014" -->
<!-- isoreceived="20140227151011" -->
<!-- sent="Thu, 27 Feb 2014 15:09:57 +0000" -->
<!-- isosent="20140227150957" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="A98085A4-8E13-40CE-9D9B-95522CF20A92_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] autoconf warnings: openib BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 10:09:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14246.php">Jeff Squyres (jsquyres): "[OMPI devel] warning in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing this warning this morning:
<br>
<p>-----
<br>
configure.ac:1139: warning: AC_RUN_IFELSE called without default to allow cross c\
<br>
ompiling
<br>
../../lib/autoconf/general.m4:2748: AC_RUN_IFELSE is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
<br>
ompi/mca/btl/openib/configure.m4:37: MCA_ompi_btl_openib_CONFIG is expanded from.\
<br>
..
<br>
config/ompi_mca.m4:571: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded from...
<br>
config/ompi_mca.m4:352: MCA_CONFIGURE_FRAMEWORK is expanded from...
<br>
config/ompi_mca.m4:252: MCA_CONFIGURE_PROJECT is expanded from...
<br>
config/ompi_mca.m4:39: OMPI_MCA is expanded from...
<br>
configure.ac:1139: the top level
<br>
-----
<br>
<p>Is it necessary to AC_RUN_IFELSE here?  Is AC_CHECK_DECLS not sufficient for some reason?
<br>
<p>It strikes me that this test you currently have in configure.m4 really should be a run-time test, and that all you need in configure.m4 should be an AC_CHECK_DECLS to see if AF_IB exists.
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
<li><strong>Next message:</strong> <a href="14246.php">Jeff Squyres (jsquyres): "[OMPI devel] warning in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14264.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
