<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 18:01:41 2010" -->
<!-- isoreceived="20101014220141" -->
<!-- sent="Fri, 15 Oct 2010 00:01:32 +0200" -->
<!-- isosent="20101014220132" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="AANLkTi=QRnb0_4hJiYZW3tF2gEOPZ8=wo+tF=mPfuJO4_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1261AC99-72FD-430B-B729-BF3E1F371688_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 18:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 14, 2010 at 23:53, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The configure test essentially looks like this -- could you try this
</span><br>
<span class="quotelev1">&gt; manually and see what happens?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat &gt; conftest_weak.h &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; int real(int i);
</span><br>
<span class="quotelev1">&gt; int fake(int i);
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat &gt; conftest_weak.c &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; #include &quot;conftest_weak.h&quot;
</span><br>
<span class="quotelev1">&gt; #pragma weak fake = real
</span><br>
<span class="quotelev1">&gt; int real(int i) { return i; }
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat &gt; conftest.c &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; #include &quot;conftest_weak.h&quot;
</span><br>
<span class="quotelev1">&gt; int main() { return fake(3); }
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Try the compile
</span><br>
<span class="quotelev1">&gt; clang $CFLAGS  -c conftest_weak.c
</span><br>
<span class="quotelev1">&gt; clang $CFLAGS  conftest.c conftest_weak.o -o conftest $LDFLAGS $LIBS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure test rules that weak symbol support is there if both compiler
</span><br>
<span class="quotelev1">&gt; invocations return an exit status of 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>They exit 0 and
<br>
<p>$ nm conftest |g 'real|fake'
<br>
00000000004004a0 W fake
<br>
00000000004004a0 T real
<br>
<p>so it looks like that is working fine.  It also works fine when I stuff it
<br>
into a shared library:
<br>
<p>$ clang -c -fPIC conftest_weak.c
<br>
$ clang -shared -fPIC conftest.c conftest_weak.o -o conftest.so
<br>
$ nm conftest.so |g 'real|fake'
<br>
00000000000005a0 W fake
<br>
00000000000005a0 T real
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14471.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
