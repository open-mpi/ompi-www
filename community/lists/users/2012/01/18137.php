<?
$subject_val = "Re: [OMPI users] Status of SLURM integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 12:15:10 2012" -->
<!-- isoreceived="20120111171510" -->
<!-- sent="Wed, 11 Jan 2012 21:15:06 +0400" -->
<!-- isosent="20120111171506" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Status of SLURM integration" -->
<!-- id="CAN7Cqrez0vo5_RQvrNLMViki_aMvJdVM+BuiL5kf_LD3jrDM+Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="80A065A8-2F09-4940-A21A-3DEC0E3AAD63_at_open-mpi.org" -->
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
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 12:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18138.php">Mark Suhovecky: "[OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>In reply to:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, Jeff, thanks!
<br>
<p>I managed to make it work with the following configure options:
<br>
<p>&nbsp;./configure --with-pmi=/usr/ --with-slurm=/usr/ --without-psm
<br>
--prefix=`pwd`/install
<br>
<p>Regards,
<br>
Andrew Senin
<br>
<p>On Wed, Jan 11, 2012 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Well, yes - but it isn't quite that simple. :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to direct-launch on slurm without using the resv_ports option, you need to build OMPI to include PMI support by including --with-pmi on your configure cmd line. You may need to point to where pmi.h resides (e.g., --with-pmi=/opt/slurm/include).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't do that automatically because slurm's pmi.h is GPL, and so the resulting binary is GPL. This isn't an issue if you are just using the binary and not distributing it, but we chose to not surprise anyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you build the PMI support, then you can just srun your app without using resv_ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2012, at 6:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The latest -- 1.5.5rc2 (just released last night) -- has direct &quot;srun my_mpi_application&quot; integration. &#160;It's not in a final release yet, but as you can probably guess by the version number, it'll be in the final version of 1.5.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have 1-2 bugs remaining in 1.5.5 that are actively being worked. &#160;Once those are fixed (hopefully, in the Very Near Future), 1.5.5 will be released.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2012, at 11:38 PM, Andrew Senin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please describe the current status of SLURM integration? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had a feeling srun supports direct launch of OpenMpi applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (without mpirun) compiled with the 1.5 branch. &#160;At least one of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; colleagu succeeded on that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I installed SLURM and the head revision of OpenMPI 1.5 branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not manage to run it without settings the SLURM_STEP_RESV_PORTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment variable. I receive the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_grpcomm_modex failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned &quot;A message is attempting to be sent to a process whose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contact information is unknown&quot; (-117) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mir9:25477] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mir9:25477] *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mir9:25477] *** Unknown error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mir9:25477] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I have 2 questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Is support of SLURM in the head revision of 1.5 branch stable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enough to use it in the lab?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Does direct launch of mpi applications require setting the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_STEP_RESV_PORTS environment variable?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew Senin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="18138.php">Mark Suhovecky: "[OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>In reply to:</strong> <a href="18136.php">Ralph Castain: "Re: [OMPI users] Status of SLURM integration"</a>
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
