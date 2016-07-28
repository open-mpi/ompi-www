<?
$subject_val = "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 10:27:59 2008" -->
<!-- isoreceived="20081217152759" -->
<!-- sent="Wed, 17 Dec 2008 06:00:53 -0800" -->
<!-- isosent="20081217140053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?" -->
<!-- id="D478DB49-803E-4E0D-83D2-8ECC60601B87_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 09:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/01/0660.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0658.php">John Fink: "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="0658.php">John Fink: "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings John.  I think you want to direct your mail to the Open MPI  
<br>
User's mailing list -- this list is for the testing framework known as  
<br>
the MPI Testing Tool (MTT).  It's a sub-project of the greater Open  
<br>
MPI project, but the audience over here isn't well-equipped to answer  
<br>
specific questions about the Open MPI software package.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a>
<br>
<p><p><p>On Dec 17, 2008, at 5:35 AM, John Fink wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've got a large pool of Macs running Leopard that are all on an  
</span><br>
<span class="quotelev1">&gt; xgrid.  However, I can't seem to use the mpirun that comes with  
</span><br>
<span class="quotelev1">&gt; Leopard with the xgrid.  I've got my grid and password environment  
</span><br>
<span class="quotelev1">&gt; variables set up okay on my controller, all the xgrid command line  
</span><br>
<span class="quotelev1">&gt; commands work (displaying grid IDs, things like that) but mpirun  
</span><br>
<span class="quotelev1">&gt; only wants to run things on the local host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm extremely new to OpenMPI and only slightly less new to Macs so  
</span><br>
<span class="quotelev1">&gt; there's probably something very obvious that I'm missing, but I'm  
</span><br>
<span class="quotelev1">&gt; trying what's detailed on this page: <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a> 
</span><br>
<span class="quotelev1">&gt;  (the /bin/hostname example).  Here's my output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as-0003-l:~ locadmin$ mpirun -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt; as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Issuing the same command with -nolocal yields the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as-0003-l:~ locadmin$ mpirun --nolocal -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no available nodes allocated to this job. This could be  
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev1">&gt; no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev1">&gt; launched on the local node.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/ 
</span><br>
<span class="quotelev1">&gt; openmpi/orte/mca/rmaps/base/rmaps_base_support_fns.c at line 168
</span><br>
<span class="quotelev1">&gt; [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/ 
</span><br>
<span class="quotelev1">&gt; openmpi/orte/mca/rmaps/round_robin/rmaps_rr.c at line 402
</span><br>
<span class="quotelev1">&gt; [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/ 
</span><br>
<span class="quotelev1">&gt; openmpi/orte/mca/rmaps/base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/ 
</span><br>
<span class="quotelev1">&gt; openmpi/orte/mca/rmgr/urm/rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [as-0003-l.lib.mcmaster.ca:82776] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for any help you can provide!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/01/0660.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0658.php">John Fink: "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="0658.php">John Fink: "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
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
