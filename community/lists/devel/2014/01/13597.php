<?
$subject_val = "[OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 19:52:20 2014" -->
<!-- isoreceived="20140109005220" -->
<!-- sent="Wed, 8 Jan 2014 16:52:17 -0800" -->
<!-- isosent="20140109005217" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA16f_3TLAmGWJVdP-y5XYwcYVvJ26KWz4ryaOi17jhN2EA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 19:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13598.php">Paul Hargrove: "[OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This partial make output shows a build failure of the current trunk tarball
<br>
on FreeBSD-9/x86-64:
<br>
&nbsp;&nbsp;CC       path.lo
<br>
/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:
<br>
In function 'opal_path_df':
<br>
/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556:
<br>
error: 'buf' undeclared (first use in this function)
<br>
/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556:
<br>
error: (Each undeclared identifier is reported only once
<br>
/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/openmpi-1.9a1r30146/opal/util/path.c:556:
<br>
error: for each function it appears in.)
<br>
*** [path.lo] Error code 1
<br>
<p>Builds of the trunk on NetBSD and OpenBSD fail in the same way.
<br>
<p>The code in opal_path_df() seems not to define the variable &quot;buf&quot; unless
<br>
certain defines are present, but then tries to USE the variable
<br>
unconditionally.  That unconditional use of &quot;buf&quot; is the proximate cause of
<br>
the failure.
<br>
<p>A very-likely-related observation:
<br>
The code in opal/util/path.c seems to expect __BSD to be defined under
<br>
*some* circumstance, but it is not defined by any current
<br>
{Free,Net,Open}BSD:
<br>
<p>FreeBSD-9:
<br>
$ touch empty.c
<br>
$ gcc -dM -E empty.c | grep BSD
<br>
#define __FreeBSD_cc_version 900001
<br>
#define __VERSION__ &quot;4.2.1 20070831 patched [FreeBSD]&quot;
<br>
#define __FreeBSD__ 9
<br>
<p>NetBSD-6:
<br>
-bash-4.2$ touch empty.c
<br>
-bash-4.2$ gcc -dM -E empty.c | grep BSD
<br>
#define __NetBSD__ 1
<br>
<p>OpenBSD-5:
<br>
-bash-4.2$ touch empty.c
<br>
-bash-4.2$ gcc -dM -E empty.c | grep BSD
<br>
#define __OpenBSD__ 1
<br>
<p>So, there are TWO issues:
<br>
<p>1) opal_path_df() defines the variable &quot;buf&quot; only conditionally but then
<br>
uses it UNconditionally.
<br>
<p>2) logic which appears to be intended for at least FreeBSD is probably not
<br>
reachable in any build.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13598.php">Paul Hargrove: "[OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13596.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
