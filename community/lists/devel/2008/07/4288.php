<?
$subject_val = "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 17:02:03 2008" -->
<!-- isoreceived="20080707210203" -->
<!-- sent="Mon, 7 Jul 2008 17:01:58 -0400 (EDT)" -->
<!-- isosent="20080707210158" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code" -->
<!-- id="Pine.LNX.4.64.0807071319080.29977_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C49788FB.E203%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 17:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4289.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4287.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>In reply to:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Responding to both of Ralph's e-mails in one, just to confuse people :).
<br>
<p>First, the issue of the recursive locks...  Back in the day, ompi_proc_t 
<br>
instances could be created as a side effect of other operations. 
<br>
Therefore, to maintain sanity, the procs were implicitly added to the 
<br>
master proc list when the proc was created.
<br>
<p>When I reworked the modex last year, I also changed the proc code so that 
<br>
procs are never implicitly created.  There's only two ways to get a new 
<br>
proc to come into existence -- ompi_proc_init() and ompi_proc_unpack(). 
<br>
Therefore, there's no need for the proc construct to implicitly add the 
<br>
proc to the procs list -- there's only two places in the proc code that 
<br>
need to change if it isn't (solving the recusive locking problem).
<br>
<p>Ralph already committed code to the trunk to deal with this case, although 
<br>
there are a couple of changes that Jeff and Ralph are working out.  For 
<br>
removal, it ended up making more sense to remove the procs from the list 
<br>
during the destructor, as it will allow us to remove procs from the system 
<br>
in comm_disconnect situations in the future (although we're not actually 
<br>
going to do that until after v1.3).
<br>
<p>As for thread safety with the return from ompi_proc_all and 
<br>
ompi_proc_world.  Today, the ompi_proc code has one ref count held for it, 
<br>
which is set in ompi_proc_init or ompi_proc_unpack and not released until 
<br>
ompi_proc_finalize.  So there's no way to remove a proc from the system 
<br>
before MPI_FINALIZE, unless something bad has already happened. 
<br>
Therefore, the lists are (today) thread safe.  ompi_proc_world and 
<br>
ompi_proc_self only return procs created by ompi_proc_init, and there's no 
<br>
way a correct MPI program could ever cause the procs in that list to reach 
<br>
a ref count of zero before MPI_FINALIZE, so they are always thread safe in 
<br>
usage.
<br>
<p>There is a problem which I've outlined to Jeff and Ralph with the thread 
<br>
safety of ompi_proc_all() if the accept/connect code is changed such that 
<br>
procs can be destroyed before ompi_proc_finalize().  This can't happen 
<br>
today, so there is no thread safety issue with ompi_proc_all() today.  In 
<br>
the future, there might be, although the solution is fairly simple (and 
<br>
Jeff and Ralph know what I propsed and will implement it before implentng 
<br>
the release procs before finalize thing, which has other implications to 
<br>
the PML/BML/BTL that I won't go into here.
<br>
<p>Brian
<br>
<p><p><p>On Mon, 7 Jul 2008, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; I will have to correct something here. From what I can see, it appears the
</span><br>
<span class="quotelev1">&gt; MPI code may not be creating ompi_proc_t structures, but rather creating
</span><br>
<span class="quotelev1">&gt; arrays of ompi_proc_t* pointers that are then filled with values equal to
</span><br>
<span class="quotelev1">&gt; the pointers in the ompi_proc_list held inside of ompi/proc/proc.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears, though, that this may be done in a non-thread-safe manner. When
</span><br>
<span class="quotelev1">&gt; the arrays are filled by calling ompi_proc_world or ompi_proc_all, the
</span><br>
<span class="quotelev1">&gt; objects themselves are never OBJ_RETAIN'd. As a result, when the first
</span><br>
<span class="quotelev1">&gt; thread in the code calls OBJ_RELEASE, the object is removed from the
</span><br>
<span class="quotelev1">&gt; ompi_proc_list and free'd - but the other threads that called
</span><br>
<span class="quotelev1">&gt; ompi_proc_world/all still retain pointers that now reference invalid memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps the best path forward is to devise a thread-safe design for this
</span><br>
<span class="quotelev1">&gt; code area and present it for people's review. I'll see what I can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, comments are welcomed
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/7/08 8:22 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeking input before making a change to the ompi/proc/proc.c code to
</span><br>
<span class="quotelev2">&gt;&gt; resolve the referenced ticket. The change could potentially impact how the
</span><br>
<span class="quotelev2">&gt;&gt; ompi_proc_t struct is used in the rest of the MPI code base. If this doesn't
</span><br>
<span class="quotelev2">&gt;&gt; impact you, please ignore the remainder of this note.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was asked last week to take a look at ticket #1267, filed by Tim Prins
</span><br>
<span class="quotelev2">&gt;&gt; several months ago. This ticket references a report on the devel list about
</span><br>
<span class="quotelev2">&gt;&gt; thread locks when calling comm_spawn and using MPI_Init_thread. The thread
</span><br>
<span class="quotelev2">&gt;&gt; lock is caused by the constructor/destructor in the ompi_proc_t class
</span><br>
<span class="quotelev2">&gt;&gt; explicitly removing the referenced ompi_proc_t from the static local global
</span><br>
<span class="quotelev2">&gt;&gt; ompi_proc_list, and calling OPAL_THREAD_LOCK/OPAL_THREAD_UNLOCK around that
</span><br>
<span class="quotelev2">&gt;&gt; list operation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can see, Tim correctly resolved the constructor conflict by
</span><br>
<span class="quotelev2">&gt;&gt; simply removing the thread lock/unlock and list append operation from the
</span><br>
<span class="quotelev2">&gt;&gt; constructor. A scan of the code shows that OBJ_NEW is -only- called from
</span><br>
<span class="quotelev2">&gt;&gt; within the ompi/proc/proc.c code, so this won't be an issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I noted several issues surrounding the creation and release of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_proc_t objects that -may- cause problems in making a similar change to
</span><br>
<span class="quotelev2">&gt;&gt; the destructor to fix the rest of the threading problem. These may have been
</span><br>
<span class="quotelev2">&gt;&gt; created in response to the list modification code currently existing in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi_proc_t object destructor - or they may be due to other factors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, the MPI code base outside of ompi/proc/proc.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. -never- treats the ompi_proc_t as an opal object. Instead, the code
</span><br>
<span class="quotelev2">&gt;&gt; specifically calls calloc to create space for the structures, and then
</span><br>
<span class="quotelev2">&gt;&gt; manually constructs them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. consistently calls OBJ_RELEASE on the resulting structures, even though
</span><br>
<span class="quotelev2">&gt;&gt; they were never created as opal objects via OBJ_NEW.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I confess to being puzzled here as the destructor will attempt to remove the
</span><br>
<span class="quotelev2">&gt;&gt; referenced ompi_proc_t* pointer from the ompi_proc_list in ompi/proc/proc.c,
</span><br>
<span class="quotelev2">&gt;&gt; but (since OBJ_NEW wasn't called) that object won't be on the list. Looking
</span><br>
<span class="quotelev2">&gt;&gt; at the code itself, it appears we rely on the list function to realize that
</span><br>
<span class="quotelev2">&gt;&gt; this object isn't on the list and ignore the request to remove it. We don't
</span><br>
<span class="quotelev2">&gt;&gt; check the return code from the opal_list_remove_item, and so ignore the
</span><br>
<span class="quotelev2">&gt;&gt; returned error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My point here is to seek comment about the proposed fix for the problem
</span><br>
<span class="quotelev2">&gt;&gt; referenced in the ticket. My proposal is to remove the thread lock/unlock
</span><br>
<span class="quotelev2">&gt;&gt; and list manipulation from the ompi_proc_t destructor. From what I can see
</span><br>
<span class="quotelev2">&gt;&gt; (as described above), this should not impact the rest of the code base. I
</span><br>
<span class="quotelev2">&gt;&gt; will then add thread lock/unlock protection explicitly to ompi_proc_finalize
</span><br>
<span class="quotelev2">&gt;&gt; to protect its list operations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears to me that this change would also open the way to allowing the
</span><br>
<span class="quotelev2">&gt;&gt; remainder of the code base to treat ompi_proc_t as an object, using OBJ_NEW
</span><br>
<span class="quotelev2">&gt;&gt; to correctly and consistently initialize those objects. I note that any
</span><br>
<span class="quotelev2">&gt;&gt; change to ompi_proc_t today (which has occurred in the not-too-distant
</span><br>
<span class="quotelev2">&gt;&gt; past!) can create a problem throughout the current code base due to the
</span><br>
<span class="quotelev2">&gt;&gt; manual construction of this object. This is why we have objects in the first
</span><br>
<span class="quotelev2">&gt;&gt; place - I suspect people didn't use OBJ_NEW because of the automatic change
</span><br>
<span class="quotelev2">&gt;&gt; it induced in the ompi_proc_list in ompi/proc/proc.c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any comments would be welcome.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4289.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4287.php">Jeff Squyres: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>In reply to:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- nextthread="start" -->
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
