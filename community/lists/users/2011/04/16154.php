<?
$subject_val = "Re: [OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 10:41:53 2011" -->
<!-- isoreceived="20110406144153" -->
<!-- sent="Wed, 6 Apr 2011 08:41:43 -0600" -->
<!-- isosent="20110406144143" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with the -xterm option" -->
<!-- id="D0206559-F79D-42EE-9F5A-AAFC7FE69855_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimOGNpih-TEL1_eooGuOm7A+J5kjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with the -xterm option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 10:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16155.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16153.php">Hellm&#252;ller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>In reply to:</strong> <a href="16136.php">jody: "[OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16155.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16155.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I read your error messages correctly, it looks like mpirun is crashing - the daemon is complaining that it lost the socket connection back to mpirun, and hence will abort.
<br>
<p>Are you seeing mpirun still alive?
<br>
<p><p>On Apr 5, 2011, at 4:46 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my workstation and  the cluster i set up OpenMPI (v 1.4.2) so that
</span><br>
<span class="quotelev1">&gt; it works in &quot;text-mode&quot;:
</span><br>
<span class="quotelev1">&gt;  $ mpirun -np 4  -x DISPLAY -host squid_0   printenv | grep WORLD_RANK
</span><br>
<span class="quotelev1">&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev1">&gt;  OMPI_COMM_WORLD_RANK=1
</span><br>
<span class="quotelev1">&gt;  OMPI_COMM_WORLD_RANK=2
</span><br>
<span class="quotelev1">&gt;  OMPI_COMM_WORLD_RANK=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when i use  the -xterm option to mpirun, it doesn't work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4  -x DISPLAY -host squid_0 -xterm 1,2  printenv | grep WORLD_RANK
</span><br>
<span class="quotelev1">&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev1">&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev1">&gt;  [squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev1">&gt; [sd = 8]
</span><br>
<span class="quotelev1">&gt;  [squid_0:05266] [[55607,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[55607,0],0] lost
</span><br>
<span class="quotelev1">&gt;  /usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev1">&gt;  /usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (strange: somebody wrote his message to the console)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No matter whether i set the DISPLAY variable to the full hostname of
</span><br>
<span class="quotelev1">&gt; the workstation,
</span><br>
<span class="quotelev1">&gt; to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But i do have xauth data (as far as i know):
</span><br>
<span class="quotelev1">&gt; On the remote (squid_0):
</span><br>
<span class="quotelev1">&gt;  jody_at_squid_0 ~ $ xauth list
</span><br>
<span class="quotelev1">&gt;  chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev1">&gt;  chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;  chefli.uzh.ch:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on the workstation:
</span><br>
<span class="quotelev1">&gt;  $ xauth list
</span><br>
<span class="quotelev1">&gt;  chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev1">&gt;  chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;  localhost.localdomain/unix:0  MIT-MAGIC-COOKIE-1
</span><br>
<span class="quotelev1">&gt; 146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;  chefli.uzh.ch/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In sshd_config on the workstation i have 'X11Forwarding yes'
</span><br>
<span class="quotelev1">&gt; I have also done
</span><br>
<span class="quotelev1">&gt;   xhost + squid_0
</span><br>
<span class="quotelev1">&gt; on the workstation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can i get the -xterm option running?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="16155.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16153.php">Hellm&#252;ller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>In reply to:</strong> <a href="16136.php">jody: "[OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16155.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16155.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
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
