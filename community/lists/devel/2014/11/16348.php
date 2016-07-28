<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 17:58:27 2014" -->
<!-- isoreceived="20141125225827" -->
<!-- sent="Tue, 25 Nov 2014 14:58:00 -0800" -->
<!-- isosent="20141125225800" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAHT6FhMu_rTsz-kJyy+4_4FCeBwsuFuxohTnMTbeAT8Y6=3tiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHT6FhOX-4adEKihDVadwWHLt_t+yRqVMLNfMNY+RA6QH3vWcQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Allan Wu (<em>allwu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 17:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16349.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16347.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16349.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16349.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have found the problem. After inspecting the output with
<br>
&#226;&#128;&#139;
<br>
&quot;-mca state_base_verbose 10 -mca odls_base_verbose 10 -mca oob_base_verbose
<br>
10
<br>
&#226;&#128;&#139;0&#226;&#128;&#139;
<br>
&quot;
<br>
&#226;&#128;&#139;
<br>
on both the old system and the new system, I noticed there is one line
<br>
&#226;&#128;&#139;
<br>
that is
<br>
&#226;&#128;&#139;
<br>
different
<br>
&#226;&#128;&#139;:&#226;&#128;&#139;
<br>
<p>&#226;&#128;&#139;o&#226;&#128;&#139;
<br>
n the old system where it works correctly, there is a line that says:
<br>
&quot;oob:tcp:init rejecting loopback interface lo&quot;
<br>
&#226;&#128;&#139;,
<br>
while
<br>
&#226;&#128;&#139; &#226;&#128;&#139;
<br>
on the new system there is no such line. Both system proceed to open
<br>
interface eth0 afterwards. Then I checked the new system, and found out
<br>
that somehow the loopback interface is not up by default. After I opened
<br>
the lo interface, the mpirun executes normally.
<br>
<p>Does it means that OpenMPI will use lo for some initial setup? Since the
<br>
actual socket was created on eth0 I did not think of checking the lo
<br>
interface. Anyway, thanks everyone for all of your kind help. Let me know
<br>
if you want me to provide any more information for future references.
<br>
<p>Regards,
<br>
Allan
<br>
<p><pre>
--
Di Wu (Allan)
PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]
On Tue, Nov 25, 2014 at 11:55 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt; Thanks Ralph!
&gt;
&gt; I did not compile my openmpi with --enable-debug, and I am compiling it
&gt; now. But your suggested command already provide
&gt; &#226;&#128;&#139;d&#226;&#128;&#139;
&gt; some output, which I attached with this email.
&gt;
&gt; It seems the process was stuck on the line:
&gt; &quot;[fpga2:00962] [[44848,1],0] waiting for connect completion to
&gt; [[44848,0],0] - activating send event&quot;
&gt;
&gt; Then it got stuck and I CTRL+C'ed it. Previous to that line, it said
&gt; something about 'orte_tcp_peer_try_connect: attempting to connect to proc
&gt; [[44848,0],0] via interface eth0'
&gt; &#226;&#128;&#139;.&#226;&#128;&#139;
&gt;
&gt;
&gt; Regards,
&gt; Di
&gt;
&gt; On Tue, Nov 25, 2014 at 2:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; &#226;&#128;&#139;
&gt;&gt; This is all running on a single node, correct? If so, did you configure
&gt;&gt; OMPI with &#195;&#162;&#226;&#130;&#172;&#226;&#128;&#157;enable-debug?
&gt;&gt;
&gt;&gt; If you can do that, or already have, then let&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162;s add the following to
&gt;&gt; the mpirun cmd line:
&gt;&gt;
&gt;&gt; -mca state_base_verbose 10 -mca odls_base_verbose 10 -mca
&gt;&gt; oob_base_verbose 10
&gt;&gt;
&gt;&gt; You&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162;ll get a bunch of output, but hopefully it will tell us where
&gt;&gt; mpirun is encountering a problem.
&gt;&gt; Ralph
&gt;&gt; On Tue, Nov 25, 2014 at 11:20 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
&gt;&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; Allan,
&gt;&gt;&gt;
&gt;&gt;&gt; If you send me the .config from your build of the kernel I can compare
&gt;&gt;&gt; it against, for instance, my .config for a Raspberry Pi.
&gt;&gt;&gt; There will certainly be many differences, but I am hoping my own
&gt;&gt;&gt; experience configuring linux kernels will help me filter the &quot;noise&quot; from
&gt;&gt;&gt; any differences that might be significant.
&gt;&gt;&gt;
&gt;&gt;&gt; -Paul
&gt;&gt;&gt;
&gt;&gt;&gt; On Tue, Nov 25, 2014 at 11:11 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Thanks Paul! Unfortunately '/boot' is not available in my embedded
&gt;&gt;&gt;&gt; linux, and I do not have the configuration file for the old kernel since it
&gt;&gt;&gt;&gt; is provided as is. However, I have the new kernel configuration since I
&gt;&gt;&gt;&gt; compiled it myself. Would it be helpful if I provide you the .config file
&gt;&gt;&gt;&gt; when I compile the kernel? It maybe quite painful to look through that file
&gt;&gt;&gt;&gt; though. Is there any other way that I can obtain the configuration?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I checked my config for the new kernel, and UNIX-domain sockets and Sys
&gt;&gt;&gt;&gt; V IPC are both enabled in the build. Are there any other possibilities I
&gt;&gt;&gt;&gt; can check?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt; Di
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Di Wu (Allan)
&gt;&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
&gt;&gt;&gt;&gt; Email: allwu_at_[hidden]
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:45 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
&gt;&gt;&gt;&gt; wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Allan,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; A likely possibility is that some important kernel feature (that Open
&gt;&gt;&gt;&gt;&gt; MPI assumes is present) is missing.
&gt;&gt;&gt;&gt;&gt; That includes not only &quot;kernel modules&quot; as you mention, but also
&gt;&gt;&gt;&gt;&gt; features configure in (or out) of the base kernel.
&gt;&gt;&gt;&gt;&gt; For instance, some embedded kernels omit UNIX-domain sockets and SysV
&gt;&gt;&gt;&gt;&gt; IPC support.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; If you can send me (preferably off-list) the kernel config files for
&gt;&gt;&gt;&gt;&gt; the old an new kernels I may be able to spot something.
&gt;&gt;&gt;&gt;&gt; If present, you are looking for /boot/config-[VERSION]
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; -Paul
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:25 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I'm sorry I forgot to change the subject when I reply to the digest
&gt;&gt;&gt;&gt;&gt;&gt; issue. Please find my original email below.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Regards,
&gt;&gt;&gt;&gt;&gt;&gt; Di
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:19 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Ralph for the reply. Sorry about the log file, I think I
&gt;&gt;&gt;&gt;&gt;&gt;&gt; forgot to put an extension to the file. Please find a new one attached with
&gt;&gt;&gt;&gt;&gt;&gt;&gt; this email.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm sorry for not enough debugging information, but 'omp_info' and
&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--debug-devel' are the only ways I know for collecting information, are
&gt;&gt;&gt;&gt;&gt;&gt;&gt; there any other things I can try to provide more info?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the
&gt;&gt;&gt;&gt;&gt;&gt;&gt; output is the logging information in my last email. It got stuck at
&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program
&gt;&gt;&gt;&gt;&gt;&gt;&gt; is printed out to the screen. So I think it is mpirun failing to start my
&gt;&gt;&gt;&gt;&gt;&gt;&gt; executable, not failing to terminate.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was wondering if this has anything to do with my newer kernel
&gt;&gt;&gt;&gt;&gt;&gt;&gt; version, since it works well in the old case.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Di Wu (Allan)
&gt;&gt;&gt;&gt;&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Email: allwu_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: Tue, 25 Nov 2014 07:29:51 -0800
&gt;&gt;&gt;&gt;&gt;&gt;&gt; From:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
&gt;&gt;&gt;&gt;&gt;&gt;&gt;         execution       on an embedded ARM Linux kernel version
&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3.15.0
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don?t know what you put in that log file, but it was an executable
&gt;&gt;&gt;&gt;&gt;&gt;&gt; and I?m not feeling that trusting :-)
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; I?m afraid there isn?t enough debug output there to really tell
&gt;&gt;&gt;&gt;&gt;&gt;&gt; anything. From what little I can see, I?m guessing that the application ran
&gt;&gt;&gt;&gt;&gt;&gt;&gt; fine and you got the usual ?hello? output and the helloworld process exited
&gt;&gt;&gt;&gt;&gt;&gt;&gt; safely - is that correct? And so it is solely mpirun that is failing to
&gt;&gt;&gt;&gt;&gt;&gt;&gt; cleanly terminate?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello everyone,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I have cross-compiled OpenMPI for an embedded ARM Linux.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Everything works fine for my system based on Linux 3.8.0. I have previously
&gt;&gt;&gt;&gt;&gt;&gt;&gt; submitted a post related to my compilation, which can be found here:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck
&gt;&gt;&gt;&gt;&gt;&gt;&gt; at even the helloworld program. The program consists only simple APIs:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init, MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs
&gt;&gt;&gt;&gt;&gt;&gt;&gt; even at 'mpirun -np 1 ./helloworld', and below are the output with
&gt;&gt;&gt;&gt;&gt;&gt;&gt; --debug-devel (before it got stuck):
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00716] sess_dir_finalize: job session dir not empty -
&gt;&gt;&gt;&gt;&gt;&gt;&gt; leaving
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root@
&gt;&gt;&gt;&gt;&gt;&gt;&gt; fpga1_0/63813/0/0
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00716] tmp: /tmp
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root@
&gt;&gt;&gt;&gt;&gt;&gt;&gt; fpga1_0/63813/1/0
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; [fpga1:00718] tmp: /tmp
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I suspect maybe it is due to incompatible kernel version or some
&gt;&gt;&gt;&gt;&gt;&gt;&gt; missing kernel modules. I tried also with the latest version 1.8.3, and had
&gt;&gt;&gt;&gt;&gt;&gt;&gt; the same problem. Does anyone have any thoughts? I have attached the output
&gt;&gt;&gt;&gt;&gt;&gt;&gt; of 'ompi-info --all' with this email.
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Please let me know if I need to provide more information. Thanks
&gt;&gt;&gt;&gt;&gt;&gt;&gt; in advance!
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Regards,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; --
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Di Wu (Allan)
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Department of Computer Science, UC Los Angeles
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; &lt;log.tar.gz&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Link to this post:
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
&gt;&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
&gt;&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16349.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16347.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16349.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16349.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
