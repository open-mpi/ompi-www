<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 12:33:43 2011" -->
<!-- isoreceived="20111118173343" -->
<!-- sent="Fri, 18 Nov 2011 09:33:34 -0800" -->
<!-- isosent="20111118173334" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="49353C5B-9EDE-4257-93D0-587E13AC7E19_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK13tytUi+Y8KH6kVE1e=_AEiLQ7F_oKRRuh5XY8nJXq6cg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-11-18 12:33:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10000.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was doing some trace into de PML_OB1 files. I start to follow a MPI_Ssend() trying to find where a message is stored (in the sender) if it is not send until the receiver post the recv, but i didn't find that place. 
</span><br>
<p>Right, you can't find this as the message is not stored on the sender. The pointer to the send request is sent encapsulated in the matching header, and the receiver will provide it back once the message has been matched (this means the data is now ready to flow).
<br>
<p><span class="quotelev1">&gt; I've noticed that the message to be sent enters in mca_pml_ob1_rndv_completion_request(pml_ob1_sendreq.c) and  the rc = send_request_pml_complete_check(sendreq) returns false when the request hasn't been completed, but the execution never passes through MCA_PML_OB1_PROGRESS_PENDING, at least, none of the possible options is executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, re-orienting my question: where is stored this message until delivery? and if there any way to know that the receiver goes down? With this information i will be able to detect the failure of the receiver and will try to resend the message to another place.
</span><br>
<p>If you want to track the send requests, you will have to implement your own way of tracking them, as we do not expose this in our PML. Eventually, writing your own PML, might be necessary.
<br>
<p>However, as a user I would find very disturbing that the MPI runtime decide to send the message to another peer on my behalf. I would rather prefer that the MPI_Send returns some kind of error, that allows the upper level algorithm to repost the send to another peer. Look at the proposals in the MPI Forum to get more information about what it is discussed regarding the MPI resilience.
<br>
<p>&nbsp;&nbsp;george.
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
<span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm doing some changes in the communication framework. Right now i'm working on a &quot;secure&quot; MPI_Send, this send needs to know when an endpoint goes down, and then retry the communication constructing a new endpoint, or at least, overwriting the data of the old endpoint with the new address of the receiver process. Overwriting the data of the endpoint is not a problem anymore, because i've done that before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, if we consider a Master/Worker application, where the master sends data to the workers, and  workers start the computation, then, the master posts a send to the worker1 that fails and get restarted in another node and in his new location the worker1 posts the recv to the master's send. The problem here is that the master post the send when the process was residing in one node, but the process expects the message in another node. I need the sender to realize that the process is now in another node, and retries the communication with a modificated endpoint. Anyone could please tell me where in the send code i can obtain the status of a message that hasn't been send and resend it to a new location. Also i want to know, where can i obtain information about an endpoint fail?.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10000.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
