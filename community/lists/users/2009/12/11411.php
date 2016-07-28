<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 10:13:44 2009" -->
<!-- isoreceived="20091204151344" -->
<!-- sent="Fri, 4 Dec 2009 08:13:20 -0700" -->
<!-- isosent="20091204151320" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="dcf611bd0912040713i5d85f922kfbab67c6755f7a62_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="62BA3FD3-009C-414D-AE29-F767A191369E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 10:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 4, 2009 at 08:03, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is polling at the barrier. This is done aggressively by default for
</span><br>
<span class="quotelev1">&gt; performance. You can tell it to be less aggressive if you want via the
</span><br>
<span class="quotelev1">&gt; yield_when_idle mca param.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
How do I use this parameter correctly? I tried
<br>
<p>/usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 --mca
<br>
mpi_yield_when_idle 1 ./master
<br>
<p>but still get
<br>
<p>nbock    20794  0.0  0.0  53980  2344 pts/2    S+   08:11   0:00
<br>
/usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 --mca
<br>
mpi_yield_when_idle 1 ./master
<br>
nbock    20795 96.7  0.0 159096  3896 pts/2    R+   08:11   1:10 ./master
<br>
nbock    20796  0.0  0.0 158960  3804 pts/2    S+   08:11   0:00 ./master
<br>
nbock    20797  0.0  0.0 158960  3804 pts/2    S+   08:11   0:00 ./master
<br>
nbock    20813 88.1  0.0 158964  3892 pts/2    R+   08:12   0:08 ./slave
<br>
arg1 arg2
<br>
nbock    20814 86.9  0.0 158964  3908 pts/2    R+   08:12   0:08 ./slave
<br>
arg1 arg2
<br>
nbock    20815 87.5  0.0 158964  3900 pts/2    R+   08:12   0:08 ./slave
<br>
arg1 arg2
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
