<?
$subject_val = "[OMPI users] Job problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 07:56:49 2009" -->
<!-- isoreceived="20090108125649" -->
<!-- sent="Thu, 8 Jan 2009 13:56:44 +0100" -->
<!-- isosent="20090108125644" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Job problem" -->
<!-- id="3a37617f0901080456w278b319cy8579b063c6303b6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Job problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 07:56:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<li><strong>Previous message:</strong> <a href="7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<li><strong>Reply:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Developers,
<br>
i'm running my jobs under OpenMPI 1.2.5 Intel compiled. Our cluster
<br>
has Infiniband net and LSF scheduler. Since yesterday, I have a
<br>
strange problem over some nodes:
<br>
<p>[node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
<br>
<span class="quotelev1">&gt; base/rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [node0862:29190] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [node0862:29190] mpirun: spawn failed with errno=-2
</span><br>
<p>I don't understand if the problem depends by OpenMPI, Infiniband or
<br>
other. Any idea?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<li><strong>Previous message:</strong> <a href="7665.php">Thomas Ropars: "Re: [OMPI users] Error message when using MPI_Type_struct()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
<li><strong>Reply:</strong> <a href="7667.php">Gabriele Fatigati: "Re: [OMPI users] Job problem"</a>
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
