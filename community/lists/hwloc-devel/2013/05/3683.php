<?
$subject_val = "[hwloc-devel] hwloc patch suggestions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 13:26:11 2013" -->
<!-- isoreceived="20130505172611" -->
<!-- sent="Sun, 05 May 2013 12:26:05 -0500" -->
<!-- isosent="20130505172605" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc patch suggestions" -->
<!-- id="5186962D.2070900_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc patch suggestions<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 13:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3695.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Would you be willing to accept the attached two patches into hwloc?
<br>
<p>The first is a code-contribution from IBM and allows no versioning for
<br>
the hwloc libraries.  This is useful when only the process manager is
<br>
built with hwloc and not the actual user applications (such as in
<br>
mpich), so we don't really care about the hwloc library ABI.
<br>
<p>The second is a minor enhancement to autogen.sh, so we can make
<br>
autogen.sh less verbose based on user settings.
<br>
<p>Neither patch changes the default behavior of hwloc.
<br>
<p>Thanks,
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>


</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3683/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3683/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3685.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Reply:</strong> <a href="3695.php">Brice Goglin: "Re: [hwloc-devel] hwloc patch suggestions"</a>
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
