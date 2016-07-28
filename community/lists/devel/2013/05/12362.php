<?
$subject_val = "Re: [OMPI devel] MPI_Comm_accept with multiple threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 09:03:23 2013" -->
<!-- isoreceived="20130506130323" -->
<!-- sent="Mon, 6 May 2013 15:03:19 +0200" -->
<!-- isosent="20130506130319" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_accept with multiple threads." -->
<!-- id="CABdqK12C1D62K-9JBHVgL1KtZxOjVsUM14PsA=BsQQDdqR9BLQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4243BA96-61C8-4908-8630-FCA466B738CD_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-05-06 09:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12363.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] June OMPI developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>In reply to:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply Ralph.
<br>
<p>I will look for a way to deal with this situation for the moment.
<br>
<p>Regards.
<br>
<p>Hugo
<br>
<p><p>2013/5/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; We are working towards thread safety, but nowhere near ready yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 6, 2013, at 3:39 AM, Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, i've sent the message without finishing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello to @ll.
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
<span class="quotelev1">&gt; mpirun -n 2 --machinefile machinefile2-th --report-uri URIFILE
</span><br>
<span class="quotelev1">&gt; ./test-thread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then i launch the example as this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 16 --machinefile machine16 --ompi-server file:URIFILE
</span><br>
<span class="quotelev1">&gt; ./thread_logger_connect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have obtained this output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Published: radic_eventlog[1,6], ret=0*
</span><br>
<span class="quotelev1">&gt; *[clus2:16104] [[39125,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev1">&gt; end of buffer in file dpm_orte.c at line 315*
</span><br>
<span class="quotelev1">&gt; *[clus2:16104] [[39125,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev1">&gt; end of buffer in file dpm_orte.c at line 315*
</span><br>
<span class="quotelev1">&gt; *[clus2:16104] *** An error occurred in MPI_Comm_accept*
</span><br>
<span class="quotelev1">&gt; *[clus2:16104] *** on communicator MPI_COMM_SELF*
</span><br>
<span class="quotelev1">&gt; *[clus2:16104] *** MPI_ERR_UNKNOWN: unknown error*
</span><br>
<span class="quotelev1">&gt; *[clus2:16104] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *mpirun has exited due to process rank 1 with PID 16104 on*
</span><br>
<span class="quotelev1">&gt; *node clus2 exiting improperly. There are two reasons this could occur:*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *1. this process did not call &quot;init&quot; before exiting, but others in*
</span><br>
<span class="quotelev1">&gt; *the job did. This can cause a job to hang indefinitely while it waits*
</span><br>
<span class="quotelev1">&gt; *for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,*
</span><br>
<span class="quotelev1">&gt; *then ALL processes must call &quot;init&quot; prior to termination.*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.*
</span><br>
<span class="quotelev1">&gt; *By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to*
</span><br>
<span class="quotelev1">&gt; *exiting or it will be considered an &quot;abnormal termination&quot;*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *This may have caused other processes in the application to be*
</span><br>
<span class="quotelev1">&gt; *terminated by signals sent by mpirun (as reported here).*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i use mutex in order to serialized the access to MPI_Comm_Accept, the
</span><br>
<span class="quotelev1">&gt; behavior is ok, but shoudn't the MPI_comm_accept be thread safe?
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
<span class="quotelev1">&gt; P.d.: This occurs with openmpi1.5.1 and also with also with an old version
</span><br>
<span class="quotelev1">&gt; of the trunk (1.7).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/5/6 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello to @ll.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if this is the correct list to post this question, but maybe
</span><br>
<span class="quotelev2">&gt;&gt; i'm dealing with a bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have develop an event logging mechanism where application processes
</span><br>
<span class="quotelev2">&gt;&gt; connect to event loggers (using MPI_Lookup, MPI_open_port,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_Connect, MPI_Comm_Accept, etc) that are part of another MPI
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, i have develop my own vprotocol where once a process receive a
</span><br>
<span class="quotelev2">&gt;&gt; message try to establish a connection with an event logger which is a
</span><br>
<span class="quotelev2">&gt;&gt; thread that belongs to another mpi application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The event logger application consists in one mpi process per node with
</span><br>
<span class="quotelev2">&gt;&gt; multiple threads waiting for connections of MPI processes from the main
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm suspecting that there is a problem with the critical regions when
</span><br>
<span class="quotelev2">&gt;&gt; processes try to connect with the threads of the event logger.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm attaching two short examples that i have written in order to show the
</span><br>
<span class="quotelev2">&gt;&gt; problem. First, i launch the event-logger application:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If i use mutex in order to serialized the access to MPI_Comm_Accept,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;event_logger.c&gt;&lt;main-mpi-app.c&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12363.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] June OMPI developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>In reply to:</strong> <a href="12361.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_accept with multiple threads."</a>
<!-- nextthread="start" -->
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
