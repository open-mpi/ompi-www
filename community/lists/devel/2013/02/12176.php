<?
$subject_val = "Re: [OMPI devel] 1.7rc8 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 20:31:59 2013" -->
<!-- isoreceived="20130228013159" -->
<!-- sent="Thu, 28 Feb 2013 01:31:54 +0000" -->
<!-- isosent="20130228013154" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc8 is posted" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F6263E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFamD4U5TrYJd_AJf62zM1Rb1=2cGkxT5508wBC1VcAXbyQAZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7rc8 is posted<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 20:31:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12177.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>Previous message:</strong> <a href="12175.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="12173.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2013, at 7:36 PM, Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've tried the new rc. Here is what I got:
</span><br>
<p>Thanks for testing.
<br>
<p><span class="quotelev1">&gt; 1) I've successfully built it with intel-13.1 and gcc-4.7.2. But I've failed while using open64-4.5.2 and ekopath-5.0.0 (pathscale). The problems are in the fortran part. In each case I've used the following configuration line:
</span><br>
<span class="quotelev1">&gt; CC=$CC CXX=$CXX F77=$F77 FC=$FC ./configure --prefix=$prefix --with-knem=$knem_path
</span><br>
<span class="quotelev1">&gt; Open64 failed during configuration with the following:
</span><br>
<span class="quotelev1">&gt; *** Fortran compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether openf95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Open MPI now ignores the F77 and FFLAGS environment variables; only the FC and FCFLAGS environment variables are used.
</span><br>
<span class="quotelev1">&gt; checking whether ln -s works... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking for extra arguments to build a shared library... none needed
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev1">&gt; checking to see if Fortran compilers need additional linker flags... none
</span><br>
<span class="quotelev1">&gt; checking  external symbol convention... double underscore
</span><br>
<span class="quotelev1">&gt; checking if C and Fortran are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking to see if Fortran compiler likes the C++ exception flags... skipped (no C++ exceptions flags)
</span><br>
<span class="quotelev1">&gt; checking to see if mpifort compiler needs additional linker flags... none
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports CHARACTER... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran CHARACTER... 1
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to CHARACTER... char
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran CHARACTER... 1
</span><br>
<span class="quotelev1">&gt; checking for corresponding KIND value of CHARACTER... C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; checking KIND value of Fortran C_SIGNED_CHAR... no ISO_C_BINDING -- fallback
</span><br>
<span class="quotelev1">&gt; checking Fortran value of selected_int_kind(4)... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Could not determine KIND value of C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; configure: WARNING: See config.log for more details
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<p>Please send the full configure output as well as the config.log file (please compress).
<br>
<p><span class="quotelev1">&gt; Ekopath failed during make with the following error:
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-sizeof.lo
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-f08.lo
</span><br>
<span class="quotelev1">&gt; In file included from mpi-f08.F90:37:
</span><br>
<span class="quotelev1">&gt; mpi-f-interfaces-bind.h:1908: warning: extra tokens at end of #endif directive
</span><br>
<span class="quotelev1">&gt; mpi-f-interfaces-bind.h:2957: warning: extra tokens at end of #endif directive
</span><br>
<span class="quotelev1">&gt; In file included from mpi-f08.F90:38:
</span><br>
<span class="quotelev1">&gt; pmpi-f-interfaces-bind.h:1911: warning: extra tokens at end of #endif directive
</span><br>
<span class="quotelev1">&gt; pmpi-f-interfaces-bind.h:2963: warning: extra tokens at end of #endif directive
</span><br>
<span class="quotelev1">&gt; pathf95-1044 pathf95: INTERNAL OMPI_OP_CREATE_F, File = mpi-f-interfaces-bind.h, Line = 955, Column = 29 
</span><br>
<span class="quotelev1">&gt;   Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
</span><br>
<p>I've pinged Pathscale about this.
<br>
<p><span class="quotelev1">&gt; 2) I've ran a couple of tests (IMB) with the new version. I ran this on a system consisting of 10 nodes with Intel SB processor and fdr ConnectX3 infiniband adapters.
</span><br>
<span class="quotelev1">&gt; First I've tried the following parameters:
</span><br>
<span class="quotelev1">&gt; mpirun -np $NP -hostfile hosts --mca btl openib,sm,self --bind-to-core -npernode 16 --mca mpi_leave_pinned 1 ./IMB-MPI1 -npmin $NP -mem 4G $COLL
</span><br>
<span class="quotelev1">&gt; This combination complained about mca_leave_pinned. The same line works for 1.6.3. Is something different in the new release and I've missed it?
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A process attempted to use the &quot;leave pinned&quot; MPI feature, but no
</span><br>
<span class="quotelev1">&gt; memory registration hooks were found on the system at run time.  This
</span><br>
<span class="quotelev1">&gt; may be the result of running on a system that does not support memory
</span><br>
<span class="quotelev1">&gt; hooks or having some other software subvert Open MPI's use of the
</span><br>
<span class="quotelev1">&gt; memory hooks.  You can disable Open MPI's use of memory hooks by
</span><br>
<span class="quotelev1">&gt; setting both the mpi_leave_pinned and mpi_leave_pinned_pipeline MCA
</span><br>
<span class="quotelev1">&gt; parameters to 0.
</span><br>
<p>This should not be, and might explain your lower performance on the IMB results.
<br>
<p>Nathan -- you reported that you saw something like this before, but were then unable to reproduce.  Any ideas what's going on here?  Mellanox?
<br>
<p>(although the short message latency is troubling...)
<br>
<p>Can you ensure that you aren't using MXM in 1.7?  I understand that its short message latency is worse than RC verbs.  You'll need to add &quot;--mca pml ob1&quot; in your command line.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12177.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>Previous message:</strong> <a href="12175.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="12173.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
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
