<?
$subject_val = "[OMPI users] crashes in VASP with openmpi 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 09:11:38 2012" -->
<!-- isoreceived="20121002131138" -->
<!-- sent="Tue, 2 Oct 2012 09:11:34 -0400" -->
<!-- isosent="20121002131134" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="[OMPI users] crashes in VASP with openmpi 1.6.x" -->
<!-- id="EED2AB2F-8B78-4F8C-8824-7E21BF25119E_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> [OMPI users] crashes in VASP with openmpi 1.6.x<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 09:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi - I've been trying to run VASP 5.2.12 with ScaLAPACK and openmpi 
<br>
1.6.x on a single 32 core (4 x 8 core) Opteron node, purely shared memory.
<br>
We've always had occasional hangs with older OpenMPI versions
<br>
(1.4.3 and 1.5.5) on these machines, but infrequent enough to be usable 
<br>
and not worth my time to debug.  
<br>
<p>However, now that I've got to the 1.6 series (1.6.2, specifically), we're
<br>
getting frequent crashes, mostly but maybe not entirely deterministic.  The 
<br>
symptom is a segmentation fault in libopmpi.so, someplace under a call to 
<br>
PZHEEVX, but in the traceback only routines names in VASP are being printed,  
<br>
despite the fact that I have scalapack compiled with -g.
<br>
<p>ScaLAPACK is v 1.8.0, because with v 2.0.2, it completely fails to converge.  
<br>
I've tried a couple varieties of the intel compiler (11.1.080 and 12.1.6.631), 
<br>
and a couple of versions of ACML (4.4.0 and 5.2.0).   ACML version seems
<br>
not to matter, and the two varieties of ifort give the same type of behavior, but
<br>
crash in different places in the run.  When I switch compilers and acml/scalapack 
<br>
libraries I recompile everything, except fpr OpenMPI which is always compiled with 
<br>
ifort 11.1.080.
<br>
<p>These crashes do not seem to occur on our 2 x 4 core Xeon + IB QDR nodes.
<br>
<p>Has anyone seen anything like this, or has any idea how to get additional 
<br>
useful information, for example traceback information so I can figure out what mpi 
<br>
routine is having problems?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
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
