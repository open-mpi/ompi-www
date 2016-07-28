<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 20:55:08 2014" -->
<!-- isoreceived="20141127015508" -->
<!-- sent="Thu, 27 Nov 2014 10:55:07 +0900" -->
<!-- isosent="20141127015507" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang" -->
<!-- id="5476847B.5010109_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4l0ednln3sn9845ijdtdp4ig.1417050385842_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 20:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16367.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>In reply to:</strong> <a href="16366.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>let me correct and enhance my previous statement :
<br>
<p>- i cannot reproduce your crash in my environment (RHEL6 like vs your
<br>
RHEL7 like)
<br>
(i configured with --enable-debug --enable-picky)
<br>
<p>- i can reproduce the crash with
<br>
mpirun --mca mpi_param_check false
<br>
<p>- if you configured with --without-mpi-param-check, i assume you would
<br>
get the same crash
<br>
(and if i understand correctly, there would be no way to --mca
<br>
mpi_param_check true)
<br>
<p>here is the relevant part of my config.status :
<br>
$ grep MPI_PARAM_CHECK config.status
<br>
D[&quot;MPI_PARAM_CHECK&quot;]=&quot; ompi_mpi_param_check&quot;
<br>
D[&quot;OMPI_PARAM_CHECK&quot;]=&quot; 1&quot;
<br>
<p>i will try on a centos7 box from now.
<br>
in the mean time, can you check you config.status and try again with
<br>
mpirun --mca mpi_param_check true
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/11/27 10:06, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; I will double check this(afk right now)
</span><br>
<span class="quotelev1">&gt; Are you running on a rhel6 like distro with gcc ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iirc, crash vs mpi error is ruled by --with-param-check or something like this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;??????:
</span><br>
<span class="quotelev2">&gt;&gt; I tried it with both the fortran and c versions - got the same result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was indeed with a debug build. I wouldn't expect a segfault even with an optimized build, though - I would expect an MPI error, yes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 26, 2014, at 4:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will have a look
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw, i was running the fortran version, not the c one.
</span><br>
<span class="quotelev2">&gt;&gt; Did you confgure with --enable--debug ?
</span><br>
<span class="quotelev2">&gt;&gt; The program sends to a rank *not* in the communicator, so this behavior could make some sense on an optimized build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;??????:
</span><br>
<span class="quotelev2">&gt;&gt; Ick - I'm getting a segfault when trying to run that test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): Starting MPI_Errhandler_fatal test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): This test will abort after printing the results message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): If it does not, then a f.a.i.l.u.r.e will be noted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7f4485ecb130]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7f4480f74ca6]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] [ 2] [bend001:07714] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7ff457885130]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7ff44e8dbca6]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] [ 2] [bend001:07715] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7ffa97ff6130]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7ffa8eeeeca6]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] [ 2] MPITEST_results: MPI_Errhandler_fatal all tests PASSED (3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with the head of the 1.8 branch. Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 26, 2014, at 8:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....yeah, I know we saw this and resolved it in the trunk, but it looks like the fix indeed failed to come over to 1.8. I'll take a gander (pretty sure I remember how I fixed it) - thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 26, 2014, at 12:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i noted several hangs in mtt with the v1.8 branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a simple way to reproduce it is to use the MPI_Errhandler_fatal_f test
</span><br>
<span class="quotelev2">&gt; &gt;from the intel_tests suite,
</span><br>
<span class="quotelev2">&gt;&gt; invoke mpirun on one node and run the taks on an other node :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0$ mpirun -np 3 -host node1 --mca btl tcp,self ./MPI_Errhandler_fatal_f
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* since this is a race condition, you might need to run this in a loop
</span><br>
<span class="quotelev2">&gt;&gt; in order to hit the bug */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the attached tarball contains a patch (add debug + temporary hack) and
</span><br>
<span class="quotelev2">&gt;&gt; some log files obtained with
</span><br>
<span class="quotelev2">&gt;&gt; --mca errmgr_base_verbose 100 --mca odls_base_verbose 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; without the hack, i can reproduce the bug with -np 3 (log.ko.txt) , with
</span><br>
<span class="quotelev2">&gt;&gt; the hack, i can still reproduce the hang (though it might
</span><br>
<span class="quotelev2">&gt;&gt; be a different one) with -np 16 (log.ko.2.txt)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i remember some similar hangs were fixed on the trunk/master a few
</span><br>
<span class="quotelev2">&gt;&gt; monthes ago.
</span><br>
<span class="quotelev2">&gt;&gt; i tried to backport some commits but it did not help :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please have a look at this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; &lt;abort_hang.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16357.php">http://www.open-mpi.org/community/lists/devel/2014/11/16357.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16364.php">http://www.open-mpi.org/community/lists/devel/2014/11/16364.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16366.php">http://www.open-mpi.org/community/lists/devel/2014/11/16366.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16367.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>In reply to:</strong> <a href="16366.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16369.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
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
