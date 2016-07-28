<?
$subject_val = "[OMPI users] one more problem with process bindings on openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 09:26:19 2012" -->
<!-- isoreceived="20121003132619" -->
<!-- sent="Wed, 3 Oct 2012 15:19:38 +0200 (CEST)" -->
<!-- isosent="20121003131938" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] one more problem with process bindings on openmpi-1.6.2" -->
<!-- id="201210031319.q93DJcrg020837_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] one more problem with process bindings on openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 09:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20397.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20400.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I recognized another problem with procecss bindings. The command
<br>
works, if I use &quot;-host&quot; and it breaks, if I use &quot;-hostfile&quot; with 
<br>
the same machines.
<br>
<p>tyr fd1026 178 mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 \
<br>
&nbsp;&nbsp;-cpus-per-proc 2 -bind-to-core hostname
<br>
sunpc1
<br>
[sunpc1:00086] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc1:00086] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
<br>
sunpc0
<br>
[sunpc0:10929] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
sunpc0
<br>
[sunpc0:10929] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
<br>
sunpc1
<br>
<p><p>tyr fd1026 179 cat host_sunpc0_1 
<br>
sunpc0 slots=4
<br>
sunpc1 slots=4
<br>
<p><p>tyr fd1026 180 mpiexec -report-bindings -hostfile host_sunpc0_1 -np 4 \
<br>
&nbsp;&nbsp;-cpus-per-proc 2 -bind-to-core hostname
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
[sunpc0:10964] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
sunpc0
<br>
[sunpc0:10964] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it encountered
<br>
&nbsp;&nbsp;an error
<br>
on node sunpc0. More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p>Perhaps this error is related to the other errors. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20392.php">Noam Bernstein: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20394.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20397.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20400.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
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
