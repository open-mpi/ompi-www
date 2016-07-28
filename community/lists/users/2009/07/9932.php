<?
$subject_val = "Re: [OMPI users] Problems in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 20:49:21 2009" -->
<!-- isoreceived="20090713004921" -->
<!-- sent="Sun, 12 Jul 2009 19:49:14 -0500" -->
<!-- isosent="20090713004914" -->
<!-- name="Yin Feng" -->
<!-- email="yfeng1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in OpenMPI" -->
<!-- id="1e8c69dc0907121749y185cc1der6dc2512b692485b3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1247217605.15356.83.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in OpenMPI<br>
<strong>From:</strong> Yin Feng (<em>yfeng1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 20:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9933.php">Ashika Umanga Umagiliya: "[OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?"</a>
<li><strong>Previous message:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you give me a further explanation about why results are different
<br>
when it ran it on mutiprocessors against single processor?
<br>
<p>Thank you!
<br>
<p>On Fri, Jul 10, 2009 at 4:20 AM, Ashley Pittman&lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Thu, 2009-07-09 at 23:40 -0500, Yin Feng wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am a beginner in MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran an example code using OpenMPI and it seems work.
</span><br>
<span class="quotelev2">&gt;&gt; And then I tried a parallel example in PETSc tutorials folder (ex5).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 ex5
</span><br>
<span class="quotelev2">&gt;&gt; It can do but the results are not as accurate as just running ex5.
</span><br>
<span class="quotelev2">&gt;&gt; Is that thing normal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not as accurate or just different? &#160;Different is normal and in light of
</span><br>
<span class="quotelev1">&gt; that accurate is itself a vague concept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After that, send this job to supercomputer which allocates me 4 nodes
</span><br>
<span class="quotelev2">&gt;&gt; and each node has 8 processors. When I check load on each node, I
</span><br>
<span class="quotelev2">&gt;&gt; found:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any idea about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd say it's obvious all 32 processes have been located on the same
</span><br>
<span class="quotelev1">&gt; node, what was the mpirun command you issued and the contents of the
</span><br>
<span class="quotelev1">&gt; machinefile you used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running &quot;orte-ps&quot; on the machine where the mpirun command is running
</span><br>
<span class="quotelev1">&gt; will tell you the hostname where every rank is running or if you want
</span><br>
<span class="quotelev1">&gt; more information (load, cpu usage etc) you can use padb, the link for
</span><br>
<span class="quotelev1">&gt; which is in my signature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<li><strong>Next message:</strong> <a href="9933.php">Ashika Umanga Umagiliya: "[OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?"</a>
<li><strong>Previous message:</strong> <a href="9931.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9906.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
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
