<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 13:41:24 2009" -->
<!-- isoreceived="20090818174124" -->
<!-- sent="Tue, 18 Aug 2009 13:41:20 -0400" -->
<!-- isosent="20090818174120" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="4A8AE7C0.9090601_at_scalableinformatics.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A8AE60C.608_at_virginia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 13:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig Plaisance wrote:
<br>
<p><span class="quotelev1">&gt; mpich2 now and post the results.  So, does anyone know what causes the 
</span><br>
<span class="quotelev1">&gt; wild oscillations in the throughput at larger message sizes and higher 
</span><br>
<span class="quotelev1">&gt; network traffic?  Thanks!
</span><br>
<p>Your switch can't handle this amount of traffic on its backplane.  We 
<br>
have seen this often in similar situations.
<br>
<p>The major differentiation between the costlier switches and the less 
<br>
expensive switches are a) port to port latency, and b) backplane 
<br>
bandwidth.
<br>
<p>For login traffic and simple command and control, the inexpensive 
<br>
switches are fine.  For MPI across switches, I'd strongly urge you to 
<br>
consider things like HP Procurve units, some Cisco units, and a few 
<br>
others.  Look for the sustained backplane bandwidth to be close to 
<br>
N(ports) * duplex bandwidth per port 2Gbps).  If the switch vendor isn't 
<br>
reporting the backplane bandwidth, ask them.
<br>
<p>Joe
<br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics Inc.
email: landman_at_[hidden]
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
        <a href="http://scalableinformatics.com/jackrabbit">http://scalableinformatics.com/jackrabbit</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
