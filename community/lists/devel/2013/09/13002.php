<?
$subject_val = "[OMPI devel] neighborhood collectives issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 09:01:02 2013" -->
<!-- isoreceived="20130927130102" -->
<!-- sent="Fri, 27 Sep 2013 13:01:01 +0000" -->
<!-- isosent="20130927130101" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] neighborhood collectives issues" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8E39CF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2426C8A7-1234-4511-9636-9AD9E55C4FE8_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] neighborhood collectives issues<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 09:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13003.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<li><strong>Previous message:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="12999.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13003.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<li><strong>Reply:</strong> <a href="13003.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2013, at 3:27 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The addition of the neighborhood collectives to the mca_coll_base_comm_coll_t structure increased the size of the ompi_communicator_t structure over the limit of the predefined padding (PREDEFINED_COMMUNICATOR_PAD). This is not a small change, it will break the ABI with all past version of Open MPI.
</span><br>
<p>This is going to be problematic for putting this in 1.7.4.
<br>
<p>Nathan: is there another way?  Perhaps even just a stopgap way for the 1.7/1.8 series, and we can keep the &quot;real&quot; way for 1.9+?  I.e., perhaps:
<br>
<p>1. keep PREDEFINED_COMMUNICATOR_PAD at current value for v1.7.x/1.8, but use a secondary pointer system (which won't be *too* painful; the algorithms are all simple/not optimized, anyway)
<br>
<p>2. increase PREDEFINED_COMMUNICATOR_PAD on the trunk for v1.9+ (we might want to increase it more than it is already increased, so that we actually have some breathing room for 1.9+)
<br>
<p><span class="quotelev1">&gt; I pushed a temporary commit to allow the trunk to be built, but we might want a better solution.
</span><br>
<p>Thanks George.
<br>
<p><span class="quotelev1">&gt; There a re a new warnings:
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c: In function 'libnbc_comm_query':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:196:48: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:197:49: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:198:47: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:199:48: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/ompi/mca/coll/libnbc/coll_libnbc_component.c:200:48: warning: assignment from incompatible pointer type [enabled by default]
</span><br>
<p><p>Nathan: please fix.
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
<li><strong>Next message:</strong> <a href="13003.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<li><strong>Previous message:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="12999.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13003.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
<li><strong>Reply:</strong> <a href="13003.php">Nathan Hjelm: "Re: [OMPI devel] neighborhood collectives issues"</a>
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
