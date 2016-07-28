<?
$subject_val = "[OMPI devel] autogen.pl broken on master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 15:08:24 2016" -->
<!-- isoreceived="20160719190824" -->
<!-- sent="Tue, 19 Jul 2016 12:08:20 -0700" -->
<!-- isosent="20160719190820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] autogen.pl broken on master" -->
<!-- id="AD212675-2ECF-490B-A26B-F91DCE85BEB7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] autogen.pl broken on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 15:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.pl broken on master"</a>
<li><strong>Previous message:</strong> <a href="19242.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.pl broken on master"</a>
<li><strong>Reply:</strong> <a href="19244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.pl broken on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When trying to run autogen.pl --no-ompi --no-oshmem:
<br>
<p>configure.ac:1307: error: m4_require: circular dependency of AC_LANG_COMPILER(Fortran)
<br>
../../lib/autoconf/lang.m4:329: AC_LANG_COMPILER_REQUIRE is expanded from...
<br>
../../lib/autoconf/general.m4:2678: AC_LINK_IFELSE is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
<br>
../../lib/autoconf/general.m4:2031: AC_CACHE_VAL is expanded from...
<br>
/home/common/local/share/aclocal/libtool.m4:1152: _LT_SYS_MODULE_PATH_AIX is expanded from...
<br>
/home/common/local/share/aclocal/libtool.m4:4896: _LT_LINKER_SHLIBS is expanded from...
<br>
/home/common/local/share/aclocal/libtool.m4:7791: _LT_LANG_FC_CONFIG is expanded from...
<br>
/home/common/local/share/aclocal/libtool.m4:841: _LT_LANG is expanded from...
<br>
/home/common/local/share/aclocal/libtool.m4:823: LT_LANG is expanded from...
<br>
../../lib/autoconf/fortran.m4:261: AC_LANG_COMPILER(Fortran) is expanded from...
<br>
../../lib/autoconf/lang.m4:329: AC_LANG_COMPILER_REQUIRE is expanded from...
<br>
../../lib/autoconf/general.m4:2678: AC_LINK_IFELSE is expanded from...
<br>
config/opal_setup_wrappers.m4:219: OPAL_SETUP_RUNPATH is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
<br>
config/opal_setup_wrappers.m4:137: OPAL_SETUP_RPATH is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
<br>
config/opal_setup_wrappers.m4:320: OPAL_SETUP_WRAPPER_FINAL is expanded from...
<br>
configure.ac:1307: the top level
<br>
autom4te: /home/common/local/bin/m4 failed with exit status: 1
<br>
aclocal: error: echo failed with exit status: 1
<br>
autoreconf: aclocal failed with exit status: 1
<br>
Command failed: autoreconf -ivf --warnings=all,no-obsolete,no-override -I config
<br>
<p><p>I gather someone modified something recently?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.pl broken on master"</a>
<li><strong>Previous message:</strong> <a href="19242.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.pl broken on master"</a>
<li><strong>Reply:</strong> <a href="19244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.pl broken on master"</a>
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
