<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 15:09:09 2010" -->
<!-- isoreceived="20100506190909" -->
<!-- sent="Thu, 06 May 2010 12:10:34 -0700" -->
<!-- isosent="20100506191034" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE3142A.2030000_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE303FF.4020708_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 15:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12941.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Previous message:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the same errors that I reported in my very first email, if I 
</span><br>
<span class="quotelev1">&gt; increase the number of processes to 16, to explore the hyperthreading 
</span><br>
<span class="quotelev1">&gt; range.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is using &quot;sm&quot; (i.e. not excluded in the mca config file), and 
</span><br>
<span class="quotelev1">&gt; btl_sm_num_fifos (mpiexec command line)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machine hangs, requires a hard reboot, etc, etc, as reported earlier.
</span><br>
<p>Okay.  I think this is different from trac 2043, then, since that 
<br>
involved a race condition that can be worked around by giving each 
<br>
sender its own FIFO.
<br>
<p><span class="quotelev1">&gt; So, I guess the conclusion is that I can use sm, but I have to remain 
</span><br>
<span class="quotelev1">&gt; within the range of physical cores (8), not oversubscribe, not try to 
</span><br>
<span class="quotelev1">&gt; explore the HT range.  Should I expect it to work also for np&gt;number 
</span><br>
<span class="quotelev1">&gt; of physical cores?
</span><br>
<p>Yes, I believe that would be a reasonable expectation (under 
<br>
circumstances other than the ones you're facing, in any case).  I just 
<br>
ran the examples/connectivity_c.c test with GCC on an 8-core Nehalem 
<br>
system with HT turned on and tested up to np=64.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12941.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Previous message:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12946.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
