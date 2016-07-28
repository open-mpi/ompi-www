<?
$subject_val = "[OMPI devel] ENOSYS used incorrect in legacy drivers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 06:43:36 2016" -->
<!-- isoreceived="20160429104336" -->
<!-- sent="Fri, 29 Apr 2016 12:43:32 +0200" -->
<!-- isosent="20160429104332" -->
<!-- name="H&#195;&#165;kon Bugge" -->
<!-- email="hakon.bugge_at_[hidden]" -->
<!-- subject="[OMPI devel] ENOSYS used incorrect in legacy drivers" -->
<!-- id="85324B38-F05F-4E09-A361-760768FF6318_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] ENOSYS used incorrect in legacy drivers<br>
<strong>From:</strong> H&#195;&#165;kon Bugge (<em>hakon.bugge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 06:43:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>Previous message:</strong> <a href="18838.php">dpchoudh .: "Re: [OMPI devel] modex receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>Reply:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With patch <a href="https://github.com/torvalds/linux/commit/e15f431fe2d53cd4673510736da7d4fa1090e096">https://github.com/torvalds/linux/commit/e15f431fe2d53cd4673510736da7d4fa1090e096</a>, the use of ENOSYS has been clarified.
<br>
<p>/*
<br>
&nbsp;* This error code is special: arch syscall entry code will return
<br>
&nbsp;* -ENOSYS if users try to call a syscall that doesn't exist.  To keep
<br>
&nbsp;* failures of syscalls that really do exist distinguishable from
<br>
&nbsp;* failures due to attempts to use a nonexistent syscall, syscall
<br>
&nbsp;* implementations should refrain from returning -ENOSYS.
<br>
&nbsp;*/
<br>
#define ENOSYS          38      /* Invalid system call number */
<br>
<p><p>Now, legacy HCA drivers returns ENOSYS, for example the mlx4 driver.
<br>
<p>Open MPI adheres to this, see for example the following code snippet:
<br>
<p>#ifdef HAVE_IBV_RESIZE_CQ
<br>
&nbsp;&nbsp;else if (cq_size &gt; mca_btl_openib_component.ib_cq_size[cq]){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ibv_resize_cq(device-&gt;ib_cq[cq], cq_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* For ConnectX the resize CQ is not implemented and verbs returns -ENOSYS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* but should return ENOSYS. So it is reason for abs */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rc &amp;&amp; ENOSYS != abs(rc)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;cannot resize completion queue, error: %d&quot;, rc));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>Modern HCA drivers cannot return ENOSYS in this case, because they will not pass checkpatch.pl. See the following patch:
<br>
<p><a href="https://github.com/torvalds/linux/commit/91c9afaf97ee554d2cd3042a5ad01ad21c99e8c4">https://github.com/torvalds/linux/commit/91c9afaf97ee554d2cd3042a5ad01ad21c99e8c4</a>
<br>
<p>Hence, my humble request is that Open MPI also checks for EOPNOTSUPP (the choice of error code can of course be discussed) wherever it checks for ENOSYS.
<br>
<p><p>Thxs, H&#195;&#165;kon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>Previous message:</strong> <a href="18838.php">dpchoudh .: "Re: [OMPI devel] modex receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>Reply:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
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
