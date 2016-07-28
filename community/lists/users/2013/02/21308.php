<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 17:18:24 2013" -->
<!-- isoreceived="20130205221824" -->
<!-- sent="Tue, 05 Feb 2013 14:18:11 -0800" -->
<!-- isosent="20130205221811" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="51118523.401_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51117789.2050803_at_oracle.com" -->
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
<strong>Date:</strong> 2013-02-05 17:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/05/13 13:20, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; On 02/05/13 00:30, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now I can use all our machines once more. I have a problem on
</span><br>
<span class="quotelev2">&gt;&gt; Solaris 10 x86_64, because the mapping of processes doesn't
</span><br>
<span class="quotelev2">&gt;&gt; correspond to the rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First of all, the heterogeneous environment had nothing to do with this 
</span><br>
<span class="quotelev1">&gt; (as you have just confirmed).  You can reproduce the problem so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat myrankfile
</span><br>
<span class="quotelev1">&gt; rank 0=mynode slot=0:1
</span><br>
<span class="quotelev1">&gt; % mpirun --report-bindings --rankfile myrankfile hostname
</span><br>
<span class="quotelev1">&gt; [mynode:5150] MCW rank 0 bound to socket 0[core 0-3]: [B B B B] (slot 
</span><br>
<span class="quotelev1">&gt; list 0:1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhow, that's water under the bridge at this point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, and you might already know this, you can't bind arbitrarily on 
</span><br>
<span class="quotelev1">&gt; Solaris.  You have to bind to a locality group (lgroup) or an individual 
</span><br>
<span class="quotelev1">&gt; core.  Sorry if that's repeating something you already knew.  Anyhow, 
</span><br>
<span class="quotelev1">&gt; your problem cases are when binding to a single core.  So, you're all 
</span><br>
<span class="quotelev1">&gt; right (and OMPI isn't).
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
<span class="quotelev1">&gt;   processorid_t obind;
</span><br>
<span class="quotelev1">&gt;   if ( processor_bind(P_PID, P_MYID, PBIND_QUERY, &amp;obind) != 0 ) {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;ERROR\n&quot;);
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;     if ( obind == PBIND_NONE ) printf(&quot;unbound\n&quot;);
</span><br>
<span class="quotelev1">&gt;     else                       printf(&quot;bind to %d\n&quot;, obind);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   return 0;
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
<span class="quotelev1">&gt; entire node), but the test problem shows binding to the core I specified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the problem is in --report-bindings?  I'll poke around some.
</span><br>
<p>I'm thinking the issue is in openmpi-1.6.3-debug/opal/mca/hwloc/hwloc132/hwloc/src/topology-solaris.c .  First, we call 
<br>
hwloc_solaris_set_sth_cpubind() to perform the binding.  Again, there are two mechanisms for doing so:  lgroup/lgrp for an entire 
<br>
locality group or processor_bind to a specific core.  In our case, we use the latter.  Later, we call 
<br>
hwloc_solaris_get_sth_cpubind() to check what binding we have.  We check lgroups, but we don't check for processor_binding.
<br>
<p>Sorry for the dumb question, but who maintains this code?  OMPI, or upstream in the hwloc project?  Where should the fix be made?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21309.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3"</a>
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
