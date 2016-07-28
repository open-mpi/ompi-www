<?
$subject_val = "Re: [OMPI devel] OMPI 1.7 compilation error with icc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 07:44:59 2014" -->
<!-- isoreceived="20140203124459" -->
<!-- sent="Mon, 3 Feb 2014 14:44:57 +0200" -->
<!-- isosent="20140203124457" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.7 compilation error with icc" -->
<!-- id="CAAO1KyYEHTXj5s3ptxj0igJ4MLX2gsC+Md6g45J1OBukt0D3eg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyZDpP0TN2GS0fQ3u+kRkKxVeSEvi+Fd3wUFHB9t9YKbzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.7 compilation error with icc<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 07:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Previous message:</strong> <a href="13975.php">Mike Dubman: "[OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>In reply to:</strong> <a href="13975.php">Mike Dubman: "[OMPI devel] OMPI 1.7 compilation error with icc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Reply:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
more info:
<br>
<p>to reproduce, &quot;./autogen.sh &amp;&amp; ./configure &amp;&amp; make dist&quot; on rhel 6.4
<br>
<p><p>On Mon, Feb 3, 2014 at 12:39 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; (cd scripts &amp;&amp; make  top_distdir=../../../../../openmpi-1.7.4rc4git
</span><br>
<span class="quotelev1">&gt; distdir=../../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-tkr/scripts
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
</span><br>
<span class="quotelev1">&gt; distdir)
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr/scripts'
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr/scripts'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt;  (cd mpi/fortran/use-mpi-ignore-tkr &amp;&amp; make
</span><br>
<span class="quotelev1">&gt;  top_distdir=../../../../openmpi-1.7.4rc4git
</span><br>
<span class="quotelev1">&gt; distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-ignore-tkr
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
</span><br>
<span class="quotelev1">&gt; distdir)
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-ignore-tkr'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-ignore-tkr'
</span><br>
<span class="quotelev1">&gt;  (cd mpi/fortran/use-mpi-f08 &amp;&amp; make
</span><br>
<span class="quotelev1">&gt;  top_distdir=../../../../openmpi-1.7.4rc4git
</span><br>
<span class="quotelev1">&gt; distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-f08 \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
</span><br>
<span class="quotelev1">&gt; distdir)
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt;  (cd mpi/fortran/use-mpi-f08-desc &amp;&amp; make
</span><br>
<span class="quotelev1">&gt;  top_distdir=../../../../openmpi-1.7.4rc4git
</span><br>
<span class="quotelev1">&gt; distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-f08-desc \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
</span><br>
<span class="quotelev1">&gt; distdir)
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08-desc'
</span><br>
<span class="quotelev1">&gt;   FC       mpi-f08-types.lo
</span><br>
<span class="quotelev1">&gt; mpi-f08-types.f90(83): error #6418: This name has already been assigned a
</span><br>
<span class="quotelev1">&gt; data type.   [MPI_SUBARRAYS_SUPPORTED]
</span><br>
<span class="quotelev1">&gt;   logical, parameter :: MPI_SUBARRAYS_SUPPORTED = .true.
</span><br>
<span class="quotelev1">&gt; ------------------------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for mpi-f08-types.f90 (code 1)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpi-f08-types.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08-desc'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7'
</span><br>
<span class="quotelev1">&gt; make: *** [dist] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Previous message:</strong> <a href="13975.php">Mike Dubman: "[OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>In reply to:</strong> <a href="13975.php">Mike Dubman: "[OMPI devel] OMPI 1.7 compilation error with icc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Reply:</strong> <a href="13977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
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
