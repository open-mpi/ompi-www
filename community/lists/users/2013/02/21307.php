<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 16:20:23 2013" -->
<!-- isoreceived="20130205212023" -->
<!-- sent="Tue, 05 Feb 2013 13:20:09 -0800" -->
<!-- isosent="20130205212009" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="51117789.2050803_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201302050830.r158UYII010110_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 16:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21308.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21308.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21308.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/05/13 00:30, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now I can use all our machines once more. I have a problem on
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64, because the mapping of processes doesn't
</span><br>
<span class="quotelev1">&gt; correspond to the rankfile. I removed the output from &quot;hostfile&quot;
</span><br>
<span class="quotelev1">&gt; and wrapped around long lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 114 cat rf_ex_sunpc
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:17920] MCW rank 0 bound to socket 0[core 0-1]  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:11265] MCW rank 1 bound to socket 0[core 0-1]                    : [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:11265] MCW rank 2 bound to socket 0[core 0-1]  socket 1[core 0-1]: [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [sunpc1:11265] MCW rank 3 bound to socket 0[core 0-1]  socket 1[core 0-1]: [B B][B B] (slot list 1:1)
</span><br>
<p>A few comments.
<br>
<p>First of all, the heterogeneous environment had nothing to do with this (as you have just confirmed).  You can reproduce the problem so:
<br>
<p>% cat myrankfile
<br>
rank 0=mynode slot=0:1
<br>
% mpirun --report-bindings --rankfile myrankfile hostname
<br>
[mynode:5150] MCW rank 0 bound to socket 0[core 0-3]: [B B B B] (slot list 0:1)
<br>
<p>Anyhow, that's water under the bridge at this point.
<br>
<p>Next, and you might already know this, you can't bind arbitrarily on Solaris.  You have to bind to a locality group (lgroup) or an 
<br>
individual core.  Sorry if that's repeating something you already knew.  Anyhow, your problem cases are when binding to a single 
<br>
core.  So, you're all right (and OMPI isn't).
<br>
<p>Finally, you can check the actual binding so:
<br>
<p>% cat check.c
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;sys/processor.h&gt;
<br>
#include &lt;sys/procset.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;processorid_t obind;
<br>
&nbsp;&nbsp;&nbsp;if ( processor_bind(P_PID, P_MYID, PBIND_QUERY, &amp;obind) != 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ERROR\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( obind == PBIND_NONE ) printf(&quot;unbound\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else                       printf(&quot;bind to %d\n&quot;, obind);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
% cc check.c
<br>
% mpirun --report-bindings --rankfile myrankfile ./a.out
<br>
<p>I can reproduce your problem on my Solaris 11 machine (rankfile specifies a particular core but --report-bindings shows binding to 
<br>
entire node), but the test problem shows binding to the core I specified.
<br>
<p>So, the problem is in --report-bindings?  I'll poke around some.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21308.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21306.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21308.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21308.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
