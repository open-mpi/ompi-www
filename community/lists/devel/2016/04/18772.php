<?
$subject_val = "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 09:52:44 2016" -->
<!-- isoreceived="20160415135244" -->
<!-- sent="Fri, 15 Apr 2016 13:52:40 +0000" -->
<!-- isosent="20160415135240" -->
<!-- name="DERBEY, NADIA" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()" -->
<!-- id="5710F207.7090906_at_atos.net" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAkFZ5tXqxvnYd7xN645NS5ciQybjS8qa5bfyz8NmD8j09d+Vw_at_mail.gmail.com" -->
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
<strong>From:</strong> DERBEY, NADIA (<em>nadia.derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 09:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18773.php">Howard Pritchard: "[OMPI devel] Fwd: psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, actually it's an old test suite (mpich2). We originally downloaded 
<br>
it a looooong time ago form
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html">http://www.mcs.anl.gov/research/projects/mpi/mpi-test/tsuite.html</a>.
<br>
And we changed a bunch of things to make it run in our test environment.
<br>
<p>I thought it was already in the MTT repo?
<br>
<p>Regards,
<br>
Nadia
<br>
<p>On 04/15/2016 03:44 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Nadia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by any chance, could this test suite be contributed to the ompi-tests
</span><br>
<span class="quotelev1">&gt; repository ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, April 15, 2016, DERBEY, NADIA &lt;nadia.derbey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:nadia.derbey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Actually, we have a functional test suite that used to pass for these
</span><br>
<span class="quotelev1">&gt;     types and it fails now with v2.x. So I thought it was a regression.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But from what you're saying, the new standard doesn't have a strong
</span><br>
<span class="quotelev1">&gt;     requirement on LOGICAL and CHARACTER. So I really don't mind, since I
</span><br>
<span class="quotelev1">&gt;     don't know whether these types are widely used in client applications. I
</span><br>
<span class="quotelev1">&gt;     guess no?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 04/15/2016 02:34 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;      &gt; Nadia --
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; I believe that the character and logical types are not in this
</span><br>
<span class="quotelev1">&gt;     script already because the description of MPI_SIZEOF in MPI-3.1 says
</span><br>
<span class="quotelev1">&gt;     that the input choice buffer parameter is:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; IN x     a Fortran variable of numeric intrinsic type (choice)
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; As I understand it (and my usual disclaimer here: I am *not* a
</span><br>
<span class="quotelev1">&gt;     Fortran expert), CHARACTER and LOGICAL types are not numeric in Fortran.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; However, we could add such interfaces as an extension.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; I just checked MPICH 3.2, and they *do* include MPI_SIZEOF
</span><br>
<span class="quotelev1">&gt;     interfaces for CHARACTER and LOGICAL, but they are missing many of
</span><br>
<span class="quotelev1">&gt;     the other MPI_SIZEOF interfaces that we have in OMPI.  Meaning: OMPI
</span><br>
<span class="quotelev1">&gt;     and MPICH already diverge wildly on MPI_SIZEOF.  :-\
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; I guess I don't have a strong opinion here.  If you file a PR for
</span><br>
<span class="quotelev1">&gt;     this patch, I won't object.  :-)
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; On Apr 15, 2016, at 3:22 AM, DERBEY, NADIA
</span><br>
<span class="quotelev1">&gt;     &lt;nadia.derbey_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; The following trivial example doesn't compile because of 2
</span><br>
<span class="quotelev1">&gt;     missing types
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; in the MPI_SIZEOF subroutines (in mpi_sizeof.f90).
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; [derbeyn_at_btp0 test]$ cat mpi_sizeof.f90
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            program main
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; !        use mpi
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            integer ierr, sz, mpisize
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            real r1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            integer i1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            character ch1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            logical l1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_INIT(ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_SIZEOF(r1, sz, ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_SIZEOF(i1, sz, ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_SIZEOF(l1, sz, ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_SIZEOF(ch1, sz, ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            end
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; [derbeyn_at_btp0 test]$ mpif90 -o mpi_sizeof mpi_sizeof.f90
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; mpi_sizeof.f90(14): error #6285: There is no matching specific
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; subroutine for this generic subroutine call.   [MPI_SIZEOF]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_SIZEOF(ch1, sz, ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; -------------^
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; mpi_sizeof.f90(15): error #6285: There is no matching specific
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; subroutine for this generic subroutine call.   [MPI_SIZEOF]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;            call MPI_SIZEOF(l1, sz, ierr)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; -------------^
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; compilation aborted for mpi_sizeof.f90 (code 1)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; This problem happens both on master and v2.x. The following
</span><br>
<span class="quotelev1">&gt;     patch seems
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; to solve the issue:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; diff --git a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://gen-mpi-sizeof.pl">http://gen-mpi-sizeof.pl</a>&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl &lt;<a href="http://gen-mpi-sizeof.pl">http://gen-mpi-sizeof.pl</a>&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; index 5ea3dca3..a2a99924 100755
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; --- a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://gen-mpi-sizeof.pl">http://gen-mpi-sizeof.pl</a>&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; +++ b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://gen-mpi-sizeof.pl">http://gen-mpi-sizeof.pl</a>&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; @@ -145,6 +145,9 @@ sub generate {
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;     # Main
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     #############################################################################
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; +queue_sub(&quot;character&quot;, &quot;char&quot;, &quot;character_kinds&quot;);
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; +queue_sub(&quot;logical&quot;, &quot;logical&quot;, &quot;logical_kinds&quot;);
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; +
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;     for my $size (qw/8 16 32 64/) {
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;         queue_sub(&quot;integer(int${size})&quot;, &quot;int${size}&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;int${size}&quot;);
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Nadia Derbey - B1-387
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; HPC R&amp;D - MPI
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Tel: +33 4 76 29 77 62
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; nadia.derbey_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; 1 Rue de Provence BP 208
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; 38130 Echirolles Cedex, France
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; www.atos.com &lt;<a href="http://www.atos.com">http://www.atos.com</a>&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18765.php">http://www.open-mpi.org/community/lists/devel/2016/04/18765.php</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Nadia Derbey - B1-387
</span><br>
<span class="quotelev1">&gt;     HPC R&amp;D - MPI
</span><br>
<span class="quotelev1">&gt;     Tel: +33 4 76 29 77 62
</span><br>
<span class="quotelev1">&gt;     nadia.derbey_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     1 Rue de Provence BP 208
</span><br>
<span class="quotelev1">&gt;     38130 Echirolles Cedex, France
</span><br>
<span class="quotelev1">&gt;     www.atos.com &lt;<a href="http://www.atos.com">http://www.atos.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18768.php">http://www.open-mpi.org/community/lists/devel/2016/04/18768.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18771.php">http://www.open-mpi.org/community/lists/devel/2016/04/18771.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Nadia Derbey - B1-387
HPC R&amp;D - MPI
Tel: +33 4 76 29 77 62
nadia.derbey_at_[hidden]
1 Rue de Provence BP 208
38130 Echirolles Cedex, France
www.atos.com</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18773.php">Howard Pritchard: "[OMPI devel] Fwd: psm2 and psm2_ep_open problems"</a>
<li><strong>Previous message:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18771.php">Gilles Gouaillardet: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
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
