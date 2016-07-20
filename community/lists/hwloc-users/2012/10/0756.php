<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 10:32:01 2012" -->
<!-- isoreceived="20121029143201" -->
<!-- sent="Mon, 29 Oct 2012 15:31:32 +0100" -->
<!-- isosent="20121029143132" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="20121029143132.GB23823_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351357855.28880.9.camel_at_iliana.magic" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How do I access CPUModel info string<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 10:31:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/11/0757.php">Brock Palen: "[hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0746.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier Cessenat, le Sat 27 Oct 2012 19:10:55 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Just in case, I also provide the output of sysctl hw:
</span><br>
<p>Thanks. There is indeed no package information (hw.packages), that's why
<br>
hwloc does not include any socket object.
<br>
<p>Brice wrote:
<br>
<span class="quotelev1">&gt; One way to solve this problem (which may also occur on old Linux 
</span><br>
<span class="quotelev1">&gt; distribs) would be to store the CPU model in the machine object. But 
</span><br>
<span class="quotelev1">&gt; we'll have to make sure all processors in the machine are indeed of the 
</span><br>
<span class="quotelev1">&gt; same model. On MacOSX, it looks like sysctl reports a single socket 
</span><br>
<span class="quotelev1">&gt; description anyway, so no problem. 
</span><br>
<p>So we have to resort to that, now commited.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/11/0757.php">Brock Palen: "[hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0746.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
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
