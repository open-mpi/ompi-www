<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 11:47:00 2008" -->
<!-- isoreceived="20081118164700" -->
<!-- sent="Tue, 18 Nov 2008 09:46:51 -0700" -->
<!-- isosent="20081118164651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="F1CF0F04-163A-44CD-A522-F62C58796CBA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0811180818s398d155ci441dcc21a6850883_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid program<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-18 11:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7333.php">Gabriele Fatigati: "[OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7333.php">Gabriele Fatigati: "[OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, paffinity doesn't know anything about assigning threads  
<br>
to cores. This is actually a behavior of Linux, which only allows  
<br>
paffinity to be set at the process level. So, when you set paffinity  
<br>
on a process, you bind all threads of that process to the specified  
<br>
core(s). You cannot specify that a thread be given a specific core.
<br>
<p>In this case, your two threads/process are sharing the same core and  
<br>
thus contending for it. As you'd expect in that situation, one thread  
<br>
gets the vast majority of the attention, while the other thread is  
<br>
mostly idle.
<br>
<p>If you can upgrade to the beta 1.3 release, try using the slot mapping  
<br>
to assign multiple cores to each process. This will ensure that the  
<br>
threads for that process have exclusive access to those cores, but  
<br>
will not bind a particular thread to one core - the threads can &quot;move  
<br>
around&quot; across the specified set of cores. Your threads will then be  
<br>
able to run without interfering with each other.
<br>
<p>Ralph
<br>
<p><p>On Nov 18, 2008, at 9:18 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; i have a strange problem with mixed program MPI+OPENMP over OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.6. I'm using PJL TASK  GEOMETRY in LSF Scheduler, setting 2 MPI
</span><br>
<span class="quotelev1">&gt; process every compute node, and 2 OMP threads per process. Using
</span><br>
<span class="quotelev1">&gt; paffinity and maffinity, i've noted that over every node, i have 2
</span><br>
<span class="quotelev1">&gt; thread that works 100%, and 2 threads doesn't works, or works very
</span><br>
<span class="quotelev1">&gt; few.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i disable paffinity and maffinity, 4 threads works well, without
</span><br>
<span class="quotelev1">&gt; load imbalance.
</span><br>
<span class="quotelev1">&gt; I don't understand this issue: paffinity and maffinity should map
</span><br>
<span class="quotelev1">&gt; every thread over a specific core, optimizing the cache flow, but i
</span><br>
<span class="quotelev1">&gt; have this without settings there!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can i use paffinity and maffinity in mixed MPI+OpenMP program? Or it
</span><br>
<span class="quotelev1">&gt; works only over MPI thread?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
<li><strong>Next message:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7333.php">Gabriele Fatigati: "[OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7333.php">Gabriele Fatigati: "[OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
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
