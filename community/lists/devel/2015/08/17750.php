<?
$subject_val = "[OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 21:52:48 2015" -->
<!-- isoreceived="20150815015248" -->
<!-- sent="Fri, 14 Aug 2015 18:52:43 -0700" -->
<!-- isosent="20150815015243" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc" -->
<!-- id="CAAvDA15EtLA0nZm+LNV5tfsG7QrWFSWKJ+06J5M+Wr-KgDGYSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 21:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17751.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17749.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc3 ready to be checked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>Reply:</strong> <a href="17766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a systems running Solaris 11.1 on x86-64 hardware and 11.2 in an
<br>
x86-64 VM.
<br>
To the extent I have tested the results are the same on both, despite
<br>
gcc-4.5.2 vs 4.8.2
<br>
<p>I have normally tested only the Sun/Oracle Studio compilers on these
<br>
systems.
<br>
However, today I gave the vendor-provided gcc, g++ and gfortran in /usr/bin
<br>
a try.
<br>
So I configured the OpenMPI 1.10.0rc3 tarball with NO arguments to
<br>
configure.
<br>
<p>When doing so I see tons of warnings like:
<br>
<p>../../../../openmpi-1.10.0rc3/opal/include/opal/sys/atomic.h:393:9:
<br>
warning: `opal_atomic_add_32' used but never defined
<br>
../../../../openmpi-1.10.0rc3/opal/include/opal/sys/atomic.h:401:9:
<br>
warning: `opal_atomic_sub_32' used but never defined
<br>
<p>and an eventual link failure to match:
<br>
<p>&nbsp;&nbsp;CCLD     libopen-pal.la
<br>
Text relocation remains                         referenced
<br>
&nbsp;&nbsp;&nbsp;&nbsp;against symbol                  offset      in file
<br>
opal_atomic_add_32                  0x1e4
<br>
runtime/.libs/opal_progress.o
<br>
opal_atomic_sub_32                  0x234
<br>
runtime/.libs/opal_progress.o
<br>
ld: fatal: relocations remain against allocatable but non-writable sections
<br>
collect2: ld returned 1 exit status
<br>
<p><p><p>Here is the possibly-relevant portion of the configure output:
<br>
<p>checking if gcc -std=gnu99 supports GCC inline assembly... yes
<br>
checking if gcc -std=gnu99 supports DEC inline assembly... no
<br>
checking if gcc -std=gnu99 supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1-0
<br>
checking for assembly architecture... IA32
<br>
checking for builtin atomics... BUILTIN_NO
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... yes (atomic-ia32-linux-nongas.s)
<br>
checking for atomic assembly filename... atomic-ia32-linux-nongas.s
<br>
<p><p>The same problem is present in Open MPI 1.8.8, but 1.8.7 builds just fine.
<br>
<p>Note that on Solaris the default ABI is ILP32 (e.g. default to -m32 rather
<br>
than -m64).
<br>
There are no problems with LP64 builds (&quot;-m64&quot; in *FLAGS and the wrapper
<br>
flags).
<br>
There are also no problems with either ILP32 or LP64 and the Studio
<br>
compilers.
<br>
Only gcc with (default) 32-bit target experiences this failure.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17751.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17749.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc3 ready to be checked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>Reply:</strong> <a href="17766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
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
