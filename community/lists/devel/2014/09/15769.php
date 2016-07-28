<?
$subject_val = "Re: [OMPI devel] race condition in coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 10:20:35 2014" -->
<!-- isoreceived="20140901142035" -->
<!-- sent="Mon, 1 Sep 2014 07:20:26 -0700" -->
<!-- isosent="20140901142026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in coll/ml" -->
<!-- id="0F72EF19-3B2C-4A88-B096-29895066D5A5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54044760.5050402_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in coll/ml<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 10:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15770.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] race condition in coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>In reply to:</strong> <a href="15767.php">Gilles Gouaillardet: "[OMPI devel] race condition in coll/ml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually we have trouble with coll/ml because the process locality isn't being reported sufficiently for its needs. Given the recent change in data exchange, I suspect that is the root cause here - I have a note to Nathan asking for clarification of the coll/ml locality requirement.
<br>
<p>Did this patch &quot;fix&quot; the problem by avoiding the segfault due to coll/ml disqualifying itself? Or did it make everything work okay again?
<br>
<p><p>On Sep 1, 2014, at 3:16 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mtt recently failed a bunch of times with the trunk.
</span><br>
<span class="quotelev1">&gt; a good suspect is the collective/ibarrier test from the ibm test suite.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; most of the time, CHECK_AND_RECYCLE will fail
</span><br>
<span class="quotelev1">&gt; /* IS_COLL_SYNCMEM(coll_op) is true */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with this test case, we just get a glory SIGSEGV since OBJ_RELEASE is
</span><br>
<span class="quotelev1">&gt; called on MPI_COMM_WORLD (which has *not* been allocated with OBJ_NEW)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i commited r32659 in order to :
</span><br>
<span class="quotelev1">&gt; - display an error message
</span><br>
<span class="quotelev1">&gt; - abort if the communicator is an intrincic one
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with attached modified version of the ibarrier test, i always get an
</span><br>
<span class="quotelev1">&gt; error on task 0 when invoked with
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host node0,node1 --mca btl tcp,self ./ibarrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the modified version adds some sleep(1) in order to work around the race
</span><br>
<span class="quotelev1">&gt; condition and get a reproducible crash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i tried to dig and could not find a correct way to fix this.
</span><br>
<span class="quotelev1">&gt; that being said, i tried the attached ml.patch and it did fix the
</span><br>
<span class="quotelev1">&gt; problem (even with NREQS=1024)
</span><br>
<span class="quotelev1">&gt; i did not commit it since this is very likely incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could someone have a look ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;ibarrier.c&gt;&lt;ml.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15767.php">http://www.open-mpi.org/community/lists/devel/2014/09/15767.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15770.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] race condition in coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>In reply to:</strong> <a href="15767.php">Gilles Gouaillardet: "[OMPI devel] race condition in coll/ml"</a>
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
