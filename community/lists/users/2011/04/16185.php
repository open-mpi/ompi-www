<?
$subject_val = "Re: [OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 10:01:16 2011" -->
<!-- isoreceived="20110407140116" -->
<!-- sent="Thu, 7 Apr 2011 16:01:11 +0200" -->
<!-- isosent="20110407140111" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with the -xterm option" -->
<!-- id="BANLkTi=yQ_zDWifae7KDeV-oyjHri08uYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A29DCCC-2E9A-4D80-9B7D-6AB7ABC5BCCE_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-07 10:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16186.php">Prentice Bisbal: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="16164.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
thank you for your suggestions. After some fiddling, i found that after my
<br>
last update (gentoo) my sshd_config had been overwritten
<br>
(X11Forwarding was set to 'no').
<br>
<p>After correcting that, i can now open remote terminals with 'ssh -Y'
<br>
and with 'ssh -X'
<br>
(but with '-X' is till get those xauth warnings)
<br>
<p>But the xterm option still doesn't work:
<br>
&nbsp;&nbsp;jody_at_chefli ~/share/neander $ mpirun -np 4 -host squid_0 -xterm 1,2
<br>
printenv | grep WORLD_RANK
<br>
&nbsp;&nbsp;Warning: untrusted X11 forwarding setup failed: xauth key data not generated
<br>
&nbsp;&nbsp;Warning: No xauth data; using fake authentication data for X11 forwarding.
<br>
&nbsp;&nbsp;/usr/bin/xterm Xt error: Can't open display: localhost:11.0
<br>
&nbsp;&nbsp;/usr/bin/xterm Xt error: Can't open display: localhost:11.0
<br>
&nbsp;&nbsp;OMPI_COMM_WORLD_RANK=0
<br>
&nbsp;&nbsp;[aim-squid_0:09856] [[54132,0],1]-&gt;[[54132,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
<br>
[sd = 8]
<br>
&nbsp;&nbsp;[aim-squid_0:09856] [[54132,0],1] routed:binomial: Connection to
<br>
lifeline [[54132,0],0] lost
<br>
<p>So it looks like the two processes from squid_0 can't open the display this way,
<br>
but one of them writes the output to the console...
<br>
Surprisingly, they are trying 'localhost:11.0' whereas when i use 'ssh -Y' the
<br>
DISPLAY variable is set to 'localhost:10.0'
<br>
<p>So in what way would OMPI have to be adapted, so -xterm would work?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Wed, Apr 6, 2011 at 8:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Here's a little more info - it's for Cygwin, but I don't see anything
</span><br>
<span class="quotelev1">&gt; Cygwin-specific in the answers:
</span><br>
<span class="quotelev1">&gt; <a href="http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding">http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2011, at 12:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry Jody - I should have read your note more carefully to see that you
</span><br>
<span class="quotelev1">&gt; already tried -Y. :-(
</span><br>
<span class="quotelev1">&gt; Not sure what to suggest...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2011, at 12:29 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Like I said, I'm not expert. However, a quick &quot;google&quot; of revealed this
</span><br>
<span class="quotelev1">&gt; result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When trying to set up x11 forwarding over an ssh session to a remote server
</span><br>
<span class="quotelev1">&gt; with the -X switch, I was getting an error like Warning: No xauth
</span><br>
<span class="quotelev1">&gt; data;&#160;using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When doing something like:
</span><br>
<span class="quotelev1">&gt; ssh -Xl root 10.1.1.9&#160;to a remote server, the authentication worked, but I
</span><br>
<span class="quotelev1">&gt; got an error message like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jason_at_badman ~/bin $ ssh -Xl root 10.1.1.9
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt; Last login: Wed Apr 14 18:18:39 2010 from 10.1.1.5
</span><br>
<span class="quotelev1">&gt; [root_at_RHEL ~]#
</span><br>
<span class="quotelev1">&gt; and any X programs I ran would not display on my local system..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Turns out the solution is to use the -Y switch instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh -Yl root 10.1.1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and that worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See if that works for you - if it does, we may have to modify OMPI to
</span><br>
<span class="quotelev1">&gt; accommodate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2011, at 9:19 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; No, after the above error message mpirun has exited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i also noticed that it is to ssh into squid_0 and open a xterm there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_chefli ~/share/neander $ ssh -Y squid_0
</span><br>
<span class="quotelev1">&gt; &#160;Last login: Wed Apr &#160;6 17:14:02 CEST 2011 from chefli.uzh.ch on pts/0
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev1">&gt; &#160;xterm Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt; &#160;xterm: &#160;DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ export DISPLAY=130.60.126.74:0.0
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev1">&gt; &#160;xterm Xt error: Can't open display: 130.60.126.74:0.0
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ export DISPLAY=chefli.uzh.ch:0.0
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev1">&gt; &#160;xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ exit
</span><br>
<span class="quotelev1">&gt; &#160;logout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; same thing with ssh -X, but here i get the same warning/error message
</span><br>
<span class="quotelev1">&gt; as with mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_chefli ~/share/neander $ ssh -X squid_0
</span><br>
<span class="quotelev1">&gt; &#160;Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt; &#160;Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt; &#160;Last login: Wed Apr &#160;6 17:12:31 CEST 2011 from chefli.uzh.ch on ssh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So perhaps the whole problem is linked to that xauth-thing.
</span><br>
<span class="quotelev1">&gt; Do you have a suggestion how this can be solved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; &#160;Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 6, 2011 at 4:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I read your error messages correctly, it looks like mpirun is crashing -
</span><br>
<span class="quotelev1">&gt; the daemon is complaining that it lost the socket connection back to mpirun,
</span><br>
<span class="quotelev1">&gt; and hence will abort.
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
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my workstation and &#160;the cluster i set up OpenMPI (v 1.4.2) so that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it works in &quot;text-mode&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;$ mpirun -np 4 &#160;-x DISPLAY -host squid_0 &#160; printenv | grep WORLD_RANK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_COMM_WORLD_RANK=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_COMM_WORLD_RANK=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_COMM_WORLD_RANK=3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when i use &#160;the -xterm option to mpirun, it doesn't work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 &#160;-x DISPLAY -host squid_0 -xterm 1,2 &#160;printenv | grep
</span><br>
<span class="quotelev1">&gt; WORLD_RANK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;[squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sd = 8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;[squid_0:05266] [[55607,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lifeline [[55607,0],0] lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (strange: somebody wrote his message to the console)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No matter whether i set the DISPLAY variable to the full hostname of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the workstation,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i do have xauth data (as far as i know):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the remote (squid_0):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;jody_at_squid_0 ~ $ xauth list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;chefli/unix:10 &#160;MIT-MAGIC-COOKIE-1 &#160;5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;chefli/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;chefli.uzh.ch:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on the workstation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;$ xauth list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;chefli/unix:10 &#160;MIT-MAGIC-COOKIE-1 &#160;5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;chefli/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;localhost.localdomain/unix:0 &#160;MIT-MAGIC-COOKIE-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;chefli.uzh.ch/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In sshd_config on the workstation i have 'X11Forwarding yes'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; xhost + squid_0
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="16186.php">Prentice Bisbal: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="16164.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
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
