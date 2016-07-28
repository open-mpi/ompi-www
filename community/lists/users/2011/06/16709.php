<?
$subject_val = "Re: [OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 12 03:44:40 2011" -->
<!-- isoreceived="20110612074440" -->
<!-- sent="Sun, 12 Jun 2011 09:44:05 +0200" -->
<!-- isosent="20110612074405" -->
<!-- name="Fr&#195;&#169;d&#195;&#169;ric Feyel" -->
<!-- email="mcffeyel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="e674a111b3eec30deb70cbac8ea8b8e3_at_imap.free.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4DEE4467.3020506_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Intercomm_create<br>
<strong>From:</strong> Fr&#195;&#169;d&#195;&#169;ric Feyel (<em>mcffeyel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-12 03:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16710.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16708.php">MM: "[OMPI users] building boost.mpi with openmpi: mpi.jam"</a>
<li><strong>In reply to:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16710.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16710.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, thank you very much for the time spent at looking at my problem.
<br>
<p>After reading your contributions, it's not clear wether there is a bug in
<br>
OpenMPI or not.
<br>
<p>So I created a small self contained source code to analyse the behavior,
<br>
and the problem is still there.
<br>
<p>I was wondering if the local and remote leader in the 2 groups could be
<br>
the same process. Unfortunately, I get
<br>
an error in the two cases (local and remote leader identical or not).
<br>
<p>What do you think about my small source code ?
<br>
<p>Best regards,
<br>
<p>Fr&#195;&#169;d&#195;&#169;ric.
<br>
<p><p>On Tue, 07 Jun 2011 10:31:51 -0500, Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; On 6/7/2011 10:23 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 7, 2011, at 11:00 , Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not look over all the details of your test, but it looks to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me like you are violating one of the requirements of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercomm_create namely the request that the two groups have to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disjoint. In your case the parent process(es) are part of both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local intra-communicators, isn't it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The two groups of the two local communicators are disjoints. One
</span><br>
<span class="quotelev2">&gt;&gt; contains A,B while the other only C. The bridge communicator contains
</span><br>
<span class="quotelev2">&gt;&gt; A,C.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm confident my example is supposed to work. At least for Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; the error is under the hood, as the resulting inter-communicator is
</span><br>
<span class="quotelev2">&gt;&gt; valid but contains NULL endpoints for the remote process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll come back to that later, I am not yet convinced that your code is
</span><br>
<span class="quotelev1">&gt; correct :-) Your local groups might be disjoint, but I am worried about
</span><br>
<span class="quotelev1">&gt; the ranks of the remote leader in your example. THey can not be 0 from
</span><br>
<span class="quotelev1">&gt; both groups perspective.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regarding the fact that the two leader should be separate processes,
</span><br>
<span class="quotelev2">&gt;&gt; you will not find any wording about this in the current version of
</span><br>
<span class="quotelev2">&gt;&gt; the standard. In the 1.1 there were two opposite sentences about this
</span><br>
<span class="quotelev2">&gt;&gt; one stating that the two groups can be disjoint, while the other
</span><br>
<span class="quotelev2">&gt;&gt; claiming that the two leaders can be the same process. After
</span><br>
<span class="quotelev2">&gt;&gt; discussion, the agreement was that the two groups have to be
</span><br>
<span class="quotelev2">&gt;&gt; disjoint, and the standard has been amended to match the agreement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I realized that this is a non-issue. If the two local groups are
</span><br>
<span class="quotelev1">&gt; disjoint, there is no way that the two local leaders are the same
</span><br>
process.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just have MPI-1.1. at hand right now, but here is what it says: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Overlap of local and remote groups that are bound into an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inter-communicator is prohibited. If there is overlap, then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program is erroneous and is likely to deadlock.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- so bottom line is that the two local intra-communicators that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are being used have to be disjoint, and the bridgecomm needs to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a communicator where at least one process of each of the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disjoint groups need to be able to talk to each other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interestingly I did not find a sentence whether it is allowed to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same process, or whether the two local leaders need to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separate processes...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/7/2011 12:57 AM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Frederic,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attached you will find an example that is supposed to work. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main difference with your code is on T3, T4 where you have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inversed the local and remote comm. As depicted on the picture
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attached below, during the 3th step you will create the intercomm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between ab and c (no overlap) using ac as a bridge communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (here the two roots, a and c, can exchange messages).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Based on the MPI 2.2 standard, especially on the paragraph in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS:, the attached code should have been working. Unfortunately, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; couldn't run it successfully neither with Open MPI trunk nor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH2 1.4rc1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS: Here is what the MPI standard states about the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Intercomm_create:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The function MPI_INTERCOMM_CREATE can be used to create an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; inter-communicator from two existing intra-communicators, in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the following situation: At least one selected member from each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; group (the &#226;&#128;&#156;group leader&#226;&#128;&#157;) has the ability to communicate with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the selected member from the other group; that is, a &#226;&#128;&#156;peer&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator exists to which both leaders belong, and each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; leader knows the rank of the other leader in this peer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator. Furthermore, members of each group know the rank
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of their leader.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 1, 2011, at 05:00 , Fr&#195;&#169;d&#195;&#169;ric Feyel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a problem using MPI_Intercomm_create.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I 5 tasks, let's say T0, T1, T2, T3, T4 resulting from two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn operations by T0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So I have two intra-communicator :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intra0 contains : T0, T1, T2 intra1 contains : T0, T3, T4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; my goal is to make a collective loop to build a single
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intra-communicator containing T0, T1, T2, T3, T4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to do it using MPI_Intercomm_create and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Intercom_merge calls, but without success (I always get MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; internal errors).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What I am doing :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on T0 : *******
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Intercom_create(intra0,0,intra1,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on T1 and T2 : **************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Intercom_create(intra0,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on T3 and T4 : **************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Intercom_create(intra1,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm certainly missing something. Could anybody help me to solve
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this problem ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fr&#195;&#169;d&#195;&#169;ric.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PS : of course I did an extensive web search without finding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything usefull on my problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list users_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Edgar Gabriel Assistant Professor Parallel Software Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Houston Philip G. Hoffman Hall, Room 524
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Houston, TX-77204, USA Tel: +1 (713) 743-3857                  Fax:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16709/spawn-example.c_">spawn-example.c_</a>
</ul>
<!-- attachment="spawn-example.c_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16710.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16708.php">MM: "[OMPI users] building boost.mpi with openmpi: mpi.jam"</a>
<li><strong>In reply to:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16710.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16710.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
