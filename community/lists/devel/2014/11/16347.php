<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 15:11:24 2014" -->
<!-- isoreceived="20141125201124" -->
<!-- sent="Tue, 25 Nov 2014 12:11:21 -0800" -->
<!-- isosent="20141125201121" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAAvDA15bWh3_XSno7YPAVWwz7sZaRcBV5ZHc8mSWhxm-ycQx7A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BFC4ADEC-4561-4C8F-9735-4AC178A2DB0A_at_usgs.gov" -->
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
<strong>Date:</strong> 2014-11-25 15:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16348.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16345.php">Larry Baker: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following Larry's suggestion to use /proc/config.gz, Allan sent me kernel
<br>
configs for the old (3.8) and new (3.15) kernels.
<br>
While there were more changes than I expected, none relates to removing an
<br>
API/feature that Open MPI is likely to be using.
<br>
<p>-Paul
<br>
<p>On Tue, Nov 25, 2014 at 11:28 AM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Allan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can still boot the old embedded system, a lot of times the config
</span><br>
<span class="quotelev1">&gt; parameters are saved as /proc/config.gz.  You can at least them compare the
</span><br>
<span class="quotelev1">&gt; two configs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25 Nov 2014, at 11:11 AM, Allan Wu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Paul! Unfortunately '/boot' is not available in my embedded linux,
</span><br>
<span class="quotelev1">&gt; and I do not have the configuration file for the old kernel since it is
</span><br>
<span class="quotelev1">&gt; provided as is. However, I have the new kernel configuration since I
</span><br>
<span class="quotelev1">&gt; compiled it myself. Would it be helpful if I provide you the .config file
</span><br>
<span class="quotelev1">&gt; when I compile the kernel? It maybe quite painful to look through that file
</span><br>
<span class="quotelev1">&gt; though. Is there any other way that I can obtain the configuration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked my config for the new kernel, and UNIX-domain sockets and Sys V
</span><br>
<span class="quotelev1">&gt; IPC are both enabled in the build. Are there any other possibilities I can
</span><br>
<span class="quotelev1">&gt; check?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Di
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On Tue, Nov 25, 2014 at 10:45 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A likely possibility is that some important kernel feature (that Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; assumes is present) is missing.
</span><br>
<span class="quotelev2">&gt;&gt; That includes not only &quot;kernel modules&quot; as you mention, but also features
</span><br>
<span class="quotelev2">&gt;&gt; configure in (or out) of the base kernel.
</span><br>
<span class="quotelev2">&gt;&gt; For instance, some embedded kernels omit UNIX-domain sockets and SysV IPC
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can send me (preferably off-list) the kernel config files for the
</span><br>
<span class="quotelev2">&gt;&gt; old an new kernels I may be able to spot something.
</span><br>
<span class="quotelev2">&gt;&gt; If present, you are looking for /boot/config-[VERSION]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 25, 2014 at 10:25 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry I forgot to change the subject when I reply to the digest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue. Please find my original email below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Di
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Nov 25, 2014 at 10:19 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks Ralph for the reply. Sorry about the log file, I think I forgot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to put an extension to the file. Please find a new one attached with this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm sorry for not enough debugging information, but 'omp_info' and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '--debug-devel' are the only ways I know for collecting information, are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there any other things I can try to provide more info?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output is the logging information in my last email. It got stuck at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  &quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; printed out to the screen. So I think it is mpirun failing to start my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executable, not failing to terminate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was wondering if this has anything to do with my newer kernel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version, since it works well in the old case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Di Wu (Allan)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Email: allwu_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Tue, 25 Nov 2014 07:29:51 -0800
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         execution       on an embedded ARM Linux kernel version 3.15.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don?t know what you put in that log file, but it was an executable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I?m not feeling that trusting :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I?m afraid there isn?t enough debug output there to really tell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything. From what little I can see, I?m guessing that the application ran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fine and you got the usual ?hello? output and the helloworld process exited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; safely - is that correct? And so it is solely mpirun that is failing to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cleanly terminate?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works fine for my system based on Linux 3.8.0. I have previously submitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a post related to my compilation, which can be found here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;. When
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even the helloworld program. The program consists only simple APIs:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Init, MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even at 'mpirun -np 1 ./helloworld', and below are the output with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --debug-devel (before it got stuck):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00716] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [fpga1:00718] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I suspect maybe it is due to incompatible kernel version or some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; missing kernel modules. I tried also with the latest version 1.8.3, and had
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same problem. Does anyone have any thoughts? I have attached the output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of 'ompi-info --all' with this email.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Please let me know if I need to provide more information. Thanks in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; advance!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Di Wu (Allan)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16341.php">http://www.open-mpi.org/community/lists/devel/2014/11/16341.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16343.php">http://www.open-mpi.org/community/lists/devel/2014/11/16343.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16348.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>In reply to:</strong> <a href="16345.php">Larry Baker: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16346.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
