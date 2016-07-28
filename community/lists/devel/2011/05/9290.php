<?
$subject_val = "[OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 04:58:20 2011" -->
<!-- isoreceived="20110531085820" -->
<!-- sent="Tue, 31 May 2011 10:58:15 +0200" -->
<!-- isosent="20110531085815" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Fake Modex" -->
<!-- id="BANLkTikoSq3wLcJrPoQtQ0_9xD=3-s+A6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fake Modex<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-31 04:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9289.php">sai sudheesh: "[OMPI devel] I added you as a friend on Quepasa.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I'm needing some help to restart the communication with a process that i
<br>
restore in a different node. My situation is as follows:
<br>
<p>The process fails and it's restored in another node succesfully from a
<br>
previous checkpoint that i sent there. Now, when a process try to send a
<br>
message to this restored process it will fail, or at least, it will be
<br>
locked in *ompi_request_wait_completion. *
<br>
*
<br>
*
<br>
So, when this happens i have to send a message to the daemon of the sender
<br>
that will have the uri of where the process has been restored and answer to
<br>
the proc with this and it will update this info.
<br>
<p>So, i need to know where in the code i can capture this attempt to send and
<br>
then send the message to his daemon and where and how i can update this info
<br>
to send the message to the right place (Same rank but new uri).
<br>
<p>I have to do it in this way to avoid a collective communication.
<br>
<p>If you give me a hand on this, it will be great.
<br>
<p>Best regards.
<br>
<p>Hugo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9290/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9289.php">sai sudheesh: "[OMPI devel] I added you as a friend on Quepasa.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
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
