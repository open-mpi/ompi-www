<?
$subject_val = "Re: [OMPI devel] Question about 'progress function'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 00:01:06 2016" -->
<!-- isoreceived="20160506040106" -->
<!-- sent="Fri, 6 May 2016 00:01:05 -0400" -->
<!-- isosent="20160506040105" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about 'progress function'" -->
<!-- id="CAHXxYDhwnJGZaWnv-Lm7_K0zPBKrft6+ob8Vr_6s7sEixZ=qyQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUvuAvY6nc2Fye-t7RiEykynimg0Xs4zXnFsqSJ0Y42-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about 'progress function'<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 00:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18923.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>Previous message:</strong> <a href="18921.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18924.php">Nathan Hjelm: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Reply:</strong> <a href="18924.php">Nathan Hjelm: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George
<br>
<p>Thanks for your help. But what should the progress function return, so that
<br>
the event is signalled? Right now I am returning a 1 when data has been
<br>
transmitted and 0 otherwise, but that does not seem to work. Also, please
<br>
keep in mind that the transport I am working on supports unreliable
<br>
datagrams only, so there is no ack from the recipient to wait for.
<br>
<p>Thanks again
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Thu, May 5, 2016 at 11:33 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TCP doesn't need a specialized progress function because we are tied
</span><br>
<span class="quotelev1">&gt; directly with libevent. In your case you should provide a BTL progress
</span><br>
<span class="quotelev1">&gt; function, function that will be called at the end of libevent base loop
</span><br>
<span class="quotelev1">&gt; regularly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 5, 2016 at 11:30 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Apologies for a 101 level question again, but here it is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A new BTL layer I am implementing hangs in MPI_Send(). Please keep in
</span><br>
<span class="quotelev2">&gt;&gt; mind that at this stage, I am simply desperate to make MPI data move
</span><br>
<span class="quotelev2">&gt;&gt; through this fabric in any way possible, so I have thrown all good
</span><br>
<span class="quotelev2">&gt;&gt; programming practice out of the window and in the process might have added
</span><br>
<span class="quotelev2">&gt;&gt; bugs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test code basically has a single call to MPI_Send() with 8 bytes of
</span><br>
<span class="quotelev2">&gt;&gt; data, the smallest amount the HCA can DMA. I have a very simple
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_component_progress() method that returns 0 if called before
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_endpoint_send() and returns 1 if called after. I use a static
</span><br>
<span class="quotelev2">&gt;&gt; variable to keep track whether endpoint_send() has been called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this, the MPI process hangs with the following stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f7518c60b7d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f75183e79f6 in poll_dispatch (base=0x19cf480,
</span><br>
<span class="quotelev2">&gt;&gt; tv=0x7f75177efe80) at poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f75183df690 in opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt; (base=0x19cf480, flags=1) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f75183613d4 in progress_engine (obj=0x19cedd8) at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_progress_threads.c:105
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f7518f3ddf5 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f7518c6b1ad in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using code from master branch for this work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Obviously I am not doing the progress handling right, and I don't even
</span><br>
<span class="quotelev2">&gt;&gt; understand how it should work, as the TCP btl does not even provide a
</span><br>
<span class="quotelev2">&gt;&gt; component progress function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any relevant pointer on how this should be done is highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev2">&gt;&gt; ageing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18919.php">http://www.open-mpi.org/community/lists/devel/2016/05/18919.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18920.php">http://www.open-mpi.org/community/lists/devel/2016/05/18920.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18923.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>Previous message:</strong> <a href="18921.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18920.php">George Bosilca: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18924.php">Nathan Hjelm: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Reply:</strong> <a href="18924.php">Nathan Hjelm: "Re: [OMPI devel] Question about 'progress function'"</a>
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
