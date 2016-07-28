<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 10:55:14 2012" -->
<!-- isoreceived="20120222155514" -->
<!-- sent="Wed, 22 Feb 2012 16:55:08 +0100" -->
<!-- isosent="20120222155508" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F450FDC.4070606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F448CDD.9020409_at_oracle.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/02/2012 07:36, Eugene Loh a &#233;crit :
<br>
<span class="quotelev1">&gt; On 2/21/2012 5:40 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here are the first of the results of the testing I promised.
</span><br>
<span class="quotelev2">&gt;&gt; I am not 100% sure how to reach the code that Eugene reported as
</span><br>
<span class="quotelev2">&gt;&gt; problematic,
</span><br>
<span class="quotelev1">&gt; I don't think you're going to see it.  Somehow, hwloc on the config in
</span><br>
<span class="quotelev1">&gt; question thinks there is no socket level and returns num_sockets==0. 
</span><br>
<span class="quotelev1">&gt; If you can run something successfully, your platform won't show the
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<p>(Eugene sent hwloc info offlist)
<br>
<p>This is an &quot;interesting&quot; case. Last time I used a RHEL4 2.6.9 kernel, it
<br>
had no sysfs topology info, but there was some &quot;physical package&quot; info
<br>
in /proc/cpuinfo. Yours has nothing. Maybe because it's an AMD and/or
<br>
single-core-processor based system. sysfs still has NUMA topology info
<br>
(this was added to the kernel around 2.5 iirc) so we get 2 NUMA nodes
<br>
with one core each but no socket at all. We could assume there one
<br>
socket per NUMA node but that's a risky hack.
<br>
<p>Anyway, we have seen other systems (mostly non-Linux) where lstopo
<br>
reports nothing interesting (only one machine object with multiple PU
<br>
children). So numsockets==0 isn't really uncommon. Replacing 0 with 1
<br>
will likely work for your computations. Make sure the code isn't going
<br>
to use the first hwloc socket object later, it would get NULL obviously.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10558.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10556.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10555.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10559.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
