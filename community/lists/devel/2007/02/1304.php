<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 10:38:52 2007" -->
<!-- isoreceived="20070215153852" -->
<!-- sent="Thu, 15 Feb 2007 16:37:35 +0100" -->
<!-- isosent="20070215153735" -->
<!-- name="Bernhard Fischer" -->
<!-- email="rep.dot.nop_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection" -->
<!-- id="20070215153735.GA20043_at_aon.at" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45D476F7.3080109_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-02-15 10:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1305.php">Bert Wesarg: "[OMPI devel] v1.1/opal/event/poll.c:132: syntax error"</a>
<li><strong>Previous message:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 15, 2007 at 04:06:31PM +0100, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt;Bernhard Fischer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 15, 2007 at 03:12:30PM +0100, Bert Wesarg wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extract $extra_ldflags from libtool don't work. So here is a little hack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to remove the $CC prefix from the libtool-link cmd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4 openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4	2007-02-15 15:11:28.285844893 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,11 +76,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la -o bar $extra_flags&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +tempCC=($CC)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that this is portable, fwiw.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.opengroup.org/onlinepubs/009695399/idx/shell.html">http://www.opengroup.org/onlinepubs/009695399/idx/shell.html</a>
</span><br>
<span class="quotelev1">&gt;Thank you, you are correct. Than please replace the patch with this one.
</span><br>
<p>Looks much better, thanks.
<br>
Now if you'd also adjust the comment.. :)
<br>
<p>cheers,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Bert
</span><br>
<p><span class="quotelev1">&gt;diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4 openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev1">&gt;--- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev1">&gt;+++ openmpi-1.1.4-extra_ldflags-fix/config/ompi_get_libtool_linker_flags.m4	2007-02-15 16:04:22.493816366 +0100
</span><br>
<span class="quotelev1">&gt;@@ -76,11 +76,14 @@
</span><br>
<span class="quotelev1">&gt; cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la -o bar $extra_flags&quot;
</span><br>
<span class="quotelev1">&gt; ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;+# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev1">&gt;+tempCC=`echo $CC`
</span><br>
<span class="quotelev1">&gt;+output=&quot;${output#$tempCC}&quot;
</span><br>
<span class="quotelev1">&gt;+unset tempCC
</span><br>
<span class="quotelev1">&gt; eval &quot;set $output&quot;
</span><br>
<span class="quotelev1">&gt; extra_ldflags=
</span><br>
<span class="quotelev1">&gt; while test -n &quot;[$]1&quot;; do
</span><br>
<span class="quotelev1">&gt;     case &quot;[$]1&quot; in
</span><br>
<span class="quotelev1">&gt;-    $CC) ;;
</span><br>
<span class="quotelev1">&gt;     *.libs/bar*) ;;
</span><br>
<span class="quotelev1">&gt;     bar*) ;;
</span><br>
<span class="quotelev1">&gt;     -I*) ;;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1305.php">Bert Wesarg: "[OMPI devel] v1.1/opal/event/poll.c:132: syntax error"</a>
<li><strong>Previous message:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1303.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
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
