<?
$subject_val = "Re: [OMPI devel] Master broken for ILP32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 14:02:00 2016" -->
<!-- isoreceived="20160509180200" -->
<!-- sent="Mon, 9 May 2016 11:01:52 -0700" -->
<!-- isosent="20160509180152" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master broken for ILP32" -->
<!-- id="CAAvDA166ZqJ6Upx9pxuus7DHOWV6gtr6-XZwRQv+yfLEU3sCsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7155FFBF807_at_ECS-EXG-P-MB01.win.lanl.gov" -->
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
<strong>Date:</strong> 2016-05-09 14:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18948.php">Josh Hursey: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would say the switch to __sync atomics by default is surprising to me.
<br>
I am *not* campaigning to reverse the result of the RFC (of which I mist
<br>
have missed the details and outcome).
<br>
However, I have a couple observations:
<br>
<p>1) The loss of aqc/rel distinctions is probably minor on x86/x86-64 but
<br>
might be significant on other platforms
<br>
<p>2) For the case of x86 the &quot;old&quot; inline assembly
<br>
provided opal_atomic_cmpset_64, and implemented 64-bit add, sub and swap in
<br>
terms of it.
<br>
However, gcc is NOT providing a __sync_bool_compare_and_swap_8(), or at
<br>
least not where I tested (gcc 4.8.4 and 4.2.1, for instance).
<br>
You could call that a gcc bug if you wish.
<br>
<p>-Paul
<br>
<p>On Mon, May 9, 2016 at 10:43 AM, Hjelm, Nathan Thomas &lt;hjelmn_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; We have chosen to use the __sync builtins by default on master. There was
</span><br>
<span class="quotelev1">&gt; an rfc on it awhile ago. Is there a good reason to go back to the inline by
</span><br>
<span class="quotelev1">&gt; default or is this just surprising?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel on behalf of Paul Hargrove
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 09, 2016 11:12:16 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Master broken for ILP32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding &quot;distro&quot;:
</span><br>
<span class="quotelev1">&gt; This was happening, for instance, on OpenBSD and NetBSD (32-bit kernels on
</span><br>
<span class="quotelev1">&gt; 64-bit h/w) when testing your PR1643.
</span><br>
<span class="quotelev1">&gt; However, it sounds like Nathan knows how/where to fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HOWEVER, that is not the only issue here.
</span><br>
<span class="quotelev1">&gt; Why is master is picking the BUILTIN (__sync) atomics (as shown in the
</span><br>
<span class="quotelev1">&gt; configure output quoted below), while v2.x (same system and same config
</span><br>
<span class="quotelev1">&gt; args) uses a .s file:
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
<span class="quotelev1">&gt; checking if gcc -std=gnu99 supports GCC inline assembly... yes
</span><br>
<span class="quotelev1">&gt; checking if gcc -std=gnu99 supports DEC inline assembly... no
</span><br>
<span class="quotelev1">&gt; checking if gcc -std=gnu99 supports XLC inline assembly... no
</span><br>
<span class="quotelev1">&gt; checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1-0
</span><br>
<span class="quotelev1">&gt; checking for assembly architecture... IA32
</span><br>
<span class="quotelev1">&gt; checking for builtin atomics... BUILTIN_NO
</span><br>
<span class="quotelev1">&gt; checking for perl... perl
</span><br>
<span class="quotelev1">&gt; checking for pre-built assembly file... yes (atomic-ia32-linux-nongas.s)
</span><br>
<span class="quotelev1">&gt; checking for atomic assembly filename... atomic-ia32-linux-nongas.s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 9, 2016 at 1:22 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul,
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
<span class="quotelev1">&gt; Paul H. Hargrove                          &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;tel:%2B1-510-486-6900&gt;
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
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18941.php">http://www.open-mpi.org/community/lists/devel/2016/05/18941.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18942.php">http://www.open-mpi.org/community/lists/devel/2016/05/18942.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18946.php">http://www.open-mpi.org/community/lists/devel/2016/05/18946.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18947/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18948.php">Josh Hursey: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
<li><strong>In reply to:</strong> <a href="18946.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Master broken for ILP32"</a>
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
