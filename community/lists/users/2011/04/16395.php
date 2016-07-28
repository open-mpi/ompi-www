<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 10:05:33 2011" -->
<!-- isoreceived="20110429140533" -->
<!-- sent="Fri, 29 Apr 2011 10:05:29 -0400" -->
<!-- isosent="20110429140529" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="BANLkTikt4xdJ50D68UNzGQ0em7n2roPOzw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinGx+B3b9zWA0WF0Lmom=75_0P_ww_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-29 10:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16396.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16394.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16394.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16396.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16396.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 29, 2011 at 10:01 AM, Michael Di Domenico
<br>
&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Fri, Apr 29, 2011 at 4:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see the attached updated patch to try for 1.5.3. I mistakenly free'd the envar after adding it to the environ :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch works great, i can now see the precondition environment
</span><br>
<span class="quotelev1">&gt; variable if i do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -host node1 &lt;prog&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and my &lt;prog&gt; runs just fine, However if i do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srun --resv-ports -n 2 -w node1 &lt;prog&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node1:16780] PSM EP connect error (unknown connect error):
</span><br>
<span class="quotelev1">&gt; [node1:16780] &#160;node1
</span><br>
<span class="quotelev1">&gt; [node1:16780] PSM EP connect error (Endpoint could not be reached):
</span><br>
<span class="quotelev1">&gt; [node1:16780] &#160;node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did notice a difference in the precondition env variable between the two runs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -host node1 &lt;prog&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sets precondition_transports=fbc383997ee1b668-00d40f1401d2e827 (which
</span><br>
<span class="quotelev1">&gt; changes with each run (aka random))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srun --resv-ports -n 2 -w node1 &lt;prog&gt;
</span><br>
<p>this should have been &quot;srun --resv-ports -n 1 -w node1 &lt;prog&gt;&quot;, i
<br>
can't run a 2 rank job, i get the PML error above
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sets precondition_transports=0000184500000000-0000000100000000 (which
</span><br>
<span class="quotelev1">&gt; doesn't seem to change run to run)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16396.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16394.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16394.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16396.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16396.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
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
