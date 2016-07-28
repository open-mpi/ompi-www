<?
$subject_val = "[OMPI devel] Pessimist Event Logger";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 10:21:24 2012" -->
<!-- isoreceived="20120127152124" -->
<!-- sent="Fri, 27 Jan 2012 16:21:19 +0100" -->
<!-- isosent="20120127152119" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Pessimist Event Logger" -->
<!-- id="CABdqK10Wd_RBopGw_Z=cKGnKevFsWiGowha4pTZBDEe4G6723A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Pessimist Event Logger<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 10:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10263.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10263.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10263.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Maybe reply:</strong> <a href="10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>George, i'm using some pieces of the pessimist vprotocol. I've observed
<br>
that when you do a send, you call vprotocol_receiver_event_flush and here
<br>
the macro *__VPROTOCOL_RECEIVER_SEND_BUFFER* is called. I've noticed that
<br>
here you try send a copy of the message to process 0 using the el_comm.
<br>
This section of code is never executed, at least in my examples. So, the
<br>
message is never sent to the Event Logger, am i correct with this?  I think
<br>
that this is happening because the *
<br>
mca_vprotocol_pessimist.event_buffer_length* is always 0.
<br>
<p>Is there something that i've got to turn on, or i will have to modify this
<br>
behavior manually to connect and send messages to the EL?
<br>
<p>Thanks in advance.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10263.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10263.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Reply:</strong> <a href="10263.php">Aurélien Bouteiller: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Maybe reply:</strong> <a href="10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
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
