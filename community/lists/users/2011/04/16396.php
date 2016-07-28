<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 10:12:12 2011" -->
<!-- isoreceived="20110429141212" -->
<!-- sent="Fri, 29 Apr 2011 08:12:03 -0600" -->
<!-- isosent="20110429141203" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="AA029115-F4F3-4968-A60F-482B983FC79B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikt4xdJ50D68UNzGQ0em7n2roPOzw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] srun and openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-29 10:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16397.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16397.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16397.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2011, at 8:05 AM, Michael Di Domenico wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Apr 29, 2011 at 10:01 AM, Michael Di Domenico
</span><br>
<span class="quotelev1">&gt; &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 29, 2011 at 4:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see the attached updated patch to try for 1.5.3. I mistakenly free'd the envar after adding it to the environ :-/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The patch works great, i can now see the precondition environment
</span><br>
<span class="quotelev2">&gt;&gt; variable if i do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 -host node1 &lt;prog&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and my &lt;prog&gt; runs just fine, However if i do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; srun --resv-ports -n 2 -w node1 &lt;prog&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [node1:16780] PSM EP connect error (unknown connect error):
</span><br>
<span class="quotelev2">&gt;&gt; [node1:16780]  node1
</span><br>
<span class="quotelev2">&gt;&gt; [node1:16780] PSM EP connect error (Endpoint could not be reached):
</span><br>
<span class="quotelev2">&gt;&gt; [node1:16780]  node1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I did notice a difference in the precondition env variable between the two runs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 -host node1 &lt;prog&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sets precondition_transports=fbc383997ee1b668-00d40f1401d2e827 (which
</span><br>
<span class="quotelev2">&gt;&gt; changes with each run (aka random))
</span><br>
<p>I didn't change anything about the way mpirun works, so this is expected.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; srun --resv-ports -n 2 -w node1 &lt;prog&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this should have been &quot;srun --resv-ports -n 1 -w node1 &lt;prog&gt;&quot;, i
</span><br>
<span class="quotelev1">&gt; can't run a 2 rank job, i get the PML error above
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sets precondition_transports=0000184500000000-0000000100000000 (which
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seem to change run to run)
</span><br>
<p>The value would indeed look quite different. Since I can't use a random value (so each proc can compute the same result), I simply used the SLURM_JOBID and SLURM_STEPID. I would therefore have expected that the first field (based on the jobid) would remain the same, and the second would change each time you did an &quot;srun&quot; within the same job.
<br>
<p>I'm afraid I don't know the significance of the fields, so I can't say why psm can't make the connection. I'll have to ping someone more knowledgable to see why those values aren't acceptable.
<br>
<p><p><span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16397.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16397.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16397.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
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
