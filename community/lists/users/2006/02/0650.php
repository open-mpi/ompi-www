<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 13 09:08:34 2006" -->
<!-- isoreceived="20060213140834" -->
<!-- sent="Mon, 13 Feb 2006 09:07:54 -0500" -->
<!-- isosent="20060213140754" -->
<!-- name="Peter Beerli" -->
<!-- email="beerli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Migrate with open-MPI" -->
<!-- id="64DB9BE8-15AF-4DA0-A7BF-232DE6A7BB1C_at_scs.fsu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43F063E8.3030908_at_ugent.be" -->
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
<strong>From:</strong> Peter Beerli (<em>beerli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-13 09:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Andy,
<br>
<p>you wrote that with openmpi:
<br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~&gt; mpiexec --hostfile hostfile -np 1  migrate-n
</span><br>
<p><p>it does not work, but with lam-mpi
<br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~/thomas&gt; mpiexec -np 2  migrate-n
</span><br>
<p>you started openmpi on only _one_ node, migrate needs at least _two_  
<br>
nodes to run
<br>
(as you did in lam-mpi)
<br>
migrate actually aborts when running on only one node, it should show  
<br>
an error message so, like this
<br>
<p>zork&gt;which mpirun
<br>
/usr/local/openmpi/bin/mpirun
<br>
zork&gt;mpirun -machinefile ~/onehost -np 1 migrate-n
<br>
migrate-n
<br>
&nbsp;&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;&nbsp;MIGRATION RATE AND POPULATION SIZE ESTIMATION
<br>
&nbsp;&nbsp;&nbsp;using Markov Chain Monte Carlo simulation
<br>
&nbsp;&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;&nbsp;compiled for a PARALLEL COMPUTER ARCHITECTURE
<br>
&nbsp;&nbsp;&nbsp;Version debug 2.1.3   [x]
<br>
&nbsp;&nbsp;&nbsp;Program started at   Mon Feb 13 09:03:45 2006
<br>
<p><p><p>Reading N ...
<br>
Reading S ...
<br>
<p>In file main.c on line 697
<br>
This program was compiled to use a parallel computer
<br>
and you tried to run it on only a single node.
<br>
This will not work because it uses a
<br>
&quot;single_master-many_worker&quot; architecture
<br>
and needs at least TWO nodes
<br>
<p><p>Peter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
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
