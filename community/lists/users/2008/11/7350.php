<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 02:53:54 2008" -->
<!-- isoreceived="20081120075354" -->
<!-- sent="Thu, 20 Nov 2008 08:53:49 +0100" -->
<!-- isosent="20081120075349" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="3a37617f0811192353yc56e5ddo145d1ef1fa58055e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4923CF11.3060800_at_sophia.inria.fr" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 02:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7351.php">Hailperin, Isaac: "[OMPI users] switch between ethernet and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7339.php">Stephen Wornom: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7354.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to assign one thread to one core? Also from code, not
<br>
necessary with OpenMPI option.
<br>
<p>Thanks.
<br>
<p>2008/11/19 Stephen Wornom &lt;stephen.wornom_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok,
</span><br>
<span class="quotelev2">&gt;&gt; but in Ompi 1.3 how can i enable it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may not be relevant, but I could not get a hybrid mpi+OpenMP code to
</span><br>
<span class="quotelev1">&gt; work correctly.
</span><br>
<span class="quotelev1">&gt; Would my problem be related to Gabriele's and perhaps fixed in openmpi 1.3?
</span><br>
<span class="quotelev1">&gt; Stephen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/11/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am afraid it is only available in 1.3 - we didn't backport it to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; series
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 18, 2008, at 10:06 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how can i set &quot;slot mapping&quot; as you told me? With TASK GEOMETRY? Or is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a new 1.3 OpenMPI feature?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2008/11/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately, paffinity doesn't know anything about assigning threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores. This is actually a behavior of Linux, which only allows
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; paffinity
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be set at the process level. So, when you set paffinity on a process,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bind all threads of that process to the specified core(s). You cannot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specify that a thread be given a specific core.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this case, your two threads/process are sharing the same core and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; contending for it. As you'd expect in that situation, one thread gets
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vast majority of the attention, while the other thread is mostly idle.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you can upgrade to the beta 1.3 release, try using the slot mapping
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assign multiple cores to each process. This will ensure that the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that process have exclusive access to those cores, but will not bind a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; particular thread to one core - the threads can &quot;move around&quot; across
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specified set of cores. Your threads will then be able to run without
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interfering with each other.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 18, 2008, at 9:18 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i have a strange problem with mixed program MPI+OPENMP over OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.2.6. I'm using PJL TASK  GEOMETRY in LSF Scheduler, setting 2 MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process every compute node, and 2 OMP threads per process. Using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; paffinity and maffinity, i've noted that over every node, i have 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thread that works 100%, and 2 threads doesn't works, or works very
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; few.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If i disable paffinity and maffinity, 4 threads works well, without
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; load imbalance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I don't understand this issue: paffinity and maffinity should map
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; every thread over a specific core, optimizing the cache flow, but i
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have this without settings there!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can i use paffinity and maffinity in mixed MPI+OpenMP program? Or it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works only over MPI thread?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g.fatigati_at_[hidden]
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; stephen.wornom_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 2004 route des lucioles - BP93
</span><br>
<span class="quotelev1">&gt; Sophia Antipolis
</span><br>
<span class="quotelev1">&gt; 06902 CEDEX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: 04 92 38 50 54
</span><br>
<span class="quotelev1">&gt; Fax: 04 97 15 53 51
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing  Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7351.php">Hailperin, Isaac: "[OMPI users] switch between ethernet and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7339.php">Stephen Wornom: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7354.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
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
