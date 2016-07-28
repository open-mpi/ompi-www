<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 12:06:58 2008" -->
<!-- isoreceived="20081118170658" -->
<!-- sent="Tue, 18 Nov 2008 18:06:53 +0100" -->
<!-- isosent="20081118170653" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="3a37617f0811180906p5de2e4bbj5d792917d1563fa9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1CF0F04-163A-44CD-A522-F62C58796CBA_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-11-18 12:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7336.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7336.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7336.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
how can i set &quot;slot mapping&quot; as you told me? With TASK GEOMETRY? Or is
<br>
a new 1.3 OpenMPI feature?
<br>
<p>Thanks.
<br>
<p>2008/11/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Unfortunately, paffinity doesn't know anything about assigning threads to
</span><br>
<span class="quotelev1">&gt; cores. This is actually a behavior of Linux, which only allows paffinity to
</span><br>
<span class="quotelev1">&gt; be set at the process level. So, when you set paffinity on a process, you
</span><br>
<span class="quotelev1">&gt; bind all threads of that process to the specified core(s). You cannot
</span><br>
<span class="quotelev1">&gt; specify that a thread be given a specific core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, your two threads/process are sharing the same core and thus
</span><br>
<span class="quotelev1">&gt; contending for it. As you'd expect in that situation, one thread gets the
</span><br>
<span class="quotelev1">&gt; vast majority of the attention, while the other thread is mostly idle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can upgrade to the beta 1.3 release, try using the slot mapping to
</span><br>
<span class="quotelev1">&gt; assign multiple cores to each process. This will ensure that the threads for
</span><br>
<span class="quotelev1">&gt; that process have exclusive access to those cores, but will not bind a
</span><br>
<span class="quotelev1">&gt; particular thread to one core - the threads can &quot;move around&quot; across the
</span><br>
<span class="quotelev1">&gt; specified set of cores. Your threads will then be able to run without
</span><br>
<span class="quotelev1">&gt; interfering with each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2008, at 9:18 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; i have a strange problem with mixed program MPI+OPENMP over OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.6. I'm using PJL TASK  GEOMETRY in LSF Scheduler, setting 2 MPI
</span><br>
<span class="quotelev2">&gt;&gt; process every compute node, and 2 OMP threads per process. Using
</span><br>
<span class="quotelev2">&gt;&gt; paffinity and maffinity, i've noted that over every node, i have 2
</span><br>
<span class="quotelev2">&gt;&gt; thread that works 100%, and 2 threads doesn't works, or works very
</span><br>
<span class="quotelev2">&gt;&gt; few.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If i disable paffinity and maffinity, 4 threads works well, without
</span><br>
<span class="quotelev2">&gt;&gt; load imbalance.
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand this issue: paffinity and maffinity should map
</span><br>
<span class="quotelev2">&gt;&gt; every thread over a specific core, optimizing the cache flow, but i
</span><br>
<span class="quotelev2">&gt;&gt; have this without settings there!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can i use paffinity and maffinity in mixed MPI+OpenMP program? Or it
</span><br>
<span class="quotelev2">&gt;&gt; works only over MPI thread?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
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
<li><strong>Next message:</strong> <a href="7336.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7336.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7336.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
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
