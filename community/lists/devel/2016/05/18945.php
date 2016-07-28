<?
$subject_val = "Re: [OMPI devel] Master broken for ILP32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 13:12:22 2016" -->
<!-- isoreceived="20160509171222" -->
<!-- sent="Mon, 9 May 2016 10:12:16 -0700" -->
<!-- isosent="20160509171216" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master broken for ILP32" -->
<!-- id="CAAvDA14kxByQWxbePoP_j=0OxB28N+xN=QV8KxCa+Hog-iTeQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="d21438a4-c728-a791-31b4-bf0a00e7b729_at_rist.or.jp" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 13:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Regarding &quot;distro&quot;:
<br>
This was happening, for instance, on OpenBSD and NetBSD (32-bit kernels on
<br>
64-bit h/w) when testing your PR1643.
<br>
However, it sounds like Nathan knows how/where to fix this.
<br>
<p>HOWEVER, that is not the only issue here.
<br>
Why is master is picking the BUILTIN (__sync) atomics (as shown in the
<br>
configure output quoted below), while v2.x (same system and same config
<br>
args) uses a .s file:
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
checking if gcc -std=gnu99 supports GCC inline assembly... yes
<br>
checking if gcc -std=gnu99 supports DEC inline assembly... no
<br>
checking if gcc -std=gnu99 supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1-0
<br>
checking for assembly architecture... IA32
<br>
checking for builtin atomics... BUILTIN_NO
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... yes (atomic-ia32-linux-nongas.s)
<br>
checking for atomic assembly filename... atomic-ia32-linux-nongas.s
<br>
<p><p><p>-Paul
<br>
<p>On Mon, May 9, 2016 at 1:22 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on which distro are you running ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are you compiling on a 64 bit distro to generate a 32 bit library ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems we are currently only testing a atomic on a long (32 bits on a 32
</span><br>
<span class="quotelev1">&gt; bits arch) and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then incorrectly assume it works also on 64 bits (!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/9/2016 3:59 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps this is already known.
</span><br>
<span class="quotelev1">&gt; Several builds I've tried recently from the ompi (not ompi-release) repo
</span><br>
<span class="quotelev1">&gt; are failing on 32-bit platforms with
</span><br>
<span class="quotelev1">&gt;    ../../../opal/.libs/libopen-pal.so: undefined reference to
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
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking dependency style of gcc -std=gnu99... gcc3
</span><br>
<span class="quotelev1">&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
</span><br>
<span class="quotelev1">&gt; checking the name lister (/usr/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev1">&gt; checking for fgrep... /usr/bin/grep -F
</span><br>
<span class="quotelev1">&gt; checking for __sync builtin atomics... yes
</span><br>
<span class="quotelev1">&gt; checking for processor support of __sync builtin atomic compare-and-swap
</span><br>
<span class="quotelev1">&gt; on 128-bit values... no
</span><br>
<span class="quotelev1">&gt; checking for __sync builtin atomic compare-and-swap on 128-bit values with
</span><br>
<span class="quotelev1">&gt; -mcx16 flag... no
</span><br>
<span class="quotelev1">&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev1">&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt; checking for objdump... objdump
</span><br>
<span class="quotelev1">&gt; checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev1">&gt; checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt; checking prefix for global symbol labels...
</span><br>
<span class="quotelev1">&gt; checking prefix for lsym labels... .L
</span><br>
<span class="quotelev1">&gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev1">&gt; checking if .size is needed... yes
</span><br>
<span class="quotelev1">&gt; checking if .align directive takes logarithmic value... no
</span><br>
<span class="quotelev1">&gt; checking if processor supports x86_64 16-byte compare-and-exchange... no
</span><br>
<span class="quotelev1">&gt; checking for assembly architecture... IA32
</span><br>
<span class="quotelev1">&gt; checking for builtin atomics... BUILTIN_SYNC
</span><br>
<span class="quotelev1">&gt; checking for atomic assembly filename... none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                           &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18941.php">http://www.open-mpi.org/community/lists/devel/2016/05/18941.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18942.php">http://www.open-mpi.org/community/lists/devel/2016/05/18942.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18945/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
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
