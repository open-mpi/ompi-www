<?
$subject_val = "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 20:28:59 2014" -->
<!-- isoreceived="20140118012859" -->
<!-- sent="Fri, 17 Jan 2014 17:28:57 -0800" -->
<!-- isosent="20140118012857" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure" -->
<!-- id="CAAvDA16STdimp4NLhvQecuNCwSbN5jiHhK6hWjnGTv1+hgG_Jw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 20:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13802.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: Fortran + XLF = broken"</a>
<li><strong>Previous message:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Reply:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build the 1.7 nightly tarball (1.7.4rc2r30303) on a
<br>
Linux/PPC system with the xlc-11.1 compilers configured for 32-bit output:
<br>
<p>$ export OBJECT_MODE=32
<br>
$ [pathto]/configure CC=xlc CXX=xlC FC=xlf90 --enable-debug --prefix=...
<br>
<p>The build fails with:
<br>
<p>Making all in mpi/cxx
<br>
make[2]: Entering directory
<br>
`/gpfs-biou/phh1/OMPI/openmpi-1.7.4-latest-linux-ppc32-xlc-11.1/BLD/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX      mpicxx.lo
<br>
&quot;/home/phh1/SCRATCH/OMPI/openmpi-1.7.4-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30303/opal/threads/mutex.h&quot;,
<br>
line 292.15: 1540-0274 (S) The name lookup for &quot;opal_atomic_add_64&quot; did not
<br>
find a declaration.
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
<p>My guess is due to the ILP31 target, there might not *be* any atomic 64-bit
<br>
add.
<br>
However, my Linux/ARM build with gcc worked fine, so clearly (to me) there
<br>
is support for ILP32 systems.
<br>
<p>The OBJECT_MODE=64 case gets past this point (but fails building fortran
<br>
support - report coming soon).
<br>
<p>I will accept &quot;we don't support this target&quot;, but am reporting this for
<br>
completeness.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13802.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: Fortran + XLF = broken"</a>
<li><strong>Previous message:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Reply:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
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
