<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 10:15:23 2006" -->
<!-- isoreceived="20060728141523" -->
<!-- sent="Fri, 28 Jul 2006 09:15:19 -0500" -->
<!-- isosent="20060728141519" -->
<!-- name="bdickinson_at_[hidden]" -->
<!-- email="bdickinson_at_[hidden]" -->
<!-- subject="[OMPI users] Fault Tolerant Method" -->
<!-- id="c698d63f2ac43.2ac43c698d63f_at_rdc-kc.rr.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> <a href="mailto:bdickinson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fault%20Tolerant%20Method"><em>bdickinson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-07-28 10:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Reply:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have implemented the fault tolerance method in which you would use
<br>
MPI_COMM_SPAWN to dynamically create communication groups and use
<br>
those communicators for a form of process fault tolerance (as 
<br>
described by William Gropp and Ewing Lusk in their 2004 paper),
<br>
but am having some problems getting it to work the way I intended.
<br>
Basically, when it runs, it is spawning all the processes on the
<br>
same machine (as it always starts at the top of the machine_list
<br>
when spawning a process).  Is there a way that I get get these
<br>
processes to spawn on different machines?
<br>
<p>One possible route I considerd was using something like SLURM to
<br>
distribute the jobs, and just putting '+' in the machine file.  Will
<br>
this work?  Is this the best route to go?
<br>
<p>Thanks for any help with this.
<br>
<p>Byron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Reply:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
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
