<?
$subject_val = "[OMPI devel] Missing support for 2 types in MPI_Sizeof()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 03:22:30 2016" -->
<!-- isoreceived="20160415072230" -->
<!-- sent="Fri, 15 Apr 2016 07:22:27 +0000" -->
<!-- isosent="20160415072227" -->
<!-- name="DERBEY, NADIA" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] Missing support for 2 types in MPI_Sizeof()" -->
<!-- id="57109691.8020203_at_atos.net" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Missing support for 2 types in MPI_Sizeof()<br>
<strong>From:</strong> DERBEY, NADIA (<em>nadia.derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 03:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>

<br>
The following trivial example doesn't compile because of 2 missing types 
<br>
in the MPI_SIZEOF subroutines (in mpi_sizeof.f90).
<br>

<br>
[derbeyn_at_btp0 test]$ cat mpi_sizeof.f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
!        use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr, sz, mpisize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer i1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character ch1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical l1
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(r1, sz, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(i1, sz, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(l1, sz, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(ch1, sz, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
[derbeyn_at_btp0 test]$ mpif90 -o mpi_sizeof mpi_sizeof.f90
<br>
mpi_sizeof.f90(14): error #6285: There is no matching specific 
<br>
subroutine for this generic subroutine call.   [MPI_SIZEOF]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(ch1, sz, ierr)
<br>
-------------^
<br>
mpi_sizeof.f90(15): error #6285: There is no matching specific
<br>
subroutine for this generic subroutine call.   [MPI_SIZEOF]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(l1, sz, ierr)
<br>
-------------^
<br>
compilation aborted for mpi_sizeof.f90 (code 1)
<br>

<br>

<br>
This problem happens both on master and v2.x. The following patch seems
<br>
to solve the issue:
<br>

<br>
diff --git a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
index 5ea3dca3..a2a99924 100755
<br>
--- a/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
+++ b/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
@@ -145,6 +145,9 @@ sub generate {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Main
<br>

<br>
#############################################################################
<br>

<br>
+queue_sub(&quot;character&quot;, &quot;char&quot;, &quot;character_kinds&quot;);
<br>
+queue_sub(&quot;logical&quot;, &quot;logical&quot;, &quot;logical_kinds&quot;);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for my $size (qw/8 16 32 64/) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;queue_sub(&quot;integer(int${size})&quot;, &quot;int${size}&quot;, &quot;int${size}&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>

<br>
Regards,
<br>
Nadia
<br>

<br>
-- 
<br>
Nadia Derbey - B1-387
<br>
HPC R&amp;D - MPI
<br>
Tel: +33 4 76 29 77 62
<br>
nadia.derbey_at_[hidden]
<br>
1 Rue de Provence BP 208
<br>
38130 Echirolles Cedex, France
<br>
www.atos.com<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18764.php">Howard Pritchard: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Reply:</strong> <a href="18766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
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
