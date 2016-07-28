<?
$subject_val = "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 09:44:02 2011" -->
<!-- isoreceived="20110221144402" -->
<!-- sent="Mon, 21 Feb 2011 07:43:54 -0700" -->
<!-- isosent="20110221144354" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]" -->
<!-- id="972E5E93-D062-4263-B790-0491B6C9902F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DAB0EDA5A8DE3647BD128F3BBA2BDB4105102A53_at_TITANIA.ansto.gov.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 09:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="15665.php">DOHERTY, Greg: "[OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="15665.php">DOHERTY, Greg: "[OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simplest soln: add -bynode to your mpirun cmd line
<br>
<p><p>On Feb 20, 2011, at 10:50 PM, DOHERTY, Greg wrote:
<br>
<p><span class="quotelev1">&gt; In order to be able to checkpoint openmpi jobs with blcr, we have
</span><br>
<span class="quotelev1">&gt; configured openmpi as follows 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/data1/packages/openmpi/1.5.1-blcr-without-tm
</span><br>
<span class="quotelev1">&gt; --disable-openib-connectx-xrc --disable-openib-rdmacm --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --enable-ft-thread --with-blcr=/usr
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/usr/include --without-tm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When used in conjunction with torque2.5.3, we are able to start the
</span><br>
<span class="quotelev1">&gt; following job with 8 cores on one node, but if we try to start the same
</span><br>
<span class="quotelev1">&gt; job with 4 cores on each of two nodes, the job starts 4 cores on the
</span><br>
<span class="quotelev1">&gt; primary node, but not the remaining 4 cores on the second node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat PBStest
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -c enabled
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=25:00:00
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt; #PBS -m ae
</span><br>
<span class="quotelev1">&gt; #PBS -M gdz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; #PBS -N Prob8
</span><br>
<span class="quotelev1">&gt; #PBS -r n
</span><br>
<span class="quotelev1">&gt; #PBS -q blcrq
</span><br>
<span class="quotelev1">&gt; source /etc/profile.d/00-modules.sh
</span><br>
<span class="quotelev1">&gt; module load mpi/openmpi_1.5-blcr-without-tm
</span><br>
<span class="quotelev1">&gt; NN=`cat $PBS_NODEFILE | wc -l`
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE &gt; hostfile
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; pwd
</span><br>
<span class="quotelev1">&gt; echo &quot;NN = $NN &quot;
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr  -machinefile hostfile  ex5mpi  testData   
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The hostfile correctly lists the primary node 4 times, and then the
</span><br>
<span class="quotelev1">&gt; second node 4 times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When openmpi is built --with-tm, which is the default if --without-tm is
</span><br>
<span class="quotelev1">&gt; not specified, the job correctly starts on the 8 cores spread across the
</span><br>
<span class="quotelev1">&gt; 4 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; blcr needs cr_mpirun to start the job without torque support to be able
</span><br>
<span class="quotelev1">&gt; to checkpoint the mpi job correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is whether it is possible for the script above to be
</span><br>
<span class="quotelev1">&gt; modified in order to start on multiple nodes if openmpi has been built
</span><br>
<span class="quotelev1">&gt; with --without-tm and, if so, what needs to be added or deleted from the
</span><br>
<span class="quotelev1">&gt; script?
</span><br>
<span class="quotelev1">&gt; I have tried -mca plm ^tm with openmpi built --with-tm which also will
</span><br>
<span class="quotelev1">&gt; not start the second 4  mpi ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions gratefully accepted.
</span><br>
<span class="quotelev1">&gt; Greg Doherty
</span><br>
<span class="quotelev1">&gt; ANSTO 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="15665.php">DOHERTY, Greg: "[OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="15665.php">DOHERTY, Greg: "[OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
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
