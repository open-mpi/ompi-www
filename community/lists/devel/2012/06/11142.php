<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 09:16:35 2012" -->
<!-- isoreceived="20120621131635" -->
<!-- sent="Thu, 21 Jun 2012 09:16:30 -0400" -->
<!-- isosent="20120621131630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="D1458D8A-04FC-4BD2-BBF3-6E7C365E5883_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FE31C69.1050209_at_oracle.com" -->
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
<strong>Date:</strong> 2012-06-21 09:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2012, at 9:06 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I think it is starting to sink in.  the --with-openfabrics isn't declaring that one builds the openib btl but that the openfabrics stack is available to be used by any of the components that requires that stack (like the list above).  So if someone specifies --with-openfabrics configure then tries to configure all components requiring the openfabrices stack.  Likewise if someone say's --without-openfabrics none of the components requiring openfabrics will build?
</span><br>
<p>Correct.
<br>
<p>My proposal is two-pronged:
<br>
<p>1. Unify the specification of the OpenFabrics stack location under the option name --with-openfabrics (and --with-openfabrics-libdir).
<br>
<p>2. Have consistent behavior between the configury of all OFED-lovin' components (currently the 4 I listed), per your description:
<br>
&nbsp;&nbsp;&nbsp;* --with-openfabrics[=DIR] means that all OFED-lovin' components must configure successfully, or fail
<br>
&nbsp;&nbsp;&nbsp;* --without-openfabrics means that all OFED-lovin' component must not build
<br>
<p><span class="quotelev1">&gt; If the above is right then I see the method to your madness and guess I agree with it.
</span><br>
<p>K.
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
<li><strong>Next message:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11141.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
