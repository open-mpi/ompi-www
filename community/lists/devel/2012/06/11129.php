<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 13:25:22 2012" -->
<!-- isoreceived="20120620172522" -->
<!-- sent="Wed, 20 Jun 2012 13:25:17 -0400" -->
<!-- isosent="20120620172517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="CC2CDC8E-AA55-4FB9-AEE8-DACAB07AB8AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC076206.F96A%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 13:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 20, 2012, at 1:18 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I'm seeing the compile error with the OMPI trunk and OFED 15.3.1.  Has
</span><br>
<span class="quotelev1">&gt; anyone seen this before?  I have vague recollections of seeing e-mail
</span><br>
<span class="quotelev1">&gt; discussion on the issue, but can't find those e-mails now...
</span><br>
<p>I know what this is -- see below.
<br>
<p><span class="quotelev1">&gt; In file included from ../../../../opal/mca/hwloc/hwloc.h:87,
</span><br>
<span class="quotelev1">&gt;                 from btl_openib_component.c:69:
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/hwloc/hwloc142/hwloc142.h:38:10: error: #error Tried
</span><br>
<span class="quotelev1">&gt; to include hwloc verbs helper file, but hwloc was compiled with no
</span><br>
<span class="quotelev1">&gt; OpenFabrics support
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c: In function 'get_ib_dev_distance':
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:2435: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'opal_hwloc142_hwloc_ibv_get_device_cpuset'
</span><br>
<p>Very strange.  What happened was that hwloc's embedded configury decided that it had verbs support, but somehow HAVE_INFINIBAND_VERBS_H isn't defined.  How could that happen?
<br>
<p>Could you send stdout/stderr from configure, and config.log, and opal_config.h?
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
<li><strong>Next message:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
