<?
$subject_val = "[OMPI devel] MPI_Comm_accept with multiple threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 06:27:16 2013" -->
<!-- isoreceived="20130506102716" -->
<!-- sent="Mon, 6 May 2013 12:27:11 +0200" -->
<!-- isosent="20130506102711" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_accept with multiple threads." -->
<!-- id="CABdqK127iQFK+efr34ysWBe4gXmRgBu7zcCr+HnCN5CqJuKdWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_accept with multiple threads.<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 06:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12358.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Reply:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello to @ll.
<br>
<p>I'm not sure if this is the correct list to post this question, but maybe
<br>
i'm dealing with a bug.
<br>
<p>I have develop an event logging mechanism where application processes
<br>
connect to event loggers (using MPI_Lookup, MPI_open_port,
<br>
MPI_Comm_Connect, MPI_Comm_Accept, etc) that are part of another MPI
<br>
application.
<br>
<p>Well, i have develop my own vprotocol where once a process receive a
<br>
message try to establish a connection with an event logger which is a
<br>
thread that belongs to another mpi application.
<br>
<p>The event logger application consists in one mpi process per node with
<br>
multiple threads waiting for connections of MPI processes from the main
<br>
application.
<br>
<p>I'm suspecting that there is a problem with the critical regions when
<br>
processes try to connect with the threads of the event logger.
<br>
<p>I'm attaching two short examples that i have written in order to show the
<br>
problem. First, i launch the event-logger application:
<br>
<p><p><p>If i use mutex in order to serialized the access to MPI_Comm_Accept,
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12358.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Reply:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
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
