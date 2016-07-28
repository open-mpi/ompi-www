<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 17:51:27 2014" -->
<!-- isoreceived="20140303225127" -->
<!-- sent="Mon, 3 Mar 2014 22:51:24 +0000" -->
<!-- isosent="20140303225124" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="06648C61-B179-4324-807B-34B8A40BEDAF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D67303F39678724DA65819E042CB369892A81D0898_at_EXC2.ad.colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 17:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23752.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23748.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23752.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23752.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2014, at 1:48 PM, Beichuan Yan &lt;beichuan.yan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1. After sysadmin installed libibverbs-devel package, I build Open MPI 1.7.4 successfully with the command:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/work4/projects/openmpi/openmpi-1.7.4-gcc-compilers-4.7.3 --with-tm=/opt/pbs/default --with-verbs=/hafs_x86_64/devel/usr --with-verbs-libdir=/hafs_x86_64/devel/usr/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Then I rebuild and run my job in hybrid MPI/OPENMP mode: each compute node only runs 1 process (this 1 process runs 16 OPENMP threads), it can get initialized and run well each time with $TCP setting as follows, this is great:
</span><br>
<span class="quotelev1">&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev1">&gt; mpirun $TCP -np 16 -hostfile $PBS_NODEFILE ./paraEllip3d input.txt
</span><br>
<p>If you're using the native verbs API, you don't need that TCP clause.
<br>
<p>Also, if you're running in a PBS job, you don't need the -hostfile clause.  And if you're running one process per core in the allocated PBS job, you can skip the -np clause, too.  You should be able to run with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun ./paraEllip3d input.txt
<br>
<p>If you want one process per server, then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np &lt;num_servers&gt; --map-by node ./paraEliip3d input.txt
<br>
<p><span class="quotelev1">&gt; 3. Then I test pure-MPI mode: OPENMP is turned off, and each compute node runs 16 processes (clearly shared-memory of MPI is used). Four combinations of &quot;TMPDIR&quot; and &quot;TCP&quot; are tested:
</span><br>
<span class="quotelev1">&gt; case 1:
</span><br>
<span class="quotelev1">&gt; #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev1">&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev1">&gt; mpirun $TCP -np 64 -npernode 16 -hostfile $PBS_NODEFILE ./paraEllip3d input.txt
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; Start Prologue v2.5 Mon Mar  3 15:47:16 EST 2014
</span><br>
<span class="quotelev1">&gt; End Prologue v2.5 Mon Mar  3 15:47:16 EST 2014
</span><br>
<span class="quotelev1">&gt; -bash: line 1: 448597 Terminated              /var/spool/PBS/mom_priv/jobs/602244.service12.SC
</span><br>
<span class="quotelev1">&gt; Start Epilogue v2.5 Mon Mar  3 15:50:51 EST 2014
</span><br>
<span class="quotelev1">&gt; Statistics  cpupercent=0,cput=00:00:00,mem=7028kb,ncpus=128,vmem=495768kb,walltime=00:03:24
</span><br>
<span class="quotelev1">&gt; End Epilogue v2.5 Mon Mar  3 15:50:52 EST 2014
</span><br>
<p>It looks like you have two general cases:
<br>
<p>1. The job fails for no apparent reason (like above), or
<br>
2. The job complains that your TMPDIR is on a shared filesystem
<br>
<p>Right?
<br>
<p>I think the real issue, then, is to figure out why your jobs are failing with no output.
<br>
<p>Is there anything in the stderr output?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23752.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23748.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23752.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23752.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
