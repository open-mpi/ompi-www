<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 13:29:41 2015" -->
<!-- isoreceived="20150820172941" -->
<!-- sent="Thu, 20 Aug 2015 17:29:38 +0000" -->
<!-- isosent="20150820172938" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc" -->
<!-- id="C328FA8F-AB62-424B-836A-8E199E4043D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150820161834.GA40939_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 13:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17767.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>In reply to:</strong> <a href="17767.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17772.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>Reply:</strong> <a href="17772.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(the fix has been merged in to v1.8 and v1.10 branches)
<br>
<p><span class="quotelev1">&gt; On Aug 20, 2015, at 12:18 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see the problem. Both Ralph and I missed an error in the
</span><br>
<span class="quotelev1">&gt; cherry-pick. For add_32 in the ia32 atomics we were checking for
</span><br>
<span class="quotelev1">&gt; OPAL_GCC_INLINE_ASSEMBLY instead of OMPI_GCC_INLINE_ASSEMBLY.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 20, 2015 at 03:01:35PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see that there was an ASM change in 1.8.8.  At first look, it seems harmless / shouldn't have caused this kind of problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nathan is checking into it...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 14, 2015, at 9:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a systems running Solaris 11.1 on x86-64 hardware and 11.2 in an x86-64 VM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To the extent I have tested the results are the same on both, despite gcc-4.5.2 vs 4.8.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have normally tested only the Sun/Oracle Studio compilers on these systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, today I gave the vendor-provided gcc, g++ and gfortran in /usr/bin a try.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I configured the OpenMPI 1.10.0rc3 tarball with NO arguments to configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When doing so I see tons of warnings like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.10.0rc3/opal/include/opal/sys/atomic.h:393:9: warning: `opal_atomic_add_32' used but never defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.10.0rc3/opal/include/opal/sys/atomic.h:401:9: warning: `opal_atomic_sub_32' used but never defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and an eventual link failure to match:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CCLD     libopen-pal.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text relocation remains                         referenced
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    against symbol                  offset      in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_atomic_add_32                  0x1e4       runtime/.libs/opal_progress.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_atomic_sub_32                  0x234       runtime/.libs/opal_progress.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: fatal: relocations remain against allocatable but non-writable sections
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the possibly-relevant portion of the configure output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if gcc -std=gnu99 supports GCC inline assembly... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if gcc -std=gnu99 supports DEC inline assembly... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if gcc -std=gnu99 supports XLC inline assembly... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for assembly architecture... IA32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for builtin atomics... BUILTIN_NO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for perl... perl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for pre-built assembly file... yes (atomic-ia32-linux-nongas.s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for atomic assembly filename... atomic-ia32-linux-nongas.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same problem is present in Open MPI 1.8.8, but 1.8.7 builds just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that on Solaris the default ABI is ILP32 (e.g. default to -m32 rather than -m64).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are no problems with LP64 builds (&quot;-m64&quot; in *FLAGS and the wrapper flags).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are also no problems with either ILP32 or LP64 and the Studio compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only gcc with (default) 32-bit target experiences this failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17750.php">http://www.open-mpi.org/community/lists/devel/2015/08/17750.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17766.php">http://www.open-mpi.org/community/lists/devel/2015/08/17766.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17767.php">http://www.open-mpi.org/community/lists/devel/2015/08/17767.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17767.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>In reply to:</strong> <a href="17767.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17772.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>Reply:</strong> <a href="17772.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
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
