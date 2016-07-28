<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:22:20 2009" -->
<!-- isoreceived="20091021122220" -->
<!-- sent="Wed, 21 Oct 2009 08:22:08 -0400" -->
<!-- isosent="20091021122208" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="C2A997EA-4974-451E-A181-9B9845A250FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADEFA2D.1060706_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 08:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 8:10 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Ok :) I think I'd vote for some like ofed-verbs.h then, it'd match the
</span><br>
<span class="quotelev1">&gt; existing glibc-sched.h and linux-libnuma.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Heh.  This is even more branding confusion that I think OpenFabrics as  
<br>
an organization has not done well to clarify...
<br>
<p>OpenFabrics Enterprise Distribution (OFED) is a) currently Linux-only,  
<br>
and b) is a combined release mechanism / software package for several  
<br>
different upper-level protocols (verbs, UDAPL, MPI, etc.) largely  
<br>
employing RDMA-based technologies.
<br>
<p>The &quot;OFED&quot; software is *not* the same thing as the verbs stack -- it  
<br>
*includes* the verbs stack.  For example, various Linux distros  
<br>
include the verbs stack and some other RDMA-based packages (such as  
<br>
Open MPI) but do *not* include OFED itself.  OFED is basically  
<br>
packaging and an installer/uninstaller for a whole bunch of  
<br>
OpenFabrics-sponsored/related software packages.
<br>
<p>For example, if you use the verbs stack on a RHEL distribution, it's  
<br>
not OFED.  It's the verbs that is packaged by RedHat.  Same with  
<br>
SuSE.  Same with Debian.  Same with ...etc.
<br>
<p>So I think the name would be better as of-verbs.h, or openfabrics- 
<br>
verbs.h, or ...
<br>
<p><span class="quotelev1">&gt; I thought verbs already existed on more than Linux actually. What I
</span><br>
<span class="quotelev1">&gt; meant is that *our* ibverbs.h code is Linux specific (it uses a sysfs
</span><br>
<span class="quotelev1">&gt; specific nice feature of OFED/Linux).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah -- I misunderstood.
<br>
<p><span class="quotelev1">&gt; If we want to keep this file
</span><br>
<span class="quotelev1">&gt; portable, we'll need to port hwloc_ibverbs_get_device_cpuset() to
</span><br>
<span class="quotelev1">&gt; non-Linux OS one day, which means we need a #ifdef LINUX in this  
</span><br>
<span class="quotelev1">&gt; public
</span><br>
<span class="quotelev1">&gt; header. However, IIRC our #define LINUX_SYS is internal only so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Fair enough -- I have no problems #if LINUX'ing it for this release.   
<br>
Mebbe someday if/when verbs is officially released on Solaris and  
<br>
Windows and if we get adventurous enough, we can test on those  
<br>
platforms and remove the #if LINUX protection.  Cool?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
