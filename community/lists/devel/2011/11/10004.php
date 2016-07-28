<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 14:50:12 2011" -->
<!-- isoreceived="20111118195012" -->
<!-- sent="Fri, 18 Nov 2011 20:50:07 +0100" -->
<!-- isosent="20111118195007" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK12eLUAT=vnwjTTppr6gyNUXEMgc74Gg2axV5CRWenRMeg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="460C5E8B-74DE-44E8-9610-2F2439EA797D_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-11-18 14:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ssend() trying to find where a message is stored (in the sender) if it
</span><br>
<span class="quotelev2">&gt;&gt; is not send until the receiver post the recv, but i didn't find that place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, you can't find this as the message is not stored on the sender.
</span><br>
<span class="quotelev2">&gt;&gt; The pointer to the send request is sent encapsulated in the matching
</span><br>
<span class="quotelev2">&gt;&gt; header, and the receiver will provide it back once the message has been
</span><br>
<span class="quotelev2">&gt;&gt; matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what you're saying is that the sender only sends the header, so when
</span><br>
<span class="quotelev1">&gt; the receiver post the recv will send again the header so the sender starts
</span><br>
<span class="quotelev1">&gt; with the data sent? am i getting it right?  If this is ok, the data stays
</span><br>
<span class="quotelev1">&gt; in the sender, but where it is stored?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we consider rendez-vous messages the data is remains in the sender
</span><br>
<span class="quotelev1">&gt; buffer (aka the buffer provided by the upper level to the MPI_Send
</span><br>
<span class="quotelev1">&gt; function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, so i will only need to save the headears of the messages (where the
<br>
status is incomplete), and then maybe just call again the upper level
<br>
MP_Send. A question here, the headers are not marked as pending (at least i
<br>
think so), so, my only approach might be to create a list of pending
<br>
headers and store there the pointer to the send, then try to identify its
<br>
corresponding upper level MPI_Send and retries it in case of failure, is
<br>
this a correct approach?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've noticed that the message to be sent enters in *
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_rndv_completion_request(*pml_ob1_sendreq.c*) *and  the *rc =
</span><br>
<span class="quotelev2">&gt;&gt; send_request_pml_complete_check(sendreq) *returns false when the request
</span><br>
<span class="quotelev2">&gt;&gt; hasn't been completed, but the execution never passes through *
</span><br>
<span class="quotelev2">&gt;&gt; MCA_PML_OB1_PROGRESS_PENDING,* at least, none of the possible options is
</span><br>
<span class="quotelev2">&gt;&gt; executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, re-orienting my question: where is stored this message until
</span><br>
<span class="quotelev2">&gt;&gt; delivery? and if there any way to know that the receiver goes down? With
</span><br>
<span class="quotelev2">&gt;&gt; this information i will be able to detect the failure of the receiver and
</span><br>
<span class="quotelev2">&gt;&gt; will try to resend the message to another place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to track the send requests, you will have to implement your
</span><br>
<span class="quotelev2">&gt;&gt; own way of tracking them, as we do not expose this in our PML. Eventually,
</span><br>
<span class="quotelev2">&gt;&gt; writing your own PML, might be necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, as a user I would find very disturbing that the MPI runtime
</span><br>
<span class="quotelev2">&gt;&gt; decide to send the message to another peer on my behalf. I would rather
</span><br>
<span class="quotelev2">&gt;&gt; prefer that the MPI_Send returns some kind of error, that allows the upper
</span><br>
<span class="quotelev2">&gt;&gt; level algorithm to repost the send to another peer. Look at the proposals
</span><br>
<span class="quotelev2">&gt;&gt; in the MPI Forum to get more information about what it is discussed
</span><br>
<span class="quotelev2">&gt;&gt; regarding the MPI resilience.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you mean a fault tolerant algorithm made by the user?
</span><br>
<span class="quotelev1">&gt; What i'm trying to do is a transparent fault tolerant system, where if a
</span><br>
<span class="quotelev1">&gt; failure occurs the system avoid sending informartion to the user, and take
</span><br>
<span class="quotelev1">&gt; actions by itself. For example, if the app tries to contact rank 1, but
</span><br>
<span class="quotelev1">&gt; that rank has failed, so my system will restore the process with rank 1 in
</span><br>
<span class="quotelev1">&gt; another place and make the send to the new location. That's why i need to
</span><br>
<span class="quotelev1">&gt; detect this send failure, update my endpoint with the new location, and
</span><br>
<span class="quotelev1">&gt; retry the send. My big problem right now is to detect this send failure,
</span><br>
<span class="quotelev1">&gt; because i don't know how to obtain the status of a send, or the break of an
</span><br>
<span class="quotelev1">&gt; endpoint (i really don't know what gets broken when a process dies,
</span><br>
<span class="quotelev1">&gt; considering the send ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the difference between this and a message logging approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Actually, i use an uncoordinated checkpoint approach + receiver based
<br>
message logging. As that message has not been send, and of course, not yet
<br>
received, i cannot store it on my log, so what i've to do is retry the send
<br>
when i detect the failure because the receive has failed.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, i've an implementation that make independant checkpoints of the
</span><br>
<span class="quotelev1">&gt; processes and if i kill one process it gets restarted in another node and
</span><br>
<span class="quotelev1">&gt; continue with its execution. If a send to the restarted process is posted
</span><br>
<span class="quotelev1">&gt; after the restart, there is no problem, because i've already updated the
</span><br>
<span class="quotelev1">&gt; endpoint with that process, but, if a send is posted before the restart,
</span><br>
<span class="quotelev1">&gt; and the recv is posted in the receiver after the restart, i've a problem.
</span><br>
<span class="quotelev1">&gt; Any hellp with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/11/17 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello @ll.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm doing some changes in the communication framework. Right now i'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working on a &quot;secure&quot; MPI_Send, this send needs to know when an endpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; goes down, and then retry the communication constructing a new endpoint, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least, overwriting the data of the old endpoint with the new address of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the receiver process. Overwriting the data of the endpoint is not a problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anymore, because i've done that before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, if we consider a Master/Worker application, where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master sends data to the workers, and  workers start the computation, then,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the master posts a send to the worker1 that fails and get restarted in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another node and in his new location the worker1 posts the recv to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master's send. The problem here is that the master post the send when the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process was residing in one node, but the process expects the message in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another node. I need the sender to realize that the process is now in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another node, and retries the communication with a modificated endpoint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone could please tell me where in the send code i can obtain the status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of a message that hasn't been send and resend it to a new location. Also i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to know, where can i obtain information about an endpoint fail?.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hugo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10005.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
