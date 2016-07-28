<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 09:45:44 2007" -->
<!-- isoreceived="20070215144544" -->
<!-- sent="Thu, 15 Feb 2007 15:44:26 +0100" -->
<!-- isosent="20070215144426" -->
<!-- name="Bernhard Fischer" -->
<!-- email="rep.dot.nop_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection" -->
<!-- id="20070215144426.GA19269_at_aon.at" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45D46A4E.100_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bernhard Fischer (<em>rep.dot.nop_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 09:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 15, 2007 at 03:12:30PM +0100, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
</span><br>
<span class="quotelev1">&gt;extract $extra_ldflags from libtool don't work. So here is a little hack
</span><br>
<span class="quotelev1">&gt;to remove the $CC prefix from the libtool-link cmd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Bert Wesarg
</span><br>
<p><span class="quotelev1">&gt;diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4 openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev1">&gt;--- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev1">&gt;+++ openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4	2007-02-15 15:11:28.285844893 +0100
</span><br>
<span class="quotelev1">&gt;@@ -76,11 +76,15 @@
</span><br>
<span class="quotelev1">&gt; cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la -o bar $extra_flags&quot;
</span><br>
<span class="quotelev1">&gt; ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;+# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev1">&gt;+tempCC=($CC)
</span><br>
<p>I don't think that this is portable, fwiw.
<br>
<a href="http://www.opengroup.org/onlinepubs/009695399/idx/shell.html">http://www.opengroup.org/onlinepubs/009695399/idx/shell.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
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
