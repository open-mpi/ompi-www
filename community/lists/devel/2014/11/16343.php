<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 14:12:03 2014" -->
<!-- isoreceived="20141125191203" -->
<!-- sent="Tue, 25 Nov 2014 11:11:37 -0800" -->
<!-- isosent="20141125191137" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAHT6FhMrUdOTFU4MuVT204rgkJ2o4=_skXfqXLSMaDdsyXrv1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14y=kuzZWwq6TCybMScaY9KssX-6m=G8JLaxHa7srzEgQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-25 14:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16344.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16344.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16344.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16345.php">Larry Baker: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul! Unfortunately '/boot' is not available in my embedded linux,
<br>
and I do not have the configuration file for the old kernel since it is
<br>
provided as is. However, I have the new kernel configuration since I
<br>
compiled it myself. Would it be helpful if I provide you the .config file
<br>
when I compile the kernel? It maybe quite painful to look through that file
<br>
though. Is there any other way that I can obtain the configuration?
<br>
<p>I checked my config for the new kernel, and UNIX-domain sockets and Sys V
<br>
IPC are both enabled in the build. Are there any other possibilities I can
<br>
check?
<br>
<p>Thanks,
<br>
Di
<br>
<p><pre>
--
Di Wu (Allan)
PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]
On Tue, Nov 25, 2014 at 10:45 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
&gt; Allan,
&gt;
&gt; A likely possibility is that some important kernel feature (that Open MPI
&gt; assumes is present) is missing.
&gt; That includes not only &quot;kernel modules&quot; as you mention, but also features
&gt; configure in (or out) of the base kernel.
&gt; For instance, some embedded kernels omit UNIX-domain sockets and SysV IPC
&gt; support.
&gt;
&gt; If you can send me (preferably off-list) the kernel config files for the
&gt; old an new kernels I may be able to spot something.
&gt; If present, you are looking for /boot/config-[VERSION]
&gt;
&gt; -Paul
&gt;
&gt; On Tue, Nov 25, 2014 at 10:25 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; I'm sorry I forgot to change the subject when I reply to the digest
&gt;&gt; issue. Please find my original email below.
&gt;&gt;
&gt;&gt; Regards,
&gt;&gt; Di
&gt;&gt;
&gt;&gt; On Tue, Nov 25, 2014 at 10:19 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; Thanks Ralph for the reply. Sorry about the log file, I think I forgot
&gt;&gt;&gt; to put an extension to the file. Please find a new one attached with this
&gt;&gt;&gt; email.
&gt;&gt;&gt;
&gt;&gt;&gt; I'm sorry for not enough debugging information, but 'omp_info' and
&gt;&gt;&gt; '--debug-devel' are the only ways I know for collecting information, are
&gt;&gt;&gt; there any other things I can try to provide more info?
&gt;&gt;&gt;
&gt;&gt;&gt; When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the output
&gt;&gt;&gt; is the logging information in my last email. It got stuck at
&gt;&gt;&gt;  &quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program is
&gt;&gt;&gt; printed out to the screen. So I think it is mpirun failing to start my
&gt;&gt;&gt; executable, not failing to terminate.
&gt;&gt;&gt;
&gt;&gt;&gt; I was wondering if this has anything to do with my newer kernel version,
&gt;&gt;&gt; since it works well in the old case.
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks,
&gt;&gt;&gt; --
&gt;&gt;&gt; Di Wu (Allan)
&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
&gt;&gt;&gt; Email: allwu_at_[hidden]
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Date: Tue, 25 Nov 2014 07:29:51 -0800
&gt;&gt;&gt; From:
&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
&gt;&gt;&gt;         execution       on an embedded ARM Linux kernel version 3.15.0
&gt;&gt;&gt; Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; I don?t know what you put in that log file, but it was an executable and
&gt;&gt;&gt; I?m not feeling that trusting :-)
&gt;&gt;&gt;
&gt;&gt;&gt; I?m afraid there isn?t enough debug output there to really tell
&gt;&gt;&gt; anything. From what little I can see, I?m guessing that the application ran
&gt;&gt;&gt; fine and you got the usual ?hello? output and the helloworld process exited
&gt;&gt;&gt; safely - is that correct? And so it is solely mpirun that is failing to
&gt;&gt;&gt; cleanly terminate?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; &gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Hello everyone,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything
&gt;&gt;&gt; works fine for my system based on Linux 3.8.0. I have previously submitted
&gt;&gt;&gt; a post related to my compilation, which can be found here:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;. When
&gt;&gt;&gt; I recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck at
&gt;&gt;&gt; even the helloworld program. The program consists only simple APIs:
&gt;&gt;&gt; MPI_Init, MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs
&gt;&gt;&gt; even at 'mpirun -np 1 ./helloworld', and below are the output with
&gt;&gt;&gt; --debug-devel (before it got stuck):
&gt;&gt;&gt; &gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
&gt;&gt;&gt; &gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
&gt;&gt;&gt; &gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
&gt;&gt;&gt; &gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
&gt;&gt;&gt; &gt; [fpga1:00716] tmp: /tmp
&gt;&gt;&gt; &gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
&gt;&gt;&gt; &gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
&gt;&gt;&gt; &gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; [fpga1:00718] tmp: /tmp
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I suspect maybe it is due to incompatible kernel version or some
&gt;&gt;&gt; missing kernel modules. I tried also with the latest version 1.8.3, and had
&gt;&gt;&gt; the same problem. Does anyone have any thoughts? I have attached the output
&gt;&gt;&gt; of 'ompi-info --all' with this email.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Please let me know if I need to provide more information. Thanks in
&gt;&gt;&gt; advance!
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Regards,
&gt;&gt;&gt; &gt; --
&gt;&gt;&gt; &gt; Di Wu (Allan)
&gt;&gt;&gt; &gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
&gt;&gt;&gt; &gt; Department of Computer Science, UC Los Angeles
&gt;&gt;&gt; &gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt;
&gt;&gt;&gt; &gt; &lt;log.tar.gz&gt;_______________________________________________
&gt;&gt;&gt; &gt; devel mailing list
&gt;&gt;&gt; &gt; devel_at_[hidden]
&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; &gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>
&gt;&gt;
&gt;
&gt;
&gt;
&gt; --
&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
&gt; Computer Languages &amp; Systems Software (CLaSS) Group
&gt; Computer Science Department               Tel: +1-510-495-2352
&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16344.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16342.php">Paul Hargrove: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16344.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16344.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16345.php">Larry Baker: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
