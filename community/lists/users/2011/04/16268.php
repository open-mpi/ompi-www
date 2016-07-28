<?
$subject_val = "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 09:24:54 2011" -->
<!-- isoreceived="20110418132454" -->
<!-- sent="Mon, 18 Apr 2011 15:24:42 +0200" -->
<!-- isosent="20110418132442" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed) (Reuti)" -->
<!-- id="7FC76CBD-4FEE-45E4-8C0B-7679C1AE426B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinVPDZdccZ2OvZuZcOSN6H5FAn2vQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-18 09:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16269.php">chenjie gu: "[OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16267.php">Jeff Squyres: "Re: [OMPI users] Ofed v1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 17.04.2011 um 01:21 schrieb Derrick LIN:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, does `mpiexec` point to the correct one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't really get this. I only installed one and only one OpenMPI on the node. There shouldn't have another 'mpiexec' on the system.
</span><br>
<p>It could be one from any other MPI implementation by accident.
<br>
<p><p><span class="quotelev1">&gt; It's worthy to mention that every node is deployed from a master image. So everything is exactly the same except IP and DNS name.
</span><br>
<span class="quotelev2">&gt; &gt; I thought you compiled it on your own with --with-sge. What about: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pwbcad_at_sgeqexec01:~$ ompi_info | grep grid
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<p>Fine.
<br>
<p><p><span class="quotelev1">&gt; Is there any location I can find a more meaningful OpenMPI log?
</span><br>
<p>Can you run a simple `mpiexec hostname` in the script?
<br>
<p><p><span class="quotelev1">&gt; I will try to install openmpi 1.4.3 and see if that works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to confirm one more thing: does SGE's master host need to have OpenMPI installed? Is it relevant?
</span><br>
<p>In principle: no. But often it's installed too, as you will compile on either the master machine or a dedicated login server.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Many thanks Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Derrick
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
<li><strong>Next message:</strong> <a href="16269.php">chenjie gu: "[OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16267.php">Jeff Squyres: "Re: [OMPI users] Ofed v1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
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
