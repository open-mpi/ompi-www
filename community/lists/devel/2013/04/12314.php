<?
$subject_val = "[OMPI devel] mpi_param_check value changed to false";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 19:04:31 2013" -->
<!-- isoreceived="20130426230431" -->
<!-- sent="Fri, 26 Apr 2013 23:04:25 +0000" -->
<!-- isosent="20130426230425" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] mpi_param_check value changed to false" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C49BD_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpi_param_check value changed to false<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 19:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>Previous message:</strong> <a href="12313.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  Developer meeting: mid/late summer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>Reply:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the value of the MCA param mpi_param_check was flipped from true to false in r28236, the recent MCA param update.
<br>
<p>Nathan -- did you mean to flip this value?  It means that we're running without MPI API param checking by default, which is a change from all prior versions of Open MPI.
<br>
<p>Changing the default back is as simple as deleting line 84 in ompi/runtime/ompi_mpi_params.c.
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
<li><strong>Next message:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>Previous message:</strong> <a href="12313.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  Developer meeting: mid/late summer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>Reply:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
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
