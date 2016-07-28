<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 23:10:51 2007" -->
<!-- isoreceived="20070922031051" -->
<!-- sent="Fri, 21 Sep 2007 23:10:42 -0400" -->
<!-- isosent="20070922031042" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Malloc segfaulting?" -->
<!-- id="200709212310.42541.tprins_at_cs.indiana.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F511EFB5-F505-456F-9BE9-836965D7212E_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 23:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2359.php">David Erukhimovich: "[OMPI devel] Problem with adding new component"</a>
<li><strong>Previous message:</strong> <a href="2357.php">Jeff Squyres: "Re: [OMPI devel] 2nd cut of MTT web page"</a>
<li><strong>In reply to:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But I am compiling Open MPI with --without-memory-manager, so it should work?
<br>
<p>Anyways, I ran the tests and valgrind is reporting 2 different (potentially 
<br>
related) problems:
<br>
<p>1.
<br>
==12680== Invalid read of size 4
<br>
==12680==    at 0x709DE03: ompi_cb_fifo_write_to_head 
<br>
(ompi_circular_buffer_fifo.h:271)
<br>
==12680==    by 0x709DA77: ompi_fifo_write_to_head (ompi_fifo.h:324)
<br>
==12680==    by 0x709D964: mca_btl_sm_component_progress 
<br>
(btl_sm_component.c:398)
<br>
==12680==    by 0x705BF6B: mca_bml_r2_progress (bml_r2.c:110)
<br>
==12680==    by 0x44F905B: opal_progress (opal_progress.c:187)
<br>
==12680==    by 0x704F0E5: opal_condition_wait (condition.h:98)
<br>
==12680==    by 0x704EFD4: mca_pml_ob1_recv (pml_ob1_irecv.c:124)
<br>
==12680==    by 0x7202A62: ompi_coll_tuned_scatter_intra_binomial 
<br>
(coll_tuned_scatter.c:166)
<br>
==12680==    by 0x71F2C08: ompi_coll_tuned_scatter_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:746)
<br>
==12680==    by 0x4442494: PMPI_Scatter (pscatter.c:125)
<br>
==12680==    by 0x8048F6F: main (scatter_in_place.c:73)
<br>
<p>2.
<br>
==28775== Jump to the invalid address stated on the next line
<br>
==28775==    at 0x2F305F35: ???
<br>
==28775==    by 0x704AF6B: mca_bml_r2_progress (bml_r2.c:110)
<br>
==28775==    by 0x44F905B: opal_progress (opal_progress.c:187)
<br>
==28775==    by 0x440BF6B: opal_condition_wait (condition.h:98)
<br>
==28775==    by 0x440BDF7: ompi_request_wait (req_wait.c:46)
<br>
==28775==    by 0x71EF396: 
<br>
ompi_coll_tuned_reduce_scatter_intra_basic_recursivehalving
<br>
(coll_tuned_reduce_scatter.c:319)
<br>
==28775==    by 0x71E1540: ompi_coll_tuned_reduce_scatter_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:471)
<br>
==28775==    by 0x7202806: ompi_osc_pt2pt_module_fence (osc_pt2pt_sync.c:84)
<br>
==28775==    by 0x44501B5: PMPI_Win_fence (pwin_fence.c:57)
<br>
==28775==    by 0x80493D6: test_acc3_1 (test_acc3.c:156)
<br>
==28775==    by 0x8048FD0: test_acc3 (test_acc3.c:26)
<br>
==28775==    by 0x8049609: main (test_acc3.c:206)
<br>
==28775==  Address 0x2F305F35 is not stack'd, malloc'd or (recently) free'd
<br>
<p>I don't know what to make of these. Here is the link to the full results:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=386">http://www.open-mpi.org/mtt/index.php?do_redir=386</a>
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Friday 21 September 2007 10:40:21 am George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Valgrind will not help ... It can help with double free or things
</span><br>
<span class="quotelev1">&gt; like this, but not with over-running memory that belong to your
</span><br>
<span class="quotelev1">&gt; application. However, in Open MPI we have something that might help
</span><br>
<span class="quotelev1">&gt; you. The option --enable-mem-debug add a unused space at the end of
</span><br>
<span class="quotelev1">&gt; each memory allocation and make sure we don't write anything there. I
</span><br>
<span class="quotelev1">&gt; think this is the simplest way to pinpoint this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2007, at 10:07 AM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien and Brian.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the suggestions. I reran the runs with --without-memory-
</span><br>
<span class="quotelev2">&gt; &gt; manager and
</span><br>
<span class="quotelev2">&gt; &gt; got (on 2 of 5000 runs):
</span><br>
<span class="quotelev2">&gt; &gt; *** glibc detected *** corrupted double-linked list: 0xf704dff8 ***
</span><br>
<span class="quotelev2">&gt; &gt; on one and
</span><br>
<span class="quotelev2">&gt; &gt; *** glibc detected *** malloc(): memory corruption: 0xeda00c70 ***
</span><br>
<span class="quotelev2">&gt; &gt; on the other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So it looks like somewhere we are over-running our allocated space.
</span><br>
<span class="quotelev2">&gt; &gt; So now I
</span><br>
<span class="quotelev2">&gt; &gt; am attempting to redo the run with valgrind.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday 20 September 2007 09:59:14 pm Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 20, 2007, at 7:02 AM, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In our nightly runs with the trunk I have started seeing cases
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; where we
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; appear to be segfaulting within/below malloc. Below is a typical
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; output.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that this appears to only happen on the trunk, when we use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openib,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and are in 32 bit mode. It seems to happen randomly at a very low
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; frequency (59 out of about 60,000 32 bit openib runs).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This could be a problem with our machine, and has showed up since I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; started testing 32bit ofed 10 days ago.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anyways, just curious if anyone had any ideas.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As someone else said, this usually points to a duplicate free or the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like in malloc.  You might want to try compiling with --without-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; memory-manager, as the ptmalloc2 in glibc frequently is more verbose
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about where errors occurred than is the one in Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2359.php">David Erukhimovich: "[OMPI devel] Problem with adding new component"</a>
<li><strong>Previous message:</strong> <a href="2357.php">Jeff Squyres: "Re: [OMPI devel] 2nd cut of MTT web page"</a>
<li><strong>In reply to:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
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
