<?
$subject_val = "Re: [OMPI users] Documentation on running under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 20:08:34 2008" -->
<!-- isoreceived="20080606000834" -->
<!-- sent="Thu, 5 Jun 2008 20:08:21 -0400" -->
<!-- isosent="20080606000821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Documentation on running under slurm" -->
<!-- id="A77731D5-0E2D-4BF6-B276-0F2E1EAF15E5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="830307.39626.qm_at_web57606.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Documentation on running under slurm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 20:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5833.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5831.php">Bill Johnstone: "[OMPI users] Documentation on running under slurm"</a>
<li><strong>In reply to:</strong> <a href="5831.php">Bill Johnstone: "[OMPI users] Documentation on running under slurm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent point; thanks for the heads-up!
<br>
<p>I've updated the SLURM docs in the FAQ accordingly.
<br>
<p><p>On Jun 5, 2008, at 6:15 PM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; Hello all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would seem that the documentation, at least the FAQ page at <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a> 
</span><br>
<span class="quotelev1">&gt;  is a little out of date with respect to running on newer versions  
</span><br>
<span class="quotelev1">&gt; of SLURM (I just got things working with version 1.3.3) .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the SLURM documentation, srun -A is deperecated, and  
</span><br>
<span class="quotelev1">&gt; even if you look in the manpage for salloc, -A is not directly  
</span><br>
<span class="quotelev1">&gt; mentioned, it's just discussed in the --no-shell section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to successfully submit/run using:
</span><br>
<span class="quotelev1">&gt; salloc -n &lt;# procs&gt; mpirun &lt;exename&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; without needing an interactive shell.  So doesn't this seem like the  
</span><br>
<span class="quotelev1">&gt; more up-to-date way of doing things rather than srun -A?  Also, it  
</span><br>
<span class="quotelev1">&gt; would seem sbatch replaces srun -b, but I don't use this mode of  
</span><br>
<span class="quotelev1">&gt; operation, so I'm not sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps the OpenMPI documentation should be updated accordingly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5833.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5831.php">Bill Johnstone: "[OMPI users] Documentation on running under slurm"</a>
<li><strong>In reply to:</strong> <a href="5831.php">Bill Johnstone: "[OMPI users] Documentation on running under slurm"</a>
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
