<?
$subject_val = "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 16:20:40 2010" -->
<!-- isoreceived="20100621202040" -->
<!-- sent="Mon, 21 Jun 2010 14:13:48 -0600" -->
<!-- isosent="20100621201348" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1" -->
<!-- id="F171E898-BC53-4759-A968-812D2C6BC69C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5D7380E6-60B2-4DC3-8F22-F100EEAE9B0D_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 16:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you want, you can upgrade to the last release in the 1.2 series from the www.open-mpi.org web site. Anything in 1.2 will work - just not beyond.
<br>
<p><p>On Jun 21, 2010, at 1:40 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; You have to set two environment variables (XGRID_CONTROLLER_HOSTNAME and XGRID_CONTROLLER_PASSWORD) with the correct information in order for the XGrid starter to work.  Due to the way XGrid works, the nolocal option will not work properly when launching with XGrid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 21, 2010, at 1:28 PM, charlie strauss wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps I was mistaken about 1.5rc1.    As for  the installed openMPI on mac osx, my 10.5 OSX has v1.2.3  when I try to run it, it works fine locally but it never finds the xgrid.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; any mpi job I run, will run on the localhost not the xgrid agents.  If try to force the issue by specifying -nolocal then it just complains there are no nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SO how do I use openMPI so that it uses the nodes of an xgrid cluster?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -nolocal -n 32 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no available nodes allocated to this job. This could be because
</span><br>
<span class="quotelev2">&gt;&gt; no nodes were found or all the available nodes were already used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that since the -nolocal option was given no processes can be 
</span><br>
<span class="quotelev2">&gt;&gt; launched on the local node.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_support_fns.c at line 168
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/round_robin/rmaps_rr.c at line 402
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/rmgr_urm.c at line 372
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 16, 2010, at 1:36 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where did you see that 1.5 works with xgrid? That support has been broken since the 1.2 series, unfortunately, so it would help to ensure we don't have stale docs out there to the contrary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for the 1.2 results, you are aware (I imagine) that OSX ships with the last 1.2 release already installed? You don't have to do anything to use it but run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are getting peer timeouts, that is almost always a firewall issue. But I would try the factory-installed version first to be sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 16, 2010, at 1:14 PM, Charlie E. Strauss wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm new to openMPI.  I'm trying to set it up for using xgrid.  I have read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that v1.3 and v1.4 are broken on OSX 10.5 and 10.6 although I have seen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some discussions in the archives of this mail list saying some people have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.4 running on 10.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have now compiled both openMPI 1.2 and openMPI1.5rc  and neither of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these is working for me with xgrid.   Both of these say they work with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xgrid.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The failuremodes are different.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyone know how to get a working install?  I am building this on a OSX 10.5.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine.  THe xgrid controller is on a OSX 10.6 server machine.  I have tried
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuring with and without the --with-xgrid option.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Behaviour of openMPI1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ /usr/local/openmpi/bin/mpirun -nolocal -n 2 /bin/hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; THe job appears in the xgrid queue, and the logs show it is running on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remote machine.  However nothing ever happens and peeking in the xgrid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ xgrid -job results -id 8703
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [brio.llnl.gov:38789] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [brio.llnl.gov:38792] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps a firewall issue?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course I'm more interested in getting the new openMPI1.5 working.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run this, again I get an entry in the queue, and the job runs on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remote machine but  I get a job failed message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ /usr/local/openmpi5/bin/mpirun -n 2 /bin/hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ xgrid -job results -id 8702
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [brio.llnl.gov:38776] Error: unknown option &quot;-mca&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note I have NOT installed openMPI on any of the other computers in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grid.  So perhaps that is the problem?  If I did install it on other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computers how would I tell mpirun where to find the path to the install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Finally in both cases, I don't see any way to pass xgrid specific argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in on the mpi command line.  An xgrid controller divides the agents into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sets of logical grids and you need to specify which logical grid to submit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job to.    In xgrid cli syntax one write &quot;xgrid -gid 2&quot;  for grid 2. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I use openMPI all the jobs get sent to just the default grid which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the grid that xgrid uses if no gid is specified.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Charlie Strauss
</span><br>
<span class="quotelev2">&gt;&gt; Bioscience Division
</span><br>
<span class="quotelev2">&gt;&gt; cems_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 505 665 4838
</span><br>
<span class="quotelev2">&gt;&gt; Quidquid latine dictum sit, altum sonatur.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
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
