<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 03:32:22 2008" -->
<!-- isoreceived="20081119083222" -->
<!-- sent="Wed, 19 Nov 2008 09:32:17 +0100" -->
<!-- isosent="20081119083217" -->
<!-- name="Stephen Wornom" -->
<!-- email="stephen.wornom_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="4923CF11.3060800_at_sophia.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3a37617f0811181146p57a4c2ffh71d4b58a41000ab7_at_mail.gmail.com" -->
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
<strong>From:</strong> Stephen Wornom (<em>stephen.wornom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 03:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7338.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)"</a>
<li><strong>In reply to:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7350.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7350.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati wrote:
<br>
<span class="quotelev1">&gt; Ok,
</span><br>
<span class="quotelev1">&gt; but in Ompi 1.3 how can i enable it?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
This may not be relevant, but I could not get a hybrid mpi+OpenMP code 
<br>
to work correctly.
<br>
Would my problem be related to Gabriele's and perhaps fixed in openmpi 1.3?
<br>
Stephen
<br>
<span class="quotelev1">&gt; 2008/11/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am afraid it is only available in 1.3 - we didn't backport it to the 1.2
</span><br>
<span class="quotelev2">&gt;&gt; series
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2008, at 10:06 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how can i set &quot;slot mapping&quot; as you told me? With TASK GEOMETRY? Or is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a new 1.3 OpenMPI feature?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2008/11/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, paffinity doesn't know anything about assigning threads to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores. This is actually a behavior of Linux, which only allows paffinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be set at the process level. So, when you set paffinity on a process, you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bind all threads of that process to the specified core(s). You cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify that a thread be given a specific core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In this case, your two threads/process are sharing the same core and thus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contending for it. As you'd expect in that situation, one thread gets the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vast majority of the attention, while the other thread is mostly idle.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you can upgrade to the beta 1.3 release, try using the slot mapping to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assign multiple cores to each process. This will ensure that the threads
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that process have exclusive access to those cores, but will not bind a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; particular thread to one core - the threads can &quot;move around&quot; across the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specified set of cores. Your threads will then be able to run without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfering with each other.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 18, 2008, at 9:18 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i have a strange problem with mixed program MPI+OPENMP over OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2.6. I'm using PJL TASK  GEOMETRY in LSF Scheduler, setting 2 MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process every compute node, and 2 OMP threads per process. Using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; paffinity and maffinity, i've noted that over every node, i have 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thread that works 100%, and 2 threads doesn't works, or works very
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; few.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If i disable paffinity and maffinity, 4 threads works well, without
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; load imbalance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't understand this issue: paffinity and maffinity should map
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; every thread over a specific core, optimizing the cache flow, but i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have this without settings there!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can i use paffinity and maffinity in mixed MPI+OpenMP program? Or it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works only over MPI thread?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
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
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
stephen.wornom_at_[hidden]
2004 route des lucioles - BP93
Sophia Antipolis
06902 CEDEX
		
Tel: 04 92 38 50 54
Fax: 04 97 15 53 51
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7338.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Memchecker report on v1.3b2 (includes potential bug reports)"</a>
<li><strong>In reply to:</strong> <a href="7337.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7350.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7350.php">Gabriele Fatigati: "Re: [OMPI users] Hybrid program"</a>
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
