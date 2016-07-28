<?
$subject_val = "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 05:51:36 2010" -->
<!-- isoreceived="20100524095136" -->
<!-- sent="Mon, 24 May 2010 18:51:30 +0900" -->
<!-- isosent="20100524095130" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="AANLkTin66MeILCpMH0S0mFRtXgjy4l3hvGbc4jEyftJW_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI Checkpoint/Restart is failed" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Checkpoint/Restart is failed<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 05:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I had the same problem like Jitsumoto, i.e. OpenMPI 1.4.2 failed to restart
<br>
and the patch which Fernando gave didn't work.
<br>
I also tried 1.5 nightly snapshots but it seemed not working well.
<br>
For some purpose, I don't want to use --enable-ft-thread in configure but
<br>
the same error occurred even --enable-ft-thread is used.
<br>
Here is my configure for OMPI 1.5a1r23135:
<br>
<p><span class="quotelev1">&gt;./configure \
</span><br>
<span class="quotelev1">&gt;--with-ft=cr \
</span><br>
<span class="quotelev1">&gt;--enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;--with-blcr=/home/nguyen/opt/blcr
</span><br>
--with-blcr-libdir=/home/nguyen/opt/blcr/lib \
<br>
<span class="quotelev1">&gt;--prefix=/home/nguyen/opt/openmpi_1.5 --enable-mpirun-prefix-by-default \
</span><br>
<p>and errors:
<br>
<p><span class="quotelev1">&gt;$ mpirun -am ft-enable-cr -machinefile ./host ./a.out
</span><br>
<span class="quotelev1">&gt;0
</span><br>
<span class="quotelev1">&gt;0
</span><br>
<span class="quotelev1">&gt;1
</span><br>
<span class="quotelev1">&gt;1
</span><br>
<span class="quotelev1">&gt;2
</span><br>
<span class="quotelev1">&gt;2
</span><br>
<span class="quotelev1">&gt;3
</span><br>
<span class="quotelev1">&gt;3
</span><br>
<span class="quotelev1">&gt;----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpirun has exited due to process rank 1 with PID 6582 on
</span><br>
<span class="quotelev1">&gt;node rc014 exiting improperly. There are two reasons this could occur:
</span><br>
<p><span class="quotelev1">&gt;1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt;the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt;for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt;then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<p><span class="quotelev1">&gt;2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt;By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt;exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<p><span class="quotelev1">&gt;This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;-----------------------------------------------------------------------
</span><br>
<p>And here is the checkpoint command:
<br>
<p><span class="quotelev1">&gt;$ ompi-checkpoint -s -v --term 10982
</span><br>
<span class="quotelev1">&gt;[rc013.local:11001] [  0.00 /   0.14]                 Requested - ...
</span><br>
<span class="quotelev1">&gt;[rc013.local:11001] [  0.00 /   0.14]                   Pending - ...
</span><br>
<span class="quotelev1">&gt;[rc013.local:11001] [  0.01 /   0.15]                   Running - ...
</span><br>
<span class="quotelev1">&gt;[rc013.local:11001] [  7.79 /   7.94]                  Finished -
</span><br>
<span class="quotelev1">&gt;ompi_global_snapshot_10982.ckpt
</span><br>
<span class="quotelev1">&gt;Snapshot Ref.:   0 ompi_global_snapshot_10982.ckpt
</span><br>
<p>I also took a look inside the checkpoint files and found that the snapshot
<br>
was
<br>
taken: ~/tmp/ckpt/ompi_global_snapshot_10982.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.6582
<br>
<p>But restarting failed as follows:
<br>
<span class="quotelev1">&gt;$ ompi-restart ompi_global_snapshot_10982.ckpt
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpirun noticed that process rank 1 with PID 11346 on node rc013.local
</span><br>
exited &gt;on signal 11 (Segmentation fault).
<br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<p>Is there any idea about this? Thank you!
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p><p>On Mon, May 24, 2010 at 4:08 PM, Hideyuki Jitsumoto &lt;
<br>
jitumoto_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Fernando Lemos &lt;fernandotcl_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, Apr 15, 2010 at 2:18 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Checkpoint/Restart is failed
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 14, 2010 at 5:25 AM, Hideyuki Jitsumoto
</span><br>
<span class="quotelev1">&gt; &lt;hjitsumoto_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Fernando,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your reply.
</span><br>
<span class="quotelev2">&gt; &gt; I tried to patch the file you mentioned, but the output did not change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't test the patch, tbh. I'm using 1.5 nightly snapshots, and it
</span><br>
<span class="quotelev1">&gt; works great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Are you using a shared file system? You need to use a shared file
</span><br>
<span class="quotelev2">&gt; &gt; system for checkpointing with 1.4.1:
</span><br>
<span class="quotelev2">&gt; &gt; What is the shared file system ? do you mean NFS, Lustre and so on ?
</span><br>
<span class="quotelev2">&gt; &gt; (I'm sorry about my ignorance...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something like NFS, yea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I use only one node for application, do I need such a
</span><br>
<span class="quotelev1">&gt; shared-file-system ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, for a single node, checkpointing with 1.4.1 should work (it works
</span><br>
<span class="quotelev1">&gt; for me, at least). If you're using a single node, then your problem is
</span><br>
<span class="quotelev1">&gt; probably not related to the bug report I posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sincerely Yours,
</span><br>
<span class="quotelev1">&gt; Hideyuki Jitsumoto (jitumoto_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Tokyo Institute of Technology
</span><br>
<span class="quotelev1">&gt; Global Scientific Information and Computing center (Matsuoka Lab.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13138.php">Jeff Squyres: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13136.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
