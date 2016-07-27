<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:22:02 2009" -->
<!-- isoreceived="20091105192202" -->
<!-- sent="Thu, 5 Nov 2009 14:21:58 -0500" -->
<!-- isosent="20091105192158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc4 is out" -->
<!-- id="F95D5FEB-81D3-4045-935F-F7D147AA4650_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF32572.5010302_at_mcs.anl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 14:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0342.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0342.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, you shouldn't need to run autogen on the tarball (or are you  
<br>
importing from svn?).
<br>
<p><p>On Nov 5, 2009, at 2:20 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apologies. This is my bad! My setup was messed up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/05/2009 01:18 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Am I supposed to do something special here for hwloc-0.9.2?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % autoconf --version
</span><br>
<span class="quotelev2">&gt; &gt; autoconf (GNU Autoconf) 2.63
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 2008 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; License GPLv2+: GNU GPL version 2 or later
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://gnu.org/licenses/old-licenses/gpl-2.0.html">http://gnu.org/licenses/old-licenses/gpl-2.0.html</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt; &gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % libtool --version
</span><br>
<span class="quotelev2">&gt; &gt; ltmain.sh (GNU libtool) 2.2.6
</span><br>
<span class="quotelev2">&gt; &gt; Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % ./autogen.sh
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: aclocal --force -I config
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `config'.
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: copying file `config/ltmain.sh'
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: putting macros in AC_CONFIG_MACRO_DIR, `config'.
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: copying file `config/libtool.m4'
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: copying file `config/ltoptions.m4'
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: copying file `config/ltsugar.m4'
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: copying file `config/ltversion.m4'
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize: copying file `config/lt~obsolete.m4'
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: /home/balaji/software/tools/install/bin/ 
</span><br>
<span class="quotelev1">&gt; autoconf
</span><br>
<span class="quotelev2">&gt; &gt; --include=m4 --force
</span><br>
<span class="quotelev2">&gt; &gt; configure.ac:163: error: possibly undefined macro: AC_DEFINE
</span><br>
<span class="quotelev2">&gt; &gt;       If this token and others are legitimate, please use  
</span><br>
<span class="quotelev1">&gt; m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt; &gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: /home/balaji/software/tools/install/bin/autoconf  
</span><br>
<span class="quotelev1">&gt; failed with
</span><br>
<span class="quotelev2">&gt; &gt; exit status: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  -- Pavan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/04/2009 03:55 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please beat it up and look for problems!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/software/hwloc/v0.9/">http://www.open-mpi.org/software/hwloc/v0.9/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavan Balaji
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
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
<li><strong>Next message:</strong> <a href="0342.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0342.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0342.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
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
