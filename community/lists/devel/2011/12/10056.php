<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 07:00:06 2011" -->
<!-- isoreceived="20111209120006" -->
<!-- sent="Fri, 9 Dec 2011 12:59:56 +0100" -->
<!-- isosent="20111209115956" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK10M0Wu0mtVEPCYNG+ZNKxnPFOo7hM0BSKUs19a6zXJgRw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABdqK13iYYWuqjzVo0Rrob79GDfbTCRm9k4NuKCQnk_HC+TFCg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Retrying a MPI_SEND<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 06:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George and all.
<br>
<p>I've been adapting some of the code to copy the request, and now i think
<br>
that it is working ok. I'm storing the request as you do on the pessimist,
<br>
but i'm only logging received messages, as my approach is a pessimist log
<br>
based on the receiver.
<br>
<p>I do have a question about how you detect when you have to resend a
<br>
message, or at least repost it?
<br>
<p>Thanks for the help.
<br>
<p>Hugo
<br>
<p>2011/11/19 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2011, at 11:50 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Ssend() trying to find where a message is stored (in the sender) if it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is not send until the receiver post the recv, but i didn't find that place.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right, you can't find this as the message is not stored on the sender.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The pointer to the send request is sent encapsulated in the matching
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; header, and the receiver will provide it back once the message has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, what you're saying is that the sender only sends the header, so when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the receiver post the recv will send again the header so the sender starts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the data sent? am i getting it right?  If this is ok, the data stays
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the sender, but where it is stored?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we consider rendez-vous messages the data is remains in the sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer (aka the buffer provided by the upper level to the MPI_Send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, so i will only need to save the headears of the messages (where the
</span><br>
<span class="quotelev2">&gt;&gt; status is incomplete), and then maybe just call again the upper level
</span><br>
<span class="quotelev2">&gt;&gt; MP_Send. A question here, the headers are not marked as pending (at least i
</span><br>
<span class="quotelev2">&gt;&gt; think so), so, my only approach might be to create a list of pending
</span><br>
<span class="quotelev2">&gt;&gt; headers and store there the pointer to the send, then try to identify its
</span><br>
<span class="quotelev2">&gt;&gt; corresponding upper level MPI_Send and retries it in case of failure, is
</span><br>
<span class="quotelev2">&gt;&gt; this a correct approach?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Look in the mca/vprotocol/base to see how we deal with the send requests
</span><br>
<span class="quotelev2">&gt;&gt; in our message logging protocol. We hijack the send request list, and
</span><br>
<span class="quotelev2">&gt;&gt; replace them with our own, allowing us to chain all active requests. This
</span><br>
<span class="quotelev2">&gt;&gt; make the tracking of chive requests very simple, and minimize the impact on
</span><br>
<span class="quotelev2">&gt;&gt; the overall code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok George.
</span><br>
<span class="quotelev1">&gt; I will take a look there and then let you know how it goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10055.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
