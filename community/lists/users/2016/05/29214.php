<?
$subject_val = "Re: [OMPI users] ORTE has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:11:55 2016" -->
<!-- isoreceived="20160516151155" -->
<!-- sent="Mon, 16 May 2016 11:11:49 -0400" -->
<!-- isosent="20160516151149" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE has lost communication" -->
<!-- id="005201d1af85$45449a10$cfcdce30$_at_soft-forge.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJfyiovuq7VOA=2m9xpcA5jJaaxjwQcsJ9k1XxiNAuXpERWM4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE has lost communication<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29213.php">Dave Love: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29210.php">Zabiziz Zaz: "[OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Guilherme,
<br>
<p>&nbsp;
<br>
<p>This may be off but try running your mpirun command with the option &#226;&#128;&#156;&#226;&#128;&#147;tag-output&#226;&#128;&#157;. If you see a &#226;&#128;&#156;broken pipe&#226;&#128;&#157;, then your issue may be firewall related. You could then check the thread &#226;&#128;&#156;Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled&#226;&#128;&#157; for how to get around this from Gilles or Jeff.
<br>
<p>&nbsp;
<br>
<p>I thank you.
<br>
<p><pre>
--
Llolsten
 
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Zabiziz Zaz
Sent: Monday, May 16, 2016 10:46 AM
To: users_at_[hidden]
Subject: [OMPI users] ORTE has lost communication
 
Hi,
I'm using openmpi-1.10.2 and sometimes I'm receiving the message below:
--------------------------------------------------------------------------
ORTE has lost communication with its daemon located on node:
 
  hostname:  xxxx
 
This is usually due to either a failure of the TCP network
connection to the node, or possibly an internal failure of
the daemon itself. We cannot recover from this failure, and
therefore will terminate the job.
 
--------------------------------------------------------------------------
 
My applications are fault tolerant and the jobs usually takes weeks to finish. Sometimes a hardware problem occurs with one node, for example, the node shutdown. I don't want mpi to terminate the job, my jobs usually have hundreds of nodes and I don't care if 1 node lost communication.
 
It's possible to change this behavior of openmpi? I tried to set orte_abort_on_non_zero_status to 0 but it didn't work. 
 
Thanks for your help.
 
Regards,
Guilherme.
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29214/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29213.php">Dave Love: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29210.php">Zabiziz Zaz: "[OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
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
