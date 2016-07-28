<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 10:14:21 2007" -->
<!-- isoreceived="20070511141421" -->
<!-- sent="Fri, 11 May 2007 10:13:17 -0400" -->
<!-- isosent="20070511141317" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] torque, and mpiBlast" -->
<!-- id="DCEADB7F-90A6-44BC-B060-51B05BE91237_at_umich.edu" -->
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
<strong>Date:</strong> 2007-05-11 10:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3248.php">anyi li: "[OMPI users] errors in stdin"</a>
<li><strong>Previous message:</strong> <a href="3246.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
we use torque and tm for spawing mpi jobs on our cluster.
<br>
We have a user who will be using mpiBlast.  From their documentation  
<br>
they have:
<br>
<p>&quot;Running a query on 25 nodes would look like:
<br>
mpirun -np 27 mpiblast --config-file=/path/to/mpiblast.conf -p blastn  
<br>
-d nt -i blast_query.fas -o blast_results.txt&quot;
<br>
<p>So they have 2 extra processes that are for special use that do not  
<br>
consume much cpu time thus they say spawn 2  more processes than  
<br>
dedicated.
<br>
<p>My question is how can I verify that the extra are placed on cpus  
<br>
that already have full working process (the other 25) on them?
<br>
<p>Is there a way to say place 25 process in the normal slots and rank 0  
<br>
and 1, placed ware ever.
<br>
Does this make sense?
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
<li><strong>Next message:</strong> <a href="3248.php">anyi li: "[OMPI users] errors in stdin"</a>
<li><strong>Previous message:</strong> <a href="3246.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
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
