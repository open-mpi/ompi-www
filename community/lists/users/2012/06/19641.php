<?
$subject_val = "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 04:43:39 2012" -->
<!-- isoreceived="20120621084339" -->
<!-- sent="Thu, 21 Jun 2012 08:43:34 +0000" -->
<!-- isosent="20120621084334" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..." -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9030B34C7_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FE2CD2A.8040307_at_be.itu.edu.tr" -->
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
<strong>Subject:</strong> Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ...<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 04:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19642.php">Siegmar Gross: "[OMPI users] error in osc_rdma_data_mave.c"</a>
<li><strong>Previous message:</strong> <a href="19640.php">Ufuk Utku Turuncoglu (BE): "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..."</a>
<li><strong>In reply to:</strong> <a href="19640.php">Ufuk Utku Turuncoglu (BE): "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think you misunderstood what a MIMD launch with mpirun/mpiexec actually
<br>
does.
<br>
<p>mpirun -np X prog1 : -np Y prog2 
<br>
<p>starts a *single* MPI job consisting of X+Y processes in total of which the
<br>
X processes execute prog1 and Y processes execute prog2 but they still
<br>
belong to the same MPI job and hence share the same rank space and
<br>
MPI_COMM_WORLD. Ranks 0 to X-1 execute prog1 and ranks X to Y-1 - prog2.
<br>
<p>Cheers,
<br>
<p>Hristo
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ufuk Utku Turuncoglu (BE)
<br>
Sent: Thursday, June 21, 2012 9:29 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD
<br>
issue ...
<br>
<p>Hi, 
<br>
<p>I try to submit two MPI jobs using single OpenMPI mpirun command (command
<br>
can be seen in job submission script). To test this configuration, i
<br>
compiled simple mpihello application and run. The problem is that each
<br>
distinct mpihello jobs (run1 and run2) uses same MPI_COMM_WORLD and rank of
<br>
the process goes like following,
<br>
&#160;
<br>
--- out1 (comes from first mpihello.x) --- 
<br>
&#160;node&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 17 : Hello world 
<br>
&#160;node&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 28 : Hello world 
<br>
... 
<br>
... 
<br>
<p>--- out2 (comes from second mpihello.x) --- 
<br>
&#160;node&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 115 : Hello world 
<br>
&#160;node&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 113 : Hello world 
<br>
&#160;node&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 74 : Hello world 
<br>
... 
<br>
... 
<br>
<p>If the MPI_COMM_WORLD is created separately for each jobs then the node
<br>
number (or id or rank) must be start from 0 until 63 in each log file but
<br>
this is not the case. So, in the second one the node numbers start from 64
<br>
to 131. If Fortran application uses MPI_COMM_SIZE and MPI_COMM_RANK to get
<br>
the total number of processor (in this case it is 132), then rank and total
<br>
number of processor will be wrong. I think mpirun is not smart enough in
<br>
this case. What do you think? Any suggestions can help.
<br>
<p>PS: I am using OpenMPI version 1.5.3 compiled with Intel 12.0.4 compilers.
<br>
<p>Regards,
<br>
<p>--ufuk
<br>
<p><p>--- job submission script (in OpenPBS) ---
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
$WRKDIR1/nodes1.txt -wd $WRKDIR1 ./run1.sh : -np `cat $WRKDIR2/nodes2.txt |
<br>
wc -l` -machinefile $WRKDIR2/nodes2.txt -wd $WRKDIR2 ./run2.sh
<br>
<p>--- end of job submission script ---
<br>
<p>--- script run1.sh ---
<br>
<p>#!/bin/sh
<br>
./mpihello.x &gt;&gt; out1.txt
<br>
<p>--- end of script run1.sh ---
<br>
<p>--- script run2.sh ---
<br>
<p>#!/bin/sh
<br>
./mpihello.x &gt;&gt; out2.txt
<br>
<p>--- end of script run2.sh ---
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19641/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19642.php">Siegmar Gross: "[OMPI users] error in osc_rdma_data_mave.c"</a>
<li><strong>Previous message:</strong> <a href="19640.php">Ufuk Utku Turuncoglu (BE): "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..."</a>
<li><strong>In reply to:</strong> <a href="19640.php">Ufuk Utku Turuncoglu (BE): "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..."</a>
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
