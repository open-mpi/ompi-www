<?
$subject_val = "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 09:35:26 2011" -->
<!-- isoreceived="20110316133526" -->
<!-- sent="Wed, 16 Mar 2011 09:35:20 -0400" -->
<!-- isosent="20110316133520" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c" -->
<!-- id="FF396C2B-CD36-42A4-8730-17820EB2D7BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8095FF.8010003_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 09:35:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9082.php">Jeff Squyres: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Previous message:</strong> <a href="9080.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9084.php">George Bosilca: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9084.php">George Bosilca: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2011, at 6:50 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev2">&gt;&gt; K. When Ralph and I removed that code, it was on he educated guess that no one was using it (because it hasn't compiled right in a while). If we were wrong, it can be put back, but someone will need to update it and Ralph and I don't have access to machines to test that behavior. 
</span><br>
<span class="quotelev1">&gt; Ok, however, the compilation issue I am running into has nothing to do with your's and Ralph's changes.  I would have expected not to even get as far as compiling the openib btl, right?  
</span><br>
<p>Right.
<br>
<p>What does your configure output say when it is testing for different PIDs for threads?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9082.php">Jeff Squyres: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Previous message:</strong> <a href="9080.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9078.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9084.php">George Bosilca: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9084.php">George Bosilca: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
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
