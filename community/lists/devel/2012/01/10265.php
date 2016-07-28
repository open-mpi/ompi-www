<?
$subject_val = "Re: [OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 11:33:06 2012" -->
<!-- isoreceived="20120127163306" -->
<!-- sent="Fri, 27 Jan 2012 11:33:01 -0500" -->
<!-- isosent="20120127163301" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pessimist Event Logger" -->
<!-- id="28411259-06EC-4651-9953-930987D73759_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK135jEH96H93NB_ZFP0Gmsu+D=-6+keLb6MSy6-gh69ptg_at_mail.gmail.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 11:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hugo, 
<br>
<p>It seems you want to implement some sort of remote pessimistic logging -a la MPICH-V1- ? 
<br>
MPICH-V: Toward a Scalable Fault Tolerant MPI for Volatile Nodes -- George Bosilca, Aur&#233;lien Bouteiller, Franck Cappello, Samir Djilali, Gilles F&#233;dak, C&#233;cile Germain, Thomas H&#233;rault, Pierre Lemarinier, Oleg Lodygensky, Fr&#233;d&#233;ric Magniette, Vincent N&#233;ri, Anton Selikhov -- In proceedings of The IEEE/ACM SC2002 Conference, Baltimore USA, November 2002
<br>
<p>In the PML-V, unlike older designs, the payload of messages and the non-deterministic events follow a different path. The payload of messages is logged on the sender's volatile memory, while the non-deterministic events are sent to a stable event logger, before allowing the process to impact the state of others (the code you have found in the previous email). The best depiction of this distinction can be read in this paper 
<br>
@inproceedings{DBLP:conf/europar/BouteillerHBD11,
<br>
&nbsp;&nbsp;author    = {Aurelien Bouteiller and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thomas H{\'e}rault and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George Bosilca and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack J. Dongarra},
<br>
&nbsp;&nbsp;title     = {Correlated Set Coordination in Fault Tolerant Message Logging
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protocols},
<br>
&nbsp;&nbsp;booktitle = {Euro-Par 2011 Parallel Processing - 17th International Conference, Proceedings, Part II},
<br>
&nbsp;&nbsp;month 	= {September},
<br>
&nbsp;&nbsp;year      = {2011},
<br>
&nbsp;&nbsp;pages     = {51-64},
<br>
&nbsp;&nbsp;publisher = {Springer},
<br>
&nbsp;&nbsp;series    = {Lecture Notes in Computer Science},
<br>
&nbsp;&nbsp;volume    = {6853},
<br>
&nbsp;&nbsp;year      = {2011},
<br>
&nbsp;&nbsp;isbn      = {978-3-642-23396-8},
<br>
&nbsp;&nbsp;doi       = {<a href="http://dx.doi.org/10.1007/978-3-642-23397-5_6">http://dx.doi.org/10.1007/978-3-642-23397-5_6</a>},
<br>
<p><p><p><p>If you intend to store both payload and message log on a remote node, I suggest you look at the &quot;sender-based&quot; hooks, as this is where the message payload is managed, and adapt from here. The event loggers can already manage a subset only of the processes (if you launch as many EL as processes, you get a 1-1 mapping), but they never handle message payload; you'll have to add all this yourself is it so pleases you. 
<br>
<p>Hope it clarifies. 
<br>
Aurelien
<br>
<p><p><p><p>Le 27 janv. 2012 &#224; 11:19, Hugo Daniel Meyer a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello Aur&#233;lien.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the clarification. Considering what you've mentioned i will have to make some adaptations, because to me, every single message has to be logged. So, a sender not only will be sending messages to the receiver, but also to an event logger. Is there any considerations that i've to take into account when modifying the code?. My initial idea is to use the el_comm with a group of event loggers (because every node uses a different event logger in my approach), and then send the messages to them as you do when using MPI_ANY_SOURCE. 
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
<span class="quotelev1">&gt; 2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hugo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your program does not have non-deterministic events. Therefore, there are no events to log. If you add MPI_ANY_SOURCE, you should see this code being called. Please contact me again if you need more help.
</span><br>
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
<span class="quotelev2">&gt; &gt; George, i'm using some pieces of the pessimist vprotocol. I've observed that when you do a send, you call vprotocol_receiver_event_flush and here the macro __VPROTOCOL_RECEIVER_SEND_BUFFER is called. I've noticed that here you try send a copy of the message to process 0 using the el_comm. This section of code is never executed, at least in my examples. So, the message is never sent to the Event Logger, am i correct with this?  I think that this is happening because the mca_vprotocol_pessimist.event_buffer_length is always 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something that i've got to turn on, or i will have to modify this behavior manually to connect and send messages to the EL?
</span><br>
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

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10265/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
