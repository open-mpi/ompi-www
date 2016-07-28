<?
$subject_val = "[OMPI devel] powerpc64le support [1-line patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:19:22 2015" -->
<!-- isoreceived="20150422211922" -->
<!-- sent="Wed, 22 Apr 2015 14:19:07 -0700" -->
<!-- isosent="20150422211907" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] powerpc64le support [1-line patch]" -->
<!-- id="CAAvDA17iCS6MuQmZggkKXvaZKqaWiYNSC3khcE_onAeq=wk21g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] powerpc64le support [1-line patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17364.php">Troy Benjegerdes: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had an opportunity to try the 1.8.5rc2 tarball on a little-endian POWER8
<br>
(aka ppc64el or powerpc64le).
<br>
The good news is that things &quot;just worked&quot; as they did when I tried ARMv8
<br>
(aka aarch64).
<br>
<p>However, I see a little room for improvement with almost no work at all.
<br>
<p>I noticed:
<br>
<p>checking for __sync builtin atomics... yes
<br>
checking for assembly architecture... UNSUPPORTED
<br>
checking for builtin atomics... BUILTIN_SYNC
<br>
checking for atomic assembly filename... none
<br>
<p>and I confirmed the same behavior on master.
<br>
<p>The existing powerpc64 inline asm should work.
<br>
So, I made a one-line change (at bottom of this email) to recognize the
<br>
architecture and now get &quot;native&quot; atomics.
<br>
<p>checking if PowerPC registers have r prefix... no
<br>
checking if powerpc64le-linux-gnu-gcc-4.9 -std=gnu99 supports GCC inline
<br>
assembly... yes
<br>
checking if powerpc64le-linux-gnu-gcc-4.9 -std=gnu99 supports DEC inline
<br>
assembly... no
<br>
checking if powerpc64le-linux-gnu-gcc-4.9 -std=gnu99 supports XLC inline
<br>
assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-1-0-1-1
<br>
checking for assembly architecture... POWERPC64
<br>
checking for builtin atomics... BUILTIN_NO
<br>
checking for perl... (cached) perl
<br>
checking for pre-built assembly file... no (not in asm-data)
<br>
checking whether possible to generate assembly file... yes
<br>
checking for atomic assembly filename... atomic-local.s
<br>
<p><p>and
<br>
<p>phargrov_at_ppc64el:~/OMPI/ompi-master/BLD$ make -C test/asm check
<br>
[...]
<br>
============================================================================
<br>
Testsuite summary for Open MPI gitclone
<br>
============================================================================
<br>
# TOTAL: 8
<br>
# PASS:  8
<br>
# SKIP:  0
<br>
# XFAIL: 0
<br>
# FAIL:  0
<br>
# XPASS: 0
<br>
# ERROR: 0
<br>
============================================================================
<br>
<p><p><p>In addition to the one-line patch below, I needed to run autogen.pl with a
<br>
new enough config/config.{guess,sub}.
<br>
Along the way I noticed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/common/libfabric/libfabric/config/config.guess
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/common/libfabric/libfabric/config/config.sub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/hwloc/hwloc191/hwloc/config/config.guess
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/hwloc/hwloc191/hwloc/config/config.sub
<br>
which appear to be too old to recognize powerpc64le and are *not* updated
<br>
when autogen.pl is run.
<br>
I manually updated them, but somebody may want to either commit newer
<br>
versions to git or teach autogen.pl to update them.
<br>
FWIW, it appears that tarballs *are* generated with up-to-date versions.
<br>
Go figure.
<br>
<p><p>-Paul
<br>
<p>diff --git a/config/opal_config_asm.m4 b/config/opal_config_asm.m4
<br>
index 7ceadfc..c5f72c5 100644
<br>
--- a/config/opal_config_asm.m4
<br>
+++ b/config/opal_config_asm.m4
<br>
@@ -988,7 +988,7 @@ AC_DEFUN([OPAL_CONFIG_ASM],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_GCC_INLINE_ASSIGN='&quot;or %0,[$]0,[$]0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<p>-        powerpc-*|powerpc64-*|rs6000-*|ppc-*)
<br>
+        powerpc-*|powerpc64-*|powerpc64le-*|rs6000-*|ppc-*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CHECK_POWERPC_REG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ac_cv_sizeof_long&quot; = &quot;4&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_cv_asm_arch=&quot;POWERPC32&quot;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17364.php">Troy Benjegerdes: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
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
