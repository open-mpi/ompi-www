<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 10:22:03 2009" -->
<!-- isoreceived="20091204152203" -->
<!-- sent="Fri, 4 Dec 2009 08:21:55 -0700" -->
<!-- isosent="20091204152155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="973D2387-A9C5-42E4-BAD3-65760E71764F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd0912040713i5d85f922kfbab67c6755f7a62_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 10:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You used it correctly. Remember, all that cpu number is telling you is the percentage of use by that process. So bottom line is: we are releasing it as much as we possibly can, but no other process wants to use the cpu, so we go ahead and use it.
<br>
<p>If any other process wanted it, then the percentage would drop and the other proc would take some.
<br>
<p>On Dec 4, 2009, at 8:13 AM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Dec 4, 2009 at 08:03, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is polling at the barrier. This is done aggressively by default for performance. You can tell it to be less aggressive if you want via the yield_when_idle mca param.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do I use this parameter correctly? I tried
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 --mca mpi_yield_when_idle 1 ./master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but still get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nbock    20794  0.0  0.0  53980  2344 pts/2    S+   08:11   0:00 /usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 --mca mpi_yield_when_idle 1 ./master
</span><br>
<span class="quotelev1">&gt; nbock    20795 96.7  0.0 159096  3896 pts/2    R+   08:11   1:10 ./master
</span><br>
<span class="quotelev1">&gt; nbock    20796  0.0  0.0 158960  3804 pts/2    S+   08:11   0:00 ./master
</span><br>
<span class="quotelev1">&gt; nbock    20797  0.0  0.0 158960  3804 pts/2    S+   08:11   0:00 ./master
</span><br>
<span class="quotelev1">&gt; nbock    20813 88.1  0.0 158964  3892 pts/2    R+   08:12   0:08 ./slave arg1 arg2
</span><br>
<span class="quotelev1">&gt; nbock    20814 86.9  0.0 158964  3908 pts/2    R+   08:12   0:08 ./slave arg1 arg2
</span><br>
<span class="quotelev1">&gt; nbock    20815 87.5  0.0 158964  3900 pts/2    R+   08:12   0:08 ./slave arg1 arg2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nick
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11413.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
