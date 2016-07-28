<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 17:00:50 2009" -->
<!-- isoreceived="20091202220050" -->
<!-- sent="Wed, 2 Dec 2009 15:00:42 -0700" -->
<!-- isosent="20091202220042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="2CB970C8-5E87-479F-B197-D8211B8E8EBE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd0912021345l2d80be0n7d02b0558f79c3e8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn lots of times<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 17:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11382.php">Nathan Glenn: "[OMPI users] Application Schema for LAM to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11380.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11379.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11383.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11383.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed - that is very helpful! Thanks!
<br>
<p>Looks like we aren't cleaning up high enough - missing the directory level. I seem to recall seeing that error go by and that someone fixed it on our devel trunk, so this is likely a repair that didn't get moved over to the release branch as it should have done.
<br>
<p>I'll look into it and report back.
<br>
<p>Thanks again
<br>
Ralph
<br>
<p>On Dec 2, 2009, at 2:45 PM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 2, 2009 at 14:23, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmm....if you are willing to keep trying, could you perhaps let it run for a brief time, ctrl-z it, and then do an ls on a directory from a process that has already terminated? The pids will be in order, so just look for an early number (not mpirun or the parent, of course).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would help if you could give us the contents of a directory from a child process that has terminated - would tell us what subsystem is failing to properly cleanup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, so I Ctrl-Z the master. In  /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0 I now have only one directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't find that PID though. mpirun has PID 4230, orted does not exist, master is 4231, and slave is 4275. When I &quot;fg&quot; master and Ctrl-Z it again, slave has a different PID as expected. I Ctrl-Z'ed in iteration 68, there are 70 sequentially numbered directories starting at 0. Every directory contains another directory called &quot;0&quot;. There is nothing in any of those directories. I see for instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857 $ ls -lh 70
</span><br>
<span class="quotelev1">&gt; total 4.0K
</span><br>
<span class="quotelev1">&gt; drwx------ 2 nbock users 4.0K Dec  2 14:41 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nbock_at_mujo /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857 $ ls -lh 70/0/
</span><br>
<span class="quotelev1">&gt; total 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this information helps. Did I understand your question correctly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11382.php">Nathan Glenn: "[OMPI users] Application Schema for LAM to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11380.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11379.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11383.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11383.php">Abhishek Kulkarni: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
