<?
$subject_val = "[OMPI users] Help with multirail configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 12:11:13 2014" -->
<!-- isoreceived="20140720161113" -->
<!-- sent="Sun, 20 Jul 2014 18:11:05 +0200" -->
<!-- isosent="20140720161105" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="[OMPI users] Help with multirail configuration" -->
<!-- id="53CBEA19.7020903_at_fau.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Help with multirail configuration<br>
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 12:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Reply:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I am trying to get the maximum performance out of my two node testing 
<br>
setup. Each node consists of 4 Sandy Bridge CPUs and each CPU has one 
<br>
directly attached Mellanox QDR card. Both nodes are connected via a 
<br>
8-port Mellanox switch.
<br>
So far I found no option that allows binding mpi-ranks to a specific 
<br>
card, as it is available in MVAPICH2. Is there a way to change the round 
<br>
robin behavior of openMPI?
<br>
Maybe something like &quot;btl_tcp_if_seq&quot; that I have missed?
<br>
<p><p>Kind regards,
<br>
Tobias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24821.php">Ralph Castain: "Re: [OMPI users] after mpi_finalize(Err)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Reply:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
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
