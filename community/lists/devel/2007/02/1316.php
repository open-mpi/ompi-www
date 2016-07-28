<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 24 17:30:46 2007" -->
<!-- isoreceived="20070224223046" -->
<!-- sent="Sat, 24 Feb 2007 17:30:37 -0500" -->
<!-- isosent="20070224223037" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection" -->
<!-- id="25D03437-B512-42A2-BB53-95352A569CF6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-24 17:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1317.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1315.php">Christian Leber: "Re: [OMPI devel] MPI FOR PERL"</a>
<li><strong>In reply to:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1317.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1317.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report and the patch.  Unfortunately, the remove  
<br>
smallest prefix pattern syntax doesn't work with Solaris /bin/sh  
<br>
(standards would be better if everyone followed them...), but I  
<br>
committed something to our development trunk that handles the issue.   
<br>
It should be releases as part of v1.2.1 (we're too far in testing to  
<br>
make it part of v1.2).
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>On Feb 15, 2007, at 9:12 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
</span><br>
<span class="quotelev1">&gt; extract $extra_ldflags from libtool don't work. So here is a little  
</span><br>
<span class="quotelev1">&gt; hack
</span><br>
<span class="quotelev1">&gt; to remove the $CC prefix from the libtool-link cmd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt; diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4  
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.4-extra_ldflags-fix/config/ 
</span><br>
<span class="quotelev1">&gt; ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	 
</span><br>
<span class="quotelev1">&gt; 2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.1.4-extra_ldflags-fix/config/ 
</span><br>
<span class="quotelev1">&gt; ompi_get_libtool_linker_flags.m4	2007-02-15 15:11:28.285844893 +0100
</span><br>
<span class="quotelev1">&gt; @@ -76,11 +76,15 @@
</span><br>
<span class="quotelev1">&gt;  cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la - 
</span><br>
<span class="quotelev1">&gt; o bar $extra_flags&quot;
</span><br>
<span class="quotelev1">&gt;  ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev1">&gt; +tempCC=($CC)
</span><br>
<span class="quotelev1">&gt; +tempCC=&quot;${tempCC[@]}&quot;
</span><br>
<span class="quotelev1">&gt; +output=&quot;${output#$tempCC}&quot;
</span><br>
<span class="quotelev1">&gt; +unset tempCC
</span><br>
<span class="quotelev1">&gt;  eval &quot;set $output&quot;
</span><br>
<span class="quotelev1">&gt;  extra_ldflags=
</span><br>
<span class="quotelev1">&gt;  while test -n &quot;[$]1&quot;; do
</span><br>
<span class="quotelev1">&gt;      case &quot;[$]1&quot; in
</span><br>
<span class="quotelev1">&gt; -    $CC) ;;
</span><br>
<span class="quotelev1">&gt;      *.libs/bar*) ;;
</span><br>
<span class="quotelev1">&gt;      bar*) ;;
</span><br>
<span class="quotelev1">&gt;      -I*) ;;
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
<li><strong>Next message:</strong> <a href="1317.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1315.php">Christian Leber: "Re: [OMPI devel] MPI FOR PERL"</a>
<li><strong>In reply to:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1317.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1317.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
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
