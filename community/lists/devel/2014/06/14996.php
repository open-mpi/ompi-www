<?
$subject_val = "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 13:48:19 2014" -->
<!-- isoreceived="20140609174819" -->
<!-- sent="Mon, 9 Jun 2014 10:48:17 -0700" -->
<!-- isosent="20140609174817" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status" -->
<!-- id="C75ED620-5AB2-489D-ACD9-2D8E123B87D5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="14CEB590-1D7A-4C6E-8689-0329BFABC997_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 13:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14997.php">Gilles Gouaillardet: "[OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>Previous message:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>In reply to:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rats - sent too soon. Should have noted that I committed the fix and CMR'd it to 1.8.2
<br>
<p>On Jun 9, 2014, at 10:47 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure that was created by the commit you cite, but it may have been exposed by it. Either way, the patch is correct - the TCP component will NULL the entry in the hash table, but that doesn't remove the key and so the hash_table lookup request will return &quot;success&quot; with a NULL pointer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2014, at 10:24 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; several mtt tests (ompi-trunk r31963) failed (SIGSEGV in mpirun) with a similar stack trace.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, you can refer to :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2199">http://mtt.open-mpi.org/index.php?do_redir=2199</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the issue is not related whatsoever to the init_thread_serialized test
</span><br>
<span class="quotelev2">&gt;&gt; (other tests failed with similar symptoms)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so far i could find that :
</span><br>
<span class="quotelev2">&gt;&gt; - the issue is intermittent and can be hard to reproduce (1 failure over 1000 runs)
</span><br>
<span class="quotelev2">&gt;&gt; - per the mtt logs, it seems this is quite a recent failure
</span><br>
<span class="quotelev2">&gt;&gt; - a necessary condition is that MPI tasks exit with a non zero status after having called MPI_Finalize()
</span><br>
<span class="quotelev2">&gt;&gt; - the crash occurs is in orte/mca/oob/base/oob_base_frame.c at line 89 when invoking
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_RELEASE(value) ;
</span><br>
<span class="quotelev2">&gt;&gt; in some rare cases, value is NULL which causes the crash.
</span><br>
<span class="quotelev2">&gt;&gt; - though i cannot incriminate one changeset in particular, i highly suspect the changes that were made in order to address the issue(s) discussed at <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14908.php">http://www.open-mpi.org/community/lists/devel/2014/05/14908.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the attached a patch that works around this issue.
</span><br>
<span class="quotelev2">&gt;&gt; i did not commit it because i consider this as a work around and not as a fix :
</span><br>
<span class="quotelev2">&gt;&gt; the root cause might be a tricky race condition (&quot;abort&quot; after MPI_Finalize).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as a side note, here is the definition of OBJ_RELEASE (opal/class/opal_object.h)
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; #define OBJ_RELEASE(object)                                             \
</span><br>
<span class="quotelev2">&gt;&gt;     do {                                                                \
</span><br>
<span class="quotelev2">&gt;&gt;         assert(NULL != ((opal_object_t *) (object))-&gt;obj_class);        \
</span><br>
<span class="quotelev2">&gt;&gt;         assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (object))-&gt;obj_magic_id); \
</span><br>
<span class="quotelev2">&gt;&gt;     } while (0)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; should we add the following assert at the beginning ?
</span><br>
<span class="quotelev2">&gt;&gt; assert(NULL != object);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your comments,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; &lt;oob.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14994.php">http://www.open-mpi.org/community/lists/devel/2014/06/14994.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14997.php">Gilles Gouaillardet: "[OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>Previous message:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>In reply to:</strong> <a href="14995.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
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
