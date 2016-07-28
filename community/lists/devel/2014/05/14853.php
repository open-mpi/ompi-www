<?
$subject_val = "Re: [OMPI devel] some info is not pushed into the dstore";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 13:13:06 2014" -->
<!-- isoreceived="20140527171306" -->
<!-- sent="Tue, 27 May 2014 10:13:02 -0700" -->
<!-- isosent="20140527171302" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some info is not pushed into the dstore" -->
<!-- id="8CBB8AF3-7F25-4BBD-A1C2-92F80667D5A8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tXgS2g497FbsKH_i_s+vZDD80GeegLqzeriMHozf8F-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some info is not pushed into the dstore<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 13:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14854.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14852.php">Thomas Naughton: "[OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14848.php">Gilles Gouaillardet: "[OMPI devel] some info is not pushed into the dstore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14861.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Reply:</strong> <a href="14861.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>I concur on the typo and fixed it - thanks for catching it. I'll have to look into the problem you reported as it has been fixed in the past, and was working last I checked it. The info required for this 3-way connect/accept is supposed to be in the modex provided by the common communicator.
<br>
<p>On May 27, 2014, at 3:51 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while debugging the dynamic/intercomm_create from the ibm test suite, i found something odd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i ran *without* any batch manager on a VM (one socket and four cpus)
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./dynamic/intercomm_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it hangs by default
</span><br>
<span class="quotelev1">&gt; it works with --mca coll ^ml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically :
</span><br>
<span class="quotelev1">&gt; - task 0 spawns task 1
</span><br>
<span class="quotelev1">&gt; - task 0 spawns task 2
</span><br>
<span class="quotelev1">&gt; - a communicator is created for the 3 tasks via MPI_Intercomm_create()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_create() calls ompi_comm_get_rprocs() which calls ompi_proc_set_locality()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then, on task 1, ompi_proc_set_locality() calls
</span><br>
<span class="quotelev1">&gt; opal_dstore.fetch(opal_dstore_internal, &quot;task 2&quot;-&gt;proc_name, ...) which fails and this is OK
</span><br>
<span class="quotelev1">&gt; then 
</span><br>
<span class="quotelev1">&gt; opal_dstore_fetch(opal_dstore_nonpeer, &quot;task 2&quot;-&gt;proc_name, ...) which fails and this is *not* OK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* on task 2, the first fetch for &quot;task 1&quot; fails but the second success */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my analysis is that when task 2 was created, it updated its opal_dstore_nonpeer with info from &quot;task 1&quot; which was previously spawned by task 0.
</span><br>
<span class="quotelev1">&gt; when task 1 was spawned, task 2 did not exist yet and hence opal_dstore_nonpeer contains no reference to task 2.
</span><br>
<span class="quotelev1">&gt; but when task 2 was spawned, opal_dstore_nonpeer of task 1 has not been updated, hence the failure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (on task 1, proc_flags of task 2 has incorrect locality, this likely confuses coll ml and hang the test)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should task1 have received new information when task 2 was spawned ?
</span><br>
<span class="quotelev1">&gt; shoud task2 have sent information to task1 when it was spawned ?
</span><br>
<span class="quotelev1">&gt; should task1 have (tried to) get fresh information before invoking MPI_Intercomm_create() ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; incidentally, i found ompi_proc_set_locality calls opal_dstore.store with 
</span><br>
<span class="quotelev1">&gt; identifier &amp;proc (the argument is &amp;proc-&gt;proc_name everywhere else, so this
</span><br>
<span class="quotelev1">&gt; is likely a bug/typo. the attached patch fixes this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your feedback,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;proc.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14848.php">http://www.open-mpi.org/community/lists/devel/2014/05/14848.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14854.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14852.php">Thomas Naughton: "[OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14848.php">Gilles Gouaillardet: "[OMPI devel] some info is not pushed into the dstore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14861.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Reply:</strong> <a href="14861.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
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
