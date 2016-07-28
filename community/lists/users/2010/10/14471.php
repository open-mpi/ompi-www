<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 17:53:23 2010" -->
<!-- isoreceived="20101014215323" -->
<!-- sent="Thu, 14 Oct 2010 17:53:11 -0400" -->
<!-- isosent="20101014215311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="1261AC99-72FD-430B-B729-BF3E1F371688_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinumk+M0UnrwdTKj_RjAFtJW5ckbt0owW4odARY_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 17:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2010, at 5:38 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; $ nm -D /home/jed/src/openmpi-1.5/bclang/ompi/contrib/vt/vt/../../../.libs/libmpi.so |grep MPI_Abort
</span><br>
<span class="quotelev1">&gt; 0000000000074380 T PMPI_Abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In contrast, with gcc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm -D /home/jed/src/openmpi-1.5/bgcc/ompi/contrib/vt/vt/../../../.libs/libmpi.so |grep MPI_Abort
</span><br>
<span class="quotelev1">&gt; 00000000000712d0 W MPI_Abort
</span><br>
<span class="quotelev1">&gt; 00000000000712d0 T PMPI_Abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weak symbol issue, I don't know how clang is different in this regard.
</span><br>
<p>Ah ha -- maybe this is the root problem and the VT guys are not to blame.  :-)
<br>
<p>config.log determined that weak symbol support was there, but I wonder if that was somehow a lie...?
<br>
<p>configure:14417: checking for weak symbol support
<br>
configure:14448: clang -O3 -DNDEBUG  -Werror -ansi  -c conftest_weak.c
<br>
configure:14455: $? = 0
<br>
configure:14465: clang -O3 -DNDEBUG  -Werror -ansi  conftest.c conftest_weak.o -o conftest 
<br>
configure:14472: $? = 0
<br>
configure:14498: result: yes
<br>
<p>The configure test essentially looks like this -- could you try this manually and see what happens?
<br>
<p>cat &gt; conftest_weak.h &lt;&lt;EOF
<br>
int real(int i);
<br>
int fake(int i);
<br>
EOF
<br>
<p>cat &gt; conftest_weak.c &lt;&lt;EOF
<br>
#include &quot;conftest_weak.h&quot;
<br>
#pragma weak fake = real
<br>
int real(int i) { return i; }
<br>
EOF
<br>
<p>cat &gt; conftest.c &lt;&lt;EOF
<br>
#include &quot;conftest_weak.h&quot;
<br>
int main() { return fake(3); }
<br>
EOF
<br>
<p># Try the compile
<br>
clang $CFLAGS  -c conftest_weak.c
<br>
clang $CFLAGS  conftest.c conftest_weak.o -o conftest $LDFLAGS $LIBS
<br>
<p>The configure test rules that weak symbol support is there if both compiler invocations return an exit status of 0.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14470.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14472.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
