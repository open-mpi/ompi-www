<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 11:33:32 2015" -->
<!-- isoreceived="20150408153332" -->
<!-- sent="Wed, 8 Apr 2015 08:32:25 -0700" -->
<!-- isosent="20150408153225" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="E3555A24-2B9C-40B7-ACCB-DD2E4A2A6E52_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAowFmMVuBg-bi=StG=CNwwfwDM+30q6utwskzCC7m6zwiL=YQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 11:32:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26653.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Previous message:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>In reply to:</strong> <a href="26642.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;could you try 1.8.5rc1? We&#226;&#128;&#153;ve done some thread-related stuff on it, but we may not have solved this level of use just yet. We are working on the new1.9 series that we hope to make more thread friendly
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Apr 7, 2015, at 11:16 AM, Thomas Klimpel &lt;jacques.gentzen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a stackdump from inside the debugger (because it gives filenames and line numbers):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 0x7f1eb6bfd700 (LWP 24847)]
</span><br>
<span class="quotelev1">&gt; 0x000000366aa79252 in _int_malloc () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x000000366aa79252 in _int_malloc () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x000000366aa7b7da in _int_realloc () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x000000366aa7baf5 in realloc () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00007f1ee005d0a8 in epoll_dispatch (base=&lt;value optimized out&gt;, arg=0x13d1310, tv=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../package/openmpi-1.6.5/opal/event/epoll.c:271
</span><br>
<span class="quotelev1">&gt; #4  0x00007f1ee005f1cf in opal_event_base_loop (base=0x13d1e50, flags=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../package/openmpi-1.6.5/opal/event/event.c:838
</span><br>
<span class="quotelev1">&gt; #5  0x00007f1ee00842f9 in opal_progress () at ../../../../package/openmpi-1.6.5/opal/runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #6  0x00007f1ecd43cd7f in mca_pml_ob1_iprobe (src=&lt;value optimized out&gt;, tag=-1, comm=0x164dd40, matched=0x7f1eb6bfb8ac, status=0x7f1eb6bfb8b0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../../package/openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_iprobe.c:48
</span><br>
<span class="quotelev1">&gt; #7  0x00007f1edffe3427 in PMPI_Iprobe (source=227, tag=-1, comm=0x164dd40, flag=&lt;value optimized out&gt;, status=&lt;value optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at piprobe.c:79
</span><br>
<span class="quotelev1">&gt; #8  0x00007f1eebb518e7 in OMPIConnection::Receive (this=0x13c7950, rMessage_p=std::vector of length 0, capacity 0, 
</span><br>
<span class="quotelev1">&gt;     rMessageId_p=@0x7f1eb6bfc26c, NodeId_p=227)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26642.php">http://www.open-mpi.org/community/lists/users/2015/04/26642.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26653.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Previous message:</strong> <a href="26651.php">Ralph Castain: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>In reply to:</strong> <a href="26642.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
