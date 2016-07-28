<?
$subject_val = "[OMPI users] question to -cpus-to-proc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 02:00:04 2012" -->
<!-- isoreceived="20121005060004" -->
<!-- sent="Fri, 5 Oct 2012 07:53:09 +0200 (CEST)" -->
<!-- isosent="20121005055309" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] question to -cpus-to-proc" -->
<!-- id="201210050553.q955r9nI001813_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] question to -cpus-to-proc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 01:53:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20416.php">Paul Kapinos: "[OMPI users] too much stack size: _silently_ failback to IPoIB"</a>
<li><strong>Previous message:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20418.php">Ralph Castain: "Re: [OMPI users] question to -cpus-to-proc"</a>
<li><strong>Reply:</strong> <a href="20418.php">Ralph Castain: "Re: [OMPI users] question to -cpus-to-proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>if I start different programs on one command line, I can use different
<br>
options &quot;-host&quot; and &quot;-np&quot;.
<br>
<p>mpiexec -report-bindings -host linpc0 -np 1 date : \
<br>
&nbsp;&nbsp;-host sunpc0,sunpc1 -np 2 hostname                                           
<br>
Fri Oct  5 07:37:25 CEST 2012
<br>
sunpc0
<br>
sunpc1
<br>
<p>Only the last value counts if I use for example &quot;-cpus-per-proc&quot;.
<br>
<p>mpiexec -report-bindings -host linpc0 -np 1 -cpus-per-proc 2 \
<br>
&nbsp;&nbsp;-bind-to-core date : -host sunpc0,sunpc1 -np 2 -cpus-per-proc 1 \
<br>
&nbsp;&nbsp;-bind-to-socket hostname
<br>
[linpc0:16121] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
<br>
Fri Oct  5 07:37:42 CEST 2012
<br>
[sunpc0:17789] MCW rank 1 bound to socket 0[core 0]: [B .][. .]
<br>
sunpc0
<br>
[sunpc1:15007] MCW rank 2 bound to socket 0[core 0]: [B .][. .]
<br>
sunpc1
<br>
<p>mpiexec -report-bindings -host linpc0 -np 1 -cpus-per-proc 2 \
<br>
&nbsp;&nbsp;-bind-to-core date : -host sunpc0,sunpc1 -np 2 -bind-to-socket \
<br>
&nbsp;&nbsp;hostname
<br>
[linpc0:16191] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:17824] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
<br>
Fri Oct  5 07:37:56 CEST 2012
<br>
sunpc0
<br>
[sunpc1:15040] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
<br>
sunpc1
<br>
<p>Is this behaviour intended? How could I map and bind processes in
<br>
different ways on a command line without a rankfile, e.g. in the
<br>
following way?
<br>
<p>rank 0=linpc1 slot=0:0-1
<br>
rank 1=sunpc0 slot=0:0
<br>
rank 2=sunpc1 slot=0:0
<br>
<p>Thank you very much for any reply in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20416.php">Paul Kapinos: "[OMPI users] too much stack size: _silently_ failback to IPoIB"</a>
<li><strong>Previous message:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20418.php">Ralph Castain: "Re: [OMPI users] question to -cpus-to-proc"</a>
<li><strong>Reply:</strong> <a href="20418.php">Ralph Castain: "Re: [OMPI users] question to -cpus-to-proc"</a>
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
