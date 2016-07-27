<?
$subject_val = "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 14:02:31 2010" -->
<!-- isoreceived="20101220190231" -->
<!-- sent="Mon, 20 Dec 2010 13:02:23 -0600" -->
<!-- isosent="20101220190223" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5" -->
<!-- id="4D0FA83F.4010503_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0FA6F4.5010508_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 14:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1741.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1741.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/20/2010 12:56 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 20/12/2010 19:40, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Get  this singlethreaded process memory : expected 0x0000000f, got
</span><br>
<span class="quotelev2">&gt;&gt; 0xf...f
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that a bug?
</span><br>
<span class="quotelev2">&gt;&gt; That's on my Fedora 13 non-numa system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is kind of expected. 0x0000000f means all the cores in the machine.
</span><br>
<span class="quotelev1">&gt; 0xf...f means all the machine when the machine isn't numa. It's hard to
</span><br>
<span class="quotelev1">&gt; make things strictly the same without loosing some semantics and keeping
</span><br>
<span class="quotelev1">&gt; things simple. Fortunately, your application won't see any actual
</span><br>
<span class="quotelev1">&gt; difference unless it actually compares full cpusets like above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On my RHEL6.0 numa system,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Get  this singlethreaded process memory : expected 0x00ffffff, got
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000003f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In which section of hwloc_bind is this? Sometimes, the difference is
</span><br>
<span class="quotelev1">&gt; normal too because Linux doesn't exactly do what we want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
complete node set
<br>
i.e. cpuset 0x00ffffff
<br>
...
<br>
&nbsp;&nbsp;&nbsp;bound
<br>
Bind this singlethreaded process memory : OK
<br>
Get  this singlethreaded process memory : expected 0x00ffffff, got 0x0000003f
<br>
Bind this thread memory                 : OK
<br>
Get  this thread memory                 : expected 0x00ffffff, got 0x0000003f
<br>
<p>happens in the 'migrate' section also, but not the strict ones.
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1741.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1741.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
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
