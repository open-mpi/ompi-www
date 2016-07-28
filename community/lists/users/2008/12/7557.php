<?
$subject_val = "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 11:09:33 2008" -->
<!-- isoreceived="20081217160933" -->
<!-- sent="Wed, 17 Dec 2008 08:09:25 -0800" -->
<!-- isosent="20081217160925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?" -->
<!-- id="7334A23E-F61A-49D1-A4B9-DAE7F7C0EF46_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="502896f40812170807y1d164e11kf6bf38559373c703_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 11:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7558.php">deadchicken_at_[hidden]: "[OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct -- OS X [still] does not ship a Fortran compiler (which is why  
<br>
they opted to not include Fortran support in their Open MPI).  :-(
<br>
<p>FWIW, I tend to use these compilers on my MacBook pro with Leopard:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a>
<br>
<p><p>On Dec 17, 2008, at 8:07 AM, John Fink wrote:
<br>
<p><span class="quotelev1">&gt; Boy, it sure looks that way, doesn't it?  So I guess the solution is  
</span><br>
<span class="quotelev1">&gt; to compile a new openmpi directly on my xgrid controller and push  
</span><br>
<span class="quotelev1">&gt; that binary to all the agents.  I should probably do this anyway as  
</span><br>
<span class="quotelev1">&gt; the program I am trying to run is a FORTRAN program, and I'm meant  
</span><br>
<span class="quotelev1">&gt; to understand that Apple's OpenMPI doesn't support FORTRAN either.   
</span><br>
<span class="quotelev1">&gt; Hoo boy.  Thanks Doug, Ethan and Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 17, 2008 at 10:29 AM, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I believe that the openmpi that comes with leopard doesn't support  
</span><br>
<span class="quotelev1">&gt; xgrid. If you type ompi_info|grep xgrid you get nothing. I'm not  
</span><br>
<span class="quotelev1">&gt; sure what apple was thinking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2008, at 6:30 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm forwarding your question to the Open MPI users list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec/17/2008 08:35:00AM, John Fink wrote:
</span><br>
<span class="quotelev1">&gt;   Hello OpenMPI folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I've got a large pool of Macs running Leopard that are all on an  
</span><br>
<span class="quotelev1">&gt; xgrid.
</span><br>
<span class="quotelev1">&gt;   However, I can't seem to use the mpirun that comes with Leopard  
</span><br>
<span class="quotelev1">&gt; with the
</span><br>
<span class="quotelev1">&gt;   xgrid.  I've got my grid and password environment variables set up  
</span><br>
<span class="quotelev1">&gt; okay on
</span><br>
<span class="quotelev1">&gt;   my controller, all the xgrid command line commands work  
</span><br>
<span class="quotelev1">&gt; (displaying grid
</span><br>
<span class="quotelev1">&gt;   IDs, things like that) but mpirun only wants to run things on the  
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt;   host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I'm extremely new to OpenMPI and only slightly less new to Macs so  
</span><br>
<span class="quotelev1">&gt; there's
</span><br>
<span class="quotelev1">&gt;   probably something very obvious that I'm missing, but I'm trying  
</span><br>
<span class="quotelev1">&gt; what's
</span><br>
<span class="quotelev1">&gt;   detailed on this page:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a> (the /bin/ 
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;   example).  Here's my output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   as-0003-l:~ locadmin$ mpirun -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Issuing the same command with -nolocal yields the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   as-0003-l:~ locadmin$ mpirun --nolocal -n 8 /bin/hostname
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   There are no available nodes allocated to this job. This could be  
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev1">&gt;   no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev1">&gt;   launched on the local node.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out
</span><br>
<span class="quotelev1">&gt;   of resource in file
</span><br>
<span class="quotelev1">&gt;   /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/ 
</span><br>
<span class="quotelev1">&gt; rmaps_base_support_fns.c
</span><br>
<span class="quotelev1">&gt;   at line 168
</span><br>
<span class="quotelev1">&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out
</span><br>
<span class="quotelev1">&gt;   of resource in file
</span><br>
<span class="quotelev1">&gt;   /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/round_robin/ 
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c
</span><br>
<span class="quotelev1">&gt;   at line 402
</span><br>
<span class="quotelev1">&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out
</span><br>
<span class="quotelev1">&gt;   of resource in file
</span><br>
<span class="quotelev1">&gt;   /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/ 
</span><br>
<span class="quotelev1">&gt; rmaps_base_map_job.c
</span><br>
<span class="quotelev1">&gt;   at line 210
</span><br>
<span class="quotelev1">&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Temporarily out
</span><br>
<span class="quotelev1">&gt;   of resource in file
</span><br>
<span class="quotelev1">&gt;   /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/ 
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at
</span><br>
<span class="quotelev1">&gt;   line 372
</span><br>
<span class="quotelev1">&gt;   [as-0003-l.lib.mcmaster.ca:82776] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks very much for any help you can provide!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   jf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --
</span><br>
<span class="quotelev1">&gt;   <a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Visible links
</span><br>
<span class="quotelev1">&gt;   . <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a>
</span><br>
<span class="quotelev1">&gt;   . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev1">&gt;   . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev1">&gt;   . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev1">&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev1">&gt;   . <a href="http://libgrunt.blogspot.com/">http://libgrunt.blogspot.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
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
<li><strong>Next message:</strong> <a href="7558.php">deadchicken_at_[hidden]: "[OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="7556.php">John Fink: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
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
