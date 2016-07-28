<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 13:26:04 2014" -->
<!-- isoreceived="20141125182604" -->
<!-- sent="Tue, 25 Nov 2014 10:25:37 -0800" -->
<!-- isosent="20141125182537" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAHT6FhP_pw1S0jeJLKBXO4MqbnZqCkjHR2Ozt9tw1MBAmPPyFg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
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
<strong>Date:</strong> 2014-11-25 13:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16340.php">Allan Wu: "Re: [OMPI devel] devel Digest, Vol 2854, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="16330.php">Allan Wu: "[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#226;&#128;&#139;&#226;&#128;&#139;I'm sorry I forgot to change the subject when I reply to the digest
<br>
issue. Please find my original email below.
<br>
<p>Regards,
<br>
Di
<br>
<p>On Tue, Nov 25, 2014 at 10:19 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph for the reply. Sorry about the log file, I think I forgot to
</span><br>
<span class="quotelev1">&gt; put an extension to the file. Please find a new one attached with this
</span><br>
<span class="quotelev1">&gt; email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;I'm sorry for not enough debugging information, &#226;&#128;&#139;but 'omp_info' and
</span><br>
<span class="quotelev1">&gt; '--debug-devel' are the only ways I know for collecting information, are
</span><br>
<span class="quotelev1">&gt; there any other things I can try to provide more info?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the output
</span><br>
<span class="quotelev1">&gt; is the logging information in my last email. It got stuck at
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt;  &quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program is
</span><br>
<span class="quotelev1">&gt; printed out to the screen. So I think it is mpirun failing to start my
</span><br>
<span class="quotelev1">&gt; executable, not failing to terminate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wondering if this has anything to do with my newer kernel version,
</span><br>
<span class="quotelev1">&gt; since it works well in the old case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Di Wu (Allan)
</span><br>
<span class="quotelev1">&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev1">&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev1">&gt; Email: allwu_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;Date: Tue, 25 Nov 2014 07:29:51 -0800
</span><br>
<span class="quotelev1">&gt; From:
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;&#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;&#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
</span><br>
<span class="quotelev1">&gt;         execution       on an embedded ARM Linux kernel version 3.15.0
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don?t know what you put in that log file, but it was an executable and
</span><br>
<span class="quotelev1">&gt; I?m not feeling that trusting :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I?m afraid there isn?t enough debug output there to really tell anything.
</span><br>
<span class="quotelev1">&gt; From what little I can see, I?m guessing that the application ran fine and
</span><br>
<span class="quotelev1">&gt; you got the usual ?hello? output and the helloworld process exited safely -
</span><br>
<span class="quotelev1">&gt; is that correct? And so it is solely mpirun that is failing to cleanly
</span><br>
<span class="quotelev1">&gt; terminate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything
</span><br>
<span class="quotelev1">&gt; works fine for my system based on Linux 3.8.0. I have previously submitted
</span><br>
<span class="quotelev1">&gt; a post related to my compilation, which can be found here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;. When I
</span><br>
<span class="quotelev1">&gt; recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck at even
</span><br>
<span class="quotelev1">&gt; the helloworld program. The program consists only simple APIs: MPI_Init,
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs even at
</span><br>
<span class="quotelev1">&gt; 'mpirun -np 1 ./helloworld', and below are the output with --debug-devel
</span><br>
<span class="quotelev1">&gt; (before it got stuck):
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00716] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
</span><br>
<span class="quotelev2">&gt; &gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;&#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; [fpga1:00718] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspect maybe it is due to incompatible kernel version or some missing
</span><br>
<span class="quotelev1">&gt; kernel modules. I tried also with the latest version 1.8.3, and had the
</span><br>
<span class="quotelev1">&gt; same problem. Does anyone have any thoughts? I have attached the output of
</span><br>
<span class="quotelev1">&gt; 'ompi-info --all' with this email.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know if I need to provide more information. Thanks in
</span><br>
<span class="quotelev1">&gt; advance!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Di Wu (Allan)
</span><br>
<span class="quotelev2">&gt; &gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev2">&gt; &gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev2">&gt; &gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php%e2%80%8b">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php%e2%80%8b</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16340.php">Allan Wu: "Re: [OMPI devel] devel Digest, Vol 2854, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="16330.php">Allan Wu: "[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
