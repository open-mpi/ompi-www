<?
$subject_val = "[OMPI users] ORTE has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 10:46:03 2016" -->
<!-- isoreceived="20160516144603" -->
<!-- sent="Mon, 16 May 2016 11:45:53 -0300" -->
<!-- isosent="20160516144553" -->
<!-- name="Zabiziz Zaz" -->
<!-- email="zabiziz_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE has lost communication" -->
<!-- id="CAJfyiovuq7VOA=2m9xpcA5jJaaxjwQcsJ9k1XxiNAuXpERWM4Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] ORTE has lost communication<br>
<strong>From:</strong> Zabiziz Zaz (<em>zabiziz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 10:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29214.php">Llolsten Kaonga: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29214.php">Llolsten Kaonga: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm using openmpi-1.10.2 and sometimes I'm receiving the message below:
<br>
--------------------------------------------------------------------------
<br>
ORTE has lost communication with its daemon located on node:
<br>
<p>&nbsp;&nbsp;hostname:  xxxx
<br>
<p>This is usually due to either a failure of the TCP network
<br>
connection to the node, or possibly an internal failure of
<br>
the daemon itself. We cannot recover from this failure, and
<br>
therefore will terminate the job.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>My applications are fault tolerant and the jobs usually takes weeks to
<br>
finish. Sometimes a hardware problem occurs with one node, for example, the
<br>
node shutdown. I don't want mpi to terminate the job, my jobs usually have
<br>
hundreds of nodes and I don't care if 1 node lost communication.
<br>
<p>It's possible to change this behavior of openmpi? I tried to
<br>
set orte_abort_on_non_zero_status to 0 but it didn't work.
<br>
<p>Thanks for your help.
<br>
<p>Regards,
<br>
Guilherme.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29214.php">Llolsten Kaonga: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29214.php">Llolsten Kaonga: "Re: [OMPI users] ORTE has lost communication"</a>
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
