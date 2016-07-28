<?
$subject_val = "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 10:23:31 2013" -->
<!-- isoreceived="20131127152331" -->
<!-- sent="Wed, 27 Nov 2013 08:23:30 -0700" -->
<!-- isosent="20131127152330" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
<!-- id="CAMD57odhxePS5fkrjJAqsqvrs-tfNV+qvn=sNZC0+kTCwBoi3g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFA4E7679F.E4DAF2D4-ONC1257C30.004711A7-C1257C30.0048615B_at_se.abb.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 10:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>In reply to:</strong> <a href="23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23098.php">Gus Correa: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23098.php">Gus Correa: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you wanting to run the solvers on different nodes within the
<br>
allocation? Or on different cores across all nodes?
<br>
<p>For different nodes, you can just use -host to specify which nodes you want
<br>
that specific mpirun to use, or a hostfile should also be fine. The FAQ's
<br>
comment was aimed at people who were giving us the PBS_NODEFILE as the
<br>
hostfile - which could confuse older versions of OMPI into using the rsh
<br>
launcher instead of Torque. Remember that we have the relative node syntax
<br>
so you don't actually have to name the nodes - helps if you want to execute
<br>
batch scripts and won't know the node names in advance.
<br>
<p>For different cores across all nodes, you would need to use some binding
<br>
trickery that may not be in the 1.4 series, so you might need to update to
<br>
the 1.6 series. You have two options: (a) have Torque bind your mpirun to
<br>
specific cores (I believe it can do that), or (b) use --slot-list to
<br>
specify which cores that particular mpirun is to use. You can then separate
<br>
the two solvers but still run on all the nodes, if that is of concern.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p>On Wed, Nov 27, 2013 at 6:10 AM, &lt;Ola.Widlund_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have an in-house application where we run two solvers in a loosely
</span><br>
<span class="quotelev1">&gt; coupled manner: The first solver runs a timestep, then the second solver
</span><br>
<span class="quotelev1">&gt; does work on the same timestep, etc. As the two solvers never execute at
</span><br>
<span class="quotelev1">&gt; the same time, we would like to run the two solvers in the same allocation
</span><br>
<span class="quotelev1">&gt; (launching mpirun once for each of them). RAM is not an issue, so there
</span><br>
<span class="quotelev1">&gt; should not be any risk of excessive swapping degrading performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use openmpi-1.4.5 compiled with torque integration. The torque
</span><br>
<span class="quotelev1">&gt; integration means we do not give a hostfile to mpirun, it will itself query
</span><br>
<span class="quotelev1">&gt; torque for the allocation info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we force one of the solvers to run in a *subset* of the full
</span><br>
<span class="quotelev1">&gt; allocation? How do we do that? I read in the FAQ that providing a hostfile
</span><br>
<span class="quotelev1">&gt; to mpirun in this case (when it's not needed due to torque integration)
</span><br>
<span class="quotelev1">&gt; would cause a lot of problems...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ola
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23092/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>In reply to:</strong> <a href="23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23098.php">Gus Correa: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23098.php">Gus Correa: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
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
