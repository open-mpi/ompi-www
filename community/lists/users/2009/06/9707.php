<?
$subject_val = "[OMPI users] Shared Memory (SM) module and shared cache implications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 04:39:57 2009" -->
<!-- isoreceived="20090625083957" -->
<!-- sent="Thu, 25 Jun 2009 10:39:52 +0200" -->
<!-- isosent="20090625083952" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] Shared Memory (SM) module and shared cache implications" -->
<!-- id="4A4337D8.2060605_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> [OMPI users] Shared Memory (SM) module and shared cache implications<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 04:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>Previous message:</strong> <a href="9706.php">Jim Kress ORG: "Re: [OMPI users] 50% performance	reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over	Ethernet	instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>Reply:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have a simple question for the shared memory (sm) module developers of 
<br>
Open MPI.
<br>
<p>In the current implementation, is there any advantage of having shared 
<br>
cache among processes communicating?
<br>
For example let say we have P1 and P2 placed in the same CPU on 2 
<br>
different physical cores with shared cache, P1 wants to send a message 
<br>
to P2 and the message is already in the cache.
<br>
<p>How the message is being actually exchanged? Is the cache line 
<br>
invalidated, written to main memory and exchanged by using some DMA 
<br>
transfer... or is the message in the cache used (avoiding access to the 
<br>
main memory)?
<br>
<p>thanks in advance, Simone P.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>Previous message:</strong> <a href="9706.php">Jim Kress ORG: "Re: [OMPI users] 50% performance	reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over	Ethernet	instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>Reply:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
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
