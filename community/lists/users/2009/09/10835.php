<?
$subject_val = "Re: [OMPI users] openmpi still not works";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 16:11:44 2009" -->
<!-- isoreceived="20090930201144" -->
<!-- sent="Wed, 30 Sep 2009 23:11:39 +0300" -->
<!-- isosent="20090930201139" -->
<!-- name="worldeb_at_[hidden]" -->
<!-- email="worldeb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi still not works" -->
<!-- id="E1Mt5WV-000NrS-U4_at_ffe1.ukr.net" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="F855163A-8D9A-4FEE-8FEA-4266B2AFA5E7_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:worldeb_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi%20still%20not%20works"><em>worldeb_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-30 16:11:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10836.php">Peter Kjellstrom: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>In reply to:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
&nbsp;Thank a lot Ralph,
<br>
<p>I just recompiled OpenMPi and it is seems to work as I expect.
<br>
So, I now start to make additional tests.
<br>
<p>Thanx again.
<br>
<p><span class="quotelev1">&gt; One thing immediately stands out - you should never -enable-progress-
</span><br>
<span class="quotelev1">&gt; threads. That is an experimental option that certainly does not work
</span><br>
<span class="quotelev1">&gt; at this time.
</span><br>
<p><span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10836.php">Peter Kjellstrom: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>In reply to:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
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
