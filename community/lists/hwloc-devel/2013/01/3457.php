<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 09:05:59 2013" -->
<!-- isoreceived="20130107140559" -->
<!-- sent="Mon, 7 Jan 2013 15:05:55 +0100" -->
<!-- isosent="20130107140555" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="20130107140555.GJ12387_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50E15514.20909_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.7<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 09:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3458.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/12/3443.php">Brice Goglin: "[hwloc-devel] v1.6.1 soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3460.php">Ralph Castain: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3460.php">Ralph Castain: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/03/3606.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brice Goglin, le Mon 31 Dec 2012 10:05:41 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;   + The HWLOC_COMPONENTS may now start with '^' to only define a list of
</span><br>
<span class="quotelev1">&gt;     components to exclude.
</span><br>
<p>I'm finding it not intuitive and not generic enough, I'm wondering how
<br>
that didn't affect Open-MPI, which as IUI uses this convention.
<br>
<p>It means that
<br>
<p>HWLOC_COMPONENTS=^cuda,opencl
<br>
<p>disables cuda *and* opencl, while intuition would have told me that it
<br>
disables cuda but enables opencl.
<br>
<p>Also, one would for instance want to be able to do this:
<br>
<p>HWLOC_COMPONENTS=x86,^cuda,^opencl,nvml
<br>
<p>To be able to enable x86 before the default linux, but disable cuda and
<br>
opencl, but enable nvml, as well as all the other usual plugins (without
<br>
having to know the list, which is important for future extensions).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3458.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/12/3443.php">Brice Goglin: "[hwloc-devel] v1.6.1 soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3460.php">Ralph Castain: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3460.php">Ralph Castain: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/03/3606.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
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
