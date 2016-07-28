<?
$subject_val = "Re: [OMPI users] Job problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 08:00:30 2009" -->
<!-- isoreceived="20090108130030" -->
<!-- sent="Thu, 8 Jan 2009 14:00:25 +0100" -->
<!-- isosent="20090108130025" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job problem" -->
<!-- id="3a37617f0901080500w2b3f833btd4943f92b575cb3f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0901080456w278b319cy8579b063c6303b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 08:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7668.php">Ralph Castain: "Re: [OMPI users] Job problem"</a>
<li><strong>Previous message:</strong> <a href="7666.php">Gabriele Fatigati: "[OMPI users] Job problem"</a>
<li><strong>In reply to:</strong> <a href="7666.php">Gabriele Fatigati: "[OMPI users] Job problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7668.php">Ralph Castain: "Re: [OMPI users] Job problem"</a>
<li><strong>Reply:</strong> <a href="7668.php">Ralph Castain: "Re: [OMPI users] Job problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More precisely:
<br>
<p>/cineca/sysprod/lsf/7.0/linux2.6-glibc2.3-x86_64/bin/TaskStarter
<br>
&nbsp;The requested hosts were:
<br>
&nbsp;&nbsp;&nbsp;node0911
<br>
<p>&nbsp;Verify that you have mapped the allocated resources properly using the
<br>
&nbsp;--host specification.
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;[node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
<br>
&nbsp;base/rmaps_base_support_fns.c at line 225
<br>
&nbsp;[node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
<br>
&nbsp;rmaps_rr.c at line 478
<br>
&nbsp;[node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
<br>
&nbsp;base/rmaps_base_map_job.c at line 210
<br>
&nbsp;[node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
<br>
&nbsp;rmgr_urm.c at line 372
<br>
&nbsp;[node0862:29190] mpirun: spawn failed with errno=-2
<br>
<p>2009/1/8 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear OpenMPI Developers,
</span><br>
<span class="quotelev1">&gt; i'm running my jobs under OpenMPI 1.2.5 Intel compiled. Our cluster
</span><br>
<span class="quotelev1">&gt; has Infiniband net and LSF scheduler. Since yesterday, I have a
</span><br>
<span class="quotelev1">&gt; strange problem over some nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev2">&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev2">&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev2">&gt;&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev2">&gt;&gt; [node0862:29190] mpirun: spawn failed with errno=-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand if the problem depends by OpenMPI, Infiniband or
</span><br>
<span class="quotelev1">&gt; other. Any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
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
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7668.php">Ralph Castain: "Re: [OMPI users] Job problem"</a>
<li><strong>Previous message:</strong> <a href="7666.php">Gabriele Fatigati: "[OMPI users] Job problem"</a>
<li><strong>In reply to:</strong> <a href="7666.php">Gabriele Fatigati: "[OMPI users] Job problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7668.php">Ralph Castain: "Re: [OMPI users] Job problem"</a>
<li><strong>Reply:</strong> <a href="7668.php">Ralph Castain: "Re: [OMPI users] Job problem"</a>
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
