<?
$subject_val = "Re: [OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 13:24:41 2012" -->
<!-- isoreceived="20120111182441" -->
<!-- sent="Wed, 11 Jan 2012 13:24:37 -0500" -->
<!-- isosent="20120111182437" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi + bash + GE + modules" -->
<!-- id="8CC6608D-489F-4C8B-972F-AF42CCF35B62_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D7ABFEB8540934DB54AECDF259D0D601870FDEE3D_at_ICE-MBX-1.ice.nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi + bash + GE + modules<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 13:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18140.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18138.php">Mark Suhovecky: "[OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark
<br>
<p>I wonder if you need to initialize the module command environment inside your SGE 
<br>
bash submission script:
<br>
<p>$MODULESHOME/init/&lt;shell&gt; 
<br>
<p>where &lt;shell&gt; is bash in this case.   See 'man module' for more details.
<br>
<p>This would be before you actually invoke the module command:
<br>
<p>module load openmpi
<br>
<p>I am guessing your users' default shell is csh, and they may perhaps have a 'csh'
<br>
module environment initialized by their .cshrc, but the job submission script is in bash.
<br>
<p>Anyway, we use Torque, not SGE, so this is just a guess.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On Jan 11, 2012, at 12:42 PM, Mark Suhovecky wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We run OpenMPI 1.4.3 on RHEL5 in a cluster environment.
</span><br>
<span class="quotelev1">&gt; We use Univa Grid Engine 8.0.1 (an SGE spinoff) for job submission.
</span><br>
<span class="quotelev1">&gt; We've just recently begun supporting the bash shell for submitted jobs,
</span><br>
<span class="quotelev1">&gt; and are seeing a problem with submitted MPI jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our software environment is manged with Modules package (version 3.2.8),
</span><br>
<span class="quotelev1">&gt; so a typical job submission looks something like this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ &lt;some GE directives&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module load ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the mpiexec is run, we'll see the following errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev1">&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The module int file contains this function, which is what I'm assuming all the fuss is about:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module() { eval `/opt/crc/Modules/$MODULE_VERSION/bin/modulecmd bash $*`; }
</span><br>
<span class="quotelev1">&gt; export -f module
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There will be multiple instances of the error generated- for example, if  I'm
</span><br>
<span class="quotelev1">&gt; running a 48 core mpi-12 job spread across 4 machines,
</span><br>
<span class="quotelev1">&gt; I'll see these errors printed 3 times. I don't see these errors
</span><br>
<span class="quotelev1">&gt; on single-machine submitted jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've found posts for this error on bash, modules, and SGE lists, and have
</span><br>
<span class="quotelev1">&gt; tried a number of suggested workarounds that all involve changing how I
</span><br>
<span class="quotelev1">&gt; source modules (in /etc/profile.d, .bash_profile, via BASH_ENV), but
</span><br>
<span class="quotelev1">&gt; none have gotten rid of this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since we only see this problem with MPI, I figured it couldn't hurt to post
</span><br>
<span class="quotelev1">&gt; here and see if any of you have had this symptom, and what your solution was.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should mention that running a submitted MPI job under csh works just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark Suhovecky
</span><br>
<span class="quotelev1">&gt; HPC System Administrator
</span><br>
<span class="quotelev1">&gt; Center for Research Computing
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
</span><br>
<span class="quotelev1">&gt; suhovecky at nd.edu
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
<li><strong>Next message:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18140.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18138.php">Mark Suhovecky: "[OMPI users] ompi + bash + GE + modules"</a>
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
