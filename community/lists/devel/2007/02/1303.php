<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 10:09:31 2007" -->
<!-- isoreceived="20070215150931" -->
<!-- sent="Thu, 15 Feb 2007 16:06:31 +0100" -->
<!-- isosent="20070215150631" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection" -->
<!-- id="45D476F7.3080109_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070215144426.GA19269_at_aon.at" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 10:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1304.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1304.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1304.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernhard Fischer wrote:
<br>
<span class="quotelev1">&gt; On Thu, Feb 15, 2007 at 03:12:30PM +0100, Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
</span><br>
<span class="quotelev2">&gt;&gt; extract $extra_ldflags from libtool don't work. So here is a little hack
</span><br>
<span class="quotelev2">&gt;&gt; to remove the $CC prefix from the libtool-link cmd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4 openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev2">&gt;&gt; --- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4	2007-02-15 15:11:28.285844893 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,11 +76,15 @@
</span><br>
<span class="quotelev2">&gt;&gt; cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la -o bar $extra_flags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev2">&gt;&gt; +tempCC=($CC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that this is portable, fwiw.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opengroup.org/onlinepubs/009695399/idx/shell.html">http://www.opengroup.org/onlinepubs/009695399/idx/shell.html</a>
</span><br>
Thank you, you are correct. Than please replace the patch with this one.
<br>
<p>Bert
<br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1303/extra_ldflags-fix.patch">extra_ldflags-fix.patch</a>
</ul>
<!-- attachment="extra_ldflags-fix.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1304.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1304.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1304.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
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
