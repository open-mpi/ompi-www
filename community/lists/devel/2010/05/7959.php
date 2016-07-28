<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 08:26:02 2010" -->
<!-- isoreceived="20100518122602" -->
<!-- sent="Tue, 18 May 2010 08:25:57 -0400" -->
<!-- isosent="20100518122557" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="1D0C14CA-D526-4C39-A115-FB9E930A2D8E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="85B87B1A-8F3D-4752-8B18-0BF217DB0EC8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove all other paffinity components<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 08:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7958.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just chatted with Ralph about this on the phone and he came up with a slightly better compromise...
<br>
<p>He points out that we really don't need *all* of the hwloc API (there's a bajillion tiny little accessor functions).  We could provide a steady, OPAL/ORTE/OMPI-specific API (probably down in opal/util or somesuch) with a dozen or two (or whatever) functions that we really need.  These functions can either call their back-end hwloc counterparts or they could do something safe if hwloc is not present / not supported / etc.
<br>
<p>That would alleviate the need to put #if OPAL_HAVE_HWLOC elsewhere in the code base.  But the code calling opal_hwloc_&lt;foo&gt;() needs to be able to gracefully handle the failure case where it returns OPAL_ERR_NOT_SUPPORTED (etc.).
<br>
<p><p><p>On May 17, 2010, at 8:25 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On May 17, 2010, at 7:59 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC could be extended to support Red Storm, probably, but we don't have the need or time to do such an implementation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fair enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Given that, I'm not really picky about what the method of not breaking an existing supported platform is, but I think having HAVE_HWLOC defines everywhere is a bad idea...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We need a mechanism to have hwloc *not* be there, particularly for embedded environments -- where hwloc would add no value.  This is apparently just like Red Storm, but even worse because we need to keep the memory footprint down as much as possible (libhwloc.so.0.0 on linux is 104KB -- libhwloc.a is 139KB -- both are big numbers when you only have a few MB of usable RAM).  So even leaving stubs doesn't seem like a good idea -- they'll take up space, too.  And the hwloc API is fairly large -- maintaining stubs for all the API functions could be a daunting task.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think embedding is the main reason I can't think of any better idea than #if OPAL_HAVE_HWLOC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I anticipate that hwloc usage would be fairly localized in the OMPI code base:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int btl_sm_setup_stuff(...)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt;      ...do interesting hwloc things...
</span><br>
<span class="quotelev1">&gt;      ...setup stuff on btl_sm_component...
</span><br>
<span class="quotelev1">&gt;      btl_sm_component.have_hwloc = 1;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;      btl_sm_component.have_hwloc = 0;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int btl_sm_other_stuff(...)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (btl_sm_component.have_hwloc) {
</span><br>
<span class="quotelev1">&gt;         ...use the hwloc info...
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I'm certainly open to other ideas -- got any?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7958.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
