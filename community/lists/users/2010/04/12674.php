<?
$subject_val = "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 18:24:44 2010" -->
<!-- isoreceived="20100417222444" -->
<!-- sent="Sun, 18 Apr 2010 00:24:39 +0200" -->
<!-- isosent="20100417222439" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept" -->
<!-- id="t2p464cc18f1004171524k136712cbkf9b2baddd008c000_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D880367-C34D-4ED6-ADB7-CE1E6AACF154_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 18:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12675.php">Theodore Van Rooy: "[OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<li><strong>Previous message:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I know. The problem is that I need to use some special way for
<br>
running my processes provided by the environment in which I'm working
<br>
and unfortunately I can't use mpirun.
<br>
<p>2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Guess I don't understand why you can't use mpirun - all it does is start things, provide a means to forward io, etc. It mainly sits there quietly without using any cpu unless required to support the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like it would solve your problem. Otherwise, I know of no way to get all these processes into comm_world.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2010, at 2:27 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to dynamically create a group of processes communicating via
</span><br>
<span class="quotelev2">&gt;&gt; MPI. Those processes need to be run without mpirun and create
</span><br>
<span class="quotelev2">&gt;&gt; intracommunicator after the startup. Any ideas how to do this
</span><br>
<span class="quotelev2">&gt;&gt; efficiently?
</span><br>
<span class="quotelev2">&gt;&gt; I came up with a solution in which the processes are connecting one by
</span><br>
<span class="quotelev2">&gt;&gt; one using MPI_Comm_connect, but unfortunately all the processes that
</span><br>
<span class="quotelev2">&gt;&gt; are already in the group need to call MPI_Comm_accept. This means that
</span><br>
<span class="quotelev2">&gt;&gt; when the n-th process wants to connect I need to collect all the n-1
</span><br>
<span class="quotelev2">&gt;&gt; processes on the MPI_Comm_accept call. After I run about 40 processes
</span><br>
<span class="quotelev2">&gt;&gt; every subsequent call takes more and more time, which I'd like to
</span><br>
<span class="quotelev2">&gt;&gt; avoid.
</span><br>
<span class="quotelev2">&gt;&gt; Another problem in this solution is that when I try to connect 66-th
</span><br>
<span class="quotelev2">&gt;&gt; process the root of the existing group segfaults on MPI_Comm_accept.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe it's my bug, but it's weird as everything works fine for at most
</span><br>
<span class="quotelev2">&gt;&gt; 65 processes. Is there any limitation I don't know about?
</span><br>
<span class="quotelev2">&gt;&gt; My last question is about MPI_COMM_WORLD. When I run my processes
</span><br>
<span class="quotelev2">&gt;&gt; without mpirun their MPI_COMM_WORLD is the same as MPI_COMM_SELF. Is
</span><br>
<span class="quotelev2">&gt;&gt; there any way to change MPI_COMM_WORLD and set it to the
</span><br>
<span class="quotelev2">&gt;&gt; intracommunicator that I've created?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12675.php">Theodore Van Rooy: "[OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<li><strong>Previous message:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
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
