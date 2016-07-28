<?
$subject_val = "Re: [OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 11:00:15 2011" -->
<!-- isoreceived="20110607150015" -->
<!-- sent="Tue, 07 Jun 2011 10:00:07 -0500" -->
<!-- isosent="20110607150007" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="4DEE3CF7.8010009_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3C720ADA-EFFF-4D8A-BC65-898FC070A4CE_at_eecs.utk.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 11:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16692.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>In reply to:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16692.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16692.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I did not look over all the details of your test, but it looks to me
<br>
like you are violating one of the requirements of intercomm_create
<br>
namely the request that the two groups have to be disjoint. In your case
<br>
the parent process(es) are part of both local intra-communicators, isn't it?
<br>
<p>I just have MPI-1.1. at hand right now, but here is what it says:
<br>
<pre>
----
Overlap of local and remote groups that are bound into an
inter-communicator is prohibited. If there is overlap, then the program
is erroneous and is likely to deadlock.
----
so bottom line is that the two local intra-communicators that are being
used have to be disjoint, and the bridgecomm needs to be a communicator
where at least one process of each of the two disjoint groups need to be
able to talk to each other. Interestingly I did not find a sentence
whether it is allowed to be the same process, or whether the two local
leaders need to be separate processes...
Thanks
Edgar
On 6/7/2011 12:57 AM, George Bosilca wrote:
&gt; Frederic,
&gt; 
&gt; Attached you will find an example that is supposed to work. The main difference with your code is on T3, T4 where you have inversed the local and remote comm. As depicted on the picture attached below, during the 3th step you will create the intercomm between ab and c (no overlap) using ac as a bridge communicator (here the two roots, a and c, can exchange messages).
&gt; 
&gt; Based on the MPI 2.2 standard, especially on the paragraph in PS:, the attached code should have been working. Unfortunately, I couldn't run it successfully neither with Open MPI trunk nor MPICH2 1.4rc1. 
&gt; 
&gt;  george.
&gt; 
&gt; PS: Here is what the MPI standard states about the MPI_Intercomm_create:
&gt;&gt; The function MPI_INTERCOMM_CREATE can be used to create an inter-communicator from two existing intra-communicators, in the following situation: At least one selected member from each group (the &#147;group leader&#148;) has the ability to communicate with the selected member from the other group; that is, a &#147;peer&#148; communicator exists to which both leaders belong, and each leader knows the rank of the other leader in this peer communicator. Furthermore, members of each group know the rank of their leader.
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On Jun 1, 2011, at 05:00 , Fr&#233;d&#233;ric Feyel wrote:
&gt; 
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; I have a problem using MPI_Intercomm_create.
&gt;&gt;
&gt;&gt; I 5 tasks, let's say T0, T1, T2, T3, T4 resulting from two spawn
&gt;&gt; operations by T0.
&gt;&gt;
&gt;&gt; So I have two intra-communicator :
&gt;&gt;
&gt;&gt; intra0 contains : T0, T1, T2
&gt;&gt; intra1 contains : T0, T3, T4
&gt;&gt;
&gt;&gt; my goal is to make a collective loop to build a single intra-communicator
&gt;&gt; containing T0, T1, T2, T3, T4
&gt;&gt;
&gt;&gt; I tried to do it using MPI_Intercomm_create and MPI_Intercom_merge calls,
&gt;&gt; but without success (I always get MPI internal errors).
&gt;&gt;
&gt;&gt; What I am doing :
&gt;&gt;
&gt;&gt; on T0 :
&gt;&gt; *******
&gt;&gt;
&gt;&gt; MPI_Intercom_create(intra0,0,intra1,0,1,&amp;new_com)
&gt;&gt;
&gt;&gt; on T1 and T2 :
&gt;&gt; **************
&gt;&gt;
&gt;&gt; MPI_Intercom_create(intra0,0,MPI_COMM_WORLD,0,1,&amp;new_com)
&gt;&gt;
&gt;&gt; on T3 and T4 :
&gt;&gt; **************
&gt;&gt;
&gt;&gt; MPI_Intercom_create(intra1,0,MPI_COMM_WORLD,0,1,&amp;new_com)
&gt;&gt;
&gt;&gt;
&gt;&gt; I'm certainly missing something. Could anybody help me to solve this
&gt;&gt; problem ?
&gt;&gt;
&gt;&gt; Best regards,
&gt;&gt;
&gt;&gt; Fr&#233;d&#233;ric.
&gt;&gt;
&gt;&gt; PS : of course I did an extensive web search without finding anything
&gt;&gt; usefull on my problem.
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16691/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16692.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>In reply to:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16692.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Reply:</strong> <a href="16692.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
