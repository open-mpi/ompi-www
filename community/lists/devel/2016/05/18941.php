<?
$subject_val = "[OMPI devel] Master broken for ILP32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 02:59:45 2016" -->
<!-- isoreceived="20160509065945" -->
<!-- sent="Sun, 8 May 2016 23:59:40 -0700" -->
<!-- isosent="20160509065940" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master broken for ILP32" -->
<!-- id="CAAvDA14jG6W3STDRrNeX6Lju_9KAO4+1CTq5AY1=dGewyn-o1w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Master broken for ILP32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 02:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps this is already known.
<br>
Several builds I've tried recently from the ompi (not ompi-release) repo
<br>
are failing on 32-bit platforms with
<br>
&nbsp;&nbsp;&nbsp;../../../opal/.libs/libopen-pal.so: undefined reference to
<br>
`__sync_add_and_fetch_8'
<br>
<p>This is impacting PRs that I am being asked to test (e.g. 1643).
<br>
<p>Note that I did *not* configure with --enable-builtin-atomics, yet
<br>
configure seems to show them being selected anyway:
<br>
<p>*** Assembler
<br>
checking dependency style of gcc -std=gnu99... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking for fgrep... /usr/bin/grep -F
<br>
checking for __sync builtin atomics... yes
<br>
checking for processor support of __sync builtin atomic compare-and-swap on
<br>
128-bit values... no
<br>
checking for __sync builtin atomic compare-and-swap on 128-bit values with
<br>
-mcx16 flag... no
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... objdump
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... @
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... no
<br>
checking if processor supports x86_64 16-byte compare-and-exchange... no
<br>
checking for assembly architecture... IA32
<br>
checking for builtin atomics... BUILTIN_SYNC
<br>
checking for atomic assembly filename... none
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18940.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
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
