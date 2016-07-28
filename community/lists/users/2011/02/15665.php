<?
$subject_val = "[OMPI users] --without-tm [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 00:52:06 2011" -->
<!-- isoreceived="20110221055206" -->
<!-- sent="Mon, 21 Feb 2011 16:50:37 +1100" -->
<!-- isosent="20110221055037" -->
<!-- name="DOHERTY, Greg" -->
<!-- email="gdz_at_[hidden]" -->
<!-- subject="[OMPI users] --without-tm [SEC=UNCLASSIFIED]" -->
<!-- id="DAB0EDA5A8DE3647BD128F3BBA2BDB4105102A53_at_TITANIA.ansto.gov.au" -->
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
<strong>Subject:</strong> [OMPI users] --without-tm [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> DOHERTY, Greg (<em>gdz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 00:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15666.php">Ralph Castain: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15666.php">Ralph Castain: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="15666.php">Ralph Castain: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In order to be able to checkpoint openmpi jobs with blcr, we have
<br>
configured openmpi as follows 
<br>
<p>./configure --prefix=/data1/packages/openmpi/1.5.1-blcr-without-tm
<br>
--disable-openib-connectx-xrc --disable-openib-rdmacm --with-ft=cr
<br>
--enable-mpi-threads --enable-ft-thread --with-blcr=/usr
<br>
--with-blcr-libdir=/usr/include --without-tm
<br>
<p>When used in conjunction with torque2.5.3, we are able to start the
<br>
following job with 8 cores on one node, but if we try to start the same
<br>
job with 4 cores on each of two nodes, the job starts 4 cores on the
<br>
primary node, but not the remaining 4 cores on the second node.
<br>
<p>$ cat PBStest
<br>
#!/bin/sh
<br>
#PBS -c enabled
<br>
#PBS -l walltime=25:00:00
<br>
#PBS -l nodes=2:ppn=4
<br>
#PBS -m ae
<br>
#PBS -M gdz_at_[hidden]
<br>
#PBS -N Prob8
<br>
#PBS -r n
<br>
#PBS -q blcrq
<br>
source /etc/profile.d/00-modules.sh
<br>
module load mpi/openmpi_1.5-blcr-without-tm
<br>
NN=`cat $PBS_NODEFILE | wc -l`
<br>
cd $PBS_O_WORKDIR
<br>
cat $PBS_NODEFILE &gt; hostfile
<br>
cat $PBS_NODEFILE
<br>
pwd
<br>
echo &quot;NN = $NN &quot;
<br>
date
<br>
which mpirun
<br>
cd $PBS_O_WORKDIR
<br>
mpirun -am ft-enable-cr  -machinefile hostfile  ex5mpi  testData   
<br>
&nbsp;--------------------------------------------------------------
<br>
The hostfile correctly lists the primary node 4 times, and then the
<br>
second node 4 times.
<br>
<p>When openmpi is built --with-tm, which is the default if --without-tm is
<br>
not specified, the job correctly starts on the 8 cores spread across the
<br>
4 nodes.
<br>
<p>blcr needs cr_mpirun to start the job without torque support to be able
<br>
to checkpoint the mpi job correctly.
<br>
<p>My question is whether it is possible for the script above to be
<br>
modified in order to start on multiple nodes if openmpi has been built
<br>
with --without-tm and, if so, what needs to be added or deleted from the
<br>
script?
<br>
I have tried -mca plm ^tm with openmpi built --with-tm which also will
<br>
not start the second 4  mpi ranks.
<br>
<p>Any suggestions gratefully accepted.
<br>
Greg Doherty
<br>
ANSTO 
<br>
<p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15666.php">Ralph Castain: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15666.php">Ralph Castain: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="15666.php">Ralph Castain: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
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
