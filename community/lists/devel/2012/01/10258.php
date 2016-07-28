<?
$subject_val = "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 20:54:34 2012" -->
<!-- isoreceived="20120127015434" -->
<!-- sent="Thu, 26 Jan 2012 17:54:29 -0800" -->
<!-- isosent="20120127015429" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)" -->
<!-- id="CAAvDA15sqJKhDNQQUSYcf8-sTS0ObR_3mbZDNdzvvJtcdVxaRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 20:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>Previous message:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Reply:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More results:
<br>
<p>PASS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;macos-10.7/gcc (llvm-gcc-4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;macos-10.7/clang (Apple clang version 3.0) - lots of warnings on
<br>
atomic_impl.h
<br>
These are the compilers that come w/ Xcode 4.2
<br>
<p>FAIL:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;macos-10.7/pgi-11.10
<br>
Fails as follows:
<br>
<p><span class="quotelev1">&gt; Making all in tools/orte-clean
</span><br>
<span class="quotelev1">&gt; source='../../../../orte/tools/orte-clean/orte-clean.c'
</span><br>
<span class="quotelev1">&gt; object='orte-clean.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; DEPDIR=.deps depmode=none /bin/sh ../../../../config/depcomp \
</span><br>
<span class="quotelev1">&gt; pgcc -DHAVE_CONFIG_H -I. -I../../../../orte/tools/orte-clean
</span><br>
<span class="quotelev1">&gt; -I../../../opal/include -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../../..
</span><br>
<span class="quotelev1">&gt; -I../../.. -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include  -D_REENTRANT  -O -DNDEBUG   -c -o orte-clean.o
</span><br>
<span class="quotelev1">&gt; ../../../../orte/tools/orte-clean/orte-clean.c
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link pgcc  -O -DNDEBUG
</span><br>
<span class="quotelev1">&gt;  -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la-lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: pgcc -O -DNDEBUG -o orte-clean orte-clean.o
</span><br>
<span class="quotelev1">&gt;  ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /Users/paul/openmpi-1.4.5rc2/BLD-pgi-11.10/opal/.libs/libopen-pal.a -lutil
</span><br>
<p>Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_orte_odls&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
<br>
ld: symbol(s) not found for architecture x86_64
<br>
<p><p>-Paul
<br>
<p>On Thu, Jan 19, 2012 at 9:55 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Please test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>Previous message:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Reply:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
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
