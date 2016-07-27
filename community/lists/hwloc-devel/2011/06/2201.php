<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 17:26:13 2011" -->
<!-- isoreceived="20110613212613" -->
<!-- sent="Mon, 13 Jun 2011 23:26:08 +0200" -->
<!-- isosent="20110613212608" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DF68070.3050602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110613203810.GH5403_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 17:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2202.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2200.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2200.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/06/2011 22:38, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christopher Samuel, le Sun 12 Jun 2011 07:45:48 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I fail to see how that symbol can ever get into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libhwloc.so, as we don't do any network thing at all...
</span><br>
<span class="quotelev2">&gt;&gt; I *suspect* it's being pulled in by libpci - here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ nm /usr/lib/libpci.a | grep res_query
</span><br>
<span class="quotelev2">&gt;&gt;          U __res_query
</span><br>
<span class="quotelev1">&gt; That's possible.  And libpci does not announce this dependency in its
</span><br>
<span class="quotelev1">&gt; /usr/lib/pkgconfig/libpci.pc.  I'm however surprised: don't you have a
</span><br>
<span class="quotelev1">&gt; /usr/lib/libpci.so which the hwloc link should be using instead of
</span><br>
<span class="quotelev1">&gt; libpci.a?
</span><br>
<p>libpci didn't ship a .so nor a .pc in the past. That's why we already
<br>
have this mess about -lz in the configure.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2202.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2200.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2200.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
