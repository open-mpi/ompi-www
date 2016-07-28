<?
$subject_val = "Re: [OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 10:04:19 2012" -->
<!-- isoreceived="20120201150419" -->
<!-- sent="Wed, 1 Feb 2012 16:04:14 +0100" -->
<!-- isosent="20120201150414" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pessimist Event Logger" -->
<!-- id="CABdqK10=SVk0=f6hvSHdOzb6vQpcRUP-+ztW5bt-A8Vk52=nPA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABdqK11VrpEnuGJ37RCachxjLVsyhbr3baQbcPvaEpuMOif0pQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Pessimist Event Logger<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 10:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10302.php">Paul H. Hargrove: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding some more context.
<br>
<p>When trying to use the event logger (by using MPI_ANY_SOURCE) i get this
<br>
error:
<br>
<p>[clus9:28158] defining message event: ../../orte/runtime/orte_data_server.c
<br>
414
<br>
[clus9:28158] [[56904,0],0] data server: lookup on service
<br>
ompi_ft_event_logger[0]
<br>
[clus9:28158] [[56904,0],0] data server: service ompi_ft_event_logger[0]
<br>
not found
<br>
[clus5:7310] *** An error occurred in
<br>
../../../../../ompi/mca/vprotocol/pessimist/vprotocol_pessimist_eventlog.h:
<br>
failed to connect to an Event Logger
<br>
[clus5:7310] *** on communicator MPI_COMM_NULL
<br>
[clus5:7310] *** MPI_ERR_INTERN: internal error
<br>
[clus5:7310] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
<p><p>The event_logger is not found, and of course the connection is not made.
<br>
The service ompi_ft_event_logger is not defined apparently.
<br>
<p>Thanks for the help.
<br>
<p>Hugo
<br>
<p>2012/1/31 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've found where the connection with the event logger takes places. I've
</span><br>
<span class="quotelev1">&gt; some doubts about the next section of code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *rc = ompi_dpm.connect_accept(MPI_COMM_SELF, 0, port, true, el_comm);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    if(OMPI_SUCCESS != rc) {*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *        ORTE_ERROR_LOG(rc);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    }*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    /* Send Rank, receive max buffer size and max_clock back */*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    rc = mca_pml_v.host_pml.pml_send(&amp;rank, 1, MPI_INTEGER, 0,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; VPROTOCOL_PESSIMIST_EVENTLOG_NEW_CLIENT_CMD,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *                                     MCA_PML_BASE_SEND_STANDARD,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *                                     mca_vprotocol_receiver.el_comm);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    if(OPAL_UNLIKELY(MPI_SUCCESS != rc))*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *        OMPI_ERRHANDLER_INVOKE(mca_vprotocol_receiver.el_comm, rc,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *                               __FILE__ &quot;: failed sending event logger
</span><br>
<span class="quotelev1">&gt; handshake&quot;);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    rc = mca_pml_v.host_pml.pml_recv(&amp;connect_info, 2,
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_LONG_LONG,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *                                     0,
</span><br>
<span class="quotelev1">&gt; VPROTOCOL_PESSIMIST_EVENTLOG_NEW_CLIENT_CMD,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *                                     mca_vprotocol_receiver.el_comm,
</span><br>
<span class="quotelev1">&gt; MPI_STATUS_IGNORE);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *    if(OPAL_UNLIKELY(MPI_SUCCESS != rc))
</span><br>
<span class="quotelev1">&gt;  \*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *        OMPI_ERRHANDLER_INVOKE(mca_vprotocol_receiver.el_comm, rc,
</span><br>
<span class="quotelev1">&gt; \*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *                               __FILE__ &quot;: failed receiving event logger
</span><br>
<span class="quotelev1">&gt; handshake&quot;);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand that you make a connection using the dpm framework between
</span><br>
<span class="quotelev1">&gt; the process 0 (the logger) and yourself (MPI_COMM_SELF). But then, you send
</span><br>
<span class="quotelev1">&gt; and receive messages with pml. My question is: &#191;Where is posted the recv of
</span><br>
<span class="quotelev1">&gt; the event_logger? I didn't find where in the code the event_logger receives
</span><br>
<span class="quotelev1">&gt; the rank, and answer the handshake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/1/30 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Aurelien.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems you want to implement some sort of remote pessimistic logging -a
</span><br>
<span class="quotelev1">&gt; la MPICH-V1- ?
</span><br>
<span class="quotelev1">&gt; MPICH-V: Toward a Scalable Fault Tolerant MPI for Volatile Nodes -- George
</span><br>
<span class="quotelev1">&gt; Bosilca, Aur&#233;lien Bouteiller, Franck Cappello, Samir Djilali, Gilles F&#233;dak,
</span><br>
<span class="quotelev1">&gt; C&#233;cile Germain, Thomas H&#233;rault, Pierre Lemarinier, Oleg Lodygensky,
</span><br>
<span class="quotelev1">&gt; Fr&#233;d&#233;ric Magniette, Vincent N&#233;ri, Anton Selikhov -- In proceedings of The
</span><br>
<span class="quotelev1">&gt; IEEE/ACM SC2002 Conference, Baltimore USA, November 2002
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   We could say that is similar because i use a distributed logging
</span><br>
<span class="quotelev1">&gt; mechanism, but is a little diferent because my Memory Channels and
</span><br>
<span class="quotelev1">&gt; Checkpoint Servers are the processing nodes, i don't have specials nodes to
</span><br>
<span class="quotelev1">&gt; take care of the message log and checkpoints.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the PML-V, unlike older designs, the payload of messages and the
</span><br>
<span class="quotelev1">&gt; non-deterministic events follow a different path. The payload of messages
</span><br>
<span class="quotelev1">&gt; is logged on the sender's volatile memory, while the non-deterministic
</span><br>
<span class="quotelev1">&gt; events are sent to a stable event logger, before allowing the process to
</span><br>
<span class="quotelev1">&gt; impact the state of others (the code you have found in the previous email).
</span><br>
<span class="quotelev1">&gt; The best depiction of this distinction can be read in this paper
</span><br>
<span class="quotelev1">&gt; @inproceedings{DBLP:conf/europar/BouteillerHBD11,
</span><br>
<span class="quotelev1">&gt;  author    = {Aurelien Bouteiller and
</span><br>
<span class="quotelev1">&gt;               Thomas H{\'e}rault and
</span><br>
<span class="quotelev1">&gt;               George Bosilca and
</span><br>
<span class="quotelev1">&gt;               Jack J. Dongarra},
</span><br>
<span class="quotelev1">&gt;  title     = {Correlated Set Coordination in Fault Tolerant Message Logging
</span><br>
<span class="quotelev1">&gt;               Protocols},
</span><br>
<span class="quotelev1">&gt;  booktitle = {Euro-Par 2011 Parallel Processing - 17th International
</span><br>
<span class="quotelev1">&gt; Conference, Proceedings, Part II},
</span><br>
<span class="quotelev1">&gt;  month         = {September},
</span><br>
<span class="quotelev1">&gt;  year      = {2011},
</span><br>
<span class="quotelev1">&gt;  pages     = {51-64},
</span><br>
<span class="quotelev1">&gt;  publisher = {Springer},
</span><br>
<span class="quotelev1">&gt;  series    = {Lecture Notes in Computer Science},
</span><br>
<span class="quotelev1">&gt;  volume    = {6853},
</span><br>
<span class="quotelev1">&gt;  year      = {2011},
</span><br>
<span class="quotelev1">&gt;  isbn      = {978-3-642-23396-8},
</span><br>
<span class="quotelev1">&gt;  doi       = {<a href="http://dx.doi.org/10.1007/978-3-642-23397-5_6">http://dx.doi.org/10.1007/978-3-642-23397-5_6</a>},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I will take a look to this paper to clarify this distinction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you intend to store both payload and message log on a remote node, I
</span><br>
<span class="quotelev1">&gt; suggest you look at the &quot;sender-based&quot; hooks, as this is where the message
</span><br>
<span class="quotelev1">&gt; payload is managed, and adapt from here. The event loggers can already
</span><br>
<span class="quotelev1">&gt; manage a subset only of the processes (if you launch as many EL as
</span><br>
<span class="quotelev1">&gt; processes, you get a 1-1 mapping), but they never handle message payload;
</span><br>
<span class="quotelev1">&gt; you'll have to add all this yourself is it so pleases you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Yes, i need to store every message, not only the non-deterministics
</span><br>
<span class="quotelev1">&gt; one. In my case every node is an event logger. Let's say that i have 16
</span><br>
<span class="quotelev1">&gt; processes in four nodes (four by node), so the messages received by all
</span><br>
<span class="quotelev1">&gt; processes residing in node0 need to be stored in node1, and the received
</span><br>
<span class="quotelev1">&gt; messages received by all processes residing in node1, need to be stored in
</span><br>
<span class="quotelev1">&gt; node2, and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i understand correctly, i have to modify the behavior in
</span><br>
<span class="quotelev1">&gt; ompi/mca/vprotocol/pessimist, to manage the message payload. And another
</span><br>
<span class="quotelev1">&gt; question, is there a way to launch ELs in every node? or i will have to
</span><br>
<span class="quotelev1">&gt; modify this too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your help Aur&#233;lien.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 27 janv. 2012 &#224; 11:19, Hugo Daniel Meyer a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Aur&#233;lien.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the clarification. Considering what you've mentioned i will
</span><br>
<span class="quotelev1">&gt; have to make some adaptations, because to me, every single message has to
</span><br>
<span class="quotelev1">&gt; be logged. So, a sender not only will be sending messages to the receiver,
</span><br>
<span class="quotelev1">&gt; but also to an event logger. Is there any considerations that i've to take
</span><br>
<span class="quotelev1">&gt; into account when modifying the code?. My initial idea is to use the
</span><br>
<span class="quotelev1">&gt; el_comm with a group of event loggers (because every node uses a different
</span><br>
<span class="quotelev1">&gt; event logger in my approach), and then send the messages to them as you do
</span><br>
<span class="quotelev1">&gt; when using MPI_ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your program does not have non-deterministic events. Therefore, there
</span><br>
<span class="quotelev1">&gt; are no events to log. If you add MPI_ANY_SOURCE, you should see this code
</span><br>
<span class="quotelev1">&gt; being called. Please contact me again if you need more help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 27 janv. 2012 &#224; 10:21, Hugo Daniel Meyer a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello @ll.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; George, i'm using some pieces of the pessimist vprotocol. I've
</span><br>
<span class="quotelev1">&gt; observed that when you do a send, you call vprotocol_receiver_event_flush
</span><br>
<span class="quotelev1">&gt; and here the macro __VPROTOCOL_RECEIVER_SEND_BUFFER is called. I've noticed
</span><br>
<span class="quotelev1">&gt; that here you try send a copy of the message to process 0 using the
</span><br>
<span class="quotelev1">&gt; el_comm. This section of code is never executed, at least in my examples.
</span><br>
<span class="quotelev1">&gt; So, the message is never sent to the Event Logger, am i correct with this?
</span><br>
<span class="quotelev1">&gt;  I think that this is happening because the
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_pessimist.event_buffer_length is always 0.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there something that i've got to turn on, or i will have to modify
</span><br>
<span class="quotelev1">&gt; this behavior manually to connect and send messages to the EL?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt; &gt; * Researcher at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt; &gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt; &gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt; &gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Researcher at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10304.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10302.php">Paul H. Hargrove: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
