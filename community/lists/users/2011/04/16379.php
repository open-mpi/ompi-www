<?
$subject_val = "Re: [OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 09:06:16 2011" -->
<!-- isoreceived="20110428130616" -->
<!-- sent="Thu, 28 Apr 2011 07:06:06 -0600" -->
<!-- isosent="20110428130606" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with the -xterm option" -->
<!-- id="CE1F686F-0786-40C1-AD57-82BF0FEA29DB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikLDifhwRAw_CEGWwmjGZ-EAt4r_w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-28 09:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Previous message:</strong> <a href="16378.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16382.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16382.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be able to just set
<br>
<p>-mca plm_rsh_agent &quot;ssh -Y&quot;
<br>
<p>on your cmd line, I believe
<br>
<p>On Apr 28, 2011, at 12:53 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an easy way i could modify the OpenMPI code so that it would use
</span><br>
<span class="quotelev1">&gt; the -Y option for ssh when connecting to remote machines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 7, 2011 at 4:01 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt; thank you for your suggestions. After some fiddling, i found that after my
</span><br>
<span class="quotelev2">&gt;&gt; last update (gentoo) my sshd_config had been overwritten
</span><br>
<span class="quotelev2">&gt;&gt; (X11Forwarding was set to 'no').
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After correcting that, i can now open remote terminals with 'ssh -Y'
</span><br>
<span class="quotelev2">&gt;&gt; and with 'ssh -X'
</span><br>
<span class="quotelev2">&gt;&gt; (but with '-X' is till get those xauth warnings)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But the xterm option still doesn't work:
</span><br>
<span class="quotelev2">&gt;&gt;  jody_at_chefli ~/share/neander $ mpirun -np 4 -host squid_0 -xterm 1,2
</span><br>
<span class="quotelev2">&gt;&gt; printenv | grep WORLD_RANK
</span><br>
<span class="quotelev2">&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev2">&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev2">&gt;&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev2">&gt;&gt;  [aim-squid_0:09856] [[54132,0],1]-&gt;[[54132,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev2">&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev2">&gt;&gt;  [aim-squid_0:09856] [[54132,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev2">&gt;&gt; lifeline [[54132,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it looks like the two processes from squid_0 can't open the display this way,
</span><br>
<span class="quotelev2">&gt;&gt; but one of them writes the output to the console...
</span><br>
<span class="quotelev2">&gt;&gt; Surprisingly, they are trying 'localhost:11.0' whereas when i use 'ssh -Y' the
</span><br>
<span class="quotelev2">&gt;&gt; DISPLAY variable is set to 'localhost:10.0'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So in what way would OMPI have to be adapted, so -xterm would work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 6, 2011 at 8:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a little more info - it's for Cygwin, but I don't see anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cygwin-specific in the answers:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding">http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 6, 2011, at 12:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry Jody - I should have read your note more carefully to see that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already tried -Y. :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure what to suggest...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 6, 2011, at 12:29 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Like I said, I'm not expert. However, a quick &quot;google&quot; of revealed this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When trying to set up x11 forwarding over an ssh session to a remote server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the -X switch, I was getting an error like Warning: No xauth
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When doing something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh -Xl root 10.1.1.9 to a remote server, the authentication worked, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got an error message like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jason_at_badman ~/bin $ ssh -Xl root 10.1.1.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last login: Wed Apr 14 18:18:39 2010 from 10.1.1.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_RHEL ~]#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and any X programs I ran would not display on my local system..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Turns out the solution is to use the -Y switch instead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh -Yl root 10.1.1.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that worked fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See if that works for you - if it does, we may have to modify OMPI to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accommodate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 6, 2011, at 9:19 AM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, after the above error message mpirun has exited.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But i also noticed that it is to ssh into squid_0 and open a xterm there:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ ssh -Y squid_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Last login: Wed Apr  6 17:14:02 CEST 2011 from chefli.uzh.ch on pts/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  xterm Xt error: Can't open display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  xterm:  DISPLAY is not set
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ export DISPLAY=130.60.126.74:0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  xterm Xt error: Can't open display: 130.60.126.74:0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ export DISPLAY=chefli.uzh.ch:0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same thing with ssh -X, but here i get the same warning/error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as with mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ ssh -X squid_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Last login: Wed Apr  6 17:12:31 CEST 2011 from chefli.uzh.ch on ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So perhaps the whole problem is linked to that xauth-thing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have a suggestion how this can be solved?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Apr 6, 2011 at 4:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I read your error messages correctly, it looks like mpirun is crashing -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the daemon is complaining that it lost the socket connection back to mpirun,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and hence will abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you seeing mpirun still alive?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 5, 2011, at 4:46 AM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On my workstation and  the cluster i set up OpenMPI (v 1.4.2) so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works in &quot;text-mode&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ mpirun -np 4  -x DISPLAY -host squid_0   printenv | grep WORLD_RANK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but when i use  the -xterm option to mpirun, it doesn't work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 4  -x DISPLAY -host squid_0 -xterm 1,2  printenv | grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WORLD_RANK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [squid_0:05266] [[55607,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lifeline [[55607,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (strange: somebody wrote his message to the console)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No matter whether i set the DISPLAY variable to the full hostname of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the workstation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But i do have xauth data (as far as i know):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the remote (squid_0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  jody_at_squid_0 ~ $ xauth list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  chefli.uzh.ch:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the workstation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ xauth list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  localhost.localdomain/unix:0  MIT-MAGIC-COOKIE-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  chefli.uzh.ch/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In sshd_config on the workstation i have 'X11Forwarding yes'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have also done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   xhost + squid_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the workstation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can i get the -xterm option running?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16380.php">Eugene Loh: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>Previous message:</strong> <a href="16378.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16366.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16382.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16382.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
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
