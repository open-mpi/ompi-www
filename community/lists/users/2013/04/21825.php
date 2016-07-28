<?
$subject_val = "[OMPI users] Broadcast problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 02:43:28 2013" -->
<!-- isoreceived="20130430064328" -->
<!-- sent="Mon, 29 Apr 2013 23:43:23 -0700 (PDT)" -->
<!-- isosent="20130430064323" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="[OMPI users] Broadcast problem" -->
<!-- id="1367304203.87572.YahooMailNeo_at_web162905.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Broadcast problem<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 02:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>Previous message:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>Maybe reply:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a number of processes split into sender and&#160;receivers.
Senders read large quantities of randomly organised data into buffers for transmission to receivers.
When a buffer is full it needs to be transmitted to all receivers this repeats until all the data is transmitted.

Problem is that MPI_Bcast must know the root it is to&#160;receive&#160;from and therefore cant&#160;receive&#160;'blind' from the first full sender.
Scatter would be inneffieienct because a few senders wont have anything to send - so its&#160;wasteful&#160;to transmit those empty buffers repeatedly.&#160;

Any ideas?
Can Bcast recievers be promiscuous?

Thanks Randolph
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>Previous message:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>Maybe reply:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
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
