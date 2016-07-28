<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 21:37:38 2015" -->
<!-- isoreceived="20150225023738" -->
<!-- sent="Tue, 24 Feb 2015 18:37:35 -0800" -->
<!-- isosent="20150225023735" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA159KURcFyf+sct3f00ZKqspMRenobEUu_aDrgsgeXMgxQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17FE_Q+ivbfBTYwjVc11kxvGy-K3A19L7v7ORiKF9Lmog_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-24 21:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17032.php">Joshua Ladd: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17033.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &quot;smoke testing&quot; has completed.
<br>
<p>While {Free,Net,Open}BSD were a mess, the following worked fine with Jeff's
<br>
tarball:
<br>
&nbsp;&nbsp;&nbsp;Mac OS X 10.6, 10.7 and 10.8 on x86-64 (LP64 and ILP32 ABIs)
<br>
&nbsp;&nbsp;&nbsp;Solaris-10 on SPARC (v8+ and v9 ABIs)
<br>
&nbsp;&nbsp;&nbsp;Solaris-11 on X86-64 (LP64 and ILP32 ABIs)
<br>
&nbsp;&nbsp;&nbsp;The *BSD platforms when configured with &quot;--enable-static
<br>
--disable-shared&quot;
<br>
&nbsp;&nbsp;&nbsp;All my x86, x86-64, ppc and ppc64 Linux platforms
<br>
<p>I did not test Linux on IA64, MIPS or ARM
<br>
<p>-Paul
<br>
<p>On Tue, Feb 24, 2015 at 2:44 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 24, 2015 at 1:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Smoke testing will begin momentarily...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am choking on all the smoke.
</span><br>
<span class="quotelev1">&gt; Somebody call the fire marshall!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like with Jeff's tarball all the BSDs are failing in the same way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most recent master tarball (openmpi-dev-1063-g6c3ddf9.tar.bz2) does
</span><br>
<span class="quotelev1">&gt; NOT fail.
</span><br>
<span class="quotelev1">&gt; Also, BSDs configured with &quot;--enable-static --disable-shared&quot; do NOT fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a closer look at the FreeBSD-9/amd64 system (the only non-VM among
</span><br>
<span class="quotelev1">&gt; my BSDs).
</span><br>
<span class="quotelev1">&gt; The following caught my attention:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework dl
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework dl...
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework dl... libltdl, dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component dl:dlopen (m4 configuration macro, priority 80)
</span><br>
<span class="quotelev1">&gt; checking for MCA component dl:dlopen compile mode... static
</span><br>
<span class="quotelev1">&gt; checking dlfcn.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking dlfcn.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for dlfcn.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for dlopen in -ldl... no
</span><br>
<span class="quotelev1">&gt; checking if MCA component dl:dlopen can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component dl:libltdl (m4 configuration macro, priority 50)
</span><br>
<span class="quotelev1">&gt; checking for MCA component dl:libltdl compile mode... static
</span><br>
<span class="quotelev1">&gt; checking --with-libltdl value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking --with-libltdl-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking for libltdl dir... compiler default
</span><br>
<span class="quotelev1">&gt; checking for libltdl library dir... linker default
</span><br>
<span class="quotelev1">&gt; checking ltdl.h usability... no
</span><br>
<span class="quotelev1">&gt; checking ltdl.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for ltdl.h... no
</span><br>
<span class="quotelev1">&gt; checking if MCA component dl:libltdl can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I read that right there is NO dl component available!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FIRST:
</span><br>
<span class="quotelev1">&gt; I believe that *something* should have occurred when no dl component could
</span><br>
<span class="quotelev1">&gt; be built.
</span><br>
<span class="quotelev1">&gt; Either the build should have been aborted or it could/should have switched
</span><br>
<span class="quotelev1">&gt; to building everything static.
</span><br>
<span class="quotelev1">&gt; However, the failure at runtime should not have been the eventual outcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SECOND:
</span><br>
<span class="quotelev1">&gt; On {Free,Net,Open}BSD dlopen() appears in libc, not in libdl.
</span><br>
<span class="quotelev1">&gt; So, I suspect one *should* be able to compile dl:dlopen on all these
</span><br>
<span class="quotelev1">&gt; systems with the proper configure tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will gladly send any logs and/or output that will help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17032.php">Joshua Ladd: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17033.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
