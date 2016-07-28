<?
$subject_val = "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 17:01:41 2010" -->
<!-- isoreceived="20100621210141" -->
<!-- sent="Mon, 21 Jun 2010 15:01:33 -0600" -->
<!-- isosent="20100621210133" -->
<!-- name="charlie strauss" -->
<!-- email="cems_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1" -->
<!-- id="08E5C613-01B4-45E3-B59C-021B54E37FF8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> charlie strauss (<em>cems_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 17:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13367.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13367.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be more specific.
<br>
<p>I have a working xgrid with the envirnment variables set.  In  
<br>
particular I can run xgrid commands from the shell prompt like this:
<br>
<p>xgrid -job submit /bin/hostname
<br>
<p>and it runs because the enviroment variables are set.
<br>
<p>my understanding is that openMPI will look for those ENV vars and if  
<br>
present try to run on xgrid.  my understanding is that there are no  
<br>
configuration files for this needed.  It should work out of the box.
<br>
<p>thus I could be able to type at the same command line:
<br>
mpirun -np 3 /bin/hostname
<br>
&nbsp;&nbsp;or
<br>
mpirun -np 3 examples/hello_c    ( the mpi example)
<br>
<p>and have them run on xgrid.    (for example see <a href="http://www.macresearch.org/getting_started_with_openmpi_and_xgrid">http://www.macresearch.org/getting_started_with_openmpi_and_xgrid</a> 
<br>
&nbsp;&nbsp;)
<br>
<p>But that's not what happens instead they always run on the localhost
<br>
<p>&nbsp;&nbsp;I know I'm not the only one who has this issue since i can reproduce  
<br>
it on 6 different computers around me and I see questions like mine  
<br>
posted on the web.
<br>
<p>Is there any other configuration one needs to use the built-in openmpi  
<br>
and have it use an available xgrid?
<br>
<p>(separate question: if so, does it always uses the default logical  
<br>
grid or is there a way to configure which grid id (a given  
<br>
controller_host can partition the grid into logical subsets of nodes.  
<br>
in xgrid-speak these are calles logical grids and one of these is  
<br>
assigned to be the default grid if the grif-id is not specified).
<br>
<p><p><p><p><p><p><p>On Jun 21, 2010, at 1:40 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; You have to set two environment variables (XGRID_CONTROLLER_HOSTNAME  
</span><br>
<span class="quotelev1">&gt; and XGRID_CONTROLLER_PASSWORD) with the correct information in order  
</span><br>
<span class="quotelev1">&gt; for the XGrid starter to work.  Due to the way XGrid works, the  
</span><br>
<span class="quotelev1">&gt; nolocal option will not work properly when launching with XGrid.
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
<span class="quotelev2">&gt;&gt; Perhaps I was mistaken about 1.5rc1.    As for  the installed  
</span><br>
<span class="quotelev2">&gt;&gt; openMPI on mac osx, my 10.5 OSX has v1.2.3  when I try to run it,  
</span><br>
<span class="quotelev2">&gt;&gt; it works fine locally but it never finds the xgrid.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any mpi job I run, will run on the localhost not the xgrid agents.   
</span><br>
<span class="quotelev2">&gt;&gt; If try to force the issue by specifying -nolocal then it just  
</span><br>
<span class="quotelev2">&gt;&gt; complains there are no nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SO how do I use openMPI so that it uses the nodes of an xgrid  
</span><br>
<span class="quotelev2">&gt;&gt; cluster?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -nolocal -n 32 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no available nodes allocated to this job. This could be  
</span><br>
<span class="quotelev2">&gt;&gt; because
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
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev2">&gt;&gt; resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps/base/rmaps_base_support_fns.c at line 168
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev2">&gt;&gt; resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps/round_robin/rmaps_rr.c at line 402
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev2">&gt;&gt; resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps/base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev2">&gt;&gt; [ocho.lanl.gov:35438] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev2">&gt;&gt; resource in file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmgr/urm/rmgr_urm.c at line 372
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
<span class="quotelev3">&gt;&gt;&gt; Where did you see that 1.5 works with xgrid? That support has been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken since the 1.2 series, unfortunately, so it would help to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure we don't have stale docs out there to the contrary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for the 1.2 results, you are aware (I imagine) that OSX ships  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the last 1.2 release already installed? You don't have to do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything to use it but run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are getting peer timeouts, that is almost always a firewall  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue. But I would try the factory-installed version first to be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 16, 2010, at 1:14 PM, Charlie E. Strauss wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm new to openMPI.  I'm trying to set it up for using xgrid.  I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that v1.3 and v1.4 are broken on OSX 10.5 and 10.6 although I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have seen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some discussions in the archives of this mail list saying some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; people have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.4 running on 10.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have now compiled both openMPI 1.2 and openMPI1.5rc  and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; neither of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these is working for me with xgrid.   Both of these say they work  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xgrid.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The failuremodes are different.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyone know how to get a working install?  I am building this on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a OSX 10.5.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine.  THe xgrid controller is on a OSX 10.6 server machine.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried
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
<span class="quotelev4">&gt;&gt;&gt;&gt; THe job appears in the xgrid queue, and the logs show it is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remote machine.  However nothing ever happens and peeking in the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xgrid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ xgrid -job results -id 8703
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [brio.llnl.gov:38789] [0,0,1]-[0,0,0]  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [brio.llnl.gov:38792] [0,0,2]-[0,0,0]  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection failed: Operation timed out (60) - retrying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps a firewall issue?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course I'm more interested in getting the new openMPI1.5  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run this, again I get an entry in the queue, and the job  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runs on a
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Note I have NOT installed openMPI on any of the other computers  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grid.  So perhaps that is the problem?  If I did install it on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computers how would I tell mpirun where to find the path to the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Finally in both cases, I don't see any way to pass xgrid specific  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in on the mpi command line.  An xgrid controller divides the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; agents into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sets of logical grids and you need to specify which logical grid  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to submit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job to.    In xgrid cli syntax one write &quot;xgrid -gid 2&quot;  for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grid 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I use openMPI all the jobs get sent to just the default grid  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13361.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>In reply to:</strong> <a href="13360.php">Barrett, Brian W: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13367.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Reply:</strong> <a href="13367.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
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
