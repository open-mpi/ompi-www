<?
$subject_val = "Re: [OMPI users] MPI SGE and IB don't work together";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 10:18:24 2013" -->
<!-- isoreceived="20131028141824" -->
<!-- sent="Mon, 28 Oct 2013 07:18:20 -0700" -->
<!-- isosent="20131028141820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI SGE and IB don't work together" -->
<!-- id="BB766F9F-DC4C-442C-A7E8-95679EC57C23_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FD0DF2D-5CBC-43FB-8746-E3D5700DE574_at_kaust.edu.sa" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI SGE and IB don't work together<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 10:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Previous message:</strong> <a href="22855.php">Ralph Castain: "Re: [OMPI users] How openmpi processes communicate on a single blade"</a>
<li><strong>In reply to:</strong> <a href="22853.php">Luigi  Cavallo: "[OMPI users] MPI SGE and IB don't work together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Few thoughts occur:
<br>
<p>1. 1.4.3 is awfully old - I would recommend you update to at least the 1.6 series if you can. We don't actively support 1.4 any more, and I don't know what the issues might have been with PSM that long ago
<br>
<p>2. I see that you built LSF support for some reason, or there is a stale LSF support library from a prior build. You might want to clean that out just to avoid any future problems.
<br>
<p>3. Just looking at your output, I see something a little weird where you appear to load both gcc and icc modules, then load an icc version of OMPI. Any chance you are getting confusing libc's as a result?
<br>
<p>4. The error message seems to indicate an issue with initializing the PSM driver. Is it possible that you need to load a module or something to prep PSM - something you do in your environment that ssh would activate (say in a .bashrc), but sge isn't doing automatically for you?
<br>
<p>Ralph
<br>
<p>On Oct 28, 2013, at 6:58 AM, Luigi Cavallo &lt;Luigi.Cavallo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we are facing problems with openmpi under sge on a cluster equipped with QLogic IB HCAs.  Working off sge, openmpi works perfectly, we can dispatch the job as we want, no warning/error messages at all.  If we do the same under sge, even the hello-world program crashes. The main issue is PSM related, as you can see from the error message attached at the end of this email.  We solved this issue by switching off  PSM, basically using 2 possible strategies. Either adding --mca  mtl ^psm  at the mpirun command, or setting the env variable OMPI_MCA_pml ob1.  This way jobs under SGE runs properly.  Any preference for one or the two options we found to switch off PSM ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we would really like to understand why we have this PSM error when we run under SGE, since the IB performance without PSM is of course deteriorated.  We asked SGE users list, but nothing smart from them.  Wondering if this list can help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Luigi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------- BEGINNING OF error file from sge ------------
</span><br>
<span class="quotelev1">&gt; Loading module gcc version 4.6.0
</span><br>
<span class="quotelev1">&gt; Initial gcc version: 4.4.6
</span><br>
<span class="quotelev1">&gt; Current gcc version: 4.6.0
</span><br>
<span class="quotelev1">&gt; Loading module icc version 11.1.075
</span><br>
<span class="quotelev1">&gt; Current icc version: none
</span><br>
<span class="quotelev1">&gt; Current icc version: 11.1
</span><br>
<span class="quotelev1">&gt; Loading module ifort version 11.1.075
</span><br>
<span class="quotelev1">&gt; Current ifort version: none
</span><br>
<span class="quotelev1">&gt; Current ifort version: 11.1
</span><br>
<span class="quotelev1">&gt; Loading module for compilers-extra
</span><br>
<span class="quotelev1">&gt; Extra compiler modules now loaded
</span><br>
<span class="quotelev1">&gt; Loading module mpi-openmpi version 1.4.3-icc-11.1
</span><br>
<span class="quotelev1">&gt; Current mpi-openmpi version: 1.4.3
</span><br>
<span class="quotelev1">&gt; [c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_ess_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_plm_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_ras_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; c1bay2.31114Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; c1bay2.31116Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; c1bay2.31117Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PSM was unable to open an endpoint. Please make sure that the network link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error: Failure in initializing endpoint
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; c1bay2.31115Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [c1bay2:31114] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------- END OF error file from sge ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This message and its contents including attachments are intended solely for the original recipient. If you are not the intended recipient or have received this message in error, please notify me immediately and delete this message from your computer system. Any unauthorized use or distribution is prohibited. Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Previous message:</strong> <a href="22855.php">Ralph Castain: "Re: [OMPI users] How openmpi processes communicate on a single blade"</a>
<li><strong>In reply to:</strong> <a href="22853.php">Luigi  Cavallo: "[OMPI users] MPI SGE and IB don't work together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
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
