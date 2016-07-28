<?
$subject_val = "Re: [OMPI devel] MPI_Comm_accept with multiple threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 08:51:17 2013" -->
<!-- isoreceived="20130506125117" -->
<!-- sent="Mon, 6 May 2013 05:51:10 -0700" -->
<!-- isosent="20130506125110" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_accept with multiple threads." -->
<!-- id="4243BA96-61C8-4908-8630-FCA466B738CD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK124KHoTuWshqVm5EHL5ooNuEhfBEsU1N_Of5tExwv-kwQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 08:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12362.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>In reply to:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12362.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Reply:</strong> <a href="12362.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are working towards thread safety, but nowhere near ready yet. 
<br>
<p>On May 6, 2013, at 3:39 AM, Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, i've sent the message without finishing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello to @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is the correct list to post this question, but maybe i'm dealing with a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have develop an event logging mechanism where application processes connect to event loggers (using MPI_Lookup, MPI_open_port, MPI_Comm_Connect, MPI_Comm_Accept, etc) that are part of another MPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, i have develop my own vprotocol where once a process receive a message try to establish a connection with an event logger which is a thread that belongs to another mpi application. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The event logger application consists in one mpi process per node with multiple threads waiting for connections of MPI processes from the main application. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm suspecting that there is a problem with the critical regions when processes try to connect with the threads of the event logger. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching two short examples that i have written in order to show the problem. First, i launch the event-logger application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 --machinefile machinefile2-th --report-uri URIFILE ./test-thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then i launch the example as this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 16 --machinefile machine16 --ompi-server file:URIFILE ./thread_logger_connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have obtained this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Published: radic_eventlog[1,6], ret=0
</span><br>
<span class="quotelev1">&gt; [clus2:16104] [[39125,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file dpm_orte.c at line 315
</span><br>
<span class="quotelev1">&gt; [clus2:16104] [[39125,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file dpm_orte.c at line 315
</span><br>
<span class="quotelev1">&gt; [clus2:16104] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; [clus2:16104] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [clus2:16104] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev1">&gt; [clus2:16104] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 16104 on
</span><br>
<span class="quotelev1">&gt; node clus2 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i use mutex in order to serialized the access to MPI_Comm_Accept, the behavior is ok, but shoudn't the MPI_comm_accept be thread safe?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.d.: This occurs with openmpi1.5.1 and also with also with an old version of the trunk (1.7).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/5/6 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hello to @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is the correct list to post this question, but maybe i'm dealing with a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have develop an event logging mechanism where application processes connect to event loggers (using MPI_Lookup, MPI_open_port, MPI_Comm_Connect, MPI_Comm_Accept, etc) that are part of another MPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, i have develop my own vprotocol where once a process receive a message try to establish a connection with an event logger which is a thread that belongs to another mpi application. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The event logger application consists in one mpi process per node with multiple threads waiting for connections of MPI processes from the main application. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm suspecting that there is a problem with the critical regions when processes try to connect with the threads of the event logger. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching two short examples that i have written in order to show the problem. First, i launch the event-logger application:
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
<span class="quotelev1">&gt; &lt;event_logger.c&gt;&lt;main-mpi-app.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12362.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>In reply to:</strong> <a href="12360.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12362.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Reply:</strong> <a href="12362.php">Hugo Daniel Meyer: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
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
