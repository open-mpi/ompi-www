<?
$subject_val = "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 09:52:47 2010" -->
<!-- isoreceived="20100427135247" -->
<!-- sent="Tue, 27 Apr 2010 07:52:32 -0600" -->
<!-- isosent="20100427135232" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI &amp;amp; SGE: bash errors at mpirun" -->
<!-- id="21FE040B-11B6-4FF0-AB92-B3A16C13F94B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1272371919.14852.15.camel_at_defected" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 09:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12820.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12818.php">Jeff Squyres: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12816.php">Frederik Himpe: "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12821.php">Frederik Himpe: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12821.php">Frederik Himpe: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like you have an error in the openmpi module file...
<br>
<p>On Apr 27, 2010, at 6:38 AM, Frederik Himpe wrote:
<br>
<p><span class="quotelev1">&gt; I'm using SGE 6.1 and OpenMPI 1.4.1 built with gridengine support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got this parallel environment defined in SGE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pe_name           openmpi
</span><br>
<span class="quotelev1">&gt; slots             100
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI is installed in its own prefix 
</span><br>
<span class="quotelev1">&gt; (/shared/apps/openmpi/gcc-4.4/1.4.1), and can be loaded by the 
</span><br>
<span class="quotelev1">&gt; environment module (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>) openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I can successfully run this pe job:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N test
</span><br>
<span class="quotelev1">&gt; #$ -q all.q
</span><br>
<span class="quotelev1">&gt; #$ -pe openmpi 20
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; . /etc/profile.d/modules.sh
</span><br>
<span class="quotelev1">&gt; module add sge gmp mpfr gcc openmpi/gcc-4.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This script results in empty test.p[oe]* files and a test.o* file with 
</span><br>
<span class="quotelev1">&gt; different node hostnames, but test.e* contains these errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev1">&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev1">&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev1">&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems somehow the module environment tools are called in a wrong way,
</span><br>
<span class="quotelev1">&gt; but I cannot figure out how this happens. These errors are triggered by 
</span><br>
<span class="quotelev1">&gt; the mpirun command (commenting out mpirun and just leaving the rest of
</span><br>
<span class="quotelev1">&gt; the script intact, does not result in these errors.). I cannot reproduce
</span><br>
<span class="quotelev1">&gt; these errors with any other kind of job, nor do they happen when I login
</span><br>
<span class="quotelev1">&gt; to any node with ssh or when running the bash command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, what exactly does mpirun call which might trigger this error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Frederik Himpe &lt;fhimpe_at_[hidden]&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12820.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12818.php">Jeff Squyres: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12816.php">Frederik Himpe: "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12821.php">Frederik Himpe: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12821.php">Frederik Himpe: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
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
