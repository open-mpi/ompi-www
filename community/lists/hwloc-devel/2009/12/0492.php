<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:50:53 2009" -->
<!-- isoreceived="20091208185053" -->
<!-- sent="Tue, 08 Dec 2009 19:50:47 +0100" -->
<!-- isosent="20091208185047" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447" -->
<!-- id="4B1EA007.9070906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0DD9AE79-98EA-467B-A7EC-71496D4EEB95_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-08 13:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; What happens if you run configure?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>In the first error I sent, configure works and build fails with:
<br>
Making all in src
<br>
make[1]: Entering directory `/net/home/bgoglin/hwloc/build3/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
../libtool: line 819: X--tag=CC: command not found
<br>
../libtool: line 852: libtool: ignoring unknown tag : command not found
<br>
../libtool: line 819: X--mode=compile: command not found
<br>
../libtool: line 985: *** Warning: inferring the mode of operation is
<br>
deprecated.: command not found
<br>
../libtool: line 986: *** Future versions of Libtool will require
<br>
--mode=MODE be specified.: command not found
<br>
../libtool: line 1129: Xgcc: command not found
<br>
../libtool: line 1129: X-std=gnu99: command not found
<br>
../libtool: line 1129: X-DHAVE_CONFIG_H: command not found
<br>
../libtool: line 1129: X-I.: command not found
<br>
<p>After the second error I sent, configure does:
<br>
../gitsrc/configure: line 7566: syntax error near unexpected token `2.2.6'
<br>
../gitsrc/configure: line 7566: `LT_PREREQ(2.2.6)'
<br>
<p><span class="quotelev1">&gt; On Dec 8, 2009, at 1:41 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 8, 2009, at 1:23 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We already have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LT_PREREQ([2.2.6])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LT_INIT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It doesn't seem to actually enforce libtool &gt;= 2.2.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Really?  That would be surprising -- I don't have LT &lt; 2.2.6 convenient to test with...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's what you get with libtool 1.5.22 and autoconf 2.64 with trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from yesterday:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: /usr/local/bin/aclocal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/usr/local/stow/automake-1.11/share/aclocal-1.11/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/usr/local/stow/libtool-2.2.6/share/aclocal/ --force -I config -I m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember to add `AC_PROG_LIBTOOL' to `configure.ac'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should update your `aclocal.m4' by running aclocal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Putting files in AC_CONFIG_AUX_DIR, `config'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoheader --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: Leaving directory `.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Or even this if I remove libtool-2.2.6 from ACLOCAL (note that
</span><br>
<span class="quotelev2">&gt;&gt; AC_LIBTOOL_WIN32_DLL appears after LT_PREREQ and LT_INIT)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.ac: not using Gettext
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: /usr/local/bin/aclocal
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/local/stow/automake-1.11/share/aclocal-1.11/  --force -I config -I m4
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.ac: tracing
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.ac: not using Libtool
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: /usr/local/stow/autoconf-2.64/bin/autoconf --force
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:447: error: possibly undefined macro: AC_LIBTOOL_WIN32_DLL
</span><br>
<span class="quotelev2">&gt;&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt;&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: /usr/local/stow/autoconf-2.64/bin/autoconf failed with exit
</span><br>
<span class="quotelev2">&gt;&gt; status: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
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
