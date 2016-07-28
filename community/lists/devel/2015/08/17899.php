<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 30 08:20:15 2015" -->
<!-- isoreceived="20150830122015" -->
<!-- sent="Sun, 30 Aug 2015 21:20:13 +0900" -->
<!-- isosent="20150830122013" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="CAAkFZ5uB39NY8rK81ePuMyGg4EtDR_adfg9cGEwa6MX_c_dJvw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D50DC5F-839B-4389-8C30-40F8961F6BC7_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-30 08:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>In reply to:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, will do
<br>
<p>basically, I simply have to
<br>
#include &quot;ompi/mpi/c/profile/defines.h&quot;
<br>
if configure set the WANT_MPI_PROFILING macro
<br>
(since this is an AM_CONDITIONAL, I will have the Makefile.am sets the CPP
<br>
flags for the compiler)
<br>
<p>makes sense ?
<br>
<p>/* the patch will be pretty large since all *_f files are impacted, and for
<br>
mpif-h only,
<br>
so i'd rather ask before I fill the pr, and even if a sed command will do
<br>
most of the job */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, August 29, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 27, 2015, at 3:25 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am lost ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortran does that to ya.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; from ompi/mpi/fortran/mpif-h/profile/palltoall_f.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void ompi_alltoall_f(char *sendbuf, MPI_Fint *sendcount, MPI_Fint
</span><br>
<span class="quotelev1">&gt; *sendtype,
</span><br>
<span class="quotelev2">&gt; &gt;                    char *recvbuf, MPI_Fint *recvcount, MPI_Fint
</span><br>
<span class="quotelev1">&gt; *recvtype,
</span><br>
<span class="quotelev2">&gt; &gt;                    MPI_Fint *comm, MPI_Fint *ierr)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    [...]
</span><br>
<span class="quotelev2">&gt; &gt;    c_ierr = MPI_Alltoall(sendbuf,
</span><br>
<span class="quotelev2">&gt; &gt;                          OMPI_FINT_2_INT(*sendcount),
</span><br>
<span class="quotelev2">&gt; &gt;                          c_sendtype,
</span><br>
<span class="quotelev2">&gt; &gt;                          recvbuf,
</span><br>
<span class="quotelev2">&gt; &gt;                          OMPI_FINT_2_INT(*recvcount),
</span><br>
<span class="quotelev2">&gt; &gt;                          c_recvtype, c_comm);
</span><br>
<span class="quotelev2">&gt; &gt;    [...]
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ nm ompi/mpi/fortran/mpif-h/profile/.libs/palltoall_f.o | grep
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall
</span><br>
<span class="quotelev2">&gt; &gt;                 U MPI_Alltoall
</span><br>
<span class="quotelev2">&gt; &gt; 0000000000000000 W MPI_Alltoall_f
</span><br>
<span class="quotelev2">&gt; &gt; 0000000000000000 W MPI_Alltoall_f08
</span><br>
<span class="quotelev2">&gt; &gt; 0000000000000000 W PMPI_Alltoall_f
</span><br>
<span class="quotelev2">&gt; &gt; 0000000000000000 W PMPI_Alltoall_f08
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_alltoall_f() calls MPI_Alltoall()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the &quot;natural&quot; way of writing a tool is to write mpi_alltoall_ (that
</span><br>
<span class="quotelev1">&gt; calls pmpi_alltoall_)
</span><br>
<span class="quotelev2">&gt; &gt; *and* MPI_Alltoall (that calls PMPI_Alltoall)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: the only correct way to write a tool that intercepts Fortran MPI
</span><br>
<span class="quotelev1">&gt; API calls is to write those interceptions *in Fortran*.  I.e., the tool
</span><br>
<span class="quotelev1">&gt; should provide MPI_ALLTOALL as a Fortran subroutine.  I realize that this
</span><br>
<span class="quotelev1">&gt; is not the point of what you are saying :-), but everyone always gets this
</span><br>
<span class="quotelev1">&gt; point wrong, so I feel the need to keep pointing this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; since ompi_alltoall_f invokes MPI_Alltoall (and not PMPI_Alltoall), the
</span><br>
<span class="quotelev1">&gt; tool is invoked twice, by both the Fortran and C wrapper.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't think that this was true, but I just confirmed it by looking at
</span><br>
<span class="quotelev1">&gt; &quot;gcc -E&quot; output in the mpif-h/profile directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think that it was the intent.  See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; my initial question was
</span><br>
<span class="quotelev2">&gt; &gt; &quot;why does ompi_alltoall_f invokes MPI_Alltoall instead of PMPI_Alltoall
</span><br>
<span class="quotelev1">&gt; ?&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* since we share the same source code when building with or without mpi
</span><br>
<span class="quotelev1">&gt; profiling,
</span><br>
<span class="quotelev2">&gt; &gt; that means we would need to
</span><br>
<span class="quotelev2">&gt; &gt; #define MPI_Alltoall PMPI_Alltoall
</span><br>
<span class="quotelev2">&gt; &gt; when ompi is configure'd with --enable-mpi-profile
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that the complexity in the build system to support
</span><br>
<span class="quotelev1">&gt; environments without and with weak symbols (i.e., OS X vs. just about
</span><br>
<span class="quotelev1">&gt; everyone else) have made this get lost over time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you supply a patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17897.php">http://www.open-mpi.org/community/lists/devel/2015/08/17897.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17898.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pgi and fortran in master"</a>
<li><strong>In reply to:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
