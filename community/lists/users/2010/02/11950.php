<?
$subject_val = "[OMPI users] crashing on MPI_SEND -- program exited with code 021, when ~1200 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 14:10:05 2010" -->
<!-- isoreceived="20100201191005" -->
<!-- sent="Mon, 1 Feb 2010 14:10:00 -0500" -->
<!-- isosent="20100201191000" -->
<!-- name="Timothy G Thompson" -->
<!-- email="Timothy.G.Thompson_at_[hidden]" -->
<!-- subject="[OMPI users] crashing on MPI_SEND -- program exited with code 021, when ~1200 cores" -->
<!-- id="OF49BE5ECB.84FF18C9-ON852576BD.00675EFD-852576BD.006946AE_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Timothy G Thompson (<em>Timothy.G.Thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-01 14:10:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11951.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Previous message:</strong> <a href="11949.php">Lee Manko: "[OMPI users] Cluster Configuration Issue???"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've been using openmpi (version 1.3.2) for some time, but recently have 
<br>
had greater than 1000 cores available.
<br>
My code runs fine with 1000 cores but fails when attempting to use 1200 
<br>
cores.
<br>
<p>The only information at the time of the crash is:  &lt;program exited with 
<br>
code 021&gt;.
<br>
<p>Within the debugger I know the crash is occurring on an MPI_Send call.
<br>
After inserting printf diagnostics I know the following... 
<br>
<p>I have a master/slave application with a 'synchronization' step occurring 
<br>
during initialization.
<br>
The master is using MPI_Send to send a single integer to all of the 
<br>
slaves.
<br>
I see most of the slave's printing a diagnostic and then sitting on the 
<br>
MPI_Recv.
<br>
<p>Then I see the master (finally getting to the 'home-grown broadcast') and 
<br>
starting to issue MPI_Send to each slave.
<br>
After (in this case) 1019 sends the crash occurs.
<br>
<p>I'm looking for information on the cause, I'm guessing some kind of a 
<br>
message-passing buffer is being overrun, 
<br>
and hints on how to avoid these types of bottlenecks when running on 
<br>
clusters with multiple of thousand
<br>
of cores.
<br>
<p>thanks !!
<br>
Tim Thompson
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-11950/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11951.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Previous message:</strong> <a href="11949.php">Lee Manko: "[OMPI users] Cluster Configuration Issue???"</a>
<!-- nextthread="start" -->
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
