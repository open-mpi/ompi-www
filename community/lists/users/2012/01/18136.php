<?
$subject_val = "Re: [OMPI users] Status of SLURM integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 10:17:58 2012" -->
<!-- isoreceived="20120111151758" -->
<!-- sent="Wed, 11 Jan 2012 08:17:49 -0700" -->
<!-- isosent="20120111151749" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Status of SLURM integration" -->
<!-- id="80A065A8-2F09-4940-A21A-3DEC0E3AAD63_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="051D6F85-D635-4FC7-AA7F-0796A043D52E_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 10:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Previous message:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>In reply to:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Reply:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, yes - but it isn't quite that simple. :-/
<br>
<p>If you want to direct-launch on slurm without using the resv_ports option, you need to build OMPI to include PMI support by including --with-pmi on your configure cmd line. You may need to point to where pmi.h resides (e.g., --with-pmi=/opt/slurm/include).
<br>
<p>We don't do that automatically because slurm's pmi.h is GPL, and so the resulting binary is GPL. This isn't an issue if you are just using the binary and not distributing it, but we chose to not surprise anyone.
<br>
<p>If you build the PMI support, then you can just srun your app without using resv_ports.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jan 11, 2012, at 6:04 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; The latest -- 1.5.5rc2 (just released last night) -- has direct &quot;srun my_mpi_application&quot; integration.  It's not in a final release yet, but as you can probably guess by the version number, it'll be in the final version of 1.5.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have 1-2 bugs remaining in 1.5.5 that are actively being worked.  Once those are fixed (hopefully, in the Very Near Future), 1.5.5 will be released.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2012, at 11:38 PM, Andrew Senin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you please describe the current status of SLURM integration? I
</span><br>
<span class="quotelev2">&gt;&gt; had a feeling srun supports direct launch of OpenMpi applications
</span><br>
<span class="quotelev2">&gt;&gt; (without mpirun) compiled with the 1.5 branch.  At least one of my
</span><br>
<span class="quotelev2">&gt;&gt; colleagu succeeded on that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But when I installed SLURM and the head revision of OpenMPI 1.5 branch
</span><br>
<span class="quotelev2">&gt;&gt; I did not manage to run it without settings the SLURM_STEP_RESV_PORTS
</span><br>
<span class="quotelev2">&gt;&gt; environment variable. I receive the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orte_grpcomm_modex failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned &quot;A message is attempting to be sent to a process whose
</span><br>
<span class="quotelev2">&gt;&gt; contact information is unknown&quot; (-117) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [mir9:25477] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; [mir9:25477] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; [mir9:25477] *** Unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [mir9:25477] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I have 2 questions:
</span><br>
<span class="quotelev2">&gt;&gt; 1. Is support of SLURM in the head revision of 1.5 branch stable
</span><br>
<span class="quotelev2">&gt;&gt; enough to use it in the lab?
</span><br>
<span class="quotelev2">&gt;&gt; 2. Does direct launch of mpi applications require setting the
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_STEP_RESV_PORTS environment variable?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Andrew Senin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Previous message:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>In reply to:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Reply:</strong> <a href="18137.php">Andrew Senin: "Re: [OMPI users] Status of SLURM integration"</a>
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
