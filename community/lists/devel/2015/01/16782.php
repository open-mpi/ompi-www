<?
$subject_val = "Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 06:42:32 2015" -->
<!-- isoreceived="20150113114232" -->
<!-- sent="Tue, 13 Jan 2015 11:42:15 +0000" -->
<!-- isosent="20150113114215" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4" -->
<!-- id="73F03308-9D56-4FE5-9607-38637CAACAAE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB110-W11062EC749D7B3541DFBF5ABD400_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi_sizeof in openmpi 1.8.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-13 06:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16783.php">Adrian Reber: "[OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16781.php">Valery: "[OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="16781.php">Valery: "[OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI_SIZEOF implementation had a big revamp recently to fix a bunch of correctness and compiler compatibility issues (i.e., since 1.7.4 -- I think it may have been in 1.8.3, but I don't remember specifically).
<br>
<p>One of the things that was fixed was reducing the number of MPI_SIZEOF overloaded subroutines that are available because the MPI-3.0 standard is actually fairly clear that MPI_SIZEOF is only for integer, real, and complex types.  See &quot;Support for Size-specific MPI Datatypes&quot; in MPI-3.0 p620 and p621.
<br>
<p>Hence, the error that you are getting below is correct: there (intentionally) is no MPI_SIZEOF defined for character or logical dummy parameter types.
<br>
<p><p><span class="quotelev1">&gt; On Jan 13, 2015, at 3:50 AM, Valery &lt;valeryweber_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following code doesnt compile anymore with 1.8.4 (was working with older version eg 1.7.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi was compiled as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.8.4/configure --prefix=1.8.4-gcc-4.9.2 --enable-static --disable-shared --enable-mpi-fortran=all CC=gcc-4.9.2 FC=gfortran-4.9.2 CXX=g++-4.9.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Valery
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat tmp.f90
</span><br>
<span class="quotelev1">&gt; module mod
</span><br>
<span class="quotelev1">&gt;   USE MPI
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;   FUNCTION c_get_size_of ( this ) RESULT( reslt )
</span><br>
<span class="quotelev1">&gt;     CHARACTER(*), INTENT( IN ) :: this
</span><br>
<span class="quotelev1">&gt;     INTEGER :: reslt, ierr
</span><br>
<span class="quotelev1">&gt;     CALL mpi_sizeof ( this, reslt, ierr )
</span><br>
<span class="quotelev1">&gt;   END FUNCTION c_get_size_of
</span><br>
<span class="quotelev1">&gt;   FUNCTION l_get_size_of ( this ) RESULT( reslt )
</span><br>
<span class="quotelev1">&gt;     LOGICAL, INTENT( IN ) :: this
</span><br>
<span class="quotelev1">&gt;     INTEGER :: reslt, ierr
</span><br>
<span class="quotelev1">&gt;     CALL mpi_sizeof ( this, reslt, ierr )
</span><br>
<span class="quotelev1">&gt;   END FUNCTION l_get_size_of
</span><br>
<span class="quotelev1">&gt; end module mod
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpifort tmp.f90 -c
</span><br>
<span class="quotelev1">&gt; tmp.f90:16.41:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CALL mpi_sizeof ( this, reslt, ierr )
</span><br>
<span class="quotelev1">&gt;                                          1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_sizeof' at (1)
</span><br>
<span class="quotelev1">&gt; tmp.f90:10.41:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CALL mpi_sizeof ( this, reslt, ierr )
</span><br>
<span class="quotelev1">&gt;                                          1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_sizeof' at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16781.php">http://www.open-mpi.org/community/lists/devel/2015/01/16781.php</a>
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
<li><strong>Next message:</strong> <a href="16783.php">Adrian Reber: "[OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16781.php">Valery: "[OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="16781.php">Valery: "[OMPI devel] mpi_sizeof in openmpi 1.8.4"</a>
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
