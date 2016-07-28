<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 14:29:37 2011" -->
<!-- isoreceived="20111118192937" -->
<!-- sent="Fri, 18 Nov 2011 11:29:28 -0800" -->
<!-- isosent="20111118192928" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="460C5E8B-74DE-44E8-9610-2F2439EA797D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK13izUU1xezA3Nt4fy81GgLg2A-hxUUo_R=UGw_8D_bTfg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-11-18 14:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2011, at 11:14 , Hugo Daniel Meyer wrote:
<br>
<p><span class="quotelev1">&gt; 2011/11/18 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2011, at 07:29 , Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was doing some trace into de PML_OB1 files. I start to follow a MPI_Ssend() trying to find where a message is stored (in the sender) if it is not send until the receiver post the recv, but i didn't find that place. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, you can't find this as the message is not stored on the sender. The pointer to the send request is sent encapsulated in the matching header, and the receiver will provide it back once the message has been matched (this means the data is now ready to flow).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, what you're saying is that the sender only sends the header, so when the receiver post the recv will send again the header so the sender starts with the data sent? am i getting it right?  If this is ok, the data stays in the sender, but where it is stored?
</span><br>
<p>If we consider rendez-vous messages the data is remains in the sender buffer (aka the buffer provided by the upper level to the MPI_Send function).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've noticed that the message to be sent enters in mca_pml_ob1_rndv_completion_request(pml_ob1_sendreq.c) and  the rc = send_request_pml_complete_check(sendreq) returns false when the request hasn't been completed, but the execution never passes through MCA_PML_OB1_PROGRESS_PENDING, at least, none of the possible options is executed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, re-orienting my question: where is stored this message until delivery? and if there any way to know that the receiver goes down? With this information i will be able to detect the failure of the receiver and will try to resend the message to another place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to track the send requests, you will have to implement your own way of tracking them, as we do not expose this in our PML. Eventually, writing your own PML, might be necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, as a user I would find very disturbing that the MPI runtime decide to send the message to another peer on my behalf. I would rather prefer that the MPI_Send returns some kind of error, that allows the upper level algorithm to repost the send to another peer. Look at the proposals in the MPI Forum to get more information about what it is discussed regarding the MPI resilience.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean a fault tolerant algorithm made by the user? 
</span><br>
<span class="quotelev1">&gt; What i'm trying to do is a transparent fault tolerant system, where if a failure occurs the system avoid sending informartion to the user, and take actions by itself. For example, if the app tries to contact rank 1, but that rank has failed, so my system will restore the process with rank 1 in another place and make the send to the new location. That's why i need to detect this send failure, update my endpoint with the new location, and retry the send. My big problem right now is to detect this send failure, because i don't know how to obtain the status of a send, or the break of an endpoint (i really don't know what gets broken when a process dies, considering the send ).
</span><br>
<p>What is the difference between this and a message logging approach?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; Right now, i've an implementation that make independant checkpoints of the processes and if i kill one process it gets restarted in another node and continue with its execution. If a send to the restarted process is posted after the restart, there is no problem, because i've already updated the endpoint with that process, but, if a send is posted before the restart, and the recv is posted in the receiver after the restart, i've a problem. Any hellp with this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo
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
<span class="quotelev2">&gt;&gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm doing some changes in the communication framework. Right now i'm working on a &quot;secure&quot; MPI_Send, this send needs to know when an endpoint goes down, and then retry the communication constructing a new endpoint, or at least, overwriting the data of the old endpoint with the new address of the receiver process. Overwriting the data of the endpoint is not a problem anymore, because i've done that before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, if we consider a Master/Worker application, where the master sends data to the workers, and  workers start the computation, then, the master posts a send to the worker1 that fails and get restarted in another node and in his new location the worker1 posts the recv to the master's send. The problem here is that the master post the send when the process was residing in one node, but the process expects the message in another node. I need the sender to realize that the process is now in another node, and retries the communication with a modificated endpoint. Anyone could please tell me where in the send code i can obtain the status of a message that hasn't been send and resend it to a new location. Also i want to know, where can i obtain information about an endpoint fail?.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10002.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10004.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
