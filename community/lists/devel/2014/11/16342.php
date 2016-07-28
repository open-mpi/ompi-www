<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 13:45:45 2014" -->
<!-- isoreceived="20141125184545" -->
<!-- sent="Tue, 25 Nov 2014 10:45:42 -0800" -->
<!-- isosent="20141125184542" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAAvDA14y=kuzZWwq6TCybMScaY9KssX-6m=G8JLaxHa7srzEgQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHT6FhP_pw1S0jeJLKBXO4MqbnZqCkjHR2Ozt9tw1MBAmPPyFg_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 13:45:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16343.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16343.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16343.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Allan,
<br>
<p>A likely possibility is that some important kernel feature (that Open MPI
<br>
assumes is present) is missing.
<br>
That includes not only &quot;kernel modules&quot; as you mention, but also features
<br>
configure in (or out) of the base kernel.
<br>
For instance, some embedded kernels omit UNIX-domain sockets and SysV IPC
<br>
support.
<br>
<p>If you can send me (preferably off-list) the kernel config files for the
<br>
old an new kernels I may be able to spot something.
<br>
If present, you are looking for /boot/config-[VERSION]
<br>
<p>-Paul
<br>
<p>On Tue, Nov 25, 2014 at 10:25 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm sorry I forgot to change the subject when I reply to the digest
</span><br>
<span class="quotelev1">&gt; issue. Please find my original email below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Di
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 25, 2014 at 10:19 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph for the reply. Sorry about the log file, I think I forgot to
</span><br>
<span class="quotelev2">&gt;&gt; put an extension to the file. Please find a new one attached with this
</span><br>
<span class="quotelev2">&gt;&gt; email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry for not enough debugging information, but 'omp_info' and
</span><br>
<span class="quotelev2">&gt;&gt; '--debug-devel' are the only ways I know for collecting information, are
</span><br>
<span class="quotelev2">&gt;&gt; there any other things I can try to provide more info?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the output
</span><br>
<span class="quotelev2">&gt;&gt; is the logging information in my last email. It got stuck at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program is
</span><br>
<span class="quotelev2">&gt;&gt; printed out to the screen. So I think it is mpirun failing to start my
</span><br>
<span class="quotelev2">&gt;&gt; executable, not failing to terminate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering if this has anything to do with my newer kernel version,
</span><br>
<span class="quotelev2">&gt;&gt; since it works well in the old case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev2">&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev2">&gt;&gt; Email: allwu_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 25 Nov 2014 07:29:51 -0800
</span><br>
<span class="quotelev2">&gt;&gt; From:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
</span><br>
<span class="quotelev2">&gt;&gt;         execution       on an embedded ARM Linux kernel version 3.15.0
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don?t know what you put in that log file, but it was an executable and
</span><br>
<span class="quotelev2">&gt;&gt; I?m not feeling that trusting :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I?m afraid there isn?t enough debug output there to really tell anything.
</span><br>
<span class="quotelev2">&gt;&gt; From what little I can see, I?m guessing that the application ran fine and
</span><br>
<span class="quotelev2">&gt;&gt; you got the usual ?hello? output and the helloworld process exited safely -
</span><br>
<span class="quotelev2">&gt;&gt; is that correct? And so it is solely mpirun that is failing to cleanly
</span><br>
<span class="quotelev2">&gt;&gt; terminate?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything
</span><br>
<span class="quotelev2">&gt;&gt; works fine for my system based on Linux 3.8.0. I have previously submitted
</span><br>
<span class="quotelev2">&gt;&gt; a post related to my compilation, which can be found here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;. When I
</span><br>
<span class="quotelev2">&gt;&gt; recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck at even
</span><br>
<span class="quotelev2">&gt;&gt; the helloworld program. The program consists only simple APIs: MPI_Init,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs even at
</span><br>
<span class="quotelev2">&gt;&gt; 'mpirun -np 1 ./helloworld', and below are the output with --debug-devel
</span><br>
<span class="quotelev2">&gt;&gt; (before it got stuck):
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00716] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [fpga1:00718] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I suspect maybe it is due to incompatible kernel version or some
</span><br>
<span class="quotelev2">&gt;&gt; missing kernel modules. I tried also with the latest version 1.8.3, and had
</span><br>
<span class="quotelev2">&gt;&gt; the same problem. Does anyone have any thoughts? I have attached the output
</span><br>
<span class="quotelev2">&gt;&gt; of 'ompi-info --all' with this email.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please let me know if I need to provide more information. Thanks in
</span><br>
<span class="quotelev2">&gt;&gt; advance!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Di Wu (Allan)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16343.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16343.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16343.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
