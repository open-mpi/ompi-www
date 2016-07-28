<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 18:38:10 2009" -->
<!-- isoreceived="20091202233810" -->
<!-- sent="Wed, 2 Dec 2009 18:37:46 -0500" -->
<!-- isosent="20091202233746" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="abbyzcool_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="223eadbc0912021537l19f2af71w6d086ad5d19c710d_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2CB970C8-5E87-479F-B197-D8211B8E8EBE_at_open-mpi.org" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>abbyzcool_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 18:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11384.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11382.php">Nathan Glenn: "[OMPI users] Application Schema for LAM to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11381.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 2, 2009 at 5:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Indeed - that is very helpful! Thanks!
</span><br>
<span class="quotelev1">&gt; Looks like we aren't cleaning up high enough - missing the directory level.
</span><br>
<span class="quotelev1">&gt; I seem to recall seeing that error go by and that someone fixed it on our
</span><br>
<span class="quotelev1">&gt; devel trunk, so this is likely a repair that didn't get moved over to the
</span><br>
<span class="quotelev1">&gt; release branch as it should have done.
</span><br>
<span class="quotelev1">&gt; I'll look into it and report back.
</span><br>
<p>You are probably referring to
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/21498">https://svn.open-mpi.org/trac/ompi/changeset/21498</a>
<br>
<p>There was an issue about orte_session_dir_finalize() not
<br>
cleaning up the session directories properly.
<br>
<p>Hope that helps.
<br>
<p>Abhishek
<br>
<p><span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2009, at 2:45 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 2, 2009 at 14:23, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm....if you are willing to keep trying, could you perhaps let it run for
</span><br>
<span class="quotelev2">&gt;&gt; a brief time, ctrl-z it, and then do an ls on a directory from a process
</span><br>
<span class="quotelev2">&gt;&gt; that has already terminated? The pids will be in order, so just look for an
</span><br>
<span class="quotelev2">&gt;&gt; early number (not mpirun or the parent, of course).
</span><br>
<span class="quotelev2">&gt;&gt; It would help if you could give us the contents of a directory from a
</span><br>
<span class="quotelev2">&gt;&gt; child process that has terminated - would tell us what subsystem is failing
</span><br>
<span class="quotelev2">&gt;&gt; to properly cleanup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so I Ctrl-Z the master. In
</span><br>
<span class="quotelev1">&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0 I now have only one
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't find that PID though. mpirun has PID 4230, orted does not exist,
</span><br>
<span class="quotelev1">&gt; master is 4231, and slave is 4275. When I &quot;fg&quot; master and Ctrl-Z it again,
</span><br>
<span class="quotelev1">&gt; slave has a different PID as expected. I Ctrl-Z'ed in iteration 68, there
</span><br>
<span class="quotelev1">&gt; are 70 sequentially numbered directories starting at 0. Every directory
</span><br>
<span class="quotelev1">&gt; contains another directory called &quot;0&quot;. There is nothing in any of those
</span><br>
<span class="quotelev1">&gt; directories. I see for instance:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857 $ ls -lh 70
</span><br>
<span class="quotelev1">&gt; total 4.0K
</span><br>
<span class="quotelev1">&gt; drwx------ 2 nbock users 4.0K Dec&#194;&#160; 2 14:41 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nbock_at_mujo /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857 $ ls -lh
</span><br>
<span class="quotelev1">&gt; 70/0/
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11384.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11382.php">Nathan Glenn: "[OMPI users] Application Schema for LAM to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11381.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
