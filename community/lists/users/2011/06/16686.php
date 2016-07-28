<?
$subject_val = "Re: [OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 01:58:01 2011" -->
<!-- isoreceived="20110607055801" -->
<!-- sent="Tue, 7 Jun 2011 01:57:55 -0400" -->
<!-- isosent="20110607055755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="3C720ADA-EFFF-4D8A-BC65-898FC070A4CE_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="76d28e95802cc83389924e14bb189838_at_localhost" -->
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
<strong>Date:</strong> 2011-06-07 01:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>In reply to:</strong> <a href="16664.php">Fr&#195;&#169;d&#195;&#169;ric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Frederic,
<br>
<p>Attached you will find an example that is supposed to work. The main difference with your code is on T3, T4 where you have inversed the local and remote comm. As depicted on the picture attached below, during the 3th step you will create the intercomm between ab and c (no overlap) using ac as a bridge communicator (here the two roots, a and c, can exchange messages).
<br>
<p>Based on the MPI 2.2 standard, especially on the paragraph in PS:, the attached code should have been working. Unfortunately, I couldn't run it successfully neither with Open MPI trunk nor MPICH2 1.4rc1. 
<br>
<p>&nbsp;george.
<br>
<p>PS: Here is what the MPI standard states about the MPI_Intercomm_create:
<br>
<span class="quotelev1">&gt; The function MPI_INTERCOMM_CREATE can be used to create an inter-communicator from two existing intra-communicators, in the following situation: At least one selected member from each group (the &#147;group leader&#148;) has the ability to communicate with the selected member from the other group; that is, a &#147;peer&#148; communicator exists to which both leaders belong, and each leader knows the rank of the other leader in this peer communicator. Furthermore, members of each group know the rank of their leader.
</span><br>
<p><p>

<br><p>
<p><p><p>

<br><p>
<p><p>On Jun 1, 2011, at 05:00 , Fr&#233;d&#233;ric Feyel wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem using MPI_Intercomm_create.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I 5 tasks, let's say T0, T1, T2, T3, T4 resulting from two spawn
</span><br>
<span class="quotelev1">&gt; operations by T0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I have two intra-communicator :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; intra0 contains : T0, T1, T2
</span><br>
<span class="quotelev1">&gt; intra1 contains : T0, T3, T4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my goal is to make a collective loop to build a single intra-communicator
</span><br>
<span class="quotelev1">&gt; containing T0, T1, T2, T3, T4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to do it using MPI_Intercomm_create and MPI_Intercom_merge calls,
</span><br>
<span class="quotelev1">&gt; but without success (I always get MPI internal errors).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I am doing :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on T0 :
</span><br>
<span class="quotelev1">&gt; *******
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Intercom_create(intra0,0,intra1,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on T1 and T2 :
</span><br>
<span class="quotelev1">&gt; **************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Intercom_create(intra0,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on T3 and T4 :
</span><br>
<span class="quotelev1">&gt; **************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Intercom_create(intra1,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm certainly missing something. Could anybody help me to solve this
</span><br>
<span class="quotelev1">&gt; problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fr&#233;d&#233;ric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS : of course I did an extensive web search without finding anything
</span><br>
<span class="quotelev1">&gt; usefull on my problem.
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
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16686/intercomm_create.c">intercomm_create.c</a>
</ul>
<!-- attachment="intercomm_create.c" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16686/PastedGraphic-2.pdf">PastedGraphic-2.pdf</a>
</ul>
<!-- attachment="PastedGraphic-2.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>In reply to:</strong> <a href="16664.php">Fr&#195;&#169;d&#195;&#169;ric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
