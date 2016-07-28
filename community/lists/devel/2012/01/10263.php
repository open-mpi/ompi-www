<?
$subject_val = "Re: [OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 10:34:54 2012" -->
<!-- isoreceived="20120127153454" -->
<!-- sent="Fri, 27 Jan 2012 10:34:49 -0500" -->
<!-- isosent="20120127153449" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pessimist Event Logger" -->
<!-- id="74FAD8A0-72A6-4A50-97B0-3E433C383A0C_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK10Wd_RBopGw_Z=cKGnKevFsWiGowha4pTZBDEe4G6723A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-01-27 10:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hugo, 
<br>
<p>Your program does not have non-deterministic events. Therefore, there are no events to log. If you add MPI_ANY_SOURCE, you should see this code being called. Please contact me again if you need more help.
<br>
<p>Aurelien
<br>
<p><p>Le 27 janv. 2012 &#224; 10:21, Hugo Daniel Meyer a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George, i'm using some pieces of the pessimist vprotocol. I've observed that when you do a send, you call vprotocol_receiver_event_flush and here the macro __VPROTOCOL_RECEIVER_SEND_BUFFER is called. I've noticed that here you try send a copy of the message to process 0 using the el_comm. This section of code is never executed, at least in my examples. So, the message is never sent to the Event Logger, am i correct with this?  I think that this is happening because the mca_vprotocol_pessimist.event_buffer_length is always 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something that i've got to turn on, or i will have to modify this behavior manually to connect and send messages to the EL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10263/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10264.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
