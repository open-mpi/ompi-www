<?
$subject_val = "Re: [OMPI devel] Master broken for ILP32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 04:31:16 2016" -->
<!-- isoreceived="20160509083116" -->
<!-- sent="Mon, 9 May 2016 08:30:59 +0000" -->
<!-- isosent="20160509083059" -->
<!-- name="Hjelm, Nathan Thomas" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master broken for ILP32" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7155FFBF61B_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>From:</strong> Hjelm, Nathan Thomas (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 04:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This really isnt a problem with the atomics code. We have a macro to indicate whether 64-bit is really supported. Something in opal is using 64-bit atomics without checking if they are supported. With sync atomics we get a link error but with the others it is a compile error. I fixed a similar problem in vader but it looks like there are more places that need to be fixed.
<br>
<p><p>________________________________________
<br>
From: devel on behalf of Gilles Gouaillardet
<br>
Sent: Monday, May 09, 2016 2:22:24 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Master broken for ILP32
<br>
<p>Paul,
<br>
<p><p>on which distro are you running ?
<br>
<p>are you compiling on a 64 bit distro to generate a 32 bit library ?
<br>
<p><p>it seems we are currently only testing a atomic on a long (32 bits on a 32 bits arch) and
<br>
<p>then incorrectly assume it works also on 64 bits (!)
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 5/9/2016 3:59 PM, Paul Hargrove wrote:
<br>
Perhaps this is already known.
<br>
Several builds I've tried recently from the ompi (not ompi-release) repo are failing on 32-bit platforms with
<br>
&nbsp;&nbsp;&nbsp;../../../opal/.libs/libopen-pal.so: undefined reference to `__sync_add_and_fetch_8'
<br>
<p>This is impacting PRs that I am being asked to test (e.g. 1643).
<br>
<p>Note that I did *not* configure with --enable-builtin-atomics, yet configure seems to show them being selected anyway:
<br>
*** Assembler
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
checking for processor support of __sync builtin atomic compare-and-swap on 128-bit values... no
<br>
checking for __sync builtin atomic compare-and-swap on 128-bit values with -mcx16 flag... no
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
Paul H. Hargrove                          &lt;mailto:PHHargrove_at_[hidden]&gt; PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18941.php">http://www.open-mpi.org/community/lists/devel/2016/05/18941.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18942.php">Gilles Gouaillardet: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18944.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
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
