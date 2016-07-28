<?
$subject_val = "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 05:56:22 2015" -->
<!-- isoreceived="20150826095622" -->
<!-- sent="Wed, 26 Aug 2015 02:56:08 -0700" -->
<!-- isosent="20150826095608" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]" -->
<!-- id="CAAvDA15+D+bQUKFEp0cEB5SO7P7M0d88nOR4CGXR31X8c1AY9g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16QmfFm3nG2kUKbJny9_srAnd+8fONM3xcPhQWZiCLemQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 05:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Previous message:</strong> <a href="17863.php">Paul Hargrove: "[OMPI devel] ppc atomics on master"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17585.php">Paul Hargrove: "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue describe below on July 1 is still present on master as of last
<br>
night's tarball.
<br>
<p>-Paul
<br>
<p>On Wed, Jul 1, 2015 at 8:51 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Back in February I reported (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17073.php">http://www.open-mpi.org/community/lists/devel/2015/02/17073.php</a>) that
</span><br>
<span class="quotelev1">&gt; when building master on Linux with the Solaris Studio compilers and -m32 I
</span><br>
<span class="quotelev1">&gt; saw the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC --mode=link cc -m32 -g -mt
</span><br>
<span class="quotelev1">&gt;  -export-dynamic -o opal_wrapper opal_wrapper.o ../../../opal/
</span><br>
<span class="quotelev1">&gt; libopen-pal.la -lrt -lm -lutil -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -m32 -g -mt -o .libs/opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm
</span><br>
<span class="quotelev1">&gt; -lutil -mt -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u4-m32/INST/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `ebx'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where obviously 'ebx' should be a register, not a symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nobody got back to me on that, but I figured it out this morning.
</span><br>
<span class="quotelev1">&gt; The 2-line patch below fixed this issue for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the gcc asm syntax for multiple assembler dialects (search
</span><br>
<span class="quotelev1">&gt; for &quot;dialects&quot; in <a href="https://gcc.gnu.org/onlinedocs/gcc/Extended-Asm.html">https://gcc.gnu.org/onlinedocs/gcc/Extended-Asm.html</a>)
</span><br>
<span class="quotelev1">&gt; is not supported by the Studio compilers.
</span><br>
<span class="quotelev1">&gt; Since there doesn't appear to be any real effort to support Intel asm
</span><br>
<span class="quotelev1">&gt; syntax (vs the ATT syntax used by gas) elsewhere in Open MPI, it is kind of
</span><br>
<span class="quotelev1">&gt; pointless to do it just in this one header.
</span><br>
<span class="quotelev1">&gt; So, I believe that the &quot;{l}&quot; on the changed lines can/should also be
</span><br>
<span class="quotelev1">&gt; changed to bare &quot;l&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a related note:
</span><br>
<span class="quotelev1">&gt; As of gcc-5.1 (released in April), ebx is now scheduled as an other
</span><br>
<span class="quotelev1">&gt; register and not reserved to be the GOT pointer.
</span><br>
<span class="quotelev1">&gt; So, the
</span><br>
<span class="quotelev1">&gt;     xchgl %%ebx, %1
</span><br>
<span class="quotelev1">&gt; could (I think) now become
</span><br>
<span class="quotelev1">&gt;     xchgl  %%ebx,%%ebx
</span><br>
<span class="quotelev1">&gt; which is not going to have the desired effect of preserving %ebx across
</span><br>
<span class="quotelev1">&gt; the cpuid instruction.
</span><br>
<span class="quotelev1">&gt; However the problem only occurs if &quot;b&quot; is a member of the &quot;r&quot; class, which
</span><br>
<span class="quotelev1">&gt; I have not verified.
</span><br>
<span class="quotelev1">&gt; *IF* the problem can occur, then one fix would be to change &quot;=r&quot; to
</span><br>
<span class="quotelev1">&gt; something like &quot;=SD&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal/sys/ia32/timer.h.orig     2015-07-01
</span><br>
<span class="quotelev1">&gt; 08:12:59.357980816 -0700
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal/sys/ia32/timer.h  2015-07-01 07:59:36.452918286 -0700
</span><br>
<span class="quotelev1">&gt; @@ -35,9 +35,9 @@
</span><br>
<span class="quotelev1">&gt;      int tmp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      __asm__ __volatile__(
</span><br>
<span class="quotelev1">&gt; -                         &quot;xchg{l} {%%}ebx, %1\n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;xchg{l} %%ebx, %1\n&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot;cpuid\n&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;xchg{l} {%%}ebx, %1\n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;xchg{l} %%ebx, %1\n&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot;rdtsc\n&quot;
</span><br>
<span class="quotelev1">&gt;                           : &quot;=A&quot;(ret), &quot;=r&quot;(tmp)
</span><br>
<span class="quotelev1">&gt;                           :: &quot;ecx&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Previous message:</strong> <a href="17863.php">Paul Hargrove: "[OMPI devel] ppc atomics on master"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17585.php">Paul Hargrove: "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
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
