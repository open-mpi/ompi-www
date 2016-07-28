<?
$subject_val = "[OMPI users] question to binding options in openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 05:53:51 2012" -->
<!-- isoreceived="20121002095351" -->
<!-- sent="Tue, 2 Oct 2012 11:44:50 +0200 (CEST)" -->
<!-- isosent="20121002094450" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] question to binding options in openmpi-1.6.2" -->
<!-- id="201210020945.q929iowt016629_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] question to binding options in openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 05:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20374.php">Noam Bernstein: "[OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20376.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20376.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20391.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to reproduce the bindings from the following blog
<br>
<a href="http://blogs.cisco.com/performance/open-mpi-v1-5-processor-affinity-options">http://blogs.cisco.com/performance/open-mpi-v1-5-processor-affinity-options</a>
<br>
on a machine with two dual-core processors and openmpi-1.6.2. I have
<br>
ordered the lines and removed the output from &quot;hostname&quot; so that it
<br>
is easier to see the bindings.
<br>
<p>mpiexec -report-bindings -host sunpc0 -np 4 -bind-to-socket hostname
<br>
[sunpc0:05410] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:05410] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:05410] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
<br>
[sunpc0:05410] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
<br>
<p>The output is consistent with the illustration in the above blog.
<br>
Now I add one more machine.
<br>
<p>mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 \
<br>
&nbsp;&nbsp;-bind-to-socket hostname
<br>
[sunpc0:06015] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc1:25543] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:06015] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc1:25543] MCW rank 3 bound to socket 0[core 0-1]: [B B][. .]
<br>
<p>I would have expected the same output as before and not a distribution
<br>
of the processes across both nodes. Did I misunderstand the concept
<br>
so that the output is correct? When I try &quot;-bysocket&quot; with one
<br>
machine, I get once more a consistent output to the above blog.
<br>
<p>mpiexec -report-bindings -host sunpc0 -np 4 -bysocket \
<br>
&nbsp;&nbsp;-bind-to-socket hostname
<br>
[sunpc0:05451] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:05451] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
<br>
[sunpc0:05451] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:05451] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
<br>
<p>However I get once more an unexpected output when I add one more
<br>
machine and not the expected output from above.
<br>
<p>mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 -bysocket \
<br>
&nbsp;&nbsp;-bind-to-socket hostname
<br>
[sunpc0:06130] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc1:25660] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:06130] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
<br>
[sunpc1:25660] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
<br>
<p>I would have expected a distribution of the processes across all
<br>
nodes, if I would have used &quot;-bynode&quot; (as in the following example).
<br>
<p>mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 -bynode \
<br>
&nbsp;&nbsp;-bind-to-socket hostname
<br>
[sunpc0:06171] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc1:25696] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc0:06171] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
<br>
[sunpc1:25696] MCW rank 3 bound to socket 0[core 0-1]: [B B][. .]
<br>
<p><p>Option &quot;-npersocket&quot; doesnt't work, even if I reduce &quot;-npersocket&quot;
<br>
to &quot;1&quot;. Why doesn't it find any sockets, although the above commands
<br>
could find both sockets?
<br>
<p>mpiexec -report-bindings -host sunpc0 -np 2 -npersocket 1 hostname
<br>
--------------------------------------------------------------------------
<br>
Your job has requested a conflicting number of processes for the
<br>
application:
<br>
<p>App: hostname
<br>
number of procs:  2
<br>
<p>This is more processes than we can launch under the following
<br>
additional directives and conditions:
<br>
<p>number of sockets:   0
<br>
npersocket:   1
<br>
<p>Please revise the conflict and try again.
<br>
--------------------------------------------------------------------------
<br>
<p><p>By the way I get the same output if I use Linux instead of Solaris.
<br>
I would be grateful if somebody could clarify if I misunderstood the
<br>
binding concept or if the binding is wrong if I use more than one
<br>
machine. Thank you very much for any comments in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20374.php">Noam Bernstein: "[OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20376.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20376.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20391.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
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
