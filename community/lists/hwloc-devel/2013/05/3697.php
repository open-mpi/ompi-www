<?
$subject_val = "Re: [hwloc-devel] hwloc patch suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 07:07:38 2013" -->
<!-- isoreceived="20130506110738" -->
<!-- sent="Mon, 06 May 2013 06:07:33 -0500" -->
<!-- isosent="20130506110733" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patch suggestions" -->
<!-- id="51878EF5.3060107_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51877311.1040100_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patch suggestions<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 07:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3695.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/06/2013 04:08 AM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 05/05/2013 19:26, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; -autoreconf -ivf
</span><br>
<span class="quotelev2">&gt;&gt; +autoreconf ${autoreconf_args:&quot;-ivf&quot;}
</span><br>
<span class="quotelev2">&gt;&gt; -- 1.8.1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This needs an additional dash:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -autoreconf -ivf
</span><br>
<span class="quotelev1">&gt; +autoreconf ${autoreconf_args:-&quot;-ivf&quot;}
</span><br>
<p>Where did you add an extra dash?
<br>
<p><span class="quotelev1">&gt; and it requires a non-empty autoreconf_args such as &quot; &quot; to actually
</span><br>
<span class="quotelev1">&gt; remove our &quot;-ivf&quot;. I assume it's still ok for you.
</span><br>
<p>Yup, that's OK.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3696.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3695.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
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
