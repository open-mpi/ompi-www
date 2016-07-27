<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:36:22 2009" -->
<!-- isoreceived="20091208183622" -->
<!-- sent="Tue, 08 Dec 2009 19:36:17 +0100" -->
<!-- isosent="20091208183617" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447" -->
<!-- id="4B1E9CA1.10209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E4ED896-0C9E-4DD2-9D66-4F6E40CD47B0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 13:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0488.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0488.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 8, 2009, at 1:23 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; We already have
</span><br>
<span class="quotelev2">&gt;&gt; LT_PREREQ([2.2.6])
</span><br>
<span class="quotelev2">&gt;&gt; LT_INIT
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't seem to actually enforce libtool &gt;= 2.2.6
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really?  That would be surprising -- I don't have LT &lt; 2.2.6 convenient to test with...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Here's what you get with libtool 1.5.22 and autoconf 2.64 with trunk
<br>
from yesterday:
<br>
$ ./autogen.sh
<br>
autoreconf: Entering directory `.'
<br>
autoreconf: configure.ac: not using Gettext
<br>
autoreconf: running: /usr/local/bin/aclocal
<br>
-I/usr/local/stow/automake-1.11/share/aclocal-1.11/
<br>
-I/usr/local/stow/libtool-2.2.6/share/aclocal/ --force -I config -I m4
<br>
autoreconf: configure.ac: tracing
<br>
autoreconf: running: libtoolize --copy --force
<br>
Remember to add `AC_PROG_LIBTOOL' to `configure.ac'.
<br>
You should update your `aclocal.m4' by running aclocal.
<br>
Putting files in AC_CONFIG_AUX_DIR, `config'.
<br>
autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
<br>
autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoheader --force
<br>
autoreconf: running: automake --add-missing --copy --force-missing
<br>
autoreconf: Leaving directory `.'
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0488.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0488.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
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
