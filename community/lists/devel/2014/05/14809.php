<?
$subject_val = "Re: [OMPI devel] r31765 causes crash in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 12:51:13 2014" -->
<!-- isoreceived="20140515165113" -->
<!-- sent="Thu, 15 May 2014 09:49:26 -0700" -->
<!-- isosent="20140515164926" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r31765 causes crash in mpirun" -->
<!-- id="F01FDB3D-E766-44BD-B487-D9652EC6F029_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="537478BD.6030502_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r31765 causes crash in mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 12:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14808.php">Nathan Hjelm: "[OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14806.php">Gilles Gouaillardet: "[OMPI devel] r31765 causes crash in mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed this by reverting r31765 in r31775. Annotated ticket with explanation.
<br>
<p><p>On May 15, 2014, at 1:20 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; since r31765 (opal/event: release the opal event context when closing
</span><br>
<span class="quotelev1">&gt; the event base)
</span><br>
<span class="quotelev1">&gt; mpirun crashes at the end of the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl tcp,self -n 4 `pwd`/src/MPI_Allreduce_user_c
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Allreduce_user() test
</span><br>
<span class="quotelev1">&gt; MPITEST_results: MPI_Allreduce_user() all tests PASSED (7076)
</span><br>
<span class="quotelev1">&gt; [soleil:10959] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [soleil:10959] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [soleil:10959] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [soleil:10959] Failing at address: 0x7fd969e75a98
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 0] /lib64/libpthread.so.0[0x3c9da0f500]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 1]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(+0x7bae5)[0x7fd96a55dae5]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 2]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(+0x7ac97)[0x7fd96a55cc97]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 3]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(opal_libevent2021_event_del+0x88)[0x7fd96a55ca15]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 4]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(opal_libevent2021_event_base_free+0x132)[0x7fd96a558831]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 5]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(+0x74126)[0x7fd96a556126]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 6]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(mca_base_framework_close+0xdd)[0x7fd96a54026f]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 7]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(opal_finalize+0x7e)[0x7fd96a50d36e]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 8]
</span><br>
<span class="quotelev1">&gt; /csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-rte.so.0(orte_finalize+0xd3)[0x7fd96a7ead2f]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [ 9] mpirun(orterun+0x1298)[0x404f0e]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [10] mpirun(main+0x20)[0x4038a4]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c9d21ecdd]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] [12] mpirun[0x4037c9]
</span><br>
<span class="quotelev1">&gt; [soleil:10959] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14806.php">http://www.open-mpi.org/community/lists/devel/2014/05/14806.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14808.php">Nathan Hjelm: "[OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14806.php">Gilles Gouaillardet: "[OMPI devel] r31765 causes crash in mpirun"</a>
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
