<?
$subject_val = "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 14 13:18:42 2010" -->
<!-- isoreceived="20100414171842" -->
<!-- sent="Wed, 14 Apr 2010 14:18:36 -0300" -->
<!-- isosent="20100414171836" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="p2r9108753b1004141018o6182b8dfv926127475736a33f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="v2n3005ebdd1004140125va50d41c2t44b01e0f7146074d_at_mail.gmail.com" -->
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
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-14 13:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12633.php">max marconi: "[OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12631.php">Ralph Castain: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>In reply to:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 14, 2010 at 5:25 AM, Hideyuki Jitsumoto
<br>
&lt;hjitsumoto_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Fernando,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.
</span><br>
<span class="quotelev1">&gt; I tried to patch the file you mentioned, but the output did not change.
</span><br>
<p>I didn't test the patch, tbh. I'm using 1.5 nightly snapshots, and it
<br>
works great.
<br>
<p><span class="quotelev2">&gt;&gt;Are you using a shared file system? You need to use a shared file
</span><br>
<span class="quotelev1">&gt; system for checkpointing with 1.4.1:
</span><br>
<span class="quotelev1">&gt; What is the shared file system ? do you mean NFS, Lustre and so on ?
</span><br>
<span class="quotelev1">&gt; (I'm sorry about my ignorance...)
</span><br>
<p>Something like NFS, yea.
<br>
<p><span class="quotelev1">&gt; If I use only one node for application, do I need such a shared-file-system ?
</span><br>
<p>No, for a single node, checkpointing with 1.4.1 should work (it works
<br>
for me, at least). If you're using a single node, then your problem is
<br>
probably not related to the bug report I posted.
<br>
<p><p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12633.php">max marconi: "[OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12631.php">Ralph Castain: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>In reply to:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
