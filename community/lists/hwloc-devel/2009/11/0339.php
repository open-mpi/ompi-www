<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:18:13 2009" -->
<!-- isoreceived="20091105191813" -->
<!-- sent="Thu, 05 Nov 2009 13:18:01 -0600" -->
<!-- isosent="20091105191801" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc4 is out" -->
<!-- id="4AF324E9.50200_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="79CA9646-6D64-4A5D-8817-FFB1D6667A9E_at_cisco.com" -->
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
<strong>Date:</strong> 2009-11-05 14:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Jeff Squyres: "[hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0345.php">Jeff Squyres: "[hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am I supposed to do something special here for hwloc-0.9.2?
<br>
<p>% autoconf --version
<br>
autoconf (GNU Autoconf) 2.63
<br>
Copyright (C) 2008 Free Software Foundation, Inc.
<br>
License GPLv2+: GNU GPL version 2 or later
<br>
&lt;<a href="http://gnu.org/licenses/old-licenses/gpl-2.0.html">http://gnu.org/licenses/old-licenses/gpl-2.0.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.
<br>
<p>% libtool --version
<br>
ltmain.sh (GNU libtool) 2.2.6
<br>
Written by Gordon Matzigkeit &lt;gord_at_[hidden]&gt;, 1996
<br>
<p>% ./autogen.sh
<br>
autoreconf: Entering directory `.'
<br>
autoreconf: configure.ac: not using Gettext
<br>
autoreconf: running: aclocal --force -I config
<br>
autoreconf: configure.ac: tracing
<br>
autoreconf: running: libtoolize --copy --force
<br>
libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `config'.
<br>
libtoolize: copying file `config/ltmain.sh'
<br>
libtoolize: putting macros in AC_CONFIG_MACRO_DIR, `config'.
<br>
libtoolize: copying file `config/libtool.m4'
<br>
libtoolize: copying file `config/ltoptions.m4'
<br>
libtoolize: copying file `config/ltsugar.m4'
<br>
libtoolize: copying file `config/ltversion.m4'
<br>
libtoolize: copying file `config/lt~obsolete.m4'
<br>
autoreconf: running: /home/balaji/software/tools/install/bin/autoconf
<br>
--include=m4 --force
<br>
configure.ac:163: error: possibly undefined macro: AC_DEFINE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
autoreconf: /home/balaji/software/tools/install/bin/autoconf failed with
<br>
exit status: 1
<br>
<p>&nbsp;-- Pavan
<br>
<p>On 11/04/2009 03:55 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Please beat it up and look for problems!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/hwloc/v0.9/">http://www.open-mpi.org/software/hwloc/v0.9/</a>
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
<li><strong>Next message:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Jeff Squyres: "[hwloc-devel] 0.9.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0340.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="0345.php">Jeff Squyres: "[hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
