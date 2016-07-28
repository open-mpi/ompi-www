<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 20:49:19 2014" -->
<!-- isoreceived="20141127014919" -->
<!-- sent="Wed, 26 Nov 2014 17:49:15 -0800" -->
<!-- isosent="20141127014915" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang" -->
<!-- id="D697C7EC-E03F-4D80-BE85-7E3B08A31634_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 20:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16368.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16366.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>In reply to:</strong> <a href="16366.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16368.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 26, 2014, at 5:06 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will double check this(afk right now)
</span><br>
<span class="quotelev1">&gt; Are you running on a rhel6 like distro with gcc ?
</span><br>
<p>Yeah, I&#226;&#128;&#153;m running CentOS7 and gcc 4.8.2
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Iirc, crash vs mpi error is ruled by --with-param-check or something like this&#226;&#128;&#166;
</span><br>
<p>Sounds right - just surprised that you wouldn&#226;&#128;&#153;t get it but I would. Makes debugging this problem a tad difficult, so I may need a different error to debug the problem.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev1">&gt; I tried it with both the fortran and c versions - got the same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was indeed with a debug build. I wouldn&#226;&#128;&#153;t expect a segfault even with an optimized build, though - I would expect an MPI error, yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 26, 2014, at 4:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
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
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev2">&gt;&gt; Ick - I&#226;&#128;&#153;m getting a segfault when trying to run that test:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): Starting MPI_Errhandler_fatal test
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): This test will abort after printing the results message
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): If it does not, then a f.a.i.l.u.r.e will be noted
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] ompi_comm_peer_lookup: invalid peer index (3)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7f4485ecb130]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7f4480f74ca6]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07713] [ 2] [bend001:07714] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7ff457885130]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7ff44e8dbca6]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07714] [ 2] [bend001:07715] [ 0] /usr/lib64/libpthread.so.0(+0xf130)[0x7ffa97ff6130]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] [ 1] /home/common/openmpi/build/ompi-release/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5d)[0x7ffa8eeeeca6]
</span><br>
<span class="quotelev2">&gt;&gt; [bend001:07715] [ 2] MPITEST_results: MPI_Errhandler_fatal all tests PASSED (3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is with the head of the 1.8 branch. Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 26, 2014, at 8:46 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm&#226;&#128;&#166;.yeah, I know we saw this and resolved it in the trunk, but it looks like the fix indeed failed to come over to 1.8. I&#226;&#128;&#153;ll take a gander (pretty sure I remember how I fixed it) - thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 26, 2014, at 12:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i noted several hangs in mtt with the v1.8 branch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a simple way to reproduce it is to use the MPI_Errhandler_fatal_f test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the intel_tests suite,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; invoke mpirun on one node and run the taks on an other node :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0$ mpirun -np 3 -host node1 --mca btl tcp,self ./MPI_Errhandler_fatal_f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* since this is a race condition, you might need to run this in a loop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in order to hit the bug */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the attached tarball contains a patch (add debug + temporary hack) and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some log files obtained with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca errmgr_base_verbose 100 --mca odls_base_verbose 100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without the hack, i can reproduce the bug with -np 3 (log.ko.txt) , with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hack, i can still reproduce the hang (though it might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be a different one) with -np 16 (log.ko.2.txt)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i remember some similar hangs were fixed on the trunk/master a few
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; monthes ago.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i tried to backport some commits but it did not help :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you please have a look at this ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;abort_hang.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16357.php">http://www.open-mpi.org/community/lists/devel/2014/11/16357.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16357.php">http://www.open-mpi.org/community/lists/devel/2014/11/16357.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16364.php">http://www.open-mpi.org/community/lists/devel/2014/11/16364.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16366.php">http://www.open-mpi.org/community/lists/devel/2014/11/16366.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16367/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16368.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16366.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>In reply to:</strong> <a href="16366.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16368.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
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
