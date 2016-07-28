<?
$subject_val = "[OMPI users] mpirun is using one PBS node only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 15:25:14 2009" -->
<!-- isoreceived="20091201202514" -->
<!-- sent="Tue, 1 Dec 2009 20:15:54 +0000" -->
<!-- isosent="20091201201554" -->
<!-- name="Belaid MOA" -->
<!-- email="belaid_moa_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun is using one PBS node only" -->
<!-- id="COL113-W102298CA9F8285EB42B11F4960_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] mpirun is using one PBS node only<br>
<strong>From:</strong> Belaid MOA (<em>belaid_moa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 15:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11322.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
&nbsp;Here is another elementary question. I tried the following steps found in the FAQ section of www.open-mpi.org with a simple hello world example (with PBS/torque):
<br>
&nbsp;$  qsub -l nodes=2 my_script.sh
<br>
<p>my_script.sh is pasted below:
<br>
========================
<br>
#!/bin/sh -l
<br>
#PBS -N helloTest
<br>
#PBS -j eo
<br>
echo `cat $PBS_NODEFILE` # shows two nodes: WN1 WN2
<br>
cd $PBS_O_WORKDIR
<br>
/usr/local/bin/mpirun hello
<br>
========================
<br>
<p>When the job is submitted, only one process is ran. When I add the -n 2 option to the mpirun command,
<br>
two processes are ran but on one node only. Note that  echo `cat $PBS_NODEFILE` outputs 
<br>
the two nodes I am using: WN1 and WN2. 
<br>
<p>The output from ompi_info is shown below:
<br>
<p>$ ompi_info | grep tm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
<p>&nbsp;Any help on why openMPI/mpirun is using only one PBS node is very appreciated.
<br>
<p>Thanks a lot in advance and sorry for bothering you guys with my elementary questions!
<br>
<p>~Belaid.  
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Windows Live: Keep your friends up to date with what you do online.
<br>
<a href="http://go.microsoft.com/?linkid=9691815">http://go.microsoft.com/?linkid=9691815</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Previous message:</strong> <a href="11322.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>Reply:</strong> <a href="11324.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
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
