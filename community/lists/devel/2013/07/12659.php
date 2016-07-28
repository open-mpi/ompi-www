<?
$subject_val = "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 17:32:47 2013" -->
<!-- isoreceived="20130718213247" -->
<!-- sent="Thu, 18 Jul 2013 21:32:13 +0000" -->
<!-- isosent="20130718213213" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="CE0DBAF4.12317%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 17:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Change the ompi_proc_t endpoint data lookup to be more flexible
<br>
<p>Why: As collectives and one-sided components are using transports
<br>
directly, an old problem of endpoint tracking is resurfacing.  We need a
<br>
fix that doesn't suck.
<br>
<p>When: Assuming there are no major objections, I'll start writing the code
<br>
next week...
<br>
<p>More Info: 
<br>
<p>Today, endpoint information is stored in one of two places on the
<br>
ompi_proc_t: proc_pml and proc_bml.  The proc_pml pointer is an opaque
<br>
structure having meaning only to the PML and the proc_bml pointer is an
<br>
opaque structure having meaning only to the BML.  CM, OB1, and BFO don't
<br>
use proc_pml, although the MTLs store their endpoint data on the proc_pml.
<br>
&nbsp;R2 uses the proc_bml to hold an opaque data structure which holds all the
<br>
btl endpoint data.
<br>
<p>The specific problem is the Portals 4 collective and one-sided components.
<br>
&nbsp;They both need endpoint information for communication (obviously).
<br>
Before there was a Portals 4 BTL, they peeked at the proc_pml pointer,
<br>
knew what it looked like, and were ok.  Now the data they need is possibly
<br>
in the proc_pml or in the (opaque) proc_bml, which poses a problem.
<br>
<p>Jeff and I talked about this and had a number of restrictions that seemed
<br>
to make sense for a solution:
<br>
<p>&nbsp;&nbsp;* Don't make ompi_proc_t bigger than absolutely necessary
<br>
&nbsp;&nbsp;* Avoid adding extra indirection into the endpoint resolution path
<br>
&nbsp;&nbsp;* Allow enough flexibility that IB or friends could use the same
<br>
mechanism
<br>
&nbsp;&nbsp;* Don't break the BML / BTL interface (too much work)
<br>
<p>What we came up with was a two pronged approach, depending on run-time
<br>
needs.
<br>
<p>First, rather than having the proc_pml and proc_bml on the ompi_proc_t, we
<br>
would have a proc_endpoint[] array of fixed size.  The size of the array
<br>
would be determined at compile time based on compile-time registering of
<br>
endpoint slots.  At compile time, a #define with a component's slot would
<br>
be set, removing any extra indexing overhead over today's mechanism.  So
<br>
R2 would have a call in it's configure.m4 like:
<br>
<p>&nbsp;&nbsp;OMPI_REQUIRE_ENDPOINT_TAG(BML_R2)
<br>
<p>And would then find it's endpoint data with a call like:
<br>
<p>&nbsp;&nbsp;r2_endpoint = proc-&gt;proc_endpoint[OMPI_ENDPOINT_TAG_BML_R2];
<br>
<p>which (assuming modest compiler optimization) is instruction equivalent to:
<br>
<p>&nbsp;&nbsp;r2_endpoint = proc-&gt;proc_bml;
<br>
<p>To allow for dynamic indexing (something we haven't had to date), the last
<br>
entry in the array would be a pointer to an object like an
<br>
opal_pointer_array, but without the locking, and some allocation calls
<br>
during init.  Since the indexes never need to be used by a remote process,
<br>
there's no synchronization required in registering.  The dynamic indexing
<br>
could be turned off at configure time for space-concious builds.  For
<br>
example, on our big systems, I disable dlopen support, so static
<br>
allocation of endpoint slots is good enough.
<br>
<p>In the average build, the only tag registered would be BML_R2.  If we lazy
<br>
allocate the pointer array element, that's two entries in the
<br>
proc_endpoint array, so the same size as today.  I was going to have the
<br>
CM stop using the endpoint and push that handling on the MTL.  Assuming
<br>
all MTLs but Portals shared the same tag (easy to do), there'd be an
<br>
8*nprocs increase in space used per process if an MTL was built, but if
<br>
you disabled R2, that disappears.
<br>
<p>How does this solve my problem?  Rather than having Portals 4 use the MTL
<br>
tag, it would have it's own tag, shared between the MTL, BTL, OSC, and
<br>
COLL components.  Since the chances of Portals 4 being built on a platform
<br>
with support for another MTL is almost zero, in most cases, the size of
<br>
the ompi_proc_t only increases by 8 bytes over today's setup.  Since most
<br>
Portals 4 builds will be on more static platforms, I can disable dynamic
<br>
indexing and be back at today's size, but with an easy way to deal with
<br>
endpoint data sharing between components of different frameworks.
<br>
<p>So, to review our original goals:
<br>
<p>&nbsp;&nbsp;* ompi_proc_t will remain the same size on most platforms, increase by
<br>
8*nprocs bytes if an MTL is built, but can shrink by 8*nprocs bytes on
<br>
static systems (by disabling dynamic indexing and building only one of
<br>
either the MTLs or BMLs).
<br>
&nbsp;&nbsp;* If you're using a pre-allocated tag, there's no extra indirection or
<br>
math, assuming basic compiler optimization.  There is a higher cost for
<br>
dynamic tags, but that's probably ok for us.
<br>
&nbsp;&nbsp;* I think that IB could start registering a tag if it needed for sharing
<br>
QP information between frameworks, at the cost of an extra tag.  Probably
<br>
makes the most sense for the MXM case (assuming someone writes an MXM osc
<br>
component).
<br>
&nbsp;&nbsp;* The PML interface would change slightly (remove about 5 lines of code
<br>
/ pml).  The MTL would have to change a bit to look at their own tag
<br>
instead of the proc_pml (fairly easy).  The R2 BML would need to change to
<br>
use proc_endpoint[OMPI_ENDPOINT_TAG_BML_R2] instead of proc_bml, but that
<br>
shouldn't be hard.  The consumers of the BML (OB1, BFO, RDMA OSC, etc.)
<br>
would not have to change.
<br>
<p>I know RFCs are usually sent after the code is written, but I wanted some
<br>
thoughts before I started coding, since it's kind of a high impact change
<br>
to a performance-critical piece of OMPI.
<br>
<p>Thoughts?
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12659/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
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
