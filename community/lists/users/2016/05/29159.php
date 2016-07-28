<?
$subject_val = "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 14:43:41 2016" -->
<!-- isoreceived="20160510184341" -->
<!-- sent="Tue, 10 May 2016 11:43:39 -0700" -->
<!-- isosent="20160510184339" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error." -->
<!-- id="CAMD57ofmSSYbTJ81eErA6KQUuz4Jb=FTP5e9Btgqo1kcKpPhmg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BLU181-W8955DB432A5A3D2624E0CDAD710_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 14:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29158.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29156.php">lzfneu: "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually indicates that the remote process is using a different OMPI
<br>
version. You might check to ensure that the paths on the remote nodes are
<br>
correct.
<br>
<p><p>On Tue, May 10, 2016 at 8:46 AM, lzfneu &lt;lzfneu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem to consult you, when I cd to the /examples folder
</span><br>
<span class="quotelev1">&gt; contained in the openmpi-1.8.4 package, and test the hello_c example
</span><br>
<span class="quotelev1">&gt; program with mpirun command errors occured:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the command and the error messages in details:
</span><br>
<span class="quotelev1">&gt; [user_at_localhost examples]$ mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06965] [[52154,0],0] mca_oob_tcp_recv_handler:
</span><br>
<span class="quotelev1">&gt; invalid message type: 14
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06965] [[52154,0],0] mca_oob_tcp_recv_handler:
</span><br>
<span class="quotelev1">&gt; invalid message type: 14
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[52154,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    65
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem was not occured before, but in recently when i execute every
</span><br>
<span class="quotelev1">&gt; progams by using the mpirun command, the error message is reproducible. I
</span><br>
<span class="quotelev1">&gt; don't know why.
</span><br>
<span class="quotelev1">&gt; Could you please help me and thanks in advance !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhefu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29156.php">http://www.open-mpi.org/community/lists/users/2016/05/29156.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29158.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29156.php">lzfneu: "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
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
