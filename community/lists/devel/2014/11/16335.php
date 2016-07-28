<?
$subject_val = "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 12:14:49 2014" -->
<!-- isoreceived="20141125171449" -->
<!-- sent="Tue, 25 Nov 2014 09:09:52 -0800" -->
<!-- isosent="20141125170952" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0" -->
<!-- id="CAAvDA14CiMM=n9jHS_8tnS+JYc=BOVs6-7o_mKpUjS=LuSm3qA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="898CB117-F6A6-4569-89C3-49B75D65B314_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-11-25 12:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16336.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16334.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16337.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16337.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I downloaded the attachment and found it to be a gzipped tar file
<br>
containing a single text file &quot;log&quot;.
<br>
I have attached the bzipped (not tarred) log file.
<br>
<p>-Paul
<br>
<p>On Tue, Nov 25, 2014 at 7:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't know what you put in that log file, but it was an executable and
</span><br>
<span class="quotelev1">&gt; I'm not feeling that trusting :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid there isn't enough debug output there to really tell anything.
</span><br>
<span class="quotelev1">&gt; From what little I can see, I'm guessing that the application ran fine and
</span><br>
<span class="quotelev1">&gt; you got the usual &quot;hello&quot; output and the helloworld process exited safely -
</span><br>
<span class="quotelev1">&gt; is that correct? And so it is solely mpirun that is failing to cleanly
</span><br>
<span class="quotelev1">&gt; terminate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything works
</span><br>
<span class="quotelev1">&gt; fine for my system based on Linux 3.8.0. I have previously submitted a post
</span><br>
<span class="quotelev1">&gt; related to my compilation, which can be found here: <a href="http://www.open-mpi">http://www.open-mpi</a>
</span><br>
<span class="quotelev1">&gt; .org/community/lists/devel/2014/04/14440.php. When I recently upgraded my
</span><br>
<span class="quotelev1">&gt; Linux kernel to 3.15.0, mpirun begins to stuck at even the helloworld
</span><br>
<span class="quotelev1">&gt; program. The program consists only simple APIs: MPI_Init, MPI_Comm_size,
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank, MPI_Finalize. The problem occurs even at 'mpirun -np 1
</span><br>
<span class="quotelev1">&gt; ./helloworld', and below are the output with --debug-devel (before it got
</span><br>
<span class="quotelev1">&gt; stuck):
</span><br>
<span class="quotelev1">&gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
</span><br>
<span class="quotelev1">&gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
</span><br>
<span class="quotelev1">&gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev1">&gt; [fpga1:00716] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
</span><br>
<span class="quotelev1">&gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
</span><br>
<span class="quotelev1">&gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
</span><br>
<span class="quotelev1">&gt; [fpga1:00718] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect maybe it is due to incompatible kernel version or some missing
</span><br>
<span class="quotelev1">&gt; kernel modules. I tried also with the latest version 1.8.3, and had the
</span><br>
<span class="quotelev1">&gt; same problem. Does anyone have any thoughts? I have attached the output of
</span><br>
<span class="quotelev1">&gt; 'ompi-info --all' with this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if I need to provide more information. Thanks in
</span><br>
<span class="quotelev1">&gt; advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<span class="quotelev1">&gt;  &lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16331.php">http://www.open-mpi.org/community/lists/devel/2014/11/16331.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16335/log.bz2">log.bz2</a>
</ul>
<!-- attachment="log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16336.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16334.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16337.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Reply:</strong> <a href="16337.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
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
