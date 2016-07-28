<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 29 08:23:01 2015" -->
<!-- isoreceived="20150829122301" -->
<!-- sent="Sat, 29 Aug 2015 12:22:59 +0000" -->
<!-- isosent="20150829122259" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="4D50DC5F-839B-4389-8C30-40F8961F6BC7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55DEBB5C.80908_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-29 08:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Previous message:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2015, at 3:25 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am lost ...
</span><br>
<p>Fortran does that to ya.  ;-)
<br>
<p><span class="quotelev1">&gt; from ompi/mpi/fortran/mpif-h/profile/palltoall_f.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void ompi_alltoall_f(char *sendbuf, MPI_Fint *sendcount, MPI_Fint *sendtype,
</span><br>
<span class="quotelev1">&gt;                    char *recvbuf, MPI_Fint *recvcount, MPI_Fint *recvtype,
</span><br>
<span class="quotelev1">&gt;                    MPI_Fint *comm, MPI_Fint *ierr)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    [...]
</span><br>
<span class="quotelev1">&gt;    c_ierr = MPI_Alltoall(sendbuf,
</span><br>
<span class="quotelev1">&gt;                          OMPI_FINT_2_INT(*sendcount),
</span><br>
<span class="quotelev1">&gt;                          c_sendtype,
</span><br>
<span class="quotelev1">&gt;                          recvbuf,
</span><br>
<span class="quotelev1">&gt;                          OMPI_FINT_2_INT(*recvcount),
</span><br>
<span class="quotelev1">&gt;                          c_recvtype, c_comm);
</span><br>
<span class="quotelev1">&gt;    [...]
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm ompi/mpi/fortran/mpif-h/profile/.libs/palltoall_f.o | grep MPI_Alltoall
</span><br>
<span class="quotelev1">&gt;                 U MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; 0000000000000000 W MPI_Alltoall_f
</span><br>
<span class="quotelev1">&gt; 0000000000000000 W MPI_Alltoall_f08
</span><br>
<span class="quotelev1">&gt; 0000000000000000 W PMPI_Alltoall_f
</span><br>
<span class="quotelev1">&gt; 0000000000000000 W PMPI_Alltoall_f08
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_alltoall_f() calls MPI_Alltoall()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the &quot;natural&quot; way of writing a tool is to write mpi_alltoall_ (that calls pmpi_alltoall_)
</span><br>
<span class="quotelev1">&gt; *and* MPI_Alltoall (that calls PMPI_Alltoall)
</span><br>
<p>Sidenote: the only correct way to write a tool that intercepts Fortran MPI API calls is to write those interceptions *in Fortran*.  I.e., the tool should provide MPI_ALLTOALL as a Fortran subroutine.  I realize that this is not the point of what you are saying :-), but everyone always gets this point wrong, so I feel the need to keep pointing this out.
<br>
<p><span class="quotelev1">&gt; since ompi_alltoall_f invokes MPI_Alltoall (and not PMPI_Alltoall), the tool is invoked twice, by both the Fortran and C wrapper.
</span><br>
<p>I didn't think that this was true, but I just confirmed it by looking at &quot;gcc -E&quot; output in the mpif-h/profile directory.
<br>
<p>I don't think that it was the intent.  See below.
<br>
<p><span class="quotelev1">&gt; my initial question was
</span><br>
<span class="quotelev1">&gt; &quot;why does ompi_alltoall_f invokes MPI_Alltoall instead of PMPI_Alltoall ?&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* since we share the same source code when building with or without mpi profiling,
</span><br>
<span class="quotelev1">&gt; that means we would need to
</span><br>
<span class="quotelev1">&gt; #define MPI_Alltoall PMPI_Alltoall
</span><br>
<span class="quotelev1">&gt; when ompi is configure'd with --enable-mpi-profile
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<p>I'm guessing that the complexity in the build system to support environments without and with weak symbols (i.e., OS X vs. just about everyone else) have made this get lost over time.
<br>
<p>Can you supply a patch?
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
<li><strong>Next message:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>Previous message:</strong> <a href="17896.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
