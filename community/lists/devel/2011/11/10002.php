<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 14:15:03 2011" -->
<!-- isoreceived="20111118191503" -->
<!-- sent="Fri, 18 Nov 2011 20:14:54 +0100" -->
<!-- isosent="20111118191454" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK13izUU1xezA3Nt4fy81GgLg2A-hxUUo_R=UGw_8D_bTfg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49353C5B-9EDE-4257-93D0-587E13AC7E19_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-11-18 14:14:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was doing some trace into de PML_OB1 files. I start to follow a
</span><br>
<span class="quotelev1">&gt; MPI_Ssend() trying to find where a message is stored (in the sender) if it
</span><br>
<span class="quotelev1">&gt; is not send until the receiver post the recv, but i didn't find that place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, you can't find this as the message is not stored on the sender. The
</span><br>
<span class="quotelev1">&gt; pointer to the send request is sent encapsulated in the matching header,
</span><br>
<span class="quotelev1">&gt; and the receiver will provide it back once the message has been matched
</span><br>
<span class="quotelev1">&gt; (this means the data is now ready to flow).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So, what you're saying is that the sender only sends the header, so when
<br>
the receiver post the recv will send again the header so the sender starts
<br>
with the data sent? am i getting it right?  If this is ok, the data stays
<br>
in the sender, but where it is stored?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noticed that the message to be sent enters in *
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_rndv_completion_request(*pml_ob1_sendreq.c*) *and  the *rc =
</span><br>
<span class="quotelev1">&gt; send_request_pml_complete_check(sendreq) *returns false when the request
</span><br>
<span class="quotelev1">&gt; hasn't been completed, but the execution never passes through *
</span><br>
<span class="quotelev1">&gt; MCA_PML_OB1_PROGRESS_PENDING,* at least, none of the possible options is
</span><br>
<span class="quotelev1">&gt; executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, re-orienting my question: where is stored this message until delivery?
</span><br>
<span class="quotelev1">&gt; and if there any way to know that the receiver goes down? With this
</span><br>
<span class="quotelev1">&gt; information i will be able to detect the failure of the receiver and will
</span><br>
<span class="quotelev1">&gt; try to resend the message to another place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to track the send requests, you will have to implement your
</span><br>
<span class="quotelev1">&gt; own way of tracking them, as we do not expose this in our PML. Eventually,
</span><br>
<span class="quotelev1">&gt; writing your own PML, might be necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, as a user I would find very disturbing that the MPI runtime
</span><br>
<span class="quotelev1">&gt; decide to send the message to another peer on my behalf. I would rather
</span><br>
<span class="quotelev1">&gt; prefer that the MPI_Send returns some kind of error, that allows the upper
</span><br>
<span class="quotelev1">&gt; level algorithm to repost the send to another peer. Look at the proposals
</span><br>
<span class="quotelev1">&gt; in the MPI Forum to get more information about what it is discussed
</span><br>
<span class="quotelev1">&gt; regarding the MPI resilience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mean a fault tolerant algorithm made by the user?
</span><br>
What i'm trying to do is a transparent fault tolerant system, where if a
<br>
failure occurs the system avoid sending informartion to the user, and take
<br>
actions by itself. For example, if the app tries to contact rank 1, but
<br>
that rank has failed, so my system will restore the process with rank 1 in
<br>
another place and make the send to the new location. That's why i need to
<br>
detect this send failure, update my endpoint with the new location, and
<br>
retry the send. My big problem right now is to detect this send failure,
<br>
because i don't know how to obtain the status of a send, or the break of an
<br>
endpoint (i really don't know what gets broken when a process dies,
<br>
considering the send ).
<br>
<p>Right now, i've an implementation that make independant checkpoints of the
<br>
processes and if i kill one process it gets restarted in another node and
<br>
continue with its execution. If a send to the restarted process is posted
<br>
after the restart, there is no problem, because i've already updated the
<br>
endpoint with that process, but, if a send is posted before the restart,
<br>
and the recv is posted in the receiver after the restart, i've a problem.
<br>
Any hellp with this?
<br>
<p>Thanks in advance.
<br>
<p>Hugo
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/11/17 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm doing some changes in the communication framework. Right now i'm
</span><br>
<span class="quotelev2">&gt;&gt; working on a &quot;secure&quot; MPI_Send, this send needs to know when an endpoint
</span><br>
<span class="quotelev2">&gt;&gt; goes down, and then retry the communication constructing a new endpoint, or
</span><br>
<span class="quotelev2">&gt;&gt; at least, overwriting the data of the old endpoint with the new address of
</span><br>
<span class="quotelev2">&gt;&gt; the receiver process. Overwriting the data of the endpoint is not a problem
</span><br>
<span class="quotelev2">&gt;&gt; anymore, because i've done that before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, if we consider a Master/Worker application, where the master
</span><br>
<span class="quotelev2">&gt;&gt; sends data to the workers, and  workers start the computation, then, the
</span><br>
<span class="quotelev2">&gt;&gt; master posts a send to the worker1 that fails and get restarted in another
</span><br>
<span class="quotelev2">&gt;&gt; node and in his new location the worker1 posts the recv to the master's
</span><br>
<span class="quotelev2">&gt;&gt; send. The problem here is that the master post the send when the process
</span><br>
<span class="quotelev2">&gt;&gt; was residing in one node, but the process expects the message in another
</span><br>
<span class="quotelev2">&gt;&gt; node. I need the sender to realize that the process is now in another node,
</span><br>
<span class="quotelev2">&gt;&gt; and retries the communication with a modificated endpoint. Anyone could
</span><br>
<span class="quotelev2">&gt;&gt; please tell me where in the send code i can obtain the status of a message
</span><br>
<span class="quotelev2">&gt;&gt; that hasn't been send and resend it to a new location. Also i want to know,
</span><br>
<span class="quotelev2">&gt;&gt; where can i obtain information about an endpoint fail?.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugo
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10003.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
