<?
$subject_val = "[OMPI devel] shmem vs. oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 12:33:03 2013" -->
<!-- isoreceived="20131025163303" -->
<!-- sent="Fri, 25 Oct 2013 16:33:01 +0000" -->
<!-- isosent="20131025163301" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] shmem vs. oshmem" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F991076_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] shmem vs. oshmem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 12:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13131.php">Igor Ivanov: "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13131.php">Igor Ivanov: "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13131.php">Igor Ivanov: "Re: [OMPI devel] shmem vs. oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had a few emails a little while ago, and decided that the branding should be &quot;oshmem&quot; because Open SHMEM is different than (original) SHMEM.
<br>
<p>I notice that there's still:
<br>
<p>- shmemcc / shmemfort / shmem_info / shmemrun
<br>
&nbsp;&nbsp;--&gt; should these all be &quot;oshmem*&quot; ?
<br>
<p>- the examples are hello_shmem* and ring_shmem*
<br>
&nbsp;&nbsp;--&gt; should these all be &quot;*_oshmem*&quot; ?
<br>
<p>- there are header files named shmem*
<br>
&nbsp;&nbsp;--&gt; I'm guessing the names &quot;shmem.h&quot; and &quot;shmem.fh&quot; are mandated
<br>
&nbsp;&nbsp;--&gt; shmem_portable_platform.h.in should probably be oshmem_portable_platform.h.in, right?
<br>
&nbsp;&nbsp;--&gt; same for the internal headers shmem_api_logger.h and shmem_lock.h
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
<li><strong>Next message:</strong> <a href="13131.php">Igor Ivanov: "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13131.php">Igor Ivanov: "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13131.php">Igor Ivanov: "Re: [OMPI devel] shmem vs. oshmem"</a>
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
