<?
$subject_val = "Re: [OMPI devel] MPI_Comm_accept with multiple threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 06:39:31 2013" -->
<!-- isoreceived="20130506103931" -->
<!-- sent="Mon, 6 May 2013 12:39:24 +0200" -->
<!-- isosent="20130506103924" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_accept with multiple threads." -->
<!-- id="CABdqK124KHoTuWshqVm5EHL5ooNuEhfBEsU1N_Of5tExwv-kwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABdqK127iQFK+efr34ysWBe4gXmRgBu7zcCr+HnCN5CqJuKdWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_accept with multiple threads.<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 06:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12359.php">Hugo Daniel Meyer: "[OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>In reply to:</strong> <a href="12359.php">Hugo Daniel Meyer: "[OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Reply:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, i've sent the message without finishing it.
<br>
<p>Hello to @ll.
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
<p>mpirun -n 2 --machinefile machinefile2-th --report-uri URIFILE ./test-thread
<br>
<p>Then i launch the example as this:
<br>
<p>mpirun -n 16 --machinefile machine16 --ompi-server file:URIFILE
<br>
./thread_logger_connect
<br>
<p>I have obtained this output:
<br>
<p>*Published: radic_eventlog[1,6], ret=0*
<br>
*[clus2:16104] [[39125,1],1] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file dpm_orte.c at line 315*
<br>
*[clus2:16104] [[39125,1],1] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file dpm_orte.c at line 315*
<br>
*[clus2:16104] *** An error occurred in MPI_Comm_accept*
<br>
*[clus2:16104] *** on communicator MPI_COMM_SELF*
<br>
*[clus2:16104] *** MPI_ERR_UNKNOWN: unknown error*
<br>
*[clus2:16104] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)*
<br>
*--------------------------------------------------------------------------*
<br>
*mpirun has exited due to process rank 1 with PID 16104 on*
<br>
*node clus2 exiting improperly. There are two reasons this could occur:*
<br>
*
<br>
*
<br>
*1. this process did not call &quot;init&quot; before exiting, but others in*
<br>
*the job did. This can cause a job to hang indefinitely while it waits*
<br>
*for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,*
<br>
*then ALL processes must call &quot;init&quot; prior to termination.*
<br>
*
<br>
*
<br>
*2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.*
<br>
*By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to*
<br>
*exiting or it will be considered an &quot;abnormal termination&quot;*
<br>
*
<br>
*
<br>
*This may have caused other processes in the application to be*
<br>
*terminated by signals sent by mpirun (as reported here).*
<br>
<p><p>If i use mutex in order to serialized the access to MPI_Comm_Accept, the
<br>
behavior is ok, but shoudn't the MPI_comm_accept be thread safe?
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p>P.d.: This occurs with openmpi1.5.1 and also with also with an old version
<br>
of the trunk (1.7).
<br>
<p><p>2013/5/6 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello to @ll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is the correct list to post this question, but maybe
</span><br>
<span class="quotelev1">&gt; i'm dealing with a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have develop an event logging mechanism where application processes
</span><br>
<span class="quotelev1">&gt; connect to event loggers (using MPI_Lookup, MPI_open_port,
</span><br>
<span class="quotelev1">&gt; MPI_Comm_Connect, MPI_Comm_Accept, etc) that are part of another MPI
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, i have develop my own vprotocol where once a process receive a
</span><br>
<span class="quotelev1">&gt; message try to establish a connection with an event logger which is a
</span><br>
<span class="quotelev1">&gt; thread that belongs to another mpi application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The event logger application consists in one mpi process per node with
</span><br>
<span class="quotelev1">&gt; multiple threads waiting for connections of MPI processes from the main
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm suspecting that there is a problem with the critical regions when
</span><br>
<span class="quotelev1">&gt; processes try to connect with the threads of the event logger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attaching two short examples that i have written in order to show the
</span><br>
<span class="quotelev1">&gt; problem. First, i launch the event-logger application:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i use mutex in order to serialized the access to MPI_Comm_Accept,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12360/event_logger.c">event_logger.c</a>
</ul>
<!-- attachment="event_logger.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12360/main-mpi-app.c">main-mpi-app.c</a>
</ul>
<!-- attachment="main-mpi-app.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12359.php">Hugo Daniel Meyer: "[OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>In reply to:</strong> <a href="12359.php">Hugo Daniel Meyer: "[OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Reply:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
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
