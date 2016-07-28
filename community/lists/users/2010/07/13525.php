<?
$subject_val = "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 20:32:51 2010" -->
<!-- isoreceived="20100708003251" -->
<!-- sent="Wed, 7 Jul 2010 17:32:27 -0700" -->
<!-- isosent="20100708003227" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated" -->
<!-- id="AANLkTinmJ-Gu-qEuu_rL9QcZR2Npf4bWiNSup0n_k8VL_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w3114382F34F3DC45A91757CBB30_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 20:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<li><strong>In reply to:</strong> <a href="13502.php">Jack Bryan: "[OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This error typically occurs when the received message is bigger than the
<br>
specified buffer size.  You need to narrow your code down to offending
<br>
receive command to see if this is indeed the case.
<br>
<p>On Wed, Jul 7, 2010 at 8:42 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Dear All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to transfer some messages from workers master node on MPI cluster
</span><br>
<span class="quotelev1">&gt; with Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The number of messages is fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I increase the number of worker nodes, i got error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of
</span><br>
<span class="quotelev1">&gt; 'boost::exception_detail::clone_impl&lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt;
</span><br>
<span class="quotelev2">&gt; &gt;'
</span><br>
<span class="quotelev1">&gt;   what():  MPI_Unpack: MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [n231:45873] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n231:45873] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [n231:45873] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [n231:45873] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev1">&gt; [n231:45873] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3c50230215]
</span><br>
<span class="quotelev1">&gt; [n231:45873] [ 2] /lib64/libc.so.6(abort+0x110) [0x3c50231cc0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For 40 workers , it works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for 50 workers, it got this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The largest message size is not more then 72 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; July 7 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy is not the too busy. Combine all your e-mail accounts with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<li><strong>In reply to:</strong> <a href="13502.php">Jack Bryan: "[OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
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
