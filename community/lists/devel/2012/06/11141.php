<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 09:06:57 2012" -->
<!-- isoreceived="20120621130657" -->
<!-- sent="Thu, 21 Jun 2012 09:06:49 -0400" -->
<!-- isosent="20120621130649" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="4FE31C69.1050209_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="937BEB1B-808D-44DB-BA75-F215077FF3D5_at_cisco.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 09:06:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/21/2012 8:52 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 21, 2012, at 8:40 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you specify --with-ofed and you get mca_btl_openib generated?  ICK!!!  I think that will just make things more confusing.  I am against this unless you change the btl name.
</span><br>
<span class="quotelev1">&gt; We already have this situation.  There are 4 components that use OpenFabrics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - oob ud
</span><br>
<span class="quotelev1">&gt; - btl ofud
</span><br>
<span class="quotelev1">&gt; - btl openib
</span><br>
<span class="quotelev1">&gt; - hwloc hwloc142
</span><br>
Ok, I think it is starting to sink in.  the --with-openfabrics isn't 
<br>
declaring that one builds the openib btl but that the openfabrics stack 
<br>
is available to be used by any of the components that requires that 
<br>
stack (like the list above).  So if someone specifies --with-openfabrics 
<br>
configure then tries to configure all components requiring the 
<br>
openfabrices stack.  Likewise if someone say's --without-openfabrics 
<br>
none of the components requiring openfabrics will build?
<br>
<p>If the above is right then I see the method to your madness and guess I 
<br>
agree with it.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; I'm saying that we call a spade a spade -- the common element between all of these components is that they utilize OpenFabrics support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The name OpenIB is soooo out of date that we really should get rid of it where we can.  I'm volunteering to remove it in OMPI's configury.  Renaming the openib component is a good goal too, but I don't have the cycles for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, per the bottom part of my original email, I'm changing my recommendation to be --with-openfabrics (vs. --with-ofed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
