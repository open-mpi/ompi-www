<?
$subject_val = "[hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:51:01 2009" -->
<!-- isoreceived="20091105195101" -->
<!-- sent="Thu, 5 Nov 2009 14:50:56 -0500" -->
<!-- isosent="20091105195056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="13436E2A-8987-4AFF-BB97-0EB1143F2929_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc 0.9.2 autogen issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 14:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="0346.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(re-subjected to be accurate)
<br>
<p>I notice that my autogen.sh outputs:
<br>
<p>autoreconf: running: aclocal -I m4 --force -I config
<br>
<p>but yours outputs:
<br>
<p>autoreconf: running: aclocal --force -I config
<br>
<p><p>where's the &quot;-I m4&quot;?
<br>
<p>....ah, I see you're running AC 2.63.  I'm running AC 2.64.  I just  
<br>
tried with AC 2.63 and I see the same problem.  Lemme see if I can get  
<br>
a workaround.
<br>
<p><p>On Nov 5, 2009, at 2:18 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;       If this token and others are legitimate, please use  
</span><br>
<span class="quotelev1">&gt; m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; autoreconf: /home/balaji/software/tools/install/bin/autoconf failed  
</span><br>
<span class="quotelev1">&gt; with
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
<span class="quotelev2">&gt; &gt; Please beat it up and look for problems!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/software/hwloc/v0.9/">http://www.open-mpi.org/software/hwloc/v0.9/</a>
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
<li><strong>Next message:</strong> <a href="0346.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="0339.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="0346.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
