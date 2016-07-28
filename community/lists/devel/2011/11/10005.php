<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 14:55:04 2011" -->
<!-- isoreceived="20111118195504" -->
<!-- sent="Fri, 18 Nov 2011 11:55:00 -0800" -->
<!-- isosent="20111118195500" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="96044746-B94B-44C5-92B7-0ADEAF42861D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK12eLUAT=vnwjTTppr6gyNUXEMgc74Gg2axV5CRWenRMeg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 14:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2011, at 11:50 , Hugo Daniel Meyer wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a MPI_Ssend() trying to find where a message is stored (in the sender) if it is not send until the receiver post the recv, but i didn't find that place. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Right, you can't find this as the message is not stored on the sender. The pointer to the send request is sent encapsulated in the matching header, and the receiver will provide it back once the message has been matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, what you're saying is that the sender only sends the header, so when the receiver post the recv will send again the header so the sender starts with the data sent? am i getting it right?  If this is ok, the data stays in the sender, but where it is stored?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we consider rendez-vous messages the data is remains in the sender buffer (aka the buffer provided by the upper level to the MPI_Send function).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, so i will only need to save the headears of the messages (where the status is incomplete), and then maybe just call again the upper level MP_Send. A question here, the headers are not marked as pending (at least i think so), so, my only approach might be to create a list of pending headers and store there the pointer to the send, then try to identify its corresponding upper level MPI_Send and retries it in case of failure, is this a correct approach? 
</span><br>
<p>Look in the mca/vprotocol/base to see how we deal with the send requests in our message logging protocol. We hijack the send request list, and replace them with our own, allowing us to chain all active requests. This make the tracking of chive requests very simple, and minimize the impact on the overall code.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
