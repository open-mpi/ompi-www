<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 13:05:24 2014" -->
<!-- isoreceived="20141016170524" -->
<!-- sent="Thu, 16 Oct 2014 17:05:21 +0000" -->
<!-- isosent="20141016170521" -->
<!-- name="McGrattan, Kevin B. Dr." -->
<!-- email="kevin.mcgrattan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?" -->
<!-- id="d1f8b6a45d3e4924ae842baed91816d6_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="543FE6BB.6090404_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?<br>
<strong>From:</strong> McGrattan, Kevin B. Dr. (<em>kevin.mcgrattan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 13:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25508.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the code is restartable, and our users often do this. We have users in countries with unreliable power supplies. However, we still try to make the code as robust as possible. Usually, if I do something improper in my MPI coding, failure occurs right away. But I've run out of ideas as to why the code would fail after two days, other than network hiccups beyond my control. In this case, I run 15 jobs simultaneously on a new linux cluster that is dedicated solely to our program. Of the 15 jobs, maybe none or one will fail. So that makes me think there is something random at play, but I can't think of ways to further bullet-proof the code. 
<br>
<p>When you say &quot;poorly designed I/O&quot;, what do you mean? This is something that I have not really considered.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Thursday, October 16, 2014 11:40 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?
<br>
<p>Hi Kevin
<br>
<p>Wouldn't it be possible to make your code restartable, by saving the appropriate fluid configuration/phase space variables, and splitting your long run into smaller pieces?
<br>
That is a very common strategy for large PDE integrations.
<br>
Time invested in programming the restart features may pay off in more steady jobs, and in integrations that actually complete.
<br>
<p>If a long run fails, because of a network glitch, exhaustion of resources, slow NFS server, or any other reason, you loose a long computing time.
<br>
If a short run fails, you can always restart from the previous leg/job, and your loss is small.
<br>
<p>Nearly all parallel code that we run here is restartable (GFD is a form of CFD :) ), both to prevent long run failures like the one you mentioned, as well as to provide a better throughput and user time share on the cluster as a whole.
<br>
This is nothing new, and
<br>
restartable codes + short job queue time policy is very common out there.
<br>
<p>Here most problems with long runs
<br>
(we have some non-restartable serial code die-hards), happen due to NFS issues (busy, slow response, etc), and code with poorly designed IO.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>On 10/16/2014 10:16 AM, McGrattan, Kevin B. Dr. wrote:
<br>
<span class="quotelev1">&gt; The individual MPI processes appear to be using a few percent of the 
</span><br>
<span class="quotelev1">&gt; system memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have created a loop containing repeated calls to MPI_TESTALL. When 
</span><br>
<span class="quotelev1">&gt; the process is in this loop for more than 10 s, it calls MPI_ABORT. So 
</span><br>
<span class="quotelev1">&gt; the only error message I see is related to all the processes being 
</span><br>
<span class="quotelev1">&gt; stopped suddenly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it reasonable to ABORT after 10 s? If I just use MPI_WAITALL, the 
</span><br>
<span class="quotelev1">&gt; job hangs indefinitely. I at least know for which MPI exchange and 
</span><br>
<span class="quotelev1">&gt; which MPI process the code is hanging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to change the number of retries for a given MPI 
</span><br>
<span class="quotelev1">&gt; send/receive, or a more graceful timeout function than what I have coded?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Ralph 
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, October 15, 2014 11:05 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you only have one thread doing MPI calls, then single and funneled 
</span><br>
<span class="quotelev1">&gt; are indeed the same. If this is only happening after long run times, 
</span><br>
<span class="quotelev1">&gt; I'd suspect resource exhaustion. You might check your memory footprint 
</span><br>
<span class="quotelev1">&gt; to see if you are running into leak issues (could be in our library as 
</span><br>
<span class="quotelev1">&gt; well as your app). When you eventually deadlock, do you get any error output?
</span><br>
<span class="quotelev1">&gt; If you are using IB and run out of QP, you should at least get 
</span><br>
<span class="quotelev1">&gt; something saying that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2014, at 8:22 AM, McGrattan, Kevin B. Dr.
</span><br>
<span class="quotelev1">&gt; &lt;kevin.mcgrattan_at_[hidden] &lt;mailto:kevin.mcgrattan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.8.3 on a linux cluster to run fairly long CFD 
</span><br>
<span class="quotelev1">&gt; (computational fluid dynamics) simulations using 16 MPI processes. The 
</span><br>
<span class="quotelev1">&gt; calculations last several days and typically involve millions of MPI 
</span><br>
<span class="quotelev1">&gt; exchanges. I use the Intel Fortran compiler, and when I compile with 
</span><br>
<span class="quotelev1">&gt; the -openmp option and run with only one OpenMP thread per MPI 
</span><br>
<span class="quotelev1">&gt; process, I tend to get deadlocks after several days of computing. 
</span><br>
<span class="quotelev1">&gt; These deadlocks only occur in about 1 out of 10 calculations, and they 
</span><br>
<span class="quotelev1">&gt; only occur after running for several days. I have eliminated things 
</span><br>
<span class="quotelev1">&gt; like network glitches, power spikes, etc, as possibilities. The only 
</span><br>
<span class="quotelev1">&gt; thing left is the inclusion of the OpenMP option - even though I am 
</span><br>
<span class="quotelev1">&gt; running with just one OpenMP thread per MPI process. I have read about 
</span><br>
<span class="quotelev1">&gt; the issues with MPI_THREAD_INIT, and I have reduced the REQUIRED level 
</span><br>
<span class="quotelev1">&gt; of support to MPI_THREAD_FUNNELED, down from MPI_THREAD_SERIALIZED. 
</span><br>
<span class="quotelev1">&gt; The latter was not necessary for my application, and I think the 
</span><br>
<span class="quotelev1">&gt; reduction in level of support has helped, but not completely removed, 
</span><br>
<span class="quotelev1">&gt; the deadlocking. Of course, there is always the possibility that I 
</span><br>
<span class="quotelev1">&gt; have coded my MPI calls improperly, even though the code runs for days 
</span><br>
<span class="quotelev1">&gt; on end. Maybe there's that one in a million possibility that rank x 
</span><br>
<span class="quotelev1">&gt; gets to a point in the code that is so far ahead of all the other ranks that a deadlock occurs.
</span><br>
<span class="quotelev1">&gt; Placing MPI_BARRIERs has not helped me find any such situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have two questions. First, has anyone experienced something 
</span><br>
<span class="quotelev1">&gt; similar to this where inclusion of OpenMP in an MPI code has caused deadlocks?
</span><br>
<span class="quotelev1">&gt; Second, is it possible that reducing the REQUIRED level of support to 
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE will cause the code to behave differently than 
</span><br>
<span class="quotelev1">&gt; FUNNELED? I have read in another post that SINGLE and FUNNELED are 
</span><br>
<span class="quotelev1">&gt; essentially the same thing. I have even noted that I can spawn OpenMP 
</span><br>
<span class="quotelev1">&gt; threads even when I use SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kevin McGrattan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; National Institute of Standards and Technology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 100 Bureau Drive, Mail Stop 8664
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gaithersburg, Maryland 20899
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 301 975 2712
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this
</span><br>
<span class="quotelev1">&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/10/25500.php">http://www.open-mpi.org/community/lists/users/2014/10/25500.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25506.php">http://www.open-mpi.org/community/lists/users/2014/10/25506.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25507.php">http://www.open-mpi.org/community/lists/users/2014/10/25507.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25508.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
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
