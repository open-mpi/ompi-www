<?
$subject_val = "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 10:22:28 2008" -->
<!-- isoreceived="20080707142228" -->
<!-- sent="Mon, 07 Jul 2008 08:22:11 -0600" -->
<!-- isosent="20080707142211" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code" -->
<!-- id="C49782B3.E1FE%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 10:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Previous message:</strong> <a href="4281.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Reply:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeking input before making a change to the ompi/proc/proc.c code to
<br>
resolve the referenced ticket. The change could potentially impact how the
<br>
ompi_proc_t struct is used in the rest of the MPI code base. If this doesn't
<br>
impact you, please ignore the remainder of this note.
<br>
<p><p>I was asked last week to take a look at ticket #1267, filed by Tim Prins
<br>
several months ago. This ticket references a report on the devel list about
<br>
thread locks when calling comm_spawn and using MPI_Init_thread. The thread
<br>
lock is caused by the constructor/destructor in the ompi_proc_t class
<br>
explicitly removing the referenced ompi_proc_t from the static local global
<br>
ompi_proc_list, and calling OPAL_THREAD_LOCK/OPAL_THREAD_UNLOCK around that
<br>
list operation.
<br>
<p>As far as I can see, Tim correctly resolved the constructor conflict by
<br>
simply removing the thread lock/unlock and list append operation from the
<br>
constructor. A scan of the code shows that OBJ_NEW is -only- called from
<br>
within the ompi/proc/proc.c code, so this won't be an issue.
<br>
<p>However, I noted several issues surrounding the creation and release of
<br>
ompi_proc_t objects that -may- cause problems in making a similar change to
<br>
the destructor to fix the rest of the threading problem. These may have been
<br>
created in response to the list modification code currently existing in the
<br>
ompi_proc_t object destructor - or they may be due to other factors.
<br>
<p>Specifically, the MPI code base outside of ompi/proc/proc.c:
<br>
<p>1. -never- treats the ompi_proc_t as an opal object. Instead, the code
<br>
specifically calls calloc to create space for the structures, and then
<br>
manually constructs them.
<br>
<p>2. consistently calls OBJ_RELEASE on the resulting structures, even though
<br>
they were never created as opal objects via OBJ_NEW.
<br>
<p>I confess to being puzzled here as the destructor will attempt to remove the
<br>
referenced ompi_proc_t* pointer from the ompi_proc_list in ompi/proc/proc.c,
<br>
but (since OBJ_NEW wasn't called) that object won't be on the list. Looking
<br>
at the code itself, it appears we rely on the list function to realize that
<br>
this object isn't on the list and ignore the request to remove it. We don't
<br>
check the return code from the opal_list_remove_item, and so ignore the
<br>
returned error.
<br>
<p>My point here is to seek comment about the proposed fix for the problem
<br>
referenced in the ticket. My proposal is to remove the thread lock/unlock
<br>
and list manipulation from the ompi_proc_t destructor. From what I can see
<br>
(as described above), this should not impact the rest of the code base. I
<br>
will then add thread lock/unlock protection explicitly to ompi_proc_finalize
<br>
to protect its list operations.
<br>
<p>It appears to me that this change would also open the way to allowing the
<br>
remainder of the code base to treat ompi_proc_t as an object, using OBJ_NEW
<br>
to correctly and consistently initialize those objects. I note that any
<br>
change to ompi_proc_t today (which has occurred in the not-too-distant
<br>
past!) can create a problem throughout the current code base due to the
<br>
manual construction of this object. This is why we have objects in the first
<br>
place - I suspect people didn't use OBJ_NEW because of the automatic change
<br>
it induced in the ompi_proc_list in ompi/proc/proc.c.
<br>
<p>Any comments would be welcome.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Previous message:</strong> <a href="4281.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Reply:</strong> <a href="4283.php">Ralph H Castain: "Re: [OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
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
