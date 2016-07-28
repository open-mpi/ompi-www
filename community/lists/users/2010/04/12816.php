<?
$subject_val = "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 08:38:55 2010" -->
<!-- isoreceived="20100427123855" -->
<!-- sent="Tue, 27 Apr 2010 14:38:39 +0200" -->
<!-- isosent="20100427123839" -->
<!-- name="Frederik Himpe" -->
<!-- email="fhimpe_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI &amp;amp; SGE: bash errors at mpirun" -->
<!-- id="1272371919.14852.15.camel_at_defected" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun<br>
<strong>From:</strong> Frederik Himpe (<em>fhimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 08:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12815.php">Timur Magomedov: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12824.php">Dave Love: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12826.php">Edmund Sumbar: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using SGE 6.1 and OpenMPI 1.4.1 built with gridengine support.
<br>
<p>I've got this parallel environment defined in SGE:
<br>
<p>pe_name           openmpi
<br>
slots             100
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
<p>OpenMPI is installed in its own prefix 
<br>
(/shared/apps/openmpi/gcc-4.4/1.4.1), and can be loaded by the 
<br>
environment module (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>) openmpi.
<br>
<p>Now I can successfully run this pe job:
<br>
<p>#!/bin/bash
<br>
#$ -N test
<br>
#$ -q all.q
<br>
#$ -pe openmpi 20
<br>
#$ -cwd
<br>
<p>. /etc/profile.d/modules.sh
<br>
module add sge gmp mpfr gcc openmpi/gcc-4.4
<br>
<p>mpirun -np $NSLOTS hostname
<br>
<p>This script results in empty test.p[oe]* files and a test.o* file with 
<br>
different node hostnames, but test.e* contains these errors:
<br>
<p>bash: module: line 1: syntax error: unexpected end of file
<br>
bash: error importing function definition for `module'
<br>
bash: module: line 1: syntax error: unexpected end of file
<br>
bash: error importing function definition for `module'
<br>
<p>It seems somehow the module environment tools are called in a wrong way,
<br>
but I cannot figure out how this happens. These errors are triggered by 
<br>
the mpirun command (commenting out mpirun and just leaving the rest of
<br>
the script intact, does not result in these errors.). I cannot reproduce
<br>
these errors with any other kind of job, nor do they happen when I login
<br>
to any node with ssh or when running the bash command.
<br>
<p>So, what exactly does mpirun call which might trigger this error?
<br>
<p><pre>
-- 
Frederik Himpe &lt;fhimpe_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12815.php">Timur Magomedov: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12824.php">Dave Love: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="12826.php">Edmund Sumbar: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
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
