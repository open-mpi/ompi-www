<?
$subject_val = "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 10:57:07 2013" -->
<!-- isoreceived="20130819145707" -->
<!-- sent="Mon, 19 Aug 2013 09:57:08 -0500" -->
<!-- isosent="20130819145708" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="009c01ce9cec$60bd32b0$22379810$_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 10:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>Previous message:</strong> <a href="12735.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12738.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12738.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just tried to run openmpi-1.7.2 over chelsio's IWARP device, and it no longer works.  It appears
<br>
that 1.7.2 fails to use the RDMACM CPC.  I guess it is trying to use OOB, which is IB-specific.  If
<br>
I explicitly specify the RDMACM CPC via '--mca btl_openib_cpc_include rdmacm' then it works.  This
<br>
is a regression from 1.7.1, I think.  And affects all iWARP devices because iWARP requires the
<br>
RDMACM CPC.
<br>
<p>I opened 3726 to track this:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/3726">https://svn.open-mpi.org/trac/ompi/ticket/3726</a>
<br>
<p>Any ideas what introduced this regression?
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>Previous message:</strong> <a href="12735.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12738.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12738.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
