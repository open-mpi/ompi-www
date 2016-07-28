<?
$subject_val = "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 10:49:13 2008" -->
<!-- isoreceived="20080707144913" -->
<!-- sent="Mon, 07 Jul 2008 08:48:59 -0600" -->
<!-- isosent="20080707144859" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code" -->
<!-- id="C49788FB.E203%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C49782B3.E1FE%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 10:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4284.php">Terry Dontje: "[OMPI devel] latency and increasing number of processes"</a>
<li><strong>Previous message:</strong> <a href="4282.php">Ralph H Castain: "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>In reply to:</strong> <a href="4282.php">Ralph H Castain: "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4288.php">Brian W. Barrett: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Reply:</strong> <a href="4288.php">Brian W. Barrett: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will have to correct something here. From what I can see, it appears the
<br>
MPI code may not be creating ompi_proc_t structures, but rather creating
<br>
arrays of ompi_proc_t* pointers that are then filled with values equal to
<br>
the pointers in the ompi_proc_list held inside of ompi/proc/proc.c.
<br>
<p>It appears, though, that this may be done in a non-thread-safe manner. When
<br>
the arrays are filled by calling ompi_proc_world or ompi_proc_all, the
<br>
objects themselves are never OBJ_RETAIN'd. As a result, when the first
<br>
thread in the code calls OBJ_RELEASE, the object is removed from the
<br>
ompi_proc_list and free'd - but the other threads that called
<br>
ompi_proc_world/all still retain pointers that now reference invalid memory.
<br>
<p>Perhaps the best path forward is to devise a thread-safe design for this
<br>
code area and present it for people's review. I'll see what I can do.
<br>
<p>Again, comments are welcomed
<br>
Ralph
<br>
<p><p><p>On 7/7/08 8:22 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am seeking input before making a change to the ompi/proc/proc.c code to
</span><br>
<span class="quotelev1">&gt; resolve the referenced ticket. The change could potentially impact how the
</span><br>
<span class="quotelev1">&gt; ompi_proc_t struct is used in the rest of the MPI code base. If this doesn't
</span><br>
<span class="quotelev1">&gt; impact you, please ignore the remainder of this note.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was asked last week to take a look at ticket #1267, filed by Tim Prins
</span><br>
<span class="quotelev1">&gt; several months ago. This ticket references a report on the devel list about
</span><br>
<span class="quotelev1">&gt; thread locks when calling comm_spawn and using MPI_Init_thread. The thread
</span><br>
<span class="quotelev1">&gt; lock is caused by the constructor/destructor in the ompi_proc_t class
</span><br>
<span class="quotelev1">&gt; explicitly removing the referenced ompi_proc_t from the static local global
</span><br>
<span class="quotelev1">&gt; ompi_proc_list, and calling OPAL_THREAD_LOCK/OPAL_THREAD_UNLOCK around that
</span><br>
<span class="quotelev1">&gt; list operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can see, Tim correctly resolved the constructor conflict by
</span><br>
<span class="quotelev1">&gt; simply removing the thread lock/unlock and list append operation from the
</span><br>
<span class="quotelev1">&gt; constructor. A scan of the code shows that OBJ_NEW is -only- called from
</span><br>
<span class="quotelev1">&gt; within the ompi/proc/proc.c code, so this won't be an issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I noted several issues surrounding the creation and release of
</span><br>
<span class="quotelev1">&gt; ompi_proc_t objects that -may- cause problems in making a similar change to
</span><br>
<span class="quotelev1">&gt; the destructor to fix the rest of the threading problem. These may have been
</span><br>
<span class="quotelev1">&gt; created in response to the list modification code currently existing in the
</span><br>
<span class="quotelev1">&gt; ompi_proc_t object destructor - or they may be due to other factors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, the MPI code base outside of ompi/proc/proc.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. -never- treats the ompi_proc_t as an opal object. Instead, the code
</span><br>
<span class="quotelev1">&gt; specifically calls calloc to create space for the structures, and then
</span><br>
<span class="quotelev1">&gt; manually constructs them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. consistently calls OBJ_RELEASE on the resulting structures, even though
</span><br>
<span class="quotelev1">&gt; they were never created as opal objects via OBJ_NEW.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I confess to being puzzled here as the destructor will attempt to remove the
</span><br>
<span class="quotelev1">&gt; referenced ompi_proc_t* pointer from the ompi_proc_list in ompi/proc/proc.c,
</span><br>
<span class="quotelev1">&gt; but (since OBJ_NEW wasn't called) that object won't be on the list. Looking
</span><br>
<span class="quotelev1">&gt; at the code itself, it appears we rely on the list function to realize that
</span><br>
<span class="quotelev1">&gt; this object isn't on the list and ignore the request to remove it. We don't
</span><br>
<span class="quotelev1">&gt; check the return code from the opal_list_remove_item, and so ignore the
</span><br>
<span class="quotelev1">&gt; returned error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point here is to seek comment about the proposed fix for the problem
</span><br>
<span class="quotelev1">&gt; referenced in the ticket. My proposal is to remove the thread lock/unlock
</span><br>
<span class="quotelev1">&gt; and list manipulation from the ompi_proc_t destructor. From what I can see
</span><br>
<span class="quotelev1">&gt; (as described above), this should not impact the rest of the code base. I
</span><br>
<span class="quotelev1">&gt; will then add thread lock/unlock protection explicitly to ompi_proc_finalize
</span><br>
<span class="quotelev1">&gt; to protect its list operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears to me that this change would also open the way to allowing the
</span><br>
<span class="quotelev1">&gt; remainder of the code base to treat ompi_proc_t as an object, using OBJ_NEW
</span><br>
<span class="quotelev1">&gt; to correctly and consistently initialize those objects. I note that any
</span><br>
<span class="quotelev1">&gt; change to ompi_proc_t today (which has occurred in the not-too-distant
</span><br>
<span class="quotelev1">&gt; past!) can create a problem throughout the current code base due to the
</span><br>
<span class="quotelev1">&gt; manual construction of this object. This is why we have objects in the first
</span><br>
<span class="quotelev1">&gt; place - I suspect people didn't use OBJ_NEW because of the automatic change
</span><br>
<span class="quotelev1">&gt; it induced in the ompi_proc_list in ompi/proc/proc.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments would be welcome.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4284.php">Terry Dontje: "[OMPI devel] latency and increasing number of processes"</a>
<li><strong>Previous message:</strong> <a href="4282.php">Ralph H Castain: "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>In reply to:</strong> <a href="4282.php">Ralph H Castain: "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4288.php">Brian W. Barrett: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Reply:</strong> <a href="4288.php">Brian W. Barrett: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
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
