<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 15:07:17 2016" -->
<!-- isoreceived="20160504190717" -->
<!-- sent="Wed, 4 May 2016 12:07:10 -0700" -->
<!-- isosent="20160504190710" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)" -->
<!-- id="CAAvDA15kty-odY579-cLL6u8dWYEFNzQ84pOMLPXA+DMnm8v1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160504183834.GA42233_at_mordor.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 15:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18909.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Previous message:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>In reply to:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18909.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Reply:</strong> <a href="18909.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>The gcc syntax definitely makes everything but the first string in the asm
<br>
optional.
<br>
For instance
<br>
&nbsp;&nbsp;&nbsp;asm(&quot;nop&quot;)
<br>
Rather than
<br>
&nbsp;&nbsp;asm(&quot;nop&quot; :::)
<br>
<p>However xlc appears to be a little bit more restricted by not accepting a
<br>
subset of the grammar.
<br>
<p>-Paul [Sent from my phone]
<br>
<p>On Wednesday, May 4, 2016, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Go ahead, I don't have access to xlc so I couldn't verify myself. I
</span><br>
<span class="quotelev1">&gt; don't fully understand why the last : can be omitted when there are no
</span><br>
<span class="quotelev1">&gt; clobbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 04, 2016 at 01:34:48PM -0500, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Did someone pick this up to merge into master &amp; v2.x?
</span><br>
<span class="quotelev2">&gt; &gt;    I can confirm that Paul's patch fixes the issue for XL compilers. I
</span><br>
<span class="quotelev1">&gt; didn't
</span><br>
<span class="quotelev2">&gt; &gt;    see a PR for it, but can file one if no one has yet.
</span><br>
<span class="quotelev2">&gt; &gt;    On Mon, May 2, 2016 at 6:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      It appears that xlc's support for gcc-style inline asm does not
</span><br>
<span class="quotelev1">&gt; allow an
</span><br>
<span class="quotelev2">&gt; &gt;      empty clobbers list.
</span><br>
<span class="quotelev2">&gt; &gt;      The failure I see is
</span><br>
<span class="quotelev2">&gt; &gt;      libtool: compile:  xlc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/asm
</span><br>
<span class="quotelev2">&gt; &gt;      -I../../opal/include -I../../ompi/include -I../../oshmem/include
</span><br>
<span class="quotelev2">&gt; &gt;      -I../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
</span><br>
<span class="quotelev2">&gt; &gt;      -I../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev2">&gt; &gt;      -I../../ompi/mpiext/cuda/c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2
</span><br>
<span class="quotelev2">&gt; &gt;      -I../..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/orte/include
</span><br>
<span class="quotelev2">&gt; &gt;      -I../../orte/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/ompi/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/oshmem/include
</span><br>
<span class="quotelev2">&gt; &gt;      -D_REENTRANT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev2">&gt; &gt;      -q64 -g -c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/asm/asm.c
</span><br>
<span class="quotelev2">&gt; &gt;      -Wp,-qmakedep=gcc,-MF.deps/asm.TPlo  -qpic -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;      line 150.27: 1506-276 (S) Syntax error: possible missing string
</span><br>
<span class="quotelev1">&gt; literal?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;      line 239.27: 1506-276 (S) Syntax error: possible missing string
</span><br>
<span class="quotelev1">&gt; literal?
</span><br>
<span class="quotelev2">&gt; &gt;      make[2]: *** [asm.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;      The code corresponding to the first error message is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;           143  static inline int32_t opal_atomic_ll_32 (volatile int32_t
</span><br>
<span class="quotelev2">&gt; &gt;        *addr)
</span><br>
<span class="quotelev2">&gt; &gt;           144  {
</span><br>
<span class="quotelev2">&gt; &gt;           145     int32_t ret;
</span><br>
<span class="quotelev2">&gt; &gt;           146
</span><br>
<span class="quotelev2">&gt; &gt;           147     __asm__ __volatile__ (&quot;lwarx   %0, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;           148                           : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev2">&gt; &gt;           149                           : &quot;r&quot; (addr)
</span><br>
<span class="quotelev2">&gt; &gt;           150                           :);
</span><br>
<span class="quotelev2">&gt; &gt;           151     return ret;
</span><br>
<span class="quotelev2">&gt; &gt;           152  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      And the second error is the identical line as it appears in
</span><br>
<span class="quotelev2">&gt; &gt;      opal_atomic_ll_64().
</span><br>
<span class="quotelev2">&gt; &gt;      The following patch to remove the &quot;trailing&quot; colons was sufficient
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;      fix this problem.
</span><br>
<span class="quotelev2">&gt; &gt;      --- openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h~
</span><br>
<span class="quotelev2">&gt; &gt;       2016-05-02 23:37:13.597782000 +0000
</span><br>
<span class="quotelev2">&gt; &gt;      +++ openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h
</span><br>
<span class="quotelev2">&gt; &gt;      2016-05-02 23:36:11.615404378 +0000
</span><br>
<span class="quotelev2">&gt; &gt;      @@ -147,7 +147,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          __asm__ __volatile__ (&quot;lwarx   %0, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev2">&gt; &gt;                                : &quot;r&quot; (addr)
</span><br>
<span class="quotelev2">&gt; &gt;      -                         :);
</span><br>
<span class="quotelev2">&gt; &gt;      +                          );
</span><br>
<span class="quotelev2">&gt; &gt;          return ret;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;      @@ -236,7 +236,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;          __asm__ __volatile__ (&quot;ldarx   %0, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev2">&gt; &gt;                                : &quot;r&quot; (addr)
</span><br>
<span class="quotelev2">&gt; &gt;      -                         :);
</span><br>
<span class="quotelev2">&gt; &gt;      +                          );
</span><br>
<span class="quotelev2">&gt; &gt;          return ret;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;      -Paul
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt;      Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18886.php">http://www.open-mpi.org/community/lists/devel/2016/05/18886.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18906.php">http://www.open-mpi.org/community/lists/devel/2016/05/18906.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18909.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Previous message:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>In reply to:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18909.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Reply:</strong> <a href="18909.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
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
