<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 03:10:07 2015" -->
<!-- isoreceived="20150831071007" -->
<!-- sent="Mon, 31 Aug 2015 16:10:01 +0900" -->
<!-- isosent="20150831071001" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="55E3FDC9.6000205_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uB39NY8rK81ePuMyGg4EtDR_adfg9cGEwa6MX_c_dJvw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 03:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>i filed PR #845 <a href="https://github.com/open-mpi/ompi/pull/845">https://github.com/open-mpi/ompi/pull/845</a>
<br>
<p>could you please have a look ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/30/2015 9:20 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; ok, will do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basically, I simply have to
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mpi/c/profile/defines.h&quot;
</span><br>
<span class="quotelev1">&gt; if configure set the WANT_MPI_PROFILING macro
</span><br>
<span class="quotelev1">&gt; (since this is an AM_CONDITIONAL, I will have the Makefile.am sets the 
</span><br>
<span class="quotelev1">&gt; CPP flags for the compiler)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; makes sense ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* the patch will be pretty large since all *_f files are impacted, 
</span><br>
<span class="quotelev1">&gt; and for mpif-h only,
</span><br>
<span class="quotelev1">&gt; so i'd rather ask before I fill the pr, and even if a sed command will 
</span><br>
<span class="quotelev1">&gt; do most of the job */
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
<span class="quotelev1">&gt; On Saturday, August 29, 2015, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Aug 27, 2015, at 3:25 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am lost ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Fortran does that to ya.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; from ompi/mpi/fortran/mpif-h/profile/palltoall_f.c
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; void ompi_alltoall_f(char *sendbuf, MPI_Fint *sendcount,
</span><br>
<span class="quotelev1">&gt;     MPI_Fint *sendtype,
</span><br>
<span class="quotelev2">&gt;     &gt;                    char *recvbuf, MPI_Fint *recvcount, MPI_Fint
</span><br>
<span class="quotelev1">&gt;     *recvtype,
</span><br>
<span class="quotelev2">&gt;     &gt;                    MPI_Fint *comm, MPI_Fint *ierr)
</span><br>
<span class="quotelev2">&gt;     &gt; {
</span><br>
<span class="quotelev2">&gt;     &gt;    [...]
</span><br>
<span class="quotelev2">&gt;     &gt;    c_ierr = MPI_Alltoall(sendbuf,
</span><br>
<span class="quotelev2">&gt;     &gt;                          OMPI_FINT_2_INT(*sendcount),
</span><br>
<span class="quotelev2">&gt;     &gt;                          c_sendtype,
</span><br>
<span class="quotelev2">&gt;     &gt;                          recvbuf,
</span><br>
<span class="quotelev2">&gt;     &gt;                          OMPI_FINT_2_INT(*recvcount),
</span><br>
<span class="quotelev2">&gt;     &gt;                          c_recvtype, c_comm);
</span><br>
<span class="quotelev2">&gt;     &gt;    [...]
</span><br>
<span class="quotelev2">&gt;     &gt; }
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; $ nm ompi/mpi/fortran/mpif-h/profile/.libs/palltoall_f.o | grep
</span><br>
<span class="quotelev1">&gt;     MPI_Alltoall
</span><br>
<span class="quotelev2">&gt;     &gt;                 U MPI_Alltoall
</span><br>
<span class="quotelev2">&gt;     &gt; 0000000000000000 W MPI_Alltoall_f
</span><br>
<span class="quotelev2">&gt;     &gt; 0000000000000000 W MPI_Alltoall_f08
</span><br>
<span class="quotelev2">&gt;     &gt; 0000000000000000 W PMPI_Alltoall_f
</span><br>
<span class="quotelev2">&gt;     &gt; 0000000000000000 W PMPI_Alltoall_f08
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ompi_alltoall_f() calls MPI_Alltoall()
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; the &quot;natural&quot; way of writing a tool is to write mpi_alltoall_
</span><br>
<span class="quotelev1">&gt;     (that calls pmpi_alltoall_)
</span><br>
<span class="quotelev2">&gt;     &gt; *and* MPI_Alltoall (that calls PMPI_Alltoall)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sidenote: the only correct way to write a tool that intercepts
</span><br>
<span class="quotelev1">&gt;     Fortran MPI API calls is to write those interceptions *in
</span><br>
<span class="quotelev1">&gt;     Fortran*.  I.e., the tool should provide MPI_ALLTOALL as a Fortran
</span><br>
<span class="quotelev1">&gt;     subroutine.  I realize that this is not the point of what you are
</span><br>
<span class="quotelev1">&gt;     saying :-), but everyone always gets this point wrong, so I feel
</span><br>
<span class="quotelev1">&gt;     the need to keep pointing this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; since ompi_alltoall_f invokes MPI_Alltoall (and not
</span><br>
<span class="quotelev1">&gt;     PMPI_Alltoall), the tool is invoked twice, by both the Fortran and
</span><br>
<span class="quotelev1">&gt;     C wrapper.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I didn't think that this was true, but I just confirmed it by
</span><br>
<span class="quotelev1">&gt;     looking at &quot;gcc -E&quot; output in the mpif-h/profile directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't think that it was the intent.  See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; my initial question was
</span><br>
<span class="quotelev2">&gt;     &gt; &quot;why does ompi_alltoall_f invokes MPI_Alltoall instead of
</span><br>
<span class="quotelev1">&gt;     PMPI_Alltoall ?&quot;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; /* since we share the same source code when building with or
</span><br>
<span class="quotelev1">&gt;     without mpi profiling,
</span><br>
<span class="quotelev2">&gt;     &gt; that means we would need to
</span><br>
<span class="quotelev2">&gt;     &gt; #define MPI_Alltoall PMPI_Alltoall
</span><br>
<span class="quotelev2">&gt;     &gt; when ompi is configure'd with --enable-mpi-profile
</span><br>
<span class="quotelev2">&gt;     &gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm guessing that the complexity in the build system to support
</span><br>
<span class="quotelev1">&gt;     environments without and with weak symbols (i.e., OS X vs. just
</span><br>
<span class="quotelev1">&gt;     about everyone else) have made this get lost over time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can you supply a patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17897.php">http://www.open-mpi.org/community/lists/devel/2015/08/17897.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17899.php">http://www.open-mpi.org/community/lists/devel/2015/08/17899.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17899.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
