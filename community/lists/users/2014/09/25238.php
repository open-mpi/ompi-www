<?
$subject_val = "[OMPI users] SGE and openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 06:17:19 2014" -->
<!-- isoreceived="20140903101719" -->
<!-- sent="Wed, 03 Sep 2014 12:17:17 +0200" -->
<!-- isosent="20140903101717" -->
<!-- name="Donato Pera" -->
<!-- email="donato.pera_at_[hidden]" -->
<!-- subject="[OMPI users] SGE and openMPI" -->
<!-- id="5406EAAD.7090401_at_dm.univaq.it" -->
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
<strong>Subject:</strong> [OMPI users] SGE and openMPI<br>
<strong>From:</strong> Donato Pera (<em>donato.pera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 06:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25237.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm using Rocks 5.4.3 with SGE 6.1 I installed
<br>
a new version of openMPI 1.6.5 when I run
<br>
a script using SGE+openMPI (1.6.5) in a single node
<br>
I don't have any problems but when I try to use more nodes
<br>
I get this error:
<br>
<p><p>A hostfile was provided that contains at least one node not
<br>
present in the allocation:
<br>
<p>&nbsp;&nbsp;hostfile:  /tmp/21202.1.parallel.q/machines
<br>
&nbsp;&nbsp;node:      compute-2-4
<br>
<p>If you are operating in a resource-managed environment, then only
<br>
nodes that are in the allocation can be used in the hostfile. You
<br>
may find relative node syntax to be a useful alternative to
<br>
specifying absolute node names see the orte_hosts man page for
<br>
further information.
<br>
--------------------------------------------------------------------------
<br>
rm: cannot remove `/tmp/21202.1.parallel.q/rsh': No such file or directory
<br>
--------------------------------------------------------------------------
<br>
<p><p>I send also my SGE script:
<br>
<p>#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -pe mpi 64
<br>
#$ -cwd
<br>
#$ -o ./file.out
<br>
#$ -e ./file.err
<br>
<p>export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
<br>
export OMP_NUM_THREADS=1
<br>
<p>CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
<br>
PP_PATH=/home/tanzi
<br>
<p>/home/SWcbbc/openmpi-1.6.5/bin/mpirun -np 64 -machinefile 
<br>
$TMPDIR/machines  
<br>
${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/ &gt; out
<br>
<p><p>I don't understand my mistake
<br>
<p>Regards D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25237.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25239.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
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
