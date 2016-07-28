<?
$subject_val = "[OMPI devel] opal components still #including OMPI header files";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:22:19 2014" -->
<!-- isoreceived="20140923142219" -->
<!-- sent="Tue, 23 Sep 2014 14:22:17 +0000" -->
<!-- isosent="20140923142217" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] opal components still #including OMPI header files" -->
<!-- id="2237BD2B-70F0-46FB-B82B-E75A9E090E4B_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] opal components still #including OMPI header files<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 10:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Previous message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Reply:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From SVN trunk HEAD (r32772):
</span><br>
<p>-----
<br>
mca/btl/ugni/btl_ugni_component.c
<br>
20:#include &quot;ompi/runtime/params.h&quot;
<br>
<p>mca/btl/usnic/btl_usnic_compat.h
<br>
43:#  include &quot;ompi/mca/rte/rte.h&quot;
<br>
--&gt; This is ok; it is protected in a #if (just to make diffs to v1.8 easier)
<br>
<p>mca/common/ofacm/common_ofacm_xoob.c
<br>
26:#include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/common/ofacm/common_ofacm_oob.c
<br>
37:#include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/mpool/sm/mpool_sm_module.c
<br>
36:#include &quot;ompi/runtime/ompi_cr.h&quot; /* TODO */
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
<li><strong>Next message:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Previous message:</strong> <a href="15900.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Reply:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
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
