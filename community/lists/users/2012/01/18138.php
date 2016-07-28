<?
$subject_val = "[OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 12:41:30 2012" -->
<!-- isoreceived="20120111174130" -->
<!-- sent="Wed, 11 Jan 2012 12:42:22 -0500" -->
<!-- isosent="20120111174222" -->
<!-- name="Mark Suhovecky" -->
<!-- email="suhovecky_at_[hidden]" -->
<!-- subject="[OMPI users] ompi + bash + GE + modules" -->
<!-- id="8D7ABFEB8540934DB54AECDF259D0D601870FDEE3D_at_ICE-MBX-1.ice.nd.edu" -->
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
<strong>Subject:</strong> [OMPI users] ompi + bash + GE + modules<br>
<strong>From:</strong> Mark Suhovecky (<em>suhovecky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 12:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi-
<br>
<p>We run OpenMPI 1.4.3 on RHEL5 in a cluster environment.
<br>
We use Univa Grid Engine 8.0.1 (an SGE spinoff) for job submission.
<br>
We've just recently begun supporting the bash shell for submitted jobs,
<br>
and are seeing a problem with submitted MPI jobs.
<br>
<p>Our software environment is manged with Modules package (version 3.2.8),
<br>
so a typical job submission looks something like this
<br>
<p>#!/bin/bash
<br>
#$ &lt;some GE directives&gt;
<br>
<p>module load ompi
<br>
<p>mpiexec 
<br>
<p>when the mpiexec is run, we'll see the following errors
<br>
<p><p>bash: module: line 1: syntax error: unexpected end of file
<br>
bash: error importing function definition for `module'
<br>
<p>The module int file contains this function, which is what I'm assuming all the fuss is about:
<br>
<p>module() { eval `/opt/crc/Modules/$MODULE_VERSION/bin/modulecmd bash $*`; }
<br>
export -f module
<br>
<p>There will be multiple instances of the error generated- for example, if  I'm
<br>
running a 48 core mpi-12 job spread across 4 machines,
<br>
I'll see these errors printed 3 times. I don't see these errors
<br>
on single-machine submitted jobs.
<br>
<p>I've found posts for this error on bash, modules, and SGE lists, and have
<br>
tried a number of suggested workarounds that all involve changing how I
<br>
source modules (in /etc/profile.d, .bash_profile, via BASH_ENV), but
<br>
none have gotten rid of this error.
<br>
<p>Since we only see this problem with MPI, I figured it couldn't hurt to post
<br>
here and see if any of you have had this symptom, and what your solution was.
<br>
<p>I should mention that running a submitted MPI job under csh works just fine.
<br>
<p>Thanks for any help,
<br>
<p>Mark
<br>
<p>Mark Suhovecky
<br>
HPC System Administrator
<br>
Center for Research Computing
<br>
University of Notre Dame
<br>
suhovecky at nd.edu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
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
