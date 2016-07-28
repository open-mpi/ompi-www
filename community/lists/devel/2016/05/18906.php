<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 14:34:49 2016" -->
<!-- isoreceived="20160504183449" -->
<!-- sent="Wed, 4 May 2016 13:34:48 -0500" -->
<!-- isosent="20160504183448" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)" -->
<!-- id="CAANzjEkURNkVieoE2ZG9PJ6Cj-LWK63g7x70ccJA6GA1LOP90A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14QcF1aKnAgd=kYLh4XT_tCFVZ2TLZjZ2uWbjU8L57xoQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 14:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Previous message:</strong> <a href="18905.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18886.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Reply:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did someone pick this up to merge into master &amp; v2.x?
<br>
<p>I can confirm that Paul's patch fixes the issue for XL compilers. I didn't
<br>
see a PR for it, but can file one if no one has yet.
<br>
<p>On Mon, May 2, 2016 at 6:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It appears that xlc's support for gcc-style inline asm does not allow an
</span><br>
<span class="quotelev1">&gt; empty clobbers list.
</span><br>
<span class="quotelev1">&gt; The failure I see is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  xlc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/asm
</span><br>
<span class="quotelev1">&gt; -I../../opal/include -I../../ompi/include -I../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -I../../ompi/mpiext/cuda/c
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2
</span><br>
<span class="quotelev1">&gt; -I../..
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/orte/include
</span><br>
<span class="quotelev1">&gt; -I../../orte/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/oshmem/include
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -q64 -g -c
</span><br>
<span class="quotelev1">&gt; /home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/asm/asm.c
</span><br>
<span class="quotelev1">&gt; -Wp,-qmakedep=gcc,-MF.deps/asm.TPlo  -qpic -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 150.27: 1506-276 (S) Syntax error: possible missing string literal?
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/SCRATCH/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-12.1/openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 239.27: 1506-276 (S) Syntax error: possible missing string literal?
</span><br>
<span class="quotelev1">&gt; make[2]: *** [asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code corresponding to the first error message is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    143  static inline int32_t opal_atomic_ll_32 (volatile int32_t *addr)
</span><br>
<span class="quotelev1">&gt;    144  {
</span><br>
<span class="quotelev1">&gt;    145     int32_t ret;
</span><br>
<span class="quotelev1">&gt;    146
</span><br>
<span class="quotelev1">&gt;    147     __asm__ __volatile__ (&quot;lwarx   %0, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt;    148                           : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev1">&gt;    149                           : &quot;r&quot; (addr)
</span><br>
<span class="quotelev1">&gt;    150                           :);
</span><br>
<span class="quotelev1">&gt;    151     return ret;
</span><br>
<span class="quotelev1">&gt;    152  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the second error is the identical line as it appears in
</span><br>
<span class="quotelev1">&gt; opal_atomic_ll_64().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following patch to remove the &quot;trailing&quot; colons was sufficient to fix
</span><br>
<span class="quotelev1">&gt; this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h~    2016-05-02
</span><br>
<span class="quotelev1">&gt; 23:37:13.597782000 +0000
</span><br>
<span class="quotelev1">&gt; +++ openmpi-2.0.0rc2/opal/include/opal/sys/powerpc/atomic.h     2016-05-02
</span><br>
<span class="quotelev1">&gt; 23:36:11.615404378 +0000
</span><br>
<span class="quotelev1">&gt; @@ -147,7 +147,7 @@
</span><br>
<span class="quotelev1">&gt;     __asm__ __volatile__ (&quot;lwarx   %0, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                           : &quot;r&quot; (addr)
</span><br>
<span class="quotelev1">&gt; -                         :);
</span><br>
<span class="quotelev1">&gt; +                          );
</span><br>
<span class="quotelev1">&gt;     return ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -236,7 +236,7 @@
</span><br>
<span class="quotelev1">&gt;     __asm__ __volatile__ (&quot;ldarx   %0, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                           : &quot;r&quot; (addr)
</span><br>
<span class="quotelev1">&gt; -                         :);
</span><br>
<span class="quotelev1">&gt; +                          );
</span><br>
<span class="quotelev1">&gt;     return ret;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18886.php">http://www.open-mpi.org/community/lists/devel/2016/05/18886.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18906/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Previous message:</strong> <a href="18905.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18886.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Reply:</strong> <a href="18907.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
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
