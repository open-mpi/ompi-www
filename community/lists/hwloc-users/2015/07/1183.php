<?
$subject_val = "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 15:05:33 2015" -->
<!-- isoreceived="20150707190533" -->
<!-- sent="Tue, 07 Jul 2015 21:05:30 +0200" -->
<!-- isosent="20150707190530" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Difficulty embedding hwloc 1.11.0" -->
<!-- id="559C22FA.5040500_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="84091339-BC05-4507-9BF4-D5C083046A4F_at_indiana.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Difficulty embedding hwloc 1.11.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-07 15:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Previous message:</strong> <a href="1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>In reply to:</strong> <a href="1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I don't see any significant change in v1.11 regarding embedding,
<br>
especially with respect to CONFIGURE_DEPENDENCIES.
<br>
<p>Does v1.10 work when running autogen with the same versions of
<br>
automake/libtool/autoconf? I am using 1.14.1/2.4.2/2.69 here.
<br>
<p>If you enter hwloc-1.11.0/tests/embedded, does &quot;./run-embedded-tests.sh
<br>
../../hwloc-1.11.0.tar.gz&quot; fail?
<br>
<p>After running autogen.sh, I get hwloc-1.11.0/Makefile.in without the
<br>
line CONFIGURE_DEPENDENCIES = @CONFIGURE_DEPENDENCIES@ here.
<br>
<p>Can you look at
<br>
<a href="https://github.com/open-mpi/hwloc/blob/v1.11/tests/embedded/configure.ac">https://github.com/open-mpi/hwloc/blob/v1.11/tests/embedded/configure.ac</a>
<br>
and see if you're missing something from there? Maybe we forgot to
<br>
specify that some other configure lines are required.
<br>
<p>Brice
<br>
<p><p><p>Le 07/07/2015 20:28, D'Alessandro, Luke K a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve recently tried to update our embedded hwloc from 1.10.0 to 1.11.0 and I&#226;&#128;&#153;m running into an issue. I essentially have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   AS_IF([&#226;&#128;&#166;], 
</span><br>
<span class="quotelev1">&gt;     [HWLOC_SETUP_CORE([contrib/hwloc-1.11.0], [&#226;&#128;&#166;], [AC_MSG_WARN(&#226;&#128;&#166;)], [1])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   HWLOC_DO_AM_CONDITIONALS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have `ACLOCAL_AMFLAGS = -I config -I contrib/hwloc-1.11.0/config` in the top level Makefile.am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that, for whatever reason, (at least) @CONFIGURE_DEPENDENCIES@ isn&#226;&#128;&#153;t being replaced in Makefile.in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ make
</span><br>
<span class="quotelev1">&gt;   Making all in contrib
</span><br>
<span class="quotelev1">&gt;   make[1]: Entering directory `/home/ldalessa/obj/test/contrib'
</span><br>
<span class="quotelev1">&gt;   Makefile:755: warning: overriding commands for target `check-recursive'
</span><br>
<span class="quotelev1">&gt;   Makefile:487: warning: ignoring old commands for target `check-recursive'
</span><br>
<span class="quotelev1">&gt;   Making all in hwloc-1.11.0
</span><br>
<span class="quotelev1">&gt;   make[2]: Entering directory `/home/ldalessa/obj/test/contrib/hwloc-1.11.0'
</span><br>
<span class="quotelev1">&gt;   make[2]: *** No rule to make target `@CONFIGURE_DEPENDENCIES@', needed by `/u/ldalessa/src/contrib/hwloc-1.11.0/Makefile.in'.  Stop.
</span><br>
<span class="quotelev1">&gt;   make[2]: Leaving directory `/home/ldalessa/obj/test/contrib/hwloc-1.11.0'
</span><br>
<span class="quotelev1">&gt;   make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;   make[1]: Leaving directory `/home/ldalessa/obj/test/contrib'
</span><br>
<span class="quotelev1">&gt;   make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;   $ 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am by no means an AC/AM expert. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I likely doing something obviously wrong? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has the embedding protocol changed since the 1.10 series?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Luke
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1183.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1183.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Previous message:</strong> <a href="1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>In reply to:</strong> <a href="1182.php">D'Alessandro, Luke K: "[hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
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
