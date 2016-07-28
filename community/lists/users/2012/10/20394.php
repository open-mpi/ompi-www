<?
$subject_val = "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 09:35:16 2012" -->
<!-- isoreceived="20121003133516" -->
<!-- sent="Wed, 3 Oct 2012 06:35:08 -0700" -->
<!-- isosent="20121003133508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2" -->
<!-- id="149F7B62-61E5-4FEC-9C1A-6B8251F89875_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210031319.q93DJcrg020837_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-10-03 09:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20393.php">Siegmar Gross: "[OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20393.php">Siegmar Gross: "[OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20397.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2012, at 6:19 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recognized another problem with procecss bindings. The command
</span><br>
<span class="quotelev1">&gt; works, if I use &quot;-host&quot; and it breaks, if I use &quot;-hostfile&quot; with 
</span><br>
<span class="quotelev1">&gt; the same machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 178 mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 \
</span><br>
<span class="quotelev1">&gt;  -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [sunpc1:00086] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:00086] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc0:10929] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc0:10929] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, this works because you told us there is only ONE slot on each host. As a result, we split the 4 processes across the two hosts (both of which are now oversubscribed), resulting in TWO processes running on each host. Since there are 4 cores on each host, and you asked for 2 cores/process, we can make this work.
<br>
<p><p><span class="quotelev1">&gt; tyr fd1026 179 cat host_sunpc0_1 
</span><br>
<span class="quotelev1">&gt; sunpc0 slots=4
</span><br>
<span class="quotelev1">&gt; sunpc1 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 180 mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 \
</span><br>
<span class="quotelev1">&gt;  -cpus-per-proc 2 -bind-to-core hostname
</span><br>
<p>And this will of course not work. In your hostfile, you told us there are FOUR slots on each host. Since the default is to map by slot, we correctly mapped all four processes to the first node. We then tried to bind 2 cores for each process, resulting in 8 cores - which is more than you have.
<br>
<p><p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev1">&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev1">&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev1">&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You job will now abort.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc0:10964] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc0:10964] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt;  an error
</span><br>
<span class="quotelev1">&gt; on node sunpc0. More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this error is related to the other errors. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
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
<li><strong>Next message:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20393.php">Siegmar Gross: "[OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20393.php">Siegmar Gross: "[OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20397.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
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
