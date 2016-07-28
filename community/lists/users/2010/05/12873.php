<?
$subject_val = "Re: [OMPI users] Calling MPI from a CGI script";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 07:53:08 2010" -->
<!-- isoreceived="20100504115308" -->
<!-- sent="Tue, 4 May 2010 06:52:50 -0500" -->
<!-- isosent="20100504115250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI from a CGI script" -->
<!-- id="A6594052-0B16-40A3-B8FB-6236FF4C97E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LNX.2.00.1004291224050.14317_at_moretti.cs.ubc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI from a CGI script<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 07:52:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12874.php">Ralph Castain: "[OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="12872.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12851.php">Srujan Enaganti: "[OMPI users] Calling MPI from a CGI script"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2010, at 2:25 PM, Srujan Enaganti wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to run an MPI program as a CGI Python script which is running
</span><br>
<span class="quotelev1">&gt; over an Apache web server running locally on my computer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a test.py file which has the code snippet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmd = 'opt/local/bin/mpiexec -np 10 testmpi'
</span><br>
<span class="quotelev1">&gt; output = commands.getoutput(cmd)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run the file test.py as an executable over command line (as
</span><br>
<span class="quotelev1">&gt; ./test.py ), it works perfectly fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I try to run the same over the web browser, the MPI code
</span><br>
<span class="quotelev1">&gt; functions as if the command was 'mpiexec -n 1 testmpi'.
</span><br>
<span class="quotelev1">&gt; It is unable to recognize that there are multiple processes that are being
</span><br>
<span class="quotelev1">&gt; invoked. In other words it is not forking child processes.
</span><br>
<p>Can you explain that a little more -- do you mean that it only creates 1 testmpi process, or that it creates 10 testmpi processes and they each think that they're the only process in MPI_COMM_WORLD?
<br>
<p><span class="quotelev1">&gt; I checked in to the error log in apache regarding the same. The
</span><br>
<span class="quotelev1">&gt; corresponding error code is following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261.local:07199]
</span><br>
<span class="quotelev1">&gt; [0,0,0]-[0,0,1] mca_oob_tcp_msg_send_handler: writev failed: Broken pipe
</span><br>
<span class="quotelev1">&gt; (32), referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
</span><br>
<p>I'm not sure I understand -- you said above that the processes were running incorrectly, but this error message indicates that they may be failing to launch altogether.  Can you explain?
<br>
<p><span class="quotelev1">&gt; [Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261.local:07199]
</span><br>
<span class="quotelev1">&gt; [0,0,0] ORTE_ERROR_LOG: Communication failure in file
</span><br>
<span class="quotelev1">&gt; /SourceCache/openmpi/openmpi-
</span><br>
<span class="quotelev1">&gt; 5/openmpi/orte/mca/gpr/replica/communications/gpr_replica_recv_proxy_msgs.c
</span><br>
<span class="quotelev1">&gt; at line 49, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
</span><br>
<p>What version of Open MPI are you using?  Can you try updating to the latest release?  The source code file referred to in the above message indicates that you might be using a fairly old version.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12874.php">Ralph Castain: "[OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="12872.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12851.php">Srujan Enaganti: "[OMPI users] Calling MPI from a CGI script"</a>
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
