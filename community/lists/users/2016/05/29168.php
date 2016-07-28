<?
$subject_val = "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 00:30:44 2016" -->
<!-- isoreceived="20160511043044" -->
<!-- sent="Wed, 11 May 2016 13:30:44 +0900" -->
<!-- isosent="20160511043044" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error." -->
<!-- id="e6fceb91-3587-7cc2-f71d-86842cedf48e_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BLU181-W72D27D954E7EFA5B4DE969AD720_at_phx.gbl" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 00:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>Where did you get the openmpi package from ?
<br>
<p>fc20 ships openmpi 1.7.3 ...
<br>
<p><p>does it work as expected if you do not use mpirun
<br>
<p>(e.g. ./hello_c)
<br>
<p><p>if yes, then you can try
<br>
<p>ldd hello_c
<br>
<p>which mpirun
<br>
<p>ldd mpirun
<br>
<p>mpirun -np 1 ldd hello_c
<br>
<p><p>and confirm both mpirun and hello_c use the same mpi libraries
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/11/2016 12:06 PM, lzfneu wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your respond, but the problems is not solved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My system is fedora20 64-bit with openmpi-1.8.4 package installed in 
</span><br>
<span class="quotelev1">&gt; my laptop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun command just run in my single laptop which disconnect to 
</span><br>
<span class="quotelev1">&gt; the internet and  I also performe the following command to find mpirun 
</span><br>
<span class="quotelev1">&gt; path and add it to .bashcr file. However, the results with no effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [user_at_localhost ~]$ which mpirun
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea and thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Question about mpirun 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_recv_handler error.
</span><br>
<span class="quotelev1">&gt; *From:* Ralph Castain (/rhc_at_[hidden]/)
</span><br>
<span class="quotelev1">&gt; *Date:* 2016-05-10 14:43:39
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * *Next message:* Orion Poplawski: &quot;Re: [OMPI users] mpirun command
</span><br>
<span class="quotelev1">&gt;     won't run unless the firewalld daemon is disabled&quot;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="https://www.open-mpi.org/community/lists/users/2016/05/29160.php">https://www.open-mpi.org/community/lists/users/2016/05/29160.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;   * *Previous message:* Gus Correa: &quot;Re: [OMPI users] No core dump in
</span><br>
<span class="quotelev1">&gt;     some cases&quot;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="https://www.open-mpi.org/community/lists/users/2016/05/29158.php">https://www.open-mpi.org/community/lists/users/2016/05/29158.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;   * *In reply to:* lzfneu: &quot;[OMPI users] Question about mpirun
</span><br>
<span class="quotelev1">&gt;     mca_oob_tcp_recv_handler error.&quot;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="https://www.open-mpi.org/community/lists/users/2016/05/29156.php">https://www.open-mpi.org/community/lists/users/2016/05/29156.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually indicates that the remote process is using a different OMPI
</span><br>
<span class="quotelev1">&gt; version. You might check to ensure that the paths on the remote nodes are
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; From: lzfneu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; CC: lzfneu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Question about mpirun mca_oob_tcp_recv_handler error.
</span><br>
<span class="quotelev1">&gt; Date: Tue, 10 May 2016 15:46:45 +0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone,
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
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero 
</span><br>
<span class="quotelev1">&gt; status, thus causing
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
<span class="quotelev1">&gt; The problem was not occured before, but in recently when i execute 
</span><br>
<span class="quotelev1">&gt; every progams by using the mpirun command, the error message is 
</span><br>
<span class="quotelev1">&gt; reproducible. I don't know why.
</span><br>
<span class="quotelev1">&gt; Could you please help me and thanks in advance !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhefu
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29167.php">http://www.open-mpi.org/community/lists/users/2016/05/29167.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29168/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
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
