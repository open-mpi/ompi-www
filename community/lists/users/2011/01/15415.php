<?
$subject_val = "[OMPI users] openmpi's mpi_comm_spawn integrated with sge?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 02:18:04 2011" -->
<!-- isoreceived="20110125071804" -->
<!-- sent="Mon, 24 Jan 2011 23:17:58 -0800 (PST)" -->
<!-- isosent="20110125071758" -->
<!-- name="Will Glover" -->
<!-- email="will_glover_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi's mpi_comm_spawn integrated with sge?" -->
<!-- id="28685.35713.qm_at_web36707.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi's mpi_comm_spawn integrated with sge?<br>
<strong>From:</strong> Will Glover (<em>will_glover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 02:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Previous message:</strong> <a href="15414.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I tried a google/mailing list search for this but came up with nothing, so here goes:
<br>
<p>Is there any level of automation between open mpi's dynamic process management and the SGE queue manager?  
<br>
In particular, can I make a call to mpi_comm_spawn and have SGE dynamically increase the number of slots?  
<br>
This seems a little far fetched, but it would be really useful if this is possible.  My application is 'restricted' to coarse-grain task parallelism and involves a work load that varies significantly during runtime (between 1 and ~100 parallel tasks).  Dynamic process management would maintain an optimal number of processors and reduce idling.
<br>
<p>Many thanks,
<br>
<pre>
-- 
Will Glover
      
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Previous message:</strong> <a href="15414.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15416.php">Terry Dontje: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
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
