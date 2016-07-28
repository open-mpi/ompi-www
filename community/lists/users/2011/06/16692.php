<?
$subject_val = "Re: [OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 11:23:51 2011" -->
<!-- isoreceived="20110607152351" -->
<!-- sent="Tue, 7 Jun 2011 11:23:45 -0400" -->
<!-- isosent="20110607152345" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="4C42030E-ED08-43FE-8E6A-A141F0375A43_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4DEE3CF7.8010009_at_cs.uh.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 11:23:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2011, at 11:00 , Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not look over all the details of your test, but it looks to me
</span><br>
<span class="quotelev1">&gt; like you are violating one of the requirements of intercomm_create
</span><br>
<span class="quotelev1">&gt; namely the request that the two groups have to be disjoint. In your case
</span><br>
<span class="quotelev1">&gt; the parent process(es) are part of both local intra-communicators, isn't it?
</span><br>
<p>The two groups of the two local communicators are disjoints. One contains A,B while the other only C. The bridge communicator contains A,C.
<br>
<p>I'm confident my example is supposed to work. At least for Open MPI the error is under the hood, as the resulting inter-communicator is valid but contains NULL endpoints for the remote process.
<br>
<p>Regarding the fact that the two leader should be separate processes, you will not find any wording about this in the current version of the standard. In the 1.1 there were two opposite sentences about this one stating that the two groups can be disjoint, while the other claiming that the two leaders can be the same process. After discussion, the agreement was that the two groups have to be disjoint, and the standard has been amended to match the agreement.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just have MPI-1.1. at hand right now, but here is what it says:
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Overlap of local and remote groups that are bound into an
</span><br>
<span class="quotelev1">&gt; inter-communicator is prohibited. If there is overlap, then the program
</span><br>
<span class="quotelev1">&gt; is erroneous and is likely to deadlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; so bottom line is that the two local intra-communicators that are being
</span><br>
<span class="quotelev1">&gt; used have to be disjoint, and the bridgecomm needs to be a communicator
</span><br>
<span class="quotelev1">&gt; where at least one process of each of the two disjoint groups need to be
</span><br>
<span class="quotelev1">&gt; able to talk to each other. Interestingly I did not find a sentence
</span><br>
<span class="quotelev1">&gt; whether it is allowed to be the same process, or whether the two local
</span><br>
<span class="quotelev1">&gt; leaders need to be separate processes...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/7/2011 12:57 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Frederic,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached you will find an example that is supposed to work. The main difference with your code is on T3, T4 where you have inversed the local and remote comm. As depicted on the picture attached below, during the 3th step you will create the intercomm between ab and c (no overlap) using ac as a bridge communicator (here the two roots, a and c, can exchange messages).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Based on the MPI 2.2 standard, especially on the paragraph in PS:, the attached code should have been working. Unfortunately, I couldn't run it successfully neither with Open MPI trunk nor MPICH2 1.4rc1. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: Here is what the MPI standard states about the MPI_Intercomm_create:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The function MPI_INTERCOMM_CREATE can be used to create an inter-communicator from two existing intra-communicators, in the following situation: At least one selected member from each group (the &#147;group leader&#148;) has the ability to communicate with the selected member from the other group; that is, a &#147;peer&#148; communicator exists to which both leaders belong, and each leader knows the rank of the other leader in this peer communicator. Furthermore, members of each group know the rank of their leader.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2011, at 05:00 , Fr&#233;d&#233;ric Feyel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a problem using MPI_Intercomm_create.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I 5 tasks, let's say T0, T1, T2, T3, T4 resulting from two spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations by T0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I have two intra-communicator :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intra0 contains : T0, T1, T2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intra1 contains : T0, T3, T4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my goal is to make a collective loop to build a single intra-communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; containing T0, T1, T2, T3, T4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to do it using MPI_Intercomm_create and MPI_Intercom_merge calls,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but without success (I always get MPI internal errors).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I am doing :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on T0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Intercom_create(intra0,0,intra1,0,1,&amp;new_com)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on T1 and T2 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Intercom_create(intra0,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on T3 and T4 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Intercom_create(intra1,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm certainly missing something. Could anybody help me to solve this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fr&#233;d&#233;ric.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS : of course I did an extensive web search without finding anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usefull on my problem.
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16693.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
