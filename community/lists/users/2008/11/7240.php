<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 14:12:00 2008" -->
<!-- isoreceived="20081107191200" -->
<!-- sent="Fri, 7 Nov 2008 14:11:40 -0500" -->
<!-- isosent="20081107191140" -->
<!-- name="Nuno Sucena Almeida" -->
<!-- email="slug_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="200811071411.41027.slug_at_aeminium.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4912D685.505_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>From:</strong> Nuno Sucena Almeida (<em>slug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 14:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7241.php">George Bosilca: "Re: [OMPI users] Restore MPI Communicator"</a>
<li><strong>Previous message:</strong> <a href="7239.php">Santolo Felaco: "[OMPI users] Restore MPI Communicator"</a>
<li><strong>In reply to:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;see if this macro solves your problem:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://autoconf-archive.cryp.to/acx_mpi.html">http://autoconf-archive.cryp.to/acx_mpi.html</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it requires some improvement, but might be a start. Since I only have OpenMPI 
<br>
I use it in the following way(it's not pretty):
<br>
<p>configure.ac:
<br>
(...)
<br>
dnl Check for MPI
<br>
dnl This check will set the MPICC and MPICXX variables to the MPI compiler 
<br>
ones
<br>
dnl if the library is found, or to the regular compilers if not.
<br>
AC_ARG_WITH(mpi, [AC_HELP_STRING([--with-mpi],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[enable MPI support [default=yes]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[case &quot;${withval}&quot; in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yes|no) with_mpi=$withval;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR(bad value ${withval} for --with-mpi);;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[with_mpi=yes])
<br>
if test &quot;x$with_mpi&quot; = &quot;xyes&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACX_MPI([], [AC_MSG_ERROR(could not find mpi library for --with-mpi)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(HAVE_MPI)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CXXLIBS=`mpicxx --showme:link`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CXXFLAGS=`mpicxx --showme:compile`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SUBST(MPI_CXXLIBS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SUBST(MPI_CXXFLAGS)
<br>
else
<br>
&nbsp;&nbsp;MPICC=&quot;$CC&quot;
<br>
&nbsp;&nbsp;MPICXX=&quot;$CXX&quot;
<br>
&nbsp;&nbsp;AC_SUBST(MPICC)
<br>
&nbsp;&nbsp;AC_SUBST(MPICXX)
<br>
fi
<br>
AM_CONDITIONAL([WE_HAVE_MPI],[test &quot;x$with_mpi&quot; = &quot;xyes&quot;])
<br>
(...)
<br>
<p><p>Makefile.am:
<br>
(...)
<br>
# MPI headers/libraries:
<br>
INCLUDES+=$(MPI_CXXFLAGS)
<br>
OTHERLIBS+=$(MPI_CXXLIBS)
<br>
<p><p>etc
<br>
I would start by improving the mentioned macro with specific support for each 
<br>
MPI implementation...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuno
<br>
<p>On Thursday 06 November 2008 06:35:33 am Raymond Wan wrote:
<br>
<span class="quotelev1">&gt; I'm not sure if this is relevant to this mailing list, but I'm trying to
</span><br>
<span class="quotelev1">&gt; get autoconf/automake working with an Open MPI program I am writing (in
</span><br>
<p><pre>
-- 
<a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7241.php">George Bosilca: "Re: [OMPI users] Restore MPI Communicator"</a>
<li><strong>Previous message:</strong> <a href="7239.php">Santolo Felaco: "[OMPI users] Restore MPI Communicator"</a>
<li><strong>In reply to:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
