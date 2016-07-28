<?
$subject_val = "[OMPI users] display-map option in v1.8.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 09:10:48 2015" -->
<!-- isoreceived="20151012131048" -->
<!-- sent="Mon, 12 Oct 2015 16:10:38 +0300" -->
<!-- isosent="20151012131038" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="[OMPI users] display-map option in v1.8.8" -->
<!-- id="561BB14E.5000908_at_letai.org.il" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] display-map option in v1.8.8<br>
<strong>From:</strong> Daniel Letai (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-12 09:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Reply:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
After upgrading to 1.8.8 I can no longer see the map. When looking at 
<br>
the man page for mpirun, display-map no longer exists. Is there a way to 
<br>
show the map in 1.8.8 ?
<br>
<p>Another issue - I'd like to map 2 process per node - 1 to each socket.
<br>
What is the current &quot;correct&quot; syntax? --map-by ppr:2:node doesn't 
<br>
guarantee 1 per Socket. --map-by ppr:1:socket doesn't guarantee 2 per 
<br>
node. I assume it's something obvious, but the documentation is somewhat 
<br>
lacking.
<br>
I'd like to know the general syntax - even if I have 4 socket nodes I'd 
<br>
still like to map only 2 procs per node. Combining with numa/dist to 
<br>
hca/dist to gpu will be very helpful too.
<br>
<p>Thanks,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Reply:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
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
