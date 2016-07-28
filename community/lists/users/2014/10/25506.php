<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 10:16:06 2014" -->
<!-- isoreceived="20141016141606" -->
<!-- sent="Thu, 16 Oct 2014 14:16:03 +0000" -->
<!-- isosent="20141016141603" -->
<!-- name="McGrattan, Kevin B. Dr." -->
<!-- email="kevin.mcgrattan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?" -->
<!-- id="f1ca81f8c6e04ef1b4935d59b00e4efa_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="80F4760B-5A47-44AF-A508-DE8AFBD8031C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-10-16 10:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>In reply to:</strong> <a href="25502.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Reply:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The individual MPI processes appear to be using a few percent of the system memory.
<br>
<p>I have created a loop containing repeated calls to MPI_TESTALL. When the process is in this loop for more than 10 s, it calls MPI_ABORT. So the only error message I see is related to all the processes being stopped suddenly.
<br>
<p>Is it reasonable to ABORT after 10 s? If I just use MPI_WAITALL, the job hangs indefinitely. I at least know for which MPI exchange and which MPI process the code is hanging.
<br>
<p>Is there a way to change the number of retries for a given MPI send/receive, or a more graceful timeout function than what I have coded?
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, October 15, 2014 11:05 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?
<br>
<p>If you only have one thread doing MPI calls, then single and funneled are indeed the same. If this is only happening after long run times, I'd suspect resource exhaustion. You might check your memory footprint to see if you are running into leak issues (could be in our library as well as your app). When you eventually deadlock, do you get any error output? If you are using IB and run out of QP, you should at least get something saying that.
<br>
<p><p>On Oct 15, 2014, at 8:22 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&lt;mailto:kevin.mcgrattan_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>I am using OpenMPI 1.8.3 on a linux cluster to run fairly long CFD (computational fluid dynamics) simulations using 16 MPI processes. The calculations last several days and typically involve millions of MPI exchanges. I use the Intel Fortran compiler, and when I compile with the -openmp option and run with only one OpenMP thread per MPI process, I tend to get deadlocks after several days of computing. These deadlocks only occur in about 1 out of 10 calculations, and they only occur after running for several days. I have eliminated things like network glitches, power spikes, etc, as possibilities. The only thing left is the inclusion of the OpenMP option - even though I am running with just one OpenMP thread per MPI process. I have read about the issues with MPI_THREAD_INIT, and I have reduced the REQUIRED level of support to MPI_THREAD_FUNNELED, down from MPI_THREAD_SERIALIZED. The latter was not necessary for my application, and I think the reduction in level of support has helped, but not completely removed, the deadlocking. Of course, there is always the possibility that I have coded my MPI calls improperly, even though the code runs for days on end. Maybe there's that one in a million possibility that rank x gets to a point in the code that is so far ahead of all the other ranks that a deadlock occurs. Placing MPI_BARRIERs has not helped me find any such situation.
<br>
<p>So I have two questions. First, has anyone experienced something similar to this where inclusion of OpenMP in an MPI code has caused deadlocks? Second, is it possible that reducing the REQUIRED level of support to MPI_THREAD_SINGLE will cause the code to behave differently than FUNNELED? I have read in another post that SINGLE and FUNNELED are essentially the same thing. I have even noted that I can spawn OpenMP threads even when I use SINGLE.
<br>
<p>Thanks
<br>
<p>Kevin McGrattan
<br>
National Institute of Standards and Technology
<br>
100 Bureau Drive, Mail Stop 8664
<br>
Gaithersburg, Maryland 20899
<br>
<p>301 975 2712
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25500.php">http://www.open-mpi.org/community/lists/users/2014/10/25500.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>In reply to:</strong> <a href="25502.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Reply:</strong> <a href="25507.php">Gus Correa: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
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
