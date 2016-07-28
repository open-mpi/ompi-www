<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  7 16:06:16 2006" -->
<!-- isoreceived="20060807200616" -->
<!-- sent="Mon, 7 Aug 2006 16:04:50 -0400" -->
<!-- isosent="20060807200450" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] network preference" -->
<!-- id="8D392FBF-5D8C-4FC6-BC45-E89811AD894F_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-07 16:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1728.php">Åke Sandgren: "[OMPI users] Problems getting openmpi and blacs working"</a>
<li><strong>Previous message:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a user ask this,  its not a very practical question but I am  
<br>
curious.
<br>
<p>OMPI uses a 'fast' network if its available.  (IB, GM, etc)  I also  
<br>
infer that for process in the same SMP nodes the sm (shared memory)  
<br>
btl is used, even if the job has more than one node given to it?  The  
<br>
real question is what happens if a job is given three nodes, two have  
<br>
IB adapters and all have ethernet.  Will the entire job use TCP for  
<br>
process on different nodes and shared memory inner node?  Or will the  
<br>
two that have ib connections use ib to communicate and only use TCP  
<br>
when talking to the third host that does not have IB.
<br>
<p>Second would it be safe to say OMPI searches the BTL's in the  
<br>
following order when trying to reach a process?
<br>
Self
<br>
SM
<br>
IB, GM, MX, MVAPI
<br>
TCP
<br>
<p>Third, what about a hypothetical case when a node has both GM and IB  
<br>
on it?  (evaluation machines)
<br>
<p>Last does OMPI build something like a route list when mpi_init() is  
<br>
called?  This way knowing how to get to other members off the job?   
<br>
Or is this done the first time a process needs to talk to another  
<br>
process thus not storing any route information not needed.
<br>
<p><p>p.s.  not having to recompile code for different networks has made  
<br>
evaluating network so much more enjoyable.  Thank-you for all the  
<br>
work on the selection of networks 'just working'
<br>
<p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1728.php">Åke Sandgren: "[OMPI users] Problems getting openmpi and blacs working"</a>
<li><strong>Previous message:</strong> <a href="1726.php">Galen M. Shipman: "Re: [OMPI users] Proprieatary transport layer for openMPI..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
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
