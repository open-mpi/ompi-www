<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 07:36:32 2013" -->
<!-- isoreceived="20130206123632" -->
<!-- sent="Wed, 6 Feb 2013 13:29:36 +0100 (CET)" -->
<!-- isosent="20130206122936" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="201302061229.r16CTa5p023255_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 07:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21313.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21311.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21320.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21320.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>thank you very much for your answer. I have compiled your program
<br>
and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
<br>
<p><span class="quotelev1">&gt; On 02/05/13 00:30, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; now I can use all our machines once more. I have a problem on
</span><br>
<span class="quotelev2">&gt; &gt; Solaris 10 x86_64, because the mapping of processes doesn't
</span><br>
<span class="quotelev2">&gt; &gt; correspond to the rankfile. I removed the output from &quot;hostfile&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and wrapped around long lines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr rankfiles 114 cat rf_ex_sunpc
</span><br>
<span class="quotelev2">&gt; &gt; # mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=sunpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc0:17920] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:11265] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev2">&gt; &gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:11265] MCW rank 2 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:11265] MCW rank 3 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First of all, the heterogeneous environment had nothing to do
</span><br>
<span class="quotelev1">&gt; with this (as you have just confirmed).  You can reproduce the problem so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat myrankfile
</span><br>
<span class="quotelev1">&gt; rank 0=mynode slot=0:1
</span><br>
<span class="quotelev1">&gt; % mpirun --report-bindings --rankfile myrankfile hostname
</span><br>
<span class="quotelev1">&gt; [mynode:5150] MCW rank 0 bound to socket 0[core 0-3]:
</span><br>
<span class="quotelev1">&gt;  [B B B B] (slot list 0:1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhow, that's water under the bridge at this point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, and you might already know this, you can't bind arbitrarily
</span><br>
<span class="quotelev1">&gt; on Solaris.  You have to bind to a locality group (lgroup) or an 
</span><br>
<span class="quotelev1">&gt; individual core.  Sorry if that's repeating something you already
</span><br>
<span class="quotelev1">&gt; knew.  Anyhow, your problem cases are when binding to a single 
</span><br>
<span class="quotelev1">&gt; core.  So, you're all right (and OMPI isn't).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, you can check the actual binding so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat check.c
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/processor.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/procset.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;    processorid_t obind;
</span><br>
<span class="quotelev1">&gt;    if ( processor_bind(P_PID, P_MYID, PBIND_QUERY, &amp;obind) != 0 ) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;ERROR\n&quot;);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;      if ( obind == PBIND_NONE ) printf(&quot;unbound\n&quot;);
</span><br>
<span class="quotelev1">&gt;      else                       printf(&quot;bind to %d\n&quot;, obind);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; % cc check.c
</span><br>
<span class="quotelev1">&gt; % mpirun --report-bindings --rankfile myrankfile ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can reproduce your problem on my Solaris 11 machine (rankfile
</span><br>
<span class="quotelev1">&gt; specifies a particular core but --report-bindings shows binding to 
</span><br>
<span class="quotelev1">&gt; entire node), but the test problem shows binding to the core I
</span><br>
<span class="quotelev1">&gt; specified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the problem is in --report-bindings?  I'll poke around some.
</span><br>
<p><p>sunpc1 rankfiles 103 cat myrankfile 
<br>
rank 0=sunpc1 slot=0:1
<br>
sunpc1 rankfiles 104 cat myrankfile_0 
<br>
rank 0=sunpc1 slot=0:0
<br>
<p><p>I get the following output for openmpi-1.6.4rc3 (more or less
<br>
the same for both rankfiles).
<br>
<p>sunpc1 rankfiles 105 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc3r27923
<br>
sunpc1 rankfiles 106 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile ./a.out
<br>
bind to 1
<br>
[sunpc1:26472] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:1)
<br>
<p><p>sunpc1 rankfiles 107 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile_0 ./a.out
<br>
[sunpc1:26484] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0)
<br>
bind to 0
<br>
<p><p><p>I get the following output for openmpi-1.9 (different outputs !!!).
<br>
<p>sunpc1 rankfiles 103 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r28035
<br>
sunpc1 rankfiles 104 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile ./a.out
<br>
[sunpc1:26554] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
unbound
<br>
<p>sunpc1 rankfiles 105 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile_0 ./a.out
<br>
[sunpc1:26557] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
&nbsp;&nbsp;[B/.][./.]
<br>
bind to 0
<br>
<p><p>sunpc1 rankfiles 107 cd /usr/local/hwloc-1.6.1/bin/
<br>
sunpc1 bin 108 ./lstopo
<br>
Machine (8191MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#1 4095MB) + Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#2 4096MB) + Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 + PU L#3 (P#3)
<br>
<p><p>Thank you very much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21313.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21311.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21320.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21320.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
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
