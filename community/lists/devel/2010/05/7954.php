<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 20:25:55 2010" -->
<!-- isoreceived="20100518002555" -->
<!-- sent="Mon, 17 May 2010 20:25:51 -0400" -->
<!-- isosent="20100518002551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="85B87B1A-8F3D-4752-8B18-0BF217DB0EC8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="741A2805-CA11-4345-B1C2-C45B6E805375_at_sandia.gov" -->
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
<strong>Date:</strong> 2010-05-17 20:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7953.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7953.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7959.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7959.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 17, 2010, at 7:59 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; HWLOC could be extended to support Red Storm, probably, but we don't have the need or time to do such an implementation.  
</span><br>
<p>Fair enough.
<br>
<p><span class="quotelev1">&gt; Given that, I'm not really picky about what the method of not breaking an existing supported platform is, but I think having HAVE_HWLOC defines everywhere is a bad idea...
</span><br>
<p>We need a mechanism to have hwloc *not* be there, particularly for embedded environments -- where hwloc would add no value.  This is apparently just like Red Storm, but even worse because we need to keep the memory footprint down as much as possible (libhwloc.so.0.0 on linux is 104KB -- libhwloc.a is 139KB -- both are big numbers when you only have a few MB of usable RAM).  So even leaving stubs doesn't seem like a good idea -- they'll take up space, too.  And the hwloc API is fairly large -- maintaining stubs for all the API functions could be a daunting task.
<br>
<p>I think embedding is the main reason I can't think of any better idea than #if OPAL_HAVE_HWLOC.
<br>
<p>I anticipate that hwloc usage would be fairly localized in the OMPI code base:
<br>
<p>int btl_sm_setup_stuff(...)
<br>
{
<br>
#if OPAL_HAVE_HWLOC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...do interesting hwloc things...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...setup stuff on btl_sm_component...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_sm_component.have_hwloc = 1;
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_sm_component.have_hwloc = 0;
<br>
#endif
<br>
}
<br>
<p>int btl_sm_other_stuff(...)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (btl_sm_component.have_hwloc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...use the hwloc info...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>But I'm certainly open to other ideas -- got any?
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
<li><strong>Next message:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7953.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7953.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7959.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7959.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
