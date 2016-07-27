<?
$subject_val = "Re: [hwloc-devel] hwloc trouble with the PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 19 15:16:34 2010" -->
<!-- isoreceived="20100919191634" -->
<!-- sent="Sun, 19 Sep 2010 14:16:26 -0500" -->
<!-- isosent="20100919191626" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trouble with the PGI compiler" -->
<!-- id="4C96618A.5050601_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100919143255.GI7470_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trouble with the PGI compiler<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-19 15:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1315.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1314.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Samuel. This patch seems to work. There are still some warnings 
<br>
with respect to the redefinition of CPU_SET, etc., but it doesn't seem 
<br>
to be causing any runtime errors.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 09/19/2010 09:32 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Could you try the attached patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I some sense it adds an odd logic, but it might just work around pgcc's
</span><br>
<span class="quotelev1">&gt; crazyness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
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
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1315.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1314.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
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
