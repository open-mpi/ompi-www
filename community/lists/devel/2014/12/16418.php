<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 23:28:53 2014" -->
<!-- isoreceived="20141203042853" -->
<!-- sent="Tue, 2 Dec 2014 20:28:49 -0800" -->
<!-- isosent="20141203042849" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="4DCF18B4-B7D8-4C81-98FD-7A0AA6F592AB_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="729BB0D4-3B6B-4908-8766-F6C9ED267F8A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 23:28:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16419.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16356.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16419.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16419.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the weekly conference call, and adding the usock component to 1.8 is just not within our procedures. It would involve bringing over much more of the OOB revisions (we&#146;d have to handle the transfer of messages between components, if nothing else), and that involves a lot of change.
<br>
<p>I&#146;ll instead try to provide a faster error response so it is clearer what is happening, hopefully letting the user fix the problem by turning on the loopback interface.
<br>
<p><p><span class="quotelev1">&gt; On Nov 25, 2014, at 7:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2014, at 6:15 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph and Paul,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/11/26 10:37, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it looks like the issue isn&#146;t so much with our code as it is with the OS stack, yes? We aren&#146;t requiring that the loopback be &#147;up&#148;, but the stack is in order to establish the connection, even when we are trying a non-lo interface.
</span><br>
<span class="quotelev2">&gt;&gt; this is correct (imho)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can look into generating a faster timeout on the socket creation. In the trunk, we now use unix domain sockets instead of TCP to avoid such issues, but that won&#146;t help with the 1.8 series.
</span><br>
<span class="quotelev2">&gt;&gt; i was about to suggest this situation could have been avoided in the first place by using unix domain sockets instead of TCP sockets :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There were some historical reasons for not doing so - mostly because it generally isn&#146;t necessary on a cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is a backport (since this is already available in the trunk/master) simply out of the question ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be against our normal procedures, but I can raise it at next week&#146;s meeting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 25, 2014, at 4:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had a look at the problem via &quot;mpirun -np 1 strace -o trace -ff ./hello&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I find that there is an attempt (by a secondary thread) to establish a TCP socket from the rank process to the eth0 address of localhost (I am guessing to reach the orted/mpirun).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, when the &quot;lo&quot; interface is down, the Linux kernel apparently cannot establish that socket.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In fact, if I am sufficiently patient, it turns out the &quot;hang&quot; is bounded, and eventually one sees:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phargrov_at_blcr-armv7:~$ time mpirun -np 1 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host:    blcr-armv7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Remote host:   10.0.2.15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real    2m8.151s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user    0m5.360s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sys     0m57.430s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where blcr-armv7 and 10.0.2.15 are *both* the local (only) host.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is no firewall, but in case you doubt me on that, here is a demonstration using ping to show that 10.0.2.15 is only reachable when the loopback interface is enabled:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phargrov_at_blcr-armv7:~$ sudo ifconfig lo up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phargrov_at_blcr-armv7:~$ ping -q -c2 10.0.2.15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PING 10.0.2.15 (10.0.2.15) 56(84) bytes of data.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- 10.0.2.15 ping statistics ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 packets transmitted, 2 received, 0% packet loss, time 1002ms
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rtt min/avg/max/mdev = 0.527/0.534/0.542/0.024 ms
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phargrov_at_blcr-armv7:~$ sudo ifconfig lo down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phargrov_at_blcr-armv7:~$ ping -q -c2 10.0.2.15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PING 10.0.2.15 (10.0.2.15) 56(84) bytes of data.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- 10.0.2.15 ping statistics ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 packets transmitted, 0 received, 100% packet loss, time 1006ms
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, there is no &quot;hang&quot; -- just a 2 minute pause before the error message is generated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, it may still be possible to present a better/earlier error message when there is no loopback interface (and at least one rank process is to be launched locally).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 4:19 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;ll have to look - there isn&#146;t supposed to be such a requirement, and I certainly haven&#146;t seen it before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 25, 2014, at 3:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Allan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am glad things are working for you now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can confirm (on a QEMU-emulated Versatile Express A9 board running Ubuntu 14.04) that disabling the &quot;lo&quot; interface reproduces the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I imagine this is true on other architectures, though I did not attempt to verify.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If oob:tcp really does need the loopback interface, shouldn't its lack be something that could/should be detected and reported instead of hanging as Allan saw?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW, neither of the following resolved the problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -mca oob_tcp_if_exclude lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -mca oob_tcp_if_include eth0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 2:58 PM, Allan Wu &lt;allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think I have found the problem. After inspecting the output with &quot;-mca state_base_verbose 10 -mca odls_base_verbose 10 -mca oob_base_verbose 100&quot; on both the old system and the new system, I noticed there is one line that is different: on the old system where it works correctly, there is a line that says: &quot;oob:tcp:init rejecting loopback interface lo&quot;, while on the new system there is no such line. Both system proceed to open interface eth0 afterwards. Then I checked the new system, and found out that somehow the loopback interface is not up by default. After I opened the lo interface, the mpirun executes normally.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does it means that OpenMPI will use lo for some initial setup? Since the actual socket was created on eth0 I did not think of checking the lo interface. Anyway, thanks everyone for all of your kind help. Let me know if you want me to provide any more information for future references. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Allan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt; &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 11:55 AM, Allan Wu &lt;allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Ralph!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I did not compile my openmpi with --enable-debug, and I am compiling it now. But your suggested command already provided some output, which I attached with this email. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems the process was stuck on the line:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;[fpga2:00962] [[44848,1],0] waiting for connect completion to [[44848,0],0] - activating send event&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then it got stuck and I CTRL+C'ed it. Previous to that line, it said something about 'orte_tcp_peer_try_connect: attempting to connect to proc [[44848,0],0] via interface eth0'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Di
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 2:25 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is all running on a single node, correct? If so, did you configure OMPI with &#226;&#128;&#148;enable-debug? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you can do that, or already have, then let&#226;&#128;&#153;s add the following to the mpirun cmd line: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca state_base_verbose 10 -mca odls_base_verbose 10 -mca oob_base_verbose 10 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You&#226;&#128;&#153;ll get a bunch of output, but hopefully it will tell us where mpirun is encountering a problem. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 11:20 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Allan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you send me the .config from your build of the kernel I can compare it against, for instance, my .config for a Raspberry Pi.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There will certainly be many differences, but I am hoping my own experience configuring linux kernels will help me filter the &quot;noise&quot; from any differences that might be significant.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 11:11 AM, Allan Wu &lt;allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Paul! Unfortunately '/boot' is not available in my embedded linux, and I do not have the configuration file for the old kernel since it is provided as is. However, I have the new kernel configuration since I compiled it myself. Would it be helpful if I provide you the .config file when I compile the kernel? It maybe quite painful to look through that file though. Is there any other way that I can obtain the configuration? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I checked my config for the new kernel, and UNIX-domain sockets and Sys V IPC are both enabled in the build. Are there any other possibilities I can check?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Di
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt; &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:45 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt; &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Allan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A likely possibility is that some important kernel feature (that Open MPI assumes is present) is missing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That includes not only &quot;kernel modules&quot; as you mention, but also features configure in (or out) of the base kernel.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For instance, some embedded kernels omit UNIX-domain sockets and SysV IPC support.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you can send me (preferably off-list) the kernel config files for the old an new kernels I may be able to spot something.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If present, you are looking for /boot/config-[VERSION]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:25 AM, Allan Wu &lt;allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm sorry I forgot to change the subject when I reply to the digest issue. Please find my original email below. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Di
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:19 AM, Allan Wu &lt;allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Ralph for the reply. Sorry about the log file, I think I forgot to put an extension to the file. Please find a new one attached with this email. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm sorry for not enough debugging information, but 'omp_info' and '--debug-devel' are the only ways I know for collecting information, are there any other things I can try to provide more info?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the output is the logging information in my last email. It got stuck at  &quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program is printed out to the screen. So I think it is mpirun failing to start my executable, not failing to terminate.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was wondering if this has anything to do with my newer kernel version, since it works well in the old case. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt; &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Tue, 25 Nov 2014 07:29:51 -0800
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         execution       on an embedded ARM Linux kernel version 3.15.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden] &lt;mailto:898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt; &lt;mailto:898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt; &lt;mailto:898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don?t know what you put in that log file, but it was an executable and I?m not feeling that trusting :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I?m afraid there isn?t enough debug output there to really tell anything. From what little I can see, I?m guessing that the application ran fine and you got the usual ?hello? output and the helloworld process exited safely - is that correct? And so it is solely mpirun that is failing to cleanly terminate?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything works fine for my system based on Linux 3.8.0. I have previously submitted a post related to my compilation, which can be found here: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;&gt;. When I recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  at even
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  the helloworld program. The program consists only simple APIs: MPI_Init, MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs even at 'mpirun -np 1 ./helloworld', and below are the output with --debug-devel (before it got stuck):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00716] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00718] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I suspect maybe it is due to incompatible kernel version or some missing kernel modules. I tried also with the latest version 1.8.3, and had the same problem. Does anyone have any thoughts? I have attached the output of 'ompi-info --all' with this email.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please let me know if I need to provide more information. Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a> &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt; &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt; &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt; &lt;mailto:allwu_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16348.php">http://www.open-mpi.org/community/lists/devel/2014/11/16348.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16348.php">http://www.open-mpi.org/community/lists/devel/2014/11/16348.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16348.php">http://www.open-mpi.org/community/lists/devel/2014/11/16348.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16348.php">http://www.open-mpi.org/community/lists/devel/2014/11/16348.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16349.php">http://www.open-mpi.org/community/lists/devel/2014/11/16349.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16349.php">http://www.open-mpi.org/community/lists/devel/2014/11/16349.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16349.php">http://www.open-mpi.org/community/lists/devel/2014/11/16349.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16349.php">http://www.open-mpi.org/community/lists/devel/2014/11/16349.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt; &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16350.php">http://www.open-mpi.org/community/lists/devel/2014/11/16350.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16350.php">http://www.open-mpi.org/community/lists/devel/2014/11/16350.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16350.php">http://www.open-mpi.org/community/lists/devel/2014/11/16350.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16350.php">http://www.open-mpi.org/community/lists/devel/2014/11/16350.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16351.php">http://www.open-mpi.org/community/lists/devel/2014/11/16351.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16351.php">http://www.open-mpi.org/community/lists/devel/2014/11/16351.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16352.php">http://www.open-mpi.org/community/lists/devel/2014/11/16352.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16352.php">http://www.open-mpi.org/community/lists/devel/2014/11/16352.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16355.php">http://www.open-mpi.org/community/lists/devel/2014/11/16355.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16419.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16356.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16419.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16419.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
