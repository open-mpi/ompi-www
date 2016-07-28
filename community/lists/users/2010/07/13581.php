<?
$subject_val = "[OMPI users] hpw to log output of spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 04:17:51 2010" -->
<!-- isoreceived="20100712081751" -->
<!-- sent="Mon, 12 Jul 2010 10:17:44 +0200" -->
<!-- isosent="20100712081744" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] hpw to log output of spawned processes" -->
<!-- id="AANLkTikcGcoCjN05jSHjeyx08HnhDjE_2LvIeSPb4KYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] hpw to log output of spawned processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 04:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13582.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Previous message:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13582.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Reply:</strong> <a href="13582.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have a master process which spawns a number of workers of which i'd
<br>
like to  save the output in separate files.
<br>
<p>Usually i use the '-output-filename' option in such a situation.
<br>
However, if i do
<br>
&nbsp;&nbsp;mpirun -np 1 -output-filename work_out master arg1 arg2
<br>
all the files work_out.1, work_out.2, ... are ok,
<br>
but work_out.0 contains both outputs of the master process(process 0
<br>
in COMM_WORLD) and
<br>
of the first worker (process 0 in the communicator of the spawned processes).
<br>
<p>I also tried the '-tag-output' option, but this involves several
<br>
additional steps,
<br>
because i have to separate the combined outputs
<br>
&nbsp;&nbsp;mpirun -np 1 -tag-output  master arg1 arg2 &gt; total.out
<br>
&nbsp;&nbsp;grep &quot;\[1,0\]&quot; total.out | sed 's/\[1,0\]&lt;stdout&gt;://' &gt; master.out
<br>
&nbsp;&nbsp;grep &quot;\[2,0\]&quot; outA | sed 's/\[2,0\]&lt;stdout&gt;://' &gt; worker_0.out
<br>
&nbsp;&nbsp;grep &quot;\[2,1\]&quot; outA | sed 's/\[2,1\]&lt;stdout&gt;://' &gt; worker_1.out
<br>
&nbsp;&nbsp;...
<br>
Of course, this could be wrapped in a script,  but it is a bit cumbersome
<br>
(and i am not sure if the job-ids are always &quot;1&quot; and &quot;2&quot;) ...
<br>
<p>Is there some simpler way to separate the output of the two streams?
<br>
<p>If not, would it be possible to extend the -output-filename option i
<br>
such a way that it
<br>
would also combine job-id and rank withe the output file:
<br>
&nbsp;&nbsp;work_out.1.0
<br>
for the master's output, and
<br>
&nbsp;&nbsp;work_out.2.0
<br>
&nbsp;&nbsp;work_out.2.1
<br>
&nbsp;&nbsp;work_out.2.2
<br>
&nbsp;&nbsp;...
<br>
for the worker's output?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13582.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Previous message:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13582.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Reply:</strong> <a href="13582.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
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
