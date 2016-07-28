<?
$subject_val = "[OMPI users] padb and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 15:20:18 2010" -->
<!-- isoreceived="20100817192018" -->
<!-- sent="Tue, 17 Aug 2010 14:20:03 -0500" -->
<!-- isosent="20100817192003" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI users] padb and openmpi" -->
<!-- id="4C6AE0E3.8040403_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] padb and openmpi<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 15:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14066.php">Ashley Pittman: "Re: [OMPI users] padb and openmpi"</a>
<li><strong>Previous message:</strong> <a href="14064.php">Rick Hullinger: "[OMPI users] Building OpenMPI with DevStudio 2010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14066.php">Ashley Pittman: "Re: [OMPI users] padb and openmpi"</a>
<li><strong>Reply:</strong> <a href="14066.php">Ashley Pittman: "Re: [OMPI users] padb and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to use padb 3.0 to get stack traces on open-mpi / IMB1 runs.  
<br>
While the job is running, I do run this, but get an error:
<br>
<p>[ompi_at_hpc-hn1 ~]$ padb  --show-jobs --config-option rmgr=orte
<br>
65427
<br>
[ompi_at_hpc-hn1 ~]$ padb --all --proc-summary --config-option rmgr=orte
<br>
Warning, failed to locate ranks [0-3]
<br>
Warning, remote process name differs across ranks
<br>
name : ranks
<br>
Warning, remote process state differs across ranks
<br>
state : ranks
<br>
vpid  hostname  pid  vmsize  vmrss  S  uptime  %cpu  lcore  command
<br>
<p>Here is how I start the job:
<br>
<p>[ompi_at_hpc-hn1 ~]$ mpirun -np 4 -host t4,hpc-cn2,hpc-cn3,hpc-cn4 --mca 
<br>
btl openib,sm,self /usr/mpi/gcc/openmpi-1.4.1/tests/IMB-3.2/IMB-MPI1  
<br>
-npmin 4
<br>
<p><p>Any ideas on what I am doing wrong?
<br>
<p><p>Thanks in advance,
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14066.php">Ashley Pittman: "Re: [OMPI users] padb and openmpi"</a>
<li><strong>Previous message:</strong> <a href="14064.php">Rick Hullinger: "[OMPI users] Building OpenMPI with DevStudio 2010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14066.php">Ashley Pittman: "Re: [OMPI users] padb and openmpi"</a>
<li><strong>Reply:</strong> <a href="14066.php">Ashley Pittman: "Re: [OMPI users] padb and openmpi"</a>
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
