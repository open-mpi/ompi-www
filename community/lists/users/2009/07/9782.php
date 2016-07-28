<?
$subject_val = "[OMPI users] Disconnections";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 17:54:17 2009" -->
<!-- isoreceived="20090701215417" -->
<!-- sent="Wed, 01 Jul 2009 14:10:01 -0700" -->
<!-- isosent="20090701211001" -->
<!-- name="Daniel Miles" -->
<!-- email="daniel.miles_at_[hidden]" -->
<!-- subject="[OMPI users] Disconnections" -->
<!-- id="C6711EB9.3014%daniel.miles_at_rnanetworks.com" -->
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
<strong>From:</strong> Daniel Miles (<em>daniel.miles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 17:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<li><strong>Previous message:</strong> <a href="9781.php">Michael Di Domenico: "[OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<li><strong>Reply:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, everybody.
<br>
<p>I&#185;m having trouble where one of my client nodes crashes while I have an MPI
<br>
job on it. When this happens, the mpirun process on the head node never
<br>
returns. I can kill it with a SIGINT (ctrl-c) and it still cleans up its
<br>
child processes on the remaining healthy client nodes but I don&#185;t get any of
<br>
the results from those client processes.
<br>
<p>Does anybody have any ideas about how I could create a more fault-tolerant
<br>
MPI job? In an ideal world, my head node would report that it lost the
<br>
connection to a client node and keep going as if that client never existed
<br>
(so that the results of the job are what they would have been if the
<br>
crashed-node wasn&#185;t part of the job to begin with).
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-9782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<li><strong>Previous message:</strong> <a href="9781.php">Michael Di Domenico: "[OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<li><strong>Reply:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
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
