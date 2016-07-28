<?
$subject_val = "Re: [OMPI devel] Fortran linking problem: libraries have changed";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 22 12:53:56 2012" -->
<!-- isoreceived="20120422165356" -->
<!-- sent="Sun, 22 Apr 2012 10:53:49 -0600" -->
<!-- isosent="20120422165349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran linking problem: libraries have changed" -->
<!-- id="20AB464C-DAD7-4513-AC53-D0BA545016A3_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F942A7A.5070307_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran linking problem: libraries have changed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-22 12:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10901.php">Eugene Loh: "[OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10901.php">Eugene Loh: "[OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#133;I don't see that happening, Eugene:
<br>
<p>[rhc_at_odin001 ~/svn-trunk]$ mpifort --showme
<br>
gfortran -I/nfs/rinfs/san/homedirs/rhc/openmpi/include -I/nfs/rinfs/san/homedirs/rhc/openmpi/lib -L/nfs/rinfs/san/homedirs/rhc/openmpi/lib -lmpi_usempi -lmpi_mpifh -lmpi -lopen-rte -lopen-pal -ldl -lm -lpci -lresolv -Wl,--export-dynamic -lrt -lnsl -lutil -lm -lpthread -ldl
<br>
<p>Did you change your MTT config to use mpifort instead of mpif77 and mpif90? If not, then they would indeed fail.
<br>
<p><p>On Apr 22, 2012, at 9:57 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Next Fortran problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oracle MTT managed to build the trunk (r26307) in some cases.  No test-run failures in these cases, but the pass counts are way low.  Turns out, the Fortran tests aren't being built (or run).  I try compiling a Fortran code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ld: fatal: library -lmpi_f77: not found
</span><br>
<span class="quotelev1">&gt; ld: fatal: library -lmpi_f90: not found
</span><br>
<span class="quotelev1">&gt; ld: fatal: File processing errors. No output written to a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try &quot;mpifort --showme&quot; and see that it's trying to link in &quot;-lmpi_f77 -lmpi_f90&quot;, but those libraries no longer exist.  They have been replaced by
</span><br>
<span class="quotelev1">&gt; -lmpi_mpifh
</span><br>
<span class="quotelev1">&gt; -lmpi_usempi_ignore_tkr
</span><br>
<span class="quotelev1">&gt; -lmpi_usempif08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the Fortran wrapper needs to be updated.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10901.php">Eugene Loh: "[OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10901.php">Eugene Loh: "[OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
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
