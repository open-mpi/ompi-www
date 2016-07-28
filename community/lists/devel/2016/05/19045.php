<?
$subject_val = "Re: [OMPI devel] 1.10.3rc status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 00:01:35 2016" -->
<!-- isoreceived="20160527040135" -->
<!-- sent="Fri, 27 May 2016 13:01:32 +0900" -->
<!-- isosent="20160527040132" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc status" -->
<!-- id="67394e93-cc95-e492-e3db-648d12a4821c_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="908FC6C5-93EE-4788-A4E2-47466D91B255_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-05-27 00:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19046.php">Ralph Castain: "[OMPI devel] Hangs on master"</a>
<li><strong>Previous message:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>In reply to:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p><p>well, my analysis was a bit too superficial ...
<br>
<p>ROMIO uses UFS instead of NFS, very likely caused by a recent change i 
<br>
made :-(
<br>
<p>please expect a PR soon
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/27/2016 12:25 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks for analyzing this, Gilles - I guess this is a question for 
</span><br>
<span class="quotelev1">&gt; Edgar or someone who cares about MPI-IO. Should we worry about this 
</span><br>
<span class="quotelev1">&gt; for 1.10?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m inclined to not delay 1.10.3 over this one, but am open to 
</span><br>
<span class="quotelev1">&gt; contrary opinions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 26, 2016, at 7:22 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my environment, the root cause of MPI_File_open failing seems to 
</span><br>
<span class="quotelev2">&gt;&gt; be NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_open(MPI_COMM_WORLD, &quot;temp&quot;, MPI_MODE_RDWR | MPI_MODE_CREATE,
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_INFO_NULL, &amp;lFile);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if the file does not previously exists, rank 0 creates the file, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bcast(), and then every rank open the file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that works fine with all the tasks running on the same node than rank 
</span><br>
<span class="quotelev2">&gt;&gt; 0, but other nodes fail when opening the file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i ran some more tests and observe a quite consistent behavior:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on n1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nc -l 6666 &amp;&amp; touch temp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on n0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;&quot; | nc n1 6666 ; while true; do date ; ls -l temp &amp;&amp; break ; 
</span><br>
<span class="quotelev2">&gt;&gt; sleep 1; done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on n0, the temp file is immediatly found, no problem so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now, if i run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on n1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nc -l 6666 &amp;&amp; touch temp2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on n0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ls -l temp2; echo &quot;&quot; | nc n1 6666 ; while true; do date ; ls -l temp2 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;&amp; break ; sleep 1; done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it takes a few iterations before n0 find temp2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the only difference is that n0 looked up this file before it was 
</span><br>
<span class="quotelev2">&gt;&gt; created, and it somehow cache this information
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. the file does not exist), and it takes a while before the cache 
</span><br>
<span class="quotelev2">&gt;&gt; gets updated (e.g. the file now exists)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i cannot remember whether this is what should be expected from NFS 
</span><br>
<span class="quotelev2">&gt;&gt; nor if that can be changed with appropriate tuning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/27/2016 10:32 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cxx_win_attr issue is dealt at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iirc, only big endian and/or sizeof(Fortran integer) &gt; sizeof(int) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is impacted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the second error seems a bit weirdest at a time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; once in a while, MPI_File_open fails, and when it fails, it always 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails silently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this case (MPI_File_open failed), if --mca mpi_param_check true, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then next calls to MPI-IO will also fail silently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if --mca mpi_param_check false (or Open MPI was configure'd with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-mpi-param-check),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then something will go wrong in MPI_File_close
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that raises several questions ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - why does MPI-IO default behavior is to fail silently ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (point to point or collective will abort by default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - why does MPI_File_open fails once in a while ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Open MPI bug ? ROMIO bug ? intermittent failure caused by the NFS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filesystem ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - is there a bug in the test ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example, the program could abort with error code 77 (skip) if 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_open fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/26/2016 11:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;m seeing three errors in MTT today - of these, I only consider 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the first two to be of significant concern:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; onesided/cxx_win_attr :<a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unit--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatype/idx_null :<a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_int_free+0x82)[0x2aaaab7ef70a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_free+0x96)[0x2aaaab7ee047]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(+0xd0ed8)[0x2aaaab7eced8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(ompi_file_close+0x101)[0x2aaaaab2963c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(PMPI_File_close+0x18)[0x2aaaaab83216]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 6] datatype/idx_null[0x400cb2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c2f21ed1d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] [ 8] datatype/idx_null[0x400a89]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06729] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06732] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06732] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06732] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06732] Failing at address: 0x2ab2aba3cea0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06732] [ 0] /lib64/libpthread.so.0[0x3c2f60f710]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpi031:06732] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dynamic/loop_spawn :<a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [p10a601:159913] too many retries sending message to 0x000b:0x00427ad6, giving up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child job 8 terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2016/05/19037.php">http://www.open-mpi.org/community/lists/devel/2016/05/19037.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2016/05/19040.php">http://www.open-mpi.org/community/lists/devel/2016/05/19040.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19041.php">http://www.open-mpi.org/community/lists/devel/2016/05/19041.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19044.php">http://www.open-mpi.org/community/lists/devel/2016/05/19044.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19046.php">Ralph Castain: "[OMPI devel] Hangs on master"</a>
<li><strong>Previous message:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>In reply to:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
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
