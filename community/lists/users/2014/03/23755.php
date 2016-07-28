<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 19:11:56 2014" -->
<!-- isoreceived="20140304001156" -->
<!-- sent="Mon, 03 Mar 2014 19:11:55 -0500" -->
<!-- isosent="20140304001155" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="53151A4B.4060407_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A1598745-2887-4C64-A651-38EC7412ACA9_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 19:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23756.php">Filippo Spiga: "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Previous message:</strong> <a href="23754.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>If I remember right, there were issues in the past with setting TMPDIR
<br>
on an NFS share.  Maybe the same problem happens on Lustre?
<br>
<p><a href="http://arc.liv.ac.uk/pipermail/gridengine-users/2009-November/027767.html">http://arc.liv.ac.uk/pipermail/gridengine-users/2009-November/027767.html</a>
<br>
<p>FWIW, we leave it to the default local /tmp, and it works.
<br>
<p>Gus Correa
<br>
<p>On 03/03/2014 06:57 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; How about setting TMPDIR to a local filesystem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2014, at 3:43 PM, Beichuan Yan&lt;beichuan.yan_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree there are two cases for pure-MPI mode: 1. Job fails with no apparent reason;  2 job complains shared-memory file on network file system, which can be resolved by &quot; export TMPDIR=/home/yanb/tmp&quot;, /home/yanb/tmp is my local directory. The default TMPDIR points to a Lustre directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no any other output. I checked my job with &quot;qstat -n&quot; and found that processes were actually not started on compute nodes even though PBS Pro has &quot;started&quot; my job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Then I test pure-MPI mode: OPENMP is turned off, and each compute node runs 16 processes (clearly shared-memory of MPI is used). Four combinations of &quot;TMPDIR&quot; and &quot;TCP&quot; are tested:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun $TCP -np 64 -npernode 16 -hostfile $PBS_NODEFILE ./paraEllip3d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; input.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start Prologue v2.5 Mon Mar  3 15:47:16 EST 2014 End Prologue v2.5 Mon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mar  3 15:47:16 EST 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash: line 1: 448597 Terminated              /var/spool/PBS/mom_priv/jobs/602244.service12.SC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start Epilogue v2.5 Mon Mar  3 15:50:51 EST 2014 Statistics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpupercent=0,cput=00:00:00,mem=7028kb,ncpus=128,vmem=495768kb,walltime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =00:03:24 End Epilogue v2.5 Mon Mar  3 15:50:52 EST 2014
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you have two general cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. The job fails for no apparent reason (like above), or 2. The job complains that your TMPDIR is on a shared filesystem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the real issue, then, is to figure out why your jobs are failing with no output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything in the stderr output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23756.php">Filippo Spiga: "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Previous message:</strong> <a href="23754.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23753.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
