<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 10:01:29 2011" -->
<!-- isoreceived="20110429140129" -->
<!-- sent="Fri, 29 Apr 2011 10:01:25 -0400" -->
<!-- isosent="20110429140125" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="BANLkTinGx+B3b9zWA0WF0Lmom=75_0P_ww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D8D079C3-B3EA-4CA3-A89B-E50FC1473DA4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-29 10:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16393.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16393.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 29, 2011 at 4:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see the attached updated patch to try for 1.5.3. I mistakenly free'd the envar after adding it to the environ :-/
</span><br>
<p>The patch works great, i can now see the precondition environment
<br>
variable if i do
<br>
<p>mpirun -n 2 -host node1 &lt;prog&gt;
<br>
<p>and my &lt;prog&gt; runs just fine, However if i do
<br>
<p>srun --resv-ports -n 2 -w node1 &lt;prog&gt;
<br>
<p>I get
<br>
<p>[node1:16780] PSM EP connect error (unknown connect error):
<br>
[node1:16780] &#160;node1
<br>
[node1:16780] PSM EP connect error (Endpoint could not be reached):
<br>
[node1:16780] &#160;node1
<br>
<p>PML add procs failed
<br>
--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
<p>I did notice a difference in the precondition env variable between the two runs
<br>
<p>mpirun -n 2 -host node1 &lt;prog&gt;
<br>
<p>sets precondition_transports=fbc383997ee1b668-00d40f1401d2e827 (which
<br>
changes with each run (aka random))
<br>
<p>srun --resv-ports -n 2 -w node1 &lt;prog&gt;
<br>
<p>sets precondition_transports=0000184500000000-0000000100000000 (which
<br>
doesn't seem to change run to run)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16393.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16393.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16395.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
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
