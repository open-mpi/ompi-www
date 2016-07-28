<?
$subject_val = "Re: [OMPI devel] Totalview broken with 1.5/trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 10:21:22 2011" -->
<!-- isoreceived="20111215152122" -->
<!-- sent="Thu, 15 Dec 2011 08:21:18 -0700 (MST)" -->
<!-- isosent="20111215152118" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Totalview broken with 1.5/trunk" -->
<!-- id="alpine.OSX.2.00.1112150819450.9108_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="028BA9D7-51D6-4622-931D-2A2EFF4EDD46_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Totalview broken with 1.5/trunk<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 10:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>In reply to:</strong> <a href="10124.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 14 Dec 2011, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yes - we were having problems making symbols in orterun visible for the &quot;stat&quot; debugger when built dynamically. The symbols are actually instantiated in the debugger base, but they need to be &quot;seen&quot; in orterun prior to us calling orte_init. So, we had to explicitly reference them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was working just fine, and was tested against stat, totalview, and pdb at the time. Not sure why it is now causing problems. However, as I told Nathan, if we find everything works okay without the line, then by all means remove it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, be sure we check &quot;stat&quot;, and that we check both static and dynamic builds under Linux as well as the Cray (IIRC, Nathan is working on the Cray with a static build?).
</span><br>
<p>I have had the chance now to test it with totalview and stat 1.1.0. Looks good. I pushed the fix to the trunk and it will need to be CMRed to 1.5.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>In reply to:</strong> <a href="10124.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
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
