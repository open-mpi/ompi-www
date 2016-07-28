<?
$subject_val = "[OMPI devel] Notes from mem hooks call today";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 16:49:33 2008" -->
<!-- isoreceived="20080528204933" -->
<!-- sent="Wed, 28 May 2008 16:46:46 -0400" -->
<!-- isosent="20080528204646" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Notes from mem hooks call today" -->
<!-- id="2C0345BA-0B84-450D-802A-1FDDB3B8D7E5_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Notes from mem hooks call today<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 16:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
brian: 1st point: propose remove opal/mca/memory/darwin (memory hooks
<br>
&nbsp;&nbsp;&nbsp;on OS X).  Rationale:
<br>
&nbsp;&nbsp;&nbsp;- mvapi support is gone
<br>
&nbsp;&nbsp;&nbsp;- gm would be only user
<br>
&nbsp;&nbsp;&nbsp;- no one is supporting the code anymore (it ain't broke, but...)
<br>
&nbsp;&nbsp;&nbsp;--&gt; patrick says: no problem.  only myri osx customers have a special
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpich-mx, so it's ok.
<br>
&nbsp;&nbsp;&nbsp;--&gt; jeff will svn rm mca/memory/darin
<br>
<p>discussion about current state of ptmalloc2
<br>
- only really useful for benchmarks (i.e., --mca mpi_leave_pinned 1)
<br>
- why have it in the way for apps that don't use mpi_leave_pinned?
<br>
- it gets in the way of MX (we &quot;sorta&quot; get away with it)
<br>
- also, we can't use ptmalloc2 for sun -- would be nice to do
<br>
&nbsp;&nbsp;&nbsp;something that they can use
<br>
- also remember that we hacked our copy of ptmalloc2 to make it work
<br>
&nbsp;&nbsp;&nbsp;nicely (e.g., because OF deregister calls malloc/free)
<br>
&nbsp;&nbsp;&nbsp;- note that our ptmalloc2 hacks are basically equivalent to mallopt:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we rarely return memory to the OS (e.g., very large allocations,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when ptmalloc uses its munmap case)
<br>
&nbsp;&nbsp;&nbsp;--&gt; brian will double check this point
<br>
<p>4 proposals:
<br>
<p>1. patrick proposes to use the MMU notifiers -- likely to be in linux
<br>
2.6.27
<br>
&nbsp;&nbsp;&nbsp;- network driver will need to implement reg cache functionality
<br>
&nbsp;&nbsp;&nbsp;- these MMU notifiers will not be visible to OMPI; OMPI simply
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*always* registers (a system call) and the driver implements the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cache and does the de-register for you when the memory is freed
<br>
&nbsp;&nbsp;&nbsp;- gleb asks: don't we want to avoid the system call when possible?
<br>
&nbsp;&nbsp;&nbsp;- patrick: a single syscall can be/is cheaper than a reg cache
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lookup in user space
<br>
<p>2. patrick also proposes dlmalloc
<br>
&nbsp;&nbsp;&nbsp;- not as efficient as ptmalloc2 (no fine-grained thread locks)
<br>
&nbsp;&nbsp;&nbsp;- but is more robust and simpler than ptmalloc2 (mpich-mx switched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to it long ago)
<br>
&nbsp;&nbsp;&nbsp;- has the same linker issues as ptmalloc2 (e.g., will be problematic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with apps that require their own allocator)
<br>
&nbsp;&nbsp;&nbsp;--&gt; better for longer term (e.g., OMPI v1.4) because dlmalloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;handles large numbers of short malloc/free's better than
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptmalloc*
<br>
&nbsp;&nbsp;&nbsp;--&gt; upgrading to dlmalloc is also subject to points at bottom of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;these notes (don't call free() during de-register code paths)
<br>
<p>3. brian proposes mallopt
<br>
&nbsp;&nbsp;&nbsp;- patrick says: you have to check if registering memory is on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stack.  what do we do now?
<br>
&nbsp;&nbsp;&nbsp;- neither brian nor galen remembers offhand; we'll need to check
<br>
&nbsp;&nbsp;&nbsp;- we will have problems with apps that do lots of small allocations,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but still better than ptmalloc2 because can turn off mallopt via
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA param (i.e., just tell users: &quot;don't use mpi_leave_pinned&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instead of recompiling/reinstalling OMPI to disable ptmalloc2
<br>
<p>4. patrick also mentions: can simply use pipeline (take the bw perf
<br>
&nbsp;&nbsp;&nbsp;hit).  Unfortunalely, not feasible for benchmarks.  :-(
<br>
<p>---------------------------
<br>
<p>For v1.3, gravitating towards the following: leave ptmalloc2 as  
<br>
component
<br>
&nbsp;&nbsp;&nbsp;in the v1.3 tarball, but don't build it unless explicitly requested,
<br>
&nbsp;&nbsp;&nbsp;and ensure that the mallopt() protocol stuff works.
<br>
<p>&nbsp;&nbsp;&nbsp;- note that the mallopt code is currently enabled by 2nd mca param
<br>
&nbsp;&nbsp;&nbsp;- patrick: no guarantee that malloc will comply; it's only a hint.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need to have a run-time test to ensure that it works: set the trim
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;threshhold to large.  then malloc something just over the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;threshhold and free it, and see if munmap hooks were called.
<br>
&nbsp;&nbsp;&nbsp;- brian: we'll need to add the hooks for munmap (probably move them
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from where they are currently located)
<br>
&nbsp;&nbsp;&nbsp;- patrick: what about case like CHARMM where they have their own
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocator and don't support mallopt() hints?
<br>
&nbsp;&nbsp;&nbsp;- brian: same as today -- if you provide your own allocator,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leave_pinned doesn't work.  benefit here is that if you're *not*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using leave_pinned, then don't have heavyweight ptmalloc2 in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;way.  but you are hosed if you try to have your own allocator with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leave_pinned.
<br>
<p>*** brian's proposal for v1.3:
<br>
&nbsp;&nbsp;&nbsp;- disable building ptmalloc2 unless specifically requested
<br>
&nbsp;&nbsp;&nbsp;- add a component for intercepting munmap
<br>
&nbsp;&nbsp;&nbsp;- enable mallopt by default (currently in the mpool base) if all of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the following is true:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- you are using the munmap-intercept component (we can check
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this at run-time)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- leave_pinned was requested
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- mallopt hints work
<br>
<p>--------------------------
<br>
<p>- gleb: random note: if you call free from a callback in a threaded
<br>
&nbsp;&nbsp;&nbsp;build, we can deadlock
<br>
&nbsp;&nbsp;&nbsp;- brian: because OpenFabrics unregister calls malloc/free, and this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;causes problems.  we added a hack-ish loop to try to handle this.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;probably not completely corect; don't really know what *to* do.
<br>
&nbsp;&nbsp;&nbsp;- gleb: solved in openib btl -- we simply don't unreg on callback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(just save it on a list to unregister later).  but there are other
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;places it can/does happen.
<br>
&nbsp;&nbsp;&nbsp;- brian: yes, it's likely to be a big problem to cleanup.  unlikely
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to happen for v1.3.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Previous message:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
<li><strong>Reply:</strong> <a href="4058.php">Roland Dreier: "Re: [OMPI devel] Notes from mem hooks call today"</a>
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
