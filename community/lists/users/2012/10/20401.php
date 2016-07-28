<?
$subject_val = "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 11:52:41 2012" -->
<!-- isoreceived="20121003155241" -->
<!-- sent="Wed, 3 Oct 2012 08:52:32 -0700" -->
<!-- isosent="20121003155232" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2" -->
<!-- id="3B3106A6-716D-4DAB-A7A4-0C4775E7A72D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210031540.q93FeSK8021424_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 11:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20400.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20400.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2012, at 8:40 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I said, in the absence of a hostfile, -host assigns ONE slot for
</span><br>
<span class="quotelev2">&gt;&gt; each time a host is named. So the equivalent hostfile would have
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slots=1&quot; to create the same pattern as your -host cmd line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would mean that a hostfile has nothing to do with the underlying
</span><br>
<span class="quotelev1">&gt; hardware and that it would be a mystery to find out how to set it up.
</span><br>
<p>That's correct - an unfortunate aspect of using hostfiles. This is one of the big motivations for the changes in 1.7 and beyond.
<br>
<p><span class="quotelev1">&gt; Now I found a different solution so that I'm a little bit satisfied that
</span><br>
<span class="quotelev1">&gt; I don't need a different hostfile for every &quot;mpiexec&quot; command. I
</span><br>
<span class="quotelev1">&gt; sorted the output and removed the output from &quot;hostname&quot; so that
</span><br>
<span class="quotelev1">&gt; everything is more readable. Is the keyword &quot;sockets&quot; available in
</span><br>
<span class="quotelev1">&gt; openmpi-1.7 and openmpi-1.9 as well?
</span><br>
<p>No - it is no longer required with 1.7 and beyond because we now have the ability to directly sense the hardware, so we no longer need users to tell us.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 252 cat host_sunpc0_1                                                
</span><br>
<span class="quotelev1">&gt; sunpc0 sockets=2 slots=4
</span><br>
<span class="quotelev1">&gt; sunpc1 sockets=2 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 253 mpiexec -report-bindings -hostfile host_sunpc0_1 \
</span><br>
<span class="quotelev1">&gt;  -np 4 -npersocket 1 -cpus-per-proc 2 -bynode -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:12641] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:01402] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:12641] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc1:01402] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 254 mpiexec -report-bindings -host sunpc0,sunpc1 \
</span><br>
<span class="quotelev1">&gt;  -np 4 -cpus-per-proc 2 -bind-to-core -bysocket hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:12676] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:01437] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:12676] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc1:01437] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 258 mpiexec -report-bindings -hostfile host_sunpc0_1 \
</span><br>
<span class="quotelev1">&gt;  -np 2 -npernode 1 -cpus-per-proc 4 -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:12833] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;                                   socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc1:01561] MCW rank 1 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;                                   socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 259 mpiexec -report-bindings -host sunpc0,sunpc1 \
</span><br>
<span class="quotelev1">&gt;  -np 2 -cpus-per-proc 4 -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:12869] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;                                   socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc1:01600] MCW rank 1 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;                                   socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your answers and your time. I have learned
</span><br>
<span class="quotelev1">&gt; a lot about process bindings through our discussion. Now I'm waiting
</span><br>
<span class="quotelev1">&gt; for a bug fix for my problem with rankfiles. :-))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2012, at 7:12 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought that &quot;slot&quot; is the smallest manageable entity so that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; must set &quot;slot=4&quot; for a dual-processor dual-core machine with one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hardware-thread per core. Today I learned about the new keyword
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;sockets&quot; for a hostfile (I didn't find it in &quot;man orte_hosts&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How would I specify a system with two dual-core processors so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-proc 2 -bind-to-core hostname&quot; or even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -report-bindings -hostfile host_sunpc0_1 -np 2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-proc 4 -bind-to-core hostname&quot; would work in the same way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as the commands below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 217 mpiexec -report-bindings -host sunpc0,sunpc1 -np 2 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-proc 4 -bind-to-core hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc0:11658] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:00553] MCW rank 1 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I recognized another problem with procecss bindings. The command
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works, if I use &quot;-host&quot; and it breaks, if I use &quot;-hostfile&quot; with 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the same machines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr fd1026 178 mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sunpc1:00086] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sunpc1:00086] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sunpc0:10929] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sunpc0:10929] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, this works because you told us there is only ONE slot on each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host. As a result, we split the 4 processes across the two hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (both of which are now oversubscribed), resulting in TWO processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running on each host. Since there are 4 cores on each host, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you asked for 2 cores/process, we can make this work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr fd1026 179 cat host_sunpc0_1 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc0 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc1 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr fd1026 180 mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And this will of course not work. In your hostfile, you told us there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are FOUR slots on each host. Since the default is to map by slot, we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly mapped all four processes to the first node. We then tried
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to bind 2 cores for each process, resulting in 8 cores - which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more than you have.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sunpc0:10964] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sunpc0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sunpc0:10964] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on node sunpc0. More information may be available above.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps this error is related to the other errors. Thank you very
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20400.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20400.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
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
