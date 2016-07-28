<?
$subject_val = "[OMPI users] openmpi still not works";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 15:27:41 2009" -->
<!-- isoreceived="20090930192741" -->
<!-- sent="Wed, 30 Sep 2009 22:27:31 +0300" -->
<!-- isosent="20090930192731" -->
<!-- name="worldeb_at_[hidden]" -->
<!-- email="worldeb_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi still not works" -->
<!-- id="E1Mt4pn-000ByE-U6_at_ffe11.ukr.net" -->
<!-- charset="windows-1251" -->
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
<strong>Subject:</strong> [OMPI users] openmpi still not works<br>
<strong>From:</strong> <a href="mailto:worldeb_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi%20still%20not%20works"><em>worldeb_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-30 15:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Previous message:</strong> <a href="10832.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Reply:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi folks,
<br>
<p>I am misunderstanding with OpenMPI. I cannot run jobs compiled by OpenMPI on several nodes.
<br>
It is running only on the one node. But also in this case jobs are not finished sometimes. Its make 
<br>
output and hang.
<br>
But other MPI implementations (mpich, mpich2, mvapich1, mvapich2) work perfectly during one
<br>
year already.
<br>
<p>I compiled OpenMPI like this:
<br>
./configure --prefix=/opt/openmpi-133 --enable-mpi-threads --enable-progress-threads --with-tm=/opt/torque --enable-mpirun-prefix-by-default
<br>
and installed it to the some directory an all nodes.
<br>
<p>I already explained my problem here:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/09/10815.php">http://www.open-mpi.org/community/lists/users/2009/09/10815.php</a>
<br>
<p>I try to exclude anything (use default config) and submit jobs directly with different options for verbosity which was proposed in FAQ.
<br>
<p>So, what is the problem? What tests can I run for finding solution?
<br>
<p>Thanx.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Previous message:</strong> <a href="10832.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
<li><strong>Reply:</strong> <a href="10834.php">Ralph Castain: "Re: [OMPI users] openmpi still not works"</a>
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
