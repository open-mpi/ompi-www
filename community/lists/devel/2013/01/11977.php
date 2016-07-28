<?
$subject_val = "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 08:31:42 2013" -->
<!-- isoreceived="20130124133142" -->
<!-- sent="Thu, 24 Jan 2013 14:31:38 +0100" -->
<!-- isosent="20130124133138" -->
<!-- name="Alessandro Fanfarillo" -->
<!-- email="fanfarillo.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862" -->
<!-- id="CAC0a=QN+mnCJj6UfjFo1sVVTi08ZnoJ046L5pAbQVY1==0X4hA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E931113FB_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Alessandro Fanfarillo (<em>fanfarillo.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 08:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>In reply to:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I usually run &quot;mpirun -np 2 ./test&quot;. I execute always on a single node. The
<br>
message appears either with 1 or 2 GPUs on the single node.
<br>
<p><p>2013/1/24 Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Thanks for this report.  I will look into this.  Can you tell me what your
</span><br>
<span class="quotelev1">&gt; mpirun command looked like and do you know what transport you are running
</span><br>
<span class="quotelev1">&gt; over?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, is this on a single node or multiple nodes?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Alessandro Fanfarillo
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, January 24, 2013 4:11 AM
</span><br>
<span class="quotelev1">&gt; *To:* devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] CUDA support doesn't work starting from
</span><br>
<span class="quotelev1">&gt; 1.9a1r27862****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to report a bug for the CUDA support on the last 5 trunk
</span><br>
<span class="quotelev1">&gt; versions.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached code is a simply send/receive test case which correctly works
</span><br>
<span class="quotelev1">&gt; with version 1.9a1r27844. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Starting from version 1.9a1r27862 up to 1.9a1r27897 I get the following
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./test: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/openmpi/mca_pml_ob1.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; ./test: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib/openmpi/mca_pml_ob1.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 21641 on
</span><br>
<span class="quotelev1">&gt; node ip-10-16-24-100 exiting improperly. There are three reasons this
</span><br>
<span class="quotelev1">&gt; could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using gcc-4.7.2 and CUDA 4.2. The test fails also with CUDA 4.1.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alessandro Fanfarillo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt;  This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt; of the original message.
</span><br>
<span class="quotelev1">&gt;  ------------------------------
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>In reply to:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
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
