<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 14:01:23 2007" -->
<!-- isoreceived="20070319180123" -->
<!-- sent="Mon, 19 Mar 2007 14:01:09 -0400" -->
<!-- isosent="20070319180109" -->
<!-- name="David Burns" -->
<!-- email="3db14_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote execution problem" -->
<!-- id="45FECFE5.9080709_at_qlink.queensu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8626824-D4F4-4D9D-A567-7C545CB11311_at_open-mpi.org" -->
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
<strong>From:</strong> David Burns (<em>3db14_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 14:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Previous message:</strong> <a href="2840.php">G&#246;tz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK,
<br>
<p>Trying
<br>
<p>mpirun -v -np 2 --debug-daemons --host talisker4 hostname
<br>
<p>yields the error
<br>
[talisker4.phy.queensu.ca:00682] [0,0,1]-[0,0,0] 
<br>
mca_oob_tcp_peer_try_connect: connect to 130.15.29.85:33821 failed, 
<br>
connecting over all interfaces failed!
<br>
[talisker2.phy.queensu.ca:28538] ERROR: A daemon on node talisker4 
<br>
failed to start as expected.
<br>
[talisker2.phy.queensu.ca:28538] ERROR: There may be more information 
<br>
available from
<br>
[talisker2.phy.queensu.ca:28538] ERROR: the remote shell (see above).
<br>
[talisker2.phy.queensu.ca:28538] ERROR: The daemon exited unexpectedly 
<br>
with status 255.
<br>
<p>So apparently, the error is a result of talisker4 (remote) being unable 
<br>
to open a connection with talisker2 (local) in this case. Trying the reverse
<br>
<p>mpirun -v -np 2 --debug-daemons --host talisker2 hostname
<br>
<p>executed from talisker4 yields the same error message reversed (ie 2 
<br>
cant connect to 4). This makes me think its a firewall problem...
<br>
<p>- Dave
<br>
<p><p><p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1  --host talisker4 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that hangs, try adding '--debug-daemons' to the command line and  
</span><br>
<span class="quotelev1">&gt; see if the output from that helps. If not, please send the output to  
</span><br>
<span class="quotelev1">&gt; the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2007, at 1:59 AM, David Burns wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I neglected to mention that the test is currently running on 100 Mbps
</span><br>
<span class="quotelev2">&gt;&gt; ethernet. I have also tested the setup using a simple &quot;hello world my
</span><br>
<span class="quotelev2">&gt;&gt; rank is_&quot; program and get the same hanging problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3db14_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anyone could help me out with this I would greatly appreciate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have already read through the entire FAQ and havent seen anyone  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have successfully tested and run the ompi application I've coded  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on both computers talisker2 and talisker4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 --host localhost fdtd : -np 2 --host localhost rnode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when attempting to execute processes remotely, eg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 --host localhost fdtd : -np 2 --host talisker4 rnode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nothing happens. The shell just sits there, nothing prints (despite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stdouts), and does not return until I kill it. I have set up ssh with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsa-authentication, no passphrase. The paths are all set; I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt; purposefully missetting them and the error is reported and returns as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected (so it isnt that).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More info about the system- fedora core 5, (Open MPI) 1.1.4.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ompi_info outputs attached. Any help or ideas of where to go next
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No virus found in this incoming message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checked by AVG Free Edition.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version: 7.5.446 / Virus Database: 268.18.13/725 - Release Date:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17/03/2007 12:33 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Previous message:</strong> <a href="2840.php">G&#246;tz Waschk: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
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
