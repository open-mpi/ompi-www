<?
$subject_val = "Re: [OMPI devel] OMPI 1.7 compilation error with icc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 11:53:11 2014" -->
<!-- isoreceived="20140203165311" -->
<!-- sent="Mon, 3 Feb 2014 16:53:09 +0000" -->
<!-- isosent="20140203165309" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.7 compilation error with icc" -->
<!-- id="554DF354-34FB-4AC2-B0DE-5D5833DB8F53_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyYEHTXj5s3ptxj0igJ4MLX2gsC+Md6g45J1OBukt0D3eg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 11:53:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13978.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>In reply to:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- make dist when using icc/ifort was the magic combination that fails (it wouldn't fail when using gcc/gfortran).
<br>
<p>Ok, I see the problem -- fix coming shortly.  Thanks for finding it!
<br>
<p><p>On Feb 3, 2014, at 7:44 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; more info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to reproduce, &quot;./autogen.sh &amp;&amp; ./configure &amp;&amp; make dist&quot; on rhel 6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 3, 2014 at 12:39 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; (cd scripts &amp;&amp; make  top_distdir=../../../../../openmpi-1.7.4rc4git distdir=../../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-tkr/scripts \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr/scripts'
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr/scripts'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt;  (cd mpi/fortran/use-mpi-ignore-tkr &amp;&amp; make  top_distdir=../../../../openmpi-1.7.4rc4git distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-ignore-tkr \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-ignore-tkr'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-ignore-tkr'
</span><br>
<span class="quotelev1">&gt;  (cd mpi/fortran/use-mpi-f08 &amp;&amp; make  top_distdir=../../../../openmpi-1.7.4rc4git distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-f08 \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt;  (cd mpi/fortran/use-mpi-f08-desc &amp;&amp; make  top_distdir=../../../../openmpi-1.7.4rc4git distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-f08-desc \
</span><br>
<span class="quotelev1">&gt;      am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08-desc'
</span><br>
<span class="quotelev1">&gt;   FC       mpi-f08-types.lo
</span><br>
<span class="quotelev1">&gt; mpi-f08-types.f90(83): error #6418: This name has already been assigned a data type.   [MPI_SUBARRAYS_SUPPORTED]
</span><br>
<span class="quotelev1">&gt;   logical, parameter :: MPI_SUBARRAYS_SUPPORTED = .true.
</span><br>
<span class="quotelev1">&gt; ------------------------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for mpi-f08-types.f90 (code 1)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpi-f08-types.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08-desc'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7'
</span><br>
<span class="quotelev1">&gt; make: *** [dist] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13978.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>In reply to:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<!-- nextthread="start" -->
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
