<?
$subject_val = "[OMPI devel] ORTE headers in OPAL source";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 16:36:19 2014" -->
<!-- isoreceived="20140808203619" -->
<!-- sent="Fri, 8 Aug 2014 20:36:14 +0000" -->
<!-- isosent="20140808203614" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE headers in OPAL source" -->
<!-- id="89EB2C9F-B01F-4C93-A68B-CAA1994E943A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ORTE headers in OPAL source<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 16:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15569.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Reply:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a few ORTE headers in OPAL source -- can respective owners clean these up?  Thanks.
<br>
<p>-----
<br>
mca/btl/smcuda/btl_smcuda.c
<br>
63:#include &quot;orte/mca/sstore/sstore.h&quot;
<br>
<p>mca/btl/sm/btl_sm.c
<br>
62:#include &quot;orte/mca/sstore/sstore.h&quot;
<br>
<p>mca/mpool/sm/mpool_sm_module.c
<br>
34:#include &quot;orte/mca/sstore/sstore.h&quot;
<br>
-----
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
<li><strong>Next message:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15569.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Reply:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
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
