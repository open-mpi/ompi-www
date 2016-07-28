<?
$subject_val = "[OMPI users] &quot;almost there&quot; in getting MPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 09:10:01 2011" -->
<!-- isoreceived="20111215141001" -->
<!-- sent="Thu, 15 Dec 2011 14:09:50 +0000" -->
<!-- isosent="20111215140950" -->
<!-- name="Joao Amaral" -->
<!-- email="jsamaral_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;almost there&amp;quot; in getting MPI to run" -->
<!-- id="4EE9FFAE.5060708_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE9AFA2.1020103_at_hmg.inpg.fr" -->
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
<strong>Subject:</strong> [OMPI users] &quot;almost there&quot; in getting MPI to run<br>
<strong>From:</strong> Joao Amaral (<em>jsamaral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 09:09:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>After trying cygwin and the windows build of Open MPI, I've now focused 
<br>
on using linux for my mpif90 code testing/development on my laptop.
<br>
<p>I've managed to install Open MPI, and it works, sort of.
<br>
<p>Strangely(?), in both my laptop and the cluster, the number of threads 
<br>
from the command
<br>
<p>call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
<br>
<p>Results on only one active thread, when my laptop is a quad-core (should 
<br>
be 8 threads). The same happens running in the cluster, where each 
<br>
&quot;blade&quot; has 8 cores.
<br>
<p>What am I missing here? Is there more configuration to be done? 
<br>
Actually, can I manually set the number of working threads?
<br>
<p>Thanks for any help. I hope I'm &quot;almost there&quot;.
<br>
<p>Joao
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="17985.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17987.php">Ralph Castain: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Reply:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
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
