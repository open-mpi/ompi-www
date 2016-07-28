<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 22:09:25 2010" -->
<!-- isoreceived="20100811020925" -->
<!-- sent="Tue, 10 Aug 2010 19:09:19 -0700 (PDT)" -->
<!-- isosent="20100811020919" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="362208.37373.qm_at_web50807.mail.re2.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="75C67446-0B19-4618-B5A0-EA25F26FCDFF_at_cisco.com" -->
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
<strong>Date:</strong> 2010-08-10 22:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13962.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13970.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff thanks for the clarification,
<br>
What I am trying to do is run N concurrent copies of a 1 to N data movement program to affect an N to N solution.&#194;&#160; The actual mechanism I am using is to spawn N copies of mpirun from PVM across the cluster. So each 1 to N MPI application starts at the same time with a different node as root.
<br>
<p>Yes I know this is a bit odd&#226;&#128;&#166;&#194;&#160; It was an attempt to be lazy and not re-write the code (again) and this appears to be a potential log N solution.
<br>
<p>My thoughts are that the problem must be either:
<br>
<p>1)&#194;&#160;&#194;&#160;&#194;&#160; Some bug in my code that does not occur normally (this seems unlikely because it halts in Bcast and runs in the normal 1 to N manner)
<br>
2)&#194;&#160;&#194;&#160;&#194;&#160; Something in MPI is fouling the bcast call
<br>
3)&#194;&#160;&#194;&#160;&#194;&#160; Something in PVM is fouling the bcast call
<br>
<p>Obviously, this is not the PVM forum, but have I missed anything?
<br>
<p>I&#226;&#128;&#153;m not a network expert and I had assumed broadcasts must be implemented with&#194;&#160; multicasts to prevent broadcasts colliding between concurrent applications and thus conforming to the MPI safety/isolation dictum (this appears to be how PVM isolates broadcasts between applications).&#194;&#160; I can see now that a series of point to point send/receives should not be affected in this way.
<br>
<p>This is what I would describe as &#226;&#128;&#156;implementing Bcast with point to point transfers&#226;&#128;&#157;&#194;&#160; as opposed to &#226;&#128;&#156;implementing Bcast with broadcasts&#226;&#128;&#157;
<br>
<p>BTW: Implementing Bcast with Multicast or a combination of both multicasts and p2p transfers is another option and described by Hoefler et. al. in their paper &#226;&#128;&#156;A practically constant-time MPI Broadcast Algorithm for large-scale In&#239;&#172;&#129;niBand Clusters with Multicast&#226;&#128;&#157;.
<br>
<p>I guess I was eluding that if MPI used actual broadcast calls to transmit or syncronise, then a broadcast collision may be possible.&#194;&#160; I did not know that only p2p transfers where used in Bcast calls.
<br>
<p><span class="quotelev1">&gt;From here I need to decide to:
</span><br>
<p>1)&#194;&#160;&#194;&#160;&#194;&#160; Generate a minimal example but given that this will require PVM, it is unlikely to see much use.
<br>
<p>2)&#194;&#160;&#194;&#160;&#194;&#160; Write a N to N transfer system in MPI using inter-communicators, however this may not scale with only p2p transfers and is probably N Log N at best.
<br>
<p>3)&#194;&#160;&#194;&#160;&#194;&#160; Write the N to N transfer system in PVM, Open Fabric calls or something that supports broadcast/multicast calls.
<br>
<p>My application must transfer a large (potentially huge) amount of tuples from a table distributed across the cluster to a table replicated on each node.&#194;&#160; The similar (1 to N) system compresses tuples into 64k pages and sends these.&#194;&#160; The same method would be used and the page size could be varied for efficiency.
<br>
<p>What are your thoughts?&#194;&#160; Can OpenMPI do this in under N log N time?
<br>
<p>Regards,
<br>
Randolph
<br>
<p><p>--- On Wed, 11/8/10, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Wednesday, 11 August, 2010, 6:24 AM
<br>
<p>+1 on Eugene's comment that I don't fully understand what you are trying to do.&#194;&#160; Can you send a short example code?
<br>
<p>Some random points:
<br>
<p>- Edgar already chimed in about how MPI-2 allows the use of intercommunicators with bcast. Open MPI is MPI-2.1 complaint, so you can use intercommunicators with MPI_Bcast.
<br>
<p>- I'm not sure what you mean by &quot;implement broadcast with broadcast&quot; -- that seems like a recursive definition...?
<br>
<p>- Keep in mind that there are MPI standard-imposed limitations of how MPI_Bcast can function.&#194;&#160; What you *may* be running afoul of is MPI specifications and definitions -- not a bug in OMPI.&#194;&#160; But that's not entirely clear to me because I don't quite understand what you're trying to do.
<br>
<p>- For example, remember that MPI 2.x defines that you can only have one ongoing collective on a communicator at a time.&#194;&#160; So if you're starting multiple bcasts on the same communicator simultaneously (effectively by using different root values in different processes on the same communicator), this is Bad.&#194;&#160; Dick intoned that you probably aren't doing that, but again, I'm not entirely sure what you're doing.
<br>
<p>- Also, by the MPI spec, MPI_Bcast may or may not synchronize.&#194;&#160; In practice, if you're broadcasting a large message, most implementations will likely synchronize (where &quot;large&quot; is defined differently by each implementation).
<br>
<p>- Open MPI has many different algorithms to implement the MPI_Bcast functionality.&#194;&#160; Which to use is chosen on the fly behind the scenes at run time depending on lots of things, such as number of peers in the communicator, size of the message, etc.
<br>
<p>- All of Open MPI's network-based collectives use point-to-point communications underneath (shared memory may not, but that's not the issue here).&#194;&#160; One of the implementations is linear, meaning that the root sends the message to comm rank 1, then comm rank 2, ..etc.&#194;&#160; But this algorithm is only used when the message is small, the number of peers is small, etc.&#194;&#160; All the other algorithms are parallel in nature, meaning that after an iteration or two, multiple processes have the data and can start pipelining sends to other processes, etc.
<br>
<p>- We don't have a multicast-based broadcast for a variety of reasons.&#194;&#160; MPI_Bcast needs to be reliable.&#194;&#160; Multicast is not reliable.&#194;&#160; There have been many good algorithms published over the years to make unreliable multicast be reliable, but no one has implemented those in a robust, production-quality manner for Open MPI.&#194;&#160; Part of the reason for that is the non-uniform support of robust multicast implementations by network vendors, the lack of spanning multicast across multiple subnets, etc.&#194;&#160; In practice, the log(n) algorithms that Open MPI uses have generally been &quot;fast enough&quot; such that there hasn't been a clamor for a multicast-based broadcast.&#194;&#160; To be fair: every once in a (great) while, someone says they need it, but to be totally blunt, a) we haven't received enough requests to implement it ourselves, or b) no one has contributed a patch / plugin that implements it.&#194;&#160; That sounds snobby, but I don't mean it that way: what I mean is that most of
<br>
&nbsp;the features in Open MPI are customer-driven.&#194;&#160; All I'm saying is that we have a lot of other higher-priority customer-requested features that we're working on.&#194;&#160; Multicast-bcast support is not high enough in priority because not enough people have asked for it.
<br>
<p>I hope that helps...
<br>
<p><p><p>On Aug 9, 2010, at 10:43 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; The install was completly vanilla - no extras a plain .configure command line (on FC10 x8x_64 linux)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying that all broadcast calls are actually implemented as serial point to point calls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Tue, 10/8/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Tuesday, 10 August, 2010, 12:33 AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No idea what is going on here. No MPI call is implemented as a multicast - it all flows over the MPI pt-2-pt system via one of the various algorithms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best guess I can offer is that there is a race condition in your program that you are tripping when other procs that share the node change the timing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How did you configure OMPI when you built it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2010, at 11:02 PM, Randolph Pullen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only MPI calls I am using are these (grep-ed from my code):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bcast(&amp;bufarray[0].hdr, sizeof(BD_CHDR), MPI_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs); 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv(
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Isend(
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv(buff, BUFSIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send(buff, BUFSIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test(&amp;request, &amp;complete, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wait(&amp;request, &amp;status);&#194;&#160; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The big wait happens on receipt of a bcast call that would otherwise work.
</span><br>
<span class="quotelev2">&gt;&gt; Its a bit mysterious really...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I presume that bcast is implemented with multicast calls but does it use any actual broadcast calls at all?&#194;&#160; 
</span><br>
<span class="quotelev2">&gt;&gt; I know I'm scraping the edges here looking for something but I just cant get my head around why it should fail where it has.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- On Mon, 9/8/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Received: Monday, 9 August, 2010, 1:32 PM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Randolph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unless your code is doing a connect/accept between the copies, there is no way they can cross-communicate. As you note, mpirun instances are completely isolated from each other - no process in one instance can possibly receive information from a process in another instance because it lacks all knowledge of it -unless- they wireup into a greater communicator by performing connect/accept calls between them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suspect you are inadvertently doing just that - perhaps by doing connect/accept in a tree-like manner, not realizing that the end result is one giant communicator that now links together all the N servers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, there is no possible way an MPI_Bcast in one mpirun can collide or otherwise communicate with an MPI_Bcast between processes started by another mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 8, 2010, at 7:13 PM, Randolph Pullen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,&#194;&#160; although &#226;&#128;&#156;An intercommunicator cannot be used for collective communication.&#226;&#128;&#157; i.e ,&#194;&#160; bcast calls., I can see how the MPI_Group_xx calls can be used to produce a useful group and then communicator;&#194;&#160; - thanks again but this is really the side issue to my main question about MPI_Bcast.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I seem to have duplicate concurrent processes interfering with each other.&#194;&#160; This would appear to be a breach of the MPI safety dictum, ie MPI_COMM_WORD is supposed to only include the processes started by a single mpirun command and isolate these processes from other similar groups of processes safely.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it would appear to be a bug.&#194;&#160; If so this has significant implications for environments such as mine, where it may often occur that the same program is run by different users simultaneously.&#194;&#160; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is really this issue that it concerning me, I can rewrite the code but if it can crash when 2 copies run at the same time, I have a much bigger problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My suspicion is that a within the MPI_Bcast handshaking, a syncronising broadcast call may be colliding across the environments.&#194;&#160; My only evidence is an otherwise working program waits on broadcast reception forever when two or more copies are run at [exactly] the same time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else seen similar behavior in concurrently running programs that perform lots of broadcasts perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Randolph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On Sun, 8/8/10, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Received: Sunday, 8 August, 2010, 12:34 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In particular, intercommunicators
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/7/10, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; You should consider reading about communicators in MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Aurelien
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Aurelien Bouteiller, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Innovative Computing Laboratory, The University of Tennessee.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Envoy&#195;&#169; de mon iPad
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Le Aug 7, 2010 &#195;&#160; 1:05, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I seem to be having a problem with MPI_Bcast.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; My massive I/O intensive data movement program must broadcast from n to n
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; nodes. My problem starts because I require 2 processes per node, a sender
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; and a receiver and I have implemented these using MPI processes rather
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; than tackle the complexities of threads on MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Consequently, broadcast and calls like alltoall are not completely
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; helpful.&#194;&#160; The dataset is huge and each node must end up with a complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; copy built by the large number of contributing broadcasts from the sending
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; nodes.&#194;&#160; Network efficiency and run time are paramount.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; As I don&#226;&#128;&#153;t want to needlessly broadcast all this data to the sending nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; and I have a perfectly good MPI program that distributes globally from a
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; single node (1 to N), I took the unusual decision to start N copies of
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; this program by spawning the MPI system from the PVM system in an effort
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; to get my N to N concurrent transfers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; It seems that the broadcasts running on concurrent MPI environments
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; collide and cause all but the first process to hang waiting for their
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; broadcasts.&#194;&#160; This theory seems to be confirmed by introducing a sleep of
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; n-1 seconds before the first MPI_Bcast&#194;&#160; call on each node, which results
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; in the code working perfectly.&#194;&#160; (total run time 55 seconds, 3 nodes,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; standard TCP stack)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; My guess is that unlike PVM, OpenMPI implements broadcasts with broadcasts
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; rather than multicasts.&#194;&#160; Can someone confirm this?&#194;&#160; Is this a bug?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Is there any multicast or N to N broadcast where sender processes can
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; avoid participating when they don&#226;&#128;&#153;t need to?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Randolph
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my mobile device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Zhang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Inline Attachment Follows-----
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; _______________________________________________
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
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<span class="quotelev1">&gt;&#194;&#160; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13962.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13970.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
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
