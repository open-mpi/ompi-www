<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 13:39:09 2008" -->
<!-- isoreceived="20081118183909" -->
<!-- sent="Tue, 18 Nov 2008 11:39:02 -0700" -->
<!-- isosent="20081118183902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="DE99B190-96B7-44B5-A4F3-85E4D0C38712_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0811180906p5de2e4bbj5d792917d1563fa9_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-11-18 13:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am afraid it is only available in 1.3 - we didn't backport it to the  
<br>
1.2 series
<br>
<p><p>On Nov 18, 2008, at 10:06 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; how can i set &quot;slot mapping&quot; as you told me? With TASK GEOMETRY? Or is
</span><br>
<span class="quotelev1">&gt; a new 1.3 OpenMPI feature?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/11/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, paffinity doesn't know anything about assigning  
</span><br>
<span class="quotelev2">&gt;&gt; threads to
</span><br>
<span class="quotelev2">&gt;&gt; cores. This is actually a behavior of Linux, which only allows  
</span><br>
<span class="quotelev2">&gt;&gt; paffinity to
</span><br>
<span class="quotelev2">&gt;&gt; be set at the process level. So, when you set paffinity on a  
</span><br>
<span class="quotelev2">&gt;&gt; process, you
</span><br>
<span class="quotelev2">&gt;&gt; bind all threads of that process to the specified core(s). You cannot
</span><br>
<span class="quotelev2">&gt;&gt; specify that a thread be given a specific core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case, your two threads/process are sharing the same core  
</span><br>
<span class="quotelev2">&gt;&gt; and thus
</span><br>
<span class="quotelev2">&gt;&gt; contending for it. As you'd expect in that situation, one thread  
</span><br>
<span class="quotelev2">&gt;&gt; gets the
</span><br>
<span class="quotelev2">&gt;&gt; vast majority of the attention, while the other thread is mostly  
</span><br>
<span class="quotelev2">&gt;&gt; idle.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can upgrade to the beta 1.3 release, try using the slot  
</span><br>
<span class="quotelev2">&gt;&gt; mapping to
</span><br>
<span class="quotelev2">&gt;&gt; assign multiple cores to each process. This will ensure that the  
</span><br>
<span class="quotelev2">&gt;&gt; threads for
</span><br>
<span class="quotelev2">&gt;&gt; that process have exclusive access to those cores, but will not  
</span><br>
<span class="quotelev2">&gt;&gt; bind a
</span><br>
<span class="quotelev2">&gt;&gt; particular thread to one core - the threads can &quot;move around&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; across the
</span><br>
<span class="quotelev2">&gt;&gt; specified set of cores. Your threads will then be able to run without
</span><br>
<span class="quotelev2">&gt;&gt; interfering with each other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2008, at 9:18 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have a strange problem with mixed program MPI+OPENMP over OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.6. I'm using PJL TASK  GEOMETRY in LSF Scheduler, setting 2 MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process every compute node, and 2 OMP threads per process. Using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity and maffinity, i've noted that over every node, i have 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread that works 100%, and 2 threads doesn't works, or works very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If i disable paffinity and maffinity, 4 threads works well, without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; load imbalance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't understand this issue: paffinity and maffinity should map
</span><br>
<span class="quotelev3">&gt;&gt;&gt; every thread over a specific core, optimizing the cache flow, but i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have this without settings there!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can i use paffinity and maffinity in mixed MPI+OpenMP program? Or it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works only over MPI thread?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati_at_[hidden]
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7335.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
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
