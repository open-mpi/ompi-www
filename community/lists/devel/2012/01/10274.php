<?
$subject_val = "Re: [OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 04:56:54 2012" -->
<!-- isoreceived="20120130095654" -->
<!-- sent="Mon, 30 Jan 2012 10:56:48 +0100" -->
<!-- isosent="20120130095648" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pessimist Event Logger" -->
<!-- id="CABdqK11AjhV6dzv8hjEMBn9gUBFDoMm6cRVSybazoreZp89VFg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28411259-06EC-4651-9953-930987D73759_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-01-30 04:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<li><strong>Previous message:</strong> <a href="10273.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]"</a>
<li><strong>In reply to:</strong> <a href="10265.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Aurelien.
<br>
<p>2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hugo,
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
<p><p>&nbsp;We could say that is similar because i use a distributed logging
<br>
mechanism, but is a little diferent because my Memory Channels and
<br>
Checkpoint Servers are the processing nodes, i don't have specials nodes to
<br>
take care of the message log and checkpoints.
<br>
<p><span class="quotelev1">&gt;
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
<p><p>I will take a look to this paper to clarify this distinction.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<p>If you intend to store both payload and message log on a remote node, I
<br>
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
<p>&nbsp;Yes, i need to store every message, not only the non-deterministics one.
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
If i understand correctly, i have to modify the behavior in
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
<p><span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<li><strong>Previous message:</strong> <a href="10273.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]"</a>
<li><strong>In reply to:</strong> <a href="10265.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
