<?
$subject_val = "[OMPI users] how to select a specific network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 06:36:49 2008" -->
<!-- isoreceived="20080111113649" -->
<!-- sent="Fri, 11 Jan 2008 11:36:23 +0000 (GMT)" -->
<!-- isosent="20080111113623" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] how to select a specific network" -->
<!-- id="Pine.GSO.4.53.0801111131190.19557_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.23.1199898025.10606.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] how to select a specific network<br>
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 06:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4812.php">Adrian Knoth: "Re: [OMPI users] how to select a specific network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a setup which contains one set of machines
<br>
with one nge and one e1000g network and of machines
<br>
with two e1000g networks configured. I am planning a
<br>
large run where all these computers will be occupied
<br>
with one job and the mpi communication should only go
<br>
over one specific network which is configured over
<br>
e1000g0 on the first set of machines and on e1000g1 on the
<br>
second set. I cannot use - for obvious reasons to either
<br>
include all of e1000g or to exclude part of e1000g - if that is
<br>
possible.
<br>
So I have to exclude or include on the internet number range.
<br>
<p>Is there an obvious flag - which I have not yet found - to tell
<br>
mpirun to use one specific network?
<br>
<p>Lydia
<br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4812.php">Adrian Knoth: "Re: [OMPI users] how to select a specific network"</a>
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
