<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 06:46:57 2015" -->
<!-- isoreceived="20150831104657" -->
<!-- sent="Mon, 31 Aug 2015 10:46:53 +0000" -->
<!-- isosent="20150831104653" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="7A54B412-992C-45E6-AD76-41911B386E63_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="55E3FDC9.6000205_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-08-31 06:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17902.php">Ralph Castain: "[OMPI devel] Status update: PMIx on master"</a>
<li><strong>Previous message:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet.  Let's followup on that PR.  Thanks!
<br>
<p><span class="quotelev1">&gt; On Aug 31, 2015, at 3:10 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i filed PR #845 <a href="https://github.com/open-mpi/ompi/pull/845">https://github.com/open-mpi/ompi/pull/845</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please have a look ?
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
<span class="quotelev1">&gt; On 8/30/2015 9:20 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ok, will do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; basically, I simply have to
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mpi/c/profile/defines.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; if configure set the WANT_MPI_PROFILING macro
</span><br>
<span class="quotelev2">&gt;&gt; (since this is an AM_CONDITIONAL, I will have the Makefile.am sets the CPP flags for the compiler)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; makes sense ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* the patch will be pretty large since all *_f files are impacted, and for mpif-h only,
</span><br>
<span class="quotelev2">&gt;&gt; so i'd rather ask before I fill the pr, and even if a sed command will do most of the job */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Saturday, August 29, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2015, at 3:25 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am lost ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran does that to ya.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; from ompi/mpi/fortran/mpif-h/profile/palltoall_f.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; void ompi_alltoall_f(char *sendbuf, MPI_Fint *sendcount, MPI_Fint *sendtype,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                    char *recvbuf, MPI_Fint *recvcount, MPI_Fint *recvtype,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                    MPI_Fint *comm, MPI_Fint *ierr)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [...]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    c_ierr = MPI_Alltoall(sendbuf,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                          OMPI_FINT_2_INT(*sendcount),
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                          c_sendtype,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                          recvbuf,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                          OMPI_FINT_2_INT(*recvcount),
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                          c_recvtype, c_comm);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    [...]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ nm ompi/mpi/fortran/mpif-h/profile/.libs/palltoall_f.o | grep MPI_Alltoall
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 U MPI_Alltoall
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0000000000000000 W MPI_Alltoall_f
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0000000000000000 W MPI_Alltoall_f08
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0000000000000000 W PMPI_Alltoall_f
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0000000000000000 W PMPI_Alltoall_f08
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi_alltoall_f() calls MPI_Alltoall()
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the &quot;natural&quot; way of writing a tool is to write mpi_alltoall_ (that calls pmpi_alltoall_)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; *and* MPI_Alltoall (that calls PMPI_Alltoall)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sidenote: the only correct way to write a tool that intercepts Fortran MPI API calls is to write those interceptions *in Fortran*.  I.e., the tool should provide MPI_ALLTOALL as a Fortran subroutine.  I realize that this is not the point of what you are saying :-), but everyone always gets this point wrong, so I feel the need to keep pointing this out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; since ompi_alltoall_f invokes MPI_Alltoall (and not PMPI_Alltoall), the tool is invoked twice, by both the Fortran and C wrapper.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I didn't think that this was true, but I just confirmed it by looking at &quot;gcc -E&quot; output in the mpif-h/profile directory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that it was the intent.  See below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; my initial question was
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;why does ompi_alltoall_f invokes MPI_Alltoall instead of PMPI_Alltoall ?&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* since we share the same source code when building with or without mpi profiling,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that means we would need to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #define MPI_Alltoall PMPI_Alltoall
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when ompi is configure'd with --enable-mpi-profile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing that the complexity in the build system to support environments without and with weak symbols (i.e., OS X vs. just about everyone else) have made this get lost over time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you supply a patch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17897.php">http://www.open-mpi.org/community/lists/devel/2015/08/17897.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17899.php">http://www.open-mpi.org/community/lists/devel/2015/08/17899.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17900.php">http://www.open-mpi.org/community/lists/devel/2015/08/17900.php</a>
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
<li><strong>Next message:</strong> <a href="17902.php">Ralph Castain: "[OMPI devel] Status update: PMIx on master"</a>
<li><strong>Previous message:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17900.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
