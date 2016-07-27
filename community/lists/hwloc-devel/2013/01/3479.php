<?
$subject_val = "Re: [hwloc-devel] [RFC] deprecating multiple load() support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:21:38 2013" -->
<!-- isoreceived="20130110152138" -->
<!-- sent="Thu, 10 Jan 2013 15:21:32 +0000" -->
<!-- isosent="20130110152132" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [RFC] deprecating multiple load() support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B0A86_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50E5DFF8.5010801_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [RFC] deprecating multiple load() support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 10:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3480.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5237)"</a>
<li><strong>Previous message:</strong> <a href="3478.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.1rc3r5236)"</a>
<li><strong>In reply to:</strong> <a href="3449.php">Brice Goglin: "[hwloc-devel] [RFC] deprecating multiple load() support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>This sounds fine to me.
<br>
<p><p>On Jan 3, 2013, at 2:46 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc users are supposed to configure/build topologies like this:
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_init()
</span><br>
<span class="quotelev1">&gt;  /* all configuration calls */
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_set_xml()
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_set_flags()
</span><br>
<span class="quotelev1">&gt;  /* end of all configuration calls */
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_load() /* load from XML with flags enabled */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We actually doing things like:
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_init()
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_set_xml()
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_load() /* load from XML */
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_set_flags()
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_load() /* reload from XML with flags enabled */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's convenient in some corner cases, but it is causing some headache
</span><br>
<span class="quotelev1">&gt; for maintenance. And it's not documented as far as I looked. So I am
</span><br>
<span class="quotelev1">&gt; willing to remove this feature. Users will only be allowed to do a
</span><br>
<span class="quotelev1">&gt; single load() per init(), and do set_foo() only between init() and this
</span><br>
<span class="quotelev1">&gt; single load(). That's what basically everybody does, and what the
</span><br>
<span class="quotelev1">&gt; documentation says.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, using different topologies will still be allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a side-effect, tools such as hwloc-calc and hwloc-bind will no longer
</span><br>
<span class="quotelev1">&gt; let you mix options and locations in the command-line. You will have to
</span><br>
<span class="quotelev1">&gt; specify the input topology and flags at the beginning of the
</span><br>
<span class="quotelev1">&gt; command-line and then specify all locations within that topology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anybody cares, please speakup now! The plan is to remove these
</span><br>
<span class="quotelev1">&gt; &quot;features&quot; in v1.8 (could be released in 2013Q3). The delay isn't long
</span><br>
<span class="quotelev1">&gt; but nobody is likely using these features anyway. In the meantime
</span><br>
<span class="quotelev1">&gt; (starting in v1.6.1), we'll issue a warning if somebody ever uses them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3480.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5237)"</a>
<li><strong>Previous message:</strong> <a href="3478.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.1rc3r5236)"</a>
<li><strong>In reply to:</strong> <a href="3449.php">Brice Goglin: "[hwloc-devel] [RFC] deprecating multiple load() support"</a>
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
