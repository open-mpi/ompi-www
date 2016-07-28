<?
$subject_val = "[OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 10:25:43 2009" -->
<!-- isoreceived="20091105152543" -->
<!-- sent="Thu, 5 Nov 2009 10:25:38 -0500" -->
<!-- isosent="20091105152538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released" -->
<!-- id="00113467-456B-4837-A143-98BC842DE984_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A1DFF16-29EF-425C-B9DF-280E138AB0B2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 10:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7094.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just in case you aren't on the hwloc announcement list, we finally  
<br>
released v0.9.2.  See the announcement below for details.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: November 5, 2009 10:12:28 AM EST
</span><br>
<span class="quotelev1">&gt; To: &quot;Hardware Locality Announcement List&quot; &lt;hwloc-announce_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the release
</span><br>
<span class="quotelev1">&gt; of v0.9.2 (we made some trivial documentation-only changes after the
</span><br>
<span class="quotelev1">&gt; v0.9.1 tarballs were posted publicly, and have therefore re-released
</span><br>
<span class="quotelev1">&gt; with the version &quot;v0.9.2&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;     (mirrors will update shortly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc provides command line tools and a C API to obtain the
</span><br>
<span class="quotelev1">&gt; hierarchical map of key computing elements, such as: NUMA memory
</span><br>
<span class="quotelev1">&gt; nodes, shared caches, processor sockets, processor cores, and
</span><br>
<span class="quotelev1">&gt; processor &quot;threads&quot;.  hwloc also gathers various attributes such as
</span><br>
<span class="quotelev1">&gt; cache and memory information, and is portable across a variety of
</span><br>
<span class="quotelev1">&gt; different operating systems and platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc primarily aims at helping high-performance computing (HPC)
</span><br>
<span class="quotelev1">&gt; applications, but is also applicable to any project seeking to exploit
</span><br>
<span class="quotelev1">&gt; code and/or data locality on modern computing platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Note that the hwloc project represents the merger of the
</span><br>
<span class="quotelev1">&gt; libtopology project from INRIA and the Portable Linux Processor
</span><br>
<span class="quotelev1">&gt; Affinity (PLPA) sub-project from Open MPI.  *Both of these prior
</span><br>
<span class="quotelev1">&gt; projects are now deprecated.*  The hwloc v0.9.1/v0.9.2 release is
</span><br>
<span class="quotelev1">&gt; essentially a &quot;re-branding&quot; of the libtopology code base, but with
</span><br>
<span class="quotelev1">&gt; both a few genuinely new features and a few PLPA-like features added
</span><br>
<span class="quotelev1">&gt; in.  More new features and more PLPA-like features will be added to
</span><br>
<span class="quotelev1">&gt; hwloc over time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc supports the following operating systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Linux (including old kernels not having sysfs topology
</span><br>
<span class="quotelev1">&gt; information, with
</span><br>
<span class="quotelev1">&gt;     knowledge of cpusets, offline cpus, and Kerrighed support)
</span><br>
<span class="quotelev1">&gt;   * Solaris
</span><br>
<span class="quotelev1">&gt;   * AIX
</span><br>
<span class="quotelev1">&gt;   * Darwin / OS X
</span><br>
<span class="quotelev1">&gt;   * OSF/1 (a.k.a., Tru64)
</span><br>
<span class="quotelev1">&gt;   * HP-UX
</span><br>
<span class="quotelev1">&gt;   * Microsoft Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc only reports the number of processors on unsupported operating
</span><br>
<span class="quotelev1">&gt; systems; no topology information is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc is available under the BSD license.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-announce mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7094.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
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
