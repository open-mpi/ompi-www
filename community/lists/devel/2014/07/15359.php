<?
$subject_val = "Re: [OMPI devel] OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 11:31:56 2014" -->
<!-- isoreceived="20140730153156" -->
<!-- sent="Thu, 31 Jul 2014 00:31:49 +0900" -->
<!-- isosent="20140730153149" -->
<!-- name="Gilles GOUAILLARDET" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="26klsq7octidueog6day6wye.1406733892885_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Gilles GOUAILLARDET (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 11:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15360.php">Rolf vandeVaart: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15358.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will fix this tomorrow
<br>
<p>Right now, --enable-mpi-fortran is --enable-mpi-fortran=yes is --enable-mpi-fortran=all :
<br>
So configure aborts if not all bindings can be built
<br>
<p>In ompi_configure_options.m4 :
<br>
OMPI_FORTRAN_USER_REQUESTED=0
<br>
108	case &quot;x$enable_mpi_fortran&quot; in
<br>
109	    x)
<br>
110	        AC_MSG_RESULT([yes (all/default)])
<br>
111	        OMPI_WANT_FORTRAN_MPIFH_BINDINGS=1
<br>
112	        OMPI_WANT_FORTRAN_USEMPI_BINDINGS=1
<br>
113	        OMPI_WANT_FORTRAN_USEMPIF08_BINDINGS=1
<br>
114	        ;;
<br>
115	
<br>
116	    xyes|xall)
<br>
117	        AC_MSG_RESULT([yes (all)])
<br>
118	        OMPI_FORTRAN_USER_REQUESTED=1
<br>
119	        OMPI_WANT_FORTRAN_MPIFH_BINDINGS=1
<br>
120	        OMPI_WANT_FORTRAN_USEMPI_BINDINGS=1
<br>
121	        OMPI_WANT_FORTRAN_USEMPIF08_BINDINGS=1
<br>
122	        ;;
<br>
<p>OMPI_FORTRAN_USER_REQUESTED=1
<br>
should only happen when xall an not when xyes
<br>
<p>I will review this tomorrow,
<br>
In the mean time, feel free to revert the changeset or simply not use the --enable-mpi-fortran for now
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Umm....this really broke things now. I can't build the fortran bindings at all, and I don't have a PGI compiler. I also didn't specify a level of Fortran support, but just had --enable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Maybe we need to revert this commit until we figure out a better solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 30, 2014, at 12:16 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this is a fair point.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i commited r32354 in order to abort configure in this case
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
<span class="quotelev2">&gt;&gt; On 2014/07/30 15:11, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On a related topic:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I configured with an explicit --enable-mpi-fortran=usempif08.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then configure found PROCEDURE was missing/broken.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result is that the build continued, but without the requested f08
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the user has explicitly enabled a given level of Fortran support, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot be provided, shouldn't this be a configure-time error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15352.php">http://www.open-mpi.org/community/lists/devel/2014/07/15352.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15357.php">http://www.open-mpi.org/community/lists/devel/2014/07/15357.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15360.php">Rolf vandeVaart: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15358.php">Nathan Hjelm: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
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
