<?
$subject_val = "[OMPI devel] 1.10.3rc status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 10:14:34 2016" -->
<!-- isoreceived="20160526141434" -->
<!-- sent="Thu, 26 May 2016 07:14:30 -0700" -->
<!-- isosent="20160526141430" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.3rc status" -->
<!-- id="6C767A1D-CFAA-4DD1-8732-58532C7AC524_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.3rc status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 10:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19038.php">dpchoudh .: "[OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>Previous message:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m seeing three errors in MTT today - of these, I only consider the first two to be of significant concern:
<br>
<p>onesided/cxx_win_attr : <a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a> &lt;<a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a>&gt;
<br>
[**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
<br>
Win::Get_attr: Got wrong value for disp
<br>
unit--------------------------------------------------------------------------
<br>
<p><p>datatype/idx_null : <a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a> &lt;<a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a>&gt;
<br>
home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_int_free+0x82)[0x2aaaab7ef70a]
<br>
[mpi031:06729] [ 2]
<br>
/home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_free+0x96)[0x2aaaab7ee047]
<br>
[mpi031:06729] [ 3]
<br>
/home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(+0xd0ed8)[0x2aaaab7eced8]
<br>
[mpi031:06729] [ 4]
<br>
/home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(ompi_file_close+0x101)[0x2aaaaab2963c]
<br>
[mpi031:06729] [ 5]
<br>
/home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(PMPI_File_close+0x18)[0x2aaaaab83216]
<br>
[mpi031:06729] [ 6] datatype/idx_null[0x400cb2]
<br>
[mpi031:06729] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c2f21ed1d]
<br>
[mpi031:06729] [ 8] datatype/idx_null[0x400a89]
<br>
[mpi031:06729] *** End of error message ***
<br>
[mpi031:06732] *** Process received signal ***
<br>
[mpi031:06732] Signal: Segmentation fault (11)
<br>
[mpi031:06732] Signal code: Address not mapped (1)
<br>
[mpi031:06732] Failing at address: 0x2ab2aba3cea0
<br>
[mpi031:06732] [ 0] /lib64/libpthread.so.0[0x3c2f60f710]
<br>
[mpi031:06732] [ 1]
<br>
<p>dynamic/loop_spawn : <a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a> &lt;<a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a>&gt;
<br>
[p10a601:159913] too many retries sending message to 0x000b:0x00427ad6, giving up
<br>
-------------------------------------------------------
<br>
Child job 8 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
---------------------------------------------------------------------------------------------------------------------------------
<br>
mp
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19038.php">dpchoudh .: "[OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>Previous message:</strong> <a href="19036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
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
