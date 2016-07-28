<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 03:27:58 2013" -->
<!-- isoreceived="20130927072758" -->
<!-- sent="Fri, 27 Sep 2013 09:27:55 +0200" -->
<!-- isosent="20130927072755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3" -->
<!-- id="2426C8A7-1234-4511-9636-9AD9E55C4FE8_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130926215510.43BBD160373_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 03:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13000.php">Jeff Squyres (jsquyres): "[OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="12998.php">Nathan Hjelm: "[OMPI devel] RFC: Finish MPI-3.0 non-blocking collectives + new comm functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13002.php">Jeff Squyres (jsquyres): "[OMPI devel] neighborhood collectives issues"</a>
<li><strong>Reply:</strong> <a href="13002.php">Jeff Squyres (jsquyres): "[OMPI devel] neighborhood collectives issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The addition of the neighborhood collectives to the mca_coll_base_comm_coll_t structure increased the size of the ompi_communicator_t structure over the limit of the predefined padding (PREDEFINED_COMMUNICATOR_PAD). This is not a small change, it will break the ABI with all past version of Open MPI. I pushed a temporary commit to allow the trunk to be built, but we might want a better solution.
<br>
<p>There a re a new warnings:
<br>
../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c: In function 'libnbc_comm_query':
<br>
../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:196:48: warning: assignment from incompatible pointer type [enabled by default]
<br>
../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:197:49: warning: assignment from incompatible pointer type [enabled by default]
<br>
../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:198:47: warning: assignment from incompatible pointer type [enabled by default]
<br>
../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:199:48: warning: assignment from incompatible pointer type [enabled by default]
<br>
../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:200:48: warning: assignment from incompatible pointer type [enabled by default]
<br>
<p>George.
<br>
<p>On Sep 26, 2013, at 23:55 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2013-09-26 17:55:08 EDT (Thu, 26 Sep 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29265
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29265">https://svn.open-mpi.org/trac/ompi/changeset/29265</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; MPI-3: Add support for neighborhood collectives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Blocking versions are simple linear algorithms implemented in coll/basic. Non-
</span><br>
<span class="quotelev1">&gt; blocking versions are from libnbc 1.1.1. All algorithms have been tested with
</span><br>
<span class="quotelev1">&gt; simple test cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=jsquyres
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13000.php">Jeff Squyres (jsquyres): "[OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="12998.php">Nathan Hjelm: "[OMPI devel] RFC: Finish MPI-3.0 non-blocking collectives + new comm functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13002.php">Jeff Squyres (jsquyres): "[OMPI devel] neighborhood collectives issues"</a>
<li><strong>Reply:</strong> <a href="13002.php">Jeff Squyres (jsquyres): "[OMPI devel] neighborhood collectives issues"</a>
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
