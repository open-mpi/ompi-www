<?
$subject_val = "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 19:27:06 2010" -->
<!-- isoreceived="20101014232706" -->
<!-- sent="Fri, 15 Oct 2010 01:26:52 +0200" -->
<!-- isosent="20101014232652" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)" -->
<!-- id="AANLkTik0meTadFAQe-Lqu_J5hsV9_Ui-NU-MDv2R_Vr=_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C4364A5F-8DE0-41E4-AB02-F3D1A5AB3B4B_at_cisco.com" -->
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
<strong>Date:</strong> 2010-10-14 19:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 15, 2010 at 00:38, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Huh. Can you make V=1 to build libmpi and use the same kind of options to
</span><br>
<span class="quotelev1">&gt; build your sample library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Make log here
<br>
<p><a href="http://59A2.org/files/openmpi-1.5-clang-make.log">http://59A2.org/files/openmpi-1.5-clang-make.log</a>
<br>
<p>After some digging, this looks like a clang bug.  First, from the comments
<br>
on
<br>
<p><a href="http://llvm.org/bugs/show_bug.cgi?id=3679">http://llvm.org/bugs/show_bug.cgi?id=3679</a>
<br>
<p>there seems to be some resistance to the #pragma weak g2 = g3, but since
<br>
these things work with clang-2.8, that isn't the whole story.  Indeed,
<br>
<p>#pragma GCC visibility push(default)
<br>
#pragma weak fake = real
<br>
#pragma GCC visibility pop
<br>
<p>does not expose the symbol &quot;fake&quot;.  This must be a bug, but an arguably
<br>
better way to set up the aliasing is
<br>
<p>int fake(int i) __attribute__((weak, alias(&quot;real&quot;)));
<br>
<p>which does work.  I'll report the bug, but maybe Open MPI could use a more
<br>
complete test for visibility working with weak aliasing?  Or just don't
<br>
support clang-2.8.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14474/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Reply:</strong> <a href="14475.php">Jed Brown: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
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
