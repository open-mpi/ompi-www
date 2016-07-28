<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 13:55:06 2012" -->
<!-- isoreceived="20120621175506" -->
<!-- sent="Thu, 21 Jun 2012 13:54:48 -0400" -->
<!-- isosent="20120621175448" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="4ED0FF4C-143A-4122-83A7-672224F89691_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CCFBA44A-8F62-4968-8D7E-3AA97D42DC5D_at_cisco.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 13:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11146.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, if people want to rename openib btl to something else and then change the configure scripts - I'm ok.
<br>
About naming - I would agree with Terry, it makes sense to name it after network API used for this btl - &quot;verbs&quot; (it is not ibverbs).
<br>
<p>Bottom line, I would recommend to keep configure option naming in sync with component (in this case BTL) naming.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jun 21, 2012, at 9:30 AM, Jeff Squyres wrote:
&gt; On Jun 21, 2012, at 9:16 AM, Jeff Squyres wrote:
&gt; 
&gt;&gt; 2. Have consistent behavior between the configury of all OFED-lovin' components (currently the 4 I listed), per your description:
&gt;&gt;  * --with-openfabrics[=DIR] means that all OFED-lovin' components must configure successfully, or fail
&gt;&gt;  * --without-openfabrics means that all OFED-lovin' component must not build
&gt; 
&gt; 
&gt; I'm sorry -- that's not quite correct.
&gt; 
&gt; hwloc will build regardless of whether you specify --with-openfabrics or not (because it doesn't *need* OpenFabrics support).  
&gt; 
&gt; But the other 3 OpenFabrics-based components (ofud, ud, openib) must all succeed if --with-openfabrics is specified, and will not be built if --without-openfabrics is specified.  Because all of these components *need* OpenFabrics support -- they cannot build without OF support.
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11146.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
