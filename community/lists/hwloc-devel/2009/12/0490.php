<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:41:49 2009" -->
<!-- isoreceived="20091208184149" -->
<!-- sent="Tue, 08 Dec 2009 19:41:44 +0100" -->
<!-- isosent="20091208184144" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447" -->
<!-- id="4B1E9DE8.3030707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B1E9CA1.10209_at_inria.fr" -->
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
<strong>Date:</strong> 2009-12-08 13:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 8, 2009, at 1:23 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We already have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LT_PREREQ([2.2.6])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LT_INIT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't seem to actually enforce libtool &gt;= 2.2.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Really?  That would be surprising -- I don't have LT &lt; 2.2.6 convenient to test with...
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what you get with libtool 1.5.22 and autoconf 2.64 with trunk
</span><br>
<span class="quotelev1">&gt; from yesterday:
</span><br>
<span class="quotelev1">&gt; $ ./autogen.sh
</span><br>
<span class="quotelev1">&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/local/bin/aclocal
</span><br>
<span class="quotelev1">&gt; -I/usr/local/stow/automake-1.11/share/aclocal-1.11/
</span><br>
<span class="quotelev1">&gt; -I/usr/local/stow/libtool-2.2.6/share/aclocal/ --force -I config -I m4
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev1">&gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev1">&gt; Remember to add `AC_PROG_LIBTOOL' to `configure.ac'.
</span><br>
<span class="quotelev1">&gt; You should update your `aclocal.m4' by running aclocal.
</span><br>
<span class="quotelev1">&gt; Putting files in AC_CONFIG_AUX_DIR, `config'.
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoheader --force
</span><br>
<span class="quotelev1">&gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev1">&gt; autoreconf: Leaving directory `.'
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Or even this if I remove libtool-2.2.6 from ACLOCAL (note that
<br>
AC_LIBTOOL_WIN32_DLL appears after LT_PREREQ and LT_INIT)
<br>
<p>autoreconf: Entering directory `.'
<br>
autoreconf: configure.ac: not using Gettext
<br>
autoreconf: running: /usr/local/bin/aclocal
<br>
-I/usr/local/stow/automake-1.11/share/aclocal-1.11/  --force -I config -I m4
<br>
autoreconf: configure.ac: tracing
<br>
autoreconf: configure.ac: not using Libtool
<br>
autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
<br>
configure.ac:447: error: possibly undefined macro: AC_LIBTOOL_WIN32_DLL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
autoreconf: /usr/local/stow/autoconf-2.64/bin/autoconf failed with exit
<br>
status: 1
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
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
