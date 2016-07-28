<?
$subject_val = "[OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 18:25:34 2014" -->
<!-- isoreceived="20140109232534" -->
<!-- sent="Thu, 9 Jan 2014 15:25:18 -0800" -->
<!-- isosent="20140109232518" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5" -->
<!-- id="CAAvDA167cKjd0iCxOZDb51cbGueGC86yDa7knysh-9KMp2ruUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 18:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13647.php">Paul Hargrove: "[OMPI devel] 1.7.4 support Mac OSX 10.8 or 10.9?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13652.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Reply:</strong> <a href="13652.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I noted in another email, 1.7.4's README claims support for Mac OSX
<br>
versions 10.5 through 10.7.  So, I just now tried (but failed) to build on
<br>
10.5 (Leopard):
<br>
<p>*** Assembler
<br>
checking dependency style of gcc -std=gnu99... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -p
<br>
checking the name lister (/usr/bin/nm -p) interface... BSD nm
<br>
checking for fgrep... /usr/bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... OS X Leopard - yes ( -O3
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing)
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... no
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels... none
<br>
configure: error: Could not determine global symbol label prefix
<br>
<p>The same failure is seen on a PPC system running OSX Leopard, too.
<br>
&nbsp;However, I figure it best to focus on getting x86 working first before
<br>
worrying any about PPC.
<br>
<p>The only configure option used was --prefix.
<br>
The bzip2-compressed config.log is attached.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13648/openmpi-1.7-latest-macos10.5-x86.config.log.bz2">openmpi-1.7-latest-macos10.5-x86.config.log.bz2</a>
</ul>
<!-- attachment="openmpi-1.7-latest-macos10.5-x86.config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13647.php">Paul Hargrove: "[OMPI devel] 1.7.4 support Mac OSX 10.8 or 10.9?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13652.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Reply:</strong> <a href="13652.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
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
