<?
$subject_val = "Re: [OMPI users] Status of SLURM integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 08:04:19 2012" -->
<!-- isoreceived="20120111130419" -->
<!-- sent="Wed, 11 Jan 2012 05:04:14 -0800" -->
<!-- isosent="20120111130414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Status of SLURM integration" -->
<!-- id="051D6F85-D635-4FC7-AA7F-0796A043D52E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAN7CqrcEXgNy5_MujPXzj0m0Lv9-OgOApVxYu9jX2_dK8VjF5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Status of SLURM integration<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 08:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Previous message:</strong> <a href="18133.php">Hamilton Fischer: "[OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>In reply to:</strong> <a href="18131.php">Andrew Senin: "[OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Reply:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The latest -- 1.5.5rc2 (just released last night) -- has direct &quot;srun my_mpi_application&quot; integration.  It's not in a final release yet, but as you can probably guess by the version number, it'll be in the final version of 1.5.5.
<br>
<p>We have 1-2 bugs remaining in 1.5.5 that are actively being worked.  Once those are fixed (hopefully, in the Very Near Future), 1.5.5 will be released.
<br>
<p><p>On Jan 10, 2012, at 11:38 PM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please describe the current status of SLURM integration? I
</span><br>
<span class="quotelev1">&gt; had a feeling srun supports direct launch of OpenMpi applications
</span><br>
<span class="quotelev1">&gt; (without mpirun) compiled with the 1.5 branch.  At least one of my
</span><br>
<span class="quotelev1">&gt; colleagu succeeded on that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I installed SLURM and the head revision of OpenMPI 1.5 branch
</span><br>
<span class="quotelev1">&gt; I did not manage to run it without settings the SLURM_STEP_RESV_PORTS
</span><br>
<span class="quotelev1">&gt; environment variable. I receive the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_grpcomm_modex failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;A message is attempting to be sent to a process whose
</span><br>
<span class="quotelev1">&gt; contact information is unknown&quot; (-117) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [mir9:25477] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [mir9:25477] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [mir9:25477] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [mir9:25477] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I have 2 questions:
</span><br>
<span class="quotelev1">&gt; 1. Is support of SLURM in the head revision of 1.5 branch stable
</span><br>
<span class="quotelev1">&gt; enough to use it in the lab?
</span><br>
<span class="quotelev1">&gt; 2. Does direct launch of mpi applications require setting the
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_RESV_PORTS environment variable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrew Senin.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Previous message:</strong> <a href="18133.php">Hamilton Fischer: "[OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>In reply to:</strong> <a href="18131.php">Andrew Senin: "[OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Reply:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
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
