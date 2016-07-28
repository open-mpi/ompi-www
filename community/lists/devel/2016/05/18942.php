<?
$subject_val = "Re: [OMPI devel] Master broken for ILP32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 04:22:27 2016" -->
<!-- isoreceived="20160509082227" -->
<!-- sent="Mon, 9 May 2016 17:22:24 +0900" -->
<!-- isosent="20160509082224" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master broken for ILP32" -->
<!-- id="d21438a4-c728-a791-31b4-bf0a00e7b729_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14jG6W3STDRrNeX6Lju_9KAO4+1CTq5AY1=dGewyn-o1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master broken for ILP32<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 04:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18943.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18941.php">Paul Hargrove: "[OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18941.php">Paul Hargrove: "[OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18943.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18943.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18945.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p><p>on which distro are you running ?
<br>
<p>are you compiling on a 64 bit distro to generate a 32 bit library ?
<br>
<p><p>it seems we are currently only testing a atomic on a long (32 bits on a 
<br>
32 bits arch) and
<br>
<p>then incorrectly assume it works also on 64 bits (!)
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/9/2016 3:59 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Perhaps this is already known.
</span><br>
<span class="quotelev1">&gt; Several builds I've tried recently from the ompi (not ompi-release) 
</span><br>
<span class="quotelev1">&gt; repo are failing on 32-bit platforms with
</span><br>
<span class="quotelev1">&gt;  ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `__sync_add_and_fetch_8'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is impacting PRs that I am being asked to test (e.g. 1643).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I did *not* configure with --enable-builtin-atomics, yet 
</span><br>
<span class="quotelev1">&gt; configure seems to show them being selected anyway:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *** Assembler
</span><br>
<span class="quotelev1">&gt;     checking dependency style of gcc -std=gnu99... gcc3
</span><br>
<span class="quotelev1">&gt;     checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
</span><br>
<span class="quotelev1">&gt;     checking the name lister (/usr/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev1">&gt;     checking for fgrep... /usr/bin/grep -F
</span><br>
<span class="quotelev1">&gt;     checking for __sync builtin atomics... yes
</span><br>
<span class="quotelev1">&gt;     checking for processor support of __sync builtin atomic
</span><br>
<span class="quotelev1">&gt;     compare-and-swap on 128-bit values... no
</span><br>
<span class="quotelev1">&gt;     checking for __sync builtin atomic compare-and-swap on 128-bit
</span><br>
<span class="quotelev1">&gt;     values with -mcx16 flag... no
</span><br>
<span class="quotelev1">&gt;     checking if .proc/endp is needed... no
</span><br>
<span class="quotelev1">&gt;     checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt;     checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt;     checking for objdump... objdump
</span><br>
<span class="quotelev1">&gt;     checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev1">&gt;     checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt;     checking prefix for global symbol labels...
</span><br>
<span class="quotelev1">&gt;     checking prefix for lsym labels... .L
</span><br>
<span class="quotelev1">&gt;     checking prefix for function in .type... @
</span><br>
<span class="quotelev1">&gt;     checking if .size is needed... yes
</span><br>
<span class="quotelev1">&gt;     checking if .align directive takes logarithmic value... no
</span><br>
<span class="quotelev1">&gt;     checking if processor supports x86_64 16-byte
</span><br>
<span class="quotelev1">&gt;     compare-and-exchange... no
</span><br>
<span class="quotelev1">&gt;     checking for assembly architecture... IA32
</span><br>
<span class="quotelev1">&gt;     checking for builtin atomics... BUILTIN_SYNC
</span><br>
<span class="quotelev1">&gt;     checking for atomic assembly filename... none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18941.php">http://www.open-mpi.org/community/lists/devel/2016/05/18941.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18942/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18943.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18941.php">Paul Hargrove: "[OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18941.php">Paul Hargrove: "[OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18943.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18943.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18945.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
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
