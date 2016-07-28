<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  9 22:38:35 2008" -->
<!-- isoreceived="20081110033835" -->
<!-- sent="Mon, 10 Nov 2008 12:38:30 +0900" -->
<!-- isosent="20081110033830" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="4917ACB6.4010009_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200811071411.41027.slug_at_aeminium.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI programs with autoconf/automake?<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-09 22:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>In reply to:</strong> <a href="7240.php">Nuno Sucena Almeida: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nuno,
<br>
<p>Thank you for the link and your update to it.  I definitely don't mind 
<br>
that it isn't &quot;pretty&quot;!  :-)
<br>
<p>Since your post, I've been trying to understand it and how to work it 
<br>
in.  But, I think I've been making some progress over the weekend.
<br>
<p>Thank you!
<br>
<p>Ray
<br>
<p><p><p>Nuno Sucena Almeida wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 	see if this macro solves your problem:
</span><br>
<span class="quotelev1">&gt; 	<a href="http://autoconf-archive.cryp.to/acx_mpi.html">http://autoconf-archive.cryp.to/acx_mpi.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	it requires some improvement, but might be a start. Since I only have OpenMPI 
</span><br>
<span class="quotelev1">&gt; I use it in the following way(it's not pretty):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure.ac:
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; dnl Check for MPI
</span><br>
<span class="quotelev1">&gt; dnl This check will set the MPICC and MPICXX variables to the MPI compiler 
</span><br>
<span class="quotelev1">&gt; ones
</span><br>
<span class="quotelev1">&gt; dnl if the library is found, or to the regular compilers if not.
</span><br>
<span class="quotelev1">&gt; AC_ARG_WITH(mpi, [AC_HELP_STRING([--with-mpi],
</span><br>
<span class="quotelev1">&gt;                  [enable MPI support [default=yes]])],
</span><br>
<span class="quotelev1">&gt;                  [case &quot;${withval}&quot; in
</span><br>
<span class="quotelev1">&gt;                        yes|no) with_mpi=$withval;;
</span><br>
<span class="quotelev1">&gt;                        *)
</span><br>
<span class="quotelev1">&gt;                        AC_MSG_ERROR(bad value ${withval} for --with-mpi);;
</span><br>
<span class="quotelev1">&gt;                   esac],
</span><br>
<span class="quotelev1">&gt;                  [with_mpi=yes])
</span><br>
<span class="quotelev1">&gt; if test &quot;x$with_mpi&quot; = &quot;xyes&quot;; then
</span><br>
<span class="quotelev1">&gt;         ACX_MPI([], [AC_MSG_ERROR(could not find mpi library for --with-mpi)])
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE(HAVE_MPI)
</span><br>
<span class="quotelev1">&gt;         MPI_CXXLIBS=`mpicxx --showme:link`
</span><br>
<span class="quotelev1">&gt;         MPI_CXXFLAGS=`mpicxx --showme:compile`
</span><br>
<span class="quotelev1">&gt;         AC_SUBST(MPI_CXXLIBS)
</span><br>
<span class="quotelev1">&gt;         AC_SUBST(MPI_CXXFLAGS)
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;   MPICC=&quot;$CC&quot;
</span><br>
<span class="quotelev1">&gt;   MPICXX=&quot;$CXX&quot;
</span><br>
<span class="quotelev1">&gt;   AC_SUBST(MPICC)
</span><br>
<span class="quotelev1">&gt;   AC_SUBST(MPICXX)
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL([WE_HAVE_MPI],[test &quot;x$with_mpi&quot; = &quot;xyes&quot;])
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Makefile.am:
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; # MPI headers/libraries:
</span><br>
<span class="quotelev1">&gt; INCLUDES+=$(MPI_CXXFLAGS)
</span><br>
<span class="quotelev1">&gt; OTHERLIBS+=$(MPI_CXXLIBS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; etc
</span><br>
<span class="quotelev1">&gt; I would start by improving the mentioned macro with specific support for each 
</span><br>
<span class="quotelev1">&gt; MPI implementation...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 			Nuno
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday 06 November 2008 06:35:33 am Raymond Wan wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if this is relevant to this mailing list, but I'm trying to
</span><br>
<span class="quotelev2">&gt;&gt; get autoconf/automake working with an Open MPI program I am writing (in
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>In reply to:</strong> <a href="7240.php">Nuno Sucena Almeida: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
