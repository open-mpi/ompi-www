<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 11:42:53 2012" -->
<!-- isoreceived="20120222164253" -->
<!-- sent="Wed, 22 Feb 2012 09:42:45 -0700" -->
<!-- isosent="20120222164245" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="C54BB37E-24AC-4248-A757-471311143499_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F450FDC.4070606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 11:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10560.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10557.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Much simpler solution - on that platform, you should add &quot;orte_num_sockets=1&quot; to your default mca param file. Problem solved. It's why that param exists, and we added it specifically at Terry's request for an earlier, similar problem.
<br>
<p><p>On Feb 22, 2012, at 8:55 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 22/02/2012 07:36, Eugene Loh a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 2/21/2012 5:40 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the first of the results of the testing I promised.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not 100% sure how to reach the code that Eugene reported as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problematic,
</span><br>
<span class="quotelev2">&gt;&gt; I don't think you're going to see it.  Somehow, hwloc on the config in
</span><br>
<span class="quotelev2">&gt;&gt; question thinks there is no socket level and returns num_sockets==0. 
</span><br>
<span class="quotelev2">&gt;&gt; If you can run something successfully, your platform won't show the
</span><br>
<span class="quotelev2">&gt;&gt; issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Eugene sent hwloc info offlist)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an &quot;interesting&quot; case. Last time I used a RHEL4 2.6.9 kernel, it
</span><br>
<span class="quotelev1">&gt; had no sysfs topology info, but there was some &quot;physical package&quot; info
</span><br>
<span class="quotelev1">&gt; in /proc/cpuinfo. Yours has nothing. Maybe because it's an AMD and/or
</span><br>
<span class="quotelev1">&gt; single-core-processor based system. sysfs still has NUMA topology info
</span><br>
<span class="quotelev1">&gt; (this was added to the kernel around 2.5 iirc) so we get 2 NUMA nodes
</span><br>
<span class="quotelev1">&gt; with one core each but no socket at all. We could assume there one
</span><br>
<span class="quotelev1">&gt; socket per NUMA node but that's a risky hack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, we have seen other systems (mostly non-Linux) where lstopo
</span><br>
<span class="quotelev1">&gt; reports nothing interesting (only one machine object with multiple PU
</span><br>
<span class="quotelev1">&gt; children). So numsockets==0 isn't really uncommon. Replacing 0 with 1
</span><br>
<span class="quotelev1">&gt; will likely work for your computations. Make sure the code isn't going
</span><br>
<span class="quotelev1">&gt; to use the first hwloc socket object later, it would get NULL obviously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10560.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10557.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
