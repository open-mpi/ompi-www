<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:20:26 2009" -->
<!-- isoreceived="20091105192026" -->
<!-- sent="Thu, 05 Nov 2009 13:20:18 -0600" -->
<!-- isosent="20091105192018" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc4 is out" -->
<!-- id="4AF32572.5010302_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AF324E9.50200_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc4 is out<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 14:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0341.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0341.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0341.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies. This is my bad! My setup was messed up.
<br>
<p>On 11/05/2009 01:18 PM, Pavan Balaji wrote:
<br>
<span class="quotelev1">&gt; Am I supposed to do something special here for hwloc-0.9.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % autoconf --version
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.63
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2008 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv2+: GNU GPL version 2 or later
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/old-licenses/gpl-2.0.html">http://gnu.org/licenses/old-licenses/gpl-2.0.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % libtool --version
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 2.2.6
</span><br>
<span class="quotelev1">&gt; Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % ./autogen.sh
</span><br>
<span class="quotelev1">&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev1">&gt; autoreconf: running: aclocal --force -I config
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev1">&gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev1">&gt; libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `config'.
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `config/ltmain.sh'
</span><br>
<span class="quotelev1">&gt; libtoolize: putting macros in AC_CONFIG_MACRO_DIR, `config'.
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `config/libtool.m4'
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `config/ltoptions.m4'
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `config/ltsugar.m4'
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `config/ltversion.m4'
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `config/lt~obsolete.m4'
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /home/balaji/software/tools/install/bin/autoconf
</span><br>
<span class="quotelev1">&gt; --include=m4 --force
</span><br>
<span class="quotelev1">&gt; configure.ac:163: error: possibly undefined macro: AC_DEFINE
</span><br>
<span class="quotelev1">&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; autoreconf: /home/balaji/software/tools/install/bin/autoconf failed with
</span><br>
<span class="quotelev1">&gt; exit status: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/04/2009 03:55 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Please beat it up and look for problems!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/hwloc/v0.9/">http://www.open-mpi.org/software/hwloc/v0.9/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0341.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0341.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0341.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
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
