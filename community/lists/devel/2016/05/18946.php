<?
$subject_val = "Re: [OMPI devel] Master broken for ILP32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 13:43:35 2016" -->
<!-- isoreceived="20160509174335" -->
<!-- sent="Mon, 9 May 2016 17:43:33 +0000" -->
<!-- isosent="20160509174333" -->
<!-- name="Hjelm, Nathan Thomas" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master broken for ILP32" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7155FFBF807_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14kxByQWxbePoP_j=0OxB28N+xN=QV8KxCa+Hog-iTeQQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-09 13:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18945.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18945.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have chosen to use the __sync builtins by default on master. There was an rfc on it awhile ago. Is there a good reason to go back to the inline by default or is this just surprising?
<br>
<p><p>________________________________________
<br>
From: devel on behalf of Paul Hargrove
<br>
Sent: Monday, May 09, 2016 11:12:16 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Master broken for ILP32
<br>
<p>Regarding &quot;distro&quot;:
<br>
This was happening, for instance, on OpenBSD and NetBSD (32-bit kernels on 64-bit h/w) when testing your PR1643.
<br>
However, it sounds like Nathan knows how/where to fix this.
<br>
<p>HOWEVER, that is not the only issue here.
<br>
Why is master is picking the BUILTIN (__sync) atomics (as shown in the configure output quoted below), while v2.x (same system and same config args) uses a .s file:
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
<p><p>-Paul
<br>
<p>On Mon, May 9, 2016 at 1:22 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
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
Computer Science Department               Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18941.php">http://www.open-mpi.org/community/lists/devel/2016/05/18941.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18942.php">http://www.open-mpi.org/community/lists/devel/2016/05/18942.php</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Previous message:</strong> <a href="18945.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18945.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>Reply:</strong> <a href="18947.php">Paul Hargrove: "Re: [OMPI devel] Master broken for ILP32"</a>
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
