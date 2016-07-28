<?
$subject_val = "[OMPI devel] r31765 causes crash in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 04:19:56 2014" -->
<!-- isoreceived="20140515081956" -->
<!-- sent="Thu, 15 May 2014 17:20:13 +0900" -->
<!-- isosent="20140515082013" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] r31765 causes crash in mpirun" -->
<!-- id="537478BD.6030502_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] r31765 causes crash in mpirun<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 04:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>Reply:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>since r31765 (opal/event: release the opal event context when closing
<br>
the event base)
<br>
mpirun crashes at the end of the job.
<br>
<p>for example :
<br>
<p>$ mpirun --mca btl tcp,self -n 4 `pwd`/src/MPI_Allreduce_user_c
<br>
MPITEST info  (0): Starting MPI_Allreduce_user() test
<br>
MPITEST_results: MPI_Allreduce_user() all tests PASSED (7076)
<br>
[soleil:10959] *** Process received signal ***
<br>
[soleil:10959] Signal: Segmentation fault (11)
<br>
[soleil:10959] Signal code: Address not mapped (1)
<br>
[soleil:10959] Failing at address: 0x7fd969e75a98
<br>
[soleil:10959] [ 0] /lib64/libpthread.so.0[0x3c9da0f500]
<br>
[soleil:10959] [ 1]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(+0x7bae5)[0x7fd96a55dae5]
<br>
[soleil:10959] [ 2]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(+0x7ac97)[0x7fd96a55cc97]
<br>
[soleil:10959] [ 3]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(opal_libevent2021_event_del+0x88)[0x7fd96a55ca15]
<br>
[soleil:10959] [ 4]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(opal_libevent2021_event_base_free+0x132)[0x7fd96a558831]
<br>
[soleil:10959] [ 5]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(+0x74126)[0x7fd96a556126]
<br>
[soleil:10959] [ 6]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(mca_base_framework_close+0xdd)[0x7fd96a54026f]
<br>
[soleil:10959] [ 7]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-pal.so.0(opal_finalize+0x7e)[0x7fd96a50d36e]
<br>
[soleil:10959] [ 8]
<br>
/csc/home1/gouaillardet/local/ompi-trunk/lib/libopen-rte.so.0(orte_finalize+0xd3)[0x7fd96a7ead2f]
<br>
[soleil:10959] [ 9] mpirun(orterun+0x1298)[0x404f0e]
<br>
[soleil:10959] [10] mpirun(main+0x20)[0x4038a4]
<br>
[soleil:10959] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c9d21ecdd]
<br>
[soleil:10959] [12] mpirun[0x4037c9]
<br>
[soleil:10959] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14807.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14805.php">Bert Wesarg: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
<li><strong>Reply:</strong> <a href="14809.php">Ralph Castain: "Re: [OMPI devel] r31765 causes crash in mpirun"</a>
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
