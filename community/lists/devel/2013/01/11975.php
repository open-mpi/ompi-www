<?
$subject_val = "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 08:11:07 2013" -->
<!-- isoreceived="20130124131107" -->
<!-- sent="Thu, 24 Jan 2013 05:11:02 -0800" -->
<!-- isosent="20130124131102" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E931113FB_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAC0a=QNwhPXiAxjBjbb-RGAxOSrPTTqOxRinCRM_cSLFZpdpTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 08:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="11974.php">Alessandro Fanfarillo: "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>In reply to:</strong> <a href="11974.php">Alessandro Fanfarillo: "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11977.php">Alessandro Fanfarillo: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Reply:</strong> <a href="11977.php">Alessandro Fanfarillo: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for this report.  I will look into this.  Can you tell me what your mpirun command looked like and do you know what transport you are running over?
<br>
Specifically, is this on a single node or multiple nodes?
<br>
<p>Rolf
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Alessandro Fanfarillo
<br>
Sent: Thursday, January 24, 2013 4:11 AM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862
<br>
<p>Dear all,
<br>
I would like to report a bug for the CUDA support on the last 5 trunk versions.
<br>
The attached code is a simply send/receive test case which correctly works with version 1.9a1r27844.
<br>
Starting from version 1.9a1r27862 up to 1.9a1r27897 I get the following message:
<br>
<p>./test: symbol lookup error: /usr/local/openmpi/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
./test: symbol lookup error: /usr/local/openmpi/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 21641 on
<br>
node ip-10-16-24-100 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>-----------------------------------------------------------------------------------------------------
<br>
I'm using gcc-4.7.2 and CUDA 4.2. The test fails also with CUDA 4.1.
<br>
Thanks in advance.
<br>
<p>Best regards.
<br>
<p>Alessandro Fanfarillo
<br>
<p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="11974.php">Alessandro Fanfarillo: "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>In reply to:</strong> <a href="11974.php">Alessandro Fanfarillo: "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11977.php">Alessandro Fanfarillo: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Reply:</strong> <a href="11977.php">Alessandro Fanfarillo: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
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
