<?
$subject_val = "Re: [OMPI users] openmpi still not works";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 15:34:22 2009" -->
<!-- isoreceived="20090930193422" -->
<!-- sent="Wed, 30 Sep 2009 13:34:13 -0600" -->
<!-- isosent="20090930193413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi still not works" -->
<!-- id="F855163A-8D9A-4FEE-8FEA-4266B2AFA5E7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1Mt4pn-000ByE-U6_at_ffe11.ukr.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi still not works<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 15:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10835.php">worldeb_at_[hidden]: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Previous message:</strong> <a href="10833.php">worldeb_at_[hidden]: "[OMPI users] openmpi still not works"</a>
<li><strong>In reply to:</strong> <a href="10833.php">worldeb_at_[hidden]: "[OMPI users] openmpi still not works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10835.php">worldeb_at_[hidden]: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Reply:</strong> <a href="10835.php">worldeb_at_[hidden]: "Re: [OMPI users] openmpi still not works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing immediately stands out - you should never -enable-progress- 
<br>
threads. That is an experimental option that certainly does not work  
<br>
at this time.
<br>
<p><p>On Sep 30, 2009, at 1:27 PM, worldeb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am misunderstanding with OpenMPI. I cannot run jobs compiled by  
</span><br>
<span class="quotelev1">&gt; OpenMPI on several nodes.
</span><br>
<span class="quotelev1">&gt; It is running only on the one node. But also in this case jobs are  
</span><br>
<span class="quotelev1">&gt; not finished sometimes. Its make
</span><br>
<span class="quotelev1">&gt; output and hang.
</span><br>
<span class="quotelev1">&gt; But other MPI implementations (mpich, mpich2, mvapich1, mvapich2)  
</span><br>
<span class="quotelev1">&gt; work perfectly during one
</span><br>
<span class="quotelev1">&gt; year already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI like this:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-133 --enable-mpi-threads --enable- 
</span><br>
<span class="quotelev1">&gt; progress-threads --with-tm=/opt/torque --enable-mpirun-prefix-by- 
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; and installed it to the some directory an all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already explained my problem here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/09/10815.php">http://www.open-mpi.org/community/lists/users/2009/09/10815.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to exclude anything (use default config) and submit jobs  
</span><br>
<span class="quotelev1">&gt; directly with different options for verbosity which was proposed in  
</span><br>
<span class="quotelev1">&gt; FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what is the problem? What tests can I run for finding solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx.
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
<li><strong>Next message:</strong> <a href="10835.php">worldeb_at_[hidden]: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Previous message:</strong> <a href="10833.php">worldeb_at_[hidden]: "[OMPI users] openmpi still not works"</a>
<li><strong>In reply to:</strong> <a href="10833.php">worldeb_at_[hidden]: "[OMPI users] openmpi still not works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10835.php">worldeb_at_[hidden]: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Reply:</strong> <a href="10835.php">worldeb_at_[hidden]: "Re: [OMPI users] openmpi still not works"</a>
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
