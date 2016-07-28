<?
$subject_val = "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 19:26:37 2014" -->
<!-- isoreceived="20141127002637" -->
<!-- sent="Thu, 27 Nov 2014 09:26:29 +0900" -->
<!-- isosent="20141127002629" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang" -->
<!-- id="dd8bl6yvj1wmm9agb6ejujmu.1417047989379_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 19:26:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will have a look
<br>
<p>Btw, i was running the fortran version, not the c one.
<br>
Did you confgure with --enable--debug ?
<br>
The program sends to a rank *not* in the communicator, so this behavior could make some sense on an optimized build.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;Ick - I&#226;&#128;&#153;m getting a segfault when trying to run that test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPITEST info&#194;&#160; (0): Starting MPI_Errhandler_fatal test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPITEST info&#194;&#160; (0): This test will abort after printing the results message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPITEST info&#194;&#160; (0): If it does not, then a f.a.i.l.u.r.e will be noted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7f4485ecb130]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7f4480f74ca6]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07713] [ 2] [bend001:07714] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7ff457885130]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7ff44e8dbca6]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07714] [ 2] [bend001:07715] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7ffa97ff6130]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7ffa8eeeeca6]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[bend001:07715] [ 2] MPITEST_results: MPI_Errhandler_fatal all tests PASSED (3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is with the head of the 1.8 branch. Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 26, 2014, at 8:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hmmm&#226;&#128;&#166;.yeah, I know we saw this and resolved it in the trunk, but it looks like the fix indeed failed to come over to 1.8. I&#226;&#128;&#153;ll take a gander (pretty sure I remember how I fixed it) - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 26, 2014, at 12:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i noted several hangs in mtt with the v1.8 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;a simple way to reproduce it is to use the MPI_Errhandler_fatal_f test
</span><br>
<span class="quotelev1">&gt;from the intel_tests suite,
</span><br>
<span class="quotelev1">&gt;invoke mpirun on one node and run the taks on an other node :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;node0$ mpirun -np 3 -host node1 --mca btl tcp,self ./MPI_Errhandler_fatal_f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/* since this is a race condition, you might need to run this in a loop
</span><br>
<span class="quotelev1">&gt;in order to hit the bug */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the attached tarball contains a patch (add debug + temporary hack) and
</span><br>
<span class="quotelev1">&gt;some log files obtained with
</span><br>
<span class="quotelev1">&gt;--mca errmgr_base_verbose 100 --mca odls_base_verbose 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;without the hack, i can reproduce the bug with -np 3 (log.ko.txt) , with
</span><br>
<span class="quotelev1">&gt;the hack, i can still reproduce the hang (though it might
</span><br>
<span class="quotelev1">&gt;be a different one) with -np 16 (log.ko.2.txt)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i remember some similar hangs were fixed on the trunk/master a few
</span><br>
<span class="quotelev1">&gt;monthes ago.
</span><br>
<span class="quotelev1">&gt;i tried to backport some commits but it did not help :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;could you please have a look at this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;&lt;abort_hang.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16357.php">http://www.open-mpi.org/community/lists/devel/2014/11/16357.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16365.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
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
