<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 08:33:23 2009" -->
<!-- isoreceived="20091002123323" -->
<!-- sent="Fri, 2 Oct 2009 08:33:18 -0400" -->
<!-- isosent="20091002123318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="7B0900BA-4D27-4D80-BEA2-B250CFAFD4C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091002121925.GP5984_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 08:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0130.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1092)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(we've been having some off-list discussions about when to release  
<br>
0.9.1 -- we decided that we wanted to add dynamic CPU sets as the last  
<br>
feature before release.  So now we've been talking about how/what to  
<br>
do for dynamic CPU sets.  It only occurred to me mid-thread that there  
<br>
was no reason to have these discussions off-list, so I'm moving the  
<br>
discussion to hwloc-devel.  Hopefully that's enough context to pick up  
<br>
this thread mid-stream...)
<br>
<p><p>On Oct 2, 2009, at 8:19 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; There's an ugly ABI truth to this methodology that we got bitten by  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; OMPI.  :-\  If the struct changes size from version A to B, the ABI
</span><br>
<span class="quotelev2">&gt;&gt; changes (meaning that we'll have to bump the &quot;incompatible&quot; flag in
</span><br>
<span class="quotelev2">&gt;&gt; the so version).  It's completely non-intuitive, but I swear it's
</span><br>
<span class="quotelev2">&gt;&gt; true.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Err, because we are using inlines that's true, yes, and so  
</span><br>
<span class="quotelev1">&gt; recompilation
</span><br>
<span class="quotelev1">&gt; is needed, but is it really a problem?
</span><br>
<p>Right -- we already established that we're not interested in ABI -- do  
<br>
the Right Things with the so version and let that be enough.  I just  
<br>
wanted to point it out because it's a common misconception that just  
<br>
passing a function pointer as a handle makes you future proof (we  
<br>
learned the hard way).
<br>
<p><span class="quotelev1">&gt; Else we may not inline cpuset functions and in that case the  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; never gets in contact with the actual size of the pointed structure, I
</span><br>
<span class="quotelev1">&gt; don't see how there can be ABI issues.
</span><br>
<p><p>1) I vote for not inlining -- do we *really* care about the  
<br>
performance that much?  I don't think it matters enough to care.
<br>
<p>2) The linker needs the actual size of the struct (even if it's not  
<br>
visible in the C language) to link against the .so properly and do  
<br>
addressing / pointer math properly to find global handle symbols.  In  
<br>
short, the *executable* has the final size of the struct encoded in  
<br>
it.  This is non-intuitive, but I swear it's true.  Try this:
<br>
<p>private.h:
<br>
struct foo {
<br>
&nbsp;&nbsp;&nbsp;int a;
<br>
};
<br>
<p>private.c:
<br>
#include &lt;private.h&gt;
<br>
struct foo public_foo_instance;
<br>
struct foo *public_handle = &amp;public_foo_instance;
<br>
<p>public.h:
<br>
struct foo;
<br>
typedef struct foo *handle_t;
<br>
extern struct foo *public_handle;
<br>
<p>Compile, make, and install the above as libmiddleware.so.
<br>
<p>my_app.c:
<br>
#include &lt;public.h&gt;
<br>
handle_t my_handle = public_handle;
<br>
int main() { return 0; }
<br>
<p>Compile and make my_app, linking against -lmiddleware.  It compiles,  
<br>
links, and runs fine.
<br>
<p>Now go change private.h and add another member to the struct.   
<br>
Recompile and re-install libmiddleware.  Now run my_app again --  
<br>
without re-compiling/re-linking.  You'll get warnings from the linker  
<br>
about how the struct changed size.
<br>
<p>This may all be moot if we have no global handle instances (akin to  
<br>
MPI_COMM_WORLD) that are used outside of the middleware...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0130.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1092)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
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
