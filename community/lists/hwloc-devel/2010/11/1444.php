<?
$subject_val = "Re: [hwloc-devel] 1.0.3 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 10:46:52 2010" -->
<!-- isoreceived="20101108154652" -->
<!-- sent="Mon, 8 Nov 2010 10:46:46 -0500" -->
<!-- isosent="20101108154646" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.3 .so version number" -->
<!-- id="11F236E2-7645-46E2-8638-20167B49D1DF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CD819B3.6020607_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 10:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1445.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1449.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eh.  Commits are easy to change.  I had a window of opportunity to do hwloc stuff this morning, so I took the liberty of committing reasoning that if I was wrong, we could just commit a fix.
<br>
<p><p>On Nov 8, 2010, at 10:39 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Looks good but you already committed this anyway :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 08/11/2010 15:17, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Short version:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; According to Libtool docs, I think the 1.0.3 .so version number should be 0:2:0.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can someone verify/sanity check this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More details:
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a Trac colorized diff between the 1.0 branch from r2349 and the current HEAD:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD">https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD</a>):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only interface change I see is this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid, hwloc_const_cpuset_t hwloc_set)
</span><br>
<span class="quotelev2">&gt;&gt; +hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid __hwloc_attribute_unused, hwloc_const_cpuset_t hwloc_set __hwloc_attribute_unused)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which I don't believe impacts shared library linking (i.e., if an app used hwloc_linux_set_tid_cpubind() and compiled against hwloc 1.0.2, I believe it would still link successfully against the 1.0.3 libhwloc.  As such, I believe that this is a non-event, in terms of shared library versioning.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So according to the Libtool .so versioning instructions:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning">http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info">http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe the version number should be 0:2:0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1445.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1449.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
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
