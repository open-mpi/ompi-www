<?
$subject_val = "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 03:28:56 2012" -->
<!-- isoreceived="20120621072856" -->
<!-- sent="Thu, 21 Jun 2012 10:28:42 +0300" -->
<!-- isosent="20120621072842" -->
<!-- name="Ufuk Utku Turuncoglu (BE)" -->
<!-- email="u.utku.turuncoglu_at_[hidden]" -->
<!-- subject="[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..." -->
<!-- id="4FE2CD2A.8040307_at_be.itu.edu.tr" -->
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
<strong>Subject:</strong> [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ...<br>
<strong>From:</strong> Ufuk Utku Turuncoglu (BE) (<em>u.utku.turuncoglu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 03:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
<li><strong>Previous message:</strong> <a href="19639.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
<li><strong>Reply:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I try to submit two MPI jobs using single OpenMPI mpirun command 
<br>
(command can be seen in job submission script). To test this 
<br>
configuration, i compiled simple mpihello application and run. The 
<br>
problem is that each distinct mpihello jobs (run1 and run2) uses same 
<br>
MPI_COMM_WORLD and rank of the process goes like following,
<br>
<p>--- out1 (comes from first mpihello.x) ---
<br>
&nbsp;&nbsp;node          17 : Hello world
<br>
&nbsp;&nbsp;node          28 : Hello world
<br>
...
<br>
...
<br>
<p>--- out2 (comes from second mpihello.x) ---
<br>
&nbsp;&nbsp;node         115 : Hello world
<br>
&nbsp;&nbsp;node         113 : Hello world
<br>
&nbsp;&nbsp;node          74 : Hello world
<br>
...
<br>
...
<br>
<p>If the MPI_COMM_WORLD is created separately for each jobs then the node 
<br>
number (or id or rank) must be start from 0 until 63 in each log file 
<br>
but this is not the case. So, in the second one the node numbers start 
<br>
from 64 to 131. If Fortran application uses MPI_COMM_SIZE and 
<br>
MPI_COMM_RANK to get the total number of processor (in this case it is 
<br>
132), then rank and total number of processor will be wrong. I think 
<br>
mpirun is not smart enough in this case. What do you think? Any 
<br>
suggestions can help.
<br>
<p>PS: I am using OpenMPI version 1.5.3 compiled with Intel 12.0.4 compilers.
<br>
<p>Regards,
<br>
<p>--ufuk
<br>
<p><p>*--- job submission script (in OpenPBS) ---*
<br>
<p>#!/bin/bash
<br>
#PBS -l walltime=01:00:00
<br>
#PBS -l nodes=11:ppn=12
<br>
#PBS -N both
<br>
#PBS -q esp
<br>
<p># load modules
<br>
. /etc/profile.d/modules.sh
<br>
module load openmpi/1.5.3/intel/2011
<br>
module load netcdf/4.1.1/intel/11.1
<br>
<p># parameters
<br>
WRKDIR1=/home/netapp/clima-users/users/uturunco/CAS/run.lake/BOTH
<br>
WRKDIR2=/home/netapp/clima-users/users/uturunco/CAS/run.lake/BOTH
<br>
<p># create node files
<br>
head -n 64 $PBS_NODEFILE &gt;&amp; $WRKDIR1/nodes1.txt
<br>
tail -n 64 $PBS_NODEFILE &gt;&amp; $WRKDIR2/nodes2.txt
<br>
<p># submit jobs
<br>
mpirun -np `cat $WRKDIR1/nodes1.txt | wc -l` -machinefile 
<br>
$WRKDIR1/nodes1.txt -wd $WRKDIR1 ./run1.sh : -np `cat 
<br>
$WRKDIR2/nodes2.txt | wc -l` -machinefile $WRKDIR2/nodes2.txt -wd 
<br>
$WRKDIR2 ./run2.sh
<br>
<p>*--- end of job submission script ---
<br>
<p>---**script run1.sh ---*
<br>
<p>#!/bin/sh
<br>
./mpihello.x &gt;&gt; out1.txt
<br>
<p>*--- end of **script run1.sh ---
<br>
<p>**--- script run2.sh ---*
<br>
<p>#!/bin/sh
<br>
./mpihello.x &gt;&gt; out2.txt
<br>
<p>*--- end of **script run2.sh ---*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
<li><strong>Previous message:</strong> <a href="19639.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
<li><strong>Reply:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
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
