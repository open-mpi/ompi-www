<?
$subject_val = "Re: [hwloc-devel] 1.0.3 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 10:39:27 2010" -->
<!-- isoreceived="20101108153927" -->
<!-- sent="Mon, 08 Nov 2010 16:39:31 +0100" -->
<!-- isosent="20101108153931" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.3 .so version number" -->
<!-- id="4CD819B3.6020607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA90C0EC-C87E-4EBF-982A-857587CF9114_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.3 .so version number<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 10:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1441.php">Jeff Squyres: "[hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Reply:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good but you already committed this anyway :)
<br>
<p>Brice
<br>
<p><p><p><p>Le 08/11/2010 15:17, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to Libtool docs, I think the 1.0.3 .so version number should be 0:2:0.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone verify/sanity check this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a Trac colorized diff between the 1.0 branch from r2349 and the current HEAD:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD">https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD</a>):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only interface change I see is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid, hwloc_const_cpuset_t hwloc_set)
</span><br>
<span class="quotelev1">&gt; +hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid __hwloc_attribute_unused, hwloc_const_cpuset_t hwloc_set __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which I don't believe impacts shared library linking (i.e., if an app used hwloc_linux_set_tid_cpubind() and compiled against hwloc 1.0.2, I believe it would still link successfully against the 1.0.3 libhwloc.  As such, I believe that this is a non-event, in terms of shared library versioning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So according to the Libtool .so versioning instructions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning">http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info">http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the version number should be 0:2:0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1441.php">Jeff Squyres: "[hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Reply:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
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
