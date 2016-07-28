<?
$subject_val = "[OMPI users] Questions regarding MPI intercommunicators &amp; collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 10:20:46 2015" -->
<!-- isoreceived="20150223152046" -->
<!-- sent="Mon, 23 Feb 2015 16:20:44 +0100" -->
<!-- isosent="20150223152044" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="[OMPI users] Questions regarding MPI intercommunicators &amp;amp; collectives" -->
<!-- id="54EB454C.2050705_at_bsc.es" -->
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
<strong>Subject:</strong> [OMPI users] Questions regarding MPI intercommunicators &amp; collectives<br>
<strong>From:</strong> Harald Servat (<em>harald.servat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-23 10:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26371.php">Aleix Gimeno Vives: "[OMPI users] Slave machine shutdown"</a>
<li><strong>Previous message:</strong> <a href="26369.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<li><strong>Reply:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>&nbsp;&nbsp;&nbsp;we have several questions regarding calls to collectives using 
<br>
intercommunicators. In man for MPI_Bcast, there is a notice for the 
<br>
inter-communicator case that reads the text below our questions.
<br>
<p>&nbsp;&nbsp;&nbsp;If an I is an intercomunicator for communicattors C1={p1,p2,p3} and 
<br>
C2={p4,p5,p6}, and a process p3 (from C1) wants to broadcast a message 
<br>
to C2. Is it mandatory that p1 and p2 have to call to MPI_Bcast? Or can 
<br>
the user skip adding these calls?
<br>
<p>&nbsp;&nbsp;&nbsp;BTW, what is the behavior for the broadcast for p1 and p2 in this 
<br>
case, simply return?
<br>
<p>&nbsp;&nbsp;&nbsp;Will MPI fail if MPI_PROC_NULL is not given for the parameter root in 
<br>
p1 and p2?
<br>
<p>Thank you very much in advance.
<br>
<p><pre>
----
** When Communicator is an Inter-communicator
When the communicator is an inter-communicator, the root process in the 
first group broadcasts data to all the processes in the second group. 
The first group defines the root process. That process uses MPI_ROOT as 
the value of its root argument. The remaining processes use 
MPI_PROC_NULL as the value of their root argument. All processes in the 
second group use the rank of that root process in the first group as the 
value of their root argument. The receive buffer arguments of the 
processes in the second group must be consistent with the send buffer 
argument of the root process in the first group.
WARNING / LEGAL TEXT: This message is intended only for the use of the
individual or entity to which it is addressed and may contain
information which is privileged, confidential, proprietary, or exempt
from disclosure under applicable law. If you are not the intended
recipient or the person responsible for delivering the message to the
intended recipient, you are strictly prohibited from disclosing,
distributing, copying, or in any way using this message. If you have
received this communication in error, please notify the sender and
destroy and delete any copies you may have received.
<a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26371.php">Aleix Gimeno Vives: "[OMPI users] Slave machine shutdown"</a>
<li><strong>Previous message:</strong> <a href="26369.php">Sachin Krishnan: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<li><strong>Reply:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
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
