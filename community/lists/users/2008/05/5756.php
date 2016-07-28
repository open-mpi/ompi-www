<?
$subject_val = "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 15:42:04 2008" -->
<!-- isoreceived="20080529194204" -->
<!-- sent="Thu, 29 May 2008 14:41:56 -0500" -->
<!-- isosent="20080529194156" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="20080529194156.GH7968_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dd4eed670805291224j4783198emc4f6baacb5ee2ab7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 15:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5755.php">twurgl_at_[hidden]: "[OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<li><strong>In reply to:</strong> <a href="5753.php">Davi Vercillo C. Garcia: "[OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 29, 2008 at 04:24:18PM -0300, Davi Vercillo C. Garcia wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run my program in my environment and some problems are
</span><br>
<span class="quotelev1">&gt; happening. My environment is based on PVFS2 over NFS (PVFS is mounted
</span><br>
<span class="quotelev1">&gt; over NFS partition), OpenMPI and Ubuntu. My program uses MPI-IO and
</span><br>
<span class="quotelev1">&gt; BZ2 development libraries. When I tried to run, a message appears:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; File locking failed in ADIOI_Set_lock. If the file system is NFS, you
</span><br>
<span class="quotelev1">&gt; need to use NFS version 3, ensure that the lockd daemon is running on
</span><br>
<span class="quotelev1">&gt; all the machines, and mount the directory with the 'noac' option (no
</span><br>
<span class="quotelev1">&gt; attribute caching).
</span><br>
<span class="quotelev1">&gt; [campogrande05.dcc.ufrj.br:05005] MPI_ABORT invoked on rank 0 in
</span><br>
<span class="quotelev1">&gt; communicator MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 1 with PID 5008 on node campogrande04
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<p>Hi.
<br>
<p>NFS has some pretty sloppy consistency semantics.  If you want
<br>
parallel I/O to NFS you have to turn off some caches (the 'noac'
<br>
option in your error message) and work pretty hard to flush
<br>
client-side caches (which ROMIO does for you using fcntl locks).  If
<br>
you do this, note that your performance will be really bad, but you'll
<br>
get correct results.
<br>
<p>Your nfs-exported PVFS volumes will give you pretty decent serial i/o
<br>
performance since NFS caching only helps in that case.
<br>
<p>I'd suggest, though, that you try using straight PVFS for your MPI-IO
<br>
application, as long as the parallell clients have access to all of
<br>
the pvfs servers (if tools like pvfs2-ping and pvfs2-ls work, then you
<br>
do).  You'll get better performance for a variety of reasons and can
<br>
continue to keep your NFS-exported PVFS volumes up at the same time. 
<br>
<p>Oh, I see you want to use ordered i/o in your application.  PVFS
<br>
doesn't support that mode.  However, since you know how much data each
<br>
process wants to write, a combination of MPI_Scan (to compute each
<br>
processes offset) and MPI_File_write_at_all (to carry out the
<br>
collective i/o) will give you the same result with likely better
<br>
performance (and has the nice side effect of working with pvfs).
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5755.php">twurgl_at_[hidden]: "[OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<li><strong>In reply to:</strong> <a href="5753.php">Davi Vercillo C. Garcia: "[OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
