<?
$subject_val = "Re: [OMPI devel] 1.10.3rc status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 23:26:01 2016" -->
<!-- isoreceived="20160527032601" -->
<!-- sent="Thu, 26 May 2016 20:25:57 -0700" -->
<!-- isosent="20160527032557" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc status" -->
<!-- id="908FC6C5-93EE-4788-A4E2-47466D91B255_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="83aa4f4c-880a-31f3-628a-67d903c918c7_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 23:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19043.php">Nathan Hjelm: "Re: [OMPI devel] One-sided failures on master"</a>
<li><strong>In reply to:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for analyzing this, Gilles - I guess this is a question for Edgar or someone who cares about MPI-IO. Should we worry about this for 1.10?
<br>
<p>I&#146;m inclined to not delay 1.10.3 over this one, but am open to contrary opinions
<br>
<p><p><span class="quotelev1">&gt; On May 26, 2016, at 7:22 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my environment, the root cause of MPI_File_open failing seems to be NFS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_File_open(MPI_COMM_WORLD, &quot;temp&quot;, MPI_MODE_RDWR | MPI_MODE_CREATE,
</span><br>
<span class="quotelev1">&gt;                   MPI_INFO_NULL, &amp;lFile);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if the file does not previously exists, rank 0 creates the file, MPI_Bcast(), and then every rank open the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that works fine with all the tasks running on the same node than rank 0, but other nodes fail when opening the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i ran some more tests and observe a quite consistent behavior:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on n1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nc -l 6666 &amp;&amp; touch temp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on n0:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;&quot; | nc n1 6666 ; while true; do date ; ls -l temp &amp;&amp; break ; sleep 1; done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on n0, the temp file is immediatly found, no problem so far.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now, if i run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on n1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nc -l 6666 &amp;&amp; touch temp2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on n0:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ls -l temp2; echo &quot;&quot; | nc n1 6666 ; while true; do date ; ls -l temp2 &amp;&amp; break ; sleep 1; done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it takes a few iterations before n0 find temp2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the only difference is that n0 looked up this file before it was created, and it somehow cache this information
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (e.g. the file does not exist), and it takes a while before the cache gets updated (e.g. the file now exists)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i cannot remember whether this is what should be expected from NFS nor if that can be changed with appropriate tuning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/27/2016 10:32 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the cxx_win_attr issue is dealt at <a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iirc, only big endian and/or sizeof(Fortran integer) &gt; sizeof(int) is impacted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the second error seems a bit weirdest at a time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; once in a while, MPI_File_open fails, and when it fails, it always fails silently.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in this case (MPI_File_open failed), if --mca mpi_param_check true, then next calls to MPI-IO will also fail silently.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if --mca mpi_param_check false (or Open MPI was configure'd with --without-mpi-param-check),
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then something will go wrong in MPI_File_close
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; that raises several questions ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - why does MPI-IO default behavior is to fail silently ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (point to point or collective will abort by default)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - why does MPI_File_open fails once in a while ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (Open MPI bug ? ROMIO bug ? intermittent failure caused by the NFS filesystem ?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - is there a bug in the test ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for example, the program could abort with error code 77 (skip) if MPI_File_open fails
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
<span class="quotelev2">&gt;&gt; On 5/26/2016 11:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m seeing three errors in MTT today - of these, I only consider the first two to be of significant concern:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; onesided/cxx_win_attr : <a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a> &lt;<a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unit--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype/idx_null : <a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a> &lt;<a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_int_free+0x82)[0x2aaaab7ef70a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_free+0x96)[0x2aaaab7ee047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(+0xd0ed8)[0x2aaaab7eced8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(ompi_file_close+0x101)[0x2aaaaab2963c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(PMPI_File_close+0x18)[0x2aaaaab83216]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 6] datatype/idx_null[0x400cb2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c2f21ed1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] [ 8] datatype/idx_null[0x400a89]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06729] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06732] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06732] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06732] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06732] Failing at address: 0x2ab2aba3cea0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06732] [ 0] /lib64/libpthread.so.0[0x3c2f60f710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpi031:06732] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamic/loop_spawn : <a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a> &lt;<a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [p10a601:159913] too many retries sending message to 0x000b:0x00427ad6, giving up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child job 8 terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19037.php">http://www.open-mpi.org/community/lists/devel/2016/05/19037.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/19037.php">http://www.open-mpi.org/community/lists/devel/2016/05/19037.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19040.php">http://www.open-mpi.org/community/lists/devel/2016/05/19040.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/19040.php">http://www.open-mpi.org/community/lists/devel/2016/05/19040.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19041.php">http://www.open-mpi.org/community/lists/devel/2016/05/19041.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19043.php">Nathan Hjelm: "Re: [OMPI devel] One-sided failures on master"</a>
<li><strong>In reply to:</strong> <a href="19041.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
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
