<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 04:43:16 2006" -->
<!-- isoreceived="20060314094316" -->
<!-- sent="Tue, 14 Mar 2006 10:42:59 +0100" -->
<!-- isosent="20060314094259" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.valiron_at_[hidden]" -->
<!-- subject="[OMPI users] Ethernet tuning on Solaris Opteron ?" -->
<!-- id="44169023.9080807_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C730026A-2960-45AC-B923-6405190F2980_at_open-mpi.org" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 04:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0849.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Reply:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am now attempting to tune openmpi-1.1a1r9260 on Solaris Opteron.
<br>
<p>Each quadripro node possess two ethernet interfaces bge0 and bge1.
<br>
Interfaces bge0 are dedicated to parallel jobs and correspond to node 
<br>
names pxx,
<br>
they use a dedicated gigabit switch.
<br>
Interfaces bge1 provide nfs sharing etc and correspond to node names nxx 
<br>
over another gigabit switch.
<br>
<p>1) I allocated 4 quadripro nodes.
<br>
As documented in the FAQ, mpirun -np 4 -hostfile $OAR_FILE_NODES runs 4 
<br>
tasks on the first SMP, and mpirun -np 4 -hostfile $OAR_FILE_NODES 
<br>
--bynode distributes a task on each node.
<br>
<p>2) According to the users list, mpirun --mca pml teg should revert to 
<br>
2nd generation TCP instead of default ob1 (3rd gen). Unfortunately I get 
<br>
the message
<br>
No available pml components were found!
<br>
Have you removed the 2nd generation TCP transport ? Do you consider the 
<br>
new ob1 is competitive now ?
<br>
<p>3) According to the users list, tuned collective primitives are 
<br>
available. Apparently they are now compiled by default, but the don't 
<br>
seem functional at all:
<br>
<p>mpirun --mca coll tuned
<br>
Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0
<br>
*** End of error message ***
<br>
<p>4) According to the FAQ and to the users list, openmpi attempts to 
<br>
discover and use all interfaces. I attempted to force using bge0 only 
<br>
with no success.
<br>
<p>mpirun --mca btl_tcp_if_exclude bge1
<br>
[n33:04784] *** An error occurred in MPI_Barrier
<br>
[n33:04784] *** on communicator MPI_COMM_WORLD
<br>
[n33:04784] *** MPI_ERR_INTERN: internal error
<br>
[n33:04784] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 process killed (possibly by Open MPI)
<br>
<p>In the FAQ it is stated that a new syntax should be available soon. I 
<br>
tried if it is already implemented in openmpi-1.1a1r9260
<br>
<p>mpirun --mca btl_tcp_if ^bge0,bge1
<br>
mpirun --mca btl_tcp_if ^bge1
<br>
works with identical performances.
<br>
<p>However I doubt this option is functional, because if I disable all 
<br>
ethernet interfaces,
<br>
mpirun --mca btl_tcp_if ^bge0,bge1
<br>
the job still works!
<br>
<p>I would be happy to have more control on the interfaces being used.
<br>
<p>What is expected to work on other platforms ?
<br>
What could be specific issues to the Solaris Opteron ?
<br>
<p>Have a nice openmpi day!
<br>
<p><pre>
--
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
        _/_/_/_/    _/       _/       Dr. Pierre VALIRON
       _/     _/   _/      _/   Laboratoire d'Astrophysique
      _/     _/   _/     _/    Observatoire de Grenoble / UJF
     _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
    _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
   _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
  _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
 _/          _/_/        
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0849.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Reply:</strong> <a href="0850.php">Brian Barrett: "Re: [OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
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
