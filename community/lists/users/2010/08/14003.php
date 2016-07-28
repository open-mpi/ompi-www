<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 21:54:07 2010" -->
<!-- isoreceived="20100813015407" -->
<!-- sent="Thu, 12 Aug 2010 18:54:02 -0700 (PDT)" -->
<!-- isosent="20100813015402" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="515162.34761.qm_at_web50807.mail.re2.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="783EEBFF-4392-42D9-A650-C72F4912EB82_at_cisco.com" -->
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
<strong>Date:</strong> 2010-08-12 21:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13970.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the late replies but with work, time zones etc&#226;&#128;&#166;
<br>
<p>This post has been going on for a while and in an attempt bring it to a close I&#226;&#128;&#153;m going to try to collapse this down to some core issues and answer all the questions in 1 place.
<br>
<p>Richard: yes your last statement is correct, I am just using PVm solely as a launcher, the MPI worlds are semantically independent. 
<br>
<p>Jeffs suggestion that it may be a network congestion issue rings a bell somewhere.
<br>
Jeff, although it is possible to make a small example program, this would require PVM or some other method of launching MPI simultaneously on each node. I would agree that this is a bit off topic for this forum and so I won&#226;&#128;&#153;t mention it further.&#194;&#160; 
<br>
<p>In finalizing this issue, I would like to discuss the characteristics of the other options available.&#194;&#160; If I understood what to expect from the alltoall on a large cluster and given the scenario outlined below it may help me greatly in deciding how (or if) to re-write this.
<br>
<p>BTW:&#194;&#160; Jeff,&#194;&#160; sorry if I miss quoted you, I must have miss-understood.
<br>
<span class="quotelev1">&gt;From your post reproduced in part here:
</span><br>
==============================================================
<br>
<span class="quotelev1">&gt;- All of Open MPI's network-based collectives use point-to-point 
</span><br>
<span class="quotelev1">&gt;communications underneath (shared memory may not, but that's not the issue 
</span><br>
<span class="quotelev1">&gt;here).&#194;&#160; One of the implementations is linear, meaning that the root sends the 
</span><br>
<span class="quotelev1">&gt;message to comm rank 1, then comm rank 2, ..etc.&#194;&#160; But this algorithm is only 
</span><br>
<span class="quotelev1">&gt;used when the message is small, the number of peers is small, etc.&#194;&#160; All the other 
</span><br>
<span class="quotelev1">&gt;algorithms are parallel in nature, meaning that after an iteration or two, &gt;multiple processes have the data and can start pipelining sends to other 
</span><br>
<span class="quotelev1">&gt;processes, etc.
</span><br>
==============================================================
<br>
<p>What I meant when I said b-tree is nearly right I think &#226;&#128;&#147; I should have said &#226;&#128;&#152;in an N-Tree manner&#226;&#128;&#153; but both would produce O(log N) solutions and I agree that these are all perfectly fine for almost everything.
<br>
<p>This assumes that you have &#226;&#128;&#152;adequate&#226;&#128;&#153; network bandwidth as you correctly pointed out in your recent post.&#194;&#160; This may not be the case for my problem (see below)
<br>
<p>The Problem:
<br>
-&#194;&#160;&#194;&#160;&#194;&#160; A large all to all (N to N transmission or N broadcasts) of possibly hundreds of GB in total.
<br>
-&#194;&#160;&#194;&#160;&#194;&#160; The cluster size my clients will use is unknown at this time but probably in the order of between 10 to a few hundred nodes.
<br>
-&#194;&#160;&#194;&#160;&#194;&#160; The number of nodes is likely to increase with the data size but the ratio of data/node is unknown and variable.
<br>
<p>My design Goals:
<br>
1.&#194;&#160;&#194;&#160;&#194;&#160; Speed and accuracy are everything.&#194;&#160; Accuracy is paramount but the system would become unusable if this algorithm became exponential.
<br>
2.&#194;&#160;&#194;&#160;&#194;&#160; I love the flexibility OMPI brings to fabric deployment.&#194;&#160; I want to pass on the richness of these choices to my clients/customers &#226;&#128;&#147; however if IB (or some other) plugin solution moved the alltoall algorithm from say&#194;&#160; O(N log N) to&#194;&#160; just O(Log N) transmission, its mandatory use may be an acceptable solution on larger clusters
<br>
<p>My Assumptions
<br>
1.&#194;&#160;&#194;&#160;&#194;&#160; I can concentrate on providing the best near linear solutions and ignore site implementation peculiarities
<br>
2.&#194;&#160;&#194;&#160;&#194;&#160; Tuning each installation can accommodate all site specific idiosyncrasies
<br>
3.&#194;&#160;&#194;&#160;&#194;&#160; The solution will probably be network bound.&#194;&#160; No mater how fast the network is, 100GB may well be too much for concurrent p2p transmissions to run in O(log N) time
<br>
[please feel free to trash my assumptions]
<br>
<p>This is a difficult problem, I have written 3 solutions for this using different technologies and I have been unsatisfied with each so far.
<br>
<p>Theoretically the problem can be solved in N broadcasts but [Jeff] as you point out, in practice, data loss is likely on the nodes who are not ready etc..&#194;&#160; However a near O(N) solution&#194;&#160; should be possible.
<br>
<p>It appears that OMPI&#226;&#128;&#153;s Bcast is O(log N) for N &gt; a trivial number of nodes
<br>
So AlltoAll is probably at least O(N log N) &#226;&#128;&#147; unless it utilises something other than p2p transmissions and its only O(N log N) if there is adequate bandwidth on the network fabric.
<br>
<p>Do I have it correct?
<br>
Is alltoall going to work for me ?
<br>
<p>Randolph
<br>
<p><p><p><p>--- On Fri, 13/8/10, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Friday, 13 August, 2010, 3:03 AM
<br>
<p>Dick / all --
<br>
<p>I just had a phone call with Ralph Castain who has had some additional off-list mails with Randolph.&#194;&#160; Apparently, none of us understand the model that is being used here.&#194;&#160; There are also apparently some confidentiality issues involved such that it might be difficult to publicly state enough information to allow the open community to understand, diagnose, and fix the issue.&#194;&#160; So I'm not quite sure how to proceed here -- I'm afraid that I don't have the time or resources for private problem resolution in an unorthodox situation like this.
<br>
<p>For example, I was under the impression that PVM was solely being used as a launcher.&#194;&#160; This is apparently not the case -- the original code is a PVM job that has been modified to eventually call MPI_INIT.&#194;&#160; I don't know how much more I can say on this open list.
<br>
<p>Hence, I'm throughly confused as to the model that is being used at this point.&#194;&#160; I don't think I can offer any further help unless a small [non-PVM] example is provided to the community that can show the problem.
<br>
<p>I also asked a bunch of questions in a prior post that would be helpful to have answered before going further.
<br>
<p>Sorry!&#194;&#160; :-(
<br>
<p><p><p>On Aug 12, 2010, at 9:32 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You said&#194;&#160; &quot;separate MPI&#194;&#160; applications doing 1 to &gt; N broadcasts over PVM&quot;.&#194;&#160; You do not mean you are using pvm_bcast though - right? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If these N MPI applications are so independent that you could run one at a time or run them on N different clusters and still get the result you want (not the time to solution) then I cannot imagine how there could be cross talk.&#194;&#160;&#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been assuming that when you describe this as an NxN problem, you mean there is some desired interaction among the N MPI worlds.&#194;&#160;&#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I have misunderstood and the N MPI worlds stared with N mpirun operations under PVM are each semantically independent of the other (N-1) then I am totally at a loss for an explanation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt; Dick Treumann&#194;&#160; -&#194;&#160; MPI Team&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 08/11/2010 08:59:16 PM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [image removed] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] MPI_Bcast issue 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Randolph Pullen 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; to: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 08/11/2010 09:01 PM 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sent by: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to Open MPI Users 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I (a single user) am running N separate MPI&#194;&#160; applications doing 1 to
</span><br>
<span class="quotelev2">&gt; &gt; N broadcasts over PVM, each MPI application is started on each 
</span><br>
<span class="quotelev2">&gt; &gt; machine simultaneously by PVM - the reasons are back in the post history.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that they somehow collide - yes I know this should 
</span><br>
<span class="quotelev2">&gt; &gt; not happen, the question is why.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 11/8/10, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Richard Treumann &lt;treumann_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Received: Wednesday, 11 August, 2010, 11:34 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Randolf 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am confused about using multiple, concurrent mpirun operations.&#194;&#160; 
</span><br>
<span class="quotelev2">&gt; &gt; If there are M uses of mpirun and each starts N tasks (carried out 
</span><br>
<span class="quotelev2">&gt; &gt; under pvm or any other way) I would expect you to have M completely 
</span><br>
<span class="quotelev2">&gt; &gt; independent MPI jobs with N tasks (processes) each.&#194;&#160; You could have 
</span><br>
<span class="quotelev2">&gt; &gt; some root in each of the M MPI jobs do an MPI_Bcast to the other 
</span><br>
<span class="quotelev2">&gt; &gt; N-1) in that job but there is no way in MPI (without using 
</span><br>
<span class="quotelev2">&gt; &gt; accept.connect) to get tasks of job 0 to give data to tasks of jobs 1-(m-1). 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With M uses of mpirun, you have M worlds that are forever isolated 
</span><br>
<span class="quotelev2">&gt; &gt; from the other M-1 worlds (again, unless you do accept/connect) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In what sense are you treating this as an single MxN application?&#194;&#160;&#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev2">&gt; &gt; ( I use M &amp; N to keep them distinct. I assume if M == N, we have your case) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dick Treumann&#194;&#160; -&#194;&#160; MPI Team&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev2">&gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev2">&gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev2">&gt; &gt; Tele (845) 433-7846&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;Fax (845) 433-8363 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Inline Attachment Follows-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13970.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
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
