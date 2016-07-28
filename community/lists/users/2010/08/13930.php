<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  8 23:33:10 2010" -->
<!-- isoreceived="20100809033310" -->
<!-- sent="Sun, 8 Aug 2010 21:32:57 -0600" -->
<!-- isosent="20100809033257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="D26CACE1-8C11-4FCB-8BA5-8EDE312FA9CC_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="276641.98799.qm_at_web50807.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-08 23:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Randolph
<br>
<p>Unless your code is doing a connect/accept between the copies, there is no way they can cross-communicate. As you note, mpirun instances are completely isolated from each other - no process in one instance can possibly receive information from a process in another instance because it lacks all knowledge of it -unless- they wireup into a greater communicator by performing connect/accept calls between them.
<br>
<p>I suspect you are inadvertently doing just that - perhaps by doing connect/accept in a tree-like manner, not realizing that the end result is one giant communicator that now links together all the N servers.
<br>
<p>Otherwise, there is no possible way an MPI_Bcast in one mpirun can collide or otherwise communicate with an MPI_Bcast between processes started by another mpirun.
<br>
<p><p><p>On Aug 8, 2010, at 7:13 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Thanks,  although &#147;An intercommunicator cannot be used for collective communication.&#148; i.e ,  bcast calls., I can see how the MPI_Group_xx calls can be used to produce a useful group and then communicator;  - thanks again but this is really the side issue to my main question about MPI_Bcast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I seem to have duplicate concurrent processes interfering with each other.  This would appear to be a breach of the MPI safety dictum, ie MPI_COMM_WORD is supposed to only include the processes started by a single mpirun command and isolate these processes from other similar groups of processes safely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, it would appear to be a bug.  If so this has significant implications for environments such as mine, where it may often occur that the same program is run by different users simultaneously.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is really this issue that it concerning me, I can rewrite the code but if it can crash when 2 copies run at the same time, I have a much bigger problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My suspicion is that a within the MPI_Bcast handshaking, a syncronising broadcast call may be colliding across the environments.  My only evidence is an otherwise working program waits on broadcast reception forever when two or more copies are run at [exactly] the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone else seen similar behavior in concurrently running programs that perform lots of broadcasts perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randolph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Sun, 8/8/10, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Sunday, 8 August, 2010, 12:34 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular, intercommunicators
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/7/10, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You should consider reading about communicators in MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien Bouteiller, Ph.D.
</span><br>
<span class="quotelev2">&gt; &gt; Innovative Computing Laboratory, The University of Tennessee.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233; de mon iPad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le Aug 7, 2010 &#224; 1:05, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; a
</span><br>
<span class="quotelev2">&gt; &gt; &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I seem to be having a problem with MPI_Bcast.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My massive I/O intensive data movement program must broadcast from n to n
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes. My problem starts because I require 2 processes per node, a sender
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and a receiver and I have implemented these using MPI processes rather
</span><br>
<span class="quotelev3">&gt; &gt;&gt; than tackle the complexities of threads on MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Consequently, broadcast and calls like alltoall are not completely
</span><br>
<span class="quotelev3">&gt; &gt;&gt; helpful.  The dataset is huge and each node must end up with a complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copy built by the large number of contributing broadcasts from the sending
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes.  Network efficiency and run time are paramount.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As I don&#146;t want to needlessly broadcast all this data to the sending nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and I have a perfectly good MPI program that distributes globally from a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; single node (1 to N), I took the unusual decision to start N copies of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this program by spawning the MPI system from the PVM system in an effort
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to get my N to N concurrent transfers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems that the broadcasts running on concurrent MPI environments
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collide and cause all but the first process to hang waiting for their
</span><br>
<span class="quotelev3">&gt; &gt;&gt; broadcasts.  This theory seems to be confirmed by introducing a sleep of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; n-1 seconds before the first MPI_Bcast  call on each node, which results
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in the code working perfectly.  (total run time 55 seconds, 3 nodes,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; standard TCP stack)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rather than multicasts.  Can someone confirm this?  Is this a bug?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any multicast or N to N broadcast where sender processes can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; avoid participating when they don&#146;t need to?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Randolph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sent from my mobile device
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13929.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13931.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
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
