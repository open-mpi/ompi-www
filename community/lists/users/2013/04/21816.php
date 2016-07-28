<?
$subject_val = "[OMPI users] Broadcast and root process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 07:20:10 2013" -->
<!-- isoreceived="20130429112010" -->
<!-- sent="Mon, 29 Apr 2013 13:15:04 +0200" -->
<!-- isosent="20130429111504" -->
<!-- name="giggzounet" -->
<!-- email="giggzounet_at_[hidden]" -->
<!-- subject="[OMPI users] Broadcast and root process" -->
<!-- id="kllknj$bap$1_at_ger.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] Broadcast and root process<br>
<strong>From:</strong> giggzounet (<em>giggzounet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 07:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21817.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21815.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>Reply:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm new on this list. I'm using MPI for years but I don't have written a
<br>
lot of code with MPI. Therefore is my question perhaps ridiculous:
<br>
<p>I'm using a Computational Fluid Mechanics (CFD) Solver. This Solver uses
<br>
MPI to exchange the data between the different partitions. In this
<br>
solver the &quot;root processor&quot; is always the processor 1. So this proc
<br>
reads the input, broadcast a lot of things and writes the output.
<br>
<p>During a time step the solver computes the reference pressure at a
<br>
point. This computation is done on a processor, which may not be the
<br>
root processor. Therefore after the computation a broadcast of the value
<br>
is necessary. For the moment in the code the broadcast is done with the
<br>
processor, where the reference pressure is computed, as root processor
<br>
(and not with the standard &quot;root processor&quot;).	
<br>
<p>Is it false ? Must the root processor be the same during a computation
<br>
for all broadcasts ?
<br>
<p>Best regards,
<br>
Guillaume
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21817.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21815.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>Reply:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
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
