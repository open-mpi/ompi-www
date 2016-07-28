<?
$subject_val = "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 15:29:32 2010" -->
<!-- isoreceived="20100621192932" -->
<!-- sent="Mon, 21 Jun 2010 13:28:29 -0600" -->
<!-- isosent="20100621192829" -->
<!-- name="charlie strauss" -->
<!-- email="cems_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1" -->
<!-- id="0F620451-0F42-4B4C-9552-6E437DAE4279_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D978E42-68B0-42A6-9A74-AA1E3C0F2A1F_at_open-mpi.org" -->
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
<strong>From:</strong> charlie strauss (<em>cems_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 15:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>In reply to:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps I was mistaken about 1.5rc1.    As for  the installed openMPI  
<br>
on mac osx, my 10.5 OSX has v1.2.3  when I try to run it, it works  
<br>
fine locally but it never finds the xgrid.
<br>
<p>any mpi job I run, will run on the localhost not the xgrid agents.  If  
<br>
try to force the issue by specifying -nolocal then it just complains  
<br>
there are no nodes.
<br>
<p>SO how do I use openMPI so that it uses the nodes of an xgrid cluster?
<br>
<p>mpirun -nolocal -n 32 /bin/hostname
<br>
--------------------------------------------------------------------------
<br>
There are no available nodes allocated to this job. This could be  
<br>
because
<br>
no nodes were found or all the available nodes were already used.
<br>
<p>Note that since the -nolocal option was given no processes can be
<br>
launched on the local node.
<br>
--------------------------------------------------------------------------
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
<br>
resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/ 
<br>
base/rmaps_base_support_fns.c at line 168
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
<br>
resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/ 
<br>
round_robin/rmaps_rr.c at line 402
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
<br>
resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/ 
<br>
base/rmaps_base_map_job.c at line 210
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
<br>
resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/ 
<br>
urm/rmgr_urm.c at line 372
<br>
<p><p><p><p><p><p><p><p><p>On Jun 16, 2010, at 1:36 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Where did you see that 1.5 works with xgrid? That support has been  
</span><br>
<span class="quotelev1">&gt; broken since the 1.2 series, unfortunately, so it would help to  
</span><br>
<span class="quotelev1">&gt; ensure we don't have stale docs out there to the contrary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the 1.2 results, you are aware (I imagine) that OSX ships  
</span><br>
<span class="quotelev1">&gt; with the last 1.2 release already installed? You don't have to do  
</span><br>
<span class="quotelev1">&gt; anything to use it but run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are getting peer timeouts, that is almost always a firewall  
</span><br>
<span class="quotelev1">&gt; issue. But I would try the factory-installed version first to be sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2010, at 1:14 PM, Charlie E. Strauss wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to openMPI.  I'm trying to set it up for using xgrid.  I  
</span><br>
<span class="quotelev2">&gt;&gt; have read
</span><br>
<span class="quotelev2">&gt;&gt; that v1.3 and v1.4 are broken on OSX 10.5 and 10.6 although I have  
</span><br>
<span class="quotelev2">&gt;&gt; seen
</span><br>
<span class="quotelev2">&gt;&gt; some discussions in the archives of this mail list saying some  
</span><br>
<span class="quotelev2">&gt;&gt; people have
</span><br>
<span class="quotelev2">&gt;&gt; v1.4 running on 10.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have now compiled both openMPI 1.2 and openMPI1.5rc  and neither of
</span><br>
<span class="quotelev2">&gt;&gt; these is working for me with xgrid.   Both of these say they work  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; xgrid.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The failuremodes are different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone know how to get a working install?  I am building this on a  
</span><br>
<span class="quotelev2">&gt;&gt; OSX 10.5.8
</span><br>
<span class="quotelev2">&gt;&gt; machine.  THe xgrid controller is on a OSX 10.6 server machine.  I  
</span><br>
<span class="quotelev2">&gt;&gt; have tried
</span><br>
<span class="quotelev2">&gt;&gt; configuring with and without the --with-xgrid option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Behaviour of openMPI1.2
</span><br>
<span class="quotelev2">&gt;&gt; $ /usr/local/openmpi/bin/mpirun -nolocal -n 2 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; THe job appears in the xgrid queue, and the logs show it is running  
</span><br>
<span class="quotelev2">&gt;&gt; on a
</span><br>
<span class="quotelev2">&gt;&gt; remote machine.  However nothing ever happens and peeking in the  
</span><br>
<span class="quotelev2">&gt;&gt; xgrid
</span><br>
<span class="quotelev2">&gt;&gt; results I see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ xgrid -job results -id 8703
</span><br>
<span class="quotelev2">&gt;&gt; [brio.llnl.gov:38789] [0,0,1]-[0,0,0]  
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev2">&gt;&gt; [brio.llnl.gov:38792] [0,0,2]-[0,0,0]  
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps a firewall issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course I'm more interested in getting the new openMPI1.5 working.
</span><br>
<span class="quotelev2">&gt;&gt; When I run this, again I get an entry in the queue, and the job  
</span><br>
<span class="quotelev2">&gt;&gt; runs on a
</span><br>
<span class="quotelev2">&gt;&gt; remote machine but  I get a job failed message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ /usr/local/openmpi5/bin/mpirun -n 2 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; $ xgrid -job results -id 8702
</span><br>
<span class="quotelev2">&gt;&gt; [brio.llnl.gov:38776] Error: unknown option &quot;-mca&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note I have NOT installed openMPI on any of the other computers in  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; grid.  So perhaps that is the problem?  If I did install it on other
</span><br>
<span class="quotelev2">&gt;&gt; computers how would I tell mpirun where to find the path to the  
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt; point?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally in both cases, I don't see any way to pass xgrid specific  
</span><br>
<span class="quotelev2">&gt;&gt; argument
</span><br>
<span class="quotelev2">&gt;&gt; in on the mpi command line.  An xgrid controller divides the agents  
</span><br>
<span class="quotelev2">&gt;&gt; into
</span><br>
<span class="quotelev2">&gt;&gt; sets of logical grids and you need to specify which logical grid to  
</span><br>
<span class="quotelev2">&gt;&gt; submit
</span><br>
<span class="quotelev2">&gt;&gt; the job to.    In xgrid cli syntax one write &quot;xgrid -gid 2&quot;  for  
</span><br>
<span class="quotelev2">&gt;&gt; grid 2.
</span><br>
<span class="quotelev2">&gt;&gt; When I use openMPI all the jobs get sent to just the default grid  
</span><br>
<span class="quotelev2">&gt;&gt; which is
</span><br>
<span class="quotelev2">&gt;&gt; the grid that xgrid uses if no gid is specified.
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
<p>Charlie Strauss
<br>
Bioscience Division
<br>
cems_at_[hidden]
<br>
505 665 4838
<br>
Quidquid latine dictum sit, altum sonatur.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>In reply to:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
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
