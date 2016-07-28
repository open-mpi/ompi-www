<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  7 14:05:32 2013" -->
<!-- isoreceived="20130907180532" -->
<!-- sent="Sat, 07 Sep 2013 11:05:25 -0700" -->
<!-- isosent="20130907180525" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378577125.3607.8.camel_at_cedar.reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1378563395.2085.19076249.6B88877A_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-07 14:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22620.php">basma a.azeem: "[OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>Previous message:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What Fortran compiler is your OpenMPI build with?  Some fortran's don't
<br>
understand MPI_IN_PLACE.  Do a 'fortran MPI_IN_PLACE' search to see
<br>
several instances.
<br>
<p>T. Rosmond
<br>
<p><p><p>On Sat, 2013-09-07 at 10:16 -0400, Hugo Gagnon wrote:
<br>
<span class="quotelev1">&gt; Nope, no luck.  My environment is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5
</span><br>
<span class="quotelev1">&gt; gcc 4.8.1
</span><br>
<span class="quotelev1">&gt; Mac OS 10.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found a ticket reporting a similar problem on OS X:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1982">https://svn.open-mpi.org/trac/ompi/ticket/1982</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It said to make sure $prefix/share/ompi/mpif90-wrapper-data.txt had the
</span><br>
<span class="quotelev1">&gt; following line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiler_flags=-Wl,-commons,use_dylibs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked mine and it does (I even tried to include it explicitly on the
</span><br>
<span class="quotelev1">&gt; command line but without success), what should I do next?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22620.php">basma a.azeem: "[OMPI users] linker library file for both fortran and c compilers"</a>
<li><strong>Previous message:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
