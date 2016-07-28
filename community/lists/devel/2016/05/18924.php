<?
$subject_val = "Re: [OMPI devel] Question about 'progress function'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 01:41:15 2016" -->
<!-- isoreceived="20160506054115" -->
<!-- sent="Thu, 5 May 2016 23:41:05 -0600" -->
<!-- isosent="20160506054105" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about 'progress function'" -->
<!-- id="20160506054105.GK42233_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDhwnJGZaWnv-Lm7_K0zPBKrft6+ob8Vr_6s7sEixZ=qyQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 01:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>Previous message:</strong> <a href="18923.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>In reply to:</strong> <a href="18922.php">dpchoudh .: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The return code of your progress function should be related to the
<br>
activity (send, recv, put, get, etc completion) on your network. The
<br>
return is not really used right now but may be meaningful in the
<br>
future.
<br>
<p>Your BTL signals progress through two mechanisms:
<br>
<p>&nbsp;1) Send completion is indicated by either your btl_send() function
<br>
&nbsp;returning 1 (this indicates no calls to btl_progress() are needed and
<br>
&nbsp;that the user buffer is no longer needed), your btl_sendi() function
<br>
&nbsp;returning OPAL_SUCCESS, or you calling the send fragment's callback
<br>
&nbsp;function. btl_send() is the minimum function needed but btl_sendi() can
<br>
&nbsp;provide a faster path to putting a fragment on a network.
<br>
<p>&nbsp;2) Receive completion is indicated by calling a callback associated
<br>
&nbsp;with a fragment's tag. This tag is supplied to btl_send() and
<br>
&nbsp;btl_sendi() is usually sent with the fragment data (usually inline with
<br>
&nbsp;the data). A typical progress function polls the network and on finding
<br>
&nbsp;an incoming fragment, extracts the btl tag and calls the associated
<br>
&nbsp;calback.
<br>
<p>It is usually helpful to look at how other btl's work but you can also
<br>
find quite a bit of information in opal/mca/btl/btl.h.
<br>
<p>-Nathan
<br>
<p>On Fri, May 06, 2016 at 12:01:05AM -0400, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt;    George
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks for your help. But what should the progress function return, so
</span><br>
<span class="quotelev1">&gt;    that the event is signalled? Right now I am returning a 1 when data has
</span><br>
<span class="quotelev1">&gt;    been transmitted and 0 otherwise, but that does not seem to work. Also,
</span><br>
<span class="quotelev1">&gt;    please keep in mind that the transport I am working on supports unreliable
</span><br>
<span class="quotelev1">&gt;    datagrams only, so there is no ack from the recipient to wait for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks again
</span><br>
<span class="quotelev1">&gt;    Durga
</span><br>
<span class="quotelev1">&gt;    The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt;    ageing.
</span><br>
<span class="quotelev1">&gt;    On Thu, May 5, 2016 at 11:33 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Durga,
</span><br>
<span class="quotelev1">&gt;      TCP doesn't need a specialized progress function because we are tied
</span><br>
<span class="quotelev1">&gt;      directly with libevent. In your case you should provide a BTL progress
</span><br>
<span class="quotelev1">&gt;      function, function that will be called at the end of libevent base loop
</span><br>
<span class="quotelev1">&gt;      regularly.
</span><br>
<span class="quotelev1">&gt;        George.
</span><br>
<span class="quotelev1">&gt;      On Thu, May 5, 2016 at 11:30 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Apologies for a 101 level question again, but here it is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        A new BTL layer I am implementing hangs in MPI_Send(). Please keep in
</span><br>
<span class="quotelev1">&gt;        mind that at this stage, I am simply desperate to make MPI data move
</span><br>
<span class="quotelev1">&gt;        through this fabric in any way possible, so I have thrown all good
</span><br>
<span class="quotelev1">&gt;        programming practice out of the window and in the process might have
</span><br>
<span class="quotelev1">&gt;        added bugs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        The test code basically has a single call to MPI_Send() with 8 bytes
</span><br>
<span class="quotelev1">&gt;        of data, the smallest amount the HCA can DMA. I have a very simple
</span><br>
<span class="quotelev1">&gt;        mca_btl_component_progress() method that returns 0 if called before
</span><br>
<span class="quotelev1">&gt;        mca_btl_endpoint_send() and returns 1 if called after. I use a static
</span><br>
<span class="quotelev1">&gt;        variable to keep track whether endpoint_send() has been called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        With this, the MPI process hangs with the following stack:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        (gdb) bt
</span><br>
<span class="quotelev1">&gt;        #0  0x00007f7518c60b7d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt;        #1  0x00007f75183e79f6 in poll_dispatch (base=0x19cf480,
</span><br>
<span class="quotelev1">&gt;        tv=0x7f75177efe80) at poll.c:165
</span><br>
<span class="quotelev1">&gt;        #2  0x00007f75183df690 in opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev1">&gt;        (base=0x19cf480, flags=1) at event.c:1630
</span><br>
<span class="quotelev1">&gt;        #3  0x00007f75183613d4 in progress_engine (obj=0x19cedd8) at
</span><br>
<span class="quotelev1">&gt;        runtime/opal_progress_threads.c:105
</span><br>
<span class="quotelev1">&gt;        #4  0x00007f7518f3ddf5 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;        #5  0x00007f7518c6b1ad in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        I am using code from master branch for this work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Obviously I am not doing the progress handling right, and I don't even
</span><br>
<span class="quotelev1">&gt;        understand how it should work, as the TCP btl does not even provide a
</span><br>
<span class="quotelev1">&gt;        component progress function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Any relevant pointer on how this should be done is highly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Thanks
</span><br>
<span class="quotelev1">&gt;        Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev1">&gt;        quit ageing.
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18919.php">http://www.open-mpi.org/community/lists/devel/2016/05/18919.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18920.php">http://www.open-mpi.org/community/lists/devel/2016/05/18920.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18922.php">http://www.open-mpi.org/community/lists/devel/2016/05/18922.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18924/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>Previous message:</strong> <a href="18923.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>In reply to:</strong> <a href="18922.php">dpchoudh .: "Re: [OMPI devel] Question about 'progress function'"</a>
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
