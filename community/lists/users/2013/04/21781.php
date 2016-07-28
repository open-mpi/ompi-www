<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 10:47:17 2013" -->
<!-- isoreceived="20130424144717" -->
<!-- sent="Wed, 24 Apr 2013 08:47:12 -0600" -->
<!-- isosent="20130424144712" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="20130424144712.GD98728_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="a90ed175eb9055b4e17a324fca1d67b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI at scale on Cray XK7<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 10:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 24, 2013 at 05:01:43PM +0400, Derbunovich Andrei wrote:
<br>
<span class="quotelev1">&gt; Thank you to everybody for suggestions and comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have used relatively small number of nodes (4400). It looks like that
</span><br>
<span class="quotelev1">&gt; the main issue that I didn't disable dynamic components opening in my
</span><br>
<span class="quotelev1">&gt; openmpi build while keeping MPI installation directory on network file
</span><br>
<span class="quotelev1">&gt; system. Oh my god!
</span><br>
<p>Yup, that would do it. Cray does static linking of their binaries for a reason. As Ralph suggests take a look at the LANL platform files. You will probably want to compile your app with -static or modify Open MPI's wrapper compilers to always link statically against the libraries needed for MPI. For example
<br>
<p>in prefix/share/openmpi/mpicc-wrapper-data.txt (mpicxx, mpif90) modify this line:
<br>
libs=-lmpi
<br>
<p>to read:
<br>
libs=-Wl,-Bstatic libs from libs_static-Wl,-Bdynamic
<br>
<p>Ex:
<br>
libs=-lmpi
<br>
libs_static=-lmpi -lopen-rte -lopen-pal -lm -lnuma -lpmi -lalpslli -lalpsutil -lugni -lxpmem -lrt -lnsl -lutil 
<br>
<p>Becomes:
<br>
libs=-Wl,-Bstatic -lmpi -lopen-rte -lopen-pal -lm -lnuma -lpmi -lalpslli -lalpsutil -lugni -lxpmem -lrt -lnsl -lutil -Wl,-Bdynamic
<br>
libs_static=-lmpi -lopen-rte -lopen-pal -lm -lnuma -lpmi -lalpslli -lalpsutil -lugni -lxpmem -lrt -lnsl -lutil 
<br>
<p><p>This will cause your application to link statically against mpi, ugni, xpmem, etc.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
