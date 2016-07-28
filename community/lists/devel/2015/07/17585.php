<?
$subject_val = "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 11:51:38 2015" -->
<!-- isoreceived="20150701155138" -->
<!-- sent="Wed, 1 Jul 2015 08:51:33 -0700" -->
<!-- isosent="20150701155133" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]" -->
<!-- id="CAAvDA16QmfFm3nG2kUKbJny9_srAnd+8fONM3xcPhQWZiCLemQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 11:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17586.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="17584.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Back in February I reported (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/02/17073.php">http://www.open-mpi.org/community/lists/devel/2015/02/17073.php</a>) that when
<br>
building master on Linux with the Solaris Studio compilers and -m32 I saw
<br>
the following:
<br>
<p>/bin/sh ../../../libtool --tag=CC --mode=link cc -m32 -g -mt
<br>
&nbsp;-export-dynamic -o opal_wrapper opal_wrapper.o ../../../opal/
<br>
libopen-pal.la -lrt -lm -lutil -lrt -lm -lutil
<br>
libtool: link: cc -m32 -g -mt -o .libs/opal_wrapper opal_wrapper.o
<br>
-Wl,--export-dynamic ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm
<br>
-lutil -mt -Wl,-rpath
<br>
-Wl,/scratch/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u4-m32/INST/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `ebx'
<br>
<p>Where obviously 'ebx' should be a register, not a symbol.
<br>
<p>Nobody got back to me on that, but I figured it out this morning.
<br>
The 2-line patch below fixed this issue for me.
<br>
<p>It looks like the gcc asm syntax for multiple assembler dialects (search
<br>
for &quot;dialects&quot; in <a href="https://gcc.gnu.org/onlinedocs/gcc/Extended-Asm.html">https://gcc.gnu.org/onlinedocs/gcc/Extended-Asm.html</a>) is
<br>
not supported by the Studio compilers.
<br>
Since there doesn't appear to be any real effort to support Intel asm
<br>
syntax (vs the ATT syntax used by gas) elsewhere in Open MPI, it is kind of
<br>
pointless to do it just in this one header.
<br>
So, I believe that the &quot;{l}&quot; on the changed lines can/should also be
<br>
changed to bare &quot;l&quot;.
<br>
<p><p>On a related note:
<br>
As of gcc-5.1 (released in April), ebx is now scheduled as an other
<br>
register and not reserved to be the GOT pointer.
<br>
So, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xchgl %%ebx, %1
<br>
could (I think) now become
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xchgl  %%ebx,%%ebx
<br>
which is not going to have the desired effect of preserving %ebx across the
<br>
cpuid instruction.
<br>
However the problem only occurs if &quot;b&quot; is a member of the &quot;r&quot; class, which
<br>
I have not verified.
<br>
*IF* the problem can occur, then one fix would be to change &quot;=r&quot; to
<br>
something like &quot;=SD&quot;.
<br>
<p>-Paul
<br>
<p><p>--- opal/include/opal/sys/ia32/timer.h.orig     2015-07-01
<br>
08:12:59.357980816 -0700
<br>
+++ opal/include/opal/sys/ia32/timer.h  2015-07-01 07:59:36.452918286 -0700
<br>
@@ -35,9 +35,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tmp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__(
<br>
-                         &quot;xchg{l} {%%}ebx, %1\n&quot;
<br>
+                         &quot;xchg{l} %%ebx, %1\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;cpuid\n&quot;
<br>
-                         &quot;xchg{l} {%%}ebx, %1\n&quot;
<br>
+                         &quot;xchg{l} %%ebx, %1\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;rdtsc\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=A&quot;(ret), &quot;=r&quot;(tmp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: &quot;ecx&quot;);
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17585/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17586.php">Paul Hargrove: "Re: [OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="17584.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
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
