<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 19:46:33 2014" -->
<!-- isoreceived="20140110004633" -->
<!-- sent="Thu, 9 Jan 2014 16:46:24 -0800" -->
<!-- isosent="20140110004624" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5" -->
<!-- id="2413AC06-D029-4959-9A02-E8064BBC273D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA167cKjd0iCxOZDb51cbGueGC86yDa7knysh-9KMp2ruUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 19:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13653.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 support Mac OSX 10.8 or 10.9?"</a>
<li><strong>Previous message:</strong> <a href="13651.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13648.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Reply:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dunno if we really go back that far, Paul - I doubt anyone has tested on anything less than 10.8, frankly. Might be better if we update to not make claims that far back.
<br>
<p>Were you able to build/run on 10.7?
<br>
<p>On Jan 9, 2014, at 3:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As I noted in another email, 1.7.4's README claims support for Mac OSX versions 10.5 through 10.7.  So, I just now tried (but failed) to build on 10.5 (Leopard):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking dependency style of gcc -std=gnu99... gcc3
</span><br>
<span class="quotelev1">&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -p
</span><br>
<span class="quotelev1">&gt; checking the name lister (/usr/bin/nm -p) interface... BSD nm
</span><br>
<span class="quotelev1">&gt; checking for fgrep... /usr/bin/grep -F
</span><br>
<span class="quotelev1">&gt; checking if need to remove -g from CCASFLAGS... OS X Leopard - yes ( -O3 -DNDEBUG -finline-functions -fno-strict-aliasing)
</span><br>
<span class="quotelev1">&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev1">&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev1">&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt; checking for objdump... no
</span><br>
<span class="quotelev1">&gt; checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev1">&gt; checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt; checking prefix for global symbol labels... none
</span><br>
<span class="quotelev1">&gt; configure: error: Could not determine global symbol label prefix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same failure is seen on a PPC system running OSX Leopard, too.  However, I figure it best to focus on getting x86 working first before worrying any about PPC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only configure option used was --prefix.
</span><br>
<span class="quotelev1">&gt; The bzip2-compressed config.log is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.7-latest-macos10.5-x86.config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13653.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 support Mac OSX 10.8 or 10.9?"</a>
<li><strong>Previous message:</strong> <a href="13651.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13648.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Reply:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
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
