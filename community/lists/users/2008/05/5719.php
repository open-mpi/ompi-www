<?
$subject_val = "Re: [OMPI users] Maui + Slurm + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 11:26:57 2008" -->
<!-- isoreceived="20080522152657" -->
<!-- sent="Thu, 22 May 2008 11:26:43 -0400" -->
<!-- isosent="20080522152643" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maui + Slurm + OpenMPI" -->
<!-- id="0A4A014D-D99E-4282-A008-16C66E83633E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48358FBC.7030201_at_icps.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Maui + Slurm + OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 11:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5720.php">Jim Kusznir: "[OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>Previous message:</strong> <a href="5718.php">Romaric David: "[OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5718.php">Romaric David: "[OMPI users] Maui + Slurm + OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI should just be *using* SLURM and should be agnostic of  
<br>
whatever scheduler you choose to use (indeed, OMPI doesn't even have  
<br>
visibility of which scheduler you are using).  OMPI's mpirun will use  
<br>
&quot;srun&quot; to launch the MPI processes in a SLURM job -- it may be helpful  
<br>
to see check out what is happening differently with Maui with the sub- 
<br>
srun that mpirun invokes...?
<br>
<p>The SLURM development list might be able to provide more insight here.
<br>
<p><p>On May 22, 2008, at 11:22 AM, Romaric David wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to make use of Maui 1.3.6p19 + Slurm 1.2.29 + OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.2.6 together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently trying to have slurm procs --ntasks-per-node  
</span><br>
<span class="quotelev1">&gt; specification work
</span><br>
<span class="quotelev1">&gt; with openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I submit a simple mpirun job with :
</span><br>
<span class="quotelev1">&gt; sbatch -N 2 --ntasks-per-node=1 myscript  where myscript only  
</span><br>
<span class="quotelev1">&gt; contains an mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When submitting this script using slurm's builtin scheduler, all  
</span><br>
<span class="quotelev1">&gt; runs perfectly and processes
</span><br>
<span class="quotelev1">&gt; get dispatched, one per node, allright.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using maui scheduler, the  mpi program does not start : the mpi  
</span><br>
<span class="quotelev1">&gt; executable
</span><br>
<span class="quotelev1">&gt; does not get read.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would mpirun be confused by the environment transmitted by slurm/ 
</span><br>
<span class="quotelev1">&gt; maui ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a clue on this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Regards,
</span><br>
<span class="quotelev1">&gt; 	Romaric
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
<li><strong>Next message:</strong> <a href="5720.php">Jim Kusznir: "[OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>Previous message:</strong> <a href="5718.php">Romaric David: "[OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5718.php">Romaric David: "[OMPI users] Maui + Slurm + OpenMPI"</a>
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
