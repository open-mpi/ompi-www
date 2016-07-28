<?
$subject_val = "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 15:44:22 2010" -->
<!-- isoreceived="20100616194422" -->
<!-- sent="Wed, 16 Jun 2010 13:36:53 -0600" -->
<!-- isosent="20100616193653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1" -->
<!-- id="4D978E42-68B0-42A6-9A74-AA1E3C0F2A1F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44435.130.55.127.2.1276715676.squirrel_at_webmail.lanl.gov" -->
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
<strong>Date:</strong> 2010-06-16 15:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13337.php">Brock Palen: "[OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>Previous message:</strong> <a href="13335.php">Charlie E. Strauss: "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13335.php">Charlie E. Strauss: "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Where did you see that 1.5 works with xgrid? That support has been broken since the 1.2 series, unfortunately, so it would help to ensure we don't have stale docs out there to the contrary.
<br>
<p>As for the 1.2 results, you are aware (I imagine) that OSX ships with the last 1.2 release already installed? You don't have to do anything to use it but run.
<br>
<p>If you are getting peer timeouts, that is almost always a firewall issue. But I would try the factory-installed version first to be sure.
<br>
<p>On Jun 16, 2010, at 1:14 PM, Charlie E. Strauss wrote:
<br>
<p><span class="quotelev1">&gt; I'm new to openMPI.  I'm trying to set it up for using xgrid.  I have read
</span><br>
<span class="quotelev1">&gt; that v1.3 and v1.4 are broken on OSX 10.5 and 10.6 although I have seen
</span><br>
<span class="quotelev1">&gt; some discussions in the archives of this mail list saying some people have
</span><br>
<span class="quotelev1">&gt; v1.4 running on 10.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have now compiled both openMPI 1.2 and openMPI1.5rc  and neither of
</span><br>
<span class="quotelev1">&gt; these is working for me with xgrid.   Both of these say they work with
</span><br>
<span class="quotelev1">&gt; xgrid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The failuremodes are different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone know how to get a working install?  I am building this on a OSX 10.5.8
</span><br>
<span class="quotelev1">&gt; machine.  THe xgrid controller is on a OSX 10.6 server machine.  I have tried
</span><br>
<span class="quotelev1">&gt; configuring with and without the --with-xgrid option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Behaviour of openMPI1.2
</span><br>
<span class="quotelev1">&gt; $ /usr/local/openmpi/bin/mpirun -nolocal -n 2 /bin/hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; THe job appears in the xgrid queue, and the logs show it is running on a
</span><br>
<span class="quotelev1">&gt; remote machine.  However nothing ever happens and peeking in the xgrid
</span><br>
<span class="quotelev1">&gt; results I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ xgrid -job results -id 8703
</span><br>
<span class="quotelev1">&gt; [brio.llnl.gov:38789] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev1">&gt; [brio.llnl.gov:38792] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps a firewall issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course I'm more interested in getting the new openMPI1.5 working.
</span><br>
<span class="quotelev1">&gt; When I run this, again I get an entry in the queue, and the job runs on a
</span><br>
<span class="quotelev1">&gt; remote machine but  I get a job failed message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /usr/local/openmpi5/bin/mpirun -n 2 /bin/hostname
</span><br>
<span class="quotelev1">&gt; $ xgrid -job results -id 8702
</span><br>
<span class="quotelev1">&gt; [brio.llnl.gov:38776] Error: unknown option &quot;-mca&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note I have NOT installed openMPI on any of the other computers in the
</span><br>
<span class="quotelev1">&gt; grid.  So perhaps that is the problem?  If I did install it on other
</span><br>
<span class="quotelev1">&gt; computers how would I tell mpirun where to find the path to the install
</span><br>
<span class="quotelev1">&gt; point?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally in both cases, I don't see any way to pass xgrid specific argument
</span><br>
<span class="quotelev1">&gt; in on the mpi command line.  An xgrid controller divides the agents into
</span><br>
<span class="quotelev1">&gt; sets of logical grids and you need to specify which logical grid to submit
</span><br>
<span class="quotelev1">&gt; the job to.    In xgrid cli syntax one write &quot;xgrid -gid 2&quot;  for grid 2. 
</span><br>
<span class="quotelev1">&gt; When I use openMPI all the jobs get sent to just the default grid which is
</span><br>
<span class="quotelev1">&gt; the grid that xgrid uses if no gid is specified.
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
<li><strong>Next message:</strong> <a href="13337.php">Brock Palen: "[OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>Previous message:</strong> <a href="13335.php">Charlie E. Strauss: "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13335.php">Charlie E. Strauss: "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
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
