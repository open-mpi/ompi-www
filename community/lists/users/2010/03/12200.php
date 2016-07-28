<?
$subject_val = "[OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 11:53:40 2010" -->
<!-- isoreceived="20100302165340" -->
<!-- sent="Tue, 2 Mar 2010 10:49:00 -0600" -->
<!-- isosent="20100302164900" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="[OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640D0AF2F4409_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Option to use only 7 cores out of 8 on each node<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 11:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All.
<br>
I am trying to run a parallel application that should use one core less than the no of cores that are available on the system. Are there any flags that i can use to specify this.
<br>
<p>i tried using the following syntax with machinefile
<br>
<p>openmpi-1.4-BM/bin/mpirun -np 14 -npernode 7 -machinefile machinefile ven_nw.e &lt;coll.dt5.  This fails. Is there any other way around this. When i get two nodes (with 16 cores) allocated from SGE
<br>
and we want to use only 14 cores out of the 16 allocated.
<br>
<p>Rangam
<br>
<p>My machine file has 
<br>
<p>compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-8.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
compute-9-6.local
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
