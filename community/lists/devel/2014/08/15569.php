<?
$subject_val = "[OMPI devel] ompi headers in OPAL source";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 16:15:05 2014" -->
<!-- isoreceived="20140808201505" -->
<!-- sent="Fri, 8 Aug 2014 20:15:03 +0000" -->
<!-- isosent="20140808201503" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi headers in OPAL source" -->
<!-- id="B5426969-32C5-4398-855E-6EB0171578F1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ompi headers in OPAL source<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 16:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15570.php">Jeff Squyres (jsquyres): "[OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15568.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found a few more OMPI header files included in OPAL source code.  Can the respective owners clean this stuff up?
<br>
<p>Thanks!
<br>
<p>-----
<br>
mca/btl/openib/btl_openib_component.c
<br>
87:#include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/btl/ugni/btl_ugni_component.c
<br>
20:#include &quot;ompi/runtime/params.h&quot;
<br>
<p>mca/btl/ugni/btl_ugni_add_procs.c
<br>
20:#include &quot;ompi/communicator/communicator.h&quot;
<br>
<p>mca/btl/usnic/btl_usnic_hwloc.c
<br>
33:#include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/btl/usnic/btl_usnic_compat.h
<br>
43:#  include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/common/ofacm/common_ofacm_xoob.c
<br>
24:#include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/common/ofacm/common_ofacm_oob.c
<br>
35:#include &quot;ompi/mca/rte/rte.h&quot;
<br>
<p>mca/mpool/base/mpool_base_alloc.c
<br>
32:#include &quot;ompi/info/info.h&quot; /* TODO */
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
<li><strong>Next message:</strong> <a href="15570.php">Jeff Squyres (jsquyres): "[OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15568.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
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
