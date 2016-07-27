<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:45:43 2009" -->
<!-- isoreceived="20091208184543" -->
<!-- sent="Tue, 8 Dec 2009 13:45:39 -0500" -->
<!-- isosent="20091208184539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447" -->
<!-- id="0DD9AE79-98EA-467B-A7EC-71496D4EEB95_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1E9DE8.3030707_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 13:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0492.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What happens if you run configure?
<br>
<p>On Dec 8, 2009, at 1:41 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 8, 2009, at 1:23 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We already have
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LT_PREREQ([2.2.6])
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LT_INIT
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It doesn't seem to actually enforce libtool &gt;= 2.2.6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Really?  That would be surprising -- I don't have LT &lt; 2.2.6 convenient to test with...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's what you get with libtool 1.5.22 and autoconf 2.64 with trunk
</span><br>
<span class="quotelev2">&gt; &gt; from yesterday:
</span><br>
<span class="quotelev2">&gt; &gt; $ ./autogen.sh
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: /usr/local/bin/aclocal
</span><br>
<span class="quotelev2">&gt; &gt; -I/usr/local/stow/automake-1.11/share/aclocal-1.11/
</span><br>
<span class="quotelev2">&gt; &gt; -I/usr/local/stow/libtool-2.2.6/share/aclocal/ --force -I config -I m4
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev2">&gt; &gt; Remember to add `AC_PROG_LIBTOOL' to `configure.ac'.
</span><br>
<span class="quotelev2">&gt; &gt; You should update your `aclocal.m4' by running aclocal.
</span><br>
<span class="quotelev2">&gt; &gt; Putting files in AC_CONFIG_AUX_DIR, `config'.
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoheader --force
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: Leaving directory `.'
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or even this if I remove libtool-2.2.6 from ACLOCAL (note that
</span><br>
<span class="quotelev1">&gt; AC_LIBTOOL_WIN32_DLL appears after LT_PREREQ and LT_INIT)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/local/bin/aclocal
</span><br>
<span class="quotelev1">&gt; -I/usr/local/stow/automake-1.11/share/aclocal-1.11/  --force -I config -I m4
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: not using Libtool
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
</span><br>
<span class="quotelev1">&gt; configure.ac:447: error: possibly undefined macro: AC_LIBTOOL_WIN32_DLL
</span><br>
<span class="quotelev1">&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; autoreconf: /usr/local/stow/autoconf-2.64/bin/autoconf failed with exit
</span><br>
<span class="quotelev1">&gt; status: 1
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
<li><strong>Next message:</strong> <a href="0492.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0490.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0492.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
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
