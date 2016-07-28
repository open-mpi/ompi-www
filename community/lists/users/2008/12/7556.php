<?
$subject_val = "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 11:07:38 2008" -->
<!-- isoreceived="20081217160738" -->
<!-- sent="Wed, 17 Dec 2008 11:07:33 -0500" -->
<!-- isosent="20081217160733" -->
<!-- name="John Fink" -->
<!-- email="john.fink_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?" -->
<!-- id="502896f40812170807y1d164e11kf6bf38559373c703_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43F69684-CD93-4269-8896-9B187CE65E08_at_rain.org" -->
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
<strong>From:</strong> John Fink (<em>john.fink_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 11:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Boy, it sure looks that way, doesn't it?  So I guess the solution is to
<br>
compile a new openmpi directly on my xgrid controller and push that binary
<br>
to all the agents.  I should probably do this anyway as the program I am
<br>
trying to run is a FORTRAN program, and I'm meant to understand that Apple's
<br>
OpenMPI doesn't support FORTRAN either.  Hoo boy.  Thanks Doug, Ethan and
<br>
Jeff.
<br>
<p>jf
<br>
<p>On Wed, Dec 17, 2008 at 10:29 AM, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe that the openmpi that comes with leopard doesn't support xgrid.
</span><br>
<span class="quotelev1">&gt; If you type ompi_info|grep xgrid you get nothing. I'm not sure what apple
</span><br>
<span class="quotelev1">&gt; was thinking.
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
<span class="quotelev1">&gt;  Hi John,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm forwarding your question to the Open MPI users list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec/17/2008 08:35:00AM, John Fink wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hello OpenMPI folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I've got a large pool of Macs running Leopard that are all on an xgrid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   However, I can't seem to use the mpirun that comes with Leopard with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   xgrid.  I've got my grid and password environment variables set up okay
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   my controller, all the xgrid command line commands work (displaying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   IDs, things like that) but mpirun only wants to run things on the local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I'm extremely new to OpenMPI and only slightly less new to Macs so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   probably something very obvious that I'm missing, but I'm trying what's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   detailed on this page:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a> (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   example).  Here's my output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l:~ locadmin$ mpirun -n 8 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l.lib.mcmaster.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Issuing the same command with -nolocal yields the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   as-0003-l:~ locadmin$ mpirun --nolocal -n 8 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   There are no available nodes allocated to this job. This could be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Note that since the -nolocal option was given no processes can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   launched on the local node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   at line 168
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/round_robin/rmaps_rr.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   at line 402
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   at line 210
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   of resource in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/rmgr_urm.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   line 372
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [as-0003-l.lib.mcmaster.ca:82776] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks very much for any help you can provide!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   jf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; References
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Visible links
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . <a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . <a href="http://as-0003-l.lib.mcmaster.ca/">http://as-0003-l.lib.mcmaster.ca/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . file:///tmp/http:/as-0003-l.lib.mcmaster.ca:82776
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . <a href="http://libgrunt.blogspot.com/">http://libgrunt.blogspot.com/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
<a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<li><strong>In reply to:</strong> <a href="7555.php">Doug Reeder: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard	broken with xgrid?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI users] FW: Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
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
