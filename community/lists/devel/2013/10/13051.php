<?
$subject_val = "[OMPI devel] oshmem 32 bit compile failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 07:46:32 2013" -->
<!-- isoreceived="20131004114632" -->
<!-- sent="Fri, 4 Oct 2013 11:46:31 +0000" -->
<!-- isosent="20131004114631" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem 32 bit compile failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F91DA86_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem 32 bit compile failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 07:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13052.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13050.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Reply:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Absoft is seeing compile failures for oshmem.  Here's one example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mtt.open-mpi.org/index.php?do_redir=2132">http://mtt.open-mpi.org/index.php?do_redir=2132</a>
<br>
<p>If you scroll down through the stderr, it looks like there's a problem in oshmsm/op/op.c.  Perhaps it's just a missing header file, or some code in an #if/#else that isn't compiled/checked often...?
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
<li><strong>Next message:</strong> <a href="13052.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13050.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>Reply:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
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
