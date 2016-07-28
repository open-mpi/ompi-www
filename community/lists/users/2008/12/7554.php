<?
$subject_val = "[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 09:30:27 2008" -->
<!-- isoreceived="20081217143027" -->
<!-- sent="Wed, 17 Dec 2008 09:30:20 -0500" -->
<!-- isosent="20081217143020" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?" -->
<!-- id="20081217143019.GA234_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="502896f40812170535l4591bf88ga5d9269756f38f7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 09:30:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7553.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John,
<br>
<p>I'm forwarding your question to the Open MPI users list.
<br>
<p>Regards,
<br>
Ethan
<br>
<p>On Wed, Dec/17/2008 08:35:00AM, John Fink wrote:
<br>
<span class="quotelev1">&gt;    Hello OpenMPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I've got a large pool of Macs running Leopard that are all on an xgrid.
</span><br>
<span class="quotelev1">&gt;    However, I can't seem to use the mpirun that comes with Leopard with the
</span><br>
<span class="quotelev1">&gt;    xgrid.  I've got my grid and password environment variables set up okay on
</span><br>
<span class="quotelev1">&gt;    my controller, all the xgrid command line commands work (displaying grid
</span><br>
<span class="quotelev1">&gt;    IDs, things like that) but mpirun only wants to run things on the local
</span><br>
<span class="quotelev1">&gt;    host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I'm extremely new to OpenMPI and only slightly less new to Macs so there's
</span><br>
<span class="quotelev1">&gt;    probably something very obvious that I'm missing, but I'm trying what's
</span><br>
<span class="quotelev1">&gt;    detailed on this page:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a> (the /bin/hostname
</span><br>
<span class="quotelev1">&gt;    example).  Here's my output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    as-0003-l:~ locadmin$ mpirun -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;    as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Issuing the same command with -nolocal yields the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    as-0003-l:~ locadmin$ mpirun --nolocal -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    There are no available nodes allocated to this job. This could be because
</span><br>
<span class="quotelev1">&gt;    no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev1">&gt;    launched on the local node.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out
</span><br>
<span class="quotelev1">&gt;    of resource in file
</span><br>
<span class="quotelev1">&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev1">&gt;    at line 168
</span><br>
<span class="quotelev1">&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out
</span><br>
<span class="quotelev1">&gt;    of resource in file
</span><br>
<span class="quotelev1">&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/round_robin/rmaps_rr.c
</span><br>
<span class="quotelev1">&gt;    at line 402
</span><br>
<span class="quotelev1">&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out
</span><br>
<span class="quotelev1">&gt;    of resource in file
</span><br>
<span class="quotelev1">&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev1">&gt;    at line 210
</span><br>
<span class="quotelev1">&gt;    [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out
</span><br>
<span class="quotelev1">&gt;    of resource in file
</span><br>
<span class="quotelev1">&gt;    /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/rmgr_urm.c at
</span><br>
<span class="quotelev1">&gt;    line 372
</span><br>
<span class="quotelev1">&gt;    [as-0003-l.lib.mcmaster.ca:82776] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks very much for any help you can provide!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    jf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    <a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a>
</span><br>
<span class="quotelev1">&gt;    . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev1">&gt;    . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev1">&gt;    . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev1">&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;    . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;    . <a href="http://libgrunt.blogspot.com/">http://libgrunt.blogspot.com/</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7553.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
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
