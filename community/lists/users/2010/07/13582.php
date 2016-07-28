<?
$subject_val = "Re: [OMPI users] hpw to log output of spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 04:38:59 2010" -->
<!-- isoreceived="20100712083859" -->
<!-- sent="Mon, 12 Jul 2010 02:38:49 -0600" -->
<!-- isosent="20100712083849" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hpw to log output of spawned processes" -->
<!-- id="6296A5D5-6565-4047-B946-47C16DAE2F7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikcGcoCjN05jSHjeyx08HnhDjE_2LvIeSPb4KYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] hpw to log output of spawned processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 04:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13583.php">jody: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Previous message:</strong> <a href="13581.php">jody: "[OMPI users] hpw to log output of spawned processes"</a>
<li><strong>In reply to:</strong> <a href="13581.php">jody: "[OMPI users] hpw to log output of spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13583.php">jody: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Reply:</strong> <a href="13583.php">jody: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2010, at 2:17 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a master process which spawns a number of workers of which i'd
</span><br>
<span class="quotelev1">&gt; like to  save the output in separate files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually i use the '-output-filename' option in such a situation.
</span><br>
<span class="quotelev1">&gt; However, if i do
</span><br>
<span class="quotelev1">&gt;  mpirun -np 1 -output-filename work_out master arg1 arg2
</span><br>
<span class="quotelev1">&gt; all the files work_out.1, work_out.2, ... are ok,
</span><br>
<span class="quotelev1">&gt; but work_out.0 contains both outputs of the master process(process 0
</span><br>
<span class="quotelev1">&gt; in COMM_WORLD) and
</span><br>
<span class="quotelev1">&gt; of the first worker (process 0 in the communicator of the spawned processes).
</span><br>
<p>Crud - that's a bug.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried the '-tag-output' option, but this involves several
</span><br>
<span class="quotelev1">&gt; additional steps,
</span><br>
<span class="quotelev1">&gt; because i have to separate the combined outputs
</span><br>
<span class="quotelev1">&gt;  mpirun -np 1 -tag-output  master arg1 arg2 &gt; total.out
</span><br>
<span class="quotelev1">&gt;  grep &quot;\[1,0\]&quot; total.out | sed 's/\[1,0\]&lt;stdout&gt;://' &gt; master.out
</span><br>
<span class="quotelev1">&gt;  grep &quot;\[2,0\]&quot; outA | sed 's/\[2,0\]&lt;stdout&gt;://' &gt; worker_0.out
</span><br>
<span class="quotelev1">&gt;  grep &quot;\[2,1\]&quot; outA | sed 's/\[2,1\]&lt;stdout&gt;://' &gt; worker_1.out
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; Of course, this could be wrapped in a script,  but it is a bit cumbersome
</span><br>
<span class="quotelev1">&gt; (and i am not sure if the job-ids are always &quot;1&quot; and &quot;2&quot;) ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some simpler way to separate the output of the two streams?
</span><br>
<p>Not really.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If not, would it be possible to extend the -output-filename option i
</span><br>
<span class="quotelev1">&gt; such a way that it
</span><br>
<span class="quotelev1">&gt; would also combine job-id and rank withe the output file:
</span><br>
<span class="quotelev1">&gt;  work_out.1.0
</span><br>
<span class="quotelev1">&gt; for the master's output, and
</span><br>
<span class="quotelev1">&gt;  work_out.2.0
</span><br>
<span class="quotelev1">&gt;  work_out.2.1
</span><br>
<span class="quotelev1">&gt;  work_out.2.2
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; for the worker's output?
</span><br>
<p>Yeah, I can do that - will put something together. Are you doing this in the 1.4 series?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="13583.php">jody: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Previous message:</strong> <a href="13581.php">jody: "[OMPI users] hpw to log output of spawned processes"</a>
<li><strong>In reply to:</strong> <a href="13581.php">jody: "[OMPI users] hpw to log output of spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13583.php">jody: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Reply:</strong> <a href="13583.php">jody: "Re: [OMPI users] hpw to log output of spawned processes"</a>
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
