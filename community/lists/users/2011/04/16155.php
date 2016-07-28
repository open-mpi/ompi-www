<?
$subject_val = "Re: [OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 11:19:20 2011" -->
<!-- isoreceived="20110406151920" -->
<!-- sent="Wed, 6 Apr 2011 17:19:15 +0200" -->
<!-- isosent="20110406151915" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with the -xterm option" -->
<!-- id="BANLkTimALLJkOf-aqcAPpt=5nL_+4WCeOA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0206559-F79D-42EE-9F5A-AAFC7FE69855_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 11:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16156.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16162.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16162.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
No, after the above error message mpirun has exited.
<br>
<p>But i also noticed that it is to ssh into squid_0 and open a xterm there:
<br>
<p>&nbsp;&nbsp;jody_at_chefli ~/share/neander $ ssh -Y squid_0
<br>
&nbsp;&nbsp;Last login: Wed Apr  6 17:14:02 CEST 2011 from chefli.uzh.ch on pts/0
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ xterm
<br>
&nbsp;&nbsp;xterm Xt error: Can't open display:
<br>
&nbsp;&nbsp;xterm:  DISPLAY is not set
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ export DISPLAY=130.60.126.74:0.0
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ xterm
<br>
&nbsp;&nbsp;xterm Xt error: Can't open display: 130.60.126.74:0.0
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ export DISPLAY=chefli.uzh.ch:0.0
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ xterm
<br>
&nbsp;&nbsp;xterm Xt error: Can't open display: chefli.uzh.ch:0.0
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ exit
<br>
&nbsp;&nbsp;logout
<br>
<p>same thing with ssh -X, but here i get the same warning/error message
<br>
as with mpirun:
<br>
<p>&nbsp;&nbsp;jody_at_chefli ~/share/neander $ ssh -X squid_0
<br>
&nbsp;&nbsp;Warning: untrusted X11 forwarding setup failed: xauth key data not generated
<br>
&nbsp;&nbsp;Warning: No xauth data; using fake authentication data for X11 forwarding.
<br>
&nbsp;&nbsp;Last login: Wed Apr  6 17:12:31 CEST 2011 from chefli.uzh.ch on ssh
<br>
<p>So perhaps the whole problem is linked to that xauth-thing.
<br>
Do you have a suggestion how this can be solved?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Wed, Apr 6, 2011 at 4:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If I read your error messages correctly, it looks like mpirun is crashing - the daemon is complaining that it lost the socket connection back to mpirun, and hence will abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you seeing mpirun still alive?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2011, at 4:46 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On my workstation and &#160;the cluster i set up OpenMPI (v 1.4.2) so that
</span><br>
<span class="quotelev2">&gt;&gt; it works in &quot;text-mode&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;$ mpirun -np 4 &#160;-x DISPLAY -host squid_0 &#160; printenv | grep WORLD_RANK
</span><br>
<span class="quotelev2">&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev2">&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=1
</span><br>
<span class="quotelev2">&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=2
</span><br>
<span class="quotelev2">&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when i use &#160;the -xterm option to mpirun, it doesn't work
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 4 &#160;-x DISPLAY -host squid_0 -xterm 1,2 &#160;printenv | grep WORLD_RANK
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev2">&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev2">&gt;&gt; &#160;[squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev2">&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev2">&gt;&gt; &#160;[squid_0:05266] [[55607,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev2">&gt;&gt; lifeline [[55607,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; &#160;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev2">&gt;&gt; &#160;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (strange: somebody wrote his message to the console)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No matter whether i set the DISPLAY variable to the full hostname of
</span><br>
<span class="quotelev2">&gt;&gt; the workstation,
</span><br>
<span class="quotelev2">&gt;&gt; to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i do have xauth data (as far as i know):
</span><br>
<span class="quotelev2">&gt;&gt; On the remote (squid_0):
</span><br>
<span class="quotelev2">&gt;&gt; &#160;jody_at_squid_0 ~ $ xauth list
</span><br>
<span class="quotelev2">&gt;&gt; &#160;chefli/unix:10 &#160;MIT-MAGIC-COOKIE-1 &#160;5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev2">&gt;&gt; &#160;chefli/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev2">&gt;&gt; &#160;chefli.uzh.ch:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on the workstation:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;$ xauth list
</span><br>
<span class="quotelev2">&gt;&gt; &#160;chefli/unix:10 &#160;MIT-MAGIC-COOKIE-1 &#160;5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev2">&gt;&gt; &#160;chefli/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev2">&gt;&gt; &#160;localhost.localdomain/unix:0 &#160;MIT-MAGIC-COOKIE-1
</span><br>
<span class="quotelev2">&gt;&gt; 146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev2">&gt;&gt; &#160;chefli.uzh.ch/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In sshd_config on the workstation i have 'X11Forwarding yes'
</span><br>
<span class="quotelev2">&gt;&gt; I have also done
</span><br>
<span class="quotelev2">&gt;&gt; &#160; xhost + squid_0
</span><br>
<span class="quotelev2">&gt;&gt; on the workstation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can i get the -xterm option running?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Jody
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16156.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16162.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16162.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
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
