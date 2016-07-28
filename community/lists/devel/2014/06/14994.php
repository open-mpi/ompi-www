<?
$subject_val = "[OMPI devel] intermittent crash in mpirun upon non zero exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 01:24:17 2014" -->
<!-- isoreceived="20140609052417" -->
<!-- sent="Mon, 9 Jun 2014 14:24:14 +0900" -->
<!-- isosent="20140609052414" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] intermittent crash in mpirun upon non zero exit status" -->
<!-- id="CAAkFZ5tV=zF0pdHZYqfhHUnXy=JQQMRKDUpPSBTBSAQpFqp_BQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] intermittent crash in mpirun upon non zero exit status<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 01:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>Previous message:</strong> <a href="14993.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>Reply:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>several mtt tests (ompi-trunk r31963) failed (SIGSEGV in mpirun) with a
<br>
similar stack trace.
<br>
<p>For example, you can refer to :
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2199">http://mtt.open-mpi.org/index.php?do_redir=2199</a>
<br>
<p>the issue is not related whatsoever to the init_thread_serialized test
<br>
(other tests failed with similar symptoms)
<br>
<p>so far i could find that :
<br>
- the issue is intermittent and can be hard to reproduce (1 failure over
<br>
1000 runs)
<br>
- per the mtt logs, it seems this is quite a recent failure
<br>
- a necessary condition is that MPI tasks exit with a non zero status after
<br>
having called MPI_Finalize()
<br>
- the crash occurs is in orte/mca/oob/base/oob_base_frame.c at line 89 when
<br>
invoking
<br>
OBJ_RELEASE(value) ;
<br>
in some rare cases, value is NULL which causes the crash.
<br>
- though i cannot incriminate one changeset in particular, i highly suspect
<br>
the changes that were made in order to address the issue(s) discussed at
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/05/14908.php">http://www.open-mpi.org/community/lists/devel/2014/05/14908.php</a>
<br>
<p>the attached a patch that works around this issue.
<br>
i did not commit it because i consider this as a work around and not as a
<br>
fix :
<br>
the root cause might be a tricky race condition (&quot;abort&quot; after
<br>
MPI_Finalize).
<br>
<p><p>as a side note, here is the definition of OBJ_RELEASE
<br>
(opal/class/opal_object.h)
<br>
#if OPAL_ENABLE_DEBUG
<br>
#define OBJ_RELEASE(object)                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {                                                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(NULL != ((opal_object_t *) (object))-&gt;obj_class);        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *)
<br>
(object))-&gt;obj_magic_id); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while (0)
<br>
...
<br>
#else
<br>
...
<br>
<p>should we add the following assert at the beginning ?
<br>
assert(NULL != object);
<br>
<p><p>Thanks in advance for your comments,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14994/oob.patch">oob.patch</a>
</ul>
<!-- attachment="oob.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>Previous message:</strong> <a href="14993.php">Ralph Castain: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>Reply:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
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
