<?
$subject_val = "Re: [OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 11:54:02 2012" -->
<!-- isoreceived="20120131165402" -->
<!-- sent="Tue, 31 Jan 2012 17:53:57 +0100" -->
<!-- isosent="20120131165357" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pessimist Event Logger" -->
<!-- id="CABdqK11VrpEnuGJ37RCachxjLVsyhbr3baQbcPvaEpuMOif0pQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABdqK11q+3O_N-MwWxz--WAzThcXysM9m3U+4bn=tLdrKTdE-Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-01-31 11:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10303.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10303.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again.
<br>
<p>I've found where the connection with the event logger takes places. I've
<br>
some doubts about the next section of code:
<br>
<p>*rc = ompi_dpm.connect_accept(MPI_COMM_SELF, 0, port, true, el_comm);*
<br>
<p>*    if(OMPI_SUCCESS != rc) {*
<br>
<p>*        ORTE_ERROR_LOG(rc);*
<br>
<p>*    }*
<br>
<p>*    /* Send Rank, receive max buffer size and max_clock back */*
<br>
<p>*    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);*
<br>
<p>*    rc = mca_pml_v.host_pml.pml_send(&amp;rank, 1, MPI_INTEGER, 0,*
<br>
<p>*
<br>
VPROTOCOL_PESSIMIST_EVENTLOG_NEW_CLIENT_CMD,*
<br>
<p>*                                     MCA_PML_BASE_SEND_STANDARD,*
<br>
<p>*                                     mca_vprotocol_receiver.el_comm);*
<br>
<p>*    if(OPAL_UNLIKELY(MPI_SUCCESS != rc))*
<br>
<p>*        OMPI_ERRHANDLER_INVOKE(mca_vprotocol_receiver.el_comm, rc,*
<br>
<p>*                               __FILE__ &quot;: failed sending event logger
<br>
handshake&quot;);*
<br>
<p>*    rc = mca_pml_v.host_pml.pml_recv(&amp;connect_info, 2,
<br>
MPI_UNSIGNED_LONG_LONG,*
<br>
<p>*                                     0,
<br>
VPROTOCOL_PESSIMIST_EVENTLOG_NEW_CLIENT_CMD,*
<br>
<p>*                                     mca_vprotocol_receiver.el_comm,
<br>
MPI_STATUS_IGNORE);*
<br>
<p>*    if(OPAL_UNLIKELY(MPI_SUCCESS != rc))                                  \
<br>
*
<br>
<p>*        OMPI_ERRHANDLER_INVOKE(mca_vprotocol_receiver.el_comm, rc,       \*
<br>
<p>*                               __FILE__ &quot;: failed receiving event logger
<br>
handshake&quot;);*
<br>
<p><p>I understand that you make a connection using the dpm framework between the
<br>
process 0 (the logger) and yourself (MPI_COMM_SELF). But then, you send and
<br>
receive messages with pml. My question is: &#191;Where is posted the recv of the
<br>
event_logger? I didn't find where in the code the event_logger receives the
<br>
rank, and answer the handshake.
<br>
<p>Thanks for your help.
<br>
<p>Hugo Meyer
<br>
<p>2012/1/30 Hugo Daniel Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p>Hello Aurelien.
<br>
<p>2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
<p>Hugo,
<br>
<p>It seems you want to implement some sort of remote pessimistic logging -a
<br>
la MPICH-V1- ?
<br>
MPICH-V: Toward a Scalable Fault Tolerant MPI for Volatile Nodes -- George
<br>
Bosilca, Aur&#233;lien Bouteiller, Franck Cappello, Samir Djilali, Gilles F&#233;dak,
<br>
C&#233;cile Germain, Thomas H&#233;rault, Pierre Lemarinier, Oleg Lodygensky,
<br>
Fr&#233;d&#233;ric Magniette, Vincent N&#233;ri, Anton Selikhov -- In proceedings of The
<br>
IEEE/ACM SC2002 Conference, Baltimore USA, November 2002
<br>
<p>&nbsp;&nbsp;We could say that is similar because i use a distributed logging
<br>
mechanism, but is a little diferent because my Memory Channels and
<br>
Checkpoint Servers are the processing nodes, i don't have specials nodes to
<br>
take care of the message log and checkpoints.
<br>
<p><p>In the PML-V, unlike older designs, the payload of messages and the
<br>
non-deterministic events follow a different path. The payload of messages
<br>
is logged on the sender's volatile memory, while the non-deterministic
<br>
events are sent to a stable event logger, before allowing the process to
<br>
impact the state of others (the code you have found in the previous email).
<br>
The best depiction of this distinction can be read in this paper
<br>
@inproceedings{DBLP:conf/europar/BouteillerHBD11,
<br>
&nbsp;author    = {Aurelien Bouteiller and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thomas H{\'e}rault and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George Bosilca and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack J. Dongarra},
<br>
&nbsp;title     = {Correlated Set Coordination in Fault Tolerant Message Logging
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protocols},
<br>
&nbsp;booktitle = {Euro-Par 2011 Parallel Processing - 17th International
<br>
Conference, Proceedings, Part II},
<br>
&nbsp;month         = {September},
<br>
&nbsp;year      = {2011},
<br>
&nbsp;pages     = {51-64},
<br>
&nbsp;publisher = {Springer},
<br>
&nbsp;series    = {Lecture Notes in Computer Science},
<br>
&nbsp;volume    = {6853},
<br>
&nbsp;year      = {2011},
<br>
&nbsp;isbn      = {978-3-642-23396-8},
<br>
&nbsp;doi       = {<a href="http://dx.doi.org/10.1007/978-3-642-23397-5_6">http://dx.doi.org/10.1007/978-3-642-23397-5_6</a>},
<br>
<p>&nbsp;I will take a look to this paper to clarify this distinction.
<br>
<p><p><p><p>&nbsp;If you intend to store both payload and message log on a remote node, I
<br>
suggest you look at the &quot;sender-based&quot; hooks, as this is where the message
<br>
payload is managed, and adapt from here. The event loggers can already
<br>
manage a subset only of the processes (if you launch as many EL as
<br>
processes, you get a 1-1 mapping), but they never handle message payload;
<br>
you'll have to add all this yourself is it so pleases you.
<br>
<p>&nbsp;&nbsp;Yes, i need to store every message, not only the non-deterministics one.
<br>
In my case every node is an event logger. Let's say that i have 16
<br>
processes in four nodes (four by node), so the messages received by all
<br>
processes residing in node0 need to be stored in node1, and the received
<br>
messages received by all processes residing in node1, need to be stored in
<br>
node2, and so on.
<br>
<p>If i understand correctly, i have to modify the behavior in
<br>
ompi/mca/vprotocol/pessimist, to manage the message payload. And another
<br>
question, is there a way to launch ELs in every node? or i will have to
<br>
modify this too?
<br>
<p>Thanks a lot for your help Aur&#233;lien.
<br>
<p>Hugo
<br>
<p><p><p>Le 27 janv. 2012 &#224; 11:19, Hugo Daniel Meyer a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello Aur&#233;lien.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the clarification. Considering what you've mentioned i will
</span><br>
have to make some adaptations, because to me, every single message has to
<br>
be logged. So, a sender not only will be sending messages to the receiver,
<br>
but also to an event logger. Is there any considerations that i've to take
<br>
into account when modifying the code?. My initial idea is to use the
<br>
el_comm with a group of event loggers (because every node uses a different
<br>
event logger in my approach), and then send the messages to them as you do
<br>
when using MPI_ANY_SOURCE.
<br>
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
<span class="quotelev1">&gt; 2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hugo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your program does not have non-deterministic events. Therefore, there are
</span><br>
no events to log. If you add MPI_ANY_SOURCE, you should see this code being
<br>
called. Please contact me again if you need more help.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 27 janv. 2012 &#224; 10:21, Hugo Daniel Meyer a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George, i'm using some pieces of the pessimist vprotocol. I've observed
</span><br>
that when you do a send, you call vprotocol_receiver_event_flush and here
<br>
the macro __VPROTOCOL_RECEIVER_SEND_BUFFER is called. I've noticed that
<br>
here you try send a copy of the message to process 0 using the el_comm.
<br>
This section of code is never executed, at least in my examples. So, the
<br>
message is never sent to the Event Logger, am i correct with this?  I think
<br>
that this is happening because the
<br>
mca_vprotocol_pessimist.event_buffer_length is always 0.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something that i've got to turn on, or i will have to modify
</span><br>
this behavior manually to connect and send messages to the EL?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
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
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10303.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10303.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
