<?
$subject_val = "Re: [OMPI users] question to binding options in openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 09:48:13 2012" -->
<!-- isoreceived="20121002134813" -->
<!-- sent="Tue, 2 Oct 2012 06:48:06 -0700" -->
<!-- isosent="20121002134806" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question to binding options in openmpi-1.6.2" -->
<!-- id="9EEBE8D1-7FD3-4D24-BC08-49FB883FFBAB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210020945.q929iowt016629_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 09:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20377.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20391.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2012, at 2:44 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to reproduce the bindings from the following blog
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/open-mpi-v1-5-processor-affinity-options">http://blogs.cisco.com/performance/open-mpi-v1-5-processor-affinity-options</a>
</span><br>
<span class="quotelev1">&gt; on a machine with two dual-core processors and openmpi-1.6.2. I have
</span><br>
<span class="quotelev1">&gt; ordered the lines and removed the output from &quot;hostname&quot; so that it
</span><br>
<span class="quotelev1">&gt; is easier to see the bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0 -np 4 -bind-to-socket hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:05410] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:05410] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:05410] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc0:05410] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output is consistent with the illustration in the above blog.
</span><br>
<span class="quotelev1">&gt; Now I add one more machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 \
</span><br>
<span class="quotelev1">&gt;  -bind-to-socket hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:06015] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:25543] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:06015] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:25543] MCW rank 3 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would have expected the same output as before and not a distribution
</span><br>
<span class="quotelev1">&gt; of the processes across both nodes. Did I misunderstand the concept
</span><br>
<span class="quotelev1">&gt; so that the output is correct?
</span><br>
<p>The output is correct. The key is in your -host specification. In the absence of an allocation or hostfile giving further slot information, this indicates there is one slot on each host. Oversubscription is allowed by default, else this would have exited as an error due to insufficient slots. Instead, what happens is that we map the 1st proc to the first node, which &quot;fills&quot; its one slot allocation. We therefore move to the next node and &quot;fill&quot; it with rank 1. Since both nodes are now &quot;oversubscribed&quot;, we just balance the remaining procs across the available nodes.
<br>
<p><span class="quotelev1">&gt; When I try &quot;-bysocket&quot; with one
</span><br>
<span class="quotelev1">&gt; machine, I get once more a consistent output to the above blog.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0 -np 4 -bysocket \
</span><br>
<span class="quotelev1">&gt;  -bind-to-socket hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:05451] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:05451] MCW rank 1 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc0:05451] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:05451] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However I get once more an unexpected output when I add one more
</span><br>
<span class="quotelev1">&gt; machine and not the expected output from above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 -bysocket \
</span><br>
<span class="quotelev1">&gt;  -bind-to-socket hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:06130] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:25660] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:06130] MCW rank 2 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<span class="quotelev1">&gt; [sunpc1:25660] MCW rank 3 bound to socket 1[core 0-1]: [. .][B B]
</span><br>
<p>Same reason as above.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would have expected a distribution of the processes across all
</span><br>
<span class="quotelev1">&gt; nodes, if I would have used &quot;-bynode&quot; (as in the following example).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0,sunpc1 -np 4 -bynode \
</span><br>
<span class="quotelev1">&gt;  -bind-to-socket hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:06171] MCW rank 0 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:25696] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:06171] MCW rank 2 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc1:25696] MCW rank 3 bound to socket 0[core 0-1]: [B B][. .]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Option &quot;-npersocket&quot; doesnt't work, even if I reduce &quot;-npersocket&quot;
</span><br>
<span class="quotelev1">&gt; to &quot;1&quot;. Why doesn't it find any sockets, although the above commands
</span><br>
<span class="quotelev1">&gt; could find both sockets?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -host sunpc0 -np 2 -npersocket 1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job has requested a conflicting number of processes for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; App: hostname
</span><br>
<span class="quotelev1">&gt; number of procs:  2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is more processes than we can launch under the following
</span><br>
<span class="quotelev1">&gt; additional directives and conditions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number of sockets:   0
</span><br>
<span class="quotelev1">&gt; npersocket:   1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please revise the conflict and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>No idea - will have to look at the code to find the bug.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way I get the same output if I use Linux instead of Solaris.
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody could clarify if I misunderstood the
</span><br>
<span class="quotelev1">&gt; binding concept or if the binding is wrong if I use more than one
</span><br>
<span class="quotelev1">&gt; machine. Thank you very much for any comments in advance.
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
<li><strong>Next message:</strong> <a href="20377.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20375.php">Albert Everett: "Re: [OMPI users] crashes in VASP with openmpi 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20373.php">Siegmar Gross: "[OMPI users] question to binding options in openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20391.php">Ralph Castain: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
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
