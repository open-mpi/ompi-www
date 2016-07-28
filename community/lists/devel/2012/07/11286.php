<?
$subject_val = "[OMPI devel] ucdm assertion failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 13 10:37:56 2012" -->
<!-- isoreceived="20120713143756" -->
<!-- sent="Fri, 13 Jul 2012 10:37:57 -0400" -->
<!-- isosent="20120713143757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ucdm assertion failures" -->
<!-- id="9EF37673-2752-436E-A3FC-85455C441D0E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ucdm assertion failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-13 10:37:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
<li><strong>Previous message:</strong> <a href="11285.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
<li><strong>Reply:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I periodically get these on the trunk:
<br>
<p>------
<br>
alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
<br>
alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
<br>
alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
<br>
alloc-mem: connect/btl_openib_connect_udcm.c:1850: udcm_cq_event_dispatch: Assertion `((void *)0) != m &amp;&amp; ((void *)0) != m-&gt;cm_channel' failed.
<br>
-----
<br>
<p>(&quot;alloc-mem&quot; is the name of the particular IBM test that failed in this case)
<br>
<p>They only happen sometimes, leading me to believe that it's a race condition of some kind.
<br>
<p>Is anyone else getting these?
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
<li><strong>Next message:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
<li><strong>Previous message:</strong> <a href="11285.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
<li><strong>Reply:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
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
