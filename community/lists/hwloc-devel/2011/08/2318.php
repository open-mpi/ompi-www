<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 21:02:57 2011" -->
<!-- isoreceived="20110826010257" -->
<!-- sent="Thu, 25 Aug 2011 21:02:55 -0400" -->
<!-- isosent="20110826010255" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201108260102.p7Q12tJS012234_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 21:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2319.php">Jeff Squyres: "[hwloc-devel] trunk make check on eddie"</a>
<li><strong>Previous message:</strong> <a href="2317.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Thu Aug 25 21:01:02 EDT 2011
<br>
End time:   Thu Aug 25 21:02:55 EDT 2011
<br>
<p>=======================================================================
<br>
{ test ! -d &quot;hwloc-1.4a1r3680&quot; || { find &quot;hwloc-1.4a1r3680&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.4a1r3680&quot;; }; }
<br>
test -d &quot;hwloc-1.4a1r3680&quot; || mkdir &quot;hwloc-1.4a1r3680&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.4a1r3680 distdir=../hwloc-1.4a1r3680/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/src'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/src'
<br>
&nbsp;(cd include &amp;&amp; make  top_distdir=../hwloc-1.4a1r3680 distdir=../hwloc-1.4a1r3680/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.4a1r3680 distdir=../hwloc-1.4a1r3680/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/utils'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/utils'
<br>
&nbsp;(cd tests &amp;&amp; make  top_distdir=../hwloc-1.4a1r3680 distdir=../hwloc-1.4a1r3680/tests \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests'
<br>
&nbsp;(cd ports &amp;&amp; make  top_distdir=../../hwloc-1.4a1r3680 distdir=../../hwloc-1.4a1r3680/tests/ports \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/ports'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/ports'
<br>
&nbsp;(cd xml &amp;&amp; make  top_distdir=../../hwloc-1.4a1r3680 distdir=../../hwloc-1.4a1r3680/tests/xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/xml'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/xml'
<br>
&nbsp;(cd linux &amp;&amp; make  top_distdir=../../hwloc-1.4a1r3680 distdir=../../hwloc-1.4a1r3680/tests/linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/linux'
<br>
&nbsp;(cd gather &amp;&amp; make  top_distdir=../../../hwloc-1.4a1r3680 distdir=../../../hwloc-1.4a1r3680/tests/linux/gather \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/linux/gather'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/linux/gather'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests/linux'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/tests'
<br>
&nbsp;(cd doc &amp;&amp; make  top_distdir=../hwloc-1.4a1r3680 distdir=../hwloc-1.4a1r3680/doc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
/bin/mkdir -p images
<br>
/usr/bin/fig2dev -L png images/diagram.fig images/diagram.png
<br>
/bin/mkdir -p images
<br>
/usr/bin/fig2dev -L eps images/diagram.fig images/diagram.eps
<br>
rm -fr doxygen-doc
<br>
/usr/bin/doxygen /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOXYFILE_ENCODING      =' at line 39, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QT_AUTOBRIEF           =' at line 165, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SEPARATE_MEMBER_PAGES  =' at line 185, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `OPTIMIZE_FOR_FORTRAN   =' at line 219, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `OPTIMIZE_OUTPUT_VHDL   =' at line 225, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `EXTENSION_MAPPING      =' at line 236, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `BUILTIN_STL_SUPPORT    =' at line 245, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `CPP_CLI_SUPPORT        =' at line 250, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SIP_SUPPORT            =' at line 256, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `IDL_PROPERTY_SUPPORT   =' at line 265, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `TYPEDEF_HIDES_STRUCT   =' at line 290, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SYMBOL_CACHE_SIZE      =' at line 306, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `EXTRACT_ANON_NSPACES   =' at line 348, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SORT_GROUP_NAMES       =' at line 429, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SHOW_FILES             =' at line 496, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SHOW_NAMESPACES        =' at line 503, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `FILE_VERSION_FILTER    =' at line 513, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `LAYOUT_FILE            =' at line 522, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `WARN_NO_PARAMDOC       =' at line 558, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `INPUT_ENCODING         =' at line 593, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `EXCLUDE_SYMBOLS        =' at line 636, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `REFERENCES_LINK_SOURCE =' at line 734, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `USE_HTAGS              =' at line 742, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `HTML_DYNAMIC_SECTIONS  =' at line 827, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `GENERATE_DOCSET        =' at line 839, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOCSET_FEEDNAME        =' at line 846, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOCSET_BUNDLE_ID       =' at line 853, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `CHM_INDEX_ENCODING     =' at line 886, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `GENERATE_QHP           =' at line 904, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QCH_FILE               =' at line 910, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_NAMESPACE          =' at line 916, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_VIRTUAL_FOLDER     =' at line 922, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_CUST_FILTER_NAME   =' at line 928, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_CUST_FILTER_ATTRS  =' at line 933, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_SECT_FILTER_ATTRS  =' at line 939, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHG_LOCATION           =' at line 946, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `FORMULA_FONTSIZE       =' at line 988, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `LATEX_SOURCE_CODE      =' at line 1068, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `MSCGEN_PATH            =' at line 1354, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_FONTNAME           =' at line 1378, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_FONTSIZE           =' at line 1383, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_FONTPATH           =' at line 1390, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `GROUP_GRAPHS           =' at line 1409, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `CALLER_GRAPH           =' at line 1450, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DIRECTORY_GRAPH        =' at line 1462, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_GRAPH_MAX_NODES    =' at line 1489, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_TRANSPARENT        =' at line 1507, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_MULTI_TARGETS      =' at line 1514, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: argument `NONE' for option GENERATE_TREEVIEW is not a valid boolean value
<br>
Using the default: NO!
<br>
Notice: Output directory `../doc/doxygen-doc' does not exist. I have created it for you.
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h:660: Warning: member hwloc_distributev: ignoring the detailed description found here, since another one was found at line 630 of file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h!
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h:660: Warning: member hwloc_distributev: ignoring the brief description found here, since another one was found at line 630 of file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h!
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:267: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:425: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:435: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:624: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:625: Warning: unable to resolve reference to `tools' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:626: Warning: unable to resolve reference to `envvar' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:627: Warning: unable to resolve reference to `cpu_mem_bind' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:628: Warning: unable to resolve reference to `iodevices' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:629: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:630: Warning: unable to resolve reference to `threadsafety' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:631: Warning: unable to resolve reference to `embed' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:632: Warning: unable to resolve reference to `faq' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:643: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:754: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:762: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:835: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:954: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1012: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1081: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1175: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1256: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1319: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1487: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:267: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:425: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:435: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:624: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:625: Warning: unable to resolve reference to `tools' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:626: Warning: unable to resolve reference to `envvar' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:627: Warning: unable to resolve reference to `cpu_mem_bind' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:628: Warning: unable to resolve reference to `iodevices' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:629: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:630: Warning: unable to resolve reference to `threadsafety' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:631: Warning: unable to resolve reference to `embed' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:632: Warning: unable to resolve reference to `faq' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:643: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:754: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:762: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:835: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:954: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1012: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1081: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1175: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1256: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1319: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1487: Warning: Found unknown command `\page'
<br>
Searching for include files...
<br>
Searching for example files...
<br>
Searching for images...
<br>
Searching for dot files...
<br>
Searching for files to exclude
<br>
Reading input files...
<br>
Reading and parsing tag files
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/bitmap.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/glibc-sched.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux-libnuma.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cuda.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cudart.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/openfabrics-verbs.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/myriexpress.h...
<br>
Read 235224 bytes
<br>
Parsing input...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/bitmap.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/glibc-sched.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux-libnuma.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cuda.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cudart.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/openfabrics-verbs.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/myriexpress.h...
<br>
Freeing input...
<br>
Building group list...
<br>
Building directory list...
<br>
Building namespace list...
<br>
Building file list...
<br>
Searching for included using directives...
<br>
Building class list...
<br>
Building example list...
<br>
Searching for documented variables...
<br>
Building member list...
<br>
Searching for friends...
<br>
Searching for documented defines...
<br>
Computing template instances...
<br>
Flushing cached template relations that have become invalid...
<br>
Creating members for template instances...
<br>
Computing class relations...
<br>
Searching for enumerations...
<br>
Searching for members imported via using declarations...
<br>
Searching for member function documentation...
<br>
Building page list...
<br>
Search for main page...
<br>
Sorting lists...
<br>
Freeing entry tree
<br>
Determining which enums are documented
<br>
Computing member relations...
<br>
Building full member lists recursively...
<br>
Adding members to member groups.
<br>
Computing member references...
<br>
Inheriting documentation...
<br>
Generating disk names...
<br>
Adding source references...
<br>
Adding todo/test/bug list items...
<br>
Generating style sheet...
<br>
Counting data structures...
<br>
Resolving user defined references...
<br>
Combining using relations...
<br>
Finding anchors and sections in the documentation...
<br>
Generating index page...
<br>
Generating file index...
<br>
Generating example documentation...
<br>
Generating file sources...
<br>
Generating code for file bitmap.h...
<br>
Generating code for file cuda.h...
<br>
Generating code for file cuda/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc.h:213: Warning: Found unknown command `\private'
<br>
rt.h...
<br>
Generating code for file glibc-sched.h...
<br>
Generating code for file helper.h...
<br>
Generating code for file hwloc.h...
<br>
Generating code for file linux-libnuma.h...
<br>
Generating code for file linux.h...
<br>
Generating code for file myriexpress.h...
<br>
Generating code for file openfabrics-verbs.h...
<br>
Generating file documentation...
<br>
Generating docs for file bitmap.h...
<br>
Generating docs for file cuda.h...
<br>
Generating docs for file cudart.h...
<br>
Generating docs for file glibc-sched.h...
<br>
Generating docs for file helper.h...
<br>
Generating docs for file hwloc.doxy...
<br>
Generating docs for file hwloc.h...
<br>
Generating docs for file linux-libnuma.h...
<br>
Generating docs for file linux.h...
<br>
Generating docs for file myriexpress.h...
<br>
Generating docs for file openfabrics-verbs.h...
<br>
Generating class documentation...
<br>
Generating annotated compound index...
<br>
Generating hierarchical class index...
<br>
Generating member index...
<br>
Generating docs for compound hwloc_distances_s...
<br>
Generating docs for compound hwloc_obj...
<br>
Generating docs for compound hwloc_obj_attr_u...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_bridge_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_cache_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_group_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_osdev_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_pcidev_attr_s...
<br>
Generating docs for compound hwloc_obj_info_s...
<br>
Generating docs for compound hwloc_obj_memory_s...
<br>
Generating docs for nested compound hwloc_obj_memory_s::hwloc_obj_memory_page_type_s...
<br>
Generating docs for compound hwloc_topology_cpubind_support...
<br>
Generating docs for compound hwloc_topology_discovery_support...
<br>
Generating docs for compound hwloc_topology_membind_support...
<br>
Generating docs for compound hwloc_topology_support...
<br>
Generating page documentation...
<br>
Generating group documentation...
<br>
Generating namespace index...
<br>
Generating group index...
<br>
Generating example index...
<br>
Generating file member index...
<br>
Generating namespace member index...
<br>
Generating page index...
<br>
Generating graph info page...
<br>
/bin/sed -i -e 's/__hwloc_restrict/restrict/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-restrict/restrict/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_unused//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-unused//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_malloc//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-malloc//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_const//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-const//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_pure//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-pure//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_deprecated//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-deprecated//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/HWLOC_DECLSPEC//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/HWLOC\\_\\-DECLSPEC//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_inline/inline/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-inline/inline/g' \
<br>
doxygen-doc/html/*.html doxygen-doc/latex/*.tex doxygen-doc/man/man3/*.3
<br>
Work-around spurious leading _ in doxygen filenames...
<br>
(cd doxygen-doc/man/man3 ; \
<br>
for i in _hwloc* ; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ ! -f $i ] || mv $i ${i#_} ; \
<br>
done)
<br>
Removing useless manpages...
<br>
cd doxygen-doc/latex; \
<br>
rm -f *.aux *.toc *.idx *.ind *.ilg *.log *.out; \
<br>
/bin/sed -e 's/a4paper/letterpaper/g' -e 's/\\usepackage{a4wide}//' refman.tex &gt; letter-refman.tex; \
<br>
/usr/bin/pdflatex letter-refman.tex; \
<br>
/usr/bin/makeindex letter-refman.idx; \
<br>
/usr/bin/pdflatex letter-refman.tex; \
<br>
done=0; repeat=5; \
<br>
while test $done = 0 -a $repeat -gt 0; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/grep -E 'Rerun (LaTeX|to get cross-references right)' letter-refman.log &gt; /dev/null 2&gt;&amp;1; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/pdflatex letter-refman.tex; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repeat=`expr $repeat - 1`; \
<br>
&nbsp;&nbsp;&nbsp;else \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done=1; \
<br>
&nbsp;&nbsp;&nbsp;fi; \
<br>
done; \
<br>
mv letter-refman.pdf /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen-doc/hwloc-letter.pdf
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./letter-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file letter-refman.idx
<br>
No file letter-refman.aux.
<br>
(/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) [1{/usr/share/texmf/dvips/con
<br>
fig/pdftex.map}] [2]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex (/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.17 ...d support) \item Solaris \item AIX \item D
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arwin / OS X \item Free\-B...
<br>
[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=53, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
Underfull \vbox (badness 1048) has occurred while \output is active [3]
<br>
[4 &lt;./dudley.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 186--186
<br>
[]      /pcrr8t_at_8.0pt/dmi_board_vendor=&quot;Dell Computer Corporation&quot; dmi_board_na
<br>
me=&quot;0RD318&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 186--186
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00001111&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000101&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;8&quot; cpus
<br>
et=&quot;0x00000100&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000100&quot; online_cpuset=&quot;0
<br>
x00000100&quot;[] 
<br>
[5]
<br>
Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpus
<br>
et=&quot;0x00001010&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpus
<br>
et=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0
<br>
x00000010&quot;[] 
<br>
<p>Overfull \hbox (34.20024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;12&quot; cpu
<br>
set=&quot;0x00001000&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00001000&quot; online_cpuset=&quot;0
<br>
x00001000&quot;[] 
<br>
&lt;hagrid.png, id=74, 973.6375pt x 291.0875pt&gt; &lt;use hagrid.png&gt;
<br>
Overfull \hbox (628.63512pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./hagrid.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]      /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x
<br>
00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset
<br>
=&quot;0x00000001&quot;/&gt;[] 
<br>
&lt;emmett.png, id=84, 431.6125pt x 431.6125pt&gt; &lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [8]
<br>
Overfull \hbox (0.60022pt too wide) in paragraph at lines 352--352
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00000055&quot;[] 
<br>
[9 &lt;./emmett.png&gt;]
<br>
Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Underfull \vbox (badness 2478) has occurred while \output is active [10]
<br>
&lt;ppc64-with-smt.pdf, id=106, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=107, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=126, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [12 &lt;./ppc
<br>
64-without-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [14]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [15]
<br>
Overfull \hbox (24.60023pt too wide) in paragraph at lines 567--567
<br>
[]            /pcrr8t_at_8.0pt/printf(&quot;Couldn't bind to cpuset %s: %s\n&quot;, str, str
<br>
error(error));[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [16]
<br>
[17]
<br>
Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a>[][]/ptmr
<br>
8t/).
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Bug re-ports should be re-ported in the tracker
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/libtopology/">http://runtime.bordeaux.inria.fr/libtopology/</a>[][]/ptmr8t/)
<br>
<p><p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA)
<br>
<p>Underfull \hbox (badness 6592) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/) projec
<br>
t. Be-cause of
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 3019) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \vbox (badness 1824) has occurred while \output is active [18]
<br>
[19] [20] &lt;diagram.pdf, id=206, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (327.51085pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [21]
<br>
Overfull \vbox (175.74323pt too high) has occurred while \output is active
<br>
[22 &lt;./diagram.pdf&gt;] [23]
<br>
Underfull \hbox (badness 1924) in paragraph at lines 727--728
<br>
[]/ptmr8t/enforces the re-turn value of [][]hwloc_-topology_-is_-
<br>
[24]
<br>
Underfull \hbox (badness 2027) in paragraph at lines 733--734
<br>
[]/ptmr8t/relaxes dis-tance com-par-i-son dur-ing
<br>
[25] [26]
<br>
Underfull \hbox (badness 1303) in paragraph at lines 772--773
<br>
/ptmr8t/When I/O dis-cov-ery is en-abled and sup-ported, some ad-di-tional ob-j
<br>
ects (types
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 772--773
<br>
[][]/pcrr8t/HWLOC_-OBJ_-BRIDGE[][]/ptmr8t/, [][]/pcrr8t/HWLOC_-OBJ_-PCI_-DEVICE
<br>
[][] /ptmr8t/and [][]/pcrr8t/HWLOC_-OBJ_-OS_-
<br>
[27] [28]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
This is makeindex, version 2.14 [02-Oct-2002] (kpathsea + Thai support).
<br>
Scanning input file letter-refman.idx...done (0 entries accepted, 0 rejected).
<br>
Nothing written in letter-refman.ind.
<br>
Transcript written in letter-refman.ilg.
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./letter-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file letter-refman.idx
<br>
(./letter-refman.aux) (/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) (./letter-refman.out)
<br>
(./letter-refman.out) [1{/usr/share/texmf/dvips/config/pdftex.map}] [2]
<br>
(./letter-refman.toc)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex (/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.17 ...d support) \item Solaris \item AIX \item D
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arwin / OS X \item Free\-B...
<br>
[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=123, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
Underfull \vbox (badness 1048) has occurred while \output is active [3]
<br>
[4 &lt;./dudley.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 186--186
<br>
[]      /pcrr8t_at_8.0pt/dmi_board_vendor=&quot;Dell Computer Corporation&quot; dmi_board_na
<br>
me=&quot;0RD318&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 186--186
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00001111&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000101&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;8&quot; cpus
<br>
et=&quot;0x00000100&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000100&quot; online_cpuset=&quot;0
<br>
x00000100&quot;[] 
<br>
[5]
<br>
Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpus
<br>
et=&quot;0x00001010&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpus
<br>
et=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0
<br>
x00000010&quot;[] 
<br>
<p>Overfull \hbox (34.20024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;12&quot; cpu
<br>
set=&quot;0x00001000&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00001000&quot; online_cpuset=&quot;0
<br>
x00001000&quot;[] 
<br>
&lt;hagrid.png, id=142, 973.6375pt x 291.0875pt&gt; &lt;use hagrid.png&gt;
<br>
Overfull \hbox (628.63512pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./hagrid.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]      /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x
<br>
00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset
<br>
=&quot;0x00000001&quot;/&gt;[] 
<br>
&lt;emmett.png, id=152, 431.6125pt x 431.6125pt&gt; &lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [8]
<br>
Overfull \hbox (0.60022pt too wide) in paragraph at lines 352--352
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00000055&quot;[] 
<br>
[9 &lt;./emmett.png&gt;]
<br>
Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Underfull \vbox (badness 2478) has occurred while \output is active [10]
<br>
&lt;ppc64-with-smt.pdf, id=173, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=174, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=193, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [12 &lt;./ppc
<br>
64-without-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [14]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [15]
<br>
Overfull \hbox (24.60023pt too wide) in paragraph at lines 567--567
<br>
[]            /pcrr8t_at_8.0pt/printf(&quot;Couldn't bind to cpuset %s: %s\n&quot;, str, str
<br>
error(error));[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [16]
<br>
[17]
<br>
Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a>[][]/ptmr
<br>
8t/).
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Bug re-ports should be re-ported in the tracker
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/libtopology/">http://runtime.bordeaux.inria.fr/libtopology/</a>[][]/ptmr8t/)
<br>
<p><p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA)
<br>
<p>Underfull \hbox (badness 6592) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/) projec
<br>
t. Be-cause of
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 3019) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \vbox (badness 1824) has occurred while \output is active [18]
<br>
[19] [20] &lt;diagram.pdf, id=270, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (327.51085pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [21]
<br>
Overfull \vbox (175.74323pt too high) has occurred while \output is active
<br>
[22 &lt;./diagram.pdf&gt;] [23]
<br>
Underfull \hbox (badness 1924) in paragraph at lines 727--728
<br>
[]/ptmr8t/enforces the re-turn value of [][]hwloc_-topology_-is_-
<br>
[24]
<br>
Underfull \hbox (badness 2027) in paragraph at lines 733--734
<br>
[]/ptmr8t/relaxes dis-tance com-par-i-son dur-ing
<br>
[25] [26]
<br>
Underfull \hbox (badness 1303) in paragraph at lines 772--773
<br>
/ptmr8t/When I/O dis-cov-ery is en-abled and sup-ported, some ad-di-tional ob-j
<br>
ects (types
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 772--773
<br>
[][]/pcrr8t/HWLOC_-OBJ_-BRIDGE[][]/ptmr8t/, [][]/pcrr8t/HWLOC_-OBJ_-PCI_-DEVICE
<br>
[][] /ptmr8t/and [][]/pcrr8t/HWLOC_-OBJ_-OS_-
<br>
[27] [28]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
cd doxygen-doc/latex; \
<br>
rm -f *.aux *.toc *.idx *.ind *.ilg *.log *.out; \
<br>
cp refman.tex a4-refman.tex; \
<br>
/usr/bin/pdflatex a4-refman.tex; \
<br>
/usr/bin/makeindex a4-refman.idx; \
<br>
/usr/bin/pdflatex a4-refman.tex; \
<br>
done=0; repeat=5; \
<br>
while test $done = 0 -a $repeat -gt 0; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/grep -E 'Rerun (LaTeX|to get cross-references right)' a4-refman.log &gt; /dev/null 2&gt;&amp;1; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/pdflatex a4-refman.tex; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repeat=`expr $repeat - 1`; \
<br>
&nbsp;&nbsp;&nbsp;else \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done=1; \
<br>
&nbsp;&nbsp;&nbsp;fi; \
<br>
done; \
<br>
mv a4-refman.pdf /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen-doc/hwloc-a4.pdf
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./a4-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/misc/a4wide.sty
<br>
(/usr/share/texmf/tex/latex/ntgclass/a4.sty))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file a4-refman.idx
<br>
No file a4-refman.aux.
<br>
(/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) [1{/usr/share/texmf/dvips/con
<br>
fig/pdftex.map}] [2]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex
<br>
Underfull \hbox (badness 10000) in paragraph at lines 1--1
<br>
[]/ptmb8t_at_14.4pt/Portable ab-strac-tion of hi-er-ar-chi-cal ar-chi-tec-tures fo
<br>
r high-
<br>
(/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.21 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.70 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=59, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
[3 &lt;./dudley.png&gt;] [4] &lt;hagrid.png, id=70, 973.6375pt x 291.0875pt&gt;
<br>
&lt;use hagrid.png&gt;
<br>
Overfull \hbox (549.04887pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
[5 &lt;./hagrid.png&gt;] &lt;emmett.png, id=76, 431.6125pt x 431.6125pt&gt;
<br>
&lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./emmett.png&gt;] [8] &lt;ppc64-with-smt.pdf, id=100, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=101, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [9 &lt;./ppc6
<br>
4-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt; &lt;./ppc64-without-smt.pdf
</span><br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=127, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [10]
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [12]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13]
<br>
[14]
<br>
Overfull \hbox (71.9415pt too wide) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list ([][]/pcrr8t/http:
<br>
//www.open-mpi.org/community/lists/hwloc.php[][]/ptmr8t/).
<br>
<p>Overfull \hbox (59.08203pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy ([][]/pcrr8t/ht
<br>
tp://runtime.bordeaux.inria.fr/libtopology/[][]/ptmr8t/)
<br>
<p>Overfull \hbox (37.41107pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA) ([][]/pcrr8
<br>
t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/)
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \hbox (badness 2035) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/">http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/</a>[][]
<br>
/ptmr8t/). PLPA was ini-tially de-vel-oped by the Open
<br>
[15] [16] &lt;diagram.pdf, id=188, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (247.9246pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [17]
<br>
Overfull \vbox (79.74323pt too high) has occurred while \output is active
<br>
[18 &lt;./diagram.pdf&gt;] [19] [20] [21] [22]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
This is makeindex, version 2.14 [02-Oct-2002] (kpathsea + Thai support).
<br>
Scanning input file a4-refman.idx...done (0 entries accepted, 0 rejected).
<br>
Nothing written in a4-refman.ind.
<br>
Transcript written in a4-refman.ilg.
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./a4-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/misc/a4wide.sty
<br>
(/usr/share/texmf/tex/latex/ntgclass/a4.sty))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file a4-refman.idx
<br>
(./a4-refman.aux) (/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) (./a4-refman.out)
<br>
(./a4-refman.out) [1{/usr/share/texmf/dvips/config/pdftex.map}] [2]
<br>
(./a4-refman.toc)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex
<br>
Underfull \hbox (badness 10000) in paragraph at lines 1--1
<br>
[]/ptmb8t_at_14.4pt/Portable ab-strac-tion of hi-er-ar-chi-cal ar-chi-tec-tures fo
<br>
r high-
<br>
(/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.21 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.70 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=120, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
[3 &lt;./dudley.png&gt;] [4] &lt;hagrid.png, id=130, 973.6375pt x 291.0875pt&gt;
<br>
&lt;use hagrid.png&gt;
<br>
Overfull \hbox (549.04887pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
[5 &lt;./hagrid.png&gt;] &lt;emmett.png, id=136, 431.6125pt x 431.6125pt&gt;
<br>
&lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./emmett.png&gt;] [8] &lt;ppc64-with-smt.pdf, id=159, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=160, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [9 &lt;./ppc6
<br>
4-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt; &lt;./ppc64-without-smt.pdf
</span><br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=186, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [10]
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [12]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13]
<br>
[14]
<br>
Overfull \hbox (71.9415pt too wide) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list ([][]/pcrr8t/http:
<br>
//www.open-mpi.org/community/lists/hwloc.php[][]/ptmr8t/).
<br>
<p>Overfull \hbox (59.08203pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy ([][]/pcrr8t/ht
<br>
tp://runtime.bordeaux.inria.fr/libtopology/[][]/ptmr8t/)
<br>
<p>Overfull \hbox (37.41107pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA) ([][]/pcrr8
<br>
t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/)
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \hbox (badness 2035) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/">http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/</a>[][]
<br>
/ptmr8t/). PLPA was ini-tially de-vel-oped by the Open
<br>
[15] [16] &lt;diagram.pdf, id=244, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (247.9246pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [17]
<br>
Overfull \vbox (79.74323pt too high) has occurred while \output is active
<br>
[18 &lt;./diagram.pdf&gt;] [19] [20] [21] [22]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
make  \
<br>
&nbsp;&nbsp;top_distdir=&quot;hwloc-1.4a1r3680&quot; distdir=&quot;hwloc-1.4a1r3680&quot; \
<br>
&nbsp;&nbsp;dist-hook
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc'
<br>
csh &quot;./config/distscript.csh&quot; &quot;.&quot; &quot;hwloc-1.4a1r3680&quot; &quot;1.4a1r3680&quot; &quot;&quot;
<br>
&nbsp;
<br>
Creating hwloc distribution
<br>
In directory: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc
<br>
Srcdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc
<br>
Builddir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc
<br>
VPATH: no
<br>
Version: 1.4a1r3680
<br>
Started: Thu Aug 25 21:01:59 EDT 2011
<br>
&nbsp;
<br>
*** Did NOT update VERSION file with repo rev number
<br>
*** Making new doxygen documentation (doxygen-doc tree)
<br>
*** Directory: srcdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc, distdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680, pwd: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
rm -fr doxygen-doc
<br>
/usr/bin/doxygen /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOXYFILE_ENCODING      =' at line 39, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QT_AUTOBRIEF           =' at line 165, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SEPARATE_MEMBER_PAGES  =' at line 185, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `OPTIMIZE_FOR_FORTRAN   =' at line 219, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `OPTIMIZE_OUTPUT_VHDL   =' at line 225, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `EXTENSION_MAPPING      =' at line 236, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `BUILTIN_STL_SUPPORT    =' at line 245, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `CPP_CLI_SUPPORT        =' at line 250, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SIP_SUPPORT            =' at line 256, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `IDL_PROPERTY_SUPPORT   =' at line 265, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `TYPEDEF_HIDES_STRUCT   =' at line 290, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SYMBOL_CACHE_SIZE      =' at line 306, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `EXTRACT_ANON_NSPACES   =' at line 348, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SORT_GROUP_NAMES       =' at line 429, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SHOW_FILES             =' at line 496, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `SHOW_NAMESPACES        =' at line 503, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `FILE_VERSION_FILTER    =' at line 513, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `LAYOUT_FILE            =' at line 522, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `WARN_NO_PARAMDOC       =' at line 558, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `INPUT_ENCODING         =' at line 593, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `EXCLUDE_SYMBOLS        =' at line 636, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `REFERENCES_LINK_SOURCE =' at line 734, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `USE_HTAGS              =' at line 742, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `HTML_DYNAMIC_SECTIONS  =' at line 827, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `GENERATE_DOCSET        =' at line 839, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOCSET_FEEDNAME        =' at line 846, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOCSET_BUNDLE_ID       =' at line 853, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `CHM_INDEX_ENCODING     =' at line 886, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `GENERATE_QHP           =' at line 904, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QCH_FILE               =' at line 910, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_NAMESPACE          =' at line 916, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_VIRTUAL_FOLDER     =' at line 922, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_CUST_FILTER_NAME   =' at line 928, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_CUST_FILTER_ATTRS  =' at line 933, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHP_SECT_FILTER_ATTRS  =' at line 939, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `QHG_LOCATION           =' at line 946, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `FORMULA_FONTSIZE       =' at line 988, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `LATEX_SOURCE_CODE      =' at line 1068, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `MSCGEN_PATH            =' at line 1354, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_FONTNAME           =' at line 1378, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_FONTSIZE           =' at line 1383, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_FONTPATH           =' at line 1390, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `GROUP_GRAPHS           =' at line 1409, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `CALLER_GRAPH           =' at line 1450, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DIRECTORY_GRAPH        =' at line 1462, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_GRAPH_MAX_NODES    =' at line 1489, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_TRANSPARENT        =' at line 1507, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: ignoring unsupported tag `DOT_MULTI_TARGETS      =' at line 1514, file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen.cfg
<br>
Warning: argument `NONE' for option GENERATE_TREEVIEW is not a valid boolean value
<br>
Using the default: NO!
<br>
Notice: Output directory `../doc/doxygen-doc' does not exist. I have created it for you.
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h:660: Warning: member hwloc_distributev: ignoring the detailed description found here, since another one was found at line 630 of file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h!
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h:660: Warning: member hwloc_distributev: ignoring the brief description found here, since another one was found at line 630 of file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h!
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:267: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:425: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:435: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:624: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:625: Warning: unable to resolve reference to `tools' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:626: Warning: unable to resolve reference to `envvar' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:627: Warning: unable to resolve reference to `cpu_mem_bind' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:628: Warning: unable to resolve reference to `iodevices' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:629: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:630: Warning: unable to resolve reference to `threadsafety' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:631: Warning: unable to resolve reference to `embed' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:632: Warning: unable to resolve reference to `faq' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:643: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:754: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:762: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:835: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:954: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1012: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1081: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1175: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1256: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1319: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1487: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:267: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:425: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:435: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:624: Warning: unable to resolve reference to `termsanddefs' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:625: Warning: unable to resolve reference to `tools' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:626: Warning: unable to resolve reference to `envvar' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:627: Warning: unable to resolve reference to `cpu_mem_bind' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:628: Warning: unable to resolve reference to `iodevices' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:629: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:630: Warning: unable to resolve reference to `threadsafety' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:631: Warning: unable to resolve reference to `embed' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:632: Warning: unable to resolve reference to `faq' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:643: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:754: Warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:762: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:835: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:954: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1012: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1081: Warning: unable to resolve reference to `interoperability' for \ref command
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1175: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1256: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1319: Warning: Found unknown command `\page'
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy:1487: Warning: Found unknown command `\page'
<br>
Searching for include files...
<br>
Searching for example files...
<br>
Searching for images...
<br>
Searching for dot files...
<br>
Searching for files to exclude
<br>
Reading input files...
<br>
Reading and parsing tag files
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/bitmap.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/glibc-sched.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux-libnuma.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cuda.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cudart.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/openfabrics-verbs.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/myriexpress.h...
<br>
Read 235224 bytes
<br>
Parsing input...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/hwloc.doxy...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/helper.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/bitmap.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/glibc-sched.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/linux-libnuma.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cuda.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/cudart.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/openfabrics-verbs.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc/myriexpress.h...
<br>
Freeing input...
<br>
Building group list...
<br>
Building directory list...
<br>
Building namespace list...
<br>
Building file list...
<br>
Searching for included using directives...
<br>
Building class list...
<br>
Building example list...
<br>
Searching for documented variables...
<br>
Building member list...
<br>
Searching for friends...
<br>
Searching for documented defines...
<br>
Computing template instances...
<br>
Flushing cached template relations that have become invalid...
<br>
Creating members for template instances...
<br>
Computing class relations...
<br>
Searching for enumerations...
<br>
Searching for members imported via using declarations...
<br>
Searching for member function documentation...
<br>
Building page list...
<br>
Search for main page...
<br>
Sorting lists...
<br>
Freeing entry tree
<br>
Determining which enums are documented
<br>
Computing member relations...
<br>
Building full member lists recursively...
<br>
Adding members to member groups.
<br>
Computing member references...
<br>
Inheriting documentation...
<br>
Generating disk names...
<br>
Adding source references...
<br>
Adding todo/test/bug list items...
<br>
Generating style sheet...
<br>
Counting data structures...
<br>
Resolving user defined references...
<br>
Combining using relations...
<br>
Finding anchors and sections in the documentation...
<br>
Generating index page...
<br>
Generating file index...
<br>
Generating example documentation...
<br>
Generating file sources...
<br>
Generating code for file bitmap.h...
<br>
Generating code for file cuda.h...
<br>
Generating code for file cuda/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/include/hwloc.h:213: Warning: Found unknown command `\private'
<br>
rt.h...
<br>
Generating code for file glibc-sched.h...
<br>
Generating code for file helper.h...
<br>
Generating code for file hwloc.h...
<br>
Generating code for file linux-libnuma.h...
<br>
Generating code for file linux.h...
<br>
Generating code for file myriexpress.h...
<br>
Generating code for file openfabrics-verbs.h...
<br>
Generating file documentation...
<br>
Generating docs for file bitmap.h...
<br>
Generating docs for file cuda.h...
<br>
Generating docs for file cudart.h...
<br>
Generating docs for file glibc-sched.h...
<br>
Generating docs for file helper.h...
<br>
Generating docs for file hwloc.doxy...
<br>
Generating docs for file hwloc.h...
<br>
Generating docs for file linux-libnuma.h...
<br>
Generating docs for file linux.h...
<br>
Generating docs for file myriexpress.h...
<br>
Generating docs for file openfabrics-verbs.h...
<br>
Generating class documentation...
<br>
Generating annotated compound index...
<br>
Generating hierarchical class index...
<br>
Generating member index...
<br>
Generating docs for compound hwloc_distances_s...
<br>
Generating docs for compound hwloc_obj...
<br>
Generating docs for compound hwloc_obj_attr_u...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_bridge_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_cache_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_group_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_osdev_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_pcidev_attr_s...
<br>
Generating docs for compound hwloc_obj_info_s...
<br>
Generating docs for compound hwloc_obj_memory_s...
<br>
Generating docs for nested compound hwloc_obj_memory_s::hwloc_obj_memory_page_type_s...
<br>
Generating docs for compound hwloc_topology_cpubind_support...
<br>
Generating docs for compound hwloc_topology_discovery_support...
<br>
Generating docs for compound hwloc_topology_membind_support...
<br>
Generating docs for compound hwloc_topology_support...
<br>
Generating page documentation...
<br>
Generating group documentation...
<br>
Generating namespace index...
<br>
Generating group index...
<br>
Generating example index...
<br>
Generating file member index...
<br>
Generating namespace member index...
<br>
Generating page index...
<br>
Generating graph info page...
<br>
/bin/sed -i -e 's/__hwloc_restrict/restrict/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-restrict/restrict/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_unused//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-unused//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_malloc//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-malloc//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_const//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-const//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_pure//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-pure//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_attribute_deprecated//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-deprecated//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/HWLOC_DECLSPEC//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/HWLOC\\_\\-DECLSPEC//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/__hwloc_inline/inline/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/\\_\\-\\_\\-hwloc\\_\\-inline/inline/g' \
<br>
doxygen-doc/html/*.html doxygen-doc/latex/*.tex doxygen-doc/man/man3/*.3
<br>
Work-around spurious leading _ in doxygen filenames...
<br>
(cd doxygen-doc/man/man3 ; \
<br>
for i in _hwloc* ; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ ! -f $i ] || mv $i ${i#_} ; \
<br>
done)
<br>
Removing useless manpages...
<br>
cd doxygen-doc/latex; \
<br>
rm -f *.aux *.toc *.idx *.ind *.ilg *.log *.out; \
<br>
/bin/sed -e 's/a4paper/letterpaper/g' -e 's/\\usepackage{a4wide}//' refman.tex &gt; letter-refman.tex; \
<br>
/usr/bin/pdflatex letter-refman.tex; \
<br>
/usr/bin/makeindex letter-refman.idx; \
<br>
/usr/bin/pdflatex letter-refman.tex; \
<br>
done=0; repeat=5; \
<br>
while test $done = 0 -a $repeat -gt 0; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/grep -E 'Rerun (LaTeX|to get cross-references right)' letter-refman.log &gt; /dev/null 2&gt;&amp;1; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/pdflatex letter-refman.tex; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repeat=`expr $repeat - 1`; \
<br>
&nbsp;&nbsp;&nbsp;else \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done=1; \
<br>
&nbsp;&nbsp;&nbsp;fi; \
<br>
done; \
<br>
mv letter-refman.pdf /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen-doc/hwloc-letter.pdf
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./letter-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file letter-refman.idx
<br>
No file letter-refman.aux.
<br>
(/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) [1{/usr/share/texmf/dvips/con
<br>
fig/pdftex.map}] [2]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex (/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.17 ...d support) \item Solaris \item AIX \item D
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arwin / OS X \item Free\-B...
<br>
[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=53, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
Underfull \vbox (badness 1048) has occurred while \output is active [3]
<br>
[4 &lt;./dudley.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 186--186
<br>
[]      /pcrr8t_at_8.0pt/dmi_board_vendor=&quot;Dell Computer Corporation&quot; dmi_board_na
<br>
me=&quot;0RD318&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 186--186
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00001111&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000101&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;8&quot; cpus
<br>
et=&quot;0x00000100&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000100&quot; online_cpuset=&quot;0
<br>
x00000100&quot;[] 
<br>
[5]
<br>
Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpus
<br>
et=&quot;0x00001010&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpus
<br>
et=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0
<br>
x00000010&quot;[] 
<br>
<p>Overfull \hbox (34.20024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;12&quot; cpu
<br>
set=&quot;0x00001000&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00001000&quot; online_cpuset=&quot;0
<br>
x00001000&quot;[] 
<br>
&lt;hagrid.png, id=74, 973.6375pt x 291.0875pt&gt; &lt;use hagrid.png&gt;
<br>
Overfull \hbox (628.63512pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./hagrid.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]      /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x
<br>
00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset
<br>
=&quot;0x00000001&quot;/&gt;[] 
<br>
&lt;emmett.png, id=84, 431.6125pt x 431.6125pt&gt; &lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [8]
<br>
Overfull \hbox (0.60022pt too wide) in paragraph at lines 352--352
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00000055&quot;[] 
<br>
[9 &lt;./emmett.png&gt;]
<br>
Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Underfull \vbox (badness 2478) has occurred while \output is active [10]
<br>
&lt;ppc64-with-smt.pdf, id=106, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=107, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=126, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [12 &lt;./ppc
<br>
64-without-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [14]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [15]
<br>
Overfull \hbox (24.60023pt too wide) in paragraph at lines 567--567
<br>
[]            /pcrr8t_at_8.0pt/printf(&quot;Couldn't bind to cpuset %s: %s\n&quot;, str, str
<br>
error(error));[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [16]
<br>
[17]
<br>
Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a>[][]/ptmr
<br>
8t/).
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Bug re-ports should be re-ported in the tracker
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/libtopology/">http://runtime.bordeaux.inria.fr/libtopology/</a>[][]/ptmr8t/)
<br>
<p><p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA)
<br>
<p>Underfull \hbox (badness 6592) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/) projec
<br>
t. Be-cause of
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 3019) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \vbox (badness 1824) has occurred while \output is active [18]
<br>
[19] [20] &lt;diagram.pdf, id=206, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (327.51085pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [21]
<br>
Overfull \vbox (175.74323pt too high) has occurred while \output is active
<br>
[22 &lt;./diagram.pdf&gt;] [23]
<br>
Underfull \hbox (badness 1924) in paragraph at lines 727--728
<br>
[]/ptmr8t/enforces the re-turn value of [][]hwloc_-topology_-is_-
<br>
[24]
<br>
Underfull \hbox (badness 2027) in paragraph at lines 733--734
<br>
[]/ptmr8t/relaxes dis-tance com-par-i-son dur-ing
<br>
[25] [26]
<br>
Underfull \hbox (badness 1303) in paragraph at lines 772--773
<br>
/ptmr8t/When I/O dis-cov-ery is en-abled and sup-ported, some ad-di-tional ob-j
<br>
ects (types
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 772--773
<br>
[][]/pcrr8t/HWLOC_-OBJ_-BRIDGE[][]/ptmr8t/, [][]/pcrr8t/HWLOC_-OBJ_-PCI_-DEVICE
<br>
[][] /ptmr8t/and [][]/pcrr8t/HWLOC_-OBJ_-OS_-
<br>
[27] [28]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
This is makeindex, version 2.14 [02-Oct-2002] (kpathsea + Thai support).
<br>
Scanning input file letter-refman.idx...done (0 entries accepted, 0 rejected).
<br>
Nothing written in letter-refman.ind.
<br>
Transcript written in letter-refman.ilg.
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./letter-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file letter-refman.idx
<br>
(./letter-refman.aux) (/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) (./letter-refman.out)
<br>
(./letter-refman.out) [1{/usr/share/texmf/dvips/config/pdftex.map}] [2]
<br>
(./letter-refman.toc)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex (/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.17 ...d support) \item Solaris \item AIX \item D
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arwin / OS X \item Free\-B...
<br>
[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=123, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
Underfull \vbox (badness 1048) has occurred while \output is active [3]
<br>
[4 &lt;./dudley.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 186--186
<br>
[]      /pcrr8t_at_8.0pt/dmi_board_vendor=&quot;Dell Computer Corporation&quot; dmi_board_na
<br>
me=&quot;0RD318&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 186--186
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00001111&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000101&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;8&quot; cpus
<br>
et=&quot;0x00000100&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000100&quot; online_cpuset=&quot;0
<br>
x00000100&quot;[] 
<br>
[5]
<br>
Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpus
<br>
et=&quot;0x00001010&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpus
<br>
et=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0
<br>
x00000010&quot;[] 
<br>
<p>Overfull \hbox (34.20024pt too wide) in paragraph at lines 186--186
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;12&quot; cpu
<br>
set=&quot;0x00001000&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 186--186
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00001000&quot; online_cpuset=&quot;0
<br>
x00001000&quot;[] 
<br>
&lt;hagrid.png, id=142, 973.6375pt x 291.0875pt&gt; &lt;use hagrid.png&gt;
<br>
Overfull \hbox (628.63512pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./hagrid.png&gt;]
<br>
Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (10.20023pt too wide) in paragraph at lines 271--271
<br>
[]      /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;
<br>
0x00000003&quot;[] 
<br>
<p>Overfull \hbox (0.60022pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x
<br>
00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]              /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpus
<br>
et=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (5.40022pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0
<br>
x00000001&quot;[] 
<br>
<p>Overfull \hbox (29.40024pt too wide) in paragraph at lines 271--271
<br>
[]                  /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset
<br>
=&quot;0x00000001&quot;/&gt;[] 
<br>
&lt;emmett.png, id=152, 431.6125pt x 431.6125pt&gt; &lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [8]
<br>
Overfull \hbox (0.60022pt too wide) in paragraph at lines 352--352
<br>
[]    /pcrr8t_at_8.0pt/&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x
<br>
00000055&quot;[] 
<br>
[9 &lt;./emmett.png&gt;]
<br>
Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset
<br>
=&quot;0x00000001&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]          /pcrr8t_at_8.0pt/&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Overfull \hbox (19.80023pt too wide) in paragraph at lines 352--352
<br>
[]            /pcrr8t_at_8.0pt/&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpuset
<br>
=&quot;0x00000010&quot;[] 
<br>
<p>Underfull \vbox (badness 2478) has occurred while \output is active [10]
<br>
&lt;ppc64-with-smt.pdf, id=173, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=174, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=193, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [12 &lt;./ppc
<br>
64-without-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [14]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [15]
<br>
Overfull \hbox (24.60023pt too wide) in paragraph at lines 567--567
<br>
[]            /pcrr8t_at_8.0pt/printf(&quot;Couldn't bind to cpuset %s: %s\n&quot;, str, str
<br>
error(error));[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [16]
<br>
[17]
<br>
Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a>[][]/ptmr
<br>
8t/).
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 623--624
<br>
/ptmr8t/Bug re-ports should be re-ported in the tracker
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/libtopology/">http://runtime.bordeaux.inria.fr/libtopology/</a>[][]/ptmr8t/)
<br>
<p><p>Underfull \hbox (badness 10000) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA)
<br>
<p>Underfull \hbox (badness 6592) in paragraph at lines 630--631
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/) projec
<br>
t. Be-cause of
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 3019) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \vbox (badness 1824) has occurred while \output is active [18]
<br>
[19] [20] &lt;diagram.pdf, id=270, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (327.51085pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [21]
<br>
Overfull \vbox (175.74323pt too high) has occurred while \output is active
<br>
[22 &lt;./diagram.pdf&gt;] [23]
<br>
Underfull \hbox (badness 1924) in paragraph at lines 727--728
<br>
[]/ptmr8t/enforces the re-turn value of [][]hwloc_-topology_-is_-
<br>
[24]
<br>
Underfull \hbox (badness 2027) in paragraph at lines 733--734
<br>
[]/ptmr8t/relaxes dis-tance com-par-i-son dur-ing
<br>
[25] [26]
<br>
Underfull \hbox (badness 1303) in paragraph at lines 772--773
<br>
/ptmr8t/When I/O dis-cov-ery is en-abled and sup-ported, some ad-di-tional ob-j
<br>
ects (types
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 772--773
<br>
[][]/pcrr8t/HWLOC_-OBJ_-BRIDGE[][]/ptmr8t/, [][]/pcrr8t/HWLOC_-OBJ_-PCI_-DEVICE
<br>
[][] /ptmr8t/and [][]/pcrr8t/HWLOC_-OBJ_-OS_-
<br>
[27] [28]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
cd doxygen-doc/latex; \
<br>
rm -f *.aux *.toc *.idx *.ind *.ilg *.log *.out; \
<br>
cp refman.tex a4-refman.tex; \
<br>
/usr/bin/pdflatex a4-refman.tex; \
<br>
/usr/bin/makeindex a4-refman.idx; \
<br>
/usr/bin/pdflatex a4-refman.tex; \
<br>
done=0; repeat=5; \
<br>
while test $done = 0 -a $repeat -gt 0; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/grep -E 'Rerun (LaTeX|to get cross-references right)' a4-refman.log &gt; /dev/null 2&gt;&amp;1; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/pdflatex a4-refman.tex; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;repeat=`expr $repeat - 1`; \
<br>
&nbsp;&nbsp;&nbsp;else \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done=1; \
<br>
&nbsp;&nbsp;&nbsp;fi; \
<br>
done; \
<br>
mv a4-refman.pdf /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen-doc/hwloc-a4.pdf
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./a4-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/misc/a4wide.sty
<br>
(/usr/share/texmf/tex/latex/ntgclass/a4.sty))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file a4-refman.idx
<br>
No file a4-refman.aux.
<br>
(/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) [1{/usr/share/texmf/dvips/con
<br>
fig/pdftex.map}] [2]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex
<br>
Underfull \hbox (badness 10000) in paragraph at lines 1--1
<br>
[]/ptmb8t_at_14.4pt/Portable ab-strac-tion of hi-er-ar-chi-cal ar-chi-tec-tures fo
<br>
r high-
<br>
(/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.21 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.70 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=59, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
[3 &lt;./dudley.png&gt;] [4] &lt;hagrid.png, id=70, 973.6375pt x 291.0875pt&gt;
<br>
&lt;use hagrid.png&gt;
<br>
Overfull \hbox (549.04887pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
[5 &lt;./hagrid.png&gt;] &lt;emmett.png, id=76, 431.6125pt x 431.6125pt&gt;
<br>
&lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./emmett.png&gt;] [8] &lt;ppc64-with-smt.pdf, id=100, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=101, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [9 &lt;./ppc6
<br>
4-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt; &lt;./ppc64-without-smt.pdf
</span><br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=127, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [10]
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [12]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13]
<br>
[14]
<br>
Overfull \hbox (71.9415pt too wide) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list ([][]/pcrr8t/http:
<br>
//www.open-mpi.org/community/lists/hwloc.php[][]/ptmr8t/).
<br>
<p>Overfull \hbox (59.08203pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy ([][]/pcrr8t/ht
<br>
tp://runtime.bordeaux.inria.fr/libtopology/[][]/ptmr8t/)
<br>
<p>Overfull \hbox (37.41107pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA) ([][]/pcrr8
<br>
t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/)
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \hbox (badness 2035) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/">http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/</a>[][]
<br>
/ptmr8t/). PLPA was ini-tially de-vel-oped by the Open
<br>
[15] [16] &lt;diagram.pdf, id=188, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (247.9246pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [17]
<br>
Overfull \vbox (79.74323pt too high) has occurred while \output is active
<br>
[18 &lt;./diagram.pdf&gt;] [19] [20] [21] [22]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
This is makeindex, version 2.14 [02-Oct-2002] (kpathsea + Thai support).
<br>
Scanning input file a4-refman.idx...done (0 entries accepted, 0 rejected).
<br>
Nothing written in a4-refman.ind.
<br>
Transcript written in a4-refman.ilg.
<br>
This is pdfTeX, Version 3.14159-1.10b (Web2C 7.4.5)
<br>
(./a4-refman.tex{/usr/share/texmf/pdftex/config/pdftex.cfg}
<br>
LaTeX2e &lt;2001/06/01&gt;
<br>
Babel &lt;v3.7h&gt; and hyphenation patterns for american, french, german, ngerman, n
<br>
ohyphenation, loaded.
<br>
(/usr/share/texmf/tex/latex/base/book.cls
<br>
Document Class: book 2001/04/21 v1.4e Standard LaTeX document class
<br>
(/usr/share/texmf/tex/latex/base/bk10.clo))
<br>
(/usr/share/texmf/tex/latex/misc/a4wide.sty
<br>
(/usr/share/texmf/tex/latex/ntgclass/a4.sty))
<br>
(/usr/share/texmf/tex/latex/base/makeidx.sty)
<br>
(/usr/share/texmf/tex/latex/fancyhdr/fancyhdr.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphicx.sty
<br>
(/usr/share/texmf/tex/latex/graphics/keyval.sty)
<br>
(/usr/share/texmf/tex/latex/graphics/graphics.sty
<br>
(/usr/share/texmf/tex/latex/graphics/trig.sty)
<br>
(/usr/share/texmf/tex/latex/config/graphics.cfg)
<br>
(/usr/share/texmf/tex/latex/graphics/pdftex.def)))
<br>
(/usr/share/texmf/tex/latex/tools/multicol.sty)
<br>
(/usr/share/texmf/tex/latex/misc/float.sty)
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/psnfss/times.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
Implicit mode ON; LaTeX internals redefined
<br>
(/usr/share/texmf/tex/latex/hyperref/backref.sty)
<br>
(/usr/share/texmf/tex/latex/html/url.sty))
<br>
*hyperref using driver hpdftex*
<br>
(/usr/share/texmf/tex/latex/hyperref/hpdftex.def
<br>
(/usr/share/texmf/tex/latex/psnfss/pifont.sty
<br>
(/usr/share/texmf/tex/latex/psnfss/upzd.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/upsy.fd))) (./doxygen.sty
<br>
(/usr/share/texmf/tex/latex/tools/calc.sty)
<br>
(/usr/share/texmf/tex/latex/tools/array.sty))
<br>
(/usr/share/texmf/tex/latex/base/fontenc.sty
<br>
(/usr/share/texmf/tex/latex/base/t1enc.def))
<br>
Writing index file a4-refman.idx
<br>
(./a4-refman.aux) (/usr/share/texmf/tex/latex/base/ts1cmr.fd)
<br>
(/usr/share/texmf/tex/latex/psnfss/t1ptm.fd)
<br>
(/usr/share/texmf/tex/context/base/supp-pdf.tex
<br>
(/usr/share/texmf/tex/context/base/supp-mis.tex
<br>
loading : Context Support Macros / Missing
<br>
)
<br>
loading : Context Support Macros / PDF
<br>
) (/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/hyperref/nameref.sty) (./a4-refman.out)
<br>
(./a4-refman.out) [1{/usr/share/texmf/dvips/config/pdftex.map}] [2]
<br>
(./a4-refman.toc)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.44 \clearemptydoublepage
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2]
<br>
Chapter 1.
<br>
(./index.tex
<br>
Underfull \hbox (badness 10000) in paragraph at lines 1--1
<br>
[]/ptmb8t_at_14.4pt/Portable ab-strac-tion of hi-er-ar-chi-cal ar-chi-tec-tures fo
<br>
r high-
<br>
(/usr/share/texmf/tex/latex/psnfss/ts1ptm.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.1}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.21 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] (/usr/share/texmf/tex/latex/psnfss/t1pcr.fd)
<br>
! pdfTeX warning (ext4): destination with the same identifier (name{page.2}) ha
<br>
s been already used, duplicate ignored
<br>
&lt;to be read again&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\penalty 
<br>
l.70 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] &lt;dudley.png, id=120, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt;
<br>
[3 &lt;./dudley.png&gt;] [4] &lt;hagrid.png, id=130, 973.6375pt x 291.0875pt&gt;
<br>
&lt;use hagrid.png&gt;
<br>
Overfull \hbox (549.04887pt too wide) in paragraph at lines 194--194
<br>
&nbsp;[] 
<br>
[5 &lt;./hagrid.png&gt;] &lt;emmett.png, id=136, 431.6125pt x 431.6125pt&gt;
<br>
&lt;use emmett.png&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [6]
<br>
[7 &lt;./emmett.png&gt;] [8] &lt;ppc64-with-smt.pdf, id=159, 1154.3125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-with-smt.pdf&gt;
<br>
&lt;ppc64-without-smt.pdf, id=160, 592.2125pt x 431.6125pt&gt;
<br>
&lt;use ppc64-without-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [9 &lt;./ppc6
<br>
4-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
<br>
up detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt; &lt;./ppc64-without-smt.pdf
</span><br>
Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
<br>
Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] &lt;ppc64-full-with-smt.pdf, id=186, 913.4125pt x 1355.0625pt&gt;
</span><br>
&lt;use ppc64-full-with-smt.pdf&gt;
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [10]
<br>
Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
<br>
64-full-with-smt.pdf
<br>
Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
<br>
e Group detected which pdfTeX can't handle. Ignoring it.
<br>
<span class="quotelev1">&gt;] [12]
</span><br>
Underfull \vbox (badness 10000) has occurred while \output is active [13]
<br>
[14]
<br>
Overfull \hbox (71.9415pt too wide) in paragraph at lines 623--624
<br>
/ptmr8t/Questions should be sent to the de-vel mail-ing list ([][]/pcrr8t/http:
<br>
//www.open-mpi.org/community/lists/hwloc.php[][]/ptmr8t/).
<br>
<p>Overfull \hbox (59.08203pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/hwloc is the evo-lu-tion and merger of the libtopol-ogy ([][]/pcrr8t/ht
<br>
tp://runtime.bordeaux.inria.fr/libtopology/[][]/ptmr8t/)
<br>
<p>Overfull \hbox (37.41107pt too wide) in paragraph at lines 630--631
<br>
/ptmr8t/project and the Portable Linux Pro-ces-sor Affin-ity (PLPA) ([][]/pcrr8
<br>
t/<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>[][]/ptmr8t/)
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
[]/ptmr8t/libtopology was ini-tially de-vel-oped by the IN-RIA Run-time Team-Pr
<br>
oject
<br>
<p>Underfull \hbox (badness 10000) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>[][]/ptmr8t/) (headed by 
<br>
Ray-mond Namyst
<br>
<p>Underfull \hbox (badness 2035) in paragraph at lines 632--633
<br>
/ptmr8t/([][]/pcrr8t/<a href="http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/">http://dept-info.labri.fr/$/cmsy10/^^X$/pcrr8t/namyst/</a>[][]
<br>
/ptmr8t/). PLPA was ini-tially de-vel-oped by the Open
<br>
[15] [16] &lt;diagram.pdf, id=244, 672.5125pt x 690.58pt&gt; &lt;use diagram.pdf&gt;
<br>
Overfull \hbox (247.9246pt too wide) in paragraph at lines 689--689
<br>
&nbsp;[] 
<br>
<p>Underfull \vbox (badness 10000) has occurred while \output is active [17]
<br>
Overfull \vbox (79.74323pt too high) has occurred while \output is active
<br>
[18 &lt;./diagram.pdf&gt;] [19] [20] [21] [22]Error: PDF version 1.5 -- xpdf supports version 1.4 (continuing anyway)
<br>
<p>Error: /usr/bin/pdflatex (file devel09-pci.pdf): pdf inclusion: found pdf versi
<br>
on &lt;1.5&gt;, but at most version &lt;1.4&gt; allowed
<br>
&nbsp;==&gt; Fatal error occurred, the output PDF file is not finished!
<br>
if test -d doxygen-doc/html -a -f doxygen-doc/html/doxygen.css; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cp -f ./doxygen.css doxygen-doc/html; \
<br>
fi
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
*** Making new README
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
if test -d doxygen-doc/html -a -f doxygen-doc/html/doxygen.css; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cp -f ./doxygen.css doxygen-doc/html; \
<br>
fi
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
LC_ALL=C /usr/bin/lynx -dump -nolist doxygen-doc/html/index.html | /bin/sed -n -e 's/^   //' -e '/^Introduction$/,$p' &gt; /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/README
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc'
<br>
*** Copying doxygen-doc tree to dist...
<br>
*** Directory: srcdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc, distdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680, pwd: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc
<br>
rm -rf /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/doc/doxygen-doc
<br>
cp -rpf /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/doc/doxygen-doc /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/doc
<br>
*** Copying new README
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/README
<br>
*** Now in distdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680
<br>
*** Removing latex source from dist tree
<br>
*** Downloading latest config.sub/config.guess from ftp.gnu.org...
<br>
--21:02:07--  <a href="http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=master">http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=master</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt; `config.guess'
<br>
Resolving git.savannah.gnu.org... 140.186.70.72
<br>
Connecting to git.savannah.gnu.org|140.186.70.72|:80... connected.
<br>
HTTP request sent, awaiting response... 200 OK
<br>
Length: unspecified [text/plain]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;0K .......... .......... .......... .......... ...         338.45 KB/s
<br>
<p>21:02:07 (338.45 KB/s) - `config.guess' saved [44461]
<br>
<p>--21:02:07--  <a href="http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=master">http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=master</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt; `config.sub'
<br>
Resolving git.savannah.gnu.org... 140.186.70.72
<br>
Connecting to git.savannah.gnu.org|140.186.70.72|:80... connected.
<br>
HTTP request sent, awaiting response... 200 OK
<br>
Length: unspecified [text/plain]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;0K .......... .......... .......... ....                   270.24 KB/s
<br>
<p>21:02:07 (270.24 KB/s) - `config.sub' saved [35328]
<br>
<p>&nbsp;- Got good config.guess and config.sub from ftp.gnu.org
<br>
*** hwloc version 1.4a1r3680 distribution created
<br>
&nbsp;
<br>
Started: Thu Aug 25 21:01:59 EDT 2011
<br>
Ended:   Thu Aug 25 21:02:08 EDT 2011
<br>
&nbsp;
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc'
<br>
test -n &quot;&quot; \
<br>
|| find &quot;hwloc-1.4a1r3680&quot; -type d ! -perm -777 -exec chmod a+rwx {} \; -o \
<br>
&nbsp;&nbsp;! -type d ! -perm -444 -links 1 -exec chmod a+r {} \; -o \
<br>
&nbsp;&nbsp;! -type d ! -perm -400 -exec chmod a+r {} \; -o \
<br>
&nbsp;&nbsp;! -type d ! -perm -444 -exec /bin/sh /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/config/install-sh -c -m a+r {} {} \; \
<br>
|| chmod -R a+r &quot;hwloc-1.4a1r3680&quot;
<br>
tardir=hwloc-1.4a1r3680 &amp;&amp; tar --format=ustar -chf - &quot;$tardir&quot; | GZIP=--best gzip -c &gt;hwloc-1.4a1r3680.tar.gz
<br>
tardir=hwloc-1.4a1r3680 &amp;&amp; tar --format=ustar -chf - &quot;$tardir&quot; | bzip2 -9 -c &gt;hwloc-1.4a1r3680.tar.bz2
<br>
{ test ! -d &quot;hwloc-1.4a1r3680&quot; || { find &quot;hwloc-1.4a1r3680&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.4a1r3680&quot;; }; }
<br>
case 'hwloc-1.4a1r3680.tar.gz hwloc-1.4a1r3680.tar.bz2' in \
<br>
*.tar.gz*) \
<br>
&nbsp;&nbsp;GZIP=--best gunzip -c hwloc-1.4a1r3680.tar.gz | tar -xf - ;;\
<br>
*.tar.bz2*) \
<br>
&nbsp;&nbsp;bunzip2 -c hwloc-1.4a1r3680.tar.bz2 | tar -xf - ;;\
<br>
*.tar.lzma*) \
<br>
&nbsp;&nbsp;unlzma -c hwloc-1.4a1r3680.tar.lzma | tar -xf - ;;\
<br>
*.tar.xz*) \
<br>
&nbsp;&nbsp;xz -dc hwloc-1.4a1r3680.tar.xz | tar -xf - ;;\
<br>
*.tar.Z*) \
<br>
&nbsp;&nbsp;uncompress -c hwloc-1.4a1r3680.tar.Z | tar -xf - ;;\
<br>
*.shar.gz*) \
<br>
&nbsp;&nbsp;GZIP=--best gunzip -c hwloc-1.4a1r3680.shar.gz | unshar ;;\
<br>
*.zip*) \
<br>
&nbsp;&nbsp;unzip hwloc-1.4a1r3680.zip ;;\
<br>
esac
<br>
chmod -R a-w hwloc-1.4a1r3680; chmod a+w hwloc-1.4a1r3680
<br>
mkdir hwloc-1.4a1r3680/_build
<br>
mkdir hwloc-1.4a1r3680/_inst
<br>
chmod a-w hwloc-1.4a1r3680
<br>
test -d hwloc-1.4a1r3680/_build || exit 0; \
<br>
dc_install_base=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd hwloc-1.4a1r3680/_inst &amp;&amp; pwd | sed -e 's,^[^:\\/]:[\\/],/,'` \
<br>
&nbsp;&nbsp;&amp;&amp; dc_destdir=&quot;${TMPDIR-/tmp}/am-dc-$$/&quot; \
<br>
&nbsp;&nbsp;&amp;&amp; am__cwd=`pwd` \
<br>
&nbsp;&nbsp;&amp;&amp; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd hwloc-1.4a1r3680/_build \
<br>
&nbsp;&nbsp;&amp;&amp; ../configure --srcdir=.. --prefix=&quot;$dc_install_base&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&amp;&amp; make  \
<br>
&nbsp;&nbsp;&amp;&amp; make  dvi \
<br>
&nbsp;&nbsp;&amp;&amp; make  check \
<br>
&nbsp;&nbsp;&amp;&amp; make  install \
<br>
&nbsp;&nbsp;&amp;&amp; make  installcheck \
<br>
&nbsp;&nbsp;&amp;&amp; make  uninstall \
<br>
&nbsp;&nbsp;&amp;&amp; make  distuninstallcheck_dir=&quot;$dc_install_base&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distuninstallcheck \
<br>
&nbsp;&nbsp;&amp;&amp; chmod -R a-w &quot;$dc_install_base&quot; \
<br>
&nbsp;&nbsp;&amp;&amp; ({ \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(cd ../.. &amp;&amp; umask 077 &amp;&amp; mkdir &quot;$dc_destdir&quot;) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; make  DESTDIR=&quot;$dc_destdir&quot; install \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; make  DESTDIR=&quot;$dc_destdir&quot; uninstall \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; make  DESTDIR=&quot;$dc_destdir&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distuninstallcheck_dir=&quot;$dc_destdir&quot; distuninstallcheck; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} || { rm -rf &quot;$dc_destdir&quot;; exit 1; }) \
<br>
&nbsp;&nbsp;&amp;&amp; rm -rf &quot;$dc_destdir&quot; \
<br>
&nbsp;&nbsp;&amp;&amp; make  dist \
<br>
&nbsp;&nbsp;&amp;&amp; rm -rf hwloc-1.4a1r3680.tar.gz hwloc-1.4a1r3680.tar.bz2 \
<br>
&nbsp;&nbsp;&amp;&amp; make  distcleancheck \
<br>
&nbsp;&nbsp;&amp;&amp; cd &quot;$am__cwd&quot; \
<br>
&nbsp;&nbsp;|| exit 1
<br>
<p>###
<br>
### Configuring hwloc distribution tarball
<br>
### Startup tests
<br>
###
<br>
checking build system type... i686-pc-linux-gnu
<br>
checking host system type... i686-pc-linux-gnu
<br>
checking target system type... i686-pc-linux-gnu
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking how to create a ustar tar archive... gnutar
<br>
checking for hwloc version... 1.4a1r3680
<br>
checking for gcc... gcc
<br>
checking whether the C compiler works... yes
<br>
checking for C compiler default output file name... a.out
<br>
checking for suffix of executables... 
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc accepts -g... yes
<br>
checking for gcc option to accept ISO C89... none needed
<br>
checking for style of include used by make... GNU
<br>
checking dependency style of gcc... gcc3
<br>
checking whether gcc and cc understand -c and -o together... yes
<br>
checking how to run the C preprocessor... gcc -E
<br>
checking for grep that handles long lines and -e... /bin/grep
<br>
checking for egrep... /bin/grep -E
<br>
checking for ANSI C header files... yes
<br>
checking for sys/types.h... yes
<br>
checking for sys/stat.h... yes
<br>
checking for stdlib.h... yes
<br>
checking for string.h... yes
<br>
checking for memory.h... yes
<br>
checking for strings.h... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for unistd.h... yes
<br>
checking minix/config.h usability... no
<br>
checking minix/config.h presence... no
<br>
checking for minix/config.h... no
<br>
checking whether it is safe to define __EXTENSIONS__... yes
<br>
checking for pkg-config... /usr/bin/pkg-config
<br>
checking pkg-config is at least version 0.9.0... yes
<br>
<p>###
<br>
### Configuring hwloc core
<br>
###
<br>
checking hwloc building mode... standalone
<br>
configure: hwloc builddir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build
<br>
configure: hwloc srcdir: /home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680
<br>
configure: Detected VPATH build
<br>
checking if want hwloc maintainer support... disabled
<br>
checking for hwloc directory prefix... (none)
<br>
checking for hwloc symbol prefix... hwloc_
<br>
checking size of void *... 4
<br>
checking which OS support to include... Linux
<br>
checking which CPU support to include... x86_32
<br>
checking size of unsigned long... 4
<br>
checking size of unsigned int... 4
<br>
checking for __attribute__... yes
<br>
checking for __attribute__(aligned)... yes
<br>
checking for __attribute__(always_inline)... yes
<br>
checking for __attribute__(cold)... no
<br>
checking for __attribute__(const)... yes
<br>
checking for __attribute__(deprecated)... yes
<br>
checking for __attribute__(format)... no
<br>
checking for __attribute__(hot)... no
<br>
checking for __attribute__(malloc)... yes
<br>
checking for __attribute__(may_alias)... yes
<br>
checking for __attribute__(no_instrument_function)... yes
<br>
checking for __attribute__(nonnull)... no
<br>
checking for __attribute__(noreturn)... yes
<br>
checking for __attribute__(packed)... yes
<br>
checking for __attribute__(pure)... yes
<br>
checking for __attribute__(sentinel)... no
<br>
checking for __attribute__(unused)... yes
<br>
checking for __attribute__(warn_unused_result)... yes
<br>
checking for __attribute__(weak_alias)... yes
<br>
checking if gcc supports -fvisibility... yes
<br>
checking whether to enable visibility... yes (via -fvisibility=hidden)
<br>
configure: WARNING: &quot; -fvisibility=hidden&quot; has been added to the hwloc CFLAGS
<br>
checking for inline compatibility keyword... __inline__
<br>
checking for strncasecmp... yes
<br>
checking whether function strncasecmp is declared... yes
<br>
checking for strftime... yes
<br>
checking for setlocale... yes
<br>
checking for stdint.h... (cached) yes
<br>
checking sys/mman.h usability... yes
<br>
checking sys/mman.h presence... yes
<br>
checking for sys/mman.h... yes
<br>
checking for KAFFINITY... no
<br>
checking for PROCESSOR_CACHE_TYPE... no
<br>
checking for CACHE_DESCRIPTOR... no
<br>
checking for LOGICAL_PROCESSOR_RELATIONSHIP... no
<br>
checking for RelationProcessorPackage... no
<br>
checking for SYSTEM_LOGICAL_PROCESSOR_INFORMATION... no
<br>
checking for GROUP_AFFINITY... no
<br>
checking for PROCESSOR_RELATIONSHIP... no
<br>
checking for NUMA_NODE_RELATIONSHIP... no
<br>
checking for CACHE_RELATIONSHIP... no
<br>
checking for PROCESSOR_GROUP_INFO... no
<br>
checking for GROUP_RELATIONSHIP... no
<br>
checking for SYSTEM_LOGICAL_PROCESSOR_INFORMATION_EX... no
<br>
checking for PSAPI_WORKING_SET_EX_BLOCK... no
<br>
checking for PSAPI_WORKING_SET_EX_INFORMATION... no
<br>
checking for main in -lgdi32... no
<br>
checking windows.h usability... no
<br>
checking windows.h presence... no
<br>
checking for windows.h... no
<br>
checking sys/lgrp_user.h usability... no
<br>
checking sys/lgrp_user.h presence... no
<br>
checking for sys/lgrp_user.h... no
<br>
checking kstat.h usability... no
<br>
checking kstat.h presence... no
<br>
checking for kstat.h... no
<br>
checking whether _SC_NPROCESSORS_ONLN is declared... yes
<br>
checking whether _SC_NPROCESSORS_CONF is declared... yes
<br>
checking whether _SC_NPROC_ONLN is declared... no
<br>
checking whether _SC_NPROC_CONF is declared... no
<br>
checking whether _SC_LARGE_PAGESIZE is declared... no
<br>
checking mach/mach_host.h usability... no
<br>
checking mach/mach_host.h presence... no
<br>
checking for mach/mach_host.h... no
<br>
checking mach/mach_init.h usability... no
<br>
checking mach/mach_init.h presence... no
<br>
checking for mach/mach_init.h... no
<br>
checking sys/param.h usability... yes
<br>
checking sys/param.h presence... yes
<br>
checking for sys/param.h... yes
<br>
checking for sys/sysctl.h... yes
<br>
checking whether CTL_HW is declared... no
<br>
checking whether HW_NCPU is declared... no
<br>
checking for sysctl... yes
<br>
checking for sysctlbyname... no
<br>
checking for pthread_t... yes
<br>
checking whether function sched_setaffinity is declared... yes
<br>
checking for old prototype of sched_setaffinity... no
<br>
checking for working CPU_SET... yes
<br>
checking for working CPU_SET_S... no
<br>
checking for working _syscall3... yes
<br>
checking for KERRIGHED... no
<br>
checking for lib... no
<br>
checking for bash... /bin/sh
<br>
checking for ffs... yes
<br>
checking whether function ffs is declared... yes
<br>
checking for ffsl... yes
<br>
checking whether function ffsl is declared... yes
<br>
checking for fls... no
<br>
checking for flsl... no
<br>
checking for clz... no
<br>
checking for clzl... no
<br>
checking for openat... no
<br>
checking malloc.h usability... yes
<br>
checking malloc.h presence... yes
<br>
checking for malloc.h... yes
<br>
checking for getpagesize... yes
<br>
checking for memalign... yes
<br>
checking for posix_memalign... yes
<br>
checking sys/utsname.h usability... yes
<br>
checking sys/utsname.h presence... yes
<br>
checking for sys/utsname.h... yes
<br>
checking for uname... yes
<br>
checking numaif.h usability... yes
<br>
checking numaif.h presence... yes
<br>
checking for numaif.h... yes
<br>
checking for set_mempolicy in -lnuma... yes
<br>
checking for mbind in -lnuma... yes
<br>
checking for migrate_pages in -lnuma... no
<br>
checking pthread_np.h usability... no
<br>
checking pthread_np.h presence... no
<br>
checking for pthread_np.h... no
<br>
checking whether pthread_setaffinity_np is declared... no
<br>
checking whether pthread_getaffinity_np is declared... no
<br>
checking for sched_setaffinity... yes
<br>
checking for sys/cpuset.h... no
<br>
checking for library containing pthread_getthrds_np... no
<br>
checking for PCI... no
<br>
checking pci/pci.h usability... yes
<br>
checking pci/pci.h presence... yes
<br>
checking for pci/pci.h... yes
<br>
checking for pci_init in -lpci... yes
<br>
checking for pci_lookup_name in -lpci... yes
<br>
checking whether PCI_LOOKUP_NO_NUMBERS is declared... no
<br>
checking for pci_find_cap in -lpci... no
<br>
checking whether struct pci_dev has a device_class field... yes
<br>
checking whether struct pci_dev has a domain field... yes
<br>
checking for XML... yes
<br>
checking for xmlNewDoc... yes
<br>
checking for final XML support... yes
<br>
checking for cpuid... yes
<br>
checking for X... libraries /usr/X11R6/lib, headers 
<br>
<p>###
<br>
### Configuring hwloc documentation
<br>
###
<br>
checking if this is a developer build... no (doxygen generation is optional)
<br>
checking for doxygen... /usr/bin/doxygen
<br>
checking for pdflatex... /usr/bin/pdflatex
<br>
checking for makeindex... /usr/bin/makeindex
<br>
checking for fig2dev... /usr/bin/fig2dev
<br>
checking for gs... /usr/bin/gs
<br>
checking for epstopdf... /usr/bin/epstopdf
<br>
checking if can build doxygen docs... yes
<br>
checking for a sed that does not truncate output... /bin/sed
<br>
checking if the sed -i option requires an argument... no
<br>
checking for w3m... no
<br>
checking for lynx... /usr/bin/lynx
<br>
checking if can build top-level README... yes
<br>
checking if will build doxygen docs... yes
<br>
checking if will install doxygen docs... yes
<br>
checking whether to enable &quot;picky&quot; compiler mode... no (default)
<br>
<p>###
<br>
### Configuring hwloc command line utilities
<br>
###
<br>
checking for CAIRO... no
<br>
checking for wchar_t... yes
<br>
checking for putwc... yes
<br>
checking locale.h usability... yes
<br>
checking locale.h presence... yes
<br>
checking for locale.h... yes
<br>
checking for setlocale... (cached) yes
<br>
checking langinfo.h usability... yes
<br>
checking langinfo.h presence... yes
<br>
checking for langinfo.h... yes
<br>
checking for nl_langinfo... yes
<br>
checking termcap support using ncurses and ... no
<br>
checking termcap support using ncurses and -ltermcap... no
<br>
checking termcap support using ncurses and -lncursesw... yes
<br>
checking whether diff accepts -u... -u
<br>
<p>###
<br>
### Configuring hwloc tests
<br>
###
<br>
checking whether numa_bitmask_alloc is declared... no
<br>
checking infiniband/verbs.h usability... no
<br>
checking infiniband/verbs.h presence... no
<br>
checking for infiniband/verbs.h... no
<br>
checking myriexpress.h usability... no
<br>
checking myriexpress.h presence... no
<br>
checking for myriexpress.h... no
<br>
checking cuda.h usability... no
<br>
checking cuda.h presence... no
<br>
checking for cuda.h... no
<br>
checking cuda_runtime_api.h usability... no
<br>
checking cuda_runtime_api.h presence... no
<br>
checking for cuda_runtime_api.h... no
<br>
checking for xmllint... xmllint
<br>
checking for bunzip2... bunzip2
<br>
checking whether diff accepts -u... -u
<br>
checking for a sed that does not truncate output... (cached) /bin/sed
<br>
checking for fgrep... /bin/grep -F
<br>
checking for ld used by gcc... /usr/bin/ld
<br>
checking if the linker (/usr/bin/ld) is GNU ld... yes
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking whether ln -s works... yes
<br>
checking the maximum length of command line arguments... 98304
<br>
checking whether the shell understands some XSI constructs... yes
<br>
checking whether the shell understands &quot;+=&quot;... no
<br>
checking for /usr/bin/ld option to reload object files... -r
<br>
checking for objdump... objdump
<br>
checking how to recognize dependent libraries... pass_all
<br>
checking for ar... ar
<br>
checking for strip... strip
<br>
checking for ranlib... ranlib
<br>
checking command to parse /usr/bin/nm -B output from gcc object... ok
<br>
checking for dlfcn.h... yes
<br>
checking for objdir... .libs
<br>
checking if gcc supports -fno-rtti -fno-exceptions... no
<br>
checking for gcc option to produce PIC... -fPIC -DPIC
<br>
checking if gcc PIC flag -fPIC -DPIC works... yes
<br>
checking if gcc static flag -static works... yes
<br>
checking if gcc supports -c -o file.o... yes
<br>
checking if gcc supports -c -o file.o... (cached) yes
<br>
checking whether the gcc linker (/usr/bin/ld) supports shared libraries... yes
<br>
checking whether -lc should be explicitly linked in... no
<br>
checking dynamic linker characteristics... GNU/Linux ld.so
<br>
checking how to hardcode library paths into programs... immediate
<br>
checking whether stripping libraries is possible... yes
<br>
checking if libtool supports shared libraries... yes
<br>
checking whether to build shared libraries... yes
<br>
checking whether to build static libraries... no
<br>
configure: creating ./config.status
<br>
config.status: creating Makefile
<br>
config.status: creating include/Makefile
<br>
config.status: creating src/Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating doc/doxygen-config.cfg
<br>
config.status: creating utils/Makefile
<br>
config.status: creating hwloc.pc
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/linux/Makefile
<br>
config.status: creating tests/linux/gather/Makefile
<br>
config.status: creating tests/xml/Makefile
<br>
config.status: creating tests/ports/Makefile
<br>
config.status: creating tests/linux/hwloc-gather-topology
<br>
config.status: creating tests/linux/gather/test-gather-topology.sh
<br>
config.status: creating tests/linux/test-topology.sh
<br>
config.status: creating tests/xml/test-topology.sh
<br>
config.status: creating utils/test-hwloc-calc.sh
<br>
config.status: creating utils/test-hwloc-distrib.sh
<br>
config.status: creating include/private/autogen/config.h
<br>
config.status: creating include/hwloc/autogen/config.h
<br>
config.status: linking ../src/topology.c to tests/ports/topology.c
<br>
config.status: linking ../src/traversal.c to tests/ports/traversal.c
<br>
config.status: linking ../src/topology-synthetic.c to tests/ports/topology-synthetic.c
<br>
config.status: linking ../src/topology-solaris.c to tests/ports/topology-solaris.c
<br>
config.status: linking ../src/topology-aix.c to tests/ports/topology-aix.c
<br>
config.status: linking ../src/topology-osf.c to tests/ports/topology-osf.c
<br>
config.status: linking ../src/topology-windows.c to tests/ports/topology-windows.c
<br>
config.status: linking ../src/topology-darwin.c to tests/ports/topology-darwin.c
<br>
config.status: linking ../src/topology-freebsd.c to tests/ports/topology-freebsd.c
<br>
config.status: linking ../src/topology-hpux.c to tests/ports/topology-hpux.c
<br>
config.status: executing depfiles commands
<br>
config.status: executing chmoding-scripts commands
<br>
config.status: executing libtool commands
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
Making all in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
&nbsp;&nbsp;CC     traversal.lo
<br>
&nbsp;&nbsp;CC     distances.lo
<br>
&nbsp;&nbsp;CC     topology-synthetic.lo
<br>
&nbsp;&nbsp;CC     bind.lo
<br>
&nbsp;&nbsp;CC     cpuset.lo
<br>
&nbsp;&nbsp;CC     misc.lo
<br>
&nbsp;&nbsp;CC     topology-xml.lo
<br>
&nbsp;&nbsp;CC     topology-libpci.lo
<br>
&nbsp;&nbsp;CC     topology-linux.lo
<br>
&nbsp;&nbsp;CC     topology-x86.lo
<br>
&nbsp;&nbsp;CCLD   libhwloc.la
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/src'
<br>
Making all in include
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/include'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/include'
<br>
Making all in utils
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
&nbsp;&nbsp;CC     lstopo-lstopo.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-color.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-text.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-draw.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-fig.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-cairo.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-xml.o
<br>
&nbsp;&nbsp;CCLD   lstopo
<br>
&nbsp;&nbsp;CC     hwloc-calc.o
<br>
&nbsp;&nbsp;CCLD   hwloc-calc
<br>
&nbsp;&nbsp;CC     hwloc-bind.o
<br>
&nbsp;&nbsp;CCLD   hwloc-bind
<br>
&nbsp;&nbsp;CC     hwloc-distrib.o
<br>
&nbsp;&nbsp;CCLD   hwloc-distrib
<br>
&nbsp;&nbsp;CC     hwloc-ps.o
<br>
&nbsp;&nbsp;CCLD   hwloc-ps
<br>
Creating hwloc.7 man page...
<br>
Creating lstopo.1 man page...
<br>
Creating hwloc-bind.1 man page...
<br>
Creating hwloc-distrib.1 man page...
<br>
Creating hwloc-calc.1 man page...
<br>
Creating hwloc-ps.1 man page...
<br>
Creating hwloc-gather-topology.1 man page...
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
Making all in tests
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
Making all in ports
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
Making all in xml
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
Making all in linux
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
Making all in gather
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make[4]: Nothing to be done for `all'.
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[4]: Nothing to be done for `all-am'.
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
Making all in doc
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/doc'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/doc'
<br>
if test -d doxygen-doc/html -a -f doxygen-doc/html/doxygen.css; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cp -f ../../doc/doxygen.css doxygen-doc/html; \
<br>
fi
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/doc'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/doc'
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make[2]: Nothing to be done for `all-am'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
Making dvi in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/src'
<br>
make[2]: Nothing to be done for `dvi'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/src'
<br>
Making dvi in include
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/include'
<br>
make[2]: Nothing to be done for `dvi'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/include'
<br>
Making dvi in utils
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
make[2]: Nothing to be done for `dvi'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
Making dvi in tests
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
Making dvi in ports
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
make[3]: Nothing to be done for `dvi'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
Making dvi in xml
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
make[3]: Nothing to be done for `dvi'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
Making dvi in linux
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
Making dvi in gather
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make[4]: Nothing to be done for `dvi'.
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[4]: Nothing to be done for `dvi-am'.
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[3]: Nothing to be done for `dvi-am'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
Making dvi in doc
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/doc'
<br>
make[2]: Nothing to be done for `dvi'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/doc'
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make[2]: Nothing to be done for `dvi-am'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
Making check in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/src'
<br>
make[2]: Nothing to be done for `check'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/src'
<br>
Making check in include
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/include'
<br>
make[2]: Nothing to be done for `check'.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/include'
<br>
Making check in utils
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
make  check-TESTS
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
PASS: test-hwloc-calc.sh
<br>
PASS: test-hwloc-distrib.sh
<br>
==================
<br>
All 2 tests passed
<br>
==================
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/utils'
<br>
Making check in tests
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
Making check in ports
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
make  libhwloc-ports.la
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-traversal.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-synthetic.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-solaris.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-aix.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-osf.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-windows.lo
<br>
topology-windows.c: In function `hwloc_win_get_VirtualAllocExNumaProc':
<br>
topology-windows.c:323: warning: assignment from incompatible pointer type
<br>
topology-windows.c:328: warning: assignment from incompatible pointer type
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-darwin.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-freebsd.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-hpux.lo
<br>
&nbsp;&nbsp;CCLD   libhwloc-ports.la
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/ports'
<br>
Making check in xml
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
make  check-TESTS
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
PASS: 16amd64-8n2c-cpusets.xml
<br>
PASS: 16em64t-4s2c2t.xml
<br>
PASS: 16em64t-4s2c2t-offlines.xml
<br>
PASS: 24em64t-2n6c2t-pci.xml
<br>
PASS: 8em64t-2mi2ma2c.xml
<br>
==================
<br>
All 5 tests passed
<br>
==================
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/xml'
<br>
Making check in linux
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
Making check in gather
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make  check-TESTS
<br>
make[5]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
==================
<br>
All 0 tests passed
<br>
==================
<br>
make[5]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux/gather'
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make  check-TESTS
<br>
make[5]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
==================
<br>
All 0 tests passed
<br>
==================
<br>
make[5]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests/linux'
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make  hwloc_bitmap hwloc_bitmap_string hwloc_get_closest_objs hwloc_get_obj_covering_cpuset hwloc_get_cache_covering_cpuset hwloc_get_largest_objs_inside_cpuset hwloc_get_next_obj_covering_cpuset hwloc_get_obj_inside_cpuset hwloc_get_shared_cache_covering_obj hwloc_get_obj_below_array_by_type hwloc_bitmap_first_last_weight hwloc_bitmap_singlify hwloc_type_depth hwloc_bind hwloc_get_last_cpu_location hwloc_object_userdata hwloc_synthetic hwloc_backends hwloc_is_thissystem hwloc_distances hwloc_set_distances hwloc_groups hwloc_insert_misc hwloc_topology_restrict hwloc_obj_infos hwloc_iodevs  glibc-sched     xmlbuffer
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
&nbsp;&nbsp;CC     hwloc_bitmap.o
<br>
&nbsp;&nbsp;CCLD   hwloc_bitmap
<br>
&nbsp;&nbsp;CC     hwloc_bitmap_string.o
<br>
&nbsp;&nbsp;CCLD   hwloc_bitmap_string
<br>
&nbsp;&nbsp;CC     hwloc_get_closest_objs.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_closest_objs
<br>
&nbsp;&nbsp;CC     hwloc_get_obj_covering_cpuset.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_obj_covering_cpuset
<br>
&nbsp;&nbsp;CC     hwloc_get_cache_covering_cpuset.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_cache_covering_cpuset
<br>
&nbsp;&nbsp;CC     hwloc_get_largest_objs_inside_cpuset.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_largest_objs_inside_cpuset
<br>
&nbsp;&nbsp;CC     hwloc_get_next_obj_covering_cpuset.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_next_obj_covering_cpuset
<br>
&nbsp;&nbsp;CC     hwloc_get_obj_inside_cpuset.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_obj_inside_cpuset
<br>
&nbsp;&nbsp;CC     hwloc_get_shared_cache_covering_obj.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_shared_cache_covering_obj
<br>
&nbsp;&nbsp;CC     hwloc_get_obj_below_array_by_type.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_obj_below_array_by_type
<br>
&nbsp;&nbsp;CC     hwloc_bitmap_first_last_weight.o
<br>
&nbsp;&nbsp;CCLD   hwloc_bitmap_first_last_weight
<br>
&nbsp;&nbsp;CC     hwloc_bitmap_singlify.o
<br>
&nbsp;&nbsp;CCLD   hwloc_bitmap_singlify
<br>
&nbsp;&nbsp;CC     hwloc_type_depth.o
<br>
&nbsp;&nbsp;CCLD   hwloc_type_depth
<br>
&nbsp;&nbsp;CC     hwloc_bind.o
<br>
&nbsp;&nbsp;CCLD   hwloc_bind
<br>
&nbsp;&nbsp;CC     hwloc_get_last_cpu_location.o
<br>
&nbsp;&nbsp;CCLD   hwloc_get_last_cpu_location
<br>
&nbsp;&nbsp;CC     hwloc_object_userdata.o
<br>
&nbsp;&nbsp;CCLD   hwloc_object_userdata
<br>
&nbsp;&nbsp;CC     hwloc_synthetic.o
<br>
&nbsp;&nbsp;CCLD   hwloc_synthetic
<br>
&nbsp;&nbsp;CC     hwloc_backends.o
<br>
&nbsp;&nbsp;CCLD   hwloc_backends
<br>
hwloc_backends.o(.text+0x79): In function `main':
<br>
: warning: the use of `mktemp' is dangerous, better use `mkstemp'
<br>
&nbsp;&nbsp;CC     hwloc_is_thissystem.o
<br>
&nbsp;&nbsp;CCLD   hwloc_is_thissystem
<br>
&nbsp;&nbsp;CC     hwloc_distances.o
<br>
&nbsp;&nbsp;CCLD   hwloc_distances
<br>
&nbsp;&nbsp;CC     hwloc_set_distances.o
<br>
&nbsp;&nbsp;CCLD   hwloc_set_distances
<br>
&nbsp;&nbsp;CC     hwloc_groups.o
<br>
&nbsp;&nbsp;CCLD   hwloc_groups
<br>
&nbsp;&nbsp;CC     hwloc_insert_misc.o
<br>
&nbsp;&nbsp;CCLD   hwloc_insert_misc
<br>
&nbsp;&nbsp;CC     hwloc_topology_restrict.o
<br>
&nbsp;&nbsp;CCLD   hwloc_topology_restrict
<br>
&nbsp;&nbsp;CC     hwloc_obj_infos.o
<br>
&nbsp;&nbsp;CCLD   hwloc_obj_infos
<br>
&nbsp;&nbsp;CC     hwloc_iodevs.o
<br>
&nbsp;&nbsp;CCLD   hwloc_iodevs
<br>
&nbsp;&nbsp;CC     glibc-sched.o
<br>
&nbsp;&nbsp;CCLD   glibc-sched
<br>
&nbsp;&nbsp;CC     xmlbuffer.o
<br>
&nbsp;&nbsp;CCLD   xmlbuffer
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make  check-TESTS
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
PASS: hwloc_bitmap
<br>
empty cpuset converted back and forth, ok
<br>
full cpuset converted back and forth, ok
<br>
infinite/nonfull cpuset converted back and forth, ok
<br>
finite/nonnull cpuset converted back and forth, ok
<br>
system cpuset is 0x0000ffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff
<br>
system cpuset converted back and forth, ok
<br>
truncating system cpuset to NULL buffer
<br>
truncating system cpuset to 0 char (no modification)
<br>
truncating system cpuset to 1 char (empty string)
<br>
got 
<br>
truncating system cpuset to 10 chars (single 32bit subset except last char)
<br>
got 0x0000fff
<br>
truncating system cpuset to 11 chars (single 32bit subset)
<br>
got 0x0000ffff
<br>
truncating system cpuset to 23 chars (two 32bit subsets with ending comma)
<br>
got 0x0000ffff,0xffffffff,
<br>
truncating system cpuset to 51 chars (truncate to four and a half 32bit subsets)
<br>
got 0x0000ffff,0xffffffff,0xffffffff,0xffffffff,0xffff
<br>
first cpu cpuset is 0x00000001
<br>
first cpu cpuset converted back and forth, ok
<br>
last cpu cpuset is 0x00008000,,,,,,,,,,,,,,,,,,,,,,0x0
<br>
last cpu cpuset converted back and forth, ok
<br>
PASS: hwloc_bitmap_string
<br>
looked for 120 closest entries, found 119
<br>
ancestor type 1 depth 0 number 0 is system level
<br>
PASS: hwloc_get_closest_objs
<br>
found covering object type Socket covering cpuset 0x0,0x0fff,0xf0000000
<br>
covering object of 0x0,0x0fff,0xf0000000 is 0x0000ffff,0xff000000, expected 0x0000ffff,0xff000000
<br>
found system as covering object of first+last cpus cpuset 0x8000,,,,,,,,,,,,,,,,,,,,,,0x1
<br>
found no covering object for too-large cpuset 0x10000,,,,,,,,,,,,,,,,,,,,,,0x0
<br>
PASS: hwloc_get_obj_covering_cpuset
<br>
PASS: hwloc_get_cache_covering_cpuset
<br>
PASS: hwloc_get_largest_objs_inside_cpuset
<br>
PASS: hwloc_get_next_obj_covering_cpuset
<br>
PASS: hwloc_get_obj_inside_cpuset
<br>
PASS: hwloc_get_shared_cache_covering_obj
<br>
PASS: hwloc_get_obj_below_array_by_type
<br>
PASS: hwloc_bitmap_first_last_weight
<br>
PASS: hwloc_bitmap_singlify
<br>
PASS: hwloc_type_depth
<br>
/bin/sh: line 1: 11860 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_bind
<br>
PASS: hwloc_get_last_cpu_location
<br>
PASS: hwloc_object_userdata
<br>
PASS: hwloc_synthetic
<br>
exporting topology topology to XML buffer and file for later...
<br>
init...
<br>
switching to xml...
<br>
switching to xmlbuffer...
<br>
switching to synthetic...
<br>
switching sysfs fsroot...
<br>
switching to xml and loading...
<br>
switching to xmlbuffer and loading...
<br>
switching to synthetic and loading...
<br>
switching sysfs fsroot and loading...
<br>
switching to synthetic...
<br>
PASS: hwloc_backends
<br>
/bin/sh: line 1: 11972 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_is_thissystem
<br>
No distance at depth 0
<br>
No distance at depth 1
<br>
distance matrix for depth 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0     1     2     3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0 1.000 4.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 4.000 1.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 8.000 8.000 1.000 4.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 8.000 8.000 4.000 1.000
<br>
No distance at depth 3
<br>
No distance at depth 4
<br>
distance matrix for depth 5:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0     1     2     3     4     5     6     7     8     9    10    11    12    13    14    15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0 1.000 2.000 4.000 4.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 2.000 1.000 4.000 4.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 4.000 4.000 1.000 2.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 4.000 4.000 2.000 1.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;4 8.000 8.000 8.000 8.000 1.000 2.000 4.000 4.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;5 8.000 8.000 8.000 8.000 2.000 1.000 4.000 4.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;6 8.000 8.000 8.000 8.000 4.000 4.000 1.000 2.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;7 8.000 8.000 8.000 8.000 4.000 4.000 2.000 1.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;8 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 1.000 2.000 4.000 4.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;9 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 2.000 1.000 4.000 4.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;10 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 1.000 2.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;11 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 2.000 1.000 8.000 8.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;12 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 1.000 2.000 4.000 4.000
<br>
&nbsp;&nbsp;&nbsp;13 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 2.000 1.000 4.000 4.000
<br>
&nbsp;&nbsp;&nbsp;14 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 1.000 2.000
<br>
&nbsp;&nbsp;&nbsp;15 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 8.000 4.000 4.000 2.000 1.000
<br>
distance matrix for NUMA nodes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0     1     2     3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0 1.000 4.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 4.000 1.000 8.000 8.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 8.000 8.000 1.000 4.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 8.000 8.000 4.000 1.000
<br>
PASS: hwloc_distances
<br>
0 31
<br>
0 7
<br>
0 31
<br>
PASS: hwloc_set_distances
<br>
PASS: hwloc_groups
<br>
lt-hwloc_insert_misc: ../../src/topology.c:2764: hwloc_topology_check: Assertion `hwloc_get_depth_type(topology, hwloc_topology_get_depth(topology)-1) == HWLOC_OBJ_PU' failed.
<br>
/bin/sh: line 1: 12062 Aborted                 ${dir}$tst
<br>
FAIL: hwloc_insert_misc
<br>
starting from full topology
<br>
restricting to nothing, must fail
<br>
restricting to nothing, does nothing
<br>
removing one PU
<br>
removing one core
<br>
removing one node
<br>
restricting to only some already removed node, must fail
<br>
restricting to 3 PUs
<br>
restricting to a single PU
<br>
restricting to a Misc covering only the of the PU level
<br>
PASS: hwloc_topology_restrict
<br>
PASS: hwloc_obj_infos
<br>
lt-hwloc_iodevs: ../../tests/hwloc_iodevs.c:30: main: Assertion `obj-&gt;type == HWLOC_OBJ_BRIDGE' failed.
<br>
Found 1 bridges
<br>
/bin/sh: line 1: 12130 Aborted                 ${dir}$tst
<br>
FAIL: hwloc_iodevs
<br>
/bin/sh: line 1: 12155 Segmentation fault      ${dir}$tst
<br>
FAIL: glibc-sched
<br>
exported to buffer 0x945f530 length 155
<br>
re-exported to buffer 0x945f280 length 155
<br>
PASS: xmlbuffer
<br>
========================================================
<br>
5 of 28 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3680/hwloc/hwloc-1.4a1r3680/_build'
<br>
make: *** [distcheck] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2319.php">Jeff Squyres: "[hwloc-devel] trunk make check on eddie"</a>
<li><strong>Previous message:</strong> <a href="2317.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671"</a>
<!-- nextthread="start" -->
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
