<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc3 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 11:14:14 2009" -->
<!-- isoreceived="20091029151414" -->
<!-- sent="Thu, 29 Oct 2009 11:14:10 -0400" -->
<!-- isosent="20091029151410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc3 has been released" -->
<!-- id="7D6F0412-8F85-4B22-894E-CE62D176EAB8_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20091029140446.GG4630_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc3 has been released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 11:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>In reply to:</strong> <a href="0286.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Reply:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Reply:</strong> <a href="0307.php">Chris Samuel: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tweaked this a bit -- how's this:
<br>
<p>The Hardware Locality (hwloc) team is pleased to announce the release  
<br>
of v0.9.1.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>hwloc provides command line tools and a C API to obtain the  
<br>
hierarchical map of key computing elements, such as: NUMA memory  
<br>
nodes, shared caches, processor sockets, processor cores, and  
<br>
processor &quot;threads&quot;.  hwloc also gathers various attributes such as  
<br>
cache and memory information, and is portable across a variety of  
<br>
different operating systems and platforms.
<br>
<p>hwloc primarily aims at helping high-performance computing (HPC)  
<br>
applications, but is also applicable to any project seeking to exploit  
<br>
code and/or data locality on modern computing platforms.
<br>
<p>*** Note that the hwloc project represents the merger of the  
<br>
libtopology project from INRIA and the Portable Linux Processor  
<br>
Affinity (PLPA) sub-project from Open MPI.  *Both of these prior  
<br>
projects are now deprecated.*  The hwloc v0.9.1 release is essentially  
<br>
a &quot;re-branding&quot; of the libtopology code base, but with both a few  
<br>
genuinely new features and a few PLPA-like features added in.  More  
<br>
new features and more PLPA-like features will be added to hwloc over  
<br>
time.
<br>
<p>hwloc supports the following operating systems:
<br>
<p>&nbsp;&nbsp;&nbsp;* Linux (including old kernels not having sysfs topology  
<br>
information, with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;knowledge of cpusets, offline cpus, and Kerrighed support)
<br>
&nbsp;&nbsp;&nbsp;* Solaris
<br>
&nbsp;&nbsp;&nbsp;* AIX
<br>
&nbsp;&nbsp;&nbsp;* Darwin / OS X
<br>
&nbsp;&nbsp;&nbsp;* OSF/1 (a.k.a., Tru64)
<br>
&nbsp;&nbsp;&nbsp;* HP-UX
<br>
&nbsp;&nbsp;&nbsp;* Microsoft Windows
<br>
<p>hwloc only reports the number of processors on unsupported operating  
<br>
systems; no topology information is available.
<br>
<p>hwloc is available under the BSD license.
<br>
<p><p><p><p><p>On Oct 29, 2009, at 10:04 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Thu 29 Oct 2009 09:54:35 -0400, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice/Samuel -- do you have any verbiage written up for a release
</span><br>
<span class="quotelev2">&gt; &gt; announcement email / Freshmeat record, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adapted from the 0.9 libtopology release: it was mostly the top of
</span><br>
<span class="quotelev1">&gt; README :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#147;
</span><br>
<span class="quotelev1">&gt; hwloc 0.9.1 has been released today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc provides a portable abstraction (across OS, versions,
</span><br>
<span class="quotelev1">&gt; architectures, ...) of the hierarchical topology of modern
</span><br>
<span class="quotelev1">&gt; architectures. It primarily aims at helping high-performance computing
</span><br>
<span class="quotelev1">&gt; applications with gathering information about the hardware so as to
</span><br>
<span class="quotelev1">&gt; exploit it accordingly and efficiently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc provides a hierarchical view of the machine, NUMA memory nodes,
</span><br>
<span class="quotelev1">&gt; sockets, shared caches, cores and simultaneous multithreading. It also
</span><br>
<span class="quotelev1">&gt; gathers various attributes such as cache and memory information.
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
<span class="quotelev1">&gt;   * Darwin
</span><br>
<span class="quotelev1">&gt;   * OSF/1 (aka. Tru64)
</span><br>
<span class="quotelev1">&gt;   * HP-UX
</span><br>
<span class="quotelev1">&gt;   * Windows
</span><br>
<span class="quotelev1">&gt;   * For other OSes, only the number of processors is available for  
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc can be download from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc is available under the BSD license.
</span><br>
<span class="quotelev1">&gt; &#148;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>In reply to:</strong> <a href="0286.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Reply:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<li><strong>Reply:</strong> <a href="0307.php">Chris Samuel: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
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
