<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 17:44:29 2015" -->
<!-- isoreceived="20150224224429" -->
<!-- sent="Tue, 24 Feb 2015 14:44:26 -0800" -->
<!-- isosent="20150224224426" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA17FE_Q+ivbfBTYwjVc11kxvGy-K3A19L7v7ORiKF9Lmog_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17WJTsLYLf8fwrntsA64cGhRpJx4iBrrmkBYGRTH5iLiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: DL / DSO functionality<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 17:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17031.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="17027.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17031.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17031.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17033.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 24, 2015 at 1:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
[...]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Smoke testing will begin momentarily...
</span><br>
<span class="quotelev1">&gt;
</span><br>
[...]
<br>
<p>I am choking on all the smoke.
<br>
Somebody call the fire marshall!
<br>
<p>It looks like with Jeff's tarball all the BSDs are failing in the same way:
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p><p>The most recent master tarball (openmpi-dev-1063-g6c3ddf9.tar.bz2) does NOT
<br>
fail.
<br>
Also, BSDs configured with &quot;--enable-static --disable-shared&quot; do NOT fail.
<br>
<p>I took a closer look at the FreeBSD-9/amd64 system (the only non-VM among
<br>
my BSDs).
<br>
The following caught my attention:
<br>
<p>+++ Configuring MCA framework dl
<br>
checking for no configure components in framework dl...
<br>
checking for m4 configure components in framework dl... libltdl, dlopen
<br>
<p>--- MCA component dl:dlopen (m4 configuration macro, priority 80)
<br>
checking for MCA component dl:dlopen compile mode... static
<br>
checking dlfcn.h usability... yes
<br>
checking dlfcn.h presence... yes
<br>
checking for dlfcn.h... yes
<br>
looking for library without search path
<br>
checking for dlopen in -ldl... no
<br>
checking if MCA component dl:dlopen can compile... no
<br>
<p>--- MCA component dl:libltdl (m4 configuration macro, priority 50)
<br>
checking for MCA component dl:libltdl compile mode... static
<br>
checking --with-libltdl value... simple ok (unspecified)
<br>
checking --with-libltdl-libdir value... simple ok (unspecified)
<br>
checking for libltdl dir... compiler default
<br>
checking for libltdl library dir... linker default
<br>
checking ltdl.h usability... no
<br>
checking ltdl.h presence... no
<br>
checking for ltdl.h... no
<br>
checking if MCA component dl:libltdl can compile... no
<br>
<p><p>If I read that right there is NO dl component available!
<br>
<p>FIRST:
<br>
I believe that *something* should have occurred when no dl component could
<br>
be built.
<br>
Either the build should have been aborted or it could/should have switched
<br>
to building everything static.
<br>
However, the failure at runtime should not have been the eventual outcome.
<br>
<p>SECOND:
<br>
On {Free,Net,Open}BSD dlopen() appears in libc, not in libdl.
<br>
So, I suspect one *should* be able to compile dl:dlopen on all these
<br>
systems with the proper configure tests.
<br>
<p>I will gladly send any logs and/or output that will help.
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17031.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="17027.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17031.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17031.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17033.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
