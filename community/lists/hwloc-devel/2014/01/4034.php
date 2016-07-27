<?
$subject_val = "Re: [hwloc-devel] Attribute request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 13:27:27 2014" -->
<!-- isoreceived="20140123182727" -->
<!-- sent="Thu, 23 Jan 2014 19:27:25 +0100" -->
<!-- isosent="20140123182725" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute request" -->
<!-- id="52E15F0D.9060906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42E705DF-0B5A-4F2D-9EAE-FD4214809879_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute request<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 13:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4033.php">Ralph Castain: "[hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4033.php">Ralph Castain: "[hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Reply:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be easy on Linux, sure.
<br>
The model name is already known as CPUModel in hwloc.
<br>
We should likely add CPUVendor (would be GenuineIntel or AuthenticAMD),
<br>
CPUFamily (or CPUFamilyNumber if there's a name for these families?) and
<br>
CPUModelNumber ?
<br>
<p>Brice
<br>
<p><p><p><p>Le 23/01/2014 19:09, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the current topology info, I see you capture the model name
</span><br>
<span class="quotelev1">&gt; for the socket, but not a couple of other key things Intel could use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 44
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU           E5645  @ 2.40GHz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both the cpu family and model are important to us - any issue with
</span><br>
<span class="quotelev1">&gt; adding them to the &quot;infos&quot; array?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Previous message:</strong> <a href="4033.php">Ralph Castain: "[hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4033.php">Ralph Castain: "[hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Reply:</strong> <a href="4035.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
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
