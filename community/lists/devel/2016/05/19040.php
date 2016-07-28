<?
$subject_val = "Re: [OMPI devel] 1.10.3rc status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 21:32:51 2016" -->
<!-- isoreceived="20160527013251" -->
<!-- sent="Fri, 27 May 2016 10:32:50 +0900" -->
<!-- isosent="20160527013250" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc status" -->
<!-- id="7b99cd04-7826-17ad-6279-a460bd097433_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6C767A1D-CFAA-4DD1-8732-58532C7AC524_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.3rc status<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 21:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>In reply to:</strong> <a href="19037.php">Ralph Castain: "[OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p><p>the cxx_win_attr issue is dealt at 
<br>
<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>
<br>
<p>iirc, only big endian and/or sizeof(Fortran integer) &gt; sizeof(int) is 
<br>
impacted.
<br>
<p><p>the second error seems a bit weirdest at a time.
<br>
<p>once in a while, MPI_File_open fails, and when it fails, it always fails 
<br>
silently.
<br>
<p>in this case (MPI_File_open failed), if --mca mpi_param_check true, then 
<br>
next calls to MPI-IO will also fail silently.
<br>
<p>if --mca mpi_param_check false (or Open MPI was configure'd with 
<br>
--without-mpi-param-check),
<br>
<p>then something will go wrong in MPI_File_close
<br>
<p><p><p>that raises several questions ...
<br>
<p>- why does MPI-IO default behavior is to fail silently ?
<br>
<p>(point to point or collective will abort by default)
<br>
<p>- why does MPI_File_open fails once in a while ?
<br>
<p>(Open MPI bug ? ROMIO bug ? intermittent failure caused by the NFS 
<br>
filesystem ?)
<br>
<p>- is there a bug in the test ?
<br>
<p>for example, the program could abort with error code 77 (skip) if 
<br>
MPI_File_open fails
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/26/2016 11:14 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I&#146;m seeing three errors in MTT today - of these, I only consider the 
</span><br>
<span class="quotelev1">&gt; first two to be of significant concern:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; onesided/cxx_win_attr :<a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a>
</span><br>
<span class="quotelev1">&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev1">&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev1">&gt; unit--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; datatype/idx_null :<a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a>
</span><br>
<span class="quotelev1">&gt; home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_int_free+0x82)[0x2aaaab7ef70a]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_free+0x96)[0x2aaaab7ee047]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(+0xd0ed8)[0x2aaaab7eced8]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(ompi_file_close+0x101)[0x2aaaaab2963c]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(PMPI_File_close+0x18)[0x2aaaaab83216]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 6] datatype/idx_null[0x400cb2]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c2f21ed1d]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] [ 8] datatype/idx_null[0x400a89]
</span><br>
<span class="quotelev1">&gt; [mpi031:06729] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [mpi031:06732] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mpi031:06732] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mpi031:06732] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mpi031:06732] Failing at address: 0x2ab2aba3cea0
</span><br>
<span class="quotelev1">&gt; [mpi031:06732] [ 0] /lib64/libpthread.so.0[0x3c2f60f710]
</span><br>
<span class="quotelev1">&gt; [mpi031:06732] [ 1]
</span><br>
<span class="quotelev1">&gt; dynamic/loop_spawn :<a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a>
</span><br>
<span class="quotelev1">&gt; [p10a601:159913] too many retries sending message to 0x000b:0x00427ad6, giving up
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Child job 8 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19037.php">http://www.open-mpi.org/community/lists/devel/2016/05/19037.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>In reply to:</strong> <a href="19037.php">Ralph Castain: "[OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
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
