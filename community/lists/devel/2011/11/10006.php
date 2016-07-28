<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 19 13:18:48 2011" -->
<!-- isoreceived="20111119181848" -->
<!-- sent="Sat, 19 Nov 2011 19:18:38 +0100" -->
<!-- isosent="20111119181838" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK13iYYWuqjzVo0Rrob79GDfbTCRm9k4NuKCQnk_HC+TFCg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96044746-B94B-44C5-92B7-0ADEAF42861D_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-11-19 13:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10007.php">Bruce Foster: "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10056.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10056.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2011, at 11:50 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Ssend() trying to find where a message is stored (in the sender) if it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not send until the receiver post the recv, but i didn't find that place.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right, you can't find this as the message is not stored on the sender.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The pointer to the send request is sent encapsulated in the matching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; header, and the receiver will provide it back once the message has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, what you're saying is that the sender only sends the header, so when
</span><br>
<span class="quotelev2">&gt;&gt; the receiver post the recv will send again the header so the sender starts
</span><br>
<span class="quotelev2">&gt;&gt; with the data sent? am i getting it right?  If this is ok, the data stays
</span><br>
<span class="quotelev2">&gt;&gt; in the sender, but where it is stored?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we consider rendez-vous messages the data is remains in the sender
</span><br>
<span class="quotelev2">&gt;&gt; buffer (aka the buffer provided by the upper level to the MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; function).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, so i will only need to save the headears of the messages (where the
</span><br>
<span class="quotelev1">&gt; status is incomplete), and then maybe just call again the upper level
</span><br>
<span class="quotelev1">&gt; MP_Send. A question here, the headers are not marked as pending (at least i
</span><br>
<span class="quotelev1">&gt; think so), so, my only approach might be to create a list of pending
</span><br>
<span class="quotelev1">&gt; headers and store there the pointer to the send, then try to identify its
</span><br>
<span class="quotelev1">&gt; corresponding upper level MPI_Send and retries it in case of failure, is
</span><br>
<span class="quotelev1">&gt; this a correct approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look in the mca/vprotocol/base to see how we deal with the send requests
</span><br>
<span class="quotelev1">&gt; in our message logging protocol. We hijack the send request list, and
</span><br>
<span class="quotelev1">&gt; replace them with our own, allowing us to chain all active requests. This
</span><br>
<span class="quotelev1">&gt; make the tracking of chive requests very simple, and minimize the impact on
</span><br>
<span class="quotelev1">&gt; the overall code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok George.
<br>
I will take a look there and then let you know how it goes.
<br>
<p>Thanks.
<br>
<p>Hugo
<br>
<p><span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10007.php">Bruce Foster: "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10056.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10056.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
