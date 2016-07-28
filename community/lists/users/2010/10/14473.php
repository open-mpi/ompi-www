<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 18:38:26 2010" -->
<!-- isoreceived="20101014223826" -->
<!-- sent="Thu, 14 Oct 2010 18:38:33 -0400" -->
<!-- isosent="20101014223833" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="C4364A5F-8DE0-41E4-AB02-F3D1A5AB3B4B_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTi=QRnb0_4hJiYZW3tF2gEOPZ8=wo+tF=mPfuJO4_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 18:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14474.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14474.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14474.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh. Can you make V=1 to build libmpi and use the same kind of options to build your sample library?
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Oct 14, 2010, at 6:01 PM, &quot;Jed Brown&quot; &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Oct 14, 2010 at 23:53, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The configure test essentially looks like this -- could you try this manually and see what happens?
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
<span class="quotelev1">&gt; The configure test rules that weak symbol support is there if both compiler invocations return an exit status of 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They exit 0 and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm conftest |g 'real|fake'
</span><br>
<span class="quotelev1">&gt; 00000000004004a0 W fake
</span><br>
<span class="quotelev1">&gt; 00000000004004a0 T real
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so it looks like that is working fine.  It also works fine when I stuff it into a shared library:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ clang -c -fPIC conftest_weak.c
</span><br>
<span class="quotelev1">&gt; $ clang -shared -fPIC conftest.c conftest_weak.o -o conftest.so
</span><br>
<span class="quotelev1">&gt; $ nm conftest.so |g 'real|fake'
</span><br>
<span class="quotelev1">&gt; 00000000000005a0 W fake
</span><br>
<span class="quotelev1">&gt; 00000000000005a0 T real
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14474.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14474.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14474.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
