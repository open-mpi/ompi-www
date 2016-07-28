<?
$subject_val = "[OMPI users] Open MPI not using parameters passed from PBS scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 13:36:33 2015" -->
<!-- isoreceived="20151203183633" -->
<!-- sent="Thu, 3 Dec 2015 18:36:29 +0000" -->
<!-- isosent="20151203183629" -->
<!-- name="Gregory Cary" -->
<!-- email="gregcary_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI not using parameters passed from PBS scheduler" -->
<!-- id="DBB225AB2F60D0498B61F824877398F4235DA7_at_PGH-MSGMB-03.andrew.ad.cmu.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI not using parameters passed from PBS scheduler<br>
<strong>From:</strong> Gregory Cary (<em>gregcary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-03 13:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<li><strong>Reply:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having difficulty running mpiblast using the code pasted below. The goal is to run the blast search in parallel on 3 different nodes (2 processors, 8 CPU cores, and 24 GB RAM per node). Whenever I run mpiexec without the -n parameter I get the error message: &quot;Sorry, mpiBLAST must be run on 3 or more nodes&quot;. Whenever I run mpiexec and pass it &quot;-n 24&quot; the job runs, but it takes and excessive amount of time (&gt;8h to search 10 records) and only one of the three designated nodes is active (memory usage, cpu %, network I/O) during the job while the other allocated nodes are quiet. 
<br>
<p>What am I doing wrong here? It seems as though mpiexec isn't getting the relevant info about number of allocated nodes and/or the identities of the specific hosts from the PBS scheduler. Can anyone help me out with this?
<br>
<p>Much appreciated!
<br>
----------------------------
<br>
Greg Cary, Ph.D.
<br>
Carnegie Mellon University
<br>
Dept. of Biological Sciences
<br>
Hinman Lab
<br>
412-268-9290
<br>
<p>#!/bin/sh
<br>
#PBS -N MPI_BLAST -e error_log.txt
<br>
#PBS -l nodes=3:ppn=8 -n
<br>
#PBS -l walltime=24:00:00
<br>
#PBS -M gregcary_at_[hidden] -m abe
<br>
#PBS -q pool1
<br>
<p>mpiexec\
<br>
mpiblast -p blastp -d nr -e 1e-5 -m 7 -v 10000\
<br>
--removedb\
<br>
--time-profile=time-profile_1.txt\
<br>
-i ~/fasta_files/test2.fa\
<br>
-o ~/fasta_files/blast_results/mpi_test1_10recs.xml<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<li><strong>Reply:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
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
