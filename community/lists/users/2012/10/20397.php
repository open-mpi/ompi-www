<?
$subject_val = "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 10:19:30 2012" -->
<!-- isoreceived="20121003141930" -->
<!-- sent="Wed, 3 Oct 2012 16:12:40 +0200 (CEST)" -->
<!-- isosent="20121003141240" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2" -->
<!-- id="201210031412.q93ECen3021041_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] one more problem with process bindings on openmpi-1.6.2" -->
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
<strong>Subject:</strong> Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 10:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20398.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20396.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="20393.php">Siegmar Gross: "[OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20398.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20398.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I thought that &quot;slot&quot; is the smallest manageable entity so that I
<br>
must set &quot;slot=4&quot; for a dual-processor dual-core machine with one
<br>
hardware-thread per core. Today I learned about the new keyword
<br>
&quot;sockets&quot; for a hostfile (I didn't find it in &quot;man orte_hosts&quot;).
<br>
How would I specify a system with two dual-core processors so that
<br>
&quot;mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 
<br>
-cpus-per-proc 2 -bind-to-core hostname&quot; or even
<br>
&quot;mpiexec -report-bindings -hostfile host_sunpc0_1 -np 2 
<br>
-cpus-per-proc 4 -bind-to-core hostname&quot; would work in the same way
<br>
as the commands below.
<br>
<p>tyr fd1026 217 mpiexec -report-bindings -host sunpc0,sunpc1 -np 2 \
<br>
&nbsp;&nbsp;-cpus-per-proc 4 -bind-to-core hostname
<br>
[sunpc0:11658] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B]
<br>
sunpc0
<br>
[sunpc1:00553] MCW rank 1 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B]
<br>
sunpc1
<br>
<p><p>Thank you very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev2">&gt; &gt; I recognized another problem with procecss bindings. The command
</span><br>
<span class="quotelev2">&gt; &gt; works, if I use &quot;-host&quot; and it breaks, if I use &quot;-hostfile&quot; with 
</span><br>
<span class="quotelev2">&gt; &gt; the same machines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 178 mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:00086] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:00086] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc0:10929] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc0:10929] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this works because you told us there is only ONE slot on each
</span><br>
<span class="quotelev1">&gt; host. As a result, we split the 4 processes across the two hosts
</span><br>
<span class="quotelev1">&gt; (both of which are now oversubscribed), resulting in TWO processes
</span><br>
<span class="quotelev1">&gt; running on each host. Since there are 4 cores on each host, and
</span><br>
<span class="quotelev1">&gt; you asked for 2 cores/process, we can make this work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 179 cat host_sunpc0_1 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0 slots=4
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 slots=4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr fd1026 180 mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this will of course not work. In your hostfile, you told us there
</span><br>
<span class="quotelev1">&gt; are FOUR slots on each host. Since the default is to map by slot, we
</span><br>
<span class="quotelev1">&gt; correctly mapped all four processes to the first node. We then tried
</span><br>
<span class="quotelev1">&gt; to bind 2 cores for each process, resulting in 8 cores - which is
</span><br>
<span class="quotelev1">&gt; more than you have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev2">&gt; &gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev2">&gt; &gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev2">&gt; &gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev2">&gt; &gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc0:10964] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc0:10964] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec was unable to start the specified application as it encountered
</span><br>
<span class="quotelev2">&gt; &gt;  an error
</span><br>
<span class="quotelev2">&gt; &gt; on node sunpc0. More information may be available above.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps this error is related to the other errors. Thank you very
</span><br>
<span class="quotelev2">&gt; &gt; much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20398.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20396.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="20393.php">Siegmar Gross: "[OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20398.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20398.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
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
