<?
$subject_val = "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 15:41:03 2010" -->
<!-- isoreceived="20100621194103" -->
<!-- sent="Mon, 21 Jun 2010 13:40:48 -0600" -->
<!-- isosent="20100621194048" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1" -->
<!-- id="5D7380E6-60B2-4DC3-8F22-F100EEAE9B0D_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0F620451-0F42-4B4C-9552-6E437DAE4279_at_lanl.gov" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 15:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have to set two environment variables (XGRID_CONTROLLER_HOSTNAME and XGRID_CONTROLLER_PASSWORD) with the correct information in order for the XGrid starter to work.  Due to the way XGrid works, the nolocal option will not work properly when launching with XGrid.
<br>
<p>Brian
<br>
<p>On Jun 21, 2010, at 1:28 PM, charlie strauss wrote:
<br>
<p>Perhaps I was mistaken about 1.5rc1.    As for  the installed openMPI on mac osx, my 10.5 OSX has v1.2.3  when I try to run it, it works fine locally but it never finds the xgrid.
<br>
<p>any mpi job I run, will run on the localhost not the xgrid agents.  If try to force the issue by specifying -nolocal then it just complains there are no nodes.
<br>
<p>SO how do I use openMPI so that it uses the nodes of an xgrid cluster?
<br>
<p>mpirun -nolocal -n 32 /bin/hostname
<br>
--------------------------------------------------------------------------
<br>
There are no available nodes allocated to this job. This could be because
<br>
no nodes were found or all the available nodes were already used.
<br>
<p>Note that since the -nolocal option was given no processes can be
<br>
launched on the local node.
<br>
--------------------------------------------------------------------------
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_support_fns.c at line 168
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/round_robin/rmaps_rr.c at line 402
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_map_job.c at line 210
<br>
[ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/rmgr_urm.c at line 372
<br>
<p><p><p><p><p><p><p><p><p>On Jun 16, 2010, at 1:36 PM, Ralph Castain wrote:
<br>
<p>Where did you see that 1.5 works with xgrid? That support has been broken since the 1.2 series, unfortunately, so it would help to ensure we don't have stale docs out there to the contrary.
<br>
<p>As for the 1.2 results, you are aware (I imagine) that OSX ships with the last 1.2 release already installed? You don't have to do anything to use it but run.
<br>
<p>If you are getting peer timeouts, that is almost always a firewall issue. But I would try the factory-installed version first to be sure.
<br>
<p>On Jun 16, 2010, at 1:14 PM, Charlie E. Strauss wrote:
<br>
<p>I'm new to openMPI.  I'm trying to set it up for using xgrid.  I have read
<br>
that v1.3 and v1.4 are broken on OSX 10.5 and 10.6 although I have seen
<br>
some discussions in the archives of this mail list saying some people have
<br>
v1.4 running on 10.6.
<br>
<p>I have now compiled both openMPI 1.2 and openMPI1.5rc  and neither of
<br>
these is working for me with xgrid.   Both of these say they work with
<br>
xgrid.
<br>
<p>The failuremodes are different.
<br>
<p>Anyone know how to get a working install?  I am building this on a OSX 10.5.8
<br>
machine.  THe xgrid controller is on a OSX 10.6 server machine.  I have tried
<br>
configuring with and without the --with-xgrid option.
<br>
<p>Behaviour of openMPI1.2
<br>
$ /usr/local/openmpi/bin/mpirun -nolocal -n 2 /bin/hostname
<br>
<p>THe job appears in the xgrid queue, and the logs show it is running on a
<br>
remote machine.  However nothing ever happens and peeking in the xgrid
<br>
results I see:
<br>
<p>$ xgrid -job results -id 8703
<br>
[brio.llnl.gov:38789] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed: Operation timed out (60) - retrying
<br>
[brio.llnl.gov:38792] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
connection failed: Operation timed out (60) - retrying
<br>
<p>Perhaps a firewall issue?
<br>
<p>Of course I'm more interested in getting the new openMPI1.5 working.
<br>
When I run this, again I get an entry in the queue, and the job runs on a
<br>
remote machine but  I get a job failed message
<br>
<p>$ /usr/local/openmpi5/bin/mpirun -n 2 /bin/hostname
<br>
$ xgrid -job results -id 8702
<br>
[brio.llnl.gov:38776] Error: unknown option &quot;-mca&quot;
<br>
<p><pre>
----
Note I have NOT installed openMPI on any of the other computers in the
grid.  So perhaps that is the problem?  If I did install it on other
computers how would I tell mpirun where to find the path to the install
point?
----
Finally in both cases, I don't see any way to pass xgrid specific argument
in on the mpi command line.  An xgrid controller divides the agents into
sets of logical grids and you need to specify which logical grid to submit
the job to.    In xgrid cli syntax one write &quot;xgrid -gid 2&quot;  for grid 2.
When I use openMPI all the jobs get sent to just the default grid which is
the grid that xgrid uses if no gid is specified.
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Charlie Strauss
Bioscience Division
cems_at_[hidden]&lt;mailto:cems_at_[hidden]&gt;
505 665 4838
Quidquid latine dictum sit, altum sonatur.
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
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
