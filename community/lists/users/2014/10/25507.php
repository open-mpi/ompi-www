<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 11:39:46 2014" -->
<!-- isoreceived="20141016153946" -->
<!-- sent="Thu, 16 Oct 2014 11:39:39 -0400" -->
<!-- isosent="20141016153939" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?" -->
<!-- id="543FE6BB.6090404_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="f1ca81f8c6e04ef1b4935d59b00e4efa_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 11:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25508.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>In reply to:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25509.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Reply:</strong> <a href="25509.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kevin
<br>
<p>Wouldn't it be possible to make your code restartable, by saving
<br>
the appropriate fluid configuration/phase space variables,
<br>
and splitting your long run into smaller pieces?
<br>
That is a very common strategy for large PDE integrations.
<br>
Time invested in programming the restart features may pay off
<br>
in more steady jobs, and in integrations that actually complete.
<br>
<p>If a long run fails, because of a network glitch, exhaustion
<br>
of resources, slow NFS server, or any other reason,
<br>
you loose a long computing time.
<br>
If a short run fails, you can always restart from the previous leg/job,
<br>
and your loss is small.
<br>
<p>Nearly all parallel code that we run here is restartable
<br>
(GFD is a form of CFD :) ),
<br>
both to prevent long run failures like the one you mentioned,
<br>
as well as to provide a better throughput and user time share
<br>
on the cluster as a whole.
<br>
This is nothing new, and
<br>
restartable codes + short job queue time policy
<br>
is very common out there.
<br>
<p>Here most problems with long runs
<br>
(we have some non-restartable serial code die-hards),
<br>
happen due to NFS issues (busy, slow response, etc),
<br>
and code with poorly designed IO.
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
<span class="quotelev1">&gt; I have created a loop containing repeated calls to MPI_TESTALL. When the
</span><br>
<span class="quotelev1">&gt; process is in this loop for more than 10 s, it calls MPI_ABORT. So the
</span><br>
<span class="quotelev1">&gt; only error message I see is related to all the processes being stopped
</span><br>
<span class="quotelev1">&gt; suddenly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it reasonable to ABORT after 10 s? If I just use MPI_WAITALL, the job
</span><br>
<span class="quotelev1">&gt; hangs indefinitely. I at least know for which MPI exchange and which MPI
</span><br>
<span class="quotelev1">&gt; process the code is hanging.
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
<span class="quotelev1">&gt; are indeed the same. If this is only happening after long run times, I'd
</span><br>
<span class="quotelev1">&gt; suspect resource exhaustion. You might check your memory footprint to
</span><br>
<span class="quotelev1">&gt; see if you are running into leak issues (could be in our library as well
</span><br>
<span class="quotelev1">&gt; as your app). When you eventually deadlock, do you get any error output?
</span><br>
<span class="quotelev1">&gt; If you are using IB and run out of QP, you should at least get something
</span><br>
<span class="quotelev1">&gt; saying that.
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
<span class="quotelev1">&gt; exchanges. I use the Intel Fortran compiler, and when I compile with the
</span><br>
<span class="quotelev1">&gt; &#150;openmp option and run with only one OpenMP thread per MPI process, I
</span><br>
<span class="quotelev1">&gt; tend to get deadlocks after several days of computing. These deadlocks
</span><br>
<span class="quotelev1">&gt; only occur in about 1 out of 10 calculations, and they only occur after
</span><br>
<span class="quotelev1">&gt; running for several days. I have eliminated things like network
</span><br>
<span class="quotelev1">&gt; glitches, power spikes, etc, as possibilities. The only thing left is
</span><br>
<span class="quotelev1">&gt; the inclusion of the OpenMP option &#150; even though I am running with just
</span><br>
<span class="quotelev1">&gt; one OpenMP thread per MPI process. I have read about the issues with
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_INIT, and I have reduced the REQUIRED level of support to
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_FUNNELED, down from MPI_THREAD_SERIALIZED. The latter was not
</span><br>
<span class="quotelev1">&gt; necessary for my application, and I think the reduction in level of
</span><br>
<span class="quotelev1">&gt; support has helped, but not completely removed, the deadlocking. Of
</span><br>
<span class="quotelev1">&gt; course, there is always the possibility that I have coded my MPI calls
</span><br>
<span class="quotelev1">&gt; improperly, even though the code runs for days on end. Maybe there&#146;s
</span><br>
<span class="quotelev1">&gt; that one in a million possibility that rank x gets to a point in the
</span><br>
<span class="quotelev1">&gt; code that is so far ahead of all the other ranks that a deadlock occurs.
</span><br>
<span class="quotelev1">&gt; Placing MPI_BARRIERs has not helped me find any such situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have two questions. First, has anyone experienced something similar
</span><br>
<span class="quotelev1">&gt; to this where inclusion of OpenMP in an MPI code has caused deadlocks?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25506.php">http://www.open-mpi.org/community/lists/users/2014/10/25506.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25508.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>In reply to:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25509.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Reply:</strong> <a href="25509.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
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
