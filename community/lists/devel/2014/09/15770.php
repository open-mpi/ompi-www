<?
$subject_val = "Re: [OMPI devel] OMPI devel] race condition in coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 10:35:12 2014" -->
<!-- isoreceived="20140901143512" -->
<!-- sent="Mon, 01 Sep 2014 23:35:00 +0900" -->
<!-- isosent="20140901143500" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] race condition in coll/ml" -->
<!-- id="805v57yeaes0l29kmuhlk5rv.1409582100258_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] race condition in coll/ml" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] race condition in coll/ml<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 10:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15771.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15769.php">Ralph Castain: "Re: [OMPI devel] race condition in coll/ml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The changeset avoids SIGSEGV by calling mpi_abort before bad things happen.
<br>
<p>The attached patch seems to fix the problem (and makes the changeset kind of useless).
<br>
Once again, the patch was very little tested and might break other parts of coll/m.laposte
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Usually we have trouble with coll/ml because the process locality isn't being reported sufficiently for its needs. Given the recent change in data exchange, I suspect that is the root cause here - I have a note to Nathan asking for clarification of the coll/ml locality requirement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Did this patch &quot;fix&quot; the problem by avoiding the segfault due to coll/ml disqualifying itself? Or did it make everything work okay again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sep 1, 2014, at 3:16 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mtt recently failed a bunch of times with the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; a good suspect is the collective/ibarrier test from the ibm test suite.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; most of the time, CHECK_AND_RECYCLE will fail
</span><br>
<span class="quotelev2">&gt;&gt; /* IS_COLL_SYNCMEM(coll_op) is true */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with this test case, we just get a glory SIGSEGV since OBJ_RELEASE is
</span><br>
<span class="quotelev2">&gt;&gt; called on MPI_COMM_WORLD (which has *not* been allocated with OBJ_NEW)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i commited r32659 in order to :
</span><br>
<span class="quotelev2">&gt;&gt; - display an error message
</span><br>
<span class="quotelev2">&gt;&gt; - abort if the communicator is an intrincic one
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with attached modified version of the ibarrier test, i always get an
</span><br>
<span class="quotelev2">&gt;&gt; error on task 0 when invoked with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -host node0,node1 --mca btl tcp,self ./ibarrier
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the modified version adds some sleep(1) in order to work around the race
</span><br>
<span class="quotelev2">&gt;&gt; condition and get a reproducible crash
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i tried to dig and could not find a correct way to fix this.
</span><br>
<span class="quotelev2">&gt;&gt; that being said, i tried the attached ml.patch and it did fix the
</span><br>
<span class="quotelev2">&gt;&gt; problem (even with NREQS=1024)
</span><br>
<span class="quotelev2">&gt;&gt; i did not commit it since this is very likely incorrect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; could someone have a look ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ibarrier.c&gt;&lt;ml.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15767.php">http://www.open-mpi.org/community/lists/devel/2014/09/15767.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15769.php">http://www.open-mpi.org/community/lists/devel/2014/09/15769.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15771.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15769.php">Ralph Castain: "Re: [OMPI devel] race condition in coll/ml"</a>
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
