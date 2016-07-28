<?
$subject_val = "Re: [OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 11:19:31 2012" -->
<!-- isoreceived="20120127161931" -->
<!-- sent="Fri, 27 Jan 2012 17:19:27 +0100" -->
<!-- isosent="20120127161927" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pessimist Event Logger" -->
<!-- id="CABdqK135jEH96H93NB_ZFP0Gmsu+D=-6+keLb6MSy6-gh69ptg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="74FAD8A0-72A6-4A50-97B0-3E433C383A0C_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-01-27 11:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10265.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10263.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10263.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10265.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10265.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Aur&#233;lien.
<br>
<p>Thanks for the clarification. Considering what you've mentioned i will have
<br>
to make some adaptations, because to me, every single message has to be
<br>
logged. So, a sender not only will be sending messages to the receiver, but
<br>
also to an event logger. Is there any considerations that i've to take into
<br>
account when modifying the code?. My initial idea is to use the el_comm
<br>
with a group of event loggers (because every node uses a different event
<br>
logger in my approach), and then send the messages to them as you do when
<br>
using MPI_ANY_SOURCE.
<br>
<p>Thanks for your help.
<br>
<p>Hugo Meyer
<br>
<p>2012/1/27 Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hugo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your program does not have non-deterministic events. Therefore, there are
</span><br>
<span class="quotelev1">&gt; no events to log. If you add MPI_ANY_SOURCE, you should see this code being
</span><br>
<span class="quotelev1">&gt; called. Please contact me again if you need more help.
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
<span class="quotelev2">&gt; &gt; George, i'm using some pieces of the pessimist vprotocol. I've observed
</span><br>
<span class="quotelev1">&gt; that when you do a send, you call vprotocol_receiver_event_flush and here
</span><br>
<span class="quotelev1">&gt; the macro __VPROTOCOL_RECEIVER_SEND_BUFFER is called. I've noticed that
</span><br>
<span class="quotelev1">&gt; here you try send a copy of the message to process 0 using the el_comm.
</span><br>
<span class="quotelev1">&gt; This section of code is never executed, at least in my examples. So, the
</span><br>
<span class="quotelev1">&gt; message is never sent to the Event Logger, am i correct with this?  I think
</span><br>
<span class="quotelev1">&gt; that this is happening because the
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_pessimist.event_buffer_length is always 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something that i've got to turn on, or i will have to modify
</span><br>
<span class="quotelev1">&gt; this behavior manually to connect and send messages to the EL?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10264/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10265.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10263.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10263.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10265.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10265.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
