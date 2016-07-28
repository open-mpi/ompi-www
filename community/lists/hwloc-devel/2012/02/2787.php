<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 05:49:32 2012" -->
<!-- isoreceived="20120202104932" -->
<!-- sent="Thu, 2 Feb 2012 11:49:28 +0100" -->
<!-- isosent="20120202104928" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="20120202104928.GM4314_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="626881156.628724.1328102449364.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 05:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 01 Feb 2012 14:20:49 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; &quot;/vlsci/VLSCI/samuel/HWLOC/hwloc-1.3.1/include/hwloc.h&quot;, line 1203.28:
</span><br>
<span class="quotelev1">&gt; 1506-1385 (W) The attribute &quot;pure&quot; is not a valid type attribute.
</span><br>
<span class="quotelev1">&gt;   CC     traversal.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attribute pure is before the function name, I'll move it after, XLC
</span><br>
<span class="quotelev1">&gt; doesn't seems to warn in this case.
</span><br>
<p>I have added const to the returned char* type, it will perhaps fix it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2788.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
