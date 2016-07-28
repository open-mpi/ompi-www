<?
$subject_val = "Re: [OMPI devel] 1.10.3rc status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 22:22:56 2016" -->
<!-- isoreceived="20160527022256" -->
<!-- sent="Fri, 27 May 2016 11:22:56 +0900" -->
<!-- isosent="20160527022256" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.3rc status" -->
<!-- id="83aa4f4c-880a-31f3-628a-67d903c918c7_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7b99cd04-7826-17ad-6279-a460bd097433_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-05-26 22:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19042.php">Ralph Castain: "[OMPI devel] One-sided failures on master"</a>
<li><strong>Previous message:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>In reply to:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my environment, the root cause of MPI_File_open failing seems to be NFS.
<br>
<p>MPI_File_open(MPI_COMM_WORLD, &quot;temp&quot;, MPI_MODE_RDWR | MPI_MODE_CREATE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;lFile);
<br>
<p><p>if the file does not previously exists, rank 0 creates the file, 
<br>
MPI_Bcast(), and then every rank open the file.
<br>
<p>that works fine with all the tasks running on the same node than rank 0, 
<br>
but other nodes fail when opening the file.
<br>
<p><p>i ran some more tests and observe a quite consistent behavior:
<br>
<p>on n1:
<br>
<p>nc -l 6666 &amp;&amp; touch temp
<br>
<p>on n0:
<br>
<p>echo &quot;&quot; | nc n1 6666 ; while true; do date ; ls -l temp &amp;&amp; break ; sleep 
<br>
1; done
<br>
<p><p>on n0, the temp file is immediatly found, no problem so far.
<br>
<p><p>now, if i run
<br>
<p>on n1:
<br>
<p>nc -l 6666 &amp;&amp; touch temp2
<br>
<p>on n0:
<br>
<p>ls -l temp2; echo &quot;&quot; | nc n1 6666 ; while true; do date ; ls -l temp2 &amp;&amp; 
<br>
break ; sleep 1; done
<br>
<p><p>it takes a few iterations before n0 find temp2.
<br>
<p>the only difference is that n0 looked up this file before it was 
<br>
created, and it somehow cache this information
<br>
<p>(e.g. the file does not exist), and it takes a while before the cache 
<br>
gets updated (e.g. the file now exists)
<br>
<p><p>i cannot remember whether this is what should be expected from NFS nor 
<br>
if that can be changed with appropriate tuning.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/27/2016 10:32 AM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the cxx_win_attr issue is dealt at 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iirc, only big endian and/or sizeof(Fortran integer) &gt; sizeof(int) is 
</span><br>
<span class="quotelev1">&gt; impacted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the second error seems a bit weirdest at a time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; once in a while, MPI_File_open fails, and when it fails, it always 
</span><br>
<span class="quotelev1">&gt; fails silently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in this case (MPI_File_open failed), if --mca mpi_param_check true, 
</span><br>
<span class="quotelev1">&gt; then next calls to MPI-IO will also fail silently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if --mca mpi_param_check false (or Open MPI was configure'd with 
</span><br>
<span class="quotelev1">&gt; --without-mpi-param-check),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then something will go wrong in MPI_File_close
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that raises several questions ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - why does MPI-IO default behavior is to fail silently ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (point to point or collective will abort by default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - why does MPI_File_open fails once in a while ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Open MPI bug ? ROMIO bug ? intermittent failure caused by the NFS 
</span><br>
<span class="quotelev1">&gt; filesystem ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - is there a bug in the test ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, the program could abort with error code 77 (skip) if 
</span><br>
<span class="quotelev1">&gt; MPI_File_open fails
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
<span class="quotelev1">&gt; On 5/26/2016 11:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m seeing three errors in MTT today - of these, I only consider the 
</span><br>
<span class="quotelev2">&gt;&gt; first two to be of significant concern:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; onesided/cxx_win_attr :<a href="https://mtt.open-mpi.org/index.php?do_redir=2326">https://mtt.open-mpi.org/index.php?do_redir=2326</a>
</span><br>
<span class="quotelev2">&gt;&gt; [**ERROR**]: MPI_COMM_WORLD rank 0, file cxx_win_attr.cc:50:
</span><br>
<span class="quotelev2">&gt;&gt; Win::Get_attr: Got wrong value for disp
</span><br>
<span class="quotelev2">&gt;&gt; unit--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; datatype/idx_null :<a href="https://mtt.open-mpi.org/index.php?do_redir=2327">https://mtt.open-mpi.org/index.php?do_redir=2327</a>
</span><br>
<span class="quotelev2">&gt;&gt; home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_int_free+0x82)[0x2aaaab7ef70a]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(opal_memory_ptmalloc2_free+0x96)[0x2aaaab7ee047]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libopen-pal.so.13(+0xd0ed8)[0x2aaaab7eced8]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(ompi_file_close+0x101)[0x2aaaaab2963c]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/mpiteam/scratches/community/2016-05-25cron/56jr/installs/i0Lt/install/lib/libmpi.so.12(PMPI_File_close+0x18)[0x2aaaaab83216]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 6] datatype/idx_null[0x400cb2]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3c2f21ed1d]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] [ 8] datatype/idx_null[0x400a89]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06729] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06732] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06732] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06732] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06732] Failing at address: 0x2ab2aba3cea0
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06732] [ 0] /lib64/libpthread.so.0[0x3c2f60f710]
</span><br>
<span class="quotelev2">&gt;&gt; [mpi031:06732] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; dynamic/loop_spawn :<a href="https://mtt.open-mpi.org/index.php?do_redir=2328">https://mtt.open-mpi.org/index.php?do_redir=2328</a>
</span><br>
<span class="quotelev2">&gt;&gt; [p10a601:159913] too many retries sending message to 0x000b:0x00427ad6, giving up
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Child job 8 terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mp
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2016/05/19037.php">http://www.open-mpi.org/community/lists/devel/2016/05/19037.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19040.php">http://www.open-mpi.org/community/lists/devel/2016/05/19040.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19042.php">Ralph Castain: "[OMPI devel] One-sided failures on master"</a>
<li><strong>Previous message:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>In reply to:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Reply:</strong> <a href="19044.php">Ralph Castain: "Re: [OMPI devel] 1.10.3rc status"</a>
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
