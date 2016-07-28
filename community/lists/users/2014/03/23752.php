<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 18:43:02 2014" -->
<!-- isoreceived="20140303234302" -->
<!-- sent="Mon, 3 Mar 2014 16:43:08 -0700" -->
<!-- isosent="20140303234308" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A81D08B3_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="06648C61-B179-4324-807B-34B8A40BEDAF_at_cisco.com" -->
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
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 18:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23751.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23751.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree there are two cases for pure-MPI mode: 1. Job fails with no apparent reason;  2 job complains shared-memory file on network file system, which can be resolved by &quot; export TMPDIR=/home/yanb/tmp&quot;, /home/yanb/tmp is my local directory. The default TMPDIR points to a Lustre directory.
<br>
<p>There is no any other output. I checked my job with &quot;qstat -n&quot; and found that processes were actually not started on compute nodes even though PBS Pro has &quot;started&quot; my job.
<br>
<p>Beichuan
<br>
<p><span class="quotelev1">&gt; 3. Then I test pure-MPI mode: OPENMP is turned off, and each compute node runs 16 processes (clearly shared-memory of MPI is used). Four combinations of &quot;TMPDIR&quot; and &quot;TCP&quot; are tested:
</span><br>
<span class="quotelev1">&gt; case 1:
</span><br>
<span class="quotelev1">&gt; #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev1">&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev1">&gt; mpirun $TCP -np 64 -npernode 16 -hostfile $PBS_NODEFILE ./paraEllip3d 
</span><br>
<span class="quotelev1">&gt; input.txt
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; Start Prologue v2.5 Mon Mar  3 15:47:16 EST 2014 End Prologue v2.5 Mon 
</span><br>
<span class="quotelev1">&gt; Mar  3 15:47:16 EST 2014
</span><br>
<span class="quotelev1">&gt; -bash: line 1: 448597 Terminated              /var/spool/PBS/mom_priv/jobs/602244.service12.SC
</span><br>
<span class="quotelev1">&gt; Start Epilogue v2.5 Mon Mar  3 15:50:51 EST 2014 Statistics  
</span><br>
<span class="quotelev1">&gt; cpupercent=0,cput=00:00:00,mem=7028kb,ncpus=128,vmem=495768kb,walltime
</span><br>
<span class="quotelev1">&gt; =00:03:24 End Epilogue v2.5 Mon Mar  3 15:50:52 EST 2014
</span><br>
<p>It looks like you have two general cases:
<br>
<p>1. The job fails for no apparent reason (like above), or 2. The job complains that your TMPDIR is on a shared filesystem
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23751.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23751.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
