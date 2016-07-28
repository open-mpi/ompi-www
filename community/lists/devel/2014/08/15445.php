<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 06:22:34 2014" -->
<!-- isoreceived="20140801102234" -->
<!-- sent="Fri, 1 Aug 2014 10:22:27 +0000" -->
<!-- isosent="20140801102227" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="20140801192227.415367b4a353fcf7c628bb38_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="CAMJJpkUi96vuhUz215COptTd17h9iOitRU0wsnC19S3JMp5=Xg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 06:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15446.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15444.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>In reply to:</strong> <a href="15434.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15462.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I compiled trunk with your patch for SPARCV9/Linux/GCC.
<br>
I see following warning/errors.
<br>
<p>----------------------------------------------------------------
<br>
In file included from opal/include/opal/sys/atomic.h:175,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from opal/asm/asm.c:21:
<br>
opal/include/opal/sys/sparcv9/atomic.h:213:1: warning: &quot;OPAL_HAVE_ATOMIC_SWAP_64&quot; redefined
<br>
opal/include/opal/sys/sparcv9/atomic.h:47:1: warning: this is the location of the previous definition
<br>
<p>In file included from opal/asm/asm.c:21:
<br>
opal/include/opal/sys/atomic.h:369: error: conflicting types for 'opal_atomic_cmpset_acq_64'
<br>
opal/include/opal/sys/sparcv9/atomic.h:175: error: previous definition of 'opal_atomic_cmpset_acq_64' was here
<br>
opal/include/opal/sys/atomic.h:375: error: conflicting types for 'opal_atomic_cmpset_rel_64'
<br>
opal/include/opal/sys/sparcv9/atomic.h:187: error: previous definition of 'opal_atomic_cmpset_rel_64' was here
<br>
----------------------------------------------------------------
<br>
<p>The attached patch fixes these warning/errors.
<br>
<p>I run test programs only in test/asm directory manually
<br>
because 'make check' doesn't run under my cross-compiling
<br>
environment. They all passed correctly.
<br>
<p>P.S.
<br>
I cannot reply until the next week if you request me something
<br>
because it's COB in Japan now, sorry.
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; In case someone else want to play with the new atomics here is the most
</span><br>
<span class="quotelev1">&gt; up-to-date patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 10:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; George:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have a failure with your patch applied on PPC64/Linux and gcc-4.4.6:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in asm
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt; &gt; `/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/BLD/opal/asm'
</span><br>
<span class="quotelev2">&gt; &gt;   CC       asm.lo
</span><br>
<span class="quotelev2">&gt; &gt; In file included from
</span><br>
<span class="quotelev2">&gt; &gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/asm/asm.c:21:0:
</span><br>
<span class="quotelev2">&gt; &gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/include/opal/sys/atomic.h:374:9:
</span><br>
<span class="quotelev2">&gt; &gt; error: conflicting types for 'opal_atomic_cmpset_rel_64'
</span><br>
<span class="quotelev2">&gt; &gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/include/opal/sys/powerpc/atomic.h:214:19:
</span><br>
<span class="quotelev2">&gt; &gt; note: previous definition of 'opal_atomic_cmpset_rel_64' was here
</span><br>
<span class="quotelev2">&gt; &gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/opal/include/opal/sys/atomic.h:374:9:
</span><br>
<span class="quotelev2">&gt; &gt; warning: 'opal_atomic_cmpset_rel_64' used but never defined [enabled by
</span><br>
<span class="quotelev2">&gt; &gt; default]
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [asm.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW: the patch applied cleanly to trunk except the portion
</span><br>
<span class="quotelev2">&gt; &gt; changing opal/include/opal/sys/osx/atomic.h, which does not exist.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; needed for these less common architectures.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Jul 31, 2014 at 7:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Paul, I know you have a pretty diverse range computers. Can you try to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; compile and run a “make check” with the following patch?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; subset of those is still supported).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Add SPARC (v8plus and v9) to that list.
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15445/atomics-sparcv9.patch">atomics-sparcv9.patch</a>
</ul>
<!-- attachment="atomics-sparcv9.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15446.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15444.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>In reply to:</strong> <a href="15434.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15462.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
