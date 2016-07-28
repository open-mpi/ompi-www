<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 16:05:42 2007" -->
<!-- isoreceived="20070316200542" -->
<!-- sent="Fri, 16 Mar 2007 21:05:01 +0100" -->
<!-- isosent="20070316200501" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4:	fix	$extra_ldflags detection" -->
<!-- id="45FAF86D.7010307_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB2331C7-2368-4658-B785-CC56ACEF42EF_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-16 16:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1365.php">Ralph Castain: "[OMPI devel] Status of RHC"</a>
<li><strong>Previous message:</strong> <a href="1363.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc4 has been posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/02/1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1366.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4:	fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1366.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4:	fix	$extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>may I take the liberty to remind you to commit this outstanding fix.
<br>
<p>Than you.
<br>
<p>Bert Wesarg
<br>
<p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Very true, thanks.  I'll fix this evening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2007, at 4:51 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hallo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok the sed should be even more portable. but the problem with a CC  
</span><br>
<span class="quotelev2">&gt;&gt; like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gcc  -m32&quot; isn't solved, so you should add this line and use the  
</span><br>
<span class="quotelev2">&gt;&gt; $tmpCC
</span><br>
<span class="quotelev2">&gt;&gt; in the sed expression, to get &quot;gcc -m32&quot; removed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tmpCC=`echo $CC`
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the bug report and the patch.  Unfortunately, the remove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; smallest prefix pattern syntax doesn't work with Solaris /bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (standards would be better if everyone followed them...), but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; committed something to our development trunk that handles the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should be releases as part of v1.2.1 (we're too far in testing to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make it part of v1.2).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 15, 2007, at 9:12 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extract $extra_ldflags from libtool don't work. So here is a little
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hack
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to remove the $CC prefix from the libtool-link cmd.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; diff -ur openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.1.4-extra_ldflags-fix/config/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_get_libtool_linker_flags.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- openmpi-1.1.4/config/ompi_get_libtool_linker_flags.m4	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2006-04-12 18:12:28.000000000 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ openmpi-1.1.4-extra_ldflags-fix/config/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_get_libtool_linker_flags.m4	2007-02-15 15:11:28.285844893 +0100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -76,11 +76,15 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  cmd=&quot;$libtool --dry-run --mode=link --tag=CC $CC bar.lo libfoo.la -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; o bar $extra_flags&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ompi_check_linker_flags_work yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# use array initializer to remove multiple spaces in $CC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +tempCC=($CC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +tempCC=&quot;${tempCC[@]}&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +output=&quot;${output#$tempCC}&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +unset tempCC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  eval &quot;set $output&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  extra_ldflags=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  while test -n &quot;[$]1&quot;; do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      case &quot;[$]1&quot; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    $CC) ;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      *.libs/bar*) ;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      bar*) ;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      -I*) ;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1365.php">Ralph Castain: "[OMPI devel] Status of RHC"</a>
<li><strong>Previous message:</strong> <a href="1363.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc4 has been posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/02/1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1366.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4:	fix	$extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1366.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4:	fix	$extra_ldflags detection"</a>
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
