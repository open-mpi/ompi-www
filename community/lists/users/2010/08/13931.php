<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 01:02:16 2010" -->
<!-- isoreceived="20100809050216" -->
<!-- sent="Sun, 8 Aug 2010 22:02:11 -0700 (PDT)" -->
<!-- isosent="20100809050211" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="841510.7560.qm_at_web50805.mail.re2.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D26CACE1-8C11-4FCB-8BA5-8EDE312FA9CC_at_open-mpi.org" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 01:02:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<li><strong>Previous message:</strong> <a href="13930.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13930.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13941.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13941.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only MPI calls I am using are these (grep-ed from my code):
<br>
<p>MPI_Abort(MPI_COMM_WORLD, 1);
<br>
MPI_Barrier(MPI_COMM_WORLD);
<br>
MPI_Bcast(&amp;bufarray[0].hdr, sizeof(BD_CHDR), MPI_CHAR, 0, MPI_COMM_WORLD);
<br>
MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs); 
<br>
MPI_Finalize();
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Irecv(
<br>
MPI_Isend(
<br>
MPI_Recv(buff, BUFSIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD, &amp;stat);
<br>
MPI_Send(buff, BUFSIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD);
<br>
MPI_Test(&amp;request, &amp;complete, &amp;status);
<br>
MPI_Wait(&amp;request, &amp;status);&#194;&#160; 
<br>
<p>The big wait happens on receipt of a bcast call that would otherwise work.
<br>
Its a bit mysterious really...
<br>
<p>I presume that bcast is implemented with multicast calls but does it use any actual broadcast calls at all?&#194;&#160; 
<br>
I know I'm scraping the edges here looking for something but I just cant get my head around why it should fail where it has.
<br>
<p>--- On Mon, 9/8/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Monday, 9 August, 2010, 1:32 PM
<br>
<p>Hi Randolph
<br>
Unless your code is doing a connect/accept between the copies, there is no way they can cross-communicate. As you note, mpirun instances are completely isolated from each other - no process in one instance can possibly receive information from a process in another instance because it lacks all knowledge of it -unless- they wireup into a greater communicator by performing connect/accept calls between them.
<br>
I suspect you are inadvertently doing just that - perhaps by doing connect/accept in a tree-like manner, not realizing that the end result is one giant communicator that now links together all the N servers.
<br>
Otherwise, there is no possible way an MPI_Bcast in one mpirun can collide or otherwise communicate with an MPI_Bcast between processes started by another mpirun.
<br>
<p><p>On Aug 8, 2010, at 7:13 PM, Randolph Pullen wrote:
<br>
Thanks,&#194;&#160; although &#226;&#128;&#156;An intercommunicator cannot be used for collective communication.&#226;&#128;&#157; i.e ,&#194;&#160; bcast calls., I can see how the MPI_Group_xx calls can be used to produce a useful group and then communicator;&#194;&#160; - thanks again but this is really the side issue to my main question about MPI_Bcast.
<br>
<p>I seem to have duplicate concurrent processes interfering with each other.&#194;&#160; This would appear to be a breach of the MPI safety dictum, ie MPI_COMM_WORD is supposed to only include the processes started by a single mpirun command and isolate these processes from other similar groups of processes safely.
<br>
<p>So, it would appear to be a bug.&#194;&#160; If so this has significant implications for environments such as mine, where it may often occur that the same program is run by different users simultaneously.&#194;&#160; 
<br>
<p>It is really this issue
 that it concerning me, I can rewrite the code but if it can crash when 2 copies run at the same time, I have a much bigger problem.
<br>
<p>My suspicion is that a within the MPI_Bcast handshaking, a syncronising broadcast call may be colliding across the environments.&#194;&#160; My only evidence is an otherwise working program waits on broadcast reception forever when two or more copies are run at [exactly] the same time.
<br>
<p>Has anyone else seen similar behavior in concurrently running programs that perform lots of broadcasts perhaps?
<br>
<p>Randolph
<br>
<p><p>--- On Sun, 8/8/10, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p>From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Sunday, 8 August, 2010, 12:34 PM
<br>
<p>In particular, intercommunicators
<br>
<p>On 8/7/10, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You should consider reading about communicators in MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aurelien Bouteiller, Ph.D.
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory, The University of Tennessee.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169; de mon iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le Aug 7, 2010 &#195;&#160; 1:05, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; a
</span><br>
<span class="quotelev1">&gt; &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I seem to be having a problem with MPI_Bcast.
</span><br>
<span class="quotelev2">&gt;&gt; My massive I/O intensive data movement program must broadcast from n to n
</span><br>
<span class="quotelev2">&gt;&gt; nodes. My problem starts because I require 2 processes per node, a sender
</span><br>
<span class="quotelev2">&gt;&gt; and a receiver and I have implemented
 these using MPI processes rather
</span><br>
<span class="quotelev2">&gt;&gt; than tackle the complexities of threads on MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Consequently, broadcast and calls like alltoall are not completely
</span><br>
<span class="quotelev2">&gt;&gt; helpful.&#194;&#160; The dataset is huge and each node must end up with a complete
</span><br>
<span class="quotelev2">&gt;&gt; copy built by the large number of contributing broadcasts from the sending
</span><br>
<span class="quotelev2">&gt;&gt; nodes.&#194;&#160; Network efficiency and run time are paramount.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I don&#226;&#128;&#153;t want to needlessly broadcast all this data to the sending nodes
</span><br>
<span class="quotelev2">&gt;&gt; and I have a perfectly good MPI program that distributes globally from a
</span><br>
<span class="quotelev2">&gt;&gt; single node (1 to N), I took the unusual decision to start N copies of
</span><br>
<span class="quotelev2">&gt;&gt; this program by spawning the MPI system from the PVM system in an effort
</span><br>
<span class="quotelev2">&gt;&gt; to get my N to N concurrent transfers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the broadcasts running on concurrent MPI environments
</span><br>
<span class="quotelev2">&gt;&gt; collide and cause all but
 the first process to hang waiting for their
</span><br>
<span class="quotelev2">&gt;&gt; broadcasts.&#194;&#160; This theory seems to be confirmed by introducing a sleep of
</span><br>
<span class="quotelev2">&gt;&gt; n-1 seconds before the first MPI_Bcast&#194;&#160; call on each node, which results
</span><br>
<span class="quotelev2">&gt;&gt; in the code working perfectly.&#194;&#160; (total run time 55 seconds, 3 nodes,
</span><br>
<span class="quotelev2">&gt;&gt; standard TCP stack)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts
</span><br>
<span class="quotelev2">&gt;&gt; rather than multicasts.&#194;&#160; Can someone confirm this?&#194;&#160; Is this a bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any multicast or N to N broadcast where sender processes can
</span><br>
<span class="quotelev2">&gt;&gt; avoid participating when they don&#226;&#128;&#153;t need to?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Randolph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-----Inline Attachment Follows-----
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13932.php">Shiqing Fan: "Re: [OMPI users] Fortran code generation error on 1.5 rc5"</a>
<li><strong>Previous message:</strong> <a href="13930.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13930.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13941.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13941.php">Ralph Castain: "Re: [OMPI users] MPI_Bcast issue"</a>
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
