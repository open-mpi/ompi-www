<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 19:24:02 2006" -->
<!-- isoreceived="20060601232402" -->
<!-- sent="Thu, 01 Jun 2006 17:23:40 -0600" -->
<!-- isosent="20060601232340" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and Dual Core (machinefile)" -->
<!-- id="op.tahpxqylies9li_at_rygel.local" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 19:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<li><strong>Previous message:</strong> <a href="1352.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixeddimensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Maybe reply:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm hoping this is just user error...
<br>
<p>I'm running a single-node job with a node that has two dual-core opterons   
<br>
(Open MPI 1.0.2).
<br>
compiler=gcc 4.1.0
<br>
arch=x86_64 (64-bit)
<br>
OS=linux 2.6.16
<br>
<p>****
<br>
My machine file looked like this:
<br>
<p>node1 slots=4
<br>
<p>I have an HPL configuration for 4 processors (PxQ=2x2)
<br>
<p>I started with 'mpirun -np 4 -machinefile foo ./xhpl'
<br>
<p>And the problem takes 15 seconds to complete.
<br>
<p>I change the machinefile to read:
<br>
<p>node1 slots=2
<br>
-or, simply-
<br>
node1
<br>
<p>It doesn't matter which machinefile I use; I still execute it with:
<br>
'mpirun -np 4 -machinefile foo ./xhpl'
<br>
<p>Except now the problem takes 0.1 sec to complete.
<br>
<p>It's perfectly repeatable...
<br>
<p>Is there something about the machine file format I'm not aware of (with  
<br>
respect to dual-core CPUs)?  IIRC, slots=(num of processes to run per  
<br>
node); so two dual-cores should be slots=4.  Except 'slots=4' makes it run  
<br>
a few orders of magnitude slower.
<br>
<p>Thoughts?
<br>
<pre>
--
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1354.php">Troy Telford: "[OMPI users] openib /compiler issue?"</a>
<li><strong>Previous message:</strong> <a href="1352.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixeddimensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Maybe reply:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
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
