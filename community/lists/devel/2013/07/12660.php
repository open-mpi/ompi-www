<?
$subject_val = "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 21:26:17 2013" -->
<!-- isoreceived="20130719012617" -->
<!-- sent="Fri, 19 Jul 2013 01:26:11 +0000" -->
<!-- isosent="20130719012611" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F72BE06_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE0DBAF4.12317%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 21:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12659.php">Barrett, Brian W: "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12659.php">Barrett, Brian W: "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1, but I helped come up with the idea.  :-)
<br>
<p><p>On Jul 18, 2013, at 5:32 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: Change the ompi_proc_t endpoint data lookup to be more flexible
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: As collectives and one-sided components are using transports
</span><br>
<span class="quotelev1">&gt; directly, an old problem of endpoint tracking is resurfacing.  We need a
</span><br>
<span class="quotelev1">&gt; fix that doesn't suck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Assuming there are no major objections, I'll start writing the code
</span><br>
<span class="quotelev1">&gt; next week...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More Info: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today, endpoint information is stored in one of two places on the
</span><br>
<span class="quotelev1">&gt; ompi_proc_t: proc_pml and proc_bml.  The proc_pml pointer is an opaque
</span><br>
<span class="quotelev1">&gt; structure having meaning only to the PML and the proc_bml pointer is an
</span><br>
<span class="quotelev1">&gt; opaque structure having meaning only to the BML.  CM, OB1, and BFO don't
</span><br>
<span class="quotelev1">&gt; use proc_pml, although the MTLs store their endpoint data on the proc_pml.
</span><br>
<span class="quotelev1">&gt; R2 uses the proc_bml to hold an opaque data structure which holds all the
</span><br>
<span class="quotelev1">&gt; btl endpoint data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The specific problem is the Portals 4 collective and one-sided components.
</span><br>
<span class="quotelev1">&gt; They both need endpoint information for communication (obviously).
</span><br>
<span class="quotelev1">&gt; Before there was a Portals 4 BTL, they peeked at the proc_pml pointer,
</span><br>
<span class="quotelev1">&gt; knew what it looked like, and were ok.  Now the data they need is possibly
</span><br>
<span class="quotelev1">&gt; in the proc_pml or in the (opaque) proc_bml, which poses a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff and I talked about this and had a number of restrictions that seemed
</span><br>
<span class="quotelev1">&gt; to make sense for a solution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * Don't make ompi_proc_t bigger than absolutely necessary
</span><br>
<span class="quotelev1">&gt;  * Avoid adding extra indirection into the endpoint resolution path
</span><br>
<span class="quotelev1">&gt;  * Allow enough flexibility that IB or friends could use the same
</span><br>
<span class="quotelev1">&gt; mechanism
</span><br>
<span class="quotelev1">&gt;  * Don't break the BML / BTL interface (too much work)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we came up with was a two pronged approach, depending on run-time
</span><br>
<span class="quotelev1">&gt; needs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, rather than having the proc_pml and proc_bml on the ompi_proc_t, we
</span><br>
<span class="quotelev1">&gt; would have a proc_endpoint[] array of fixed size.  The size of the array
</span><br>
<span class="quotelev1">&gt; would be determined at compile time based on compile-time registering of
</span><br>
<span class="quotelev1">&gt; endpoint slots.  At compile time, a #define with a component's slot would
</span><br>
<span class="quotelev1">&gt; be set, removing any extra indexing overhead over today's mechanism.  So
</span><br>
<span class="quotelev1">&gt; R2 would have a call in it's configure.m4 like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  OMPI_REQUIRE_ENDPOINT_TAG(BML_R2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And would then find it's endpoint data with a call like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  r2_endpoint = proc-&gt;proc_endpoint[OMPI_ENDPOINT_TAG_BML_R2];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which (assuming modest compiler optimization) is instruction equivalent to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  r2_endpoint = proc-&gt;proc_bml;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To allow for dynamic indexing (something we haven't had to date), the last
</span><br>
<span class="quotelev1">&gt; entry in the array would be a pointer to an object like an
</span><br>
<span class="quotelev1">&gt; opal_pointer_array, but without the locking, and some allocation calls
</span><br>
<span class="quotelev1">&gt; during init.  Since the indexes never need to be used by a remote process,
</span><br>
<span class="quotelev1">&gt; there's no synchronization required in registering.  The dynamic indexing
</span><br>
<span class="quotelev1">&gt; could be turned off at configure time for space-concious builds.  For
</span><br>
<span class="quotelev1">&gt; example, on our big systems, I disable dlopen support, so static
</span><br>
<span class="quotelev1">&gt; allocation of endpoint slots is good enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the average build, the only tag registered would be BML_R2.  If we lazy
</span><br>
<span class="quotelev1">&gt; allocate the pointer array element, that's two entries in the
</span><br>
<span class="quotelev1">&gt; proc_endpoint array, so the same size as today.  I was going to have the
</span><br>
<span class="quotelev1">&gt; CM stop using the endpoint and push that handling on the MTL.  Assuming
</span><br>
<span class="quotelev1">&gt; all MTLs but Portals shared the same tag (easy to do), there'd be an
</span><br>
<span class="quotelev1">&gt; 8*nprocs increase in space used per process if an MTL was built, but if
</span><br>
<span class="quotelev1">&gt; you disabled R2, that disappears.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does this solve my problem?  Rather than having Portals 4 use the MTL
</span><br>
<span class="quotelev1">&gt; tag, it would have it's own tag, shared between the MTL, BTL, OSC, and
</span><br>
<span class="quotelev1">&gt; COLL components.  Since the chances of Portals 4 being built on a platform
</span><br>
<span class="quotelev1">&gt; with support for another MTL is almost zero, in most cases, the size of
</span><br>
<span class="quotelev1">&gt; the ompi_proc_t only increases by 8 bytes over today's setup.  Since most
</span><br>
<span class="quotelev1">&gt; Portals 4 builds will be on more static platforms, I can disable dynamic
</span><br>
<span class="quotelev1">&gt; indexing and be back at today's size, but with an easy way to deal with
</span><br>
<span class="quotelev1">&gt; endpoint data sharing between components of different frameworks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, to review our original goals:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * ompi_proc_t will remain the same size on most platforms, increase by
</span><br>
<span class="quotelev1">&gt; 8*nprocs bytes if an MTL is built, but can shrink by 8*nprocs bytes on
</span><br>
<span class="quotelev1">&gt; static systems (by disabling dynamic indexing and building only one of
</span><br>
<span class="quotelev1">&gt; either the MTLs or BMLs).
</span><br>
<span class="quotelev1">&gt;  * If you're using a pre-allocated tag, there's no extra indirection or
</span><br>
<span class="quotelev1">&gt; math, assuming basic compiler optimization.  There is a higher cost for
</span><br>
<span class="quotelev1">&gt; dynamic tags, but that's probably ok for us.
</span><br>
<span class="quotelev1">&gt;  * I think that IB could start registering a tag if it needed for sharing
</span><br>
<span class="quotelev1">&gt; QP information between frameworks, at the cost of an extra tag.  Probably
</span><br>
<span class="quotelev1">&gt; makes the most sense for the MXM case (assuming someone writes an MXM osc
</span><br>
<span class="quotelev1">&gt; component).
</span><br>
<span class="quotelev1">&gt;  * The PML interface would change slightly (remove about 5 lines of code
</span><br>
<span class="quotelev1">&gt; / pml).  The MTL would have to change a bit to look at their own tag
</span><br>
<span class="quotelev1">&gt; instead of the proc_pml (fairly easy).  The R2 BML would need to change to
</span><br>
<span class="quotelev1">&gt; use proc_endpoint[OMPI_ENDPOINT_TAG_BML_R2] instead of proc_bml, but that
</span><br>
<span class="quotelev1">&gt; shouldn't be hard.  The consumers of the BML (OB1, BFO, RDMA OSC, etc.)
</span><br>
<span class="quotelev1">&gt; would not have to change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know RFCs are usually sent after the code is written, but I wanted some
</span><br>
<span class="quotelev1">&gt; thoughts before I started coding, since it's kind of a high impact change
</span><br>
<span class="quotelev1">&gt; to a performance-critical piece of OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12659.php">Barrett, Brian W: "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12659.php">Barrett, Brian W: "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
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
