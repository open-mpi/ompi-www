<?
$subject_val = "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 08:34:15 2016" -->
<!-- isoreceived="20160415123415" -->
<!-- sent="Fri, 15 Apr 2016 12:34:03 +0000" -->
<!-- isosent="20160415123403" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()" -->
<!-- id="09CDA0E9-64A9-41DE-9755-F9D30B3E60A2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57109691.8020203_at_atos.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 08:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18765.php">DERBEY, NADIA: "[OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18765.php">DERBEY, NADIA: "[OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18777.php">Larry Baker: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nadia --
<br>
<p>I believe that the character and logical types are not in this script already because the description of MPI_SIZEOF in MPI-3.1 says that the input choice buffer parameter is:
<br>
<p>IN x     a Fortran variable of numeric intrinsic type (choice)
<br>
<p>As I understand it (and my usual disclaimer here: I am *not* a Fortran expert), CHARACTER and LOGICAL types are not numeric in Fortran.
<br>
<p>However, we could add such interfaces as an extension.
<br>
<p>I just checked MPICH 3.2, and they *do* include MPI_SIZEOF interfaces for CHARACTER and LOGICAL, but they are missing many of the other MPI_SIZEOF interfaces that we have in OMPI.  Meaning: OMPI and MPICH already diverge wildly on MPI_SIZEOF.  :-\
<br>
<p>I guess I don't have a strong opinion here.  If you file a PR for this patch, I won't object.  :-)
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2016, at 3:22 AM, DERBEY, NADIA &lt;nadia.derbey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following trivial example doesn't compile because of 2 missing types 
</span><br>
<span class="quotelev1">&gt; in the MPI_SIZEOF subroutines (in mpi_sizeof.f90).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [derbeyn_at_btp0 test]$ cat mpi_sizeof.f90
</span><br>
<span class="quotelev1">&gt;           program main
</span><br>
<span class="quotelev1">&gt; !        use mpi
</span><br>
<span class="quotelev1">&gt;           include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           integer ierr, sz, mpisize
</span><br>
<span class="quotelev1">&gt;           real r1
</span><br>
<span class="quotelev1">&gt;           integer i1
</span><br>
<span class="quotelev1">&gt;           character ch1
</span><br>
<span class="quotelev1">&gt;           logical l1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_SIZEOF(r1, sz, ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_SIZEOF(i1, sz, ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_SIZEOF(l1, sz, ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_SIZEOF(ch1, sz, ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           end
</span><br>
<span class="quotelev1">&gt; [derbeyn_at_btp0 test]$ mpif90 -o mpi_sizeof mpi_sizeof.f90
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.f90(14): error #6285: There is no matching specific 
</span><br>
<span class="quotelev1">&gt; subroutine for this generic subroutine call.   [MPI_SIZEOF]
</span><br>
<span class="quotelev1">&gt;           call MPI_SIZEOF(ch1, sz, ierr)
</span><br>
<span class="quotelev1">&gt; -------------^
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.f90(15): error #6285: There is no matching specific
</span><br>
<span class="quotelev1">&gt; subroutine for this generic subroutine call.   [MPI_SIZEOF]
</span><br>
<span class="quotelev1">&gt;           call MPI_SIZEOF(l1, sz, ierr)
</span><br>
<span class="quotelev1">&gt; -------------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for mpi_sizeof.f90 (code 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem happens both on master and v2.x. The following patch seems
</span><br>
<span class="quotelev1">&gt; to solve the issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; index 5ea3dca3..a2a99924 100755
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt; @@ -145,6 +145,9 @@ sub generate {
</span><br>
<span class="quotelev1">&gt;    # Main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #############################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +queue_sub(&quot;character&quot;, &quot;char&quot;, &quot;character_kinds&quot;);
</span><br>
<span class="quotelev1">&gt; +queue_sub(&quot;logical&quot;, &quot;logical&quot;, &quot;logical_kinds&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;    for my $size (qw/8 16 32 64/) {
</span><br>
<span class="quotelev1">&gt;        queue_sub(&quot;integer(int${size})&quot;, &quot;int${size}&quot;, &quot;int${size}&quot;);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey - B1-387
</span><br>
<span class="quotelev1">&gt; HPC R&amp;D - MPI
</span><br>
<span class="quotelev1">&gt; Tel: +33 4 76 29 77 62
</span><br>
<span class="quotelev1">&gt; nadia.derbey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 1 Rue de Provence BP 208
</span><br>
<span class="quotelev1">&gt; 38130 Echirolles Cedex, France
</span><br>
<span class="quotelev1">&gt; www.atos.com
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18765.php">http://www.open-mpi.org/community/lists/devel/2016/04/18765.php</a>
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
<li><strong>Next message:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18765.php">DERBEY, NADIA: "[OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18765.php">DERBEY, NADIA: "[OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18777.php">Larry Baker: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
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
