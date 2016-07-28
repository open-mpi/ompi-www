<?
$subject_val = "[OMPI devel] Retrying a MPI_SEND";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 17 06:33:21 2011" -->
<!-- isoreceived="20111117113321" -->
<!-- sent="Thu, 17 Nov 2011 08:33:17 -0300" -->
<!-- isosent="20111117113317" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Retrying a MPI_SEND" -->
<!-- id="CABdqK11LYUypF4xWDgQcFQ3RHQmsAy3+fJ+RHaqt8vXnyBAuKg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Retrying a MPI_SEND<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-17 06:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9979.php">Jeff Squyres: "[OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I'm doing some changes in the communication framework. Right now i'm
<br>
working on a &quot;secure&quot; MPI_Send, this send needs to know when an endpoint
<br>
goes down, and then retry the communication constructing a new endpoint, or
<br>
at least, overwriting the data of the old endpoint with the new address of
<br>
the receiver process. Overwriting the data of the endpoint is not a problem
<br>
anymore, because i've done that before.
<br>
<p>For example, if we consider a Master/Worker application, where the master
<br>
sends data to the workers, and  workers start the computation, then, the
<br>
master posts a send to the worker1 that fails and get restarted in another
<br>
node and in his new location the worker1 posts the recv to the master's
<br>
send. The problem here is that the master post the send when the process
<br>
was residing in one node, but the process expects the message in another
<br>
node. I need the sender to realize that the process is now in another node,
<br>
and retries the communication with a modificated endpoint. Anyone could
<br>
please tell me where in the send code i can obtain the status of a message
<br>
that hasn't been send and resend it to a new location. Also i want to know,
<br>
where can i obtain information about an endpoint fail?.
<br>
<p>Thanks in advance.
<br>
<p>Hugo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9979.php">Jeff Squyres: "[OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Reply:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
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
