<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 20 15:24:18 2014" -->
<!-- isoreceived="20140120202418" -->
<!-- sent="Mon, 20 Jan 2014 20:24:02 +0000" -->
<!-- isosent="20140120202402" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure" -->
<!-- id="CF02C7F1.170C7%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16STdimp4NLhvQecuNCwSbN5jiHhK6hWjnGTv1+hgG_Jw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-20 15:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13819.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<li><strong>In reply to:</strong> <a href="13801.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Reply:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/17/14 6:28 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>I am trying to build the 1.7 nightly tarball (1.7.4rc2r30303) on a Linux/PPC system with the xlc-11.1 compilers configured for 32-bit output:
<br>
<p>$ export OBJECT_MODE=32
<br>
$ [pathto]/configure CC=xlc CXX=xlC FC=xlf90 --enable-debug --prefix=...
<br>
<p>The build fails with:
<br>
<p>Making all in mpi/cxx
<br>
make[2]: Entering directory `/gpfs-biou/phh1/OMPI/openmpi-1.7.4-latest-linux-ppc32-xlc-11.1/BLD/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX      mpicxx.lo
<br>
&quot;/home/phh1/SCRATCH/OMPI/openmpi-1.7.4-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30303/opal/threads/mutex.h&quot;, line 292.15: 1540-0274 (S) The name lookup for &quot;opal_atomic_add_64&quot; did not find a declaration.
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
<p>My guess is due to the ILP31 target, there might not *be* any atomic 64-bit add.
<br>
However, my Linux/ARM build with gcc worked fine, so clearly (to me) there is support for ILP32 systems.
<br>
<p>The OBJECT_MODE=64 case gets past this point (but fails building fortran support - report coming soon).
<br>
<p>I will accept &quot;we don't support this target&quot;, but am reporting this for completeness.
<br>
<p>Ugh, this is a 32 bit RISC problem; we don't have a 64 bit atomic on a 32 bit platform.  People are supposed to check to see if there's 64 bit atomic support, but that clearly hasn't been happening.  I've fixed this compile error, but there are still two places in the code base (bcol-basesmuma and coll-ml) that blindly use 64 bit atomics and I don't have time to fix those.  I'll file a CMR for the core fix and bugs about the components, but I'm not hopeful people will fix them before the 1.7.4 release.  Sigh.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13819.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<li><strong>In reply to:</strong> <a href="13801.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Reply:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
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
