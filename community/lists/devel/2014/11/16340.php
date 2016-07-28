<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 2854, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 13:19:49 2014" -->
<!-- isoreceived="20141125181949" -->
<!-- sent="Tue, 25 Nov 2014 10:19:21 -0800" -->
<!-- isosent="20141125181921" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 2854, Issue 1" -->
<!-- id="CAHT6FhNEiMi_fCVwi=5kkXM7sq3u1-VPQnVgTkNqZ4FCkn4tSA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.5.1416934802.18574.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 2854, Issue 1<br>
<strong>From:</strong> Allan Wu (<em>allwu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 13:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16339.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph for the reply. Sorry about the log file, I think I forgot to
<br>
put an extension to the file. Please find a new one attached with this
<br>
email.
<br>
<p>&#226;&#128;&#139;I'm sorry for not enough debugging information, &#226;&#128;&#139;but 'omp_info' and
<br>
'--debug-devel' are the only ways I know for collecting information, are
<br>
there any other things I can try to provide more info?
<br>
<p>When I execute 'mpirun --debug-devel -np 1 ./helloworld', all the output is
<br>
the logging information in my last email. It got stuck at
<br>
&#226;&#128;&#139;
<br>
&nbsp;&quot;[fpga1:00718] tmp: /tmp&quot;, and nothing from my helloworld program is
<br>
printed out to the screen. So I think it is mpirun failing to start my
<br>
executable, not failing to terminate.
<br>
<p>I was wondering if this has anything to do with my newer kernel version,
<br>
since it works well in the old case.
<br>
<p>Thanks,
<br>
<pre>
--
Di Wu (Allan)
PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]
&#226;&#128;&#139;Date: Tue, 25 Nov 2014 07:29:51 -0800
From:
&#226;&#128;&#139;&#226;&#128;&#139;
Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Subject: Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at
        execution       on an embedded ARM Linux kernel version 3.15.0
Message-ID: &lt;898CB117-F6A6-4569-89C3-49B75D65B314_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;utf-8&quot;
I don?t know what you put in that log file, but it was an executable and
I?m not feeling that trusting :-)
I?m afraid there isn?t enough debug output there to really tell anything.
&gt;From what little I can see, I?m guessing that the application ran fine and
you got the usual ?hello? output and the helloworld process exited safely -
is that correct? And so it is solely mpirun that is failing to cleanly
terminate?
&gt; On Nov 24, 2014, at 11:24 PM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
&gt;
&gt; Hello everyone,
&gt;
&gt; I have cross-compiled OpenMPI for an embedded ARM Linux. Everything works
fine for my system based on Linux 3.8.0. I have previously submitted a post
related to my compilation, which can be found here:
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a> &lt;
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>&gt;. When I
recently upgraded my Linux kernel to 3.15.0, mpirun begins to stuck at even
the helloworld program. The program consists only simple APIs: MPI_Init,
MPI_Comm_size, MPI_Comm_rank, MPI_Finalize. The problem occurs even at
'mpirun -np 1 ./helloworld', and below are the output with --debug-devel
(before it got stuck):
&gt; [fpga1:00716] sess_dir_finalize: job session dir not empty - leaving
&gt; [fpga1:00716] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0/0
&gt; [fpga1:00716] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/0
&gt; [fpga1:00716] top: openmpi-sessions-root_at_fpga1_0
&gt; [fpga1:00716] tmp: /tmp
&gt; [fpga1:00718] procdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1/0
&gt; [fpga1:00718] jobdir: /tmp/openmpi-sessions-root_at_fpga1_0/63813/1
&gt; [fpga1:00718] top: openmpi-sessions-root_at_fpga1_0
&gt;
&#226;&#128;&#139;&#226;&#128;&#139;
[fpga1:00718] tmp: /tmp
&gt;
&gt; I suspect maybe it is due to incompatible kernel version or some missing
kernel modules. I tried also with the latest version 1.8.3, and had the
same problem. Does anyone have any thoughts? I have attached the output of
'ompi-info --all' with this email.
&gt;
&gt; Please let me know if I need to provide more information. Thanks in
advance!
&gt;
&gt; Regards,
&gt; --
&gt; Di Wu (Allan)
&gt; PhD student, VAST?Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
&gt; Department of Computer Science, UC Los Angeles
&gt; Email: allwu_at_[hidden] &lt;mailto:allwu_at_[hidden]&gt;
&gt; &lt;log.tar.gz&gt;_______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post:
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16330.php%e2%80%8b">http://www.open-mpi.org/community/lists/devel/2014/11/16330.php%e2%80%8b</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16340/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16340/log.tar.gz">log.tar.gz</a>
</ul>
<!-- attachment="log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16341.php">Allan Wu: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16339.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
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
