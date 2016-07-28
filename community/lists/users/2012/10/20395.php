<?
$subject_val = "Re: [OMPI users] question to binding options in openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 09:36:29 2012" -->
<!-- isoreceived="20121003133629" -->
<!-- sent="Wed, 3 Oct 2012 15:29:35 +0200 (CEST)" -->
<!-- isosent="20121003132935" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question to binding options in openmpi-1.6.2" -->
<!-- id="201210031329.q93DTYAH020885_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] question to binding options in openmpi-1.6.2" -->
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
<strong>Subject:</strong> Re: [OMPI users] question to binding options in openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 09:29:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20396.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thank you very much for your help. Now the command with &quot;-npersocket&quot;
<br>
works. Unfortunately it is not a solution for the other problem, which
<br>
I reported a few minutes ago.
<br>
<p>tyr fd1026 191 cat host_sunpc0_1 
<br>
sunpc0 sockets=2 slots=4
<br>
sunpc1 sockets=2 slots=4
<br>
<p>tyr fd1026 192 mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 
<br>
-cpus-per-proc 2 -bind-to-core hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor.
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M).  Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
sunpc0
<br>
[sunpc0:11341] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
sunpc0
<br>
[sunpc0:11341] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it encountered an error
<br>
on node sunpc0. More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p>Perhaps you find a solution for that error as well. Thank you very much
<br>
for your help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><span class="quotelev1">&gt; Okay, I looked at this and the problem isn't in the code. The
</span><br>
<span class="quotelev1">&gt; problem is that the 1.6 series doesn't have the more sophisticated
</span><br>
<span class="quotelev1">&gt; discovery and mapping algorithms of the 1.7 series. In this case,
</span><br>
&lt; the specific problem is that the 1.6 series doesn't automatically
<br>
<span class="quotelev1">&gt; detect the number of sockets on a node - you have to tell it in
</span><br>
<span class="quotelev1">&gt; your hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; foo.domain.org  sockets=2 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, you'll get this poor error message as it tries to
</span><br>
<span class="quotelev1">&gt; communicate that 0 sockets =&gt; zero processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2012, at 2:44 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Option &quot;-npersocket&quot; doesnt't work, even if I reduce &quot;-npersocket&quot;
</span><br>
<span class="quotelev2">&gt; &gt; to &quot;1&quot;. Why doesn't it find any sockets, although the above commands
</span><br>
<span class="quotelev2">&gt; &gt; could find both sockets?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -report-bindings -host sunpc0 -np 2 -npersocket 1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Your job has requested a conflicting number of processes for the
</span><br>
<span class="quotelev2">&gt; &gt; application:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; App: hostname
</span><br>
<span class="quotelev2">&gt; &gt; number of procs:  2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is more processes than we can launch under the following
</span><br>
<span class="quotelev2">&gt; &gt; additional directives and conditions:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; number of sockets:   0
</span><br>
<span class="quotelev2">&gt; &gt; npersocket:   1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please revise the conflict and try again.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20396.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
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
