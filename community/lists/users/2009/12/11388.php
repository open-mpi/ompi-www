<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 19:37:56 2009" -->
<!-- isoreceived="20091203003756" -->
<!-- sent="Wed, 2 Dec 2009 17:37:32 -0700" -->
<!-- isosent="20091203003732" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912021637n79e57dacv767c07f0e02a3df7_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B183007F-0F6D-46E6-8CBE-592C2EA522F3_at_open-mpi.org" -->
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
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 19:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11387.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11392.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11392.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
<p>On Wed, Dec 2, 2009 at 17:04, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, that's the one all right! Definitely missing from 1.3.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks - I'll build a patch for the next bug-fix release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2009, at 4:37 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 2, 2009 at 5:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Indeed - that is very helpful! Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looks like we aren't cleaning up high enough - missing the directory
</span><br>
<span class="quotelev1">&gt; level.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I seem to recall seeing that error go by and that someone fixed it on
</span><br>
<span class="quotelev1">&gt; our
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel trunk, so this is likely a repair that didn't get moved over to
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; release branch as it should have done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll look into it and report back.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You are probably referring to
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21498">https://svn.open-mpi.org/trac/ompi/changeset/21498</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There was an issue about orte_session_dir_finalize() not
</span><br>
<span class="quotelev2">&gt; &gt; cleaning up the session directories properly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that helps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Abhishek
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks again
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 2, 2009, at 2:45 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Dec 2, 2009 at 14:23, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hmm....if you are willing to keep trying, could you perhaps let it run
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a brief time, ctrl-z it, and then do an ls on a directory from a
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that has already terminated? The pids will be in order, so just look
</span><br>
<span class="quotelev1">&gt; for an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; early number (not mpirun or the parent, of course).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It would help if you could give us the contents of a directory from a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; child process that has terminated - would tell us what subsystem is
</span><br>
<span class="quotelev1">&gt; failing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to properly cleanup.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ok, so I Ctrl-Z the master. In
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0 I now have only one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I can't find that PID though. mpirun has PID 4230, orted does not exist,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; master is 4231, and slave is 4275. When I &quot;fg&quot; master and Ctrl-Z it
</span><br>
<span class="quotelev1">&gt; again,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slave has a different PID as expected. I Ctrl-Z'ed in iteration 68,
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are 70 sequentially numbered directories starting at 0. Every directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; contains another directory called &quot;0&quot;. There is nothing in any of those
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directories. I see for instance:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857 $ ls -lh 70
</span><br>
<span class="quotelev3">&gt; &gt;&gt; total 4.0K
</span><br>
<span class="quotelev3">&gt; &gt;&gt; drwx------ 2 nbock users 4.0K Dec  2 14:41 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nbock_at_mujo /tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/857 $ ls
</span><br>
<span class="quotelev1">&gt; -lh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 70/0/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; total 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I hope this information helps. Did I understand your question correctly?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nick
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11388/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11387.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11386.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11392.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11392.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
