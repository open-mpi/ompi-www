<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 01:14:19 2012" -->
<!-- isoreceived="20120927051419" -->
<!-- sent="Thu, 27 Sep 2012 07:14:11 +0200" -->
<!-- isosent="20120927051411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="2D2B16BA-942E-426B-A328-9E8AE79152D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50635C45.309_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 01:14:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11528.php">Eugene Loh: "[OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11528.php">Eugene Loh: "[OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig: Can you reply to Eugene's question?  I *assume* the answer is &quot;no&quot;, since we don't need it for any other compilers.  Is there an optional &quot;public&quot; directive that we can use?
<br>
<p>Eugene: can you see if your compiler supports an optional &quot;public&quot; kind of directive?  We could discover this directive during configure, and then only use it when using your compiler.
<br>
<p><p><p>On Sep 26, 2012, at 9:49 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The ibm tests aren't building for me.  One of the issues is mprobe_usempif08.f90 trying to access status%MPI_SOURCE and status%MPI_TAG.  I assume this is supposed to work, but it doesn't.  E.g., trunk with Oracle Studio compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat a.f90
</span><br>
<span class="quotelev1">&gt;  use mpi_f08
</span><br>
<span class="quotelev1">&gt;  type(MPI_Status) status
</span><br>
<span class="quotelev1">&gt;  write(6,*) status%MPI_SOURCE
</span><br>
<span class="quotelev1">&gt;  write(6,*) status%MPI_TAG
</span><br>
<span class="quotelev1">&gt;  end
</span><br>
<span class="quotelev1">&gt; % mpifort -m64 -c a.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  write(6,*) status%MPI_SOURCE
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt; &quot;a.f90&quot;, Line = 3, Column = 21: ERROR: &quot;MPI_SOURCE&quot; is a private component of &quot;MPI_STATUS&quot; and cannot be used outside of the module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  write(6,*) status%MPI_TAG
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt; &quot;a.f90&quot;, Line = 4, Column = 21: ERROR: &quot;MPI_TAG&quot; is a private component of &quot;MPI_STATUS&quot; and cannot be used outside of the module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I look in ompi/mpi/fortran/[base|use-mpi-f08-desc]/mpi-f08-types.f90, I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   type, BIND(C) :: MPI_Status
</span><br>
<span class="quotelev1">&gt;      integer :: MPI_SOURCE
</span><br>
<span class="quotelev1">&gt;      integer :: MPI_TAG
</span><br>
<span class="quotelev1">&gt;      integer :: MPI_ERROR
</span><br>
<span class="quotelev1">&gt;      integer(C_INT)    OMPI_PRIVATE :: c_cancelled
</span><br>
<span class="quotelev1">&gt;      integer(C_SIZE_T) OMPI_PRIVATE :: c_count
</span><br>
<span class="quotelev1">&gt;   end type MPI_Status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should the first three components explicitly be made public?
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
<li><strong>Next message:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11528.php">Eugene Loh: "[OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11528.php">Eugene Loh: "[OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
