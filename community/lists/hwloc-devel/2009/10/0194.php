<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:24:58 2009" -->
<!-- isoreceived="20091021122458" -->
<!-- sent="Wed, 21 Oct 2009 14:23:24 +0200" -->
<!-- isosent="20091021122324" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="4ADEFD3C.8020602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2A997EA-4974-451E-A181-9B9845A250FE_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 08:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0195.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0195.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0195.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 21, 2009, at 8:10 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok :) I think I'd vote for some like ofed-verbs.h then, it'd match the
</span><br>
<span class="quotelev2">&gt;&gt; existing glibc-sched.h and linux-libnuma.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heh.  This is even more branding confusion that I think OpenFabrics as
</span><br>
<span class="quotelev1">&gt; an organization has not done well to clarify...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenFabrics Enterprise Distribution (OFED) is a) currently Linux-only,
</span><br>
<span class="quotelev1">&gt; and b) is a combined release mechanism / software package for several
</span><br>
<span class="quotelev1">&gt; different upper-level protocols (verbs, UDAPL, MPI, etc.) largely
</span><br>
<span class="quotelev1">&gt; employing RDMA-based technologies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;OFED&quot; software is *not* the same thing as the verbs stack -- it
</span><br>
<span class="quotelev1">&gt; *includes* the verbs stack.  For example, various Linux distros
</span><br>
<span class="quotelev1">&gt; include the verbs stack and some other RDMA-based packages (such as
</span><br>
<span class="quotelev1">&gt; Open MPI) but do *not* include OFED itself.  OFED is basically
</span><br>
<span class="quotelev1">&gt; packaging and an installer/uninstaller for a whole bunch of
</span><br>
<span class="quotelev1">&gt; OpenFabrics-sponsored/related software packages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, if you use the verbs stack on a RHEL distribution, it's
</span><br>
<span class="quotelev1">&gt; not OFED.  It's the verbs that is packaged by RedHat.  Same with
</span><br>
<span class="quotelev1">&gt; SuSE.  Same with Debian.  Same with ...etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think the name would be better as of-verbs.h, or
</span><br>
<span class="quotelev1">&gt; openfabrics-verbs.h, or ...
</span><br>
<p>I'd vote for or openfabrics-verbs.h then :)
<br>
<p><span class="quotelev2">&gt;&gt; If we want to keep this file
</span><br>
<span class="quotelev2">&gt;&gt; portable, we'll need to port hwloc_ibverbs_get_device_cpuset() to
</span><br>
<span class="quotelev2">&gt;&gt; non-Linux OS one day, which means we need a #ifdef LINUX in this public
</span><br>
<span class="quotelev2">&gt;&gt; header. However, IIRC our #define LINUX_SYS is internal only so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fair enough -- I have no problems #if LINUX'ing it for this release. 
</span><br>
<span class="quotelev1">&gt; Mebbe someday if/when verbs is officially released on Solaris and
</span><br>
<span class="quotelev1">&gt; Windows and if we get adventurous enough, we can test on those
</span><br>
<span class="quotelev1">&gt; platforms and remove the #if LINUX protection.  Cool?
</span><br>
<p>Or, we could install it only on Linux for now? (and document this in the
<br>
doxyfile)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0195.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0193.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0195.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0195.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
