<?
$subject_val = "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 04:44:15 2009" -->
<!-- isoreceived="20090327084415" -->
<!-- sent="Fri, 27 Mar 2009 09:44:10 +0100" -->
<!-- isosent="20090327084410" -->
<!-- name="Alessandro Surace" -->
<!-- email="zioalex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="adbbb9af0903270144s55fa4048tee4a85a7b76a7217_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
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
<strong>Subject:</strong> Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Alessandro Surace (<em>zioalex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 04:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8607.php">Ralph Castain: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8605.php">Jerome BENOIT: "[OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]"</a>
<li><strong>Maybe in reply to:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
if what you say is true I don't understand why if I run a job in grid01 and
<br>
grid03 it runs properly. They are on different network like grid03 and
<br>
grid04.
<br>
But if I run the same job in grid03 and grid04 it fails.
<br>
<p>If it is a network problem like you say I don't think that is  about
<br>
reachable because I can trace the network traffic and see that grid03 and
<br>
grid04 communicates when I run the job.
<br>
<p>Alex
<br>
<p>On Mar 26, 2009, at 10:59 AM, Alessandro Surace wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; what do you mean to create/define a directly interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 3 hosts are network connected and ssh pub key enabled. Every
</span><br>
<span class="quotelev1">&gt; hosts can see the other but they are not all on the same direct
</span><br>
<span class="quotelev1">&gt; connected network . More in detail:
</span><br>
<span class="quotelev1">&gt; grid01 and grid04 are in the same network
</span><br>
<span class="quotelev1">&gt; grid03 is on different network.
</span><br>
<p>This is the problem. If grid03 is on a different network, then there
<br>
is no way that an MPI process on that node can directly communicate
<br>
with one on grid04 or grid01. Grid03 must have a common network
<br>
interface with each of the machines, though it can be different for
<br>
each one.
<br>
<p>In other words, grid03 and grid01 -must- have at least one network in
<br>
common. And grid04 and grid03 must also share at least one network,
<br>
though it can be different from the one that grid03 and grid01 share.
<br>
<p>Does that help clarify?
<br>
<p>Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8607.php">Ralph Castain: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8605.php">Jerome BENOIT: "[OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]"</a>
<li><strong>Maybe in reply to:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
