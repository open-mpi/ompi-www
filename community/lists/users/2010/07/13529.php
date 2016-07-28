<?
$subject_val = "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 02:25:43 2010" -->
<!-- isoreceived="20100708062543" -->
<!-- sent="Thu, 8 Jul 2010 08:25:32 +0200" -->
<!-- isosent="20100708062532" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated" -->
<!-- id="AANLkTinOVXIfiwWkezbyr5zSXFQHlFoDNNIdcw6B5Ru__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w173E7BE8AAF285EE7F3708CBB40_at_phx.gbl" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 02:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack
<br>
<p>100 kbytes are not really big messages sizes. My applications
<br>
routinely exchange larger amounts.
<br>
<p>The MPI_ERR_TRUNCATE error means that a buffer you provided to
<br>
MPI_Recv is too small
<br>
to hold the data to be received. Check the size of the data you send
<br>
and compare it with the size
<br>
of the buffer you passed to MPI_Recv.
<br>
<p>As Zhang suggested: try to reduce your code to isolate the offending codes.
<br>
Can you create a simple application with two processes exchanging data which has
<br>
the MPI_ERR_TRUNCATE problem?
<br>
<p>Jody
<br>
<p><p><p><p><p><p>On Thu, Jul 8, 2010 at 5:39 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Wat if the master has to send and receive large data package ?
</span><br>
<span class="quotelev1">&gt; It has to be splited into multiple parts ?
</span><br>
<span class="quotelev1">&gt; This may increase communication overhead.
</span><br>
<span class="quotelev1">&gt; I can use MPI_datatype to wrap it up as a specific datatype, which can carry
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; data.
</span><br>
<span class="quotelev1">&gt; What if the data is very large? 1k bytes or 10 kbytes , 100 kbytes ?
</span><br>
<span class="quotelev1">&gt; the master need to collect the same datatype from all workers.
</span><br>
<span class="quotelev1">&gt; So, in this way, the master has to set up a data pool to get all data.
</span><br>
<span class="quotelev1">&gt; The master's buffer provided by the MPI may not be large enough to do this.
</span><br>
<span class="quotelev1">&gt; Are there some other ways to do it ?
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; july 7 &#160;2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Wed, 7 Jul 2010 17:32:27 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error typically occurs when the received message is bigger than the
</span><br>
<span class="quotelev1">&gt; specified buffer size. &#160;You need to narrow your code down to offending
</span><br>
<span class="quotelev1">&gt; receive command to see if this is indeed the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 7, 2010 at 8:42 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt; I need to transfer some messages from workers master node on MPI cluster
</span><br>
<span class="quotelev1">&gt; with Open MPI.
</span><br>
<span class="quotelev1">&gt; The number of messages is fixed.
</span><br>
<span class="quotelev1">&gt; When I increase the number of worker nodes, i got error:
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of
</span><br>
<span class="quotelev1">&gt; 'boost::exception_detail::clone_impl&lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt;
</span><br>
<span class="quotelev2">&gt;&gt;'
</span><br>
<span class="quotelev1">&gt; &#160;&#160;what(): &#160;MPI_Unpack: MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [n231:45873] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n231:45873] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [n231:45873] Signal code: &#160;(-6)
</span><br>
<span class="quotelev1">&gt; [n231:45873] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev1">&gt; [n231:45873] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3c50230215]
</span><br>
<span class="quotelev1">&gt; [n231:45873] [ 2] /lib64/libc.so.6(abort+0x110) [0x3c50231cc0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; For 40 workers , it works well.
</span><br>
<span class="quotelev1">&gt; But for 50 workers, it got this error.
</span><br>
<span class="quotelev1">&gt; The largest message size is not more then 72 bytes.
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; July 7 2010
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; The New Busy is not the too busy. Combine all your e-mail accounts with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; The New Busy is not the too busy. Combine all your e-mail accounts with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13530.php">Oliver Stolpe: "[OMPI users] Processes always rank 0"</a>
<li><strong>Previous message:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
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
