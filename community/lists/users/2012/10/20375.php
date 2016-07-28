<?
$subject_val = "Re: [OMPI users] crashes in VASP with openmpi 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 09:34:51 2012" -->
<!-- isoreceived="20121002133451" -->
<!-- sent="Tue, 2 Oct 2012 08:34:43 -0500" -->
<!-- isosent="20121002133443" -->
<!-- name="Albert Everett" -->
<!-- email="aeeverett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] crashes in VASP with openmpi 1.6.x" -->
<!-- id="7C3D1950-5066-4509-B8AA-7B144788EF0E_at_ualr.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EED2AB2F-8B78-4F8C-8824-7E21BF25119E_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] crashes in VASP with openmpi 1.6.x<br>
<strong>From:</strong> Albert Everett (<em>aeeverett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 09:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20376.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20374.php">Noam Bernstein: "[OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20374.php">Noam Bernstein: "[OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For what it's worth, on our cluster I currently do compile VASP with OpenMPI but we do not include ScaLAPACK because we didn't see a speedup from including it. So far we haven't seen improvements from using OpenMP in VASP or MKL, so we're not doing much with OpenMP either.
<br>
<p>On our shared memory machine we will probably do more with OpenMP, especially for MKL.
<br>
<p>We're relatively new to VASP, though, so we're eager to hear what works for other people. We're also curious to see how 5.3.x behavior compares with 5.2.x.
<br>
<p>Albert
<br>
<p>On Oct 2, 2012, at 8:11 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi - I've been trying to run VASP 5.2.12 with ScaLAPACK and openmpi 
</span><br>
<span class="quotelev1">&gt; 1.6.x on a single 32 core (4 x 8 core) Opteron node, purely shared memory.
</span><br>
<span class="quotelev1">&gt; We've always had occasional hangs with older OpenMPI versions
</span><br>
<span class="quotelev1">&gt; (1.4.3 and 1.5.5) on these machines, but infrequent enough to be usable 
</span><br>
<span class="quotelev1">&gt; and not worth my time to debug.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, now that I've got to the 1.6 series (1.6.2, specifically), we're
</span><br>
<span class="quotelev1">&gt; getting frequent crashes, mostly but maybe not entirely deterministic.  The 
</span><br>
<span class="quotelev1">&gt; symptom is a segmentation fault in libopmpi.so, someplace under a call to 
</span><br>
<span class="quotelev1">&gt; PZHEEVX, but in the traceback only routines names in VASP are being printed,  
</span><br>
<span class="quotelev1">&gt; despite the fact that I have scalapack compiled with -g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ScaLAPACK is v 1.8.0, because with v 2.0.2, it completely fails to converge.  
</span><br>
<span class="quotelev1">&gt; I've tried a couple varieties of the intel compiler (11.1.080 and 12.1.6.631), 
</span><br>
<span class="quotelev1">&gt; and a couple of versions of ACML (4.4.0 and 5.2.0).   ACML version seems
</span><br>
<span class="quotelev1">&gt; not to matter, and the two varieties of ifort give the same type of behavior, but
</span><br>
<span class="quotelev1">&gt; crash in different places in the run.  When I switch compilers and acml/scalapack 
</span><br>
<span class="quotelev1">&gt; libraries I recompile everything, except fpr OpenMPI which is always compiled with 
</span><br>
<span class="quotelev1">&gt; ifort 11.1.080.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These crashes do not seem to occur on our 2 x 4 core Xeon + IB QDR nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone seen anything like this, or has any idea how to get additional 
</span><br>
<span class="quotelev1">&gt; useful information, for example traceback information so I can figure out what mpi 
</span><br>
<span class="quotelev1">&gt; routine is having problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 													thanks,
</span><br>
<span class="quotelev1">&gt; 													Noam
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
<li><strong>Next message:</strong> <a href="20376.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20374.php">Noam Bernstein: "[OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20374.php">Noam Bernstein: "[OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
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
