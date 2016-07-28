<?
$subject_val = "Re: [OMPI users] hpw to log output of spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 02:51:05 2010" -->
<!-- isoreceived="20100713065105" -->
<!-- sent="Tue, 13 Jul 2010 08:50:58 +0200" -->
<!-- isosent="20100713065058" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hpw to log output of spawned processes" -->
<!-- id="AANLkTinbb46POdFG0VU5VFinoxR5X91wQkN7BiivxVyP_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2291C613-75FD-489F-AF9D-017459F1BB39_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 02:50:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13619.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="13608.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch - it works fine!
<br>
<p>Jody
<br>
<p>On Mon, Jul 12, 2010 at 11:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just so you don't have to wait for 1.4.3 to be released, here is the patch.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2010, at 2:44 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, i'm using 1.4.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 12, 2010 at 10:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 12, 2010, at 2:17 AM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a master process which spawns a number of workers of which i'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like to &#160;save the output in separate files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Usually i use the '-output-filename' option in such a situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, if i do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;mpirun -np 1 -output-filename work_out master arg1 arg2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the files work_out.1, work_out.2, ... are ok,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but work_out.0 contains both outputs of the master process(process 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in COMM_WORLD) and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the first worker (process 0 in the communicator of the spawned processes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Crud - that's a bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried the '-tag-output' option, but this involves several
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional steps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because i have to separate the combined outputs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;mpirun -np 1 -tag-output &#160;master arg1 arg2 &gt; total.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;grep &quot;\[1,0\]&quot; total.out | sed 's/\[1,0\]&lt;stdout&gt;://' &gt; master.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;grep &quot;\[2,0\]&quot; outA | sed 's/\[2,0\]&lt;stdout&gt;://' &gt; worker_0.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;grep &quot;\[2,1\]&quot; outA | sed 's/\[2,1\]&lt;stdout&gt;://' &gt; worker_1.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course, this could be wrapped in a script, &#160;but it is a bit cumbersome
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and i am not sure if the job-ids are always &quot;1&quot; and &quot;2&quot;) ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there some simpler way to separate the output of the two streams?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not really.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not, would it be possible to extend the -output-filename option i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such a way that it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would also combine job-id and rank withe the output file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;work_out.1.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the master's output, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;work_out.2.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;work_out.2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;work_out.2.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the worker's output?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, I can do that - will put something together. Are you doing this in the 1.4 series?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13619.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13617.php">Bowen Zhou: "Re: [OMPI users] OpenMPI load data to multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="13608.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
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
