<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 11:18:46 2006" -->
<!-- isoreceived="20060302161846" -->
<!-- sent="Thu, 02 Mar 2006 17:12:18 +0100" -->
<!-- isosent="20060302161218" -->
<!-- name="Jean Latour" -->
<!-- email="latour_at_[hidden]" -->
<!-- subject="[OMPI users] Spawn and distribution of slaves" -->
<!-- id="44071962.1050600_at_fujitsu.fr" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Jean Latour (<em>latour_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 11:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Reply:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Testing the MPI_Comm_Spawn function of Open MPI version 1.0.1, I have an 
<br>
example that works OK,
<br>
except that it shows that the spawned processes do not follow the 
<br>
&quot;machinefile&quot; setting of processors.
<br>
In this example a master process spawns first 2 processes, then 
<br>
disconnects from them and spawn 2 more
<br>
processes. Running on a Quad Opteron node, all processes are running on 
<br>
the same node, although the
<br>
machinefile specifies that the slaves should run on different nodes.
<br>
<p>&nbsp;With the actual version of OpenMPI is it possible to direct the spawned 
<br>
processes on
<br>
a specific node ? (the node distribution could be given in the 
<br>
&quot;machinefile&quot; file, as with LAM MPI)
<br>
<p>The code (Fortran 90) of this example and makefile is attached as a tar 
<br>
file.
<br>
<p>Thank you very much
<br>
<p>Jean Latour
<br>
<p><p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0752/spawn_connect.tar.gz">spawn_connect.tar.gz</a>
</ul>
<!-- attachment="spawn_connect.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0753.php">Xiaoning (David) Yang: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Adams Samuel D Contr AFRL/HEDR: "[OMPI users] Building OpenMPI with Lahey Fortran 95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>Reply:</strong> <a href="0754.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
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
