<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 25 06:51:45 2007" -->
<!-- isoreceived="20070225115145" -->
<!-- sent="Sun, 25 Feb 2007 12:51:34 +0100" -->
<!-- isosent="20070225115134" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection" -->
<!-- id="45E17846.2010904_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25D03437-B512-42A2-BB53-95352A569CF6_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-02-25 06:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>ok the sed should be even more portable. but the problem with a CC like
<br>
&quot;gcc  -m32&quot; isn't solved, so you should add this line and use the $tmpCC
<br>
in the sed expression, to get &quot;gcc -m32&quot; removed:
<br>
<p>tmpCC=`echo $CC`
<br>
<p>Bert
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; Thanks for the bug report and the patch.  Unfortunately, the remove  
</span><br>
<span class="quotelev1">&gt; smallest prefix pattern syntax doesn't work with Solaris /bin/sh  
</span><br>
<span class="quotelev1">&gt; (standards would be better if everyone followed them...), but I  
</span><br>
<span class="quotelev1">&gt; committed something to our development trunk that handles the issue.   
</span><br>
<span class="quotelev1">&gt; It should be releases as part of v1.2.1 (we're too far in testing to  
</span><br>
<span class="quotelev1">&gt; make it part of v1.2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2007, at 9:12 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
</span><br>
<span class="quotelev2">&gt;&gt; extract $extra_ldflags from libtool don't work. So here is a little  
</span><br>
<span class="quotelev2">&gt;&gt; hack
</span><br>
<span class="quotelev2">&gt;&gt; to remove the $CC prefix from the libtool-link cmd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt; diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.4-extra_ldflags-fix/config/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev2">&gt;&gt; --- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	 
</span><br>
<span class="quotelev2">&gt;&gt; 2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.1.4-extra_ldflags-fix/config/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_get_libtool_linker_flags.m4	2007-02-15 15:11:28.285844893 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -76,11 +76,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;  cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la - 
</span><br>
<span class="quotelev2">&gt;&gt; o bar $extra_flags&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev2">&gt;&gt; +tempCC=($CC)
</span><br>
<span class="quotelev2">&gt;&gt; +tempCC=&quot;${tempCC[@]}&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +output=&quot;${output#$tempCC}&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +unset tempCC
</span><br>
<span class="quotelev2">&gt;&gt;  eval &quot;set $output&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  extra_ldflags=
</span><br>
<span class="quotelev2">&gt;&gt;  while test -n &quot;[$]1&quot;; do
</span><br>
<span class="quotelev2">&gt;&gt;      case &quot;[$]1&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; -    $CC) ;;
</span><br>
<span class="quotelev2">&gt;&gt;      *.libs/bar*) ;;
</span><br>
<span class="quotelev2">&gt;&gt;      bar*) ;;
</span><br>
<span class="quotelev2">&gt;&gt;      -I*) ;;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>In reply to:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
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
