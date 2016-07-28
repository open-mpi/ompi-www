<?
$subject_val = "Re: [OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 10:29:51 2011" -->
<!-- isoreceived="20111118152951" -->
<!-- sent="Fri, 18 Nov 2011 16:29:46 +0100" -->
<!-- isosent="20111118152946" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK13tytUi+Y8KH6kVE1e=_AEiLQ7F_oKRRuh5XY8nJXq6cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABdqK11LYUypF4xWDgQcFQ3RHQmsAy3+fJ+RHaqt8vXnyBAuKg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-11-18 10:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9999.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Previous message:</strong> <a href="9997.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9978.php">Hugo Daniel Meyer: "[OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again.
<br>
<p>I was doing some trace into de PML_OB1 files. I start to follow a
<br>
MPI_Ssend() trying to find where a message is stored (in the sender) if it
<br>
is not send until the receiver post the recv, but i didn't find that place.
<br>
<p>I've noticed that the message to be sent enters in *
<br>
mca_pml_ob1_rndv_completion_request(*pml_ob1_sendreq.c*) *and  the *rc =
<br>
send_request_pml_complete_check(sendreq) *returns false when the request
<br>
hasn't been completed, but the execution never passes through *
<br>
MCA_PML_OB1_PROGRESS_PENDING,* at least, none of the possible options is
<br>
executed.
<br>
<p>So, re-orienting my question: where is stored this message until delivery?
<br>
and if there any way to know that the receiver goes down? With this
<br>
information i will be able to detect the failure of the receiver and will
<br>
try to resend the message to another place.
<br>
<p>Thanks again.
<br>
<p>Hugo Meyer
<br>
<p>2011/11/17 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm doing some changes in the communication framework. Right now i'm
</span><br>
<span class="quotelev1">&gt; working on a &quot;secure&quot; MPI_Send, this send needs to know when an endpoint
</span><br>
<span class="quotelev1">&gt; goes down, and then retry the communication constructing a new endpoint, or
</span><br>
<span class="quotelev1">&gt; at least, overwriting the data of the old endpoint with the new address of
</span><br>
<span class="quotelev1">&gt; the receiver process. Overwriting the data of the endpoint is not a problem
</span><br>
<span class="quotelev1">&gt; anymore, because i've done that before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, if we consider a Master/Worker application, where the master
</span><br>
<span class="quotelev1">&gt; sends data to the workers, and  workers start the computation, then, the
</span><br>
<span class="quotelev1">&gt; master posts a send to the worker1 that fails and get restarted in another
</span><br>
<span class="quotelev1">&gt; node and in his new location the worker1 posts the recv to the master's
</span><br>
<span class="quotelev1">&gt; send. The problem here is that the master post the send when the process
</span><br>
<span class="quotelev1">&gt; was residing in one node, but the process expects the message in another
</span><br>
<span class="quotelev1">&gt; node. I need the sender to realize that the process is now in another node,
</span><br>
<span class="quotelev1">&gt; and retries the communication with a modificated endpoint. Anyone could
</span><br>
<span class="quotelev1">&gt; please tell me where in the send code i can obtain the status of a message
</span><br>
<span class="quotelev1">&gt; that hasn't been send and resend it to a new location. Also i want to know,
</span><br>
<span class="quotelev1">&gt; where can i obtain information about an endpoint fail?.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9999.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Previous message:</strong> <a href="9997.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9978.php">Hugo Daniel Meyer: "[OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
