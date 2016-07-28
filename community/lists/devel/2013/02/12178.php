<?
$subject_val = "Re: [OMPI devel] 1.7rc8 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 12:04:54 2013" -->
<!-- isoreceived="20130228170454" -->
<!-- sent="Thu, 28 Feb 2013 21:04:48 +0400" -->
<!-- isosent="20130228170448" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc8 is posted" -->
<!-- id="CAFamD4Xj=XXBpP_oKjqO2KdWZyjWdSzdLgH8diHGiDNeCyn4pg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F6263E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 12:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12179.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>Previous message:</strong> <a href="12177.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>In reply to:</strong> <a href="12176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you mean the logs from failed attempts? They are enclosed. If you need
<br>
the successful logs I'll need to make them again since the files from
<br>
successful builds are deleted.
<br>
<p>I am not using  MXM. The results with the option you suggested are the same
<br>
as before:
<br>
#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         1.49         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         1.58         0.61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         1.12         1.71
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         1.10         3.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         1.11         6.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         1.11        13.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.12        27.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.16        52.52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.72        70.83
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.84       132.72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.99       245.74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.25       433.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         2.87       680.54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         3.52      1109.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         4.68      1670.60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         9.66      1617.91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        14.30      2185.24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        23.45      2665.33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        35.99      3473.15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        58.05      4306.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       101.94      4904.69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       188.65      5300.86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       526.05      3801.94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      1096.09      3649.32
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPing
<br>
# #processes = 2
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         1.10         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000         1.24         0.77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000         1.23         1.55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000         1.23         3.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000         1.25         6.09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000         1.14        13.41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000         1.11        27.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000         1.16        52.75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000         1.71        71.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000         1.84       132.33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000         1.98       246.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000         2.27       429.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000         2.91       672.30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000         3.52      1109.43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000         4.80      1627.25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000         9.98      1565.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000        14.70      2125.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640        24.18      2584.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320        37.33      3348.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160        60.59      4125.82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80       105.83      4724.78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40       197.82      5055.05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20       791.35      2527.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      1820.30      2197.44
<br>
<p>Regards, Pavel Mezentsev.
<br>
<p><p>2013/2/28 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Feb 27, 2013, at 7:36 PM, Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've tried the new rc. Here is what I got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) I've successfully built it with intel-13.1 and gcc-4.7.2. But I've
</span><br>
<span class="quotelev1">&gt; failed while using open64-4.5.2 and ekopath-5.0.0 (pathscale). The problems
</span><br>
<span class="quotelev1">&gt; are in the fortran part. In each case I've used the following configuration
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev2">&gt; &gt; CC=$CC CXX=$CXX F77=$F77 FC=$FC ./configure --prefix=$prefix
</span><br>
<span class="quotelev1">&gt; --with-knem=$knem_path
</span><br>
<span class="quotelev2">&gt; &gt; Open64 failed during configuration with the following:
</span><br>
<span class="quotelev2">&gt; &gt; *** Fortran compiler
</span><br>
<span class="quotelev2">&gt; &gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking whether openf95 accepts -g... yes
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Open MPI now ignores the F77 and FFLAGS environment
</span><br>
<span class="quotelev1">&gt; variables; only the FC and FCFLAGS environment variables are used.
</span><br>
<span class="quotelev2">&gt; &gt; checking whether ln -s works... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for extra arguments to build a shared library... none needed
</span><br>
<span class="quotelev2">&gt; &gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev2">&gt; &gt; checking for Fortran flag to compile .f90 files... none
</span><br>
<span class="quotelev2">&gt; &gt; checking to see if Fortran compilers need additional linker flags... none
</span><br>
<span class="quotelev2">&gt; &gt; checking  external symbol convention... double underscore
</span><br>
<span class="quotelev2">&gt; &gt; checking if C and Fortran are link compatible... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking to see if Fortran compiler likes the C++ exception flags...
</span><br>
<span class="quotelev1">&gt; skipped (no C++ exceptions flags)
</span><br>
<span class="quotelev2">&gt; &gt; checking to see if mpifort compiler needs additional linker flags... none
</span><br>
<span class="quotelev2">&gt; &gt; checking if Fortran compiler supports CHARACTER... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking size of Fortran CHARACTER... 1
</span><br>
<span class="quotelev2">&gt; &gt; checking for C type corresponding to CHARACTER... char
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of Fortran CHARACTER... 1
</span><br>
<span class="quotelev2">&gt; &gt; checking for corresponding KIND value of CHARACTER... C_SIGNED_CHAR
</span><br>
<span class="quotelev2">&gt; &gt; checking KIND value of Fortran C_SIGNED_CHAR... no ISO_C_BINDING --
</span><br>
<span class="quotelev1">&gt; fallback
</span><br>
<span class="quotelev2">&gt; &gt; checking Fortran value of selected_int_kind(4)... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Could not determine KIND value of C_SIGNED_CHAR
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: See config.log for more details
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please send the full configure output as well as the config.log file
</span><br>
<span class="quotelev1">&gt; (please compress).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ekopath failed during make with the following error:
</span><br>
<span class="quotelev2">&gt; &gt;  PPFC     mpi-f08-sizeof.lo
</span><br>
<span class="quotelev2">&gt; &gt;   PPFC     mpi-f08.lo
</span><br>
<span class="quotelev2">&gt; &gt; In file included from mpi-f08.F90:37:
</span><br>
<span class="quotelev2">&gt; &gt; mpi-f-interfaces-bind.h:1908: warning: extra tokens at end of #endif
</span><br>
<span class="quotelev1">&gt; directive
</span><br>
<span class="quotelev2">&gt; &gt; mpi-f-interfaces-bind.h:2957: warning: extra tokens at end of #endif
</span><br>
<span class="quotelev1">&gt; directive
</span><br>
<span class="quotelev2">&gt; &gt; In file included from mpi-f08.F90:38:
</span><br>
<span class="quotelev2">&gt; &gt; pmpi-f-interfaces-bind.h:1911: warning: extra tokens at end of #endif
</span><br>
<span class="quotelev1">&gt; directive
</span><br>
<span class="quotelev2">&gt; &gt; pmpi-f-interfaces-bind.h:2963: warning: extra tokens at end of #endif
</span><br>
<span class="quotelev1">&gt; directive
</span><br>
<span class="quotelev2">&gt; &gt; pathf95-1044 pathf95: INTERNAL OMPI_OP_CREATE_F, File =
</span><br>
<span class="quotelev1">&gt; mpi-f-interfaces-bind.h, Line = 955, Column = 29
</span><br>
<span class="quotelev2">&gt; &gt;   Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've pinged Pathscale about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) I've ran a couple of tests (IMB) with the new version. I ran this on
</span><br>
<span class="quotelev1">&gt; a system consisting of 10 nodes with Intel SB processor and fdr ConnectX3
</span><br>
<span class="quotelev1">&gt; infiniband adapters.
</span><br>
<span class="quotelev2">&gt; &gt; First I've tried the following parameters:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np $NP -hostfile hosts --mca btl openib,sm,self --bind-to-core
</span><br>
<span class="quotelev1">&gt; -npernode 16 --mca mpi_leave_pinned 1 ./IMB-MPI1 -npmin $NP -mem 4G $COLL
</span><br>
<span class="quotelev2">&gt; &gt; This combination complained about mca_leave_pinned. The same line works
</span><br>
<span class="quotelev1">&gt; for 1.6.3. Is something different in the new release and I've missed it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A process attempted to use the &quot;leave pinned&quot; MPI feature, but no
</span><br>
<span class="quotelev2">&gt; &gt; memory registration hooks were found on the system at run time.  This
</span><br>
<span class="quotelev2">&gt; &gt; may be the result of running on a system that does not support memory
</span><br>
<span class="quotelev2">&gt; &gt; hooks or having some other software subvert Open MPI's use of the
</span><br>
<span class="quotelev2">&gt; &gt; memory hooks.  You can disable Open MPI's use of memory hooks by
</span><br>
<span class="quotelev2">&gt; &gt; setting both the mpi_leave_pinned and mpi_leave_pinned_pipeline MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameters to 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should not be, and might explain your lower performance on the IMB
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan -- you reported that you saw something like this before, but were
</span><br>
<span class="quotelev1">&gt; then unable to reproduce.  Any ideas what's going on here?  Mellanox?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (although the short message latency is troubling...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you ensure that you aren't using MXM in 1.7?  I understand that its
</span><br>
<span class="quotelev1">&gt; short message latency is worse than RC verbs.  You'll need to add &quot;--mca
</span><br>
<span class="quotelev1">&gt; pml ob1&quot; in your command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12178/config_logs.tar.bz2">config_logs.tar.bz2</a>
</ul>
<!-- attachment="config_logs.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12179.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>Previous message:</strong> <a href="12177.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<li><strong>In reply to:</strong> <a href="12176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Reply:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
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
