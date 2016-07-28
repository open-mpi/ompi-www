<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:17:59 2011" -->
<!-- isoreceived="20110107151759" -->
<!-- sent="Fri, 07 Jan 2011 07:17:39 -0800" -->
<!-- isosent="20110107151739" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance" -->
<!-- id="4D272E93.60402_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A13372E5-2117-4BF4-9FFE-298067E7833C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15312.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/7/2011 6:49 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that hyperthreading can only be activated/deactivated at boot time -- once the core resources are allocated to hyperthreads, they can't be changed while running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether disabling the hyperthreads or simply telling Linux not to schedule on them makes a difference performance-wise remains to be seen.  I've never had the time to do a little benchmarking to quantify the difference.  If someone could rustle up a few cycles (get it?) to test out what the real-world performance difference is between disabling hyperthreading in the BIOS vs. telling Linux to ignore the hyperthreads, that would be awesome.  I'd love to see such results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My personal guess is that the difference is in the noise.  But that's a guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Applications which depend on availability of full size instruction 
<br>
lookaside buffer would be candidates for better performance with 
<br>
hyperthreads completely disabled.  Many HPC applications don't stress 
<br>
ITLB, but some do.
<br>
Most of the important resources are allocated dynamically between 
<br>
threads, but the ITLB is an exception.
<br>
We reported results of an investigation on Intel Nehalem 4-core 
<br>
hyperthreading where geometric mean performance of standard benchmarks 
<br>
for certain commercial applications was 2% better with hyperthreading 
<br>
disabled at boot time, compared with best 1 rank per core scheduling 
<br>
with hyperthreading enabled.  Needless to say, the report wasn't popular 
<br>
with marketing.  I haven't seen an equivalent investigation for the 
<br>
6-core CPUs, where various strange performance effects have been noted, 
<br>
so, as Jeff said, the hyperthreading effect could be &quot;in the noise.&quot;
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15312.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
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
