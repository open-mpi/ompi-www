<?
$subject_val = "[OMPI users] Using open-mpi app on a normal network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 11:54:41 2008" -->
<!-- isoreceived="20080118165441" -->
<!-- sent="Fri, 18 Jan 2008 17:54:36 +0100" -->
<!-- isosent="20080118165436" -->
<!-- name="Antoine Monmayrant" -->
<!-- email="antoine.monmayrant_at_[hidden]" -->
<!-- subject="[OMPI users] Using open-mpi app on a normal network" -->
<!-- id="4790D9CC.1010807_at_laas.fr" -->
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
<strong>Subject:</strong> [OMPI users] Using open-mpi app on a normal network<br>
<strong>From:</strong> Antoine Monmayrant (<em>antoine.monmayrant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 11:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4849.php">Aurélien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>Previous message:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4849.php">Aurélien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>Reply:</strong> <a href="4849.php">Aurélien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I am new to open-mpi and parallel computing so I hope I won't 
<br>
bore/offend you with obvious/off-topic questions.
<br>
We are running scientific simulations (using meep from mit) on small 
<br>
bi-processors pcs and to fully use both processors on each machine, we 
<br>
had to compile a mpi version of the soft.
<br>
Compiling and running the app (meep-mpi) with mpirun were both fine.
<br>
Now, we wonder if we can do a bit more by exploiting the unused 
<br>
computing power that is available on our lab network during night and 
<br>
week-end.
<br>
The problem is that even if our network is more than decent, it not near 
<br>
what you can find in a cluster. What's more, the various computers we 
<br>
could use are quite different (proc, ram, overall performances).
<br>
Taking this into account, do you think we can use open-mpi over such a 
<br>
network:
<br>
&nbsp;a) for one long simulation to share on the different &quot;nodes&quot;?
<br>
&nbsp;b) for embarrassingly parallel simulations, that is for N independent 
<br>
simulations that we want to &quot;spread&quot; over the network, for example 
<br>
running one simulation on each available node?
<br>
<p>What kind of gain/limitations can we expect for both cases?
<br>
If open-mpi is not the way forward, do you have an alternative to propose?
<br>
Thanks in advance for your help,
<br>
<p>Cheers,
<br>
<p>Antoine
<br>
<p><pre>
-- 
+++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 Antoine Monmayrant
 LAAS - CNRS
 7 avenue du Colonel Roche
 31077 TOULOUSE Cedex4
 FRANCE 
 
 Tel:+33 5 61 33 64 59
 email : antoine.monmayrant_at_[hidden]
 permanent email : antoine.monmayrant_at_[hidden]
+++++++++++++++++++++++++++++++++++++++++++++++++++++++
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4849.php">Aurélien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>Previous message:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4849.php">Aurélien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>Reply:</strong> <a href="4849.php">Aurélien Bouteiller: "Re: [OMPI users] Using open-mpi app on a normal network"</a>
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
