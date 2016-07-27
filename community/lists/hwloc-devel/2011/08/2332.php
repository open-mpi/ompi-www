<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (v1.3) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 21:03:38 2011" -->
<!-- isoreceived="20110830010338" -->
<!-- sent="Mon, 29 Aug 2011 21:03:37 -0400" -->
<!-- isosent="20110830010337" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (v1.3) ===" -->
<!-- id="201108300103.p7U13bD9013422_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (v1.3) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 21:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2333.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3726)"</a>
<li><strong>Previous message:</strong> <a href="2331.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.2) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (v1.3):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Mon Aug 29 21:02:44 EDT 2011
<br>
End time:   Mon Aug 29 21:03:37 EDT 2011
<br>
<p>=======================================================================
<br>
{ test ! -d &quot;hwloc-1.3rc2r3720&quot; || { find &quot;hwloc-1.3rc2r3720&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.3rc2r3720&quot;; }; }
<br>
test -d &quot;hwloc-1.3rc2r3720&quot; || mkdir &quot;hwloc-1.3rc2r3720&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.3rc2r3720 distdir=../hwloc-1.3rc2r3720/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/src'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/src'
<br>
&nbsp;(cd include &amp;&amp; make  top_distdir=../hwloc-1.3rc2r3720 distdir=../hwloc-1.3rc2r3720/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.3rc2r3720 distdir=../hwloc-1.3rc2r3720/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/utils'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/utils'
<br>
&nbsp;(cd tests &amp;&amp; make  top_distdir=../hwloc-1.3rc2r3720 distdir=../hwloc-1.3rc2r3720/tests \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests'
<br>
&nbsp;(cd ports &amp;&amp; make  top_distdir=../../hwloc-1.3rc2r3720 distdir=../../hwloc-1.3rc2r3720/tests/ports \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/ports'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/ports'
<br>
&nbsp;(cd xml &amp;&amp; make  top_distdir=../../hwloc-1.3rc2r3720 distdir=../../hwloc-1.3rc2r3720/tests/xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/xml'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/xml'
<br>
&nbsp;(cd linux &amp;&amp; make  top_distdir=../../hwloc-1.3rc2r3720 distdir=../../hwloc-1.3rc2r3720/tests/linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/linux'
<br>
&nbsp;(cd gather &amp;&amp; make  top_distdir=../../../hwloc-1.3rc2r3720 distdir=../../../hwloc-1.3rc2r3720/tests/linux/gather \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/linux/gather'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/linux/gather'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests/linux'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/tests'
<br>
&nbsp;(cd doc &amp;&amp; make  top_distdir=../hwloc-1.3rc2r3720 distdir=../hwloc-1.3rc2r3720/doc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc'
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
/u/mpiteam/local/autotools-2.68-1.11.1-2.4-1.4.15/bin/doxygen /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/doxygen.cfg
<br>
Notice: Output directory `../doc/doxygen-doc' does not exist. I have created it for you.
<br>
Searching for include files...
<br>
Searching for files in directory /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc
<br>
Searching for example files...
<br>
Searching for files in directory /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc
<br>
Searching for images...
<br>
Searching for files in directory /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/images
<br>
Searching for files in directory /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/images
<br>
Searching for dot files...
<br>
Searching for msc files...
<br>
Searching for files to exclude
<br>
Searching for files to process...
<br>
Reading and parsing tag files
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/hwloc.doxy...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/hwloc.doxy...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/helper.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/helper.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/bitmap.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/bitmap.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/glibc-sched.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/glibc-sched.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/linux.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/linux.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/linux-libnuma.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/linux-libnuma.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/cuda.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/cuda.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/cudart.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/cudart.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/openfabrics-verbs.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/openfabrics-verbs.h...
<br>
Preprocessing /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/myriexpress.h...
<br>
Parsing file /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/include/hwloc/myriexpress.h...
<br>
Building group list...
<br>
Building directory list...
<br>
Building namespace list...
<br>
Building file list...
<br>
Building class list...
<br>
Associating documentation with classes...
<br>
Computing nesting relations for classes...
<br>
Building example list...
<br>
Searching for enumerations...
<br>
Searching for documented typedefs...
<br>
Searching for members imported via using declarations...
<br>
Searching for included using directives...
<br>
Searching for documented variables...
<br>
Building member list...
<br>
Searching for friends...
<br>
Searching for documented defines...
<br>
Computing class inheritance relations...
<br>
Computing class usage relations...
<br>
Flushing cached template relations that have become invalid...
<br>
Creating members for template instances...
<br>
Computing class relations...
<br>
Add enum values to enums...
<br>
Searching for member function documentation...
<br>
Building page list...
<br>
Search for main page...
<br>
Computing page relations...
<br>
Determining the scope of groups...
<br>
Sorting lists...
<br>
Freeing entry tree
<br>
Determining/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/hwloc.doxy:265: warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/hwloc.doxy:265: warning: Illegal command textwidth as part of a \image
<br>
/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/hwloc.doxy:753: warning: Illegal command textwidth as part of a \image
<br>
&nbsp;which enums are documented
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
Adding xrefitems...
<br>
Sorting member lists...
<br>
Resolving citations...
<br>
Generating citations page...
<br>
Counting data structures...
<br>
Resolving user defined references...
<br>
Finding anchors and sections in the documentation...
<br>
Combining using relations...
<br>
Adding members to index pages...
<br>
Generating style sheet...
<br>
Generating index page...
<br>
Generating page index...
<br>
Generating example documentation...
<br>
Generating file sources...
<br>
Generating code for file bitmap.h...
<br>
Generating code for file cuda.h...
<br>
Generating code for file cudart.h...
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
Generating page documentation...
<br>
Generating docs for page termsanddefs...
<br>
Generating docs for page tools...
<br>
Generating docs for page envvar...
<br>
Generating docs for page cpu_mem_bind...
<br>
Generating docs for page iodevices...
<br>
Generating docs for page interoperability...
<br>
Generating docs for page threadsafety...
<br>
Generating docs for page embed...
<br>
Generating docs for page faq...
<br>
Generating group documentation...
<br>
Generating group index...
<br>
Generating class documentation...
<br>
Generating annotated compound index...
<br>
Generating alphabetical compound index...
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
Generating namespace index...
<br>
Generating namespace member index...
<br>
Generating graph info page...
<br>
Generating file index...
<br>
Generating example index...
<br>
Generating file member index...
<br>
finalizing index lists...
<br>
finished...
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
mv letter-refman.pdf /home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc/doxygen-doc/hwloc-letter.pdf
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
(/usr/share/texmf/tex/latex/natbib/natbib.sty)
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
(/usr/share/texmf/tex/latex/listings/listings.sty
<br>
(/usr/share/texmf/tex/latex/listings/lstpatch.sty)
<br>
(/usr/share/texmf/tex/latex/listings/lstmisc.sty)
<br>
(/usr/share/texmf/tex/latex/listings/listings.cfg))
<br>
(/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/base/ifthen.sty)
<br>
(/usr/share/texmf/tex/latex/xcolor/xcolor.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg)
<br>
(/usr/share/texmf/tex/latex/carlisle/colortbl.sty
<br>
(/usr/share/texmf/tex/latex/tools/array.sty)))
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/oberdiek/ifpdf.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
(/usr/share/texmf/tex/latex/hyperref/puenc.def)
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
(/usr/share/texmf/tex/latex/psnfss/upsy.fd)))
<br>
(/usr/share/texmf/tex/latex/base/inputenc.sty
<br>
<p>! LaTeX Error: File `utf8.def' not found.
<br>
<p>Type X to quit or &lt;RETURN&gt; to proceed,
<br>
or enter new name. (Default extension: def)
<br>
<p>Enter file name: 
<br>
! Emergency stop.
<br>
&lt;read *&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
l.118 \endinput
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^M
<br>
No pages of output.
<br>
Transcript written on letter-refman.log.
<br>
Input index file letter-refman.idx not found.
<br>
Usage: makeindex [-ilqrcg] [-s sty] [-o ind] [-t log] [-p num] [idx0 idx1 ...]
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
(/usr/share/texmf/tex/latex/natbib/natbib.sty)
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
(/usr/share/texmf/tex/latex/listings/listings.sty
<br>
(/usr/share/texmf/tex/latex/listings/lstpatch.sty)
<br>
(/usr/share/texmf/tex/latex/listings/lstmisc.sty)
<br>
(/usr/share/texmf/tex/latex/listings/listings.cfg))
<br>
(/usr/share/texmf/tex/latex/graphics/color.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg))
<br>
(/usr/share/texmf/tex/latex/base/ifthen.sty)
<br>
(/usr/share/texmf/tex/latex/xcolor/xcolor.sty
<br>
(/usr/share/texmf/tex/latex/config/color.cfg)
<br>
(/usr/share/texmf/tex/latex/carlisle/colortbl.sty
<br>
(/usr/share/texmf/tex/latex/tools/array.sty)))
<br>
(/usr/share/texmf/tex/latex/base/textcomp.sty
<br>
(/usr/share/texmf/tex/latex/base/ts1enc.def))
<br>
(/usr/share/texmf/tex/latex/base/alltt.sty)
<br>
(/usr/share/texmf/tex/latex/oberdiek/ifpdf.sty)
<br>
(/usr/share/texmf/tex/latex/hyperref/hyperref.sty
<br>
(/usr/share/texmf/tex/latex/hyperref/pd1enc.def)
<br>
(/usr/share/texmf/tex/latex/config/hyperref.cfg)
<br>
(/usr/share/texmf/tex/latex/hyperref/puenc.def)
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
(/usr/share/texmf/tex/latex/psnfss/upsy.fd)))
<br>
(/usr/share/texmf/tex/latex/base/inputenc.sty
<br>
<p>! LaTeX Error: File `utf8.def' not found.
<br>
<p>Type X to quit or &lt;RETURN&gt; to proceed,
<br>
or enter new name. (Default extension: def)
<br>
<p>Enter file name: 
<br>
! Emergency stop.
<br>
&lt;read *&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
l.118 \endinput
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^M
<br>
No pages of output.
<br>
Transcript written on letter-refman.log.
<br>
mv: cannot stat `letter-refman.pdf': No such file or directory
<br>
make[1]: *** [doxygen-doc/hwloc-letter.pdf] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/v1.3/create-r3720/hwloc/doc'
<br>
make: *** [distdir] Error 1
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
<li><strong>Next message:</strong> <a href="2333.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3726)"</a>
<li><strong>Previous message:</strong> <a href="2331.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.2) ==="</a>
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
