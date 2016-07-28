<?
$subject_val = "Re: [OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 08:29:55 2011" -->
<!-- isoreceived="20110502122955" -->
<!-- sent="Mon, 2 May 2011 06:29:41 -0600" -->
<!-- isosent="20110502122941" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with the -xterm option" -->
<!-- id="09B97E83-2884-4903-8ACE-928BDA1B977B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinsGksziaxQVZWX3kGTrHrfi+i-XA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 08:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16395.php">Terry Dontje: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>Previous message:</strong> <a href="16393.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16393.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16396.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16396.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2, 2011, at 2:34 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I rebuilt open MPI 1.4.2 with the debug option on both chefli and squid_0.
</span><br>
<span class="quotelev1">&gt; The results are interesting!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote a small HelloMPI app which basically calls usleep for a pause
</span><br>
<span class="quotelev1">&gt; of 5 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now calling it as i did before, no MPI errors appear anymore, only the
</span><br>
<span class="quotelev1">&gt; display problems:
</span><br>
<span class="quotelev1">&gt;  jody_at_chefli ~/share/neander $ mpirun -np 1 -host squid_0 -mca
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent &quot;ssh -Y&quot; --xterm 0 ./HelloMPI
</span><br>
<span class="quotelev1">&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:10.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i do the same call *with* the debug option, the xterm appears and
</span><br>
<span class="quotelev1">&gt; shows the output of HelloMPI!
</span><br>
<span class="quotelev1">&gt; I attach the output in ompidbg_1.txt (It also works if i call with
</span><br>
<span class="quotelev1">&gt; '-np 4' and '--xterm 0,1,2,3'
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Calling hostname the same way does not open an xterm (cf. ompidbg_2.txt).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i use the hold-option, the xterm appears with the output of
</span><br>
<span class="quotelev1">&gt; 'hostrname' (cf. ompidbg_3.txt)
</span><br>
<span class="quotelev1">&gt; The xterm opens after the line &quot;launch complete for job...&quot; has been
</span><br>
<span class="quotelev1">&gt; written (line 59)
</span><br>
<p>Okay, that's also expected. Like I said, without the &quot;hold&quot;, the output is generated so quickly that the window just flashes at best. I've had similar experiences - hence the &quot;hold&quot; option.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just found that everything works as expected if i use the the
</span><br>
<span class="quotelev1">&gt; '--leave-session-attached' option (without the debug options):
</span><br>
<span class="quotelev1">&gt;  jody_at_chefli ~/share/neander $ mpirun -np 4 -host squid_0 -mca
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached  --xterm 0,1,2,3!
</span><br>
<span class="quotelev1">&gt; ./HelloMPI
</span><br>
<span class="quotelev1">&gt; The xterms are also opened if i do not use the '!' hold option.
</span><br>
<p>Okay, I can understand why. The --leave-session-attached option just tells mpirun to not daemonize the backend daemons - thus leaving the ssh session alive. The debug options do the same thing, but turn on all the debug output.
<br>
<p>The problem is that if you don't leave the ssh session alive, then the xterm has no way back to your screen. By daemonizing, we severe that connection.
<br>
<p>What I should do (and maybe used to do, but it got removed) is automatically turn &quot;on&quot; the leave-session-attached option if you give --xterm. I can enter that patch.
<br>
<p>Note that this does limit the size of the launch to the number of ssh sessions the system allows you to have open at the same time. We default to a limit of 128 nodes, which is likely adequate for an xterm-based debugging session. However, you can increase it using an mca param (see ompi_info) to as high as the system allows.
<br>
<p>Thanks for helping debug this! I'll add you to the patch list so you can track it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does *not* work is
</span><br>
<span class="quotelev1">&gt;  jody_at_aim-triops ~/share/neander $ mpirun -np 2 -host squid_0 -mca
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached  xterm
</span><br>
<span class="quotelev1">&gt;  xterm Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;  xterm:  DISPLAY is not set
</span><br>
<span class="quotelev1">&gt;  xterm Xt error: Can't open display:
</span><br>
<span class="quotelev1">&gt;  xterm:  DISPLAY is not set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then again, this call works (i.e. an xterm is opened) if all the
</span><br>
<span class="quotelev1">&gt; debug-options are used (ompidbg_4.txt).
</span><br>
<span class="quotelev1">&gt; Here the '--leave-session-attached' is necessary - without it, no xterm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From these results i would say that there is no basic mishandling of
</span><br>
<span class="quotelev1">&gt; 'ssh', though i have no idea
</span><br>
<span class="quotelev1">&gt; what internal differences the use of the '-leave-session-attached'
</span><br>
<span class="quotelev1">&gt; option or the debug options make.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope these observations are helpful
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 29, 2011 at 12:08 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your suggestions.
</span><br>
<span class="quotelev2">&gt;&gt; I'll be happy to help  you.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if i'll get around to this tomorrow,
</span><br>
<span class="quotelev2">&gt;&gt; but i certainly will do so on Monday.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 28, 2011 at 11:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure when I'll get a chance to work on this - got a deadline to meet. I do have a couple of suggestions, if you wouldn't mind helping debug the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks to me like the problem is that mpirun is crashing or terminating early for some reason - hence the failures to send msgs to it, and the &quot;lifeline lost&quot; error that leads to the termination of the daemon. If you build a debug version of the code (i.e., --enable-debug on configure), you can get a lot of debug info that traces the behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you could then run your program with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -mca plm_base_verbose 5 -mca odls_base_verbose 5 --leave-session-attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and send it to me, we'll see what ORTE thinks it is doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You could also take a look at the code for implementing the xterm option. You'll find it in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around line 1115. The xterm command syntax is defined in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/odls/base/odls_base_open.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around line 233 and following. Note that we use &quot;xterm -T&quot; as the cmd. Perhaps you can spot an error in the way we treat xterm?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, remember that you have to specify that you want us to &quot;hold&quot; the xterm window open even after the process terminates. If you don't specify it, the window automatically closes upon completion of the process. So a fast-running cmd like &quot;hostname&quot; might disappear so quickly that it causes a race condition problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to try a spinner application - i.e.., output something and then sit in a loop or sleep for some period of time. Or, use the &quot;hold&quot; option to keep the window open - you designate &quot;hold&quot; by putting a '!' before the rank, e.g., &quot;mpirun -np 2 -xterm \!2 hostname&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 28, 2011, at 8:38 AM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately this does not solve my problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While i can do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ssh -Y squid_0 xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and this will open an xterm on m,y machiine (chefli),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i run into problems with the -xterm option of openmpi:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ mpirun -np 4  -mca plm_rsh_agent &quot;ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Y&quot; -host squid_0 --xterm 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28046] [[35219,0],1]-&gt;[[35219,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28046] [[35219,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lifeline [[35219,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28046] [[35219,0],1]-&gt;[[35219,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28046] [[35219,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lifeline [[35219,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By the way when i look at the DISPLAY variable in the xterm window
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opened via squid_0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i also have the display variable &quot;localhost:11.0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, the difference with using the &quot;-mca plm_rsh_agent&quot; is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the lines wiht the warnings about &quot;xauth&quot; and &quot;untrusted X&quot; do not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appear:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ mpirun -np 4   -host squid_0 -xterm 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28337] [[34926,0],1]-&gt;[[34926,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28337] [[34926,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lifeline [[34926,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28337] [[34926,0],1]-&gt;[[34926,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  [squid_0:28337] [[34926,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lifeline [[34926,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have doubts that the &quot;-Y&quot; is passed correctly:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   jody_at_triops ~/share/neander $ mpirun -np   -mca plm_rsh_agent &quot;ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Y&quot; -host squid_0 xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  xterm Xt error: Can't open display:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  xterm:  DISPLAY is not set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  xterm Xt error: Can't open display:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  xterm:  DISPLAY is not set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---&gt; as a matter of fact i noticed that the xterm option doesn't work locally:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpirun -np 4    -xterm 1 /usr/bin/printenv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prints verything onto the console.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have any other suggestions i could try?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Apr 28, 2011 at 3:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Should be able to just set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca plm_rsh_agent &quot;ssh -Y&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on your cmd line, I believe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 28, 2011, at 12:53 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there an easy way i could modify the OpenMPI code so that it would use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the -Y option for ssh when connecting to remote machines?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Jody
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Apr 7, 2011 at 4:01 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; thank you for your suggestions. After some fiddling, i found that after my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; last update (gentoo) my sshd_config had been overwritten
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (X11Forwarding was set to 'no').
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; After correcting that, i can now open remote terminals with 'ssh -Y'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and with 'ssh -X'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (but with '-X' is till get those xauth warnings)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But the xterm option still doesn't work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ mpirun -np 4 -host squid_0 -xterm 1,2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printenv | grep WORLD_RANK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [aim-squid_0:09856] [[54132,0],1]-&gt;[[54132,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [aim-squid_0:09856] [[54132,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; lifeline [[54132,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So it looks like the two processes from squid_0 can't open the display this way,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but one of them writes the output to the console...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Surprisingly, they are trying 'localhost:11.0' whereas when i use 'ssh -Y' the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; DISPLAY variable is set to 'localhost:10.0'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So in what way would OMPI have to be adapted, so -xterm would work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Apr 6, 2011 at 8:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's a little more info - it's for Cygwin, but I don't see anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cygwin-specific in the answers:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding">http://x.cygwin.com/docs/faq/cygwin-x-faq.html#q-ssh-no-x11forwarding</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 6, 2011, at 12:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry Jody - I should have read your note more carefully to see that you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; already tried -Y. :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not sure what to suggest...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 6, 2011, at 12:29 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Like I said, I'm not expert. However, a quick &quot;google&quot; of revealed this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; result:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When trying to set up x11 forwarding over an ssh session to a remote server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the -X switch, I was getting an error like Warning: No xauth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When doing something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh -Xl root 10.1.1.9 to a remote server, the authentication worked, but I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; got an error message like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jason_at_badman ~/bin $ ssh -Xl root 10.1.1.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Wed Apr 14 18:18:39 2010 from 10.1.1.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_RHEL ~]#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and any X programs I ran would not display on my local system..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Turns out the solution is to use the -Y switch instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh -Yl root 10.1.1.9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and that worked fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; See if that works for you - if it does, we may have to modify OMPI to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; accommodate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 6, 2011, at 9:19 AM, jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, after the above error message mpirun has exited.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But i also noticed that it is to ssh into squid_0 and open a xterm there:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ ssh -Y squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Last login: Wed Apr  6 17:14:02 CEST 2011 from chefli.uzh.ch on pts/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  xterm Xt error: Can't open display:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  xterm:  DISPLAY is not set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ export DISPLAY=130.60.126.74:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  xterm Xt error: Can't open display: 130.60.126.74:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ export DISPLAY=chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  logout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; same thing with ssh -X, but here i get the same warning/error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as with mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_chefli ~/share/neander $ ssh -X squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Last login: Wed Apr  6 17:12:31 CEST 2011 from chefli.uzh.ch on ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So perhaps the whole problem is linked to that xauth-thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have a suggestion how this can be solved?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Apr 6, 2011 at 4:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I read your error messages correctly, it looks like mpirun is crashing -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the daemon is complaining that it lost the socket connection back to mpirun,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and hence will abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you seeing mpirun still alive?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 5, 2011, at 4:46 AM, jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On my workstation and  the cluster i set up OpenMPI (v 1.4.2) so that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it works in &quot;text-mode&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $ mpirun -np 4  -x DISPLAY -host squid_0   printenv | grep WORLD_RANK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but when i use  the -xterm option to mpirun, it doesn't work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 4  -x DISPLAY -host squid_0 -xterm 1,2  printenv | grep
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WORLD_RANK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: untrusted X11 forwarding setup failed: xauth key data not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; generated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Warning: No xauth data; using fake authentication data for X11 forwarding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sd = 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  [squid_0:05266] [[55607,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lifeline [[55607,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  /usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (strange: somebody wrote his message to the console)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No matter whether i set the DISPLAY variable to the full hostname of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the workstation,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But i do have xauth data (as far as i know):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On the remote (squid_0):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  jody_at_squid_0 ~ $ xauth list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  chefli.uzh.ch:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the workstation:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $ xauth list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  localhost.localdomain/unix:0  MIT-MAGIC-COOKIE-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  chefli.uzh.ch/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In sshd_config on the workstation i have 'X11Forwarding yes'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have also done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   xhost + squid_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the workstation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How can i get the -xterm option running?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; &lt;ompidbg_1.txt&gt;&lt;ompidbg_2.txt&gt;&lt;ompidbg_3.txt&gt;&lt;ompidbg_4.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="16395.php">Terry Dontje: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>Previous message:</strong> <a href="16393.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16393.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16396.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16396.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
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
