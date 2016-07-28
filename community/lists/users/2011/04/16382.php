<?
$subject_val = "Re: [OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 10:38:39 2011" -->
<!-- isoreceived="20110428143839" -->
<!-- sent="Thu, 28 Apr 2011 16:38:34 +0200" -->
<!-- isosent="20110428143834" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with the -xterm option" -->
<!-- id="BANLkTikmBWbJ4cC7PYMBbzAEB0sLFofMLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CE1F686F-0786-40C1-AD57-82BF0FEA29DB_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-28 10:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16383.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16381.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16379.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16390.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Unfortunately this does not solve my problem.
<br>
While i can do
<br>
&nbsp;&nbsp;ssh -Y squid_0 xterm
<br>
and this will open an xterm on m,y machiine (chefli),
<br>
i run into problems with the -xterm option of openmpi:
<br>
<p>&nbsp;&nbsp;jody_at_chefli ~/share/neander $ mpirun -np 4  -mca plm_rsh_agent &quot;ssh
<br>
-Y&quot; -host squid_0 --xterm 1 hostname
<br>
&nbsp;&nbsp;squid_0
<br>
&nbsp;&nbsp;[squid_0:28046] [[35219,0],1]-&gt;[[35219,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
<br>
[sd = 8]
<br>
&nbsp;&nbsp;[squid_0:28046] [[35219,0],1] routed:binomial: Connection to
<br>
lifeline [[35219,0],0] lost
<br>
&nbsp;&nbsp;[squid_0:28046] [[35219,0],1]-&gt;[[35219,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
<br>
[sd = 8]
<br>
&nbsp;&nbsp;[squid_0:28046] [[35219,0],1] routed:binomial: Connection to
<br>
lifeline [[35219,0],0] lost
<br>
&nbsp;&nbsp;/usr/bin/xterm Xt error: Can't open display: localhost:11.0
<br>
<p>By the way when i look at the DISPLAY variable in the xterm window
<br>
opened via squid_0,
<br>
i also have the display variable &quot;localhost:11.0&quot;
<br>
<p>Actually, the difference with using the &quot;-mca plm_rsh_agent&quot; is that
<br>
the lines wiht the warnings about &quot;xauth&quot; and &quot;untrusted X&quot; do not
<br>
appear:
<br>
<p>&nbsp;&nbsp;jody_at_chefli ~/share/neander $ mpirun -np 4   -host squid_0 -xterm 1 hostname
<br>
&nbsp;&nbsp;Warning: untrusted X11 forwarding setup failed: xauth key data not generated
<br>
&nbsp;&nbsp;Warning: No xauth data; using fake authentication data for X11 forwarding.
<br>
&nbsp;&nbsp;squid_0
<br>
&nbsp;&nbsp;[squid_0:28337] [[34926,0],1]-&gt;[[34926,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
<br>
[sd = 8]
<br>
&nbsp;&nbsp;[squid_0:28337] [[34926,0],1] routed:binomial: Connection to
<br>
lifeline [[34926,0],0] lost
<br>
&nbsp;&nbsp;[squid_0:28337] [[34926,0],1]-&gt;[[34926,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
<br>
[sd = 8]
<br>
&nbsp;&nbsp;[squid_0:28337] [[34926,0],1] routed:binomial: Connection to
<br>
lifeline [[34926,0],0] lost
<br>
&nbsp;&nbsp;/usr/bin/xterm Xt error: Can't open display: localhost:11.0
<br>
<p><p>I have doubts that the &quot;-Y&quot; is passed correctly:
<br>
&nbsp;&nbsp;&nbsp;jody_at_triops ~/share/neander $ mpirun -np   -mca plm_rsh_agent &quot;ssh
<br>
-Y&quot; -host squid_0 xterm
<br>
&nbsp;&nbsp;xterm Xt error: Can't open display:
<br>
&nbsp;&nbsp;xterm:  DISPLAY is not set
<br>
&nbsp;&nbsp;xterm Xt error: Can't open display:
<br>
&nbsp;&nbsp;xterm:  DISPLAY is not set
<br>
<p><p>---&gt; as a matter of fact i noticed that the xterm option doesn't work locally:
<br>
&nbsp;&nbsp;mpirun -np 4    -xterm 1 /usr/bin/printenv
<br>
prints verything onto the console.
<br>
<p>Do you have any other suggestions i could try?
<br>
<p>Thank You
<br>
&nbsp;Jody
<br>
<p>On Thu, Apr 28, 2011 at 3:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Should be able to just set
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_agent &quot;ssh -Y&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on your cmd line, I believe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2011, at 12:53 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an easy way i could modify the OpenMPI code so that it would use
</span><br>
<span class="quotelev2">&gt;&gt; the -Y option for ssh when connecting to remote machines?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 7, 2011 at 4:01 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thank you for your suggestions. After some fiddling, i found that after my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; last update (gentoo) my sshd_config had been overwritten
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (X11Forwarding was set to 'no').
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After correcting that, i can now open remote terminals with 'ssh -Y'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and with 'ssh -X'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (but with '-X' is till get those xauth warnings)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the xterm option still doesn't work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;jody_at_chefli ~/share/neander $ mpirun -np 4 -host squid_0 -xterm 1,2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printenv | grep WORLD_RANK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;/usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;/usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;[aim-squid_0:09856] [[54132,0],1]-&gt;[[54132,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;[aim-squid_0:09856] [[54132,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lifeline [[54132,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it looks like the two processes from squid_0 can't open the display this way,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but one of them writes the output to the console...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Surprisingly, they are trying 'localhost:11.0' whereas when i use 'ssh -Y' the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DISPLAY variable is set to 'localhost:10.0'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So in what way would OMPI have to be adapted, so -xterm would work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Apr 6, 2011 at 8:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's a little more info - it's for Cygwin, but I don't see anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cygwin-specific in the answers:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding">http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 6, 2011, at 12:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry Jody - I should have read your note more carefully to see that you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; already tried -Y. :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not sure what to suggest...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 6, 2011, at 12:29 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Like I said, I'm not expert. However, a quick &quot;google&quot; of revealed this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When trying to set up x11 forwarding over an ssh session to a remote server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the -X switch, I was getting an error like Warning: No xauth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When doing something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh -Xl root 10.1.1.9 to a remote server, the authentication worked, but I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; got an error message like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jason_at_badman ~/bin $ ssh -Xl root 10.1.1.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last login: Wed Apr 14 18:18:39 2010 from 10.1.1.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_RHEL ~]#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and any X programs I ran would not display on my local system..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Turns out the solution is to use the -Y switch instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh -Yl root 10.1.1.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and that worked fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See if that works for you - if it does, we may have to modify OMPI to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accommodate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 6, 2011, at 9:19 AM, jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, after the above error message mpirun has exited.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But i also noticed that it is to ssh into squid_0 and open a xterm there:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_chefli ~/share/neander $ ssh -Y squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Last login: Wed Apr &#160;6 17:14:02 CEST 2011 from chefli.uzh.ch on pts/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;xterm Xt error: Can't open display:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;xterm: &#160;DISPLAY is not set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ export DISPLAY=130.60.126.74:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;xterm Xt error: Can't open display: 130.60.126.74:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ export DISPLAY=chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;logout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same thing with ssh -X, but here i get the same warning/error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as with mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_chefli ~/share/neander $ ssh -X squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Last login: Wed Apr &#160;6 17:12:31 CEST 2011 from chefli.uzh.ch on ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So perhaps the whole problem is linked to that xauth-thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have a suggestion how this can be solved?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Apr 6, 2011 at 4:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I read your error messages correctly, it looks like mpirun is crashing -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the daemon is complaining that it lost the socket connection back to mpirun,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and hence will abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you seeing mpirun still alive?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 5, 2011, at 4:46 AM, jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On my workstation and &#160;the cluster i set up OpenMPI (v 1.4.2) so that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works in &quot;text-mode&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;$ mpirun -np 4 &#160;-x DISPLAY -host squid_0 &#160; printenv | grep WORLD_RANK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but when i use &#160;the -xterm option to mpirun, it doesn't work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 4 &#160;-x DISPLAY -host squid_0 -xterm 1,2 &#160;printenv | grep
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WORLD_RANK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;[squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;[squid_0:05266] [[55607,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lifeline [[55607,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (strange: somebody wrote his message to the console)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No matter whether i set the DISPLAY variable to the full hostname of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the workstation,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But i do have xauth data (as far as i know):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the remote (squid_0):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;jody_at_squid_0 ~ $ xauth list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;chefli/unix:10 &#160;MIT-MAGIC-COOKIE-1 &#160;5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;chefli/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;chefli.uzh.ch:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the workstation:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;$ xauth list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;chefli/unix:10 &#160;MIT-MAGIC-COOKIE-1 &#160;5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;chefli/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;localhost.localdomain/unix:0 &#160;MIT-MAGIC-COOKIE-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;chefli.uzh.ch/unix:0 &#160;MIT-MAGIC-COOKIE-1 &#160;146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In sshd_config on the workstation i have 'X11Forwarding yes'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have also done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; xhost + squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the workstation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How can i get the -xterm option running?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="16383.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16381.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16379.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16384.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16390.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
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
