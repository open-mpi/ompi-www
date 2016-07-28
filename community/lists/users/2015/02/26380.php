<?
$subject_val = "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 01:13:17 2015" -->
<!-- isoreceived="20150224061317" -->
<!-- sent="Tue, 24 Feb 2015 01:13:13 -0500" -->
<!-- isosent="20150224061313" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions regarding MPI intercommunicators &amp;amp; collectives" -->
<!-- id="44AC2263-8AC2-4B3B-881B-9C0F3EFBCABD_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54EB454C.2050705_at_bsc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 01:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26381.php">twurgl_at_[hidden]: "[OMPI users] Why are the static libs different if compiled with or without dynamic switch?"</a>
<li><strong>Previous message:</strong> <a href="26379.php">Jed Brown: "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5"</a>
<li><strong>In reply to:</strong> <a href="26370.php">Harald Servat: "[OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Feb 23, 2015, at 10:20 , Harald Servat &lt;harald.servat_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  we have several questions regarding calls to collectives using intercommunicators. In man for MPI_Bcast, there is a notice for the inter-communicator case that reads the text below our questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  If an I is an intercomunicator for communicattors
</span><br>
<p>Not for communicator but for groups (slight technical difference)
<br>
<p><span class="quotelev1">&gt; C1={p1,p2,p3} and C2={p4,p5,p6}, and a process p3 (from C1) wants to broadcast a message to C2. Is it mandatory that p1 and p2 have to call to MPI_Bcast? Or can the user skip adding these calls?
</span><br>
<p>The MPI_Bcast is collective over all the processes involved in the communicator. As you pointer out in the text you cited, this is indeed required by the MPI standard (MPI standard 3.0 page 148 starting from line 43). To be clear this strictly means that all processes (no exceptions) should call the MPI_Bcast.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  BTW, what is the behavior for the broadcast for p1 and p2 in this case, simply return?
</span><br>
<p>It is implementation dependent. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Will MPI fail if MPI_PROC_NULL is not given for the parameter root in p1 and p2?
</span><br>
<p>In the best case it will fail. However, as figuring out that multiple roots exists on the sam group requires communications, I would guess that most of the MPI implementations will simply have some random unexpected behaviors.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** When Communicator is an Inter-communicator
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the communicator is an inter-communicator, the root process in the first group broadcasts data to all the processes in the second group. The first group defines the root process. That process uses MPI_ROOT as the value of its root argument. The remaining processes use MPI_PROC_NULL as the value of their root argument. All processes in the second group use the rank of that root process in the first group as the value of their root argument. The receive buffer arguments of the processes in the second group must be consistent with the send buffer argument of the root process in the first group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26370.php">http://www.open-mpi.org/community/lists/users/2015/02/26370.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26381.php">twurgl_at_[hidden]: "[OMPI users] Why are the static libs different if compiled with or without dynamic switch?"</a>
<li><strong>Previous message:</strong> <a href="26379.php">Jed Brown: "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5"</a>
<li><strong>In reply to:</strong> <a href="26370.php">Harald Servat: "[OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
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
