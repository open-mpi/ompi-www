<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 10:03:34 2009" -->
<!-- isoreceived="20091204150334" -->
<!-- sent="Fri, 4 Dec 2009 08:03:24 -0700" -->
<!-- isosent="20091204150324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes" -->
<!-- id="62BA3FD3-009C-414D-AE29-F767A191369E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd0912040646o30cea884n344cc6efeb76f6fe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 10:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11409.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11409.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2009, at 7:46 AM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when I run the attached example, which spawns a &quot;slave&quot; process with MPI_Comm_spawn(), I see the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nbock    19911  0.0  0.0  53980  2288 pts/0    S+   07:42   0:00 /usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 ./master
</span><br>
<span class="quotelev1">&gt; nbock    19912 92.1  0.0 158964  3868 pts/0    R+   07:42   0:23 ./master
</span><br>
<span class="quotelev1">&gt; nbock    19913  0.0  0.0 158960  3812 pts/0    S+   07:42   0:00 ./master
</span><br>
<span class="quotelev1">&gt; nbock    19914  0.0  0.0 158960  3800 pts/0    S+   07:42   0:00 ./master
</span><br>
<span class="quotelev1">&gt; nbock    19929 91.1  0.0 158964  3896 pts/0    R+   07:42   0:20 ./slave arg1 arg2
</span><br>
<span class="quotelev1">&gt; nbock    19930 95.8  0.0 158964  3900 pts/0    R+   07:42   0:22 ./slave arg1 arg2
</span><br>
<span class="quotelev1">&gt; nbock    19931 94.7  0.0 158964  3896 pts/0    R+   07:42   0:21 ./slave arg1 arg2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The third column is the CPU usage according to top. I notice 3 master processes, which I attribute to the fact that MPI_Comm_spawn really fork()s and then spawns, but that's my uneducated guess.
</span><br>
<p>Ummm....if you look at your cmd line
<br>
<p>/usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 ./master
<br>
<p>&nbsp;you will see that you specified 3 copies of master be run
<br>
<p>:-)
<br>
<p><span class="quotelev1">&gt; What I don't understand is why PID 19912 is using any CPU resources at all. It's supposed to be waiting at the MPI_Barrier() for the slaves to finish. What is PID 19912 doing?
</span><br>
<p>It is polling at the barrier. This is done aggressively by default for performance. You can tell it to be less aggressive if you want via the yield_when_idle mca param.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some more information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux mujo 2.6.31-gentoo-r6 #2 SMP PREEMPT Fri Dec 4 07:08:07 MST 2009 x86_64 Intel(R) Core(TM)2 Quad CPU Q8200 @ 2.33GHz GenuineIntel GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi version 1.3.4
</span><br>
<span class="quotelev1">&gt; gcc version 4.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;master.c&gt;&lt;slave.c&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11409.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11409.php">Nicolas Bock: "[OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11411.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
