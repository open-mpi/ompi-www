<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 11:27:49 2007" -->
<!-- isoreceived="20070719152749" -->
<!-- sent="Thu, 19 Jul 2007 08:27:45 -0700 (PDT)" -->
<!-- isosent="20070719152745" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI start up problems" -->
<!-- id="383416.59347.qm_at_web57712.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 11:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<li><strong>Previous message:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<li><strong>Reply:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;All,
<br>
<p>&nbsp;I've run across a somewhat difficult code for OpenMPI to handle
<br>
(CPMD).
<br>
<p>&nbsp;Here is the report on the versions I tried:
<br>
&nbsp;1.1.4 - mostly does not start
<br>
&nbsp;1.1.5 - works
<br>
&nbsp;1.2.3 - does not start
<br>
<p>The machine has dual Opterons, with Gigabit. The running command with
<br>
4x2 cpus is:
<br>
mpirun -np $np -machinefile $PBS_NODEFILE \
<br>
-mca coll self,basic,tuned -mca  \
<br>
mpi_paffinity_alone 1  -mca coll_basic_crossover 4 \
<br>
$HOME/cpmd/cpmd.x_o $1 &gt;&gt; $2
<br>
<p>Now, onto specific errors.
<br>
<p>1.1.4 :
<br>
occasionally starts, occasionally gives the error:
<br>
&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>1.1.5 :
<br>
works fine
<br>
<p>1.2.3 :
<br>
[node041:04866] pls:tm: failed to poll for a spawned proc, return
<br>
status = 17002
<br>
[node041:04866] [0,0,0] ORTE_ERROR_LOG: In errno in file rmgr_urm.c at
<br>
line 462
<br>
[node041:04866] mpirun: spawn failed with errno=-11
<br>
<p>&nbsp;Kostya
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Building a website is a piece of cake. Yahoo! Small Business gives you all the tools to get online.
<br>
<a href="http://smallbusiness.yahoo.com/webhosting">http://smallbusiness.yahoo.com/webhosting</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<li><strong>Previous message:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
<li><strong>Reply:</strong> <a href="3726.php">Ralph H Castain: "Re: [OMPI users] OpenMPI start up problems"</a>
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
